<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<style>
			* {
				box-sizing: border-box;
			}
			body{
				margin: 0px;
			}
			@font-face {
			    font-family: 'PauzaFOT-Bold';
			    src: url('font/PauzaFOT-Bold.eot');
			    src: url('font/PauzaFOT-Bold.eot?#iefix') format('embedded-opentype'),
			         url('font/PauzaFOT-Bold.woff') format('woff'),
			         url('font/PauzaFOT-Bold.ttf') format('truetype'),
			         url('font/PauzaFOT-Bold.svg#AftaserifRegular') format('svg');
			    font-weight: normal;
			    font-style: normal;

			}

			@font-face {
			    font-family: 'PauzaFOT-Light';
			    src: url('font/PauzaFOT-Light.eot');
			    src: url('font/PauzaFOT-Light.eot?#iefix') format('embedded-opentype'),
			         url('font/PauzaFOT-Light.woff') format('woff'),
			         url('font/PauzaFOT-Light.ttf') format('truetype'),
			         url('font/PauzaFOT-Light.svg#AftaserifRegular') format('svg');
			    font-weight: normal;
			    font-style: normal;

			}
			.container #loader {
				position: fixed;
				top: 4px;
				left: 4px;
				display: none;
			}
		</style>
		<?php 
		if (isset($_GET["size"])){
			switch ($_GET["size"]) {
		    case "300x300":
		        echo( "<link rel='stylesheet' type='text/css' href='css/bullets-300x300.css'>");
		        break;
		    case "300x250":
		        echo( "<link rel='stylesheet' type='text/css' href='css/bullets-300x250.css'>");
		        break;
		    case "300x200":
		        echo( "<link rel='stylesheet' type='text/css' href='css/bullets-300x200.css'>");
		        break;
		    case "250x250":
		        echo( "<link rel='stylesheet' type='text/css' href='css/bullets-250x250.css'>");
		        break;
		    case "250x200":
		        echo( "<link rel='stylesheet' type='text/css' href='css/bullets-250x200.css'>");
		        break;
		    case "200x200":
		        echo( "<link rel='stylesheet' type='text/css' href='css/bullets-200x200.css'>");
		        break;  

	        default:
	        	echo( "<link rel='stylesheet' type='text/css' href='css/bullets-300x300.css'>");
			} 
		}	else {
			echo( "<link rel='stylesheet' type='text/css' href='css/bullets-300x300.css'>");
		}
		?> 
	</head>
	<body>
		<div class="container">
			<img src="img/logo.png" alt="shl" class="logo">

			<div class="text">
				<h1 class="bold">שירות חדש לטיפול</h1>
				<h1 class="bold">בחולי אי-ספיקת לב</h1>
				<ul>
					<li>ניטור ומעקב טלרפואי</li>
					<li>24 שעות ביממה</li>
					<li>מניעת אשפוזים מיותרים</li>
					<li>שיפור איכות חיים</li>
				</ul>
			</div>
				
			<div class="formCont" id="formCont">
				<form name="shlForm">
					<table class="formTable">
						<tr class="row">
							<td class="col"><span class="label" >שם</span></td>
							<td class="col"><input type="text" id="fname" label="שם" required></td>
						</tr>
						<tr class="row">
							<td class="col"><span class="label">עיר</span></td>
							<td class="col"><input type="text" id="city" label="עיר" required></td>
						</tr>
						<tr class="row">
							<td class="col"><span class="label">טלפון</span></td>
							<td class="col"><input type="text" id="phone" label="טלפון" required></td>
						</tr>
					</table>
				</form>
			</div>
			<img src="img/send.png" class="send" id="sendButton" onclick="SHL.send('shlForm','sendEmail.php')">
			<img src="img/ajax-loader.gif" alt="Loading..." id="loader">
			<h1 id="success">הטופס נשלח בהצלחה</h1>
		</div>

	<script type="text/javascript" src="js/shl.js"></script>
	</body>
</html>