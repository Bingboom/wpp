<div class="newsbar">

<div class="p2">
		<h2><?php _e('About the Site:'); ?></h2>
		<ul><li><?php bloginfo('description'); ?></li></ul>
</div>
<div class="p2">

     <?php if (function_exists('wp_theme_switcher')) { ?>
     <h2>Themes:</h2>
       <?php wp_theme_switcher('dropdown'); ?>
         <?php } ?>
</div>



<div class="p2">
		<h2><?php _e('About Me:'); ?></h2>
		<ul><li>Write about yourself here</li></ul>
		<h2><?php _e('Categories:'); ?></h2>
		<ul>
			<?php list_cats(0, '', 'name', 'ASC', '/', true, 0, 1);    ?>
		</ul>
</div>

<div class="p2">
<?php if (is_single()) { ?>

<h2>Calendar</h2>

	<?php get_calendar() ?>
<?php } ?>
</div>
<div class="p2">
		<h2><label for="s"><?php _e('Search:'); ?></label></h2>
		<ul>
			<li>
			<form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
			<div>
					<input type="text" name="s" id="s" size="15" /><br />
					<input type="submit" name="submit" value="<?php _e('Search'); ?>" />
			</div>
				</form>
			</li>
		</ul>
</div>		

<div class="p2">
		<h2><?php _e('Archives:'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
		</ul>
</div>
<div class="p2">
		<h2><?php _e('Meta:'); ?></h2>
		<ul>
<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
		<?php wp_meta(); ?>
		</ul>
</div>
		
</div>