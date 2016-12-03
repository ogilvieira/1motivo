<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mplsagc
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
<meta name="theme-color" content="#2472e2">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86987936-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1214799675233700');
fbq('track', 'PageView');
</script>
<?php wp_head(); ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3769091831803179",
    enable_page_level_ads: true
  });
</script>

<link href="https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1214799675233700&ev=PageView&noscript=1"/></noscript>
<header id="header">
  <div class="container">
    <div class="row">
			<div class="col-sm-6">
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			</div>
			<div class="col-sm-6">
				<div class="search-wrap">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
</header>
<section class="keep-alert">
	<div class="container">
		<div class="col-sm-5">
			<div class="intro-text">
				Qual será sua<br>
				desculpa hoje?
			</div>
		</div>
		<div class="col-sm-5 col-sm-push-2">
			<div class="call-text">
				<div class="title">
					Junte-se ao movimento
				</div>
				<div class="description">
					Mais de 7.3 mil pessoas recebem dicas e artigos<br> 
					sobre como alcançar objetivos mais rápido<br>
					e com eficiência. (é grátis).
					<div class="icon">
						<i class="ion ion-chevron-down"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="newsletter-headerbar">
	<div class="container">
		<div class="hidden-xs hidden-sm col-md-4">
			<a href="http://facebook.com/1motivosite" class="btn btn-lg btn-facebook" target="_blank"><i class="ion ion-social-facebook"></i>/1motivosite</a>
		</div>
		<div class="col-md-8">
			<form action="/" class="">
				<div class="warn">Não mandamos SPAM.</div>
				<div class="input-group">
					<input type="hidden" id="mc-FNAME" name="FNAME" value="">
					<input id="mc-EMAIL" name="EMAIL" type="email" placeholder="Seu e-mail" class="form-control input-lg" required>
					<span class="input-group-btn">
						<button class="btn btn-lg" type="submit">Receber</button>
					</span>
				</div>
			</form>
		</div>
		<div class="col-lg-12" style="display: none;">
			<label for="mc-EMAIL"></label>			
		</div>
	</div>
</section>
<div id="content">