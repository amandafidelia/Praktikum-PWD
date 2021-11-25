<?php

	session_start(); //digunakan untuk memulai eksekusi session pada server kemudian disimpan pada browser
	
	$random_alpha = md5(rand()); //digunakan untuk membuat nomor acak dan ditampilkan pada gambar capctha nya
	$captcha_code = substr($random_alpha, 0, 6); //untuk jumlah karakternya
	$_SESSION["captcha_code"] = $captcha_code; //digunakan untuk menentukan session nya
	$target_layer = imagecreatetruecolor(70,30); //digunakan untuk membuat gambar dengan meentukan ukurannya
	$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); //digunakan untuk pengaturan background captchanya
	imagefill($target_layer,0,0,$captcha_background);
	$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); //digunakan untuk pengaturan font pada captchanya
	imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
	header("Content-type: image/jpeg"); //digunakan untuk membuat gambar dengan php
	imagejpeg($target_layer);
?>
