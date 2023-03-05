<?php
/**
 * The page 404 template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage cesselWebgateTheme
 * @since cesselWebgateTheme 0.1
 */

get_header();


?>

	<div class='container page page--404'>
		<div class='row'>
			<div class='col'>
				<p class="h1">Ничего не найдено</p>
            </div>
		</div>
	</div>

<?php get_footer(); ?>