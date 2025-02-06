<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Strart</title>
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
        <h1 class="hero-title">
          {!! $blocks->get('start_title') !!}
        </h1>
        <p class="hero-subtitle">
          {!! $blocks->get('start_description') !!}
        </p>
      </div>
      <div class="">
        <a class="registration-btn text-center mt-50" href="#">
          {!! $blocks->get('start_create_account') !!}
        </a>
      </div>
    </div>
  </section>


  <section class="trading-steps _container _indent">
    <div class="trading-steps__block">
      <span>
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <mask
            id="mask0_74_122"
            style="mask-type: luminance"
            maskUnits="userSpaceOnUse"
            x="1"
            y="1"
            width="22"
            height="22">
            <path
              d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
              fill="white"
              stroke="white"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
            <path
              d="M8.5 12L11 14.5L16 9.5"
              stroke="black"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </mask>
          <g mask="url(#mask0_74_122)">
            <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
          </g>
        </svg>
      </span>
      <h3 class="trading-steps__title">
        {!! $blocks->get('start_account_creation') !!}
      </h3>
      <p class="trading-steps__text">
        {!! $blocks->get('start_fill_form') !!}
      </p>
    </div>
    <div class="trading-steps__block">
      <span>
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <mask
            id="mask0_74_132"
            style="mask-type: luminance"
            maskUnits="userSpaceOnUse"
            x="1"
            y="1"
            width="22"
            height="22">
            <path
              d="M20.5 2H3.5C3.10218 2 2.72064 2.15804 2.43934 2.43934C2.15804 2.72064 2 3.10218 2 3.5V20.5C2 20.8978 2.15804 21.2794 2.43934 21.5607C2.72064 21.842 3.10218 22 3.5 22H20.5C20.8978 22 21.2794 21.842 21.5607 21.5607C21.842 21.2794 22 20.8978 22 20.5V3.5C22 3.10218 21.842 2.72064 21.5607 2.43934C21.2794 2.15804 20.8978 2 20.5 2Z"
              fill="white"
              stroke="white"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
            <path
              d="M6 7C6.26522 7 6.51957 6.89464 6.70711 6.70711C6.89464 6.51957 7 6.26522 7 6C7 5.73478 6.89464 5.48043 6.70711 5.29289C6.51957 5.10536 6.26522 5 6 5C5.73478 5 5.48043 5.10536 5.29289 5.29289C5.10536 5.48043 5 5.73478 5 6C5 6.26522 5.10536 6.51957 5.29289 6.70711C5.48043 6.89464 5.73478 7 6 7ZM6 19C6.26522 19 6.51957 18.8946 6.70711 18.7071C6.89464 18.5196 7 18.2652 7 18C7 17.7348 6.89464 17.4804 6.70711 17.2929C6.51957 17.1054 6.26522 17 6 17C5.73478 17 5.48043 17.1054 5.29289 17.2929C5.10536 17.4804 5 17.7348 5 18C5 18.2652 5.10536 18.5196 5.29289 18.7071C5.48043 18.8946 5.73478 19 6 19ZM18 7C18.2652 7 18.5196 6.89464 18.7071 6.70711C18.8946 6.51957 19 6.26522 19 6C19 5.73478 18.8946 5.48043 18.7071 5.29289C18.5196 5.10536 18.2652 5 18 5C17.7348 5 17.4804 5.10536 17.2929 5.29289C17.1054 5.48043 17 5.73478 17 6C17 6.26522 17.1054 6.51957 17.2929 6.70711C17.4804 6.89464 17.7348 7 18 7ZM18 19C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18C19 17.7348 18.8946 17.4804 18.7071 17.2929C18.5196 17.1054 18.2652 17 18 17C17.7348 17 17.4804 17.1054 17.2929 17.2929C17.1054 17.4804 17 17.7348 17 18C17 18.2652 17.1054 18.5196 17.2929 18.7071C17.4804 18.8946 17.7348 19 18 19Z"
              fill="black" />
            <path
              d="M12 16.5C13.1935 16.5 14.3381 16.0259 15.182 15.182C16.0259 14.3381 16.5 13.1935 16.5 12C16.5 10.8065 16.0259 9.66193 15.182 8.81802C14.3381 7.97411 13.1935 7.5 12 7.5C10.8065 7.5 9.66193 7.97411 8.81802 8.81802C7.97411 9.66193 7.5 10.8065 7.5 12C7.5 13.1935 7.97411 14.3381 8.81802 15.182C9.66193 16.0259 10.8065 16.5 12 16.5Z"
              fill="black"
              stroke="black"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </mask>
          <g mask="url(#mask0_74_132)">
            <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
          </g>
        </svg>
      </span>
      <h3 class="trading-steps__title">
        {!! $blocks->get('start_balance_replenishment') !!}
      </h3>
      <p class="trading-steps__text">
        {!! $blocks->get('start_deposit_methods') !!}
      </p>
    </div>
    <div class="trading-steps__block">
      <span>
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M10.45 15.5C10.8667 15.9167 11.3917 16.1127 12.025 16.088C12.6583 16.0633 13.1167 15.834 13.4 15.4L19 7L10.6 12.6C10.1667 12.9 9.92933 13.354 9.888 13.962C9.84667 14.57 10.034 15.0827 10.45 15.5ZM5.1 20C4.73333 20 4.396 19.9207 4.088 19.762C3.78 19.6033 3.534 19.366 3.35 19.05C2.91667 18.2667 2.58333 17.4543 2.35 16.613C2.11667 15.7717 2 14.9007 2 14C2 12.6167 2.26267 11.3167 2.788 10.1C3.31333 8.88333 4.02567 7.825 4.925 6.925C5.82433 6.025 6.88267 5.31267 8.1 4.788C9.31733 4.26333 10.6173 4.00067 12 4C13.3667 4 14.65 4.25833 15.85 4.775C17.05 5.29167 18.1 5.996 19 6.888C19.9 7.78 20.6167 8.82167 21.15 10.013C21.6833 11.2043 21.9583 12.4833 21.975 13.85C21.9917 14.7667 21.8877 15.6627 21.663 16.538C21.4383 17.4133 21.0923 18.2507 20.625 19.05C20.4417 19.3667 20.196 19.6043 19.888 19.763C19.58 19.9217 19.242 20.0007 18.874 20H5.1Z"
            fill="#FF9000" />
        </svg>
      </span>
      <h3 class="trading-steps__title">
        {!! $blocks->get('start_begin_trading') !!}
      </h3>
      <p class="trading-steps__text">
        {!! $blocks->get('start_trade_assets') !!}
      </p>
    </div>
    <div class="trading-steps__footer">
      <h2 class="trading-steps__footer-title">
        {!! $blocks->get('start_account_success') !!}
      </h2>
    </div>
  </section>

  <section class="broker-info main-img">
    <div class="broker-info__block _container _indent">
      <div class="broker-info__content">
        <h1 class="broker-info__title">
          {!! $blocks->get('start_global_leader') !!}
        </h1>
        <p class="broker-info__description">
          {!! $blocks->get('start_best_conditions') !!}
        </p>
      </div>
      <div class="broker-info__features">
        <div class="broker-info__feature">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <mask
                id="mask0_74_184"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="1"
                y="1"
                width="22"
                height="22">
                <path
                  d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
                  fill="white"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8.5 12L11 14.5L16 9.5"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_74_184)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          {!! $blocks->get('start_ipo_statistics') !!}
        </div>
        <div class="broker-info__feature">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <mask
                id="mask0_74_184"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="1"
                y="1"
                width="22"
                height="22">
                <path
                  d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
                  fill="white"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8.5 12L11 14.5L16 9.5"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_74_184)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          {!! $blocks->get('start_experience_years') !!}
        </div>
        <div class="broker-info__feature">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <mask
                id="mask0_74_184"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="1"
                y="1"
                width="22"
                height="22">
                <path
                  d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
                  fill="white"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8.5 12L11 14.5L16 9.5"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_74_184)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          {!! $blocks->get('start_payment_methods') !!}
        </div>
        <div class="broker-info__feature">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <mask
                id="mask0_74_184"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="1"
                y="1"
                width="22"
                height="22">
                <path
                  d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
                  fill="white"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8.5 12L11 14.5L16 9.5"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_74_184)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          {!! $blocks->get('start_execution_time') !!}
        </div>
        <div class="broker-info__feature">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <mask
                id="mask0_74_184"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="1"
                y="1"
                width="22"
                height="22">
                <path
                  d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
                  fill="white"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8.5 12L11 14.5L16 9.5"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_74_184)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          {!! $blocks->get('start_account_platforms') !!}
        </div>
        <div class="broker-info__feature">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <mask
                id="mask0_74_184"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="1"
                y="1"
                width="22"
                height="22">
                <path
                  d="M12.0007 2L14.6272 3.916L17.8787 3.91L18.8772 7.004L21.5112 8.91L20.5007 12L21.5112 15.09L18.8772 16.996L17.8787 20.09L14.6272 20.084L12.0007 22L9.37423 20.084L6.12273 20.09L5.12423 16.996L2.49023 15.09L3.50073 12L2.49023 8.91L5.12423 7.004L6.12273 3.91L9.37423 3.916L12.0007 2Z"
                  fill="white"
                  stroke="white"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M8.5 12L11 14.5L16 9.5"
                  stroke="black"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_74_184)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </span>
          {!! $blocks->get('start_24_support') !!}
        </div>
      </div>
    </div>
  </section>


  <section class="mobile-util _container _indent">
    <div class="mobile-util__content">
      <h1 class="mobile-util__title">
        {!! $blocks->get('start_open_mobile_account') !!}
      </h1>
      <p class="mobile-util__description">
        {!! $blocks->get('start_download_app') !!}
      </p>
      <p class="mobile-util__description mt-20">
        {!! $blocks->get('start_advanced_trading') !!}
      </p>
      <div class="features-grid">
        <div class="features-grid__item features-grid__item--large">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11 18C12.9333 18 14.5833 17.321 15.95 15.963C17.3167 14.605 18 12.9507 18 11C18 9.06667 17.3167 7.41667 15.95 6.05001C14.5833 4.68334 12.9333 4.00001 11 4.00001C9.05 4.00001 7.396 4.68334 6.038 6.05001C4.68 7.41667 4.00067 9.06667 4 11C4 12.95 4.67933 14.6043 6.038 15.963C7.39667 17.3217 9.05067 18.0007 11 18ZM11 13.5C11.7 13.5 12.2917 13.2627 12.775 12.788C13.2583 12.3133 13.5 11.7173 13.5 11C13.5 10.3 13.2583 9.70834 12.775 9.22501C12.2917 8.74167 11.7 8.50001 11 8.50001C10.2833 8.50001 9.68767 8.74167 9.213 9.22501C8.73834 9.70834 8.50067 10.3 8.5 11C8.5 11.7167 8.73767 12.3127 9.213 12.788C9.68833 13.2633 10.284 13.5007 11 13.5ZM20.575 22L16.6 18.05C15.8167 18.6667 14.95 19.146 14 19.488C13.05 19.83 12.05 20.0007 11 20C9.75 20 8.57933 19.7627 7.488 19.288C6.39667 18.8133 5.44667 18.1717 4.638 17.363C3.82933 16.5543 3.18733 15.6043 2.712 14.513C2.23667 13.4217 1.99933 12.2507 2 11C2 9.76667 2.23767 8.60401 2.713 7.51201C3.18833 6.42001 3.82967 5.46601 4.637 4.65001C5.44433 3.83401 6.39433 3.18801 7.487 2.71201C8.57967 2.23601 9.75067 1.99867 11 2.00001C12.2333 2.00001 13.396 2.23767 14.488 2.71301C15.58 3.18834 16.534 3.83401 17.35 4.65001C18.166 5.46601 18.812 6.42034 19.288 7.51301C19.764 8.60567 20.0013 9.76801 20 11C20 12.0667 19.825 13.075 19.475 14.025C19.125 14.975 18.6417 15.8417 18.025 16.625L22 20.6L20.575 22Z"
                fill="#10141D" />
            </svg>
          </span>
          <p>{!! $blocks->get('start_personalized_recommendations') !!}</p>
        </div>
        <div class="features-grid__item-wrapper">
          <div class="features-grid__item features-grid__item--small">
            <span>
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5 21C4.45 21 3.97933 20.8043 3.588 20.413C3.19667 20.0217 3.00067 19.5507 3 19V5C3 4.45 3.196 3.97933 3.588 3.588C3.98 3.19667 4.45067 3.00067 5 3H16L21 8V19C21 19.55 20.8043 20.021 20.413 20.413C20.0217 20.805 19.5507 21.0007 19 21H5ZM5 19H19V9H15V5H5V19ZM7 17H17V15H7V17ZM7 9H12V7H7V9ZM7 13H17V11H7V13Z"
                  fill="black" />
              </svg>
            </span>
            <p>{!! $blocks->get('start_dividend_calendar') !!}</p>
          </div>
          <div class="features-grid__item features-grid__item--small">
            <span>
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12 20C10.9 20 9.97933 19.8043 9.238 19.413C8.49667 19.0217 7.93733 18.5507 7.563 18C7.18867 17.45 6.93767 16.85 6.813 16.2C6.68833 15.55 6.625 14.9 6.625 14.25C6.625 13.6 6.68833 12.95 6.813 12.3C6.93767 11.65 7.18867 11.05 7.563 10.5C7.93733 9.95 8.49667 9.47933 9.238 9.087C9.97933 8.69467 10.9 8.5 12 8.5C13.1 8.5 14.0207 8.69467 14.762 9.087C15.5033 9.47933 16.0627 9.95 16.437 10.5C16.8113 11.05 17.0623 11.65 17.188 12.3C17.3137 12.95 17.375 13.6 17.375 14.25C17.375 14.9 17.3137 15.55 17.188 16.2C17.0623 16.85 16.8113 17.45 16.437 18C16.0627 18.55 15.5033 19.0217 14.762 19.413C14.0207 19.8043 13.1 20 12 20Z"
                  fill="black" />
              </svg>
            </span>
            <p>{!! $blocks->get('start_info_centr') !!}</p>
          </div>
        </div>
        <div class="features-grid__item features-grid__item--large">
          <span>
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19 19H5V8H19M16 1V3H8V1H6V3H5C3.89 3 3 3.89 3 5V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H18V1M17 12H12V17H17V12Z"
                fill="black" />
            </svg>
          </span>
          <p>{!! $blocks->get('start_investment_recommendations') !!}</p>
        </div>
      </div>
    </div>
    <div class="mobile-util__image">
      <img src="/assets/img/mobile-app.png" alt="Мобильное приложение " />
    </div>
  </section>


  <section class="recommendations main-img">
    <div class="recommendations__block _container _indent">
      <h2 class="recommendations__title">
        {!! $blocks->get('start_account_success') !!}
      </h2>
      <div class="recommendations__container">
        <div class="recommendations__card">
          <h3 class="recommendations__card-title">
            {!! $blocks->get('start_basic_account') !!}
          </h3>
          <p class="recommendations__card-description">
            {!! $blocks->get('start_basic_details') !!}
          </p>
          <ul class="recommendations__features">
            <li>
              <span>
                <svg
                  width="16"
                  height="17"
                  viewBox="0 0 16 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.00049 1.83337L9.75149 3.11071L11.9192 3.10671L12.5848 5.16937L14.3408 6.44004L13.6672 8.50004L14.3408 10.56L12.5848 11.8307L11.9192 13.8934L9.75149 13.8894L8.00049 15.1667L6.24949 13.8894L4.08182 13.8934L3.41616 11.8307L1.66016 10.56L2.33382 8.50004L1.66016 6.44004L3.41616 5.16937L4.08182 3.10671L6.24949 3.11071L8.00049 1.83337Z" fill="#FF9000" />
                </svg>
              </span>
              {!! $blocks->get('start_min_spreads') !!}
            </li>
            <li>
              <span>
                <svg
                  width="16"
                  height="17"
                  viewBox="0 0 16 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.00049 1.83337L9.75149 3.11071L11.9192 3.10671L12.5848 5.16937L14.3408 6.44004L13.6672 8.50004L14.3408 10.56L12.5848 11.8307L11.9192 13.8934L9.75149 13.8894L8.00049 15.1667L6.24949 13.8894L4.08182 13.8934L3.41616 11.8307L1.66016 10.56L2.33382 8.50004L1.66016 6.44004L3.41616 5.16937L4.08182 3.10671L6.24949 3.11071L8.00049 1.83337Z" fill="#FF9000" />
                </svg>
              </span>
              {!! $blocks->get('start_trading_volume') !!}
            </li>
            <li>
              <span>
                <svg
                  width="16"
                  height="17"
                  viewBox="0 0 16 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.00049 1.83337L9.75149 3.11071L11.9192 3.10671L12.5848 5.16937L14.3408 6.44004L13.6672 8.50004L14.3408 10.56L12.5848 11.8307L11.9192 13.8934L9.75149 13.8894L8.00049 15.1667L6.24949 13.8894L4.08182 13.8934L3.41616 11.8307L1.66016 10.56L2.33382 8.50004L1.66016 6.44004L3.41616 5.16937L4.08182 3.10671L6.24949 3.11071L8.00049 1.83337Z" fill="#FF9000" />
                </svg>
              </span>
              {!! $blocks->get('start_leverage') !!}
            </li>
          </ul>
          <a href="#" class="registration-btn">
            {!! $blocks->get('start_register_basic') !!}
          </a>
        </div>
        <div class="recommendations__card">
          <h3 class="recommendations__card-title">
            {!! $blocks->get('start_vip_account') !!}
          </h3>
          <p class="recommendations__card-description">
            {!! $blocks->get('start_vip_details') !!}
          </p>
          <ul class="recommendations__features">
            <li>
              <span>
                <svg
                  width="16"
                  height="17"
                  viewBox="0 0 16 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.00049 1.83337L9.75149 3.11071L11.9192 3.10671L12.5848 5.16937L14.3408 6.44004L13.6672 8.50004L14.3408 10.56L12.5848 11.8307L11.9192 13.8934L9.75149 13.8894L8.00049 15.1667L6.24949 13.8894L4.08182 13.8934L3.41616 11.8307L1.66016 10.56L2.33382 8.50004L1.66016 6.44004L3.41616 5.16937L4.08182 3.10671L6.24949 3.11071L8.00049 1.83337Z" fill="#FF9000" />
                </svg>
              </span>
              {!! $blocks->get('start_vip_spreads') !!}
            </li>
            <li>
              <span>
                <svg
                  width="16"
                  height="17"
                  viewBox="0 0 16 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.00049 1.83337L9.75149 3.11071L11.9192 3.10671L12.5848 5.16937L14.3408 6.44004L13.6672 8.50004L14.3408 10.56L12.5848 11.8307L11.9192 13.8934L9.75149 13.8894L8.00049 15.1667L6.24949 13.8894L4.08182 13.8934L3.41616 11.8307L1.66016 10.56L2.33382 8.50004L1.66016 6.44004L3.41616 5.16937L4.08182 3.10671L6.24949 3.11071L8.00049 1.83337Z" fill="#FF9000" />
                </svg>
              </span>
              {!! $blocks->get('start_vip_vps') !!}
            </li>
            <li>
              <span>
                <svg
                  width="16"
                  height="17"
                  viewBox="0 0 16 17"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.00049 1.83337L9.75149 3.11071L11.9192 3.10671L12.5848 5.16937L14.3408 6.44004L13.6672 8.50004L14.3408 10.56L12.5848 11.8307L11.9192 13.8934L9.75149 13.8894L8.00049 15.1667L6.24949 13.8894L4.08182 13.8934L3.41616 11.8307L1.66016 10.56L2.33382 8.50004L1.66016 6.44004L3.41616 5.16937L4.08182 3.10671L6.24949 3.11071L8.00049 1.83337Z" fill="#FF9000" />
                </svg>
              </span>
              {!! $blocks->get('start_vip_volume') !!}
            </li>
          </ul>
          <a href="#" class="registration-btn">
            {!! $blocks->get('start_register_vip') !!}
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="stats-section _container _indent desktop">
    <div class="stats-section__container">
      <div class="stats-section__item">
        <p class="stats-section__value">
          {!! $blocks->get('start_company_capital') !!}
        </p>
        <p class="stats-section__description">
          {!! $blocks->get('start_company_capital_desc') !!}
        </p>
      </div>
      <div class="stats-section__item">
        <p class="stats-section__value">
          {!! $blocks->get('start_experience_years') !!}
        </p>
        <p class="stats-section__description">
          {!! $blocks->get('start_successful_work') !!}
        </p>
      </div>
      <div class="stats-section__item">
        <p class="stats-section__value">
          {!! $blocks->get('start_ipo_statistics') !!}
        </p>
        <p class="stats-section__description">
          {!! $blocks->get('start_ipo_desc') !!}
        </p>
      </div>
      <div class="stats-section__item">
        <p class="stats-section__value">
          {!! $blocks->get('start_active_assets') !!}
        </p>
        <p class="stats-section__description">
          {!! $blocks->get('start_active_assets_desc') !!}
        </p>
      </div>
      <div class="stats-section__item">
        <p class="stats-section__value">
          {!! $blocks->get('start_execution_stats') !!}
        </p>
        <p class="stats-section__description">
          {!! $blocks->get('start_execution_stats_desc') !!}
        </p>
      </div>
      <div class="stats-section__item">
        <p class="stats-section__value">
          {!! $blocks->get('start_completed_orders') !!}
        </p>
        <p class="stats-section__description">
          {!! $blocks->get('start_completed_orders_desc') !!}
        </p>
      </div>
    </div>
    <a href="#" class="registration-btn">
      {!! $blocks->get('start_register_btn') !!}
    </a>
  </section>


  <section class="trading-tools main-img desktop">
    <div class="trading-tools__content _indent _container">
      <h2 class="trading-tools__title">
        {!! $blocks->get('start_analysis_tools') !!}
      </h2>
      <p class="trading-tools__description">
        {!! $blocks->get('start_modern_platforms') !!}
      </p>
      <div class="trading-tools__buttons">
        <div class="trading-tools__button">
          <span class="trading-tools__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M6 4V6M6 11V20M12 4V14M12 19V20M18 4V5M18 11V20M4 7C4 6.73478 4.10536 6.48043 4.29289 6.29289C4.48043 6.10536 4.73478 6 5 6H7C7.26522 6 7.51957 6.10536 7.70711 6.29289C7.89464 6.48043 8 6.73478 8 7V10C8 10.2652 7.89464 10.5196 7.70711 10.7071C7.51957 10.8946 7.26522 11 7 11H5C4.73478 11 4.48043 10.8946 4.29289 10.7071C4.10536 10.5196 4 10.2652 4 10V7ZM10 15C10 14.7348 10.1054 14.4804 10.2929 14.2929C10.4804 14.1054 10.7348 14 11 14H13C13.2652 14 13.5196 14.1054 13.7071 14.2929C13.8946 14.4804 14 14.7348 14 15V18C14 18.2652 13.8946 18.5196 13.7071 18.7071C13.5196 18.8946 13.2652 19 13 19H11C10.7348 19 10.4804 18.8946 10.2929 18.7071C10.1054 18.5196 10 18.2652 10 18V15ZM16 6C16 5.73478 16.1054 5.48043 16.2929 5.29289C16.4804 5.10536 16.7348 5 17 5H19C19.2652 5 19.5196 5.10536 19.7071 5.29289C19.8946 5.48043 20 5.73478 20 6V10C20 10.2652 19.8946 10.5196 19.7071 10.7071C19.5196 10.8946 19.2652 11 19 11H17C16.7348 11 16.4804 10.8946 16.2929 10.7071C16.1054 10.5196 16 10.2652 16 10V6Z"
                stroke="#FF9000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
          <p>{!! $blocks->get('start_high_standards') !!}</p>
        </div>
        <div class="trading-tools__button">
          <span class="trading-tools__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M15.824 3.304C15.8864 3.19577 15.9772 3.10994 16.0848 3.05737C16.1924 3.0048 16.3121 2.98784 16.4286 3.00864L19.5008 3.56196C19.657 3.59008 19.7965 3.684 19.8886 3.82306C19.9807 3.96212 20.0179 4.13496 19.9919 4.30359L19.4805 7.62095C19.461 7.7467 19.4074 7.86339 19.3264 7.95626C19.2455 8.04913 19.1409 8.11402 19.0258 8.14273C18.9107 8.17144 18.7903 8.16268 18.6798 8.11756C18.5693 8.07244 18.4737 7.99298 18.4051 7.88923L17.5758 6.63812L13.305 9.58402C13.1229 9.70981 12.9048 9.76029 12.6909 9.72616C12.477 9.69203 12.2818 9.57558 12.1412 9.39829L9.75965 6.39306L5.3061 8.86302C5.09472 8.98035 4.84881 9.00224 4.62247 8.92387C4.39614 8.8455 4.20791 8.67329 4.09921 8.44513C3.99051 8.21696 3.97023 7.95154 4.04284 7.70723C4.11544 7.46293 4.27499 7.25977 4.48637 7.14243L9.57085 4.32165C9.75036 4.22211 9.95574 4.19088 10.1537 4.23302C10.3517 4.27515 10.5308 4.38818 10.6618 4.55381L12.9968 7.501L16.5338 5.0607L15.8443 4.01984C15.7758 3.91604 15.7372 3.79265 15.7336 3.66524C15.73 3.53784 15.7615 3.41213 15.824 3.304ZM8.00189 9.6369L4.53417 11.778C4.39718 11.8624 4.28327 11.9844 4.20396 12.1316C4.12465 12.2788 4.08274 12.446 4.08248 12.6163V20.0327C4.08248 20.5666 4.48398 21 4.97869 21H8.00189V9.6369ZM9.49557 21H13.8786V12.2139L11.9082 13.2767L9.93889 9.55693C9.83922 9.36795 9.68347 9.22074 9.49677 9.13904L9.49557 21ZM18.7205 21H15.3723V11.4078L18.3202 9.81618C18.4569 9.74255 18.6087 9.70783 18.7612 9.71532C18.9138 9.7228 19.062 9.77224 19.1919 9.85894C19.3218 9.94564 19.429 10.0667 19.5033 10.2107C19.5777 10.3547 19.6167 10.5168 19.6167 10.6816V20.0327C19.6167 20.2892 19.5223 20.5353 19.3542 20.7167C19.1862 20.8981 18.9582 21 18.7205 21Z"
                fill="#FF9000" />
            </svg>
          </span>
          <p>{!! $blocks->get('start_verified_tools') !!}</p>
        </div>
        <div class="trading-tools__button">
          <span class="trading-tools__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 7L10 3L21 7M3 7V12L14 16L21 12V7M3 7L14 11L21 7" stroke="#FF9000" stroke-width="2" stroke-linejoin="round" />
              <path d="M3 12V17L14 21L21 17V12" stroke="#FF9000" stroke-width="2" stroke-linejoin="round" />
            </svg>
          </span>
          <p>{!! $blocks->get('start_best_terminal') !!}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="registration-help _container _indent">
    <h2 class="registration-help__title">
      {!! $blocks->get('start_more_info') !!}
    </h2>
    <div class="registration-help__options">
      <div class="registration-help__option">
        <span class="registration-help__icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M4 20C3.45 20 2.97933 19.8043 2.588 19.413C2.19667 19.0217 2.00067 18.5507 2 18V6C2 5.45 2.196 4.97933 2.588 4.588C2.98 4.19667 3.45067 4.00067 4 4H20C20.55 4 21.021 4.196 21.413 4.588C21.805 4.98 22.0007 5.45067 22 6V18C22 18.55 21.8043 19.021 21.413 19.413C21.0217 19.805 20.5507 20.0007 20 20H4ZM12 13L20 8V6L12 11L4 6V8L12 13Z"
              fill="#FF9000" />
          </svg>
        </span>
        <p>
          {!! $blocks->get('start_contact_support') !!}
          <a href="mailto:support@Sample-group.com" class="registration-help__link">support@Sample-group.com</a>
        </p>
      </div>
      <div class="registration-help__option">
        <span class="registration-help__icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"
              fill="#FF9000" />
          </svg>
        </span>
        <p>{!! $blocks->get('start_callback') !!}</p>
      </div>
    </div>
  </section>


  <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>