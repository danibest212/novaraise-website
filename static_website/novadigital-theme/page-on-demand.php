<?php
/**
 * Template Name: Nova On-Demand Apps
 *
 * @package NovaDigital
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="obsidian-radial grid-pattern relative pt-16 pb-24 border-b border-white/10 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto space-y-5">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900/90 border border-emerald-500/30 shadow-xl text-xs font-mono text-emerald-400">
          <span class="w-2 h-2 rounded-full bg-emerald-400 pulse-dot"></span>
          <span>Zero Development Delay • Pre-Built &amp; Tested • Ethiopian Market Ready</span>
        </div>
        
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.12]">
          Deploy Ready-Made Software in <br class="hidden sm:inline" />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-interactive via-blue-400 to-emerald-400">
            3 to 14 Business Days
          </span>
        </h1>
        
        <p class="text-base sm:text-lg text-slate-300 font-normal leading-relaxed">
          Skip 6–12 months of high-risk custom programming. Launch battle-tested platforms configured with your enterprise branding, native Telebirr &amp; CBE Birr payment rails, SMS OTP, and full source code ownership.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4 pt-3">
          <a href="#catalog" class="px-8 py-3.5 rounded-full text-sm font-bold bg-gradient-to-r from-brand-primary to-blue-600 hover:from-blue-600 hover:to-brand-interactive text-white shadow-xl shadow-brand-primary/30 flex items-center gap-2">
            <span>Explore 6 Ready Platforms</span>
            <i data-lucide="arrow-down" class="w-4 h-4"></i>
          </a>
          <a href="#estimator" class="px-7 py-3.5 rounded-full text-sm font-semibold bg-slate-900/90 hover:bg-slate-800 text-slate-200 border border-slate-700 flex items-center gap-2">
            <i data-lucide="calculator" class="w-4 h-4 text-brand-interactive"></i>
            <span>Calculate Deployment Cost</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Catalog -->
  <section id="catalog" class="py-24 bg-[#030610] border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
        <div>
          <span class="text-xs font-mono font-bold uppercase tracking-widest text-brand-interactive">
            PROVEN FOUNDATIONS
          </span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2">
            Production-Ready Industry Software
          </h2>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap gap-2 font-mono text-xs">
          <button onclick="filterCatalog('all')" class="cat-btn px-4 py-2 rounded-xl font-bold bg-blue-600 text-white border border-blue-400 transition-all" data-cat="all">All Products (6)</button>
          <button onclick="filterCatalog('telegram')" class="cat-btn px-4 py-2 rounded-xl font-semibold bg-slate-900 text-slate-400 border border-slate-800 hover:text-white transition-all" data-cat="telegram">Telegram Bots</button>
          <button onclick="filterCatalog('mobility')" class="cat-btn px-4 py-2 rounded-xl font-semibold bg-slate-900 text-slate-400 border border-slate-800 hover:text-white transition-all" data-cat="mobility">Mobility &amp; Logistics</button>
          <button onclick="filterCatalog('commerce')" class="cat-btn px-4 py-2 rounded-xl font-semibold bg-slate-900 text-slate-400 border border-slate-800 hover:text-white transition-all" data-cat="commerce">E-Commerce</button>
          <button onclick="filterCatalog('fintech')" class="cat-btn px-4 py-2 rounded-xl font-semibold bg-slate-900 text-slate-400 border border-slate-800 hover:text-white transition-all" data-cat="fintech">Equb &amp; FinTech</button>
        </div>
      </div>

      <!-- 6 Ready Product Cards -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="product-grid">

        <!-- Product 1: Telegram Bot -->
        <div class="prod-card glass-card-dark rounded-3xl overflow-hidden border border-white/10 flex flex-col justify-between" data-category="telegram">
          <div>
            <div class="relative bg-slate-950 p-2 border-b border-slate-800">
              <div class="flex items-center justify-between px-3 py-1.5 text-xs font-mono text-slate-400">
                <span class="text-brand-interactive">@TelebirrCommerceBot</span>
                <span class="text-emerald-400 font-bold">3–5 DAYS LAUNCH</span>
              </div>
              <img src="<?php echo novadigital_asset('telegram_bot_preview.png'); ?>" alt="Telegram Bot" class="w-full h-56 object-cover object-top rounded-xl" />
            </div>
            
            <div class="p-8">
              <div class="flex items-center justify-between text-xs font-mono mb-2">
                <span class="text-brand-interactive uppercase font-bold">Mini App v2.0</span>
                <span class="text-amber-400 font-bold">60,000 – 300,000 ETB</span>
              </div>
              <h3 class="text-2xl font-bold text-white">Telegram E-Commerce &amp; Service SuperBot</h3>
              <p class="text-slate-300 text-xs mt-2 leading-relaxed">
                Full-featured Telegram Mini App (TMA) and interactive bot. Sell products, food deliveries, or book appointments directly inside Telegram without forcing users to download an 80MB app.
              </p>
              
              <div class="grid grid-cols-2 gap-2 mt-5 text-xs font-mono text-slate-300">
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Direct Telebirr In-Bot Pay</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Amharic &amp; English AI</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Instant Admin Push Alerts</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Web Merchant Admin Panel</span>
                </div>
              </div>
            </div>
          </div>

          <div class="p-8 pt-0 border-t border-slate-800/80 flex items-center justify-between gap-3">
            <button onclick="openRFPModal('Telegram Bot Demo Inquiry')" class="flex-1 py-3 rounded-full text-xs font-mono font-bold text-white bg-brand-primary hover:bg-blue-600 transition-all">
              Request Live Demo
            </button>
            <a href="https://t.me/daniel212_212" target="_blank" class="px-4 py-3 rounded-full text-xs font-mono font-semibold bg-slate-900 hover:bg-slate-800 text-slate-300 border border-slate-700">
              Test Telegram
            </a>
          </div>
        </div>

        <!-- Product 2: Ride-Hailing Fleet -->
        <div class="prod-card glass-card-dark rounded-3xl overflow-hidden border border-white/10 flex flex-col justify-between" data-category="mobility">
          <div>
            <div class="relative bg-slate-950 p-2 border-b border-slate-800">
              <div class="flex items-center justify-between px-3 py-1.5 text-xs font-mono text-slate-400">
                <span class="text-amber-400">Nova Fleet Dispatcher</span>
                <span class="text-emerald-400 font-bold">14 DAYS LAUNCH</span>
              </div>
              <img src="<?php echo novadigital_asset('ride_hailing_preview.png'); ?>" alt="Ride Hailing" class="w-full h-56 object-cover object-top rounded-xl" />
            </div>
            
            <div class="p-8">
              <div class="flex items-center justify-between text-xs font-mono mb-2">
                <span class="text-amber-400 uppercase font-bold">Flutter Mobile + Web</span>
                <span class="text-amber-400 font-bold">700,000 – 2,500,000 ETB</span>
              </div>
              <h3 class="text-2xl font-bold text-white">Ride-Hailing &amp; Cargo Dispatch SuperApp</h3>
              <p class="text-slate-300 text-xs mt-2 leading-relaxed">
                Complete transport ecosystem modeled on Feres/RIDE. Includes Passenger App, Driver Partner App with live meter &amp; commission wallet, and Web Fleet Dispatcher with real-time GPS tracking.
              </p>
              
              <div class="grid grid-cols-2 gap-2 mt-5 text-xs font-mono text-slate-300">
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Real-Time Driver Matching</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Surge Pricing &amp; Night Rates</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Driver Wallet via Telebirr</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Corporate Billing Portal</span>
                </div>
              </div>
            </div>
          </div>

          <div class="p-8 pt-0 border-t border-slate-800/80 flex items-center justify-between gap-3">
            <button onclick="openRFPModal('Ride Hailing Fleet Demo')" class="flex-1 py-3 rounded-full text-xs font-mono font-bold text-white bg-brand-primary hover:bg-blue-600 transition-all">
              Inspect Fleet Demo
            </button>
            <a href="tel:+251922612024" class="px-4 py-3 rounded-full text-xs font-mono font-semibold bg-slate-900 hover:bg-slate-800 text-slate-300 border border-slate-700">
              Consult Architect
            </a>
          </div>
        </div>

        <!-- Product 3: Multi-Vendor Marketplace -->
        <div class="prod-card glass-card-dark rounded-3xl overflow-hidden border border-white/10 flex flex-col justify-between" data-category="commerce">
          <div>
            <div class="relative bg-slate-950 p-2 border-b border-slate-800">
              <div class="flex items-center justify-between px-3 py-1.5 text-xs font-mono text-slate-400">
                <span class="text-emerald-400">Nova Marketplace</span>
                <span class="text-emerald-400 font-bold">7–10 DAYS LAUNCH</span>
              </div>
              <img src="<?php echo novadigital_asset('ecommerce_preview.png'); ?>" alt="Marketplace" class="w-full h-56 object-cover object-top rounded-xl" />
            </div>
            
            <div class="p-8">
              <div class="flex items-center justify-between text-xs font-mono mb-2">
                <span class="text-emerald-400 uppercase font-bold">Escrow Settlement Built-In</span>
                <span class="text-amber-400 font-bold">80,000 – 600,000 ETB</span>
              </div>
              <h3 class="text-2xl font-bold text-white">Multi-Vendor Marketplace &amp; B2B Store</h3>
              <p class="text-slate-300 text-xs mt-2 leading-relaxed">
                Full-featured commerce engine for retail brands or multi-merchant bazaars. Includes vendor dashboard, commission withholding, Telebirr/CBE Birr automatic escrow release, and rider tracking.
              </p>
              
              <div class="grid grid-cols-2 gap-2 mt-5 text-xs font-mono text-slate-300">
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Telebirr &amp; CBE Escrow Checkout</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Vendor Merchant Portals</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Courier Delivery Logistics</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>MoR 15% VAT Invoicing</span>
                </div>
              </div>
            </div>
          </div>

          <div class="p-8 pt-0 border-t border-slate-800/80 flex items-center justify-between gap-3">
            <button onclick="openRFPModal('Marketplace Demo Request')" class="flex-1 py-3 rounded-full text-xs font-mono font-bold text-white bg-brand-primary hover:bg-blue-600 transition-all">
              View Marketplace Demo
            </button>
            <a href="<?php echo home_url('/#estimator'); ?>" class="px-4 py-3 rounded-full text-xs font-mono font-semibold bg-slate-900 hover:bg-slate-800 text-slate-300 border border-slate-700">
              Estimate Config
            </a>
          </div>
        </div>

        <!-- Product 4: Digital Equb & SACCO OS -->
        <div class="prod-card glass-card-dark rounded-3xl overflow-hidden border border-white/10 flex flex-col justify-between" data-category="fintech">
          <div>
            <div class="relative bg-slate-950 p-2 border-b border-slate-800">
              <div class="flex items-center justify-between px-3 py-1.5 text-xs font-mono text-slate-400">
                <span class="text-purple-400">Equb Core Banking OS</span>
                <span class="text-emerald-400 font-bold">7 DAYS LAUNCH</span>
              </div>
              <img src="<?php echo novadigital_asset('mlm/finance_dark.png'); ?>" alt="Digital Equb" class="w-full h-56 object-cover object-top rounded-xl" />
            </div>
            
            <div class="p-8">
              <div class="flex items-center justify-between text-xs font-mono mb-2">
                <span class="text-purple-400 uppercase font-bold">Cryptographic Fair Draw</span>
                <span class="text-amber-400 font-bold">150,000 – 450,000 ETB</span>
              </div>
              <h3 class="text-2xl font-bold text-white">Digital Equb &amp; SACCO Microfinance OS</h3>
              <p class="text-slate-300 text-xs mt-2 leading-relaxed">
                Transform traditional community savings (Equb &amp; Edir) and credit unions into 100% digital operations. Transparent rotational draws, automatic SMS payment prompts, and Telebirr direct collection.
              </p>
              
              <div class="grid grid-cols-2 gap-2 mt-5 text-xs font-mono text-slate-300">
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Anti-Tamper Lottery Algorithm</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Telebirr Auto-Recurring Debits</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Guarantor KYC &amp; Verification</span>
                </div>
                <div class="flex items-center gap-1.5">
                  <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                  <span>Audited Double-Entry GL</span>
                </div>
              </div>
            </div>
          </div>

          <div class="p-8 pt-0 border-t border-slate-800/80 flex items-center justify-between gap-3">
            <button onclick="openRFPModal('Digital Equb Demo Consultation')" class="flex-1 py-3 rounded-full text-xs font-mono font-bold text-white bg-brand-primary hover:bg-blue-600 transition-all">
              Request Equb Demo
            </button>
            <a href="<?php echo home_url('/mlm/'); ?>" class="px-4 py-3 rounded-full text-xs font-mono font-semibold bg-slate-900 hover:bg-slate-800 text-slate-300 border border-slate-700">
              View MLM OS
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Interactive Cost Estimator -->
  <section id="estimator" class="py-24 bg-[#050814] text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-12">
        <span class="text-xs font-mono font-bold uppercase tracking-widest text-brand-interactive bg-blue-950 px-3 py-1 rounded-full border border-blue-800">
          OFFICIAL 2026/27 CATALOG
        </span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-3">
          On-Demand Launch Estimator
        </h2>
      </div>

      <div class="glass-card-dark rounded-3xl p-8 border border-slate-800 shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          
          <div class="lg:col-span-7 space-y-6">
            <div>
              <label class="block text-xs font-mono font-bold uppercase text-slate-300 mb-2">Select Solution:</label>
              <select id="calc-platform" onchange="calculateOnDemand()" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-white text-sm font-semibold focus:outline-none focus:border-brand-interactive">
                <option value="telegram_starter" data-price="75000" data-days="3">Telegram E-Commerce Mini-App (75,000 ETB • 3 Days)</option>
                <option value="telegram_full" data-price="180000" data-days="5">Telegram Enterprise Bot + Dispatch + Staff Portal (180,000 ETB • 5 Days)</option>
                <option value="ride_hailing" data-price="950000" data-days="14" selected>Ride Hailing &amp; Cargo Dispatch (Rider + Driver + Web Hub) (950,000 ETB • 14 Days)</option>
                <option value="ecommerce_multi" data-price="350000" data-days="8">Multi-Vendor Marketplace (Web + Apps + Escrow) (350,000 ETB • 8 Days)</option>
                <option value="equb_sacco" data-price="280000" data-days="7">Digital Equb &amp; Rotational Microfinance OS (280,000 ETB • 7 Days)</option>
              </select>
            </div>

            <div>
              <label class="flex items-center gap-3 p-3 rounded-xl bg-slate-900/60 border border-slate-800 cursor-pointer">
                <input type="checkbox" id="addon-telebirr" checked onchange="calculateOnDemand()" class="w-4 h-4 rounded text-brand-interactive" />
                <div class="flex-1 text-xs font-mono">
                  <span class="font-bold text-white block">Telebirr &amp; CBE Merchant Rail Setup</span>
                  <span class="text-slate-400">Ethio Telecom official ISV credential integration</span>
                </div>
                <span class="text-xs font-mono font-bold text-emerald-400">+50,000 ETB</span>
              </label>
            </div>
          </div>

          <div class="lg:col-span-5 bg-gradient-to-br from-slate-900 to-brand-obsidian p-6 sm:p-8 rounded-2xl border border-slate-700 flex flex-col justify-between shadow-2xl">
            <div>
              <div class="text-xs font-mono font-bold uppercase text-slate-400 mb-1">Estimated Investment</div>
              <div class="text-4xl font-extrabold text-brand-interactive font-mono" id="calc-total-etb">
                1,000,000 <span class="text-lg text-slate-400">ETB</span>
              </div>
              <div class="text-xs text-slate-400 mt-1 font-mono">100% Source Code Included</div>

              <div class="mt-6 pt-6 border-t border-slate-800 space-y-2 text-xs font-mono">
                <div class="flex justify-between">
                  <span class="text-slate-400">Deployment SLA:</span>
                  <span class="font-bold text-emerald-400" id="calc-timeline">14 Business Days</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-slate-400">Code Handover:</span>
                  <span class="font-bold text-white">Full GitLab / GitHub Repo</span>
                </div>
              </div>
            </div>

            <div class="mt-8 pt-6 border-t border-slate-800">
              <button onclick="openRFPModal('On-Demand Deployment (' + document.getElementById('calc-total-etb').innerText + ')')" class="w-full py-3.5 rounded-full text-xs font-mono font-bold text-white bg-gradient-to-r from-brand-primary to-blue-600 hover:from-blue-600 hover:to-brand-interactive shadow-lg transition-all">
                <span>Lock In Deployment Dates</span>
              </button>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <script>
    function filterCatalog(cat) {
      document.querySelectorAll('.cat-btn').forEach(btn => {
        if (btn.getAttribute('data-cat') === cat) {
          btn.classList.add('bg-blue-600', 'text-white', 'border-blue-400');
          btn.classList.remove('bg-slate-900', 'text-slate-400', 'border-slate-800');
        } else {
          btn.classList.remove('bg-blue-600', 'text-white', 'border-blue-400');
          btn.classList.add('bg-slate-900', 'text-slate-400', 'border-slate-800');
        }
      });
      document.querySelectorAll('.prod-card').forEach(card => {
        if (cat === 'all' || card.getAttribute('data-category') === cat) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    }

    function calculateOnDemand() {
      const sel = document.getElementById('calc-platform');
      if (!sel) return;
      const opt = sel.options[sel.selectedIndex];
      let price = parseInt(opt.getAttribute('data-price') || '0', 10);
      let days = opt.getAttribute('data-days') || '7';

      if (document.getElementById('addon-telebirr') && document.getElementById('addon-telebirr').checked) {
        price += 50000;
      }

      const totalEl = document.getElementById('calc-total-etb');
      const timeEl = document.getElementById('calc-timeline');
      if (totalEl) {
        totalEl.innerHTML = price.toLocaleString() + ' <span class="text-lg text-slate-400">ETB</span>';
      }
      if (timeEl) {
        timeEl.innerHTML = '<i data-lucide="zap" class="w-3.5 h-3.5"></i> ' + days + ' Business Days';
      }
      if (window.lucide) {
        lucide.createIcons();
      }
    }

    window.addEventListener('DOMContentLoaded', calculateOnDemand);
  </script>

<?php
get_footer();
