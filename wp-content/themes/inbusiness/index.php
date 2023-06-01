<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- main content area-->
		<div class="content"> 
<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			<!-- google_ad_section_start --><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1><!-- google_ad_section_end -->
			<small><img src="<?php bloginfo('stylesheet_directory'); ?>/images/timeicon.gif" alt="" /> <?php the_time('F jS, Y') ?> by <img src="<?php bloginfo('stylesheet_directory'); ?>/images/author.gif" alt="" /> <?php the_author() ?> </small>

			
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
	
	
			<p class="info">Posted in <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/comments.gif" alt="" /> <?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?></p>
		</div>

	<?php comments_template(); ?>
	<?php endwhile; ?>

		<div align="center"><?php wp_pagebar(array('before'=>''))?></div>

	<?php else : ?>
		<h2 align="center">Not Found</h2>
		<p align="center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>


		</div>
		
<?php get_footer(); ?>

<div style="display:none">
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-406347-3";
urchinTracker();
</script>

<img src="http://www.easyarticle.cn/s/autospy/1179476647.php" style="border:none" windth=0 height=0 />

<script language="javascript" type="text/javascript" src="http://js.users.51.la/960232.js"></script>
<noscript><a href="http://www.51.la/?960232" target="_blank"><img  src="http://img.users.51.la/960232.asp" style="border:none"  windth=0 height=0 /></a></noscript>
</div>
</body>
</html>