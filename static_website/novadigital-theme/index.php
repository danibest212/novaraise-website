<?php
/**
 * Main Template File (Fallback)
 *
 * @package NovaDigital
 */

get_header();
?>

  <div class="obsidian-radial grid-pattern py-24 border-b border-white/10 min-h-[60vh] flex items-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white font-heading tracking-tight">
          <?php the_title(); ?>
        </h1>

        <div class="prose prose-invert prose-lg mx-auto text-slate-300 leading-relaxed max-w-none text-left bg-slate-900/60 p-8 rounded-3xl border border-slate-800">
          <?php the_content(); ?>
        </div>
      <?php endwhile; else : ?>
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900 border border-brand-borderHighlight text-xs font-mono text-brand-interactive">
          <span class="w-2 h-2 rounded-full bg-brand-interactive pulse-dot"></span>
          <span>Nova Digital Enterprise Core</span>
        </div>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white font-heading tracking-tight">
          Enterprise Systems Portal
        </h1>
        <p class="text-slate-300 max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
          Welcome to Novarise Digital Solution PLC. Please navigate using the top telemetry bar to access Enterprise ERP, Sovereign MLM OS, Custom Engineering, or On-Demand platforms.
        </p>
        <div class="pt-4">
          <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full text-sm font-bold bg-gradient-to-r from-brand-primary to-blue-600 text-white shadow-xl hover:from-blue-600 hover:to-brand-interactive transition-all">
            <span>Return to Main Hub</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      <?php endif; ?>

    </div>
  </div>

<?php
get_footer();
