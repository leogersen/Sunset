<?php

/* ADMIN PAGE */

function sunset_add_admin_page() {

  /* Generate Sunset Admin Page */
  add_menu_page( "Sunset Theme Options", "Sunset", "manage_options", "gersen_sunset", "sunset_theme_create_page", get_template_directory_uri() . "/img/sunset-icon.png", 110 );
  /* Generate Sunset Admin Sub Pages */
  add_submenu_page( "gersen_sunset", "Sunset Theme Options", "Settings", "manage_options", "gersen_sunset", "sunset_theme_create_page" );
  add_submenu_page( "gersen_sunset", "Sunset CSS Options", "Custom CSS", "manage_options", "gersen_sunset_css", "sunset_theme_settings_page");

  /* Activate Custom Settings */
  add_action( "admin_init", "sunset_custom_settings" ) ;
}
  add_action( "admin_menu", "sunset_add_admin_page" ) ;

function sunset_custom_settings() {
  register_setting( "sunset-settings-group", "first_name" ) ;
}

function sunset_theme_create_page() {

  require_once( get_template_directory() . "/inc/templates/sunset-admin.php" );

/* Admin page generarion */
}
function sunset_theme_settings_page() {
/* Settings page */
}
