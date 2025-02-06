<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Credit rating</title>
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
        <h1 class="hero-title">{!! $blocks->get('credit_rating_title') !!}</h1>
        <p class="hero-subtitle">{!! $blocks->get('credit_rating_description') !!}</p>
        <a class="_btn hero-btn registration-btn" href="#">{!! $blocks->get('credit_rating_open_account') !!}</a>
      </div>
      <div class="hero-img circle">
        <img src="/assets/img/businessman.png" alt="businessman" />
      </div>
    </div>
  </section>


  <section class="credit-rating-section _container _indent">
    <div class="credit-rating-container">
      <div class="credit-rating-card">
        <div class="icon-circle">
          <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="56" cy="56" r="56" fill="#FF9000" />
            <path d="M73.5 37.1875H38.5C37.2236 37.1875 35.9996 37.6945 35.097 38.597C34.1945 39.4996 33.6875 40.7236 33.6875 42V66.5C33.6875 67.7764 34.1945 69.0004 35.097 69.903C35.9996 70.8055 37.2236 71.3125 38.5 71.3125H73.5C74.7764 71.3125 76.0004 70.8055 76.903 69.903C77.8055 69.0004 78.3125 67.7764 78.3125 66.5V42C78.3125 40.7236 77.8055 39.4996 76.903 38.597C76.0004 37.6945 74.7764 37.1875 73.5 37.1875ZM75.6875 66.5C75.6875 67.0802 75.457 67.6366 75.0468 68.0468C74.6366 68.457 74.0802 68.6875 73.5 68.6875H38.5C37.9198 68.6875 37.3634 68.457 36.9532 68.0468C36.543 67.6366 36.3125 67.0802 36.3125 66.5V42C36.3125 41.4198 36.543 40.8634 36.9532 40.4532C37.3634 40.043 37.9198 39.8125 38.5 39.8125H73.5C74.0802 39.8125 74.6366 40.043 75.0468 40.4532C75.457 40.8634 75.6875 41.4198 75.6875 42V66.5ZM64.3125 77C64.3125 77.3481 64.1742 77.6819 63.9281 77.9281C63.6819 78.1742 63.3481 78.3125 63 78.3125H49C48.6519 78.3125 48.3181 78.1742 48.0719 77.9281C47.8258 77.6819 47.6875 77.3481 47.6875 77C47.6875 76.6519 47.8258 76.3181 48.0719 76.0719C48.3181 75.8258 48.6519 75.6875 49 75.6875H63C63.3481 75.6875 63.6819 75.8258 63.9281 76.0719C64.1742 76.3181 64.3125 76.6519 64.3125 77Z" fill="#10141D" />
          </svg>
        </div>
        <p>{!! $blocks->get('credit_rating_risk_analysis') !!}</p>
      </div>
      <div class="credit-rating-card">
        <div class="icon-circle">
          <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="56" cy="56" r="56" fill="#FF9000" />
            <path d="M73.5 37.1875H38.5C37.2236 37.1875 35.9996 37.6945 35.097 38.597C34.1945 39.4996 33.6875 40.7236 33.6875 42V66.5C33.6875 67.7764 34.1945 69.0004 35.097 69.903C35.9996 70.8055 37.2236 71.3125 38.5 71.3125H73.5C74.7764 71.3125 76.0004 70.8055 76.903 69.903C77.8055 69.0004 78.3125 67.7764 78.3125 66.5V42C78.3125 40.7236 77.8055 39.4996 76.903 38.597C76.0004 37.6945 74.7764 37.1875 73.5 37.1875ZM75.6875 66.5C75.6875 67.0802 75.457 67.6366 75.0468 68.0468C74.6366 68.457 74.0802 68.6875 73.5 68.6875H38.5C37.9198 68.6875 37.3634 68.457 36.9532 68.0468C36.543 67.6366 36.3125 67.0802 36.3125 66.5V42C36.3125 41.4198 36.543 40.8634 36.9532 40.4532C37.3634 40.043 37.9198 39.8125 38.5 39.8125H73.5C74.0802 39.8125 74.6366 40.043 75.0468 40.4532C75.457 40.8634 75.6875 41.4198 75.6875 42V66.5ZM64.3125 77C64.3125 77.3481 64.1742 77.6819 63.9281 77.9281C63.6819 78.1742 63.3481 78.3125 63 78.3125H49C48.6519 78.3125 48.3181 78.1742 48.0719 77.9281C47.8258 77.6819 47.6875 77.3481 47.6875 77C47.6875 76.6519 47.8258 76.3181 48.0719 76.0719C48.3181 75.8258 48.6519 75.6875 49 75.6875H63C63.3481 75.6875 63.6819 75.8258 63.9281 76.0719C64.1742 76.3181 64.3125 76.6519 64.3125 77Z" fill="#10141D" />
          </svg>
        </div>
        <p>{!! $blocks->get('credit_rating_variables_evaluation') !!}</p>
      </div>
      <div class="credit-rating-card">
        <div class="icon-circle">
          <svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="56" cy="56" r="56" fill="#FF9000" />
          </svg>
        </div>
        <p>{!! $blocks->get('credit_rating_bankruptcy_probability') !!}</p>
      </div>
      <div class="credit-rating-card gradient-background">
        <p>{!! $blocks->get('credit_rating_high_low') !!}</p>
      </div>
    </div>
  </section>


  <section class="credit-rating-criteria _container _indent">
    <h2 class="criteria-title">{!! $blocks->get('credit_rating_criteria') !!}</h2>
    <div class="criteria-chart">
      <img
        src="/assets/img/credit-rating-chart.png"
        alt="График кредитных рейтингов"
        class="chart-image" />
    </div>
    <div class="criteria-info">
      <img
        src="/assets/img/fin-regulator.png"
        alt="Логотип Fin-Regulator"
        class="criteria-logo" />
      <p class="criteria-description">
        {!! $blocks->get('credit_rating_fca_regulator') !!}
      </p>
    </div>
  </section>


  <?php include('../resources/includes/blocks/advantages-block.php') ?>

  <?php include('../resources/includes/blocks/call-us-block.php') ?>


  <script src="/scripts/script.js"></script>
</body>

</html>