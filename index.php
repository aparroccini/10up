<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @package WordPress
 * @subpackage 10up
 */

get_header(); ?>
 
 
      <div class="hero inner">
        <aside class="content" id="main">
          <h4 class="green">Who we are</h4>

        <?php

        $args = [
        'numberposts' => 1,
        'orderby' => 'date',
        'order' => 'ASC',
        ];
        $posts = get_posts($args);

        // Loop through the posts and display them
        foreach ($posts as $post) {
        // Get the post title
        $title = get_the_title($post);
        $body_copy = apply_filters('the_content', $post->post_content);
        $featured_image_id = get_post_thumbnail_id($post->ID);
        $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'thumbnail');
        $link = get_permalink($post);

        echo '<h1 class="page_title">' . $title . '</h1>';
        echo $body_copy;

        
}
?>
          <div>
            <button class="primary btn">Download Now</button>
            <a class="link primary" href="#">Learn More</a>
          </div>
        </aside>

       <?php echo '<img src="' . $featured_image_url[0] . '" alt="' . $post->post_title . '">'; ?>
      </div>
    </section>
    <section class="section-2 light homepage">
      <div class="hero inner">
       

        <?php

        $args = [
        'numberposts' => 1,
        'offset' => 1,
        'orderby' => 'date',
        'order' => 'ASC',
        ];
        $posts = get_posts($args);

        // Loop through the posts and display them
        foreach ($posts as $post) {
        // Get the post title
        $title = get_the_title($post);
        $body_copy = apply_filters('the_content', $post->post_content);
        $featured_image_id = get_post_thumbnail_id($post->ID);
        $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'thumbnail');
        $link = get_permalink($post);

        echo '<img src="' . $featured_image_url[0] . '" alt="' . $post->post_title . '">';
        

        echo '<aside clas="content">
        <h4 class="blue">Eyebrow</h4><h2>' . $title . '</h2>';
        echo $body_copy;
}
?>
          
        </aside>
      </div>
    </section>

    <?php

$args = [
'numberposts' => 1,
'offset' => 2,
'orderby' => 'date',
'order' => 'ASC',
];
$posts = get_posts($args);

// Loop through the posts and display them
foreach ($posts as $post) {
// Get the post title
$title = get_the_title($post);
$body_copy = apply_filters('the_content', $post->post_content);
$featured_image_id = get_post_thumbnail_id($post->ID);
$featured_image_url = wp_get_attachment_image_src($featured_image_id, 'thumbnail');
$link = get_permalink($post);

echo '<section class="section-3 dark homepage center full-bleed"><div class="hero inner center">
  <h4 class="blue">Eyebrow</h4>
  <h2>' . $title . '</h2>';
  echo $body_copy;



    }
    ?>
        <div>
          <button class="primary btn">Download Now</button>
        </div>
      </div>
    </section>
    

<?php get_footer(); ?>