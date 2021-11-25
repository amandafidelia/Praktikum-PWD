<?php
session_start(); //digunakan untuk memulai eksekusi session pada server kemudian disimpan pada browser
session_destroy(); //digunakan untuk menghancurkan session yang telah dibuat
//jika berhasi logout maka akan menampilkan pesan seperti dibawah ini
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";
?>