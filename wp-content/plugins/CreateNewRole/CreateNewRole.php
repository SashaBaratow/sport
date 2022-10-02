<?php
/**
* Plugin Name: Create New Role
*/

// Удаляем роль при деактивации нашей темы
add_action( 'switch_theme', 'deactivate_my_theme' );
function deactivate_my_theme() {
	remove_role( 'trainer' );
	remove_role( 'sportsman' );
}

// Добавляем роль при активации нашей темы
add_action( 'after_switch_theme', 'activate_my_theme' );
function activate_my_theme() {
	add_role( 'sportsman', 'Спортсмен',
		[
            'read'         => true,  // true разрешает эту возможность
            'upload_files' => true,  // может загружать файлы
            'publish_posts' => true,  // может загружать файлы
            'edit_posts' => true,  // может загружать файлы
            'delete_published_posts' => true,  // может загружать файлы
            'edit_published_posts' => true,  // может загружать файлы
		]
	);
	add_role( 'trainer', 'Тренер',
		[
			'read'         => true,  // true разрешает эту возможность
			'upload_files' => true,  // может загружать файлы
//			'publish_posts' => true,  // может загружать файлы
			'edit_posts' => true,  // может загружать файлы
			'edit_published_posts' => true,  // может загружать файлы
			'delete_published_posts' => true,  // может загружать файлы
		]
	);

}