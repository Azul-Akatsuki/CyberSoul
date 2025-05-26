<?php 
function show_once_welcome_page() {
  if ( is_admin() || is_user_logged_in() || defined('DOING_AJAX') && DOING_AJAX ) return;


  if ( !isset($_COOKIE['visited_once']) ) {
      setcookie('visited_once', 'yes', time() + 60 * 60 * 24, "/");
      $current_url = home_url( add_query_arg( null, null ) );
      $welcome_url = home_url('/welcome');

      if ( $current_url !== $welcome_url ) {
          wp_redirect( $welcome_url );
          exit;
      }
  }
}
add_action('template_redirect', 'show_once_welcome_page');


?>

<?php 
function get_story_episode_number($post_id) {
  $args = [
      'post_type' => 'story',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'ASC',
      'fields' => 'ids',
  ];
  $query = new WP_Query($args);

  if (!$query->have_posts()) return null;

  $posts = $query->posts;
  $index = array_search($post_id, $posts);

  return $index !== false ? $index + 1 : null;
}
?>

<?php 
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 5);
function remove_thumbnail_dimensions( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}
?>

<?php 
add_filter('wp_calculate_image_srcset_meta', '__return_null');
?>