<?php
/**
 * Footer Template
 *
 * @package NovaDigital
 */
?>
  <!-- ========================================================================= -->
  <!-- 9. ENTERPRISE FOOTER                                                      -->
  <!-- ========================================================================= -->
  <footer class="bg-[#02040A] text-slate-400 pt-20 pb-12 border-t border-slate-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-16 border-b border-slate-800/80">
        
        <!-- Company Identity -->
        <div class="lg:col-span-2 space-y-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-primary to-brand-interactive flex items-center justify-center text-white font-bold text-xl shadow-md">
              <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="4 20 4 4 14 14 14 4"></polyline>
                <polyline points="14 10 20 4 20 10"></polyline>
              </svg>
            </div>
            <div class="flex flex-col">
              <span class="font-extrabold text-xl tracking-tight text-white font-heading">NOVARISE DIGITAL</span>
              <span class="text-[10px] tracking-wider text-slate-400 uppercase font-mono font-medium">Enterprise Software Engineering PLC</span>
            </div>
          </div>
          
          <p class="text-sm text-slate-400 max-w-sm leading-relaxed">
            Novarise Digital Solution PLC is Ethiopia's premier enterprise software engineering firm. Creator of sovereign MLM super-apps, 100% MoR-compliant ERP systems, and turnkey ready-made digital platforms.
          </p>

          <div class="text-xs text-slate-400 font-mono space-y-1.5 pt-2">
            <div>📍 Headquarters: Bole Sub-City, Addis Ababa, Ethiopia</div>
            <div>📞 Direct Desk: +251 911 000000 / +251 911 223344</div>
            <div>✉️ enterprise@novaraise.et | dev@novaraise.et</div>
          </div>
        </div>

        <!-- Solutions -->
        <div class="space-y-3 font-mono text-xs">
          <h4 class="text-white font-bold uppercase tracking-wider text-xs font-sans">Platforms</h4>
          <ul class="space-y-2.5 text-slate-400">
            <li><a href="<?php echo esc_url( home_url( '/erp/' ) ); ?>" class="hover:text-brand-interactive transition-colors">Nova Enterprise ERP (MoR)</a></li>
            <li><a href="<?php echo esc_url( home_url( '/mlm/' ) ); ?>" class="hover:text-emerald-400 transition-colors">MLM Sovereign OS</a></li>
            <li><a href="<?php echo esc_url( home_url( '/on-demand/' ) ); ?>" class="hover:text-white transition-colors">Telegram E-Commerce Bots</a></li>
            <li><a href="<?php echo esc_url( home_url( '/on-demand/' ) ); ?>" class="hover:text-white transition-colors">Ride-Hailing &amp; Cargo Stack</a></li>
            <li><a href="<?php echo esc_url( home_url( '/on-demand/' ) ); ?>" class="hover:text-white transition-colors">Digital Equb &amp; SACCO OS</a></li>
            <li><a href="<?php echo esc_url( home_url( '/custom-software/' ) ); ?>" class="hover:text-white transition-colors">Custom Flutter &amp; Web Apps</a></li>
          </ul>
        </div>

        <!-- Capability & Academy -->
        <div class="space-y-3 font-mono text-xs">
          <h4 class="text-white font-bold uppercase tracking-wider text-xs font-sans">Academy &amp; SLA</h4>
          <ul class="space-y-2.5 text-slate-400">
            <li><a href="<?php echo esc_url( home_url( '/academy/' ) ); ?>" class="hover:text-white transition-colors">Certified Odoo ERP Track</a></li>
            <li><a href="<?php echo esc_url( home_url( '/academy/' ) ); ?>" class="hover:text-white transition-colors">Executive AI Masterclasses</a></li>
            <li><a href="<?php echo esc_url( home_url( '/academy/' ) ); ?>" class="hover:text-white transition-colors">B2B Tech Sales Bootcamp</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#architecture' ) ); ?>" class="hover:text-white transition-colors">Architecture Telemetry</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#estimator' ) ); ?>" class="hover:text-white transition-colors">2026/27 Catalog Rate Card</a></li>
          </ul>
        </div>

        <!-- Statutory Compliance -->
        <div class="space-y-3 font-mono text-xs">
          <h4 class="text-white font-bold uppercase tracking-wider text-xs font-sans">Statutory Trust</h4>
          <ul class="space-y-2.5 text-slate-400">
            <li><span class="text-slate-300">MoR TIN:</span> Verified Addis Ababa</li>
            <li><span class="text-slate-300">WHT Auto:</span> 2% Goods / 3% Services</li>
            <li><span class="text-slate-300">Telebirr:</span> Certified ISV Rails</li>
            <li><span class="text-slate-300">CBE Birr:</span> Gateway Integrated</li>
            <li><span class="text-slate-300">Data Residency:</span> 100% In Ethiopia</li>
          </ul>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs font-mono text-slate-500 gap-4">
        <div>&copy; <?php echo date('Y'); ?> Novarise Digital Solution PLC. All rights reserved. Addis Ababa, Ethiopia.</div>
        <div class="flex items-center gap-6">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-slate-400 transition-colors">Main Hub</a>
          <a href="<?php echo esc_url( home_url( '/erp/' ) ); ?>" class="hover:text-slate-400 transition-colors">ERP</a>
          <a href="<?php echo esc_url( home_url( '/mlm/' ) ); ?>" class="hover:text-slate-400 transition-colors">MLM</a>
          <a href="<?php echo esc_url( home_url( '/on-demand/' ) ); ?>" class="hover:text-slate-400 transition-colors">On-Demand</a>
          <a href="<?php echo esc_url( home_url( '/custom-software/' ) ); ?>" class="hover:text-slate-400 transition-colors">Custom Dev</a>
          <a href="<?php echo esc_url( home_url( '/academy/' ) ); ?>" class="hover:text-slate-400 transition-colors">Academy</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- ========================================================================= -->
  <!-- 10. DUAL FLOATING ACTION PILLS                                            -->
  <!-- ========================================================================= -->
  <div class="fixed bottom-6 right-6 z-50 flex flex-col sm:flex-row items-end sm:items-center gap-3">
    <!-- Phone Call Button (with Amharic prompt ይደውሉልን) -->
    <a href="tel:+251922612024" class="flex items-center gap-2.5 px-5 py-3 rounded-full bg-brand-primary text-white font-bold text-xs font-mono shadow-2xl shadow-brand-primary/40 hover:bg-blue-600 hover:scale-105 transition-all border border-blue-400/40">
      <i data-lucide="phone-call" class="w-4 h-4 text-white animate-bounce"></i>
      <span>ይደውሉልን (0922612024)</span>
    </a>

    <!-- Telegram Action Pill -->
    <a href="https://t.me/daniel212_212" target="_blank" class="flex items-center gap-2 px-5 py-3 rounded-full bg-emerald-600 text-white font-bold text-xs font-mono shadow-2xl shadow-emerald-600/40 hover:bg-emerald-500 hover:scale-105 transition-all border border-emerald-400/40">
      <i data-lucide="send" class="w-4 h-4 text-white"></i>
      <span>Telegram Online</span>
      <span class="w-2 h-2 rounded-full bg-white pulse-dot"></span>
    </a>
  </div>

  <!-- ========================================================================= -->
  <!-- 11. ENTERPRISE TECHNICAL RFP & PROFORMA MODAL                             -->
  <!-- ========================================================================= -->
  <div id="rfp-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md hidden items-center justify-center p-4">
    <div class="bg-brand-navyDark rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl relative border border-slate-700/80">
      <button onclick="closeRFPModal()" class="absolute top-5 right-5 text-slate-400 hover:text-white">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>

      <div class="flex items-center gap-2 mb-2">
        <span class="w-2.5 h-2.5 rounded-full bg-brand-interactive"></span>
        <span class="text-xs font-mono font-bold uppercase tracking-wider text-brand-interactive">Enterprise Technical Proposal Request</span>
      </div>
      
      <h3 class="text-2xl font-bold text-white font-heading" id="rfp-modal-title">Request Enterprise Scope &amp; Proforma</h3>
      <p class="text-slate-400 text-xs mt-1 mb-6 font-sans leading-relaxed">
        Submit your specifications. Our technical lead architect in Addis Ababa will prepare an enterprise scope blueprint and official proforma within 2 hours.
      </p>

      <form id="rfp-form" onsubmit="handleRFPSubmit(event)" class="space-y-4 font-sans text-xs">
        <div>
          <label class="block font-semibold text-slate-300 mb-1">Company / Conglomerate Name</label>
          <input type="text" id="rfp-input-company" required placeholder="e.g. Gilando Biomedical / AfroLogistics PLC" class="w-full bg-slate-900 border border-slate-700 px-3.5 py-2.5 rounded-xl text-white focus:outline-none focus:border-brand-interactive" />
        </div>
        
        <div>
          <label class="block font-semibold text-slate-300 mb-1">Lead Contact Name &amp; Phone Number</label>
          <input type="tel" id="rfp-input-phone" required placeholder="Ato Dawit Haile — 0922612024" class="w-full bg-slate-900 border border-slate-700 px-3.5 py-2.5 rounded-xl text-white focus:outline-none focus:border-brand-interactive" />
        </div>

        <div>
          <label class="block font-semibold text-slate-300 mb-1">Selected Technical Scope</label>
          <input type="text" id="rfp-input-scope" readonly class="w-full bg-slate-950 border border-slate-800 px-3.5 py-2.5 rounded-xl text-brand-interactive font-mono font-semibold" />
        </div>

        <div>
          <label class="block font-semibold text-slate-300 mb-1">Deployment Timeline &amp; Key Requirements</label>
          <textarea id="rfp-input-timeline" rows="2" placeholder="e.g. Need MoR compliant accounting live before next quarter fiscal closing." class="w-full bg-slate-900 border border-slate-700 px-3.5 py-2.5 rounded-xl text-white focus:outline-none focus:border-brand-interactive"></textarea>
        </div>

        <button type="submit" id="rfp-submit-btn" class="w-full py-3.5 rounded-full text-xs font-bold font-mono text-white bg-gradient-to-r from-brand-primary to-blue-600 hover:from-blue-600 hover:to-brand-interactive shadow-lg shadow-brand-primary/25 transition-all">
          Generate Scope &amp; Schedule Architecture Call
        </button>
        <div class="text-[11px] text-center text-slate-500 font-mono">
          🔒 100% NDA Protected. Direct follow-up by Novarise senior architects.
        </div>
      </form>

      <!-- Success Screen -->
      <div id="rfp-success" class="hidden text-center py-8 space-y-4">
        <div class="w-14 h-14 bg-emerald-950 text-emerald-400 border border-emerald-800 rounded-full flex items-center justify-center mx-auto text-2xl">
          <i data-lucide="check-circle" class="w-8 h-8"></i>
        </div>
        <h4 class="text-xl font-bold text-white font-heading">Technical RFP Dispatched!</h4>
        <p class="text-xs text-slate-300 max-w-xs mx-auto leading-relaxed">
          Thank you. Our enterprise architecture team in Addis Ababa has received your project parameters and saved it to your secure queue.
        </p>
        <button onclick="closeRFPModal()" class="px-6 py-2 rounded-full text-xs font-mono font-bold text-white bg-slate-800 border border-slate-700">
          Close Window
        </button>
      </div>

    </div>
  </div>

  <?php wp_footer(); ?>

  <script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
      lucide.createIcons();
    }

    function toggleMobileNav() {
      const menu = document.getElementById('mobile-nav');
      if (menu) menu.classList.toggle('hidden');
    }

    function openRFPModal(scopeName) {
      const modal = document.getElementById('rfp-modal');
      const input = document.getElementById('rfp-input-scope');
      const title = document.getElementById('rfp-modal-title');
      if (input) input.value = scopeName || 'Enterprise Architecture Scoping';
      if (title && scopeName) title.innerText = scopeName;
      if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }
    }

    function closeRFPModal() {
      const modal = document.getElementById('rfp-modal');
      if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }
      const form = document.getElementById('rfp-form');
      if (form) form.classList.remove('hidden');
      const success = document.getElementById('rfp-success');
      if (success) success.classList.add('hidden');
    }

    function handleRFPSubmit(e) {
      e.preventDefault();
      const company = document.getElementById('rfp-input-company').value;
      const phone = document.getElementById('rfp-input-phone').value;
      const scope = document.getElementById('rfp-input-scope').value;
      const timeline = document.getElementById('rfp-input-timeline').value;

      // Local storage fallback queue
      const lead = { company, phone, scope, timeline, timestamp: new Date().toISOString() };
      const leads = JSON.parse(localStorage.getItem('novarise_rfp_leads') || '[]');
      leads.push(lead);
      localStorage.setItem('novarise_rfp_leads', JSON.stringify(leads));

      // AJAX post to WordPress backend
      const formData = new FormData();
      formData.append('action', 'novadigital_submit_lead');
      formData.append('company', company);
      formData.append('phone', phone);
      formData.append('scope', scope);
      formData.append('timeline', timeline);

      const ajaxUrl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';
      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      }).catch(() => {});

      document.getElementById('rfp-form').classList.add('hidden');
      document.getElementById('rfp-success').classList.remove('hidden');
      if (typeof lucide !== 'undefined') lucide.createIcons();
    }
  </script>
</body>
</html>
