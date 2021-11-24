<?php
//pada form login digunakan untuk melakukan login users
//dengan inputan berupa id_user/username dan passwordnya yang telah berhasil dibuat pada form_user
//kemudian menggunakan method post dan actionnya cek_login.php
echo "<h2>Login</h2>
<form method=post action=cek_login.php>
	<table>
		<tr>
			<td>Username</td>
			<td> : <input name='id_user' type='text'></td></tr>
		<tr>
			<td>Password</td>
			<td> : <input name='paswd' type='text'></td></tr>
		<tr>
			<td>Captcha<br>
			<img src='captcha.php' /></td><td> : <input name='captcha_code' type='text'></td></tr>
		<tr>
			<td colspan=2>
			<input type='submit' value='LOGIN'></td></tr>
	</table>
</form>";
?>