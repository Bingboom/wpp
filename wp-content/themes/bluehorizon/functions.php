<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li>',
    'after_widget' => '</li>',
 'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));


// WP-mapleleaf Pages Box 	
	function widget_mapleleaf_pages() {
?>


<h4><?php _e('Pages'); ?></h4>
   <ul>
<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>

<?php wp_list_pages('title_li='); ?>

 </ul>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Pages'), 'widget_mapleleaf_pages');


// WP-mapleleaf Search Box 	
	function widget_mapleleaf_search() {
?>
   
 <ul>
<li>
   <label for="s"><h4><?php _e('Search Posts'); ?></h4></label>	
   <form id="searchform" method="get" action="<?php bloginfo('url'); ?>/index.php">
		
            <input type="text" name="s" size="18" /><br>

       
            <input type="submit" id="submit" name="Submit" value="Search" />
        
       
	</form>
 
</li>
</ul>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_mapleleaf_search');

// WP-mapleleaf Blogroll 	
	function widget_mapleleaf_blogroll() {
?>

<h4><?php _e('Blogroll'); ?></h4>

<ul>

<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>

</ul>



<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Blogroll'), 'widget_mapleleaf_blogroll');
 


?>