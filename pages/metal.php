<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Metal</title>
  <link
    rel="stylesheet"
    href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="/styles/style.css" />
  <link rel="stylesheet" href="/styles/fonts.css" />
</head>

<body>
  <?php include('../resources/includes/menu.php') ?>

  <section class="main-img hero">
    <div class="home-hero-block _container _indent">
      <div class="home-hero-text">
        <h1 class="hero-title">{!! $blocks->get('metal_title') !!}</h1>
        <p class="hero-subtitle">
          {!! $blocks->get('metal_description') !!}
        </p>
      </div>
      <div class="hero-img">
        <img src="/assets/img/stock-main.png" alt="" />
        <!-- <img class="img-utils_1" src="/assets/img/utils-1.png" alt="" />
              <img class="img-utils_2" src="/assets/img/utils-2.png" alt="" /> -->
      </div>
    </div>
  </section>

  <?php include('../resources/includes/blocks/advantages-block.php') ?>

  <?php include('../resources/includes/blocks/liquidity-pools-block.php') ?>

  <?php include('../resources/includes/blocks/trading-terminal-block.php') ?>



  <section class="_container _indent preciou-metals">
    <p>
      {!! $blocks->get('metal_cfd_benefits') !!}
    </p>
    <div class="preciou-metals__block">
      <h2>{!! $blocks->get('metal_factors_influence') !!}</h2>
      <p>
        {!! $blocks->get('metal_economic_indicators') !!}
      </p>
    </div>
    <div class="preciou-metals__block">
      <h2>{!! $blocks->get('metal_gold') !!}</h2>
      <p>
        {!! $blocks->get('metal_gold_safe_haven') !!} </p>
      <p>
        {!! $blocks->get('metal_gold_market_signals') !!}
      </p>
      <p>
        {!! $blocks->get('metal_gold_global_factors') !!}
      </p>
    </div>
    <div class="preciou-metals__block">
      <h2>{!! $blocks->get('metal_platinum') !!}</h2>
      <p>
        {!! $blocks->get('metal_platinum_industry') !!}
      </p>
      <p>
        {!! $blocks->get('metal_platinum_supply') !!}
      </p>
      <p>
        {!! $blocks->get('metal_cfd_trading') !!}
      </p>
    </div>
  </section>

  <section class="main-img">
    <div class="precious-metals__grid _container _indent">
      <div class="precious-metals__column bold">
        <p class="precious-metals__text">
          {!! $blocks->get('metal_price_dynamics') !!}
        </p>
      </div>
      <span class="mob precious-metals__icon">
        <svg
          width="80"
          height="80"
          viewBox="0 0 80 80"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M3.33325 73.3334L8.33325 56.6667H31.6666L36.6666 73.3334H3.33325ZM43.3333 73.3334L48.3333 56.6667H71.6666L76.6666 73.3334H43.3333ZM19.9999 50.0001L24.9999 33.3334H48.3333L53.3333 50.0001H19.9999ZM76.6666 20.1667L63.7999 23.8001L60.1666 36.6667L56.5333 23.8001L43.6666 20.1667L56.5333 16.5334L60.1666 3.66675L63.7999 16.5334L76.6666 20.1667Z"
            fill="#FF9000" />
        </svg>
      </span>
      <div class="precious-metals__column">
        <p>
          {!! $blocks->get('metal_market_opportunity') !!}
        </p>
        <p>
          {!! $blocks->get('metal_demo_account') !!}
        </p>
      </div>
    </div>
  </section>

  <section class="global-trading__section _container _indent">
    <h2 class="global-trading__title">{!! $blocks->get('metal_global_trading') !!}</h2>
    <p class="global-trading__subtitle">
      {!! $blocks->get('metal_major_exchanges') !!}
    </p>
    <div class="global-trading__grid">
      <div class="global-trading__item">
        <p>
          <strong>LME</strong> – {!! $blocks->get('metal_london_exchange') !!}
        </p>
      </div>
      <div class="global-trading__item">
        <p>
          <strong>NYMEX</strong> – {!! $blocks->get('metal_ny_exchange') !!}
        </p>
      </div>
      <div class="global-trading__item">
        <p>
          {!! $blocks->get('metal_shanghai_exchange') !!}
        </p>
      </div>
    </div>
  </section>

  <section class="precious-metal-cta _container _indent">
    <div class="precious-metal-cta__text">
      <p>
        {!! $blocks->get('metal_start_trading') !!}
      </p>
      <h2>
        {!! $blocks->get('metal_cfd_now') !!}
      </h2>
    </div>
    <div class="precious-metal-cta__button">
      <a href="#" class="registration-btn d-block w-20 text-center">Регистрация</a>
    </div>
  </section>

  <?php include('../resources/includes/blocks/key-information-block.php') ?>

  <section class="_indent info">
    <div class="info-block _container">
      <div class="text-block">
        <h2 class="title">{!! $blocks->get('metal_invest_sample_group') !!}</h2>
      </div>
      <div class="info-part">
        <div class="info-block__card">
          {!! $blocks->get('metal_longterm_gold') !!}
        </div>
        <img class="desktop" src="/assets/img/mob-info.png" alt="" />
        <div class="info-block__card">
          {!! $blocks->get('metal_longterm_strategies') !!}
        </div>
        <img class="mob" src="/assets/img/mob-info.png" alt="" />
      </div>
      <a class="registration-btn text-center mt-50" href="#">Регистрация</a>
    </div>
  </section>



  <?php include('../resources/includes/blocks/selection-tools-block.php') ?>

  <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>