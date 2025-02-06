<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link
    rel="stylesheet"
    href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="/styles/style.css" />
  <link rel="stylesheet" href="/styles/fonts.css" />
</head>

<body>
  <?php include('../resources/includes/menu.php') ?>


  <section class="main-img hero">
    <div class="home-hero-block _container">
      <div class="home-hero-text">
        <h1 class="hero-title">{!! $blocks->get('about_us_title') !!}</h1>
        <p class="hero-subtitle">{!! $blocks->get('about_us_description') !!}</p>
        <a class="_btn hero-btn registration-btn" href="#">{!! $blocks->get('about_real_account') !!}</a>
      </div>
      <div class="hero-img circle">
        <img src="/assets/img/business-woman.png" alt="business-woman" />
      </div>
    </div>
  </section>


  <section class="overview-section _indent _container">
    <div class="overview-section__content">
      <h2 class="overview-section__title">
        {!! $blocks->get('about_global_presence') !!}
      </h2>
      <div class="overview-section__cards">
        <div class="overview-section__card">
          <span class="overview-section__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_76_1008" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="22" height="22">
                <path d="M20.5 2H3.5C3.10218 2 2.72064 2.15804 2.43934 2.43934C2.15804 2.72064 2 3.10218 2 3.5V20.5C2 20.8978 2.15804 21.2794 2.43934 21.5607C2.72064 21.842 3.10218 22 3.5 22H20.5C20.8978 22 21.2794 21.842 21.5607 21.5607C21.842 21.2794 22 20.8978 22 20.5V3.5C22 3.10218 21.842 2.72064 21.5607 2.43934C21.2794 2.15804 20.8978 2 20.5 2Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 7C6.26522 7 6.51957 6.89464 6.70711 6.70711C6.89464 6.51957 7 6.26522 7 6C7 5.73478 6.89464 5.48043 6.70711 5.29289C6.51957 5.10536 6.26522 5 6 5C5.73478 5 5.48043 5.10536 5.29289 5.29289C5.10536 5.48043 5 5.73478 5 6C5 6.26522 5.10536 6.51957 5.29289 6.70711C5.48043 6.89464 5.73478 7 6 7ZM6 19C6.26522 19 6.51957 18.8946 6.70711 18.7071C6.89464 18.5196 7 18.2652 7 18C7 17.7348 6.89464 17.4804 6.70711 17.2929C6.51957 17.1054 6.26522 17 6 17C5.73478 17 5.48043 17.1054 5.29289 17.2929C5.10536 17.4804 5 17.7348 5 18C5 18.2652 5.10536 18.5196 5.29289 18.7071C5.48043 18.8946 5.73478 19 6 19ZM18 7C18.2652 7 18.5196 6.89464 18.7071 6.70711C18.8946 6.51957 19 6.26522 19 6C19 5.73478 18.8946 5.48043 18.7071 5.29289C18.5196 5.10536 18.2652 5 18 5C17.7348 5 17.4804 5.10536 17.2929 5.29289C17.1054 5.48043 17 5.73478 17 6C17 6.26522 17.1054 6.51957 17.2929 6.70711C17.4804 6.89464 17.7348 7 18 7ZM18 19C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18C19 17.7348 18.8946 17.4804 18.7071 17.2929C18.5196 17.1054 18.2652 17 18 17C17.7348 17 17.4804 17.1054 17.2929 17.2929C17.1054 17.4804 17 17.7348 17 18C17 18.2652 17.1054 18.5196 17.2929 18.7071C17.4804 18.8946 17.7348 19 18 19Z" fill="black" />
                <path d="M12 16.5C13.1935 16.5 14.3381 16.0259 15.182 15.182C16.0259 14.3381 16.5 13.1935 16.5 12C16.5 10.8065 16.0259 9.66193 15.182 8.81802C14.3381 7.97411 13.1935 7.5 12 7.5C10.8065 7.5 9.66193 7.97411 8.81802 8.81802C7.97411 9.66193 7.5 10.8065 7.5 12C7.5 13.1935 7.97411 14.3381 8.81802 15.182C9.66193 16.0259 10.8065 16.5 12 16.5Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_76_1008)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          <p class="overview-section__text">
            {!! $blocks->get('about_asset_access') !!}
          </p>
        </div>
        <div class="overview-section__card">
          <span class="overview-section__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.45 15.5C10.8667 15.9167 11.3917 16.1127 12.025 16.088C12.6583 16.0633 13.1167 15.834 13.4 15.4L19 7L10.6 12.6C10.1667 12.9 9.92933 13.354 9.888 13.962C9.84667 14.57 10.034 15.0827 10.45 15.5ZM5.1 20C4.73333 20 4.396 19.9207 4.088 19.762C3.78 19.6033 3.534 19.366 3.35 19.05C2.91667 18.2667 2.58333 17.4543 2.35 16.613C2.11667 15.7717 2 14.9007 2 14C2 12.6167 2.26267 11.3167 2.788 10.1C3.31333 8.88333 4.02567 7.825 4.925 6.925C5.82433 6.025 6.88267 5.31267 8.1 4.788C9.31733 4.26333 10.6173 4.00067 12 4C13.3667 4 14.65 4.25833 15.85 4.775C17.05 5.29167 18.1 5.996 19 6.888C19.9 7.78 20.6167 8.82167 21.15 10.013C21.6833 11.2043 21.9583 12.4833 21.975 13.85C21.9917 14.7667 21.8877 15.6627 21.663 16.538C21.4383 17.4133 21.0923 18.2507 20.625 19.05C20.4417 19.3667 20.196 19.6043 19.888 19.763C19.58 19.9217 19.242 20.0007 18.874 20H5.1Z" fill="#FF9000" />
            </svg>
          </span>
          <p class="overview-section__text">
            {!! $blocks->get('about_company_regulation') !!}
          </p>
        </div>
      </div>
      <a href="#" class="registration-btn">{!! $blocks->get('about_registration') !!}</a>
    </div>
  </section>


  <section class="trusted-broker _container _indent">
    <div class="trusted-broker__content">
      <h2 class="trusted-broker__title">
        {!! $blocks->get('about_trusted_partner') !!}
      </h2>
      <p class="trusted-broker__description">
        {!! $blocks->get('about_transparency') !!}
      </p>
      <div class="trusted-broker__emblem">
        <img src="/assets/img/clients/safety-logo.png" style="filter: contrast(0.1)" alt="Эмблема Великобритании" />
      </div>
      <p class="trusted-broker__info">
        {!! $blocks->get('about_world_markets') !!}
      </p>
      <h3 class="trusted-broker__subtitle">
        Invest In Northern Ireland and Great Britain
      </h3>
      <div class="trusted-broker__logos">
        <img src="/assets/img/clients/britain.png" alt="Invest in Great Britain" />
        <span class="trusted-broker__divider"></span>
        <img src="/assets/img/clients/ade-group.png" alt="ADE Group Logo" />
        <span class="trusted-broker__divider"></span>
        <img src="/assets/img/clients/lions.png" alt="UK Emblem" />
      </div>
    </div>
  </section>


  <section class="stats-section main-img">
    <div class="stats-section__content _container _indent">
      <div class="stats-section__grid">
        <div class="stats-section__item">
          <p class="stats-section__value">{!! $blocks->get('about_capital') !!}</p>
          <p class="stats-section__description">
            {!! $blocks->get('about_capital') !!}
          </p>
        </div>
        <div class="stats-section__item">
          <p class="stats-section__value">16+</p>
          <p class="stats-section__description">{!! $blocks->get('about_successful_operations') !!}</p>
        </div>
        <div class="stats-section__item">
          <p class="stats-section__value">357 IPO</p>
          <p class="stats-section__description">{!! $blocks->get('about_operational_period') !!}</p>
        </div>
        <div class="stats-section__item">
          <p class="stats-section__value">980+</p>
          <p class="stats-section__description">{!! $blocks->get('about_trading_assets') !!}</p>
        </div>
        <div class="stats-section__item">
          <p class="stats-section__value">&lt;5 мс</p>
          <p class="stats-section__description">
            {!! $blocks->get('about_order_execution') !!}
          </p>
        </div>
        <div class="stats-section__item">
          <p class="stats-section__value">700 000 000</p>
          <p class="stats-section__description">{!! $blocks->get('about_executed_orders') !!}</p>
        </div>
      </div>
      <p class="stats-section__text">
        {!! $blocks->get('about_international_presence') !!}
      </p>
      <a href="#" class="registration-btn">{!! $blocks->get('about_registration') !!}</a>
    </div>
  </section>


  <section class="company-overview">
    <div class="_container _indent">
      <h2 class="company-overview__title">{!! $blocks->get('about_today') !!}</h2>
      <div class="company-overview__column">
        <div class="company-overview__row">
          <div class="company-overview__block">
            <p class="company-overview__heading">{!! $blocks->get('about_legal_address') !!}</p>
            <p class="company-overview__text">
              13/14 Basinghall Street, City of London, EC2V 5BQ, United Kingdom
            </p>
          </div>
          <div class="company-overview__block">
            <p class="company-overview__heading">{!! $blocks->get('about_foundation_year') !!}</p>
            <p class="company-overview__text">2008</p>
          </div>
          <div class="company-overview__block">
            <p class="company-overview__heading">{!! $blocks->get('about_regulation') !!}</p>
            <p class="company-overview__text">FCA</p>
          </div>
        </div>
        <div class="company-overview__row">
          <div class="company-overview__block">
            <p class="company-overview__heading">€100,000,000+</p>
            <p class="company-overview__text">{!! $blocks->get('about_capital') !!}</p>
          </div>
          <div class="company-overview__block">
            <p class="company-overview__heading">8+</p>
            <p class="company-overview__text">{!! $blocks->get('about_liquidity_providers') !!}</p>
          </div>
          <div class="company-overview__block">
            <p class="company-overview__heading">500+</p>
            <p class="company-overview__text">{!! $blocks->get('about_employees') !!}</p>
          </div>
          <div class="company-overview__block">
            <p class="company-overview__heading">357+</p>
            <p class="company-overview__text">{!! $blocks->get('about_operational_period') !!}</p>
          </div>
        </div>
        <div class="company-overview__row">
          <div class="company-overview__block">
            <p class="company-overview__heading">
              J.P. Morgan, Goldman Sachs, Barclays, Citigroup
            </p>
            <p class="company-overview__text">{!! $blocks->get('about_counterparty_banks') !!}</p>
          </div>
          <div class="company-overview__block">
            <p class="company-overview__heading">{!! $blocks->get('about_security_systems') !!}</p>
            <p class="company-overview__text">{!! $blocks->get('about_encryption_backups') !!}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="image">
      <img src="/assets/img/buildings.png" alt="buildings" />
    </div>
  </section>

  <section class="performance-stats _indent _container">
    <h2 class="performance-stats__title">{!! $blocks->get('about_transactions') !!}</h2>
    <p class="performance-stats__description">
      {!! $blocks->get('about_technology') !!}
    </p>
    <div class="performance-stats__timeline">
      <div class="performance-stats__line"></div>
      <div class="performance-stats__points">
        <div class="performance-stats__point">
          <p class="performance-stats__value">108.6 mln</p>
          <p class="performance-stats__year">2008</p>
        </div>
        <div class="performance-stats__point">
          <p class="performance-stats__value">164.3 mln</p>
          <p class="performance-stats__year">2012</p>
        </div>
        <div class="performance-stats__point">
          <p class="performance-stats__value">361.1 mln</p>
          <p class="performance-stats__year">2016</p>
        </div>
        <div class="performance-stats__point">
          <p class="performance-stats__value">482.8 mln</p>
          <p class="performance-stats__year">2021</p>
        </div>
        <div class="performance-stats__point">
          <p class="performance-stats__value">625.4 mln</p>
          <p class="performance-stats__year">2023</p>
        </div>
      </div>
    </div>
  </section>


  <section class="tech-execution main-img">
    <div class="tech-execution__container _container _indent circle relative">
      <h2 class="tech-execution__heading">
        {!! $blocks->get('about_technology') !!}
      </h2>
      <p class="tech-execution__label">{!! $blocks->get('about_orders_processed') !!}</p>
      <p class="tech-execution__stat">635,000,000</p>
      <p class="tech-execution__subtext">{!! $blocks->get('about_order_stats') !!}</p>
      <p class="tech-execution__description">
        {!! $blocks->get('about_liquidity_aggregator') !!}
      </p>
    </div>
  </section>


  <section class="features-overview _container _indent">
    <div class="features-overview__container">
      <div class="features-overview__list">
        <div class="features-overview__card">
          <p class="features-overview__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_80_1353" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="22" height="22">
                <path d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.5 12L11 14.5L16 9.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_80_1353)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </p>
          <p class="features-overview__text">{!! $blocks->get('about_order_speed') !!}</p>
        </div>
        <div class="features-overview__card">
          <p class="features-overview__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_80_1363" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="22" height="22">
                <path d="M20.5 2H3.5C3.10218 2 2.72064 2.15804 2.43934 2.43934C2.15804 2.72064 2 3.10218 2 3.5V20.5C2 20.8978 2.15804 21.2794 2.43934 21.5607C2.72064 21.842 3.10218 22 3.5 22H20.5C20.8978 22 21.2794 21.842 21.5607 21.5607C21.842 21.2794 22 20.8978 22 20.5V3.5C22 3.10218 21.842 2.72064 21.5607 2.43934C21.2794 2.15804 20.8978 2 20.5 2Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 7C6.26522 7 6.51957 6.89464 6.70711 6.70711C6.89464 6.51957 7 6.26522 7 6C7 5.73478 6.89464 5.48043 6.70711 5.29289C6.51957 5.10536 6.26522 5 6 5C5.73478 5 5.48043 5.10536 5.29289 5.29289C5.10536 5.48043 5 5.73478 5 6C5 6.26522 5.10536 6.51957 5.29289 6.70711C5.48043 6.89464 5.73478 7 6 7ZM6 19C6.26522 19 6.51957 18.8946 6.70711 18.7071C6.89464 18.5196 7 18.2652 7 18C7 17.7348 6.89464 17.4804 6.70711 17.2929C6.51957 17.1054 6.26522 17 6 17C5.73478 17 5.48043 17.1054 5.29289 17.2929C5.10536 17.4804 5 17.7348 5 18C5 18.2652 5.10536 18.5196 5.29289 18.7071C5.48043 18.8946 5.73478 19 6 19ZM18 7C18.2652 7 18.5196 6.89464 18.7071 6.70711C18.8946 6.51957 19 6.26522 19 6C19 5.73478 18.8946 5.48043 18.7071 5.29289C18.5196 5.10536 18.2652 5 18 5C17.7348 5 17.4804 5.10536 17.2929 5.29289C17.1054 5.48043 17 5.73478 17 6C17 6.26522 17.1054 6.51957 17.2929 6.70711C17.4804 6.89464 17.7348 7 18 7ZM18 19C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18C19 17.7348 18.8946 17.4804 18.7071 17.2929C18.5196 17.1054 18.2652 17 18 17C17.7348 17 17.4804 17.1054 17.2929 17.2929C17.1054 17.4804 17 17.7348 17 18C17 18.2652 17.1054 18.5196 17.2929 18.7071C17.4804 18.8946 17.7348 19 18 19Z" fill="black" />
                <path d="M12 16.5C13.1935 16.5 14.3381 16.0259 15.182 15.182C16.0259 14.3381 16.5 13.1935 16.5 12C16.5 10.8065 16.0259 9.66193 15.182 8.81802C14.3381 7.97411 13.1935 7.5 12 7.5C10.8065 7.5 9.66193 7.97411 8.81802 8.81802C7.97411 9.66193 7.5 10.8065 7.5 12C7.5 13.1935 7.97411 14.3381 8.81802 15.182C9.66193 16.0259 10.8065 16.5 12 16.5Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_80_1363)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </p>
          <p class="features-overview__text">{!! $blocks->get('about_trades_per_second') !!}</p>
        </div>
        <div class="features-overview__card">
          <p class="features-overview__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.45 15.5C10.8667 15.9167 11.3917 16.1127 12.025 16.088C12.6583 16.0633 13.1167 15.834 13.4 15.4L19 7L10.6 12.6C10.1667 12.9 9.92933 13.354 9.888 13.962C9.84667 14.57 10.034 15.0827 10.45 15.5ZM5.1 20C4.73333 20 4.396 19.9207 4.088 19.762C3.78 19.6033 3.534 19.366 3.35 19.05C2.91667 18.2667 2.58333 17.4543 2.35 16.613C2.11667 15.7717 2 14.9007 2 14C2 12.6167 2.26267 11.3167 2.788 10.1C3.31333 8.88333 4.02567 7.825 4.925 6.925C5.82433 6.025 6.88267 5.31267 8.1 4.788C9.31733 4.26333 10.6173 4.00067 12 4C13.3667 4 14.65 4.25833 15.85 4.775C17.05 5.29167 18.1 5.996 19 6.888C19.9 7.78 20.6167 8.82167 21.15 10.013C21.6833 11.2043 21.9583 12.4833 21.975 13.85C21.9917 14.7667 21.8877 15.6627 21.663 16.538C21.4383 17.4133 21.0923 18.2507 20.625 19.05C20.4417 19.3667 20.196 19.6043 19.888 19.763C19.58 19.9217 19.242 20.0007 18.874 20H5.1Z" fill="#FF9000" />
            </svg>
          </p>
          <p class="features-overview__text">
            {!! $blocks->get('about_сompound') !!}
          </p>
        </div>
      </div>
      <a href="#" class="registration-btn">{!! $blocks->get('about_registration') !!}</a>
    </div>
  </section>


  <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>