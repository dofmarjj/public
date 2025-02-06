<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="/styles/style.css" />
  <link rel="stylesheet" href="/styles/fonts.css" />
</head>

<body>
  <?php include('../resources/includes/menu.php') ?>

  <section class="main-img hero">
    <div class="hero-block _container _indent">
      <div class="hero-text">
        <h1 class="hero-title">{!! $blocks->get('cdf_contracts_title') !!}</h1>
        <p class="hero-subtitle">
          {!! $blocks->get('cdf_contracts_descrtiption') !!}
        </p>
      </div>
      <div class="hero-img">
        <img src="/assets/img/cdf-main.png" alt="iPhone" />
      </div>
    </div>
  </section>

  <section class="improvement _container _indent">
    <div class="improvement__container">
      <h1 class="improvement__title">
        {!! $blocks->get('cdf_contracts_how_earn') !!}
      </h1>
      <p class="improvement__description">
        {!! $blocks->get('cdf_contracts_cfd_benefits') !!}
      </p>
    </div>
  </section>

  <?php include('../resources/includes/blocks/advantages-block.php') ?>

  <?php include('../resources/includes/blocks/liquidity-pools-block.php') ?>

  <?php include('../resources/includes/blocks/trading-terminal-block.php') ?>

  <?php include('../resources/includes/blocks/key-information-block.php') ?>



  <section class="_indent info">
    <div class="info-block _container">
      <div class="text-block">
        <h2 class="title">{!! $blocks->get('cdf_contracts_what_is') !!}</h2>
      </div>
      <div class="info-part">
        <div class="info-block__card">
          {!! $blocks->get('cdf_contracts_definition') !!}
        </div>
        <img class="desktop" src="/assets/img/mob-info.png" alt="" />
        <div class="info-block__card">
          {!! $blocks->get('cdf_contracts_trading_benefits') !!}
        </div>
        <img class="mob" src="/assets/img/mob-info.png" alt="" />
      </div>


      <a class="registration-btn text-center mt-50" href="#">{!! $blocks->get('btn_registration') !!}</a>


    </div>
  </section>

  <?php include('../resources/includes/blocks/selection-tools-block.php') ?>

  <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>