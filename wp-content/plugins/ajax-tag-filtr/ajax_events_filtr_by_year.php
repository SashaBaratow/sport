<?php
/**
 * Plugin Name: ajax-tag-filter
 */

add_action('wp_ajax_get_events', 'get_events_by_year');
add_action('wp_ajax_nopriv_get_events', 'get_events_by_year');

function get_events_by_year(){
	$current_year= empty($_POST['currentYear']) ? false : esc_attr($_POST['currentYear']);
	$months = [
		'01' => 'январь',
		'02' => 'февраль',
		'03' => 'март',
		'04' => 'апрель',
		'05' => 'май',
		'06' => 'июнь',
		'07' => 'июль',
		'08' => 'август',
		'09' => 'сентябрь',
		'10' => 'октябрь',
		'11' => 'ноябрь',
		'12' => 'декабрь',
	];
	foreach ( $months as $key => $value ): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading<?= $key ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse<?= $key ?>" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapse<?= $key ?>">
						<?= $value ?>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse<?= $key ?>" class="accordion-collapse collapse"
                     aria-labelledby="panelsStayOpen-heading<?= $key ?>">
                    <div class="accordion-body">
						<?php
						// параметры по умолчанию
						$my_posts = get_posts( array(
							'numberposts'      => - 1,
							'orderby'          => 'date',
							'order'            => 'ASC',
							'post_type'        => 'events',
							'date_query'       => [ 'year' => $current_year ],
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						) );

						global $post;

						foreach ( $my_posts as $post ) {
							setup_postdata( $post );
							$event_id         = $post->ID;
							$event_date       = get_field( 'event_date', $event_id );
							$event_date_month = substr( $event_date, 3, - 5 );
//                        var_dump($event_date_month);
							if ( $key == $event_date_month ):
								?>  <a href="<?= the_permalink() ?>"> <?= the_title(); ?> </a> <br> <?php
							endif;
						}
						wp_reset_postdata(); // сброс
						?>
                    </div>
                </div>
            </div>
		<?php endforeach;


	wp_die();
}

//add_action( 'admin_print_scripts', 'my_action_javascript' ); // такое подключение будет работать не всегда
add_action( 'wp_enqueue_scripts', 'my_scripts', 99 );
function my_scripts() {
    wp_enqueue_script('ajax', plugins_url('ajax.js', __FILE__) , array('jquery'), '01', true );
    wp_localize_script('ajax', 'myAjax', array(
        'ajaxUrl'=>admin_url('admin-ajax.php'),
    ));
}
?>