<?php 
/**
 * The Search Form
 *
 * @package WordPress
 * @subpackage k9_Theme
 */
?>
			<form id="searchform" method="get" action="<?php echo get_option('home'); ?>/">
				<div>
					<label for="s">Search for:</label>
					<input class="text" id="s" name="s" type="text" value="<?php the_search_query(); ?>" />
					<input class="button" id="searchsubmit" type="submit" value="Search" />
				</div>
			</form>
