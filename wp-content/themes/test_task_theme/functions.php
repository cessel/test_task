<?php
/* ПОДКЛЮЧЕНИЕ JS И CSS ФАЙЛОВ ИЗ ПАПКИ /js/ и /css/ СООТВЕТСТВЕННО */
/* Для включения кеша закомментировать $v = time(); */

function CWG_scripts() {
	$v       = time();
	$uri_css = get_template_directory_uri() . '/assets/css';
	$uri_js  = get_template_directory_uri() . '/assets/js';
	$uri_node_js  = get_template_directory_uri() . '/node_modules';
	wp_deregister_script( 'jquery' );
	wp_enqueue_script('jquery',$uri_node_js.'/jquery/dist/jquery.min.js','',$v,true);
	wp_enqueue_script('main',$uri_js.'/misc.js','',$v,true);
}

add_action( 'wp_enqueue_scripts', 'CWG_scripts' );

add_filter( 'script_loader_tag', 'scripts_as_es6_modules', 10, 3 );

function scripts_as_es6_modules( $tag, $handle, $src ) {

	if ( $handle === 'main' ) {
		return str_replace( '<script ', '<script type="module"', $tag );
	}

	return $tag;
}