<?php
require_once( 'generate_xls.php' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'wp_enqueue_scripts', 'thebtidge_webas_scripts' );
add_action( 'admin_enqueue_scripts', 'admin_script_reg' );
add_theme_support( 'post-thumbnails' );
function admin_script_reg(){
	wp_enqueue_script( 'tuk-main-js', get_template_directory_uri().'/assets/js/main-admin.js', array(), null, true );
}

function theme_register_nav_menu() {
    register_nav_menu( 'top-menu', 'Меню в шапке' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
    add_image_size( 'post-thumb', 400, 520, true );
    
}
function thebtidge_webas_scripts() {
    wp_enqueue_style( 'tuk-animate-main-style', get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style( 'tuk-boot-main-style', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'tuk-fancy-main-style', get_template_directory_uri().'/assets/css/fancybox.css');
    wp_enqueue_style( 'tuk-slick-main-style', get_template_directory_uri().'/assets/css/slick.css');
    wp_enqueue_style( 'tuk-slick-main-style', get_template_directory_uri().'/assets/css/slick-theme.css');
    wp_enqueue_style( 'tuk-webas-wp-style', get_stylesheet_uri());

    $version='0.0.0.0';
    wp_enqueue_script('jqueryscr', 'https://code.jquery.com/jquery-3.6.0.min.js');
//    wp_enqueue_script( 'thebtidge-webas-main-js', get_template_directory_uri().'/assets/js/main.min.js', array(), $version, true );
    wp_enqueue_script( 'tuk-boot-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), $version, true );
    wp_enqueue_script( 'tuk-fansy-js', get_template_directory_uri().'/assets/js/fancybox.umd.js', array(), $version, true );
    wp_enqueue_script( 'tuk-slick-js', get_template_directory_uri().'/assets/js/slick.min.js', array(), $version, true );
    wp_enqueue_script( 'tuk-wow-js', get_template_directory_uri().'/assets/js/wow.min.js', array(), $version, true );
    wp_enqueue_script( 'tuk-main-js', get_template_directory_uri().'/assets/js/main.js', array(), $version, true );

	wp_enqueue_script( 'boxstyle-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.min.js', array( 'jquery' ),'', false );
	wp_enqueue_script( 'boxstyle-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'boxstyle-jq-sticky-anything', get_template_directory_uri() . '/js/jq-sticky-anything.min.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'boxstyle-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );

}

add_filter( 'wp_targeted_link_rel', 'my_function_remove_noreferrer' );
function my_function_remove_noreferrer( $rel_values ) {
    return preg_replace( '/noreferrer\s*/i', '', $rel_values );
}

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate


add_action( 'admin_menu', 'remove_menus' );
 function remove_menus(){
	$current_user = wp_get_current_user();
	$current_user_role = $current_user->roles[0];
    if ($current_user_role == 'administrator'){
	  echo '';
    }if ($current_user_role == 'trainer'){
	    remove_menu_page( 'index.php' );                  // Консоль
	    remove_menu_page( 'edit.php' );                   // Записи
	    remove_menu_page( 'upload.php' );                 // Медиафайлы
	    remove_menu_page( 'edit.php?post_type=page' );    // Страницы
	    remove_menu_page( 'edit-comments.php' );          // Комментарии
	    remove_menu_page( 'themes.php' );                 // Внешний вид
	    remove_menu_page( 'plugins.php' );                // Плагины
	    remove_menu_page( 'users.php' );                  // Пользователи
	    remove_menu_page( 'tools.php' );                  // Инструменты
	    remove_menu_page( 'options-general.php' );        // Параметры
	    remove_menu_page( 'edit.php?post_type=training' );        // Параметры

    }if ( $current_user_role == 'sportsman' ){
	    remove_menu_page( 'index.php' );                  // Консоль
	    remove_menu_page( 'edit.php' );                   // Записи
	    remove_menu_page( 'upload.php' );                 // Медиафайлы
	    remove_menu_page( 'edit.php?post_type=page' );    // Страницы
	    remove_menu_page( 'edit-comments.php' );          // Комментарии
	    remove_menu_page( 'themes.php' );                 // Внешний вид
	    remove_menu_page( 'plugins.php' );                // Плагины
	    remove_menu_page( 'users.php' );                  // Пользователи
	    remove_menu_page( 'tools.php' );                  // Инструменты
	    remove_menu_page( 'options-general.php' );        // Параметры
    }

}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'training', [
		'label'  => 'training',
		'labels' => [
			'name'               => 'Тренировки', // основное название для типа записи
			'singular_name'      => 'Тренировка', // название для одной записи этого типа
			'add_new'            => 'Добавить Тренировку', // для добавления новой записи
			'add_new_item'       => 'Добавление Тренировки', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Тренировку', // для редактирования типа записи
			'new_item'           => 'Новая Тренировка', // текст новой записи
			'view_item'          => 'Смотреть Тренировку', // для просмотра записи этого типа.
			'search_items'       => 'Искать Тренировку', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Тренировки', // название меню
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => false,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'delete_with_user'    => true,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'author'           => 1,
	] );
	register_post_type( 'events', [
		'label'  => 'events',
		'labels' => [
			'name'               => 'События', // основное название для типа записи
			'singular_name'      => 'Событие', // название для одной записи этого типа
			'add_new'            => 'Добавить Событие', // для добавления новой записи
			'add_new_item'       => 'Добавление События', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование События', // для редактирования типа записи
			'new_item'           => 'Новое Событие', // текст новой записи
			'view_item'          => 'Смотреть Событие', // для просмотра записи этого типа.
			'search_items'       => 'Искать События', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'События', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'author'           => 1,
	] );
}

function edit_admin_menus() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Информация'; // Изменить Записи на Информация
    $submenu['edit.php'][15][0] = 'Категории';
}
add_action( 'admin_menu', 'edit_admin_menus' );

function change_tax_object_label() {
    global $wp_taxonomies;
    $labels = &$wp_taxonomies['category']->labels;
    $labels->name = __('Категории', 'theme_namespace');
    $labels->singular_name = __('Категории', 'theme_namespace');
    $labels->search_items = __('Поиск Категории', 'theme_namespace');
    $labels->all_items = __('все Категории', 'theme_namespace');
    $labels->parent_item = __('Родительская Категория', 'theme_namespace');
    $labels->parent_item_colon = __('Родительская Категория:', 'theme_namespace');
    $labels->edit_item = __('Редактировать Категорию', 'theme_namespace');
    $labels->view_item = __('Показать Категории', 'theme_namespace');
    $labels->update_item = __('Обновить Категорию', 'theme_namespace');
    $labels->add_new_item = __('Добавить Категорию', 'theme_namespace');
    $labels->new_item_name = __('Категория', 'theme_namespace');
    $labels->menu_name = "Категория";
}
add_action( 'init', 'change_tax_object_label' );

add_action('transition_post_status', 'tse_make_post_private', 10, 3);
function tse_make_post_private( $new_status, $old_status, $post ) {
    // check if is published and the post type is "post"
    if ( 'publish' === $new_status && $post->post_type === 'training' ) {
        // check if the post status is not private
        if ( $post->post_status != 'private' ) {
            // change the post status to privateo
            $post->post_status = 'private';
            // update the post
            wp_update_post( $post );
        }
    }
}

add_action( 'register_new_user', 'wp_kama_register_new_user_action' );
function wp_kama_register_new_user_action( $user_id ){

	$user_selected_role =  get_field('choose_role', 'user_'.$user_id );
	$user_fio =  get_field('fio', 'user_'.$user_id );
	wp_update_user([
		'ID' => $user_id, // this is the ID of the user you want to update.
		'first_name' => $user_fio,
	]);
	if ($user_selected_role == 'trainer'){
		$u = new WP_User( $user_id);
		$u->set_role( 'trainer' );
	}else{
		$u = new WP_User( $user_id);
		$u->set_role( 'sportsman' );
	}
}


//hide post visability option
add_action('add_meta_boxes', function() {
	add_action('admin_head', function() {

		$post_type = get_post_type( get_the_ID() );
		if ($post_type =='training'){
			echo <<<EOS
			<style type="text/css">
			#visibility {
			    display: none;
			}
			</style>
			
			EOS;
		}
	});
});
add_action('restrict_manage_posts', function() {
	echo <<<EOS
<script type="text/javascript">
jQuery(document).ready(function($) {
    $("input[name='keep_private']").parents("div.inline-edit-group:first").hide();
});
</script>

EOS;
});

// hide profile page fields
add_action( 'admin_head', 'wp_kama_edit_user_profile_update_action' );
function wp_kama_edit_user_profile_update_action(){
	if (!current_user_can( 'manage_options' )){
		echo <<<EOS
			<script type="text/javascript">
			jQuery(document).ready(function($) {
			    $(".user-admin-color-wrap").parent('tbody').parent('table.form-table').hide();
			    $(".user-description-wrap").parent('tbody').parent('table.form-table').hide();
			    $(".acf-field").parent('tbody').parent('table.form-table').hide();
			    $("h2").val('Имя').hide();
			    $("tr.user-last-name-wrap").hide();
			    $("tr.user-nickname-wrap").hide();
			    $("tr.user-url-wrap").hide();
			    $("#application-passwords-section").hide();
			});
			</script>
			EOS;
	}

}

add_action( 'admin_head', 'wp_close_event_add' );
function wp_close_event_add(){
	$post_type = get_post_type( get_the_ID() );
	if ($post_type =='events' && !current_user_can( 'manage_options' )){
		echo <<<EOS
			<script type="text/javascript">
			jQuery(document).ready(function($) {
			    $(".page-title-action").val('Добавить Событие').hide();
			});
			</script>
			EOS;
	}
}



/********* Export to xlsx ***********/
add_action('admin_footer', 'mytheme_export_csv');


function mytheme_export_csv() {
	$screen = get_current_screen();
	if ( $screen->id == "users" ):   // Only add to users.php page	?>
    <script type="text/javascript">
        jQuery(document).ready( function($)
        {
            $('.tablenav.top .clear, .tablenav.bottom .clear').before('<form action="#" method="POST"><input type="hidden" id="mytheme_export_xlsx" name="mytheme_export_xlsx" value="1" /><input class="button button-primary user_export_button" style="margin-top:3px;" type="submit" value="<?php esc_attr_e('Export All as XLSX', 'mytheme');?>" /></form>');
        });
    </script>
	<?php endif;
}
add_action('admin_init', 'export_xlsx');

function add_author_support_to_posts() {
	add_post_type_support( 'training', 'author' );
}
add_action( 'init', 'add_author_support_to_posts' );



