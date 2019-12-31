<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('title');?></title>

	<!-- ================= Open Graph ================== -->
		<meta name="Diseño de soluciones" content="Somos un laboratorio de innovación apasionados por resolver problemas que nadie puede.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Ruptivo">
        <meta name="Description" content="laboratorio creativo innovación design thinking brand web app digital experiencia de usuario">

        <!-- ================= Favicons ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/images/favicon.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/images/favicon.png">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/images/favicon.png">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/images/favicon.png">
        <!-- Font awesome--> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	
	<?php wp_head(); ?>

</head>
<body>

<section class="content-general">
	

		<div class="header">
			<div class="navbar">
				<div class="container-logo">
					<div class="item-logo"><a href="index.php"><img src="<?php bloginfo('template_directory');?>/images/logo.svg" alt="logo"></a></div>
				</div>
				<div class="container-menu" onclick="sidebar_open()">
					<i class="fas fa-bars"></i>
				</div>

				<!-- Sidebar -->
					<div class="container-sidebar item-bar-block" id="mySidebar">

						<div onclick="sidebar_close()" class="item-bar-item item-close">
							<span><i class="fas fa-times"></i></span>
							</div>

					<?php wp_nav_menu(

							array(

								'theme_location' => 'top_menu',
								'menu' => 'container-items',
								'container' => 'ul',
								'menu_class' => 'container-items'
							)

					); ?>
					</div>
					
			</div>
		</div>