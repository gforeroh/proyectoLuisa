<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Proyecto sig.arquitectirahydsas</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="./../assets/css/main.css" />
	<link rel="stylesheet" href="./../assets/jstree/themes/default/style.css" />
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<?php require './../include/header.php';?>
				<!-- Content -->
                <?php
                $page = basename($_SERVER['PHP_SELF']);
                $include = '';
                if($_GET){
                    $page = $_GET['page'];
                }

                if($page == 'index.php'){
                    $page = 'home.php';
                }


                // switch ($page) {
                //     case 'nuestrosProductos.php':
                //         $page = 'nuestrosProductos.php';
                //         break;
                //     default:
                //         $page = 'quienesSomos.php';
                //         break;
                // }

                // echo $page; die;
                ?>
				<?php require './../include/' . $page;?>
			</div>
		</div>

		<!-- Sidebar -->
		<?php require './../include/sidebar.php';?>
	</div>

	<!-- Scripts -->
	<script src="./../assets/js/jquery.min.js"></script>
	<script src="./../assets/js/browser.min.js"></script>
	<script src="./../assets/js/breakpoints.min.js"></script>
	<!-- <script src="./../assets/jstree/jquery.jstree.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
	<script src="./../assets/js/util.js"></script>
	<script src="./../assets/js/main.js"></script>

</body>

</html>