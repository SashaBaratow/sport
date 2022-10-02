<?php
get_header();
global $post;
$years  = [ 2023, 2024, 2025, 2026, 2027, 2028 ];
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
?>
    <select id="events-year" class="form-select " aria-label="Default select example">
        <option selected value="2022"><?= date('Y')?></option>
        <?php foreach ($years as $year): ?>
        <option value="<?= $year?>"><?= $year?></option>
        <?php endforeach; ?>
    </select>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="event-overlay"></div>
        <?php foreach ( $months as $key => $value ): ?>
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
							'date_query'       => [ 'year' => 2022 ],
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
		<?php endforeach; ?>
    </div>
<?php get_footer();