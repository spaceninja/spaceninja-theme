<!doctype html>
<!--
               `-/sydmNNMNNNmdys+-`               
            :sdMMMMMMMMM+/MMMMMMMMMms:`           
         :yNMMMMMMMMMy:-oo::sMMMMMMMMMMy:         
       /mMMMMMMMMMMMNMh`hh-sMNMMMMMMMMMMMm+       
     -mMMMMMMMMdo/sdMMh/yy+sMMds/odMMMMMMMMm/     
    sMMMMMMNy:`-yMMMMMMMMMMMMMMMMy-`:yNMMMMMMy`   
  `hMMMMMm+` .hMMMMMMmhysssydNMMMMMh- `+mMMMMMm`  
  dMMMMN/  `sMMMMmo-          -odMMMMs`  /mMMMMm` 
 sMMMMs`  .mMMMm:                -dMMMm-  `sMMMMh 
.MMMN:   :NMMMs                    +MMMN:   :NMMM:
sMMm.   :MMMMs                      +MMMM:   .mMMh
dMN.   .NMMMN-+/-`              `-/+:mMMMN.   .mMN
mM-    dMMMMd-MMMMmo.        `odMMMM+yMMMMd    -MM
do    `sdNMMm yMMMMMMy`    `sMMMMMMd hMMNds`    +N
smy+:`    .:y: sMMMMMMN-  `dMMMMMMh`-y:.    `:+ymh
.MMMMMNhs/-``h` -yMMMMMm  yMMMMMh: `h` -/shNMMMMM:
 sMMMMMMMMMMmdd`  `:shdm- mdhs/`   hdmMMMMMMMMMMh 
  dMMMMMMMMMMMMd`                `dMMMMMMMMMMMMm` 
  `hMMMMMMMMNds+y:              -y+sdNMMMMMMMMm`  
    sMMMMd/.    `ys`          `sh`    .:dMMMMy`   
     -dMMh.-/shNMMMNo`      `oNMMMNhs/-.hMMm:     
       /dMMMMMMMMMMMMNy/--/yNMMMMMMMMMMMMm+       
         -yNMMMMMMMMMMMMMMMMMMMMMMMMMMNy:         
            :sdMMMMMMMMMMMMMMMMMMMMms:`           
                -/oydmNNNNNNmdys+-`

"Scott, if your life had a face, I would punch it."

-->
<html>
<head>
<meta charset="utf-8" />
<title><?php // Construct the page title

	wp_title( '-', true, 'right' ); // Add the page title

	bloginfo( 'name' ); // Add the site name

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		print " - $site_description";

	// Add a page number if necessary:
	global $page, $paged;
	if ( $paged >= 2 || $page >= 2 )
		print ' - ' . sprintf( __( 'Page %s', 'flatline' ), max( $paged, $page ) );

	$stylesheetdir = get_stylesheet_directory_uri();

?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<link rel="stylesheet" href="<?php echo $stylesheetdir; ?>/css/reset.css" />
<link rel="stylesheet" href="<?php echo $stylesheetdir; ?>/fonts/league-gothic/stylesheet.css" />
<link rel="stylesheet" href="<?php echo $stylesheetdir; ?>/css/spaceninja.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
	<div id="page">

		<header id="site-header" role="banner">
			<h1 id="site-title"><a href="/">S<span class="p">p</span><span class="a">a</span>ce Ninja</a></h1>
		</header>

		<nav id="navigation" role="navigation">
			<ul>
				<li><a href="/about">About</a></li>
				<li><a href="/archives">Archives</a></li>
				<li><a href="/themes">Themes</a></li>
				<li><a href="/port">Portfolio</a></li>
			</ul>
		</nav> <!-- /#navigation -->

		<div id="content" role="main">
