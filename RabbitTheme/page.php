<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>
<?php $url = get_bloginfo('template_url'); ?>
<?php // echo $url; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

		 <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<?php include 'files.php'; ?>

		<!-- Facebook Meta -->
		<meta property="og:title" content=""/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="">
		<meta property="og:site_name" content=""/>
		<meta property="og:description"	content=""/>
		<meta property="og:image" content="" />

</head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<div class="overflow">

<?php get_header(); ?>

<div class="siteWrapper">


<div class="ajaxWrapper">

            <div class="page cover fixedpage" id="page1">

                  <div class="outer noclick">
                    <div class="middle">
                        <div class="inner">

                            <h1><?php the_field('floor_title'); ?></h1><br />
                            <h2><?php the_field('floor_intro'); ?></h2>
                       
                        </div><!-- inner -->
                    </div><!-- middile -->
                </div><!-- outer -->

                <a class="arrow-left arrow-left1" href="#"></a> 
                <a class="arrow-right arrow-right1" href="#"></a>
                <div class="swiper-container">
                  <div class="swiper-wrapper">

                    <?php if( have_rows('floor_images') ): ?>
                                         
                        <?php while( have_rows('floor_images') ): the_row(); ?>      
                            <?php 
                            $attachment_id = get_sub_field('floor_image');
                            $size = "full";
                            $floorimage = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>          

                            <div class="swiper-slide cover" style="background-image: url('<?php echo $floorimage[0]; ?>');"></div>                           
                             
                        <?php endwhile; ?>                 
                     
                    <?php endif; ?>


                    
                             
                  </div>
                </div>
                <div class="pagination"></div>
              

                <a href="#" class="scrollButton transition">Scroll</a>
           </div><!-- page -->




            <div class="page fixedpage" id="page2">   
                <div class="outer">
                    <div class="middle">
                        <div class="inner">

                            <div class="mediumText"> 
                                        <p>~<br /></p>
                                        <?php the_field('floor_description'); ?>                                     
                                        <p>~</p>
                            </div><!-- largeText -->


                        </div><!-- inner -->
                    </div><!-- middile -->
                </div><!-- outer -->
                 <a href="#" class="scrollButton transition">Scroll</a>
            </div><!-- page -->



            <div class="page" id="">

                <?php if( have_rows('tenants') ): ?>
                                     
                    <?php while( have_rows('tenants') ): the_row(); ?>      
                        <?php 
                        $attachment_id = get_sub_field('tenant_image');
                        $size = "full";
                        $tenantimage = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>          
                       
                         <div class="tenantWrapper">
                            <a href="<?php the_sub_field('tenant_link'); ?>"class="tenantLink" target="_blank">
                                <div class="tenantTitle"><?php the_sub_field('tenant_name'); ?></div><!-- tennantTitle -->
                                <div class="tenantImage"><img src="<?php echo $tenantimage[0]; ?>" alt="<?php the_sub_field('tenant_name'); ?>" title="<?php the_sub_field('tenant_name'); ?>" /></div><!-- tennantImage -->
                            </a>
                        </div><!-- tennantWrapper -->                          
                                             
                    <?php endwhile; ?>                 
                 
               <?php endif; ?>

               
             
             

             <div class="clearfix"></div>
            </div><!-- page -->








</div><!-- ajaxwrapper -->

</div><!-- siteWrapper -->



<?php get_footer(); ?>