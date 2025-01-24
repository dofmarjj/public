<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stocks</title>
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
        <h1 class="hero-title">{!! $blocks->get('stock_title') !!}</h1>
        <p class="hero-subtitle">
          {!! $blocks->get('stock_description') !!}
        </p>
      </div>
      <div class="hero-img">
        <img src="/assets/img/stock-main.png" alt="" />
        <!-- <img class="img-utils_1" src="/assets/img/utils-1.png" alt="" />
            <img class="img-utils_2" src="/assets/img/utils-2.png" alt="" /> -->
      </div>
    </div>
  </section>

  <section class="improvement _container _indent">
    <div class="improvement__container">
      <h1 class="improvement__title">{!! $blocks->get('stock_market_earnings') !!}</h1>
      <p class="improvement__description">
        {!! $blocks->get('stock_invest_growth') !!}
      </p>
    </div>
  </section>

  <section class="stocks-info main-img">
    <div class="stocks-info__container _container _indent">
      <div class="stocks-info__content">
        <h1 class="stocks-info__title">
          {!! $blocks->get('stock_profit_without_ownership') !!}
        </h1>
        <p class="stocks-info__description">
          {!! $blocks->get('stock_cfd_flexibility') !!}
        </p>
        <a href="#" class="registration-btn d-block w-100">{!! $blocks->get('stock_start_now') !!}</a>
      </div>
      <div class="stocks-info__image">
        <img src="/assets/img/stock-iphone.png" alt="Phone with chart" />
      </div>
    </div>
  </section>

  <section class="_container _indent important-info">
    <div class="important-info__block">
      <h2>{!! $blocks->get('stock_info_overview') !!}</h2>
      <p>
        {!! $blocks->get('stock_definition') !!}
      </p>
      <p>
        {!! $blocks->get('stock_investment_strategies') !!}
      </p>
    </div>
    <div class="important-info__block">
      <h2>{!! $blocks->get('stock_market_how_it_works') !!}</h2>
      <p>
        {!! $blocks->get('stock_market_intro') !!}
      </p>
      <p>
        {!! $blocks->get('stock_secondary_trading') !!}
      </p>
    </div>
    <div class="important-info__block">
      <h2>{!! $blocks->get('stock_how_to_start') !!}</h2>
      <p>
        {!! $blocks->get('stock_start_investing') !!}
      </p>
      <p>
        {!! $blocks->get('stock_cfd_trading') !!}
      </p>
      <p>
        {!! $blocks->get('stock_trading_with_broker') !!}
      </p>
    </div>
  </section>

  <?php include('../resources/includes/blocks/liquidity-pools-block.php') ?>

  <?php include('../resources/includes/blocks/advantages-block.php') ?>


  <?php include('../resources/includes/blocks/trading-terminal-block.php') ?>

  <?php include('../resources/includes/blocks/key-information-block.php') ?>




  <section class="_container _indent stock-company">
    <div class="stock-company__block">
      <h2>{!! $blocks->get('stock_corporate_shares') !!}</h2>
      <p>
        {!! $blocks->get('stock_shares_intro') !!}
      </p>
      <p>
        {!! $blocks->get('stock_accessibility') !!}
      </p>
      <p>
        {!! $blocks->get('stock_cfd_introduction') !!}
      </p>
      <p>
        {!! $blocks->get('stock_trading_with_sample_group') !!}
      </p>
      <p>
        {!! $blocks->get('stock_cfd_opportunities') !!}
      </p>
      <p>
        {!! $blocks->get('stock_dividend_calendar') !!}
      </p>
      <p>
        {!! $blocks->get('stock_corporate_events') !!}
      </p>
      <p>
        {!! $blocks->get('stock_market_analysis') !!}
      </p>
      <p>
        {!! $blocks->get('stock_trading_risks') !!}
      </p>
    </div>
    <a
      class="_btn hero-btn registration-btn d-block w-20 text-center"
      href="#">Регистрация →</a>
  </section>

  <?php include('../resources/includes/blocks/selection-tools-block.php') ?>

  <?php include('../resources/includes/blocks/call-us-block.php') ?>

</body>

</html>