<?php
add_action('wp_enqueue_scripts', 'my_theme_styles' );
function my_theme_styles() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css' );
	wp_enqueue_style('slick-css', get_template_directory_uri() .'/css/slick.css' );
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() .'/css/slick-theme.css' );
	wp_enqueue_style('font-awesome-css', get_template_directory_uri() .'/css/font-awesome.min.css' );
	
	wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'), '', true);
	wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true);

}

function getPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0 просмотров";
}
return $count.'';
}
function setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}
 
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
$defaults['post_views'] = __('просмотров');
return $defaults;
}
function posts_custom_column_views($column_name, $id){
if($column_name === 'post_views'){
echo getPostViews(get_the_ID());
}
}
function trim_characters($count, $after = '...'){
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = mb_substr($excerpt, 0, $count);
  $excerpt = $excerpt . $after;
  return $excerpt;
}
add_action('wp_footer', 'wpmidia_activate_masked_input');
function wpmidia_activate_masked_input(){
?>
<script type="text/javascript">
jQuery( function($){
$(".data").mask("99/99/9999");
$(".tel").mask("+375(99) 999-99-99");
});
</script>
<?php
}