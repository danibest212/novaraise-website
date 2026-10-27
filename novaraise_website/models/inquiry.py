# -*- coding: utf-8 -*-
from odoo import models, fields, api

class NovaraiseInquiry(models.Model):
    _name = 'novaraise.inquiry'
    _description = 'Novarise Enterprise Website Inquiry'
    _order = 'id desc'

    name = fields.Char(string='Company Name', required=True)
    phone = fields.Char(string='Contact Phone Number', required=True)
    scope = fields.Char(string='Project Scope / Platform', default='General Enterprise Scoping')
    requirements = fields.Text(string='Requirements & Timeline')
    date_submitted = fields.Datetime(string='Submitted On', default=fields.Datetime.now)
    state = fields.Selection([
        ('new', 'New Lead'),
        ('contacted', 'Contacted / Discovery'),
        ('qualified', 'Qualified Proposal'),
        ('closed', 'Closed Won / Deployed'),
    ], string='Status', default='new')
