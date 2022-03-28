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
  
  
  <!-- LOGO -->
  <div class="container align-midle">
    <div class="row">
      <div class="col-12 text-center logo">
        <img src="<?php bloginfo('template_url'); ?>/img/Logo.svg" alt="">
      </div>
    </div>
  </div>
  <!--// LOGO -->

  <!-- Seja um Expert -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center titulo-cabecalho text-white">
        <h1 class="">Seja um Expert</h1>
      </div>
    </div>
  </div>
  <!--// Seja um Expert -->

  <!-- Somos o lugar ideal... -->
  <div class="container">
    <div class="row">
      <div class="col-1 text-center ">
      </div>
      <div class="col-lg-10 col-sm-12 text-center text-gray">
        <h6 class="texto-cabecalho">Somos o lugar ideal para pessoas que respiram crescimento. E sempre temos posição
          para pessoas movidas pela inovação e que exalam confiança.</h6>
      </div>
    </div>
  </div>
  <!--// Somos o lugar ideal... -->

  <!-- Escolha uma área de atuação... -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center text-white">
        <h2 class="mb-2 pb-2 mt-0 pt-0">Escolha uma área de atuação</h2>
      </div>
    </div>
  </div>
  <!--// Escolha uma área de atuação... -->
<form onsubmit="cadastraUsuario()">
  
<?php require get_template_directory().'/seletores.php' ?>

  <!-- Preencha o Formulário Abaixo... -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center text-white">
        <h2 class="mb-2 pb-2 mt-5 pt-0">Preencha o Formulário Abaixo</h2>
      </div>
    </div>
  </div>
  <!--// Preencha o Formulário Abaixo... -->

  

  <!-- Input Fields -->
  <div class="container">    
    <div class="row g-3  mb-3 p-0 justify-content-md-center">
      <div class="col-md-10 col-12">
        <input id="nome" class="col-12 py-3 input-estilo" placeholder="Nome completo"  type="text" required>
      </div>
      <div class="col-md-10 col-12">
        <input id="email" class="col-12 py-3 input-estilo" placeholder="E-mail"  type="email" required>
      </div>
      <div class="col-md-5 col-12" >
        <input id="telefone" class="col-12 py-3 input-estilo"  placeholder="Telefone"  type="text" required>
      </div>
      <div class="col-md-5 col-12 mb-5" >
        <input id="data" class="col-12 py-3 input-estilo" placeholder="Data de Nascimento" onfocus="(this.type='date')" id="data" type="text" required>
      </div>
    </div>
  </div>
  <!--// Input Fields... -->

  <!--ERRO -->
  <div class="container">    
    <div class="row g-3  mb-3 p-0 justify-content-md-center">
      <div class="col-md-10 col-12">
      <div id="resposta"></div>
      </div>
    </div>
  </div>
  <!--//ERRO -->
  <!-- Submit -->
  <div class="container mb-5">
    <div class="row">
        <div class="col-1"></div>
        <button type="submit" class="col-10 py-3 botao mb-5" >Seja um Expert</button>
    </div>
  </div>
  <!--// Submit... -->
</form>
<?php wp_footer(); ?>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.mask.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/mascara.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/post.js"></script>
</body>

</html>