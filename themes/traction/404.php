<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

 
  <?php wp_head(); ?>
</head>

<body>
  <div class="fill" style="display: flex; align-items: center;">

  
  <div class="container">
    <div class="row vertical-row" >
  <!-- LOGO -->

      <div class="col-12 text-center mb-5 ">
        <img src="<?php bloginfo('template_url'); ?>/img/Logo.svg" alt="">
      </div>
    
  <!--// LOGO -->

  
 
  <!-- obrigado -->

      <div class="col-12 text-center titulo-cabecalho text-white">
        <h1 class="">404</h1>
      </div>
      
  <!--// obrigado -->

  <!-- Solicitação... -->
      <div class="col-lg-12 col-sm-12 text-center text-gray">
        <h6 class="texto-cabecalho">A pagina que procura não existe.</h6>
      </div>
    </div>
  <!--// Solicitação... -->
  </div>
  
</div>
<?php wp_footer(); ?>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.mask.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/mascara.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/post.js"></script>
</body>

</html>