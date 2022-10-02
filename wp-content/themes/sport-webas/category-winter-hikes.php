<?php
get_header('pa');
?>
    <main class="page tours-cat">
        <div class="container">
            <div class="category">
                <?php
                  if( have_posts() ): while( have_posts()):the_post(); ?>
                      <?php  $page_id = get_the_ID(); ?>
                      <div class="item" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
                          <div class="text-info">
                              <span class="cat">поход</span>
                              <h2><?php the_title();?></h2>
                              <div class="main-info">
                                  <span class="date"><?php echo carbon_get_post_meta( $page_id, 'tour_date_cr' )?></span>
                                  <span class="duration"><?php echo carbon_get_post_meta( $page_id, 'tour_duration_cr' )?></span>
                                  <span class="price"><?php echo carbon_get_post_meta( $page_id, 'tour_price_cr' )?></span>
                              </div>
                          </div>
                          <div class="overlay"></div>
                          <div class="item-border">
                              <a href="<?php the_permalink();?>">подробнее</a>
                              <a href="https://api.whatsapp.com/send/?phone=%996779191291&text=Здравствуйте!+Можно+записаться+в+поход+<?php the_title();?>+?&app_absent=0">записаться</a>
                          </div>

                      </div>
                  <?php endwhile; endif;
                ?>
            </div>
        </div>
        <div class="block-mountains-tour-cat">
            <img src="<?=get_template_directory_uri()?>/assets/img/berg.png" alt="">
        </div>
        <img class="grass-left" src="<?=get_template_directory_uri()?>/assets/img/Grass-l.png" alt="">
    </main>


<?php get_footer();?>