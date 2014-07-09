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

			div.container{
				font-family: 'PauzaFOT-Light';
				background-color: #f8981d;
				height: 300px;
				width: 300px;
				border-radius: 15px;
				padding: 15px;
				overflow: hidden;
				color: white;
			}
			div.container .bold {
				font-family: 'PauzaFOT-Bold';
			}
			.container .text{
				margin-top: 10px;
			}
			.container div.text > h1 {
				color: white;
				text-align: right;
				margin: 0px;
				font-size: 35px;
			}
			.container .formTable {
				direction: rtl;
				width: 95%;
			}
			.container .formTable input {
				width: 90%;
				border-radius: 10px;
				border: solid 0px;
				padding: 2px;
			}
			.container .formTable input:focus {
				 outline: 0;
			}

			.container .label{
				font-size: 20px;
				font-weight: bold;
			}
			.container .send{
				margin-top: 5px;
			}
			.container #loader {
				float: right;
				margin-top: 10px;
				display: none;
			}
			.container #success {
				display: none;
				text-align: center;
			}
			.container #msg {
				float: right;
				margin-top: 5px;
			}

			.container ul {
			    list-style-type: none;
			    padding: 0px;
			    margin: 0px;
			    direction: rtl;
			}

			.container ul li {
				background-image: url(img/bullet.png);
				background-repeat: no-repeat;
				background-position: right 2px;
				padding-right: 20px;
				direction: rtl;
				font-size: 20px;
			}
			.container .logo {
				position: absolute;
			}

		</style>
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
							<td class="col"><input type="text" id="name" placeholder="שם" ></td>
						</tr>
						<tr class="row">
							<td class="col"><span class="label">עיר</span></td>
							<td class="col"><input type="text" id="city" placeholder="עיר" required></td>
						</tr>
						<tr class="row">
							<td class="col"><span class="label">טלפון</span></td>
							<td class="col"><input type="text" id="phone" placeholder="טלפון" required></td>
						</tr>
					</table>
					<img src="img/send.png" class="send" onclick="SHL.send('shlForm','http://demo2005784.mockable.io/test')">
					<img src="img/ajax-loader.gif" alt="Loading..." id="loader">
					<span id="msg"></span>
				</form>
			</div>
			<h1 id="success">הטופס נשלח בהצלחה</h1>
		</div>

	<script type="text/javascript" src="js/shl.js"></script>
	</body>
</html>