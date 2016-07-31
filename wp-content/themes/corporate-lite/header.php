 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Corporate Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="top-bar">
		<div class="aligner">
        		<div class="top-left">
              <!-- <p class="call"><?php echo esc_attr(get_theme_mod('cont_phone','+1 500 000 0000')); ?></p>
              <p class="mail"><a href="mailto:<?php echo esc_attr(get_theme_mod('cont_email','demo@example.com')); ?>">
                <?php echo esc_attr(get_theme_mod('cont_email','demo@example.com')); ?></a></p> -->
            </div><!-- top-left -->
                <div class="top-right">
                  <?php get_template_part( 'menu', 'social' ); ?>
                  <?php get_search_form(); ?>
                  <!-- <ul class="search-box">
                    <li><input type="text" class="form-control" placeholder="search..." /></li>
                    <li><button class="search-btn"><i class="genericon genericon-search"></i></button></li>
                  </ul> -->

          <!-- <ul class="social">
             <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a href="#"><i class="genericon genericon-facebook"></i></a></li>
          <?php if($wl_theme_options['twitter_link']!='') { ?>
          <li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twiiter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>"><i class="fa fa-twitter"></i></a></li>
          <?php } if($wl_theme_options['linkedin_link']!='') { ?>         
          <li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>"><i class="fa fa-linkedin"></i></a></li>
          <?php } if($wl_theme_options['youtube_link']!='') { ?>
          <li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
                  <?php } ?>
          </ul> -->

                </div><!-- top-right --><div class="clear"></div>
        </div><!-- aligner -->
</div><!-- top-bar -->
<div class="header">
            		<div class="aligner">
                    		<div class="logo">
                            		<?php corporate_lite_the_custom_logo(); ?><!-- 
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1> -->

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo $description; ?></p>
					<?php endif; ?>
                             </div>
                             <div class="toggle">
                            <a class="toggleMenu" href="#"><?php _e('Menu','corporate-lite'); ?></a>
                            </div>                           
                            <div class="nav">
								<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div><!-- nav --><div class="clear"></div>
                    </div><!-- aligner -->
            </div><!-- header -->
<?php if ( is_front_page() ) { ?>
    <div class="slider-main">
       <?php
	   		
			$slideimage = '';
			$slideimage = array(
					'1'	=>	get_template_directory_uri().'/images/slides/slider1.jpg',
					'2'	=>  get_template_directory_uri().'/images/slides/slider2.jpg',
					'3'	=>  get_template_directory_uri().'/images/slides/slider3.jpg',
			);
	   
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, true) != "" ) {
					$imgSrc 	= esc_url(get_theme_mod('slide_image'.$i, $slideimage[$i]));
					$imgTitle	= esc_attr(get_theme_mod('slide_title'.$i, true));
					$imgDesc	= esc_attr(get_theme_mod('slide_desc'.$i, true));
					$imglink	= esc_url(get_theme_mod('slide_link'.$i, true));
					if ( strlen($imgSrc) > 4 ) {
						$slAr[$m]['image_src'] = esc_url(get_theme_mod('slide_image'.$i, $slideimage[$i]));
						$slAr[$m]['image_title'] = esc_attr(get_theme_mod('slide_title'.$i, true));
						$slAr[$m]['image_desc'] = esc_attr(get_theme_mod('slide_desc'.$i, true));
						$slAr[$m]['image_url'] = esc_url(get_theme_mod('slide_link'.$i, true));
						$m++;
					}
				}
				
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php if ( ($sv['image_title']!='') && ($sv['image_desc']!='')) { echo '#slidecaption'.$n ; } ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="slide-cap">
                        <?php if( get_theme_mod('slide_title'.$sln, true) != '' ){ ?>
                            <h4><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('Slide Title ','corporate-lite').$sln)); ?></h4>
                        <?php } ?>
                        <?php if( get_theme_mod('slide_desc'.$sln, true) != '' ){ ?>
                            <p><?php echo esc_attr(get_theme_mod('slide_desc'.$sln, __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur','corporate-lite'))); ?></p>
                        <?php } ?>
						<?php if( get_theme_mod('slide_link'.$sln, true) != ''){ ?>
                        	<a class="read-more" href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#')); ?>"><?php _e('Learn More','corporate-lite'); ?></a>
                        <?php } ?>
                    </div>
                    </div><?php 
                } ?>
                
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </div>
      </div><!-- slider -->
<?php } ?>
<?php if( is_front_page() ) { ?>
<div class="grey-strip">
	<div class="aligner">
    		<p><?php echo get_theme_mod('greystrip_text',__('Welcome to Corporate Lite. all you\'ll ever need to build incredible website that stands out from the crowd','corporate-lite')); ?></p>
            <?php if(get_theme_mod('greystrip_btn',true) != '') { ?>
            <a class="buy-button" href="<?php echo esc_url(get_theme_mod('greystrip_link','#')); ?>" target="_blank"><?php echo get_theme_mod('greystrip_btn','Contact Us'); ?></a><?php } ?><div class="clear"></div>
    </div><!-- aligner -->
</div><!-- grey-strip -->
<?php }  ?>


      <!-- BreadCrumb -->
      <?php if (function_exists('weblizar_breadcrumbs') && !is_front_page()) weblizar_breadcrumbs(); ?>
      <!-- BreadCrumb -->

      <div class="main-container">
     <!--  <?php if(is_front_page()) { ?>
      	<section class="services">
        	<div class="container">
                  <div class="hey-title"><?php echo esc_attr(get_theme_mod('section1_title','Hey!')); ?></div>
				  <div class="new-line"><?php echo esc_attr(get_theme_mod('section1_subtitle','We are Simple Builder, your new business partner')); ?></div>
                <?php for($f=1; $f<5; $f++) { ?>
        			 <?php if(get_theme_mod('page-setting'.$f) != '') { ?>
        			 <?php $page_query = new WP_Query('page_id='.esc_attr(get_theme_mod('page-setting'.$f))); ?>
        			 <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
         			<div class="services-box <?php if( $f%4==0){?>last-cols<?php } ?>">
					<?php 	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            $url = $thumb['0'];
                    ?>
                	<a href="<?php the_permalink(); ?>"><img src="<?php if(has_post_thumbnail()) { echo $url; } else { echo esc_url(get_template_directory_uri().'/images/thumb_01.jpg'); } ?>" alt="" />
                	<h2><?php the_title(); ?></h2></a>   
                	<p><?php the_excerpt(); ?></p>
             		</div><?php if( $f%4==0) { ?><div class="clear"></div><?php } ?> 
        			<?php endwhile; ?>
         			<?php } else { ?>
             <div class="services-box <?php if( $f%4==0){?>last-cols<?php } ?>">
                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumb_01.jpg" alt="" />
                <h2><?php _e('Page Title','corporate-lite'); ?> <?php echo $f; ?></h2></a>   
                <p><?php _e('Nunc sed lorem pretium, volutpat tortor id, adipiscing sem. Sed bibendum quis augue nec porta.','corporate-lite'); ?></p>
             </div><?php if( $f%4==0) { ?><div class="clear"></div><?php } ?>         
   		 <?php  } } ?>
                    </div>
        </section>
   
      <?php } ?> -->
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>