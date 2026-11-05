#!/usr/bin/env python3
"""
Master Deployment Script: Publishes all enterprise pages & menus into Odoo
Target: https://novaraiseet.odoo.com
"""

import re
import os
import xmlrpc.client

URL = 'https://novaraiseet.odoo.com'
DB = 'novaraiseet'
EMAIL = 'habeshaninfo@gmail.com'
PWD = '69bBAcr4ZWBmTWx'
CDN_BASE = 'https://raw.githubusercontent.com/danibest212/novaraise-website/main/novaraise_website/static/src/img'

print(f"[*] Authenticating with Odoo at {URL} (DB: {DB})...")
common = xmlrpc.client.ServerProxy(f'{URL}/xmlrpc/2/common')
uid = common.authenticate(DB, EMAIL, PWD, {})
if not uid:
    print("[X] Failed to authenticate with Odoo.")
    exit(1)
print(f"[✓] Successfully authenticated as UID: {uid}!")

models = xmlrpc.client.ServerProxy(f'{URL}/xmlrpc/2/object')

# Fetch website ID
website_ids = models.execute_kw(DB, uid, PWD, 'website', 'search', [[]])
website_id = website_ids[0] if website_ids else False
print(f"[✓] Using Website ID: {website_id}")

PAGES_CONFIG = [
    {
        'name': 'Home',
        'url': '/',
        'key': 'website.homepage',
        'is_homepage': True,
        'src': 'novaraise_odoo/novaraise_website/views/page_home.xml',
    },
    {
        'name': 'Enterprise ERP',
        'url': '/erp',
        'key': 'website.novaraise_erp',
        'is_homepage': False,
        'src': 'novaraise_odoo/novaraise_website/views/page_erp.xml',
    },
    {
        'name': 'Sovereign MLM OS',
        'url': '/mlm',
        'key': 'website.novaraise_mlm',
        'is_homepage': False,
        'src': 'novaraise_odoo/novaraise_website/views/page_mlm.xml',
    },
    {
        'name': 'On-Demand Apps',
        'url': '/on-demand',
        'key': 'website.novaraise_on_demand',
        'is_homepage': False,
        'src': 'novaraise_odoo/novaraise_website/views/page_on_demand.xml',
    },
    {
        'name': 'Custom Software',
        'url': '/custom-software',
        'key': 'website.novaraise_custom_software',
        'is_homepage': False,
        'src': 'novaraise_odoo/novaraise_website/views/page_custom_software.xml',
    },
    {
        'name': 'Nova Academy',
        'url': '/academy',
        'key': 'website.novaraise_academy',
        'is_homepage': False,
        'src': 'novaraise_odoo/novaraise_website/views/page_academy.xml',
    },
]

print("\n[*] Publishing all 6 Enterprise Pages into Odoo...")

for p in PAGES_CONFIG:
    with open(p['src'], 'r', encoding='utf-8') as f:
        xml_data = f.read()

    # Extract inner body inside <t t-call="novaraise_website.layout"> ... </t>
    m = re.search(r'<t t-call=\"novaraise_website\.layout\">([\s\S]*?)</t>\s*</template>', xml_data)
    inner_body = m.group(1) if m else xml_data

    # Replace local image paths with GitHub CDN URLs
    inner_body = inner_body.replace('/novaraise_website/static/src/img', CDN_BASE)
    inner_body = re.sub(r'(src|href)=["\']images/([^"\']+)["\']', rf'\1="{CDN_BASE}/\2"', inner_body)

    # Wrap in standard Odoo QWeb view arch
    arch = f"""<t name="{p['name']}" t-name="{p['key']}">
    <t t-call="website.layout">
        <div id="wrap" class="oe_structure oe_empty bg-brand-obsidian text-slate-200 antialiased selection:bg-brand-interactive selection:text-black">
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;600;700;800&amp;family=Manrope:wght@600;700;800&amp;display=swap" />
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="https://unpkg.com/lucide@latest"></script>
            <script>
                tailwind.config = {{
                  theme: {{
                    extend: {{
                      colors: {{
                        brand: {{
                          obsidian: '#050814',
                          navyDark: '#080E1E',
                          navySurface: '#0E172B',
                          navyCard: '#131F3B',
                          primary: '#0057D9',
                          interactive: '#0096E6',
                          accent: '#38BDF8',
                          emerald: '#10B981',
                          emeraldDark: '#064E3B',
                          gold: '#F59E0B',
                          borderDark: 'rgba(255, 255, 255, 0.08)',
                          borderHighlight: 'rgba(56, 189, 248, 0.3)',
                        }}
                      }},
                      fontFamily: {{
                        heading: ['Space Grotesk', 'Manrope', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                      }}
                    }}
                  }}
                }};
            </script>
            {inner_body}
            <script>
                if (window.lucide) {{
                    lucide.createIcons();
                }}
            </script>
        </div>
    </t>
</t>"""

    # Look for existing page record
    existing = models.execute_kw(
        DB, uid, PWD,
        'website.page', 'search_read',
        [[('url', '=', p['url'])]],
        {'fields': ['id', 'view_id', 'name', 'url']}
    )

    if existing:
        page_id = existing[0]['id']
        view_id = existing[0]['view_id'][0] if existing[0].get('view_id') else False
        print(f"  [UPDATE] Page {p['name']} ({p['url']}) -> Page ID: {page_id}, View ID: {view_id}")
        if view_id:
            models.execute_kw(DB, uid, PWD, 'ir.ui.view', 'write', [[view_id], {'arch': arch}])
        models.execute_kw(DB, uid, PWD, 'website.page', 'write', [[page_id], {
            'is_published': True,
            'website_published': True,
        }])
    else:
        print(f"  [CREATE] Creating new Page {p['name']} ({p['url']})...")
        view_id = models.execute_kw(DB, uid, PWD, 'ir.ui.view', 'create', [{
            'name': p['name'],
            'type': 'qweb',
            'key': p['key'],
            'arch': arch,
        }])
        page_id = models.execute_kw(DB, uid, PWD, 'website.page', 'create', [{
            'name': p['name'],
            'url': p['url'],
            'view_id': view_id,
            'website_id': website_id,
            'is_published': True,
            'website_published': True,
        }])
        print(f"    -> Created Page ID: {page_id}")

print("\n[*] Updating Top Navigation Menus in Odoo...")

# Check parent menu
parent_menu_id = 3 # Top Menu for Website 1
NAV_MENUS = [
    {'name': 'Enterprise ERP', 'url': '/erp', 'sequence': 10},
    {'name': 'MLM SuperApp', 'url': '/mlm', 'sequence': 20},
    {'name': 'On-Demand Apps', 'url': '/on-demand', 'sequence': 30},
    {'name': 'Custom Dev', 'url': '/custom-software', 'sequence': 40},
    {'name': 'Nova Academy', 'url': '/academy', 'sequence': 50},
]

for item in NAV_MENUS:
    existing_menu = models.execute_kw(
        DB, uid, PWD,
        'website.menu', 'search_read',
        [[('url', '=', item['url']), ('parent_id', '=', parent_menu_id)]],
        {'fields': ['id', 'name', 'url']}
    )
    if existing_menu:
        print(f"  [MENU] Menu {item['name']} already exists (ID: {existing_menu[0]['id']})")
    else:
        menu_id = models.execute_kw(DB, uid, PWD, 'website.menu', 'create', [{
            'name': item['name'],
            'url': item['url'],
            'parent_id': parent_menu_id,
            'sequence': item['sequence'],
            'website_id': website_id,
        }])
        print(f"  [MENU] Created menu {item['name']} -> ID: {menu_id}")

print("\n[✓] ALL 6 ENTERPRISE PAGES & MENUS DEPLOYED AND PUBLISHED SUCCESSFULLY!")
