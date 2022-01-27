<?php

	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(E_ALL);

	//phpinfo();
	//echo "mansur" . '<br/>';

	//require __DIR__ . '/baglan.php';
	require __DIR__ . '/database.php';
	require __DIR__ . '/model.php';
	require __DIR__ . '/controller.php';
	require __DIR__ . '/route.php';

	/*
	Route::run('/',function(){
		echo "merhaba mansur emin";
	});
*/
	Route::run('/uyeler' ,'uyeler@index');
	Route::run('/uyeler' ,'uyeler@post' , 'post');
	Route::run('/uye/{url}' ,'uye@index'); //{url} veya {id} yazılır
	Route::run('/profile/sifre-degistir' ,'profil@index');




?>
