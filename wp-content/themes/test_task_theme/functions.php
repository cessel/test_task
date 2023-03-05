<?php
/* АВТОМАТИЧЕСКОЕ ПОДКЛЮЧЕНИЕ JS И CSS ФАЙЛОВ ИЗ ПАПКИ /js/ и /css/ СООТВЕТСТВЕННО */
/*Для включения кеша закомментировать $v = time(); */

function CWG_scripts() {
	$v       = time();
	$uri_css = get_template_directory_uri() . '/assets/css';
	$uri_js  = get_template_directory_uri() . '/assets/js';
	wp_deregister_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'CWG_scripts' );