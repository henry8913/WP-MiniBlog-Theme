
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <h1 class="text-2xl font-bold text-gray-800"><?php bloginfo('name'); ?></h1>
                <?php endif; ?>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container_class' => 'md:flex space-x-4 hidden',
                        'menu_class' => 'flex space-x-4'
                    ));
                ?>
            </div>
        </nav>
    </header>
