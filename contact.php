<?php
// the message
// $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// send email
//mail("someone@example.com","My subject",$msg);

$to = "atenimento@hmaxti.com.br";
$subject = "[Contato] Website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: webmaster@hmaxti.com.br" . "\r\n" . "CC: hess.rudinho@gmail.com";

// foreach ($_POST as $param_name => $param_val) {
//     echo "Param: $param_name; Value: $param_val<br />\n";
//
// }

$message = "
<html>
<head>
<title>Solicitação de Contato via Website</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

$this_mail = mail($to,$subject,$message,$headers);
?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hmax TI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="apple-touch-icon" sizes="180x180" href="/site/images/apple-touch-icon.png?v=1">
		<link rel="icon" type="image/png" sizes="32x32" href="/site/images/favicon-32x32.png?v=1">
		<link rel="icon" type="image/png" sizes="194x194" href="/site/images/favicon-194x194.png?v=1">
		<link rel="icon" type="image/png" sizes="192x192" href="/site/images/android-chrome-192x192.png?v=1">
		<link rel="icon" type="image/png" sizes="16x16" href="/site/images/favicon-16x16.png?v=1">
		<link rel="manifest" href="/site/images/site.webmanifest?v=1">
		<link rel="mask-icon" href="/site/images/safari-pinned-tab.svg?v=1" color="#5bbad5">
		<link rel="shortcut icon" href="/site/images/favicon.ico?v=1">
		<meta name="apple-mobile-web-app-title" content="Chamados HmaxTI">
		<meta name="application-name" content="Chamados HmaxTI">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/site/images/mstile-144x144.png?v=1">
		<meta name="msapplication-config" content="/site/images/browserconfig.xml?v=1">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="image">
							<!-- <span class="icon fa-gem"></span> -->
						<img class="logo image" src="images/logo_circleless.svg">
						</div>
						<div class="content">
							<div class="inner">
								<h1>Hmax TI</h1>
								<h2 class="major">
                  <?php
                  echo $_SERVER['PHP_SELF'];
                  if( $_POST["nome"] || $_POST["email"] || $_POST["mensagem"] ) {
                    echo "Obrigado ". $_POST['nome']. "<br />";
                    echo $_POST['email']. "<br />";
                    echo "Sua mensagem<br /> ". $_POST['mensagem']. "<br /> foi enviada";

                    exit();
                  }
									if($this_mail) echo 'sent!';
                    else echo error_get_last()['message'];;
                  ?>
									</h2>
								</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contato</a></li>
								<!-- <li><a href="#elements">Elements</a></li> -->
							</ul>
						</nav>
					</header>

				</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; HmaxTI: <a href="https://wa.me/553588751973">+55 35 988751 973</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
