<?php
/**
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

<?php get_header(); ?>

<div class="siteWrapper">


<div class="ajaxWrapper">
        <div class="ajaxContent">

          

            <div class="page cover fixedpage" id="page1" style="background-image: url('<?php echo $headerimage[0]; ?>');">

                      <div class="outer">
                    <div class="middle">
                        <div class="inner">                         
                          
                          <div class="mediumText">
                                      
                    <p>404 Error</p> 

                    <p>The page you were trying to load cannot be found.</p>
                    	<p>Please try again or go back to the <a href="<?php bloginfo('url'); ?>">homepage</a></p>              

                </div>

  
                        </div><!-- inner -->
                    </div><!-- middile -->
                </div><!-- outer -->       
              
           </div><!-- page -->



</div><!-- ajaxContent -->

</div><!-- ajaxwrapper -->

</div><!-- siteWrapper -->



<?php get_footer(); ?>
