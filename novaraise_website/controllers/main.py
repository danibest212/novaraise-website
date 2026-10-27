# -*- coding: utf-8 -*-
import json
from odoo import http
from odoo.http import request

class NovaraiseWebsiteController(http.Controller):

    @http.route(['/', '/home'], type='http', auth='public', website=True, sitemap=True)
    def home_page(self, **kw):
        return request.render('novaraise_website.page_home', {})

    @http.route('/erp', type='http', auth='public', website=True, sitemap=True)
    def erp_page(self, **kw):
        return request.render('novaraise_website.page_erp', {})

    @http.route('/mlm', type='http', auth='public', website=True, sitemap=True)
    def mlm_page(self, **kw):
        return request.render('novaraise_website.page_mlm', {})

    @http.route('/on-demand', type='http', auth='public', website=True, sitemap=True)
    def on_demand_page(self, **kw):
        return request.render('novaraise_website.page_on_demand', {})

    @http.route('/custom-software', type='http', auth='public', website=True, sitemap=True)
    def custom_software_page(self, **kw):
        return request.render('novaraise_website.page_custom_software', {})

    @http.route('/academy', type='http', auth='public', website=True, sitemap=True)
    def academy_page(self, **kw):
        return request.render('novaraise_website.page_academy', {})

    @http.route('/novaraise/submit_lead', type='http', auth='public', methods=['POST'], csrf=False)
    def submit_lead(self, **post):
        company = post.get('company', '').strip()
        phone = post.get('phone', '').strip()
        scope = post.get('scope', 'General Inquiry').strip()
        timeline = post.get('timeline', '').strip()

        if not company or not phone:
            return request.make_response(
                json.dumps({'status': 'error', 'message': 'Company name and phone number are required.'}),
                headers=[('Content-Type', 'application/json')]
            )

        request.env['novaraise.inquiry'].sudo().create({
            'name': company,
            'phone': phone,
            'scope': scope,
            'requirements': timeline,
        })

        return request.make_response(
            json.dumps({'status': 'success', 'message': 'Inquiry registered in Novarise CRM.'}),
            headers=[('Content-Type', 'application/json')]
        )
