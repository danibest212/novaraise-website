# -*- coding: utf-8 -*-
{
    'name': 'Novarise Enterprise Website',
    'version': '18.0.1.0.0',
    'summary': 'Official high-performance enterprise portal for novaraise.et — MoR Tax ERP, MLM OS, Turnkey Solutions, Custom Dev & Academy',
    'description': """
Novarise Enterprise Web Platform (novaraise.et)
==============================================
Designed for deployment on Odoo.sh (1 App, 1 User or Enterprise Cluster).
- 100% Ethiopian Statutory ERP Showcase (MoR WHT 2%/3%, Ge'ez Calendar, Telebirr & CBE)
- Sovereign MLM Operating System with Binary Tree Genealogies & Compensation Simulator
- Turnkey Industry Applications (Telegram Mini Apps, Ride Hailing, Multi-Vendor Marketplace, Equb OS)
- Custom Engineering Tracks & Nova Academy
- Built-in In-Database Lead Capture Dashboard without requiring extra paid apps
    """,
    'category': 'Website/Theme',
    'author': 'Novarise Digital Solution PLC',
    'website': 'https://novaraise.et',
    'license': 'OPL-1',
    'depends': ['website'],
    'data': [
        'security/ir.model.access.csv',
        'views/inquiry_views.xml',
        'views/layout.xml',
        'views/page_home.xml',
        'views/page_erp.xml',
        'views/page_mlm.xml',
        'views/page_on_demand.xml',
        'views/page_custom_software.xml',
        'views/page_academy.xml',
    ],
    'assets': {
        'web.assets_frontend': [
            # Google Fonts & Tailwind CDN handled in layout for maximum high-tech fidelity
        ],
    },
    'installable': True,
    'application': True,
    'auto_install': False,
}
