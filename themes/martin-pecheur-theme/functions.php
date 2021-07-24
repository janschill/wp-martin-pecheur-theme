<?php
function martin_pecheur_theme_enqueue()
{
  wp_enqueue_style('martin-pecheur-theme', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'martin_pecheur_theme_enqueue');
