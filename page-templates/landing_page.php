<?php
/* 
Template Name: Homepage Template
Template Post Type: post, page, event
*/

get_header();
?>

<!-- Banner -->
  <?php
    $args = array (
      'meta_key' => 'featured',
      'posts_per_page' => 1
    );
    $query = new WP_Query($args);
    while($query->have_posts()): $query->the_post();
    $do_not_duplicate[] = $post->ID;
    $categories = get_the_category();
  ?>
    <section class="banner" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
      <div class="container">
        <div class="banner_content">
          <div class="cat_info">
            <span><?php echo esc_html__( 'Featured', 'blog_indive');?></span>
            <?php if ( ! empty( $categories ) ) :?>
              <span>&#10072;</span>
              <?php echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?>
            <?php endif;?>
          </div>
          <h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
          <div class="meta_info">
            <span><?php echo reading_time()." Read";?></span>
            <span>&#10072;</span>
            <a href="<?php echo get_the_permalink();?>"><?php echo esc_html__( 'Read More', 'blog_indive' );?></a>
          </div>
        </div>
      </div>
    </section>
  <?php
    endwhile;
    wp_reset_postdata();
  ?>

<!-- Featured Posts -->
  <?php 
    $args1 = array (
      'meta_key' => 'featured',
      'posts_per_page' => 3,
      'post__not_in' => $do_not_duplicate,
    );
    $loop = new WP_Query( $args1 );
  ?>
    <section class="featured_posts">
      <div class="container">
        <div class="featured_posts_wrap">
          <?php
            while ( $loop->have_posts() ) : $loop->the_post();
            $categories1 = get_the_category();
          ?>
          <div class="featured_post" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
            <div class="featured_post_content">
              <div class="cat_info">
                <span><?php echo esc_html__( 'Featured', 'blog_indive');?></span>
                <?php if ( ! empty( $categories1 ) ) :?>
                  <span>&#10072;</span>
                  <?php echo '<a href="' . esc_url( get_category_link( $categories1[0]->term_id ) ) . '">' . esc_html( $categories1[0]->name ) . '</a>';?>
                <?php endif;?>
              </div>
              <h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
              <div class="meta_info">
                <span><?php echo reading_time()." Read";?></span>
                <span>&#10072;</span>
                <a href="<?php echo get_the_permalink();?>"><?php echo esc_html__( 'Read More', 'blog_indive' );?></a>
              </div>
            </div>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>

<!-- Trending Posts -->
<?php 
  $popularpost = new WP_Query( array( 
    'posts_per_page' => 3,
    'meta_key' => 'wpb_post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'  )
  );
?>
<section class="trending_posts">
  <div class="container">
    <h2 class="section_title"><?php echo esc_html__( "Trending Now", 'blog_indive' );?></h2>
    <?php if($popularpost->have_posts()):?>
      <div class="trending_post_wrap">
        <?php while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
          <div class="trending_post" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
            <div class="trending_post_content">
              <div class="cat_info">
                <span><?php echo esc_html__( 'Trending Now', 'blog_indive');?></span>
                <?php if ( ! empty( $categories1 ) ) :?>
                  <span>&#10072;</span>
                  <?php echo '<a href="' . esc_url( get_category_link( $categories1[0]->term_id ) ) . '">' . esc_html( $categories1[0]->name ) . '</a>';?>
                <?php endif;?>
              </div>
              <h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
              <div class="meta_info">
                <span><?php echo reading_time()." Read";?></span>
                <span>&#10072;</span>
                <a href="<?php echo get_the_permalink();?>"><?php echo esc_html__( 'Read More', 'blog_indive' );?></a>
              </div>
            </div>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    <?php endif;?>
  </div>
</section>

<!-- Latest Articles -->
<?php 
  $latesposts = new WP_Query( array( 
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => 1,
    )
  );
?>
<section class="latest_posts">
  <div class="container">
    <h2 class="section_title"><?php echo esc_html__( "Latest Articles", 'blog_indive' );?></h2>
    <?php if($latesposts->have_posts()):?>
      <div class="latest_post_wrap">
        <?php while ( $latesposts->have_posts() ) : $latesposts->the_post();?>
          <div class="latest_post" style="background: url('<?php echo get_the_post_thumbnail_url();?>')">
            <div class="latest_post_content">
              <div class="cat_info">
                <span><?php echo esc_html__( 'Latest Now', 'blog_indive');?></span>
                <?php if ( ! empty( $categories1 ) ) :?>
                  <span>&#10072;</span>
                  <?php echo '<a href="' . esc_url( get_category_link( $categories1[0]->term_id ) ) . '">' . esc_html( $categories1[0]->name ) . '</a>';?>
                <?php endif;?>
              </div>
              <h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
              <div class="meta_info">
                <span><?php echo reading_time()." Read";?></span>
                <span>&#10072;</span>
                <a href="<?php echo get_the_permalink();?>"><?php echo esc_html__( 'Read More', 'blog_indive' );?></a>
              </div>
            </div>
          </div>
        <?php
          endwhile;
        ?>
      </div>
    <?php
      endif;
      wp_reset_postdata();
    ?>
  </div>
</section>
<?php get_footer();?>