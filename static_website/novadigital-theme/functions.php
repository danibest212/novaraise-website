<?php
/**
 * Nova Digital Enterprise Theme Functions
 *
 * @package NovaDigital
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function novadigital_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Enterprise Menu', 'novadigital' ),
        'footer'  => __( 'Footer Menu', 'novadigital' ),
    ) );
}
add_action( 'after_setup_theme', 'novadigital_theme_setup' );

/**
 * Enqueue Scripts and Styles
 */
function novadigital_scripts() {
    // Google Fonts
    wp_enqueue_style( 'novadigital-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700;800&family=Manrope:wght@600;700;800&display=swap', array(), null );

    // Theme Stylesheet
    wp_enqueue_style( 'novadigital-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Tailwind CSS CDN
    wp_enqueue_script( 'novadigital-tailwind', 'https://cdn.tailwindcss.com', array(), null, false );

    // Lucide Icons CDN
    wp_enqueue_script( 'novadigital-lucide', 'https://unpkg.com/lucide@latest', array(), null, false );

    // Tailwind Configuration Inline
    $tailwind_config = "
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
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
            }
          },
          fontFamily: {
            heading: ['Space Grotesk', 'Manrope', 'sans-serif'],
            body: ['Inter', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          }
        }
      }
    };
    ";
    wp_add_inline_script( 'novadigital-tailwind', $tailwind_config );
}
add_action( 'wp_enqueue_scripts', 'novadigital_scripts' );

/**
 * Helper to get theme asset image URL
 */
function novadigital_asset( $path ) {
    return get_template_directory_uri() . '/assets/images/' . ltrim( $path, '/' );
}

/**
 * Custom Post Type: Lead Inquiries (Saved in WP Dashboard)
 */
function novadigital_register_leads_cpt() {
    $labels = array(
        'name'               => __( 'Nova Leads', 'novadigital' ),
        'singular_name'      => __( 'Nova Lead', 'novadigital' ),
        'menu_name'          => __( 'Nova Leads', 'novadigital' ),
        'add_new'            => __( 'Add New Lead', 'novadigital' ),
        'all_items'          => __( 'All Inquiries', 'novadigital' ),
        'edit_item'          => __( 'Edit Lead', 'novadigital' ),
        'view_item'          => __( 'View Lead', 'novadigital' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-chart-area',
        'capability_type'    => 'post',
        'supports'           => array( 'title', 'custom-fields' ),
    );

    register_post_type( 'nova_lead', $args );
}
add_action( 'init', 'novadigital_register_leads_cpt' );

/**
 * AJAX / REST endpoint to capture leads
 */
add_action( 'wp_ajax_novadigital_submit_lead', 'novadigital_handle_lead_ajax' );
add_action( 'wp_ajax_nopriv_novadigital_submit_lead', 'novadigital_handle_lead_ajax' );

function novadigital_handle_lead_ajax() {
    $company  = isset( $_POST['company'] ) ? sanitize_text_field( $_POST['company'] ) : '';
    $phone    = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $scope    = isset( $_POST['scope'] ) ? sanitize_text_field( $_POST['scope'] ) : 'Enterprise General';
    $timeline = isset( $_POST['timeline'] ) ? sanitize_textarea_field( $_POST['timeline'] ) : '';

    if ( empty( $company ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Please provide company name and phone number.' ) );
    }

    $post_id = wp_insert_post( array(
        'post_title'   => $company . ' (' . $phone . ')',
        'post_type'    => 'nova_lead',
        'post_status'  => 'publish',
    ) );

    if ( $post_id ) {
        update_post_meta( $post_id, 'company', $company );
        update_post_meta( $post_id, 'phone', $phone );
        update_post_meta( $post_id, 'scope', $scope );
        update_post_meta( $post_id, 'requirements', $timeline );
        update_post_meta( $post_id, 'submitted_at', current_time( 'mysql' ) );

        wp_send_json_success( array( 'message' => 'Inquiry registered successfully.' ) );
    }

    wp_send_json_error( array( 'message' => 'Could not save inquiry.' ) );
}

/**
 * Auto-create core pages and assign templates upon theme switch / activation
 */
function novadigital_auto_create_pages() {
    $pages = array(
        'erp' => array(
            'title'    => 'Enterprise ERP Platform',
            'template' => 'page-erp.php',
        ),
        'mlm' => array(
            'title'    => 'Sovereign MLM Operating System',
            'template' => 'page-mlm.php',
        ),
        'on-demand' => array(
            'title'    => 'Turnkey On-Demand Software',
            'template' => 'page-on-demand.php',
        ),
        'custom-software' => array(
            'title'    => 'Custom Software Engineering',
            'template' => 'page-custom-software.php',
        ),
        'academy' => array(
            'title'    => 'Nova Executive Academy',
            'template' => 'page-academy.php',
        ),
    );

    foreach ( $pages as $slug => $data ) {
        $existing = get_page_by_path( $slug );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            }
        } else {
            update_post_meta( $existing->ID, '_wp_page_template', $data['template'] );
        }
    }

    // Set Front Page display to static front page
    $front_page = get_page_by_path( 'home' );
    if ( ! $front_page ) {
        $front_id = wp_insert_post( array(
            'post_title'  => 'Home',
            'post_name'   => 'home',
            'post_status' => 'publish',
            'post_type'   => 'page',
        ) );
    } else {
        $front_id = $front_page->ID;
    }

    if ( $front_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_id );
    }

    // Update permalink structure to /%postname%/
    global $wp_rewrite;
    if ( isset( $wp_rewrite ) ) {
        $wp_rewrite->set_permalink_structure( '/%postname%/' );
        $wp_rewrite->flush_rules();
    }
}
add_action( 'after_switch_theme', 'novadigital_auto_create_pages' );

