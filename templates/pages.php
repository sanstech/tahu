<?php

if (isset($_GET['page'])) {
	
	$page = $_GET['page'];

	switch ($page) {

		/* Order Modul */

		case 'order':
			include 'admin/module/order/read.php';
			break;
		
		case 'addorder':
			include 'admin/module/order/add.php';
			break;

		case 'editorder':
			include 'admin/module/order/edit.php';
			break;

		case 'deleteorder':
			include 'admin/module/order/delete.php';
			break;

		/* End Order Modul */

		/* Laporan Modul */

		case 'laporan':
			include 'admin/module/laporan/read.php';
			break;

		/* End Order Modul */
		
		default:
			include 'admin/index.php';
			break;
	}

}


?>