<!DOCTYPE html>
<html
  lang="ru
">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Главная</title>
  <link
    rel="stylesheet"
    href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/fonts.css" />
</head>

<body>
  <div class="wrapper"></div>
  <?php include('./resources/includes/menu.php') ?>
  <main class="main">
    <section class="main-img hero">
      <div class="home-hero-block _container _indent">
        <div class="home-hero-text">
          <h1 class="hero-title">
            {!! $blocks->get('home_title') !!}
          </h1>
          <p class="hero-subtitle">
            {!! $blocks->get('home_description') !!}
          </p>
          <a class="_btn hero-btn registration-btn" href="#">{!! $blocks->get('home_btn_reg') !!} →</a>
        </div>
        <div class="hero-img">
          <img src="/assets/img/main-phone.png" alt="" />
          <!-- <img class="img-utils_1" src="/assets/img/utils-1.png" alt="" />
           <img class="img-utils_2" src="/assets/img/utils-2.png" alt="" /> -->
        </div>
      </div>
    </section>

    <?php include('./resources/includes/bill-cards.php') ?>


    <section class="main-img terms">
      <div class="terms-block _container _indent">
        <div class="terms-img">
          <img class="img-phone" src="/assets/img/terms.png" alt="" />
        </div>
        <div class="terms-text">
          <h2 class="terms-title">
            {!! $blocks->get('home_trading_conditions') !!}
          </h2>
          <!-- <p class="terms-subtitle">
          Предлагаем различные типы аккаунтов с комфортными условиями для
          трейдеров с разным уровнем капитала
        </p> -->
          <ul class="terms-list">
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_interbank_network') !!}
                </p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">{!! $blocks->get('home_min_spred') !!}</p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_ultrafast_performance') !!}
                </p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_display_of_quotes') !!}
                </p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">{!! $blocks->get('home_access_liquidity') !!}</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>


    <section class="terminal _indent _container">
      <div class="terminal-block__main">
        <div class="terminal-text">
          <h2 class="title terminale-title">
            {!! $blocks->get('home_platform_choice') !!}
          </h2>
          <p class="subtitle terminale-subtitle">
            {!! $blocks->get('home_your_comfort') !!}
          </p>
        </div>
        <div class="terminal-utils">
          <div class="terminal-card__block">
            <div class="terminal-card">
              <svg
                width="113"
                height="112"
                viewBox="0 0 113 112"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="56.5" cy="56" r="56" fill="#FF9000" />
                <path
                  d="M74 37.1875H39C37.7236 37.1875 36.4996 37.6945 35.597 38.597C34.6945 39.4996 34.1875 40.7236 34.1875 42V66.5C34.1875 67.7764 34.6945 69.0004 35.597 69.903C36.4996 70.8055 37.7236 71.3125 39 71.3125H74C75.2764 71.3125 76.5004 70.8055 77.403 69.903C78.3055 69.0004 78.8125 67.7764 78.8125 66.5V42C78.8125 40.7236 78.3055 39.4996 77.403 38.597C76.5004 37.6945 75.2764 37.1875 74 37.1875ZM76.1875 66.5C76.1875 67.0802 75.957 67.6366 75.5468 68.0468C75.1366 68.457 74.5802 68.6875 74 68.6875H39C38.4198 68.6875 37.8634 68.457 37.4532 68.0468C37.043 67.6366 36.8125 67.0802 36.8125 66.5V42C36.8125 41.4198 37.043 40.8634 37.4532 40.4532C37.8634 40.043 38.4198 39.8125 39 39.8125H74C74.5802 39.8125 75.1366 40.043 75.5468 40.4532C75.957 40.8634 76.1875 41.4198 76.1875 42V66.5ZM64.8125 77C64.8125 77.3481 64.6742 77.6819 64.4281 77.9281C64.1819 78.1742 63.8481 78.3125 63.5 78.3125H49.5C49.1519 78.3125 48.8181 78.1742 48.5719 77.9281C48.3258 77.6819 48.1875 77.3481 48.1875 77C48.1875 76.6519 48.3258 76.3181 48.5719 76.0719C48.8181 75.8258 49.1519 75.6875 49.5 75.6875H63.5C63.8481 75.6875 64.1819 75.8258 64.4281 76.0719C64.6742 76.3181 64.8125 76.6519 64.8125 77Z"
                  fill="#10141D" />
              </svg>
              <h3 class="bold">
                {!! $blocks->get('home_trade_platform') !!}
              </h3>
            </div>
            <div class="terminal-card">
              <svg
                width="113"
                height="112"
                viewBox="0 0 113 112"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="56.5" cy="56" r="56" fill="#FF9000" />
              </svg>
              <h3 class="bold">
                {!! $blocks->get('home_online_terminal') !!}
              </h3>
            </div>
            <div class="terminal-card">
              <svg
                width="113"
                height="112"
                viewBox="0 0 113 112"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="56.5" cy="56" r="56" fill="#FF9000" />
              </svg>
              <h3 class="bold">
                {!! $blocks->get('home_maob_application') !!}
              </h3>
            </div>
            <div class="terminal-card">
              <svg
                width="113"
                height="112"
                viewBox="0 0 113 112"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="56.5" cy="56" r="56" fill="#FF9000" />
              </svg>
              <h3 class="bold">
                {!! $blocks->get('home_all_gadgets') !!}
              </h3>
            </div>
          </div>
          <div class="terminal-right-section">
            <img src="/assets/img/terminal.png" alt="terminal" />
            <a class="registration-btn text-center" href="#">{!! $blocks->get('home_btn_reg') !!}</a>
          </div>
        </div>
      </div>
    </section>


    <section class="main-img terms">
      <div class="terms-block _container _indent">
        <div class="terms-img">
          <img class="img-phone" src="/assets/img/terms.png" alt="" />
        </div>
        <div class="terms-text">
          <h2 class="terms-title tilte">
            {!! $blocks->get('home_smartphone_markets') !!}
          </h2>
          <p class="terms-subtitle subtitle">
            {!! $blocks->get('home_your_investments') !!}
          </p>
          <ul class="terms-list">
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_convenient_access') !!}
                </p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_easy_control') !!}
                </p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_flexible_methods') !!}
                </p>
              </div>
            </li>
            <li class="terms-item">
              <div class="description-block">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect width="18" height="18" rx="9" fill="#FF9000" />
                  <path
                    d="M7.63636 10.7463L5.84659 8.86567L5.25 9.49254L7.63636 12L12.75 6.62687L12.1534 6L7.63636 10.7463Z"
                    fill="#10141D" />
                </svg>
                <p class="description">
                  {!! $blocks->get('home_financial_news') !!}
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>


    <section class="instruments _indent _container">
      <div class="instruments-block">
        <div class="instruments-text text-center">
          <h2 class="title instruments-title">
            {!! $blocks->get('instruments_title') !!}
          </h2>
          <p class="subtitle instruments-subtitle">
            {!! $blocks->get('instruments_description') !!}
          </p>
        </div>
        <div class="instruments-card__block">
          <div class="instruments-card">
            <img src="/assets/img/icons/icon-1.png" alt="icon-money" />
            <h3 class="bold">{!! $blocks->get('instruments_currencies') !!}</h3>
            <p>{!! $blocks->get('instruments_currency_pairs') !!}</p>
          </div>
          <div class="instruments-card">
            <img src="/assets/img/icons/icon-2.png" alt="icon-stock" />
            <h3 class="bold">{!! $blocks->get('instruments_stocks') !!}</h3>
            <p>{!! $blocks->get('instruments_stock_access') !!}</p>
          </div>
          <div class="instruments-card">
            <img src="/assets/img/icons/icon-3.png" alt="icon-indices" />
            <h3 class="bold">{!! $blocks->get('instruments_indices') !!}</h3>
            <p>{!! $blocks->get('instruments_index_investment') !!}</p>
          </div>
          <div class="instruments-card">
            <img
              src="/assets/img/icons/icon-4.png"
              alt="icon-cryptocurrency" />
            <h3 class="bold">{!! $blocks->get('instruments_crypto') !!}</h3>
            <p>{!! $blocks->get('instruments_crypto_access') !!}</p>
          </div>
          <div class="instruments-card">
            <img src="/assets/img/icons/icon-5.png" alt="icon-energy" />
            <h3 class="bold">{!! $blocks->get('instruments_energy_resources') !!}</h3>
            <p>{!! $blocks->get('instruments_energy_trade') !!}</p>
          </div>
          <div class="instruments-card">
            <img src="/assets/img/icons/icon-6.png" alt="icon-cdf" />
            <h3 class="bold">{!! $blocks->get('instruments_cfd_metals') !!}</h3>
            <p>{!! $blocks->get('instruments_metals_trade') !!}</p>
          </div>
        </div>
      </div>
    </section>


    <div style="margin-top: 100px"></div>
    <section class="broker main-img">
      <div class="_container _indent">
        <div class="broker__content">
          <div class="broker-text">
            <h1 class="broker__title title">
              {!! $blocks->get('home_market_leader') !!}
            </h1>
            <p class="broker__description description">
              {!! $blocks->get('home_conditions_analytics') !!}
            </p>
            <p class="broker__description description">
              {!! $blocks->get('home_trading_simplified') !!}
            </p>
          </div>
          <img
            src="/assets/img/main-laptop.png"
            alt="Laptop"
            class="broker__image" />
        </div>

        <ul class="broker__list">
          <li class="broker__item">
            <span class="broker__item-icon"><svg
                width="24"
                height="28"
                viewBox="0 0 24 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect y="2" width="24" height="24" rx="12" fill="#FF9000" />
                <path
                  d="M10.1818 16.3284L7.79545 13.8209L7 14.6567L10.1818 18L17 10.8358L16.2045 10L10.1818 16.3284Z"
                  fill="#10141D" />
              </svg>
            </span>
            {!! $blocks->get('home_ipo_allocations') !!}
          </li>
          <li class="broker__item">
            <span class="broker__item-icon"><svg
                width="24"
                height="28"
                viewBox="0 0 24 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect y="2" width="24" height="24" rx="12" fill="#FF9000" />
                <path
                  d="M10.1818 16.3284L7.79545 13.8209L7 14.6567L10.1818 18L17 10.8358L16.2045 10L10.1818 16.3284Z"
                  fill="#10141D" />
              </svg>
            </span>
            {!! $blocks->get('home_order_speed') !!}
          </li>
          <li class="broker__item">
            <span class="broker__item-icon"><svg
                width="24"
                height="28"
                viewBox="0 0 24 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect y="2" width="24" height="24" rx="12" fill="#FF9000" />
                <path
                  d="M10.1818 16.3284L7.79545 13.8209L7 14.6567L10.1818 18L17 10.8358L16.2045 10L10.1818 16.3284Z"
                  fill="#10141D" />
              </svg>
            </span>
            {!! $blocks->get('home_service_experience') !!}
          </li>
          <li class="broker__item">
            <span class="broker__item-icon"><svg
                width="24"
                height="28"
                viewBox="0 0 24 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect y="2" width="24" height="24" rx="12" fill="#FF9000" />
                <path
                  d="M10.1818 16.3284L7.79545 13.8209L7 14.6567L10.1818 18L17 10.8358L16.2045 10L10.1818 16.3284Z"
                  fill="#10141D" />
              </svg>
            </span>
            {!! $blocks->get('home_payment_methods') !!}
          </li>
          <li class="broker__item">
            <span class="broker__item-icon"><svg
                width="24"
                height="28"
                viewBox="0 0 24 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect y="2" width="24" height="24" rx="12" fill="#FF9000" />
                <path
                  d="M10.1818 16.3284L7.79545 13.8209L7 14.6567L10.1818 18L17 10.8358L16.2045 10L10.1818 16.3284Z"
                  fill="#10141D" />
              </svg>
            </span>
            {!! $blocks->get('home_platforms_accounts') !!}
          </li>
          <li class="broker__item">
            <span class="broker__item-icon"><svg
                width="24"
                height="28"
                viewBox="0 0 24 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect y="2" width="24" height="24" rx="12" fill="#FF9000" />
                <path
                  d="M10.1818 16.3284L7.79545 13.8209L7 14.6567L10.1818 18L17 10.8358L16.2045 10L10.1818 16.3284Z"
                  fill="#10141D" />
              </svg>
            </span>
            {!! $blocks->get('home_support_anytime') !!}
          </li>
        </ul>
      </div>
    </section>


    <?php include('./resources/includes/blocks/call-us-block.php') ?>
  </main>
</body>
<footer class="footer"></footer>

<script src="scripts/script.js"></script>

</html>