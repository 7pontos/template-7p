<?php
/* Register Menu */
include('functions/sete_pontos_register_main_menu.php');
/* Register Widget Areas */
include('functions/sete_pontos_widgets_init.php');
/* Enable Support for Wordpress Options */
include('functions/sete_pontos_add_theme_support.php');
/* Cnfigure Capabilities for Editors */
include('functions/sete_pontos_capabilities.php');
/* Add Sete Pontos General Scripts */
include('functions/sete_pontos_scripts.php');
/* Add Paginatios */
include('functions/setepontos_pagination.php');
/* Add Widgets */
include 'widget/widget.php';
/* Add Shortcodes */
include 'shortcode/shortcode.php';
/* Add Administrator Panel Options */
include 'options/options.php';