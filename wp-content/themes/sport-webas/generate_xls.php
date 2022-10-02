<?php
 //you can use admin_init as well

function export_xlsx() {
	if (!empty($_POST['mytheme_export_xlsx'])) {
		if (current_user_can('manage_options')) {
			/** PHPExcel */
			include 'includes/PHPExcel-1.8/Classes/PHPExcel.php';
			/** PHPExcel_Writer_Excel2007 */
			include 'includes/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();
			// Set properties
			$objPHPExcel->getProperties()->setTitle( esc_html__('Test xlsx document', 'mytheme') );
			$objPHPExcel->getProperties()->setSubject( esc_html__('Test xlsx document', 'mytheme') );
			$objPHPExcel->getProperties()->setDescription( esc_html__('Test export users document for XLSX, generated using PHP classes.', 'mytheme') );
			// WP_User_Query arguments
			$args = array (
				'order'   => 'ASC',
				'orderby' => 'display_name',
				'fields'  => 'all',
			);
			// The User Query
			$blogusers = get_users( $args );
			$cell_counter = 1;
			//Set up the labels of the columns
			$objPHPExcel->getActiveSheet()->SetCellValue('A1', esc_html__('ФИО', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('B1', esc_html__('Email', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('C1', esc_html__('Роль', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('D1', esc_html__('Разряд', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('E1', esc_html__('Дата рождения', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('F1', esc_html__('Клуб / Отделение', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('G1', esc_html__('Дисциплина', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('H1', esc_html__('Модель оружия', 'mytheme'));
			$objPHPExcel->getActiveSheet()->SetCellValue('I1', esc_html__('Номер оружия', 'mytheme'));
			foreach ( $blogusers as $user ) {
//				var_dump($user->ID);
				$cell_counter++;
				$meta = get_user_meta($user->ID);
				$role = $user->roles;
				$email = $user->user_email;
				$first_name = ( isset($meta['first_name'][0]) && $meta['first_name'][0] != '' ) ? $meta['first_name'][0] : '' ;
				$razryad = get_field('razryad', 'user_'.$user->ID);
				$razryad = (isset($razryad) && $razryad != '' ? $razryad : 'не указан');
				$birth_day = get_field('date_of_birth', 'user_'.$user->ID);
				$birth_day = (isset($birth_day) && $birth_day != '' ? $birth_day : 'не указан');
				$club = get_field('club_department', 'user_'.$user->ID);
				$club = (isset($club) && $club != '' ? $club : 'не указан');
				$discipline = get_field('distipline', 'user_'.$user->ID);
				$discipline = (isset($discipline) && $discipline != '' ? $discipline : 'не указан');
				$weapon = get_field('weapon_model', 'user_'.$user->ID);
				$weapon = (isset($weapon) && $weapon != '' ? $weapon : 'не указан');
				$weapon_number = get_field('weapon_number', 'user_'.$user->ID);
				$weapon_number = (isset($weapon_number) && $weapon_number != '' ? $weapon_number : 'не указан');
				// Add data
				$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->SetCellValue('A'.$cell_counter.'', $first_name);
				$objPHPExcel->getActiveSheet()->SetCellValue('B'.$cell_counter.'', $email);
				$objPHPExcel->getActiveSheet()->SetCellValue('C'.$cell_counter.'', $role[0]);
				$objPHPExcel->getActiveSheet()->SetCellValue('D'.$cell_counter.'', $razryad);
				$objPHPExcel->getActiveSheet()->SetCellValue('E'.$cell_counter.'', $birth_day);
				$objPHPExcel->getActiveSheet()->SetCellValue('F'.$cell_counter.'', $club);
				$objPHPExcel->getActiveSheet()->SetCellValue('G'.$cell_counter.'', $discipline);
				$objPHPExcel->getActiveSheet()->SetCellValue('H'.$cell_counter.'', $weapon);
				$objPHPExcel->getActiveSheet()->SetCellValue('I'.$cell_counter.'', $weapon_number);
			}
			// Set column data auto width
			for($col = 'A'; $col !== 'E'; $col++) {
				$objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
			}
			// Rename sheet
			$objPHPExcel->getActiveSheet()->setTitle(esc_html__('Users', 'mytheme'));
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="users.csv"');
			header('Cache-Control: max-age=0');
			// Save Excel file
			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
			exit();
		}
	}
}

