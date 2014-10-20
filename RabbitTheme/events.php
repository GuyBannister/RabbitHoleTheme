<?php
/**
 * Template Name: Events
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
        <title>Munro House - The gateway to Leeds&#039; Arts Quarter</title>
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

<?php include 'header.php'; ?>

<div class="siteWrapper">


<div class="ajaxWrapper">
        <div class="ajaxContent">

            <div class="page" id="page1">

            <div class="eventmasonry">


            <?php query_posts('post_type=Event&paged='.$paged); ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          

                <div class="eventWrapper">
                    <a href="<?php the_permalink(); ?>" class="navigation">
                    <div class="eventHeader">
                            <div class="eventDateWrapper">

                                <?php $date = DateTime::createFromFormat('Ymd', get_field('event_date')); ?>

                                <div class="eventCalendarWrapper">
                                    <p><?php echo $date->format('d'); ?></p>
                                </div><!-- eventcalendar -->

                                

                                <p><strong><?php echo $date->format('F Y'); ?><br />
                                    <?php the_field('event_time'); ?></strong></p>
                            </div><!-- eventDateWrapper -->

                            <div class="eventInfoWrapper">
                                <p><?php the_title(); ?><br />
                                   <?php the_field('event_location'); ?></p>
                            </div><!-- eventInfoWrapper -->
                    </div><!-- eventHeader -->

                    <div class="eventImage">
                          <?php 
                            $attachment_id = get_field('event_image');
                            $size = "full";
                            $eventimage = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>      
                        <img src="<?php echo $eventimage[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                    </div><!-- eventImage -->
                </a>

                </div><!-- eventWrapper -->
          
            <?php endwhile; ?>

               
        </div><!-- eventmasonry -->


        <div class="clearfix"></div>
              
        </div><!-- page -->













</div><!-- ajaxContent -->
</div><!-- ajaxwrapper -->

</div><!-- siteWrapper -->



<?php get_footer(); ?>
