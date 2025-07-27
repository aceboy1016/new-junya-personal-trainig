<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': {
                            400: '#FBBF24',
                            500: '#F59E0B',
                            600: '#D97706'
                        }
                    }
                }
            }
        }
    </script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'junya-luxury'); ?></a>

<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 <?php echo is_admin_bar_showing() ? 'admin-bar' : ''; ?>" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(15px); box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);">
    <nav class="container mx-auto px-6 py-5">
        <div class="flex items-center justify-between">
            <!-- Enhanced Logo -->
            <div class="logo flex items-center">
                <?php if (has_custom_logo()) : ?>
                    <div class="luxury-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <div>
                        <h1 class="text-3xl font-black text-black tracking-wider leading-none">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="no-underline luxury-focus">
                                JUNYA <span class="text-gradient">ISHIHARA</span>
                            </a>
                        </h1>
                        <p class="text-xs text-gray-600 tracking-widest uppercase font-medium mt-1">Personal Training</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-10">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex items-center space-x-10',
                    'container' => false,
                    'fallback_cb' => 'junya_luxury_fallback_menu',
                    'walker' => new Junya_Luxury_Nav_Walker(),
                ));
                ?>
                
                <!-- Enhanced CTA Button -->
                <a href="#contact" class="bg-gold-gradient text-white px-8 py-3 font-bold tracking-wide hover:shadow-2xl hover:scale-105 transition-all duration-300 uppercase text-sm border-2 border-transparent hover:border-white/20">
                    <i class="ri-calendar-line mr-2"></i>体験予約
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden mobile-menu-toggle bg-gold-gradient text-white p-3 hover:shadow-lg transition-all duration-300 border-2 border-gold-500" aria-label="メニューを開く" aria-expanded="false">
                <i class="ri-menu-line text-xl"></i>
            </button>
        </div>
        
        <!-- Enhanced Mobile Menu -->
        <div class="mobile-menu lg:hidden hidden">
            <div class="mt-6 py-6 border-t border-gold-500/20" style="background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(10px); border-radius: 8px; margin-top: 1rem;">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex flex-col space-y-6 px-6',
                    'container' => false,
                    'fallback_cb' => 'junya_luxury_fallback_mobile_menu',
                ));
                ?>
                
                <div class="px-6 pt-6 border-t border-gold-500/20">
                    <a href="#contact" class="block bg-gold-gradient text-white px-6 py-4 font-bold tracking-wide text-center uppercase transition-all duration-300 hover:shadow-lg">
                        <i class="ri-calendar-line mr-2"></i>体験予約
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<?php
// Custom navigation walker
class Junya_Luxury_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="sub-menu">';
    }
    
    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= '<li' . $id . $class_names .'>';
        
        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';
        
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . ' class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span>';
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>";
    }
}

// Fallback menu for primary navigation
function junya_luxury_fallback_menu() {
    echo '<ul class="flex items-center space-x-10">';
    echo '<li><a href="#home" class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">HOME<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span></a></li>';
    echo '<li><a href="#profile" class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">ABOUT<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span></a></li>';
    echo '<li><a href="#service-flow" class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">SERVICE<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span></a></li>';
    echo '<li><a href="#pricing" class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">PRICE<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span></a></li>';
    echo '<li><a href="' . home_url('/blog/') . '" class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">BLOG<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span></a></li>';
    echo '<li><a href="#contact" class="text-black font-bold tracking-wide hover:text-gold-500 transition-all duration-300 relative group uppercase text-sm px-4 py-2 hover:bg-gold-500/10 rounded-lg">CONTACT<span class="absolute bottom-0 left-4 w-0 h-0.5 bg-gold-gradient group-hover:w-8 transition-all duration-500"></span></a></li>';
    echo '</ul>';
}

// Fallback menu for mobile navigation
function junya_luxury_fallback_mobile_menu() {
    echo '<ul class="flex flex-col space-y-6 px-6">';
    echo '<li><a href="#home" class="text-black font-bold uppercase text-lg hover:text-gold-500 transition-colors duration-300 block py-2 border-b border-gray-100">HOME</a></li>';
    echo '<li><a href="#profile" class="text-black font-bold uppercase text-lg hover:text-gold-500 transition-colors duration-300 block py-2 border-b border-gray-100">ABOUT</a></li>';
    echo '<li><a href="#service-flow" class="text-black font-bold uppercase text-lg hover:text-gold-500 transition-colors duration-300 block py-2 border-b border-gray-100">SERVICE</a></li>';
    echo '<li><a href="#pricing" class="text-black font-bold uppercase text-lg hover:text-gold-500 transition-colors duration-300 block py-2 border-b border-gray-100">PRICE</a></li>';
    echo '<li><a href="' . home_url('/blog/') . '" class="text-black font-bold uppercase text-lg hover:text-gold-500 transition-colors duration-300 block py-2 border-b border-gray-100">BLOG</a></li>';
    echo '<li><a href="#contact" class="text-black font-bold uppercase text-lg hover:text-gold-500 transition-colors duration-300 block py-2 border-b border-gray-100">CONTACT</a></li>';
    echo '</ul>';
}
?>

<main id="main" class="main-content">