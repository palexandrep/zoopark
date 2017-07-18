<!doctype html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>Zoopark</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/styles.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" type="text/css" />
	
	<?php wp_head();?>
</head>
<body>

	  <nav class=" ">
    <div class="search-bar nav-wrapper lighten-1 container">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>

          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  <nav class="white nav-princip" role="navigation">
    <div class="nav-wrapper container">

        <a id="logo-container" href="<?php bloginfo('url');?>" class="brand-logo">
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ;?>
       <style>
          .brand-logo{ background-image: url("<?php echo $image[0];?>");}
       </style>
          
          <h1 class="brand"><?php bloginfo('name');?><em><?php bloginfo('description');?></em></h1>
        </a>
        
        <?php wp_nav_menu(array(
			//<ul class="right hide-on-med-and-down">
	            'container' => '',
              'items_wrap' => '<ul id="menu-menu-superieur" class="right hide-on-med-and-down">%3$s<li><a href="#" class="material-icons">search</a><li></ul>',

		        'theme_location' => 'main_nav',
		        'fallback_cb' => false
	        ));?>
          
      <?php wp_nav_menu(array(
			//<ul class="right hide-on-med-and-down">
	            'container' => '',
              'items_wrap' => '<ul id="nav-mobile" class="side-nav">%3$s</ul>',
		        'theme_location' => 'mobile_main_nav',
		        'fallback_cb' => false
	        ));?>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>