<?php

define('HOME_URL', esc_url(home_url('/')));

define('SITENAME',    get_bloginfo('name'));
define('DESCRIPTION', get_bloginfo('description'));
define('DSEP', DIRECTORY_SEPARATOR);
define('TEMPLATE_PATH', str_replace('/', DSEP, get_template_directory()));
define('STYLESHEET_PATH', get_stylesheet_directory());
define('THEME', get_option('stylesheet'));

define('INC_PATH', TEMPLATE_PATH . DSEP . 'inc' . DSEP);
define('TEMPLATE_URI', get_template_directory_uri());
define('STYLESHEET_URI', get_stylesheet_directory_uri());


define('MENU_URL', home_url('/menu/'));
define('MONTHLY_URL', home_url('/monthly-menu/'));
define('USE_URL', home_url('/use/'));
define('FAQ_URL', home_url('/faq/'));
define('GROUP_URL', home_url('/for-group/'));


