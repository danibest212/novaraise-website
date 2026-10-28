<?php
/**
 * Header Template
 *
 * @package NovaDigital
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-brand-obsidian text-slate-200 antialiased selection:bg-brand-interactive selection:text-black' ); ?>>
<?php wp_body_open(); ?>

  <!-- ========================================================================= -->
  <!-- 1. SOVEREIGN REGULATORY & SYSTEM TELEMETRY STRIP                          -->
  <!-- ========================================================================= -->
  <div class="bg-[#030610] text-slate-400 text-xs py-2 px-4 border-b border-slate-800/80">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
      
      <!-- System Uptime & Compliance Status -->
      <div class="flex items-center gap-3">
        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-mono font-bold bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 pulse-dot"></span>
          <span>SYSTEM STATUS: NORMAL [99.99% SLA]</span>
        </span>
        <span class="hidden md:inline text-slate-700">|</span>
        <span class="hidden md:inline text-slate-400 font-mono text-[11px]">
          🇪🇹 MoR Proclamation 285/2002 Compliant • Telebirr v2.0 • Sene 30 Closing
        </span>
      </div>

      <!-- Quick Action Desk -->
      <div class="flex items-center gap-4 text-xs font-mono">
        <a href="<?php echo esc_url( home_url( '/#architecture' ) ); ?>" class="text-brand-interactive hover:text-white transition-colors flex items-center gap-1">
          <i data-lucide="cpu" class="w-3.5 h-3.5"></i>
          <span>Architecture Telemetry</span>
        </a>
        <span class="text-slate-700">|</span>
        <a href="https://t.me/daniel212_212" target="_blank" class="text-slate-300 hover:text-white flex items-center gap-1">
          <i data-lucide="send" class="w-3.5 h-3.5 text-brand-interactive"></i>
          <span>@daniel212_212 Desk</span>
        </a>
      </div>

    </div>
  </div>

  <!-- ========================================================================= -->
  <!-- 2. ENTERPRISE STICKY NAVIGATION BAR                                       -->
  <!-- ========================================================================= -->
  <header class="sticky top-0 z-50 bg-[#070B14]/90 backdrop-blur-xl border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      
      <!-- Brand Lockup -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 group">
        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-brand-primary via-blue-600 to-brand-interactive flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-brand-primary/30 group-hover:scale-105 transition-transform">
          <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="4 20 4 4 14 14 14 4"></polyline>
            <polyline points="14 10 20 4 20 10"></polyline>
          </svg>
        </div>
        <div class="flex flex-col">
          <div class="flex items-center gap-1.5">
            <span class="font-extrabold text-2xl tracking-tight text-white font-heading">NOVARISE</span>
            <span class="font-bold text-2xl tracking-tight text-brand-interactive font-heading">DIGITAL</span>
            <span class="text-[9px] font-mono font-bold uppercase tracking-wider bg-blue-950 text-blue-400 px-1.5 py-0.5 rounded border border-blue-800 ml-1">ENTERPRISE</span>
          </div>
          <span class="text-[10px] tracking-wider text-slate-400 uppercase font-mono font-medium">Mission-Critical Sovereign Systems</span>
        </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="hidden xl:flex items-center gap-6 text-[14px] font-medium text-slate-300">
        
        <!-- ERP with MoR badge -->
        <a href="<?php echo esc_url( home_url( '/erp/' ) ); ?>" class="hover:text-white transition-colors flex items-center gap-1.5">
          <span>Enterprise ERP</span>
          <span class="text-[10px] px-1.5 py-0.2 bg-blue-950 text-blue-400 rounded border border-blue-800/80 font-mono font-bold">MoR Tax</span>
        </a>

        <!-- MLM Sovereign OS -->
        <a href="<?php echo esc_url( home_url( '/mlm/' ) ); ?>" class="hover:text-emerald-400 transition-colors flex items-center gap-1.5">
          <span>MLM SuperApp</span>
          <span class="text-[10px] px-1.5 py-0.2 bg-emerald-950 text-emerald-400 rounded border border-emerald-800/80 font-mono font-bold">Sovereign OS</span>
        </a>

        <!-- On-Demand Turnkey -->
        <a href="<?php echo esc_url( home_url( '/on-demand/' ) ); ?>" class="hover:text-white transition-colors flex items-center gap-1.5">
          <span>Turnkey SaaS</span>
          <span class="text-[10px] px-1.5 py-0.2 bg-slate-800 text-slate-300 rounded border border-slate-700 font-mono">3–14 Days</span>
        </a>

        <!-- Custom Software -->
        <a href="<?php echo esc_url( home_url( '/custom-software/' ) ); ?>" class="hover:text-white transition-colors">
          <span>Custom Dev</span>
        </a>

        <!-- Nova Academy -->
        <a href="<?php echo esc_url( home_url( '/academy/' ) ); ?>" class="hover:text-white transition-colors flex items-center gap-1">
          <span>Academy</span>
          <span class="text-[10px] px-1.5 py-0.2 bg-amber-950/80 text-amber-400 rounded border border-amber-800/60 font-mono">Cohorts</span>
        </a>

        <!-- Architecture Telemetry Anchor -->
        <a href="<?php echo esc_url( home_url( '/#architecture' ) ); ?>" class="text-slate-400 hover:text-white transition-colors">
          <span>Telemetry</span>
        </a>

        <!-- Estimator Anchor -->
        <a href="<?php echo esc_url( home_url( '/#estimator' ) ); ?>" class="text-slate-400 hover:text-white transition-colors">
          <span>Pricing &amp; ROI</span>
        </a>
      </nav>

      <!-- Conversion Actions -->
      <div class="hidden sm:flex items-center gap-3">
        <!-- Direct Phone Header Pill -->
        <a href="tel:+251922612024" class="inline-flex items-center gap-2 px-4 py-2 text-xs font-semibold rounded-full text-slate-300 bg-slate-900 hover:bg-slate-800 border border-slate-700/80 transition-colors font-mono">
          <i data-lucide="phone" class="w-3.5 h-3.5 text-brand-interactive"></i>
          <span>0922612024</span>
          <span class="text-[11px] font-bold text-slate-400">ይደውሉ</span>
        </a>

        <!-- Primary RFP Action Button -->
        <button onclick="openRFPModal('Executive Technical Scoping Session')" class="inline-flex items-center gap-2 px-5 py-2.5 text-xs font-bold rounded-full text-white bg-gradient-to-r from-brand-primary to-blue-600 hover:from-blue-600 hover:to-brand-interactive shadow-lg shadow-brand-primary/25 hover:shadow-brand-primary/40 transition-all transform active:scale-95">
          <span>Request Technical Scope / RFP</span>
          <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </button>
      </div>

      <!-- Mobile Hamburger Button -->
      <button onclick="toggleMobileNav()" class="xl:hidden p-2 text-slate-400 hover:text-white" aria-label="Toggle Navigation">
        <i data-lucide="menu" class="w-6 h-6"></i>
      </button>

    </div>

    <!-- Mobile Drawer -->
    <div id="mobile-nav" class="hidden xl:hidden bg-brand-navyDark border-b border-slate-800 px-6 py-6 space-y-4 shadow-2xl">
      <a href="<?php echo esc_url( home_url( '/erp/' ) ); ?>" class="block text-base font-semibold text-blue-400">Enterprise ERP (100% MoR Tax Compliant) →</a>
      <a href="<?php echo esc_url( home_url( '/mlm/' ) ); ?>" class="block text-base font-semibold text-emerald-400">MLM &amp; Direct Selling SuperApp OS →</a>
      <a href="<?php echo esc_url( home_url( '/on-demand/' ) ); ?>" class="block text-base font-semibold text-slate-200">On-Demand Ready Products (Telegram &amp; Ride) →</a>
      <a href="<?php echo esc_url( home_url( '/custom-software/' ) ); ?>" class="block text-base font-semibold text-slate-200">Bespoke Software &amp; AI Engineering →</a>
      <a href="<?php echo esc_url( home_url( '/academy/' ) ); ?>" class="block text-base font-semibold text-amber-300">Nova Training Academy (Corporate Cohorts) →</a>
      <a href="<?php echo esc_url( home_url( '/#architecture' ) ); ?>" onclick="toggleMobileNav()" class="block text-sm text-slate-400">System Architecture Telemetry</a>
      <a href="<?php echo esc_url( home_url( '/#estimator' ) ); ?>" onclick="toggleMobileNav()" class="block text-sm text-slate-400">2026/27 Catalog Cost Calculator</a>
      <div class="pt-4 border-t border-slate-800 flex flex-col gap-2">
        <a href="tel:+251922612024" class="w-full text-center py-2.5 text-xs font-mono font-bold bg-slate-800 text-white rounded-xl flex items-center justify-center gap-2">
          <i data-lucide="phone" class="w-4 h-4 text-brand-interactive"></i>
          <span>0922612024 (ይደውሉልን)</span>
        </a>
        <button onclick="openRFPModal('Mobile Nav RFP Inquiry'); toggleMobileNav();" class="w-full text-center py-3 text-xs font-bold bg-brand-primary text-white rounded-xl shadow-lg">
          Request Technical Scope / RFP
        </button>
      </div>
    </div>
  </header>
