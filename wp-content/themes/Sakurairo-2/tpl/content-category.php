<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>

<article class="post works-list" itemscope="" itemtype="http://schema.org/BlogPosting">
<div class="works-entry">
<div class="works-main">
<div class="works-feature">
	<?php if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('large'); ?></a>
		<?php } else {?>
		<a href="<?php the_permalink();?>"><img src="<?php echo DEFAULT_FEATURE_IMAGE(); ?>" /></a>
		<?php } ?>
	</div>
	
 	<div class="works-overlay">
	<h1 class="works-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
	<div class="works-p-time">		
	<i class="fa-solid fa-calendar-day"></i> <?php echo poi_time_since(strtotime($post->post_date));//the_time('Y-m-d');?>
	  </div>
	<div class="works-meta">
       <div class="works-comnum">  
        <span><i class="fa-regular fa-comment"></i> 
	<?php comments_popup_link(__("NOTHING","sakurairo"), __("1 Comment","sakurairo")/*条评论*/, '% '.__("Comments","sakurairo")/*条评论*/,'',__("Comment Closed","sakurairo")/**评论关闭 */); ?>

		</span>
		</div>
		<div class="works-views"> 
		<span><i class="fa-regular fa-eye"></i> <?php echo get_post_views(get_the_ID()); ?> </span>
		 </div>   
        </div>
		<a class="worksmore" href="<?php the_permalink(); ?>"></a>
     </div>		
	<!-- .entry-footer -->
	</div>	
	</div>	
	
</article><!-- #post-## -->
