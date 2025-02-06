<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Economic calendar</title>
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
          {!! $blocks->get('calendar_title') !!}
        </h1>
        <p class="hero-subtitle">
          {!! $blocks->get('calendar_description') !!}
        </p>
      </div>
      <div class="hero-img">
        <img src="/assets/img/indices-main.png" alt="Economic Calendar" />
      </div>
    </div>
  </section>

  <?php include('../resources/includes/blocks/call-us-block.php') ?>

</body>

</html>