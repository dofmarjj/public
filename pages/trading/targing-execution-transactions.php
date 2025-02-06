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


  <section class="content-block main-img">
    <div class="content-block__container _indent _container">
      <div class="content-block__info">
        <div class="content-block__text">
          <div class="content-block__line"></div>
          <h2 class="content-block__title">
            {!! $blocks->get('execution_title') !!}
          </h2>
        </div>
        <p class="content-block__subtitle">
          {!! $blocks->get('execution_description') !!}
        </p>

        <ul class="content-block__list">
          <li class="content-block__item">
            <svg
              width="25"
              height="24"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.2363 11C12.7863 11 13.2573 10.8043 13.6493 10.413C14.0413 10.0217 14.237 9.55067 14.2363 9C14.2357 8.44933 14.04 7.97867 13.6493 7.588C13.2587 7.19733 12.7877 7.00133 12.2363 7C11.685 6.99867 11.2143 7.19467 10.8243 7.588C10.4343 7.98133 10.2383 8.452 10.2363 9C10.2343 9.548 10.4303 10.019 10.8243 10.413C11.2183 10.807 11.689 11.0027 12.2363 11ZM7.23633 10.8V7H5.23633V8C5.23633 8.63333 5.41966 9.20433 5.78633 9.713C6.153 10.2217 6.63633 10.584 7.23633 10.8ZM17.2363 10.8C17.8363 10.5833 18.3197 10.2207 18.6863 9.712C19.053 9.20333 19.2363 8.63267 19.2363 8V7H17.2363V10.8ZM11.2363 19V15.9C10.4197 15.7167 9.69066 15.371 9.04933 14.863C8.40799 14.355 7.937 13.7173 7.63633 12.95C6.38633 12.8 5.34066 12.2543 4.49933 11.313C3.65799 10.3717 3.23699 9.26733 3.23633 8V7C3.23633 6.45 3.43233 5.97933 3.82433 5.588C4.21633 5.19667 4.68699 5.00067 5.23633 5H7.23633C7.23633 4.45 7.43233 3.97933 7.82433 3.588C8.21633 3.19667 8.68699 3.00067 9.23633 3H15.2363C15.7863 3 16.2573 3.196 16.6493 3.588C17.0413 3.98 17.237 4.45067 17.2363 5H19.2363C19.7863 5 20.2573 5.196 20.6493 5.588C21.0413 5.98 21.237 6.45067 21.2363 7V8C21.2363 9.26667 20.8153 10.371 19.9733 11.313C19.1313 12.255 18.0857 12.8007 16.8363 12.95C16.5363 13.7167 16.0657 14.3543 15.4243 14.863C14.783 15.3717 14.0537 15.7173 13.2363 15.9V19H16.2363C16.5197 19 16.7573 19.096 16.9493 19.288C17.1413 19.48 17.237 19.7173 17.2363 20C17.2357 20.2827 17.1397 20.5203 16.9483 20.713C16.757 20.9057 16.5197 21.0013 16.2363 21H8.23633C7.95299 21 7.71566 20.904 7.52433 20.712C7.33299 20.52 7.23699 20.2827 7.23633 20C7.23566 19.7173 7.33166 19.48 7.52433 19.288C7.71699 19.096 7.95433 19 8.23633 19H11.2363Z"
                fill="#FF9000" />
            </svg>
            <p>{!! $blocks->get('execution_best_broker') !!}</p>
          </li>
          <li class="content-block__item">
            <svg
              width="25"
              height="24"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.2363 11C12.7863 11 13.2573 10.8043 13.6493 10.413C14.0413 10.0217 14.237 9.55067 14.2363 9C14.2357 8.44933 14.04 7.97867 13.6493 7.588C13.2587 7.19733 12.7877 7.00133 12.2363 7C11.685 6.99867 11.2143 7.19467 10.8243 7.588C10.4343 7.98133 10.2383 8.452 10.2363 9C10.2343 9.548 10.4303 10.019 10.8243 10.413C11.2183 10.807 11.689 11.0027 12.2363 11ZM7.23633 10.8V7H5.23633V8C5.23633 8.63333 5.41966 9.20433 5.78633 9.713C6.153 10.2217 6.63633 10.584 7.23633 10.8ZM17.2363 10.8C17.8363 10.5833 18.3197 10.2207 18.6863 9.712C19.053 9.20333 19.2363 8.63267 19.2363 8V7H17.2363V10.8ZM11.2363 19V15.9C10.4197 15.7167 9.69066 15.371 9.04933 14.863C8.40799 14.355 7.937 13.7173 7.63633 12.95C6.38633 12.8 5.34066 12.2543 4.49933 11.313C3.65799 10.3717 3.23699 9.26733 3.23633 8V7C3.23633 6.45 3.43233 5.97933 3.82433 5.588C4.21633 5.19667 4.68699 5.00067 5.23633 5H7.23633C7.23633 4.45 7.43233 3.97933 7.82433 3.588C8.21633 3.19667 8.68699 3.00067 9.23633 3H15.2363C15.7863 3 16.2573 3.196 16.6493 3.588C17.0413 3.98 17.237 4.45067 17.2363 5H19.2363C19.7863 5 20.2573 5.196 20.6493 5.588C21.0413 5.98 21.237 6.45067 21.2363 7V8C21.2363 9.26667 20.8153 10.371 19.9733 11.313C19.1313 12.255 18.0857 12.8007 16.8363 12.95C16.5363 13.7167 16.0657 14.3543 15.4243 14.863C14.783 15.3717 14.0537 15.7173 13.2363 15.9V19H16.2363C16.5197 19 16.7573 19.096 16.9493 19.288C17.1413 19.48 17.237 19.7173 17.2363 20C17.2357 20.2827 17.1397 20.5203 16.9483 20.713C16.757 20.9057 16.5197 21.0013 16.2363 21H8.23633C7.95299 21 7.71566 20.904 7.52433 20.712C7.33299 20.52 7.23699 20.2827 7.23633 20C7.23566 19.7173 7.33166 19.48 7.52433 19.288C7.71699 19.096 7.95433 19 8.23633 19H11.2363Z"
                fill="#FF9000" />
            </svg>
            <p>{!! $blocks->get('execution_best_platform') !!}</p>
          </li>
          <li class="content-block__item">
            <svg
              width="25"
              height="24"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.2363 11C12.7863 11 13.2573 10.8043 13.6493 10.413C14.0413 10.0217 14.237 9.55067 14.2363 9C14.2357 8.44933 14.04 7.97867 13.6493 7.588C13.2587 7.19733 12.7877 7.00133 12.2363 7C11.685 6.99867 11.2143 7.19467 10.8243 7.588C10.4343 7.98133 10.2383 8.452 10.2363 9C10.2343 9.548 10.4303 10.019 10.8243 10.413C11.2183 10.807 11.689 11.0027 12.2363 11ZM7.23633 10.8V7H5.23633V8C5.23633 8.63333 5.41966 9.20433 5.78633 9.713C6.153 10.2217 6.63633 10.584 7.23633 10.8ZM17.2363 10.8C17.8363 10.5833 18.3197 10.2207 18.6863 9.712C19.053 9.20333 19.2363 8.63267 19.2363 8V7H17.2363V10.8ZM11.2363 19V15.9C10.4197 15.7167 9.69066 15.371 9.04933 14.863C8.40799 14.355 7.937 13.7173 7.63633 12.95C6.38633 12.8 5.34066 12.2543 4.49933 11.313C3.65799 10.3717 3.23699 9.26733 3.23633 8V7C3.23633 6.45 3.43233 5.97933 3.82433 5.588C4.21633 5.19667 4.68699 5.00067 5.23633 5H7.23633C7.23633 4.45 7.43233 3.97933 7.82433 3.588C8.21633 3.19667 8.68699 3.00067 9.23633 3H15.2363C15.7863 3 16.2573 3.196 16.6493 3.588C17.0413 3.98 17.237 4.45067 17.2363 5H19.2363C19.7863 5 20.2573 5.196 20.6493 5.588C21.0413 5.98 21.237 6.45067 21.2363 7V8C21.2363 9.26667 20.8153 10.371 19.9733 11.313C19.1313 12.255 18.0857 12.8007 16.8363 12.95C16.5363 13.7167 16.0657 14.3543 15.4243 14.863C14.783 15.3717 14.0537 15.7173 13.2363 15.9V19H16.2363C16.5197 19 16.7573 19.096 16.9493 19.288C17.1413 19.48 17.237 19.7173 17.2363 20C17.2357 20.2827 17.1397 20.5203 16.9483 20.713C16.757 20.9057 16.5197 21.0013 16.2363 21H8.23633C7.95299 21 7.71566 20.904 7.52433 20.712C7.33299 20.52 7.23699 20.2827 7.23633 20C7.23566 19.7173 7.33166 19.48 7.52433 19.288C7.71699 19.096 7.95433 19 8.23633 19H11.2363Z"
                fill="#FF9000" />
            </svg>
            <p>{!! $blocks->get('execution_best_services') !!}</p>
          </li>
        </ul>
      </div>
      <div class="content-block__image">
        <img class="" src="/assets/img/iphone13.png" alt="iPhone" />
      </div>
    </div>
  </section>


  <section class="advantages _container _indent">
    <div class="advantages__container">
      <h2 class="advantages__title">
        {!! $blocks->get('execution_direct_order_benefits') !!}
      </h2>
      <div class="advantages__list">
        <div class="advantages__item">
          <div class="advantages__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_58_548" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="22" height="22">
                <path d="M11.9998 2L14.6263 3.916L17.8778 3.91L18.8763 7.004L21.5103 8.91L20.4998 12L21.5103 15.09L18.8763 16.996L17.8778 20.09L14.6263 20.084L11.9998 22L9.37326 20.084L6.12176 20.09L5.12326 16.996L2.48926 15.09L3.49976 12L2.48926 8.91L5.12326 7.004L6.12176 3.91L9.37326 3.916L11.9998 2Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.5 12L11 14.5L16 9.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_58_548)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </div>
          <div class="advantages__content">
            <h3 class="advantages__subtitle">
              {!! $blocks->get('execution_interbank_liquidity') !!}
            </h3>
            <p class="advantages__description">
              {!! $blocks->get('execution_liquidity_advantages') !!}
            </p>
          </div>
        </div>
        <div class="advantages__item">
          <div class="advantages__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_58_591" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="22" height="22">
                <path d="M20.5 2H3.5C3.10218 2 2.72064 2.15804 2.43934 2.43934C2.15804 2.72064 2 3.10218 2 3.5V20.5C2 20.8978 2.15804 21.2794 2.43934 21.5607C2.72064 21.842 3.10218 22 3.5 22H20.5C20.8978 22 21.2794 21.842 21.5607 21.5607C21.842 21.2794 22 20.8978 22 20.5V3.5C22 3.10218 21.842 2.72064 21.5607 2.43934C21.2794 2.15804 20.8978 2 20.5 2Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 7C6.26522 7 6.51957 6.89464 6.70711 6.70711C6.89464 6.51957 7 6.26522 7 6C7 5.73478 6.89464 5.48043 6.70711 5.29289C6.51957 5.10536 6.26522 5 6 5C5.73478 5 5.48043 5.10536 5.29289 5.29289C5.10536 5.48043 5 5.73478 5 6C5 6.26522 5.10536 6.51957 5.29289 6.70711C5.48043 6.89464 5.73478 7 6 7ZM6 19C6.26522 19 6.51957 18.8946 6.70711 18.7071C6.89464 18.5196 7 18.2652 7 18C7 17.7348 6.89464 17.4804 6.70711 17.2929C6.51957 17.1054 6.26522 17 6 17C5.73478 17 5.48043 17.1054 5.29289 17.2929C5.10536 17.4804 5 17.7348 5 18C5 18.2652 5.10536 18.5196 5.29289 18.7071C5.48043 18.8946 5.73478 19 6 19ZM18 7C18.2652 7 18.5196 6.89464 18.7071 6.70711C18.8946 6.51957 19 6.26522 19 6C19 5.73478 18.89464 5.48043 18.7071 5.29289C18.5196 5.10536 18.2652 5 18 5C17.7348 5 17.4804 5.10536 17.2929 5.29289C17.1054 5.48043 17 5.73478 17 6C17 6.26522 17.1054 6.51957 17.2929 6.70711C17.4804 6.89464 17.7348 7 18 7ZM18 19C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18C19 17.7348 18.89464 17.4804 18.7071 17.2929C18.5196 17.1054 18.2652 17 18 17C17.7348 17 17.4804 17.1054 17.2929 17.2929C17.1054 17.4804 17 17.7348 17 18C17 18.2652 17.1054 18.5196 17.2929 18.7071C17.4804 18.8946 17.7348 19 18 19Z" fill="black" />
                <path d="M12 16.5C13.1935 16.5 14.3381 16.0259 15.182 15.182C16.0259 14.3381 16.5 13.1935 16.5 12C16.5 10.8065 16.0259 9.66193 15.182 8.81802C14.3381 7.97411 13.1935 7.5 12 7.5C10.8065 7.5 9.66193 7.97411 8.81802 8.81802C7.97411 9.66193 7.5 10.8065 7.5 12C7.5 13.1935 7.97411 14.3381 8.81802 15.182C9.66193 16.0259 10.8065 16.5 12 16.5Z" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </mask>
              <g mask="url(#mask0_58_591)">
                <path d="M0 0H24V24H0V0Z" fill="#FF9000" />
              </g>
            </svg>
          </div>
          <div class="advantages__content">
            <h3 class="advantages__subtitle">
              {!! $blocks->get('execution_reliability_quality') !!}
            </h3>
            <p class="advantages__description">
              {!! $blocks->get('execution_award_quality') !!}
            </p>
          </div>
        </div>
        <div class="advantages__item">
          <div class="advantages__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.45 15.5C10.8667 15.9167 11.3917 16.1127 12.025 16.088C12.6583 16.0633 13.1167 15.834 13.4 15.4L19 7L10.6 12.6C10.1667 12.9 9.92933 13.354 9.888 13.962C9.84667 14.57 10.034 15.0827 10.45 15.5ZM5.1 20C4.73333 20 4.396 19.9207 4.088 19.762C3.78 19.6033 3.534 19.366 3.35 19.05C2.91667 18.2667 2.58333 17.4543 2.35 16.613C2.11667 15.7717 2 14.9007 2 14C2 12.6167 2.26267 11.3167 2.788 10.1C3.31333 8.88333 4.02567 7.825 4.925 6.925C5.82433 6.025 6.88267 5.31267 8.1 4.788C9.31733 4.26333 10.6173 4.00067 12 4C13.3667 4 14.65 4.25833 15.85 4.775C17.05 5.29167 18.1 5.996 19 6.888C19.9 7.78 20.6167 8.82167 21.15 10.013C21.6833 11.2043 21.9583 12.4833 21.975 13.85C21.9917 14.7667 21.8877 15.6627 21.663 16.538C21.4383 17.4133 21.0923 18.2507 20.625 19.05C20.4417 19.3667 20.196 19.6043 19.888 19.763C19.58 19.9217 19.242 20.0007 18.874 20H5.1Z" fill="#FF9000" />
            </svg>
          </div>
          <div class="advantages__content">
            <h3 class="advantages__subtitle">
              {!! $blocks->get('execution_instant_execution') !!}
            </h3>
            <p class="advantages__description">
              {!! $blocks->get('execution_advanced_technology') !!}
            </p>
          </div>
        </div>
      </div>
      <h3 class="advantages__subtitle-secondary">
        {!! $blocks->get('execution_mechanics') !!}
      </h3>
      <p class="advantages__text">
        {!! $blocks->get('execution_stp_broker') !!}
      </p>
    </div>
  </section>


  <section class="processing-mechanics main-img">
    <div class="processing-mechanics__container _indent _container">
      <h2 class="processing-mechanics__title">
        {!! $blocks->get('execution_mechanics') !!}
      </h2>
      <div class="processing-mechanics__columns">
        <div class="processing-mechanics__column">
          <h3 class="processing-mechanics__subtitle">
            {!! $blocks->get('execution_stp_broker') !!}
          </h3>
          <p class="processing-mechanics__text">
            {!! $blocks->get('execution_stp_ndd') !!}
          </p>
        </div>
        <div class="processing-mechanics__column">
          <h3 class="processing-mechanics__subtitle">
            {!! $blocks->get('execution_ecn_broker') !!}
          </h3>
          <p class="processing-mechanics__text">
            {!! $blocks->get('execution_ecn_ndd') !!}
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="transparency _container _indent">
    <div class="transparency__container">
      <h2 class="transparency__title">
        {!! $blocks->get('execution_transparent') !!}
      </h2>
      <p class="transparency__description">
        {!! $blocks->get('execution_transparency_awards') !!}
      </p>
      <div class="transparency__content">
        <div class="transparency__chart">
          <div class="transparency__chart-image">
            <img src="/assets/img/chart.png" alt="{!! $blocks->get('execution_slippage_report') !!}" />
          </div>
        </div>
        <div class="transparency__info">
          <div class="transparency__info-box">
            <div class="transparency__icon">
              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_59_685" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="22" height="23">
                  <path d="M11.9998 2.53333L14.6263 4.44933L17.8778 4.44333L18.8763 7.53733L21.5103 9.44333L20.4998 12.5333L21.5103 15.6233L18.8763 17.5293L17.8778 20.6233L14.6263 20.6173L11.9998 22.5333L9.37326 20.6173L6.12176 20.6233L5.12326 17.5293L2.48926 15.6233L3.49976 12.5333L2.48926 9.44333L5.12326 7.53733L6.12176 4.44333L9.37326 4.44933L11.9998 2.53333Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M8.5 12.5333L11 15.0333L16 10.0333" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </mask>
                <g mask="url(#mask0_59_685)">
                  <path d="M0 0.533325H24V24.5333H0V0.533325Z" fill="#FF9000" />
                </g>
              </svg>
            </div>
            <h3 class="transparency__info-title">
              {!! $blocks->get('execution_slippage_data_2024') !!}
            </h3>
            <p class="transparency__info-text">
              {!! $blocks->get('execution_market_changes') !!}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="statistics main-img">
    <div class="statistics__container _container _indent">
      <div class="statistics__content">
        <h2 class="statistics__title">
          {!! $blocks->get('execution_slippage_data_2024') !!}
        </h2>
        <p class="statistics__description">
          {!! $blocks->get('execution_2024_details') !!}
        </p>
        <div class="statistics__bars">
          <div class="statistics__bar">
            <div class="statistics__text">
              <span class="statistics__value">98.61%</span>
              <span class="statistics__label">{!! $blocks->get('execution_no_slippage') !!}</span>
            </div>
            <div class="statistics__line statistics__line--positive"></div>
          </div>
          <div class="statistics__bar">
            <div class="statistics__text">
              <span class="statistics__value">0.72%</span>
              <span class="statistics__label">{!! $blocks->get('execution_positive_slippage') !!}</span>
            </div>
            <div class="statistics__line statistics__line--neutral"></div>
          </div>
          <div class="statistics__bar">
            <div class="statistics__text">
              <span class="statistics__value">0.67%</span>
              <span class="statistics__label">{!! $blocks->get('execution_negative_slippage') !!}</span>
            </div>
            <div class="statistics__line statistics__line--negative"></div>
          </div>
        </div>
      </div>
      <div class="statistics__image relative circle">
        <img src="/assets/img/iPhone16.png" alt="iPhone16" />
      </div>
    </div>
  </section>


  <section class="execution _container _indent">
    <div class="execution__container">
      <h2 class="execution__title">
        {!! $blocks->get('execution_order_features') !!}
      </h2>
      <p class="execution__description">
        {!! $blocks->get('execution_secure_processing') !!}
      </p>
      <a href="#" class="registration-btn w-100">Рассчитать →</a>
    </div>
  </section>




  <?php include('../resources/includes/blocks/call-us-block.php') ?>

</body>

</html>