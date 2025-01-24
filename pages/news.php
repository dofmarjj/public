<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>News</title>
  <link
    rel="stylesheet"
    href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="/styles/style.css" />
  <link rel="stylesheet" href="/styles/fonts.css" />
</head>

<body>

  <?php include('../resources/includes/menu.php') ?>


  <section class="media-center main-img">
    <div class="media-center__container _indent _container">
      <h1 class="media-center__title">
        {!! $blocks->get('news_title') !!}
      </h1>
      <p class="media-center__description">
        {!! $blocks->get('news_description') !!}
      </p>
      <div class="media-center__contact">
        <div class="media-center__contact-icon">
          <svg
            width="66"
            height="66"
            viewBox="0 0 66 66"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="33" cy="33" r="33" fill="white" />
            <path
              d="M26.1025 30.8363C28.0825 34.7275 31.2725 37.9037 35.1637 39.8975L38.1887 36.8725C38.56 36.5013 39.11 36.3775 39.5913 36.5425C41.1313 37.0512 42.795 37.3263 44.5 37.3263C45.2563 37.3263 45.875 37.945 45.875 38.7013V43.5C45.875 44.2563 45.2563 44.875 44.5 44.875C31.5887 44.875 21.125 34.4113 21.125 21.5C21.125 20.7437 21.7437 20.125 22.5 20.125H27.3125C28.0687 20.125 28.6875 20.7437 28.6875 21.5C28.6875 23.2188 28.9625 24.8688 29.4712 26.4088C29.6225 26.89 29.5125 27.4262 29.1275 27.8113L26.1025 30.8363Z"
              fill="black" />
          </svg>
        </div>
        <div class="media-center__contact-info">
          <p class="media-center__contact-text">{!! $blocks->get('news_contacts') !!}</p>
          <p class="media-center__contact-email">
            Ожидаем ваших заявок:
            <a href="mailto:support@ade-group.com">support@ade-group.com</a>
          </p>
          <p class="media-center__contact-phone">
            <a href="tel:+35725969200">+357 25 969200</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php include('../resources/includes/blocks/call-us-block.php') ?>

</body>

</html>