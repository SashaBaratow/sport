<?php
$sidebar = boxstyle_sidebar_primary();
$layout  = boxstyle_layout_class();
if ( $layout != 'col-1c' ):
	?>

    <div class="sidebar s1">

        <div class="sidebar-content">

			<?php if ( get_theme_mod( 'post-nav', 's1' ) == 's1' ) {
				get_template_part( 'inc/post-nav' );
			} ?>

			<?php if ( is_page_template( 'page-templates/child-menu.php' ) ): ?>
                <ul class="child-menu group">
					<?php wp_list_pages( 'title_li=&sort_column=menu_order&depth=3' ); ?>
                </ul>
			<?php endif; ?>

			<?php dynamic_sidebar( $sidebar ); ?>
            <div class="last-events">
                <h5 class="mb-1">Мероприятия</h5>
				<?php
				// параметры по умолчанию
				$my_posts = get_posts( array(
					'numberposts'      => 5,
					'orderby'          => 'date',
					'order'            => 'ASC',
					'post_type'        => 'events',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				global $post;

				foreach ( $my_posts as $post ) {
					setup_postdata( $post ); ?>

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php }

				wp_reset_postdata(); // сброс

				?>
            </div>
        </div><!--/.sidebar-content-->

    </div><!--/.sidebar-->

<?php endif; ?>