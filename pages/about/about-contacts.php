<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacts</title>
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
        <h1 class="hero-title">{!! $blocks->get('contacts_title') !!}</h1>
        <p class="hero-subtitle">
          {!! $blocks->get('contacts_description') !!}
        </p>
      </div>
      <div class="form-container">
        <form id="customForm">
          <div class="form-left">
            <div class="form-group">
              <label for="name">{!! $blocks->get('contacts_name') !!}</label>
              <input
                type="text"
                id="name"
                placeholder="Введите ваше имя"
                required />
            </div>
            <div class="form-group">
              <label for="email">{!! $blocks->get('contacts_email') !!}</label>
              <input
                type="email"
                id="email"
                placeholder="Введите ваш email"
                required />
            </div>
          </div>
          <div class="form-right">
            <div class="form-group">
              <label for="comment">{!! $blocks->get('contacts_comment') !!}</label>
              <textarea
                id="comment"
                rows="5"
                placeholder="Введите ваш комментарий:"></textarea>
            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="submit-button">{!! $blocks->get('contacts_send') !!}</button>
          </div>
        </form>
      </div>
    </div>
  </section>


  <section class="offices _container _indent">
    <div class="offices__container">
      <h2 class="offices__title">{!! $blocks->get('contacts_offices') !!}</h2>
      <p class="offices__subtitle">
        {!! $blocks->get('contacts_description') !!}
      </p>
      <div class="offices__wrapper">
        <!-- Блок страны и контактов -->
        <div class="offices__block">
          <div class="offices__section">
            <h3 class="offices__country">{!! $blocks->get('contacts_uk') !!}</h3>
            <p class="offices__company">AdeGroup UK Ltd</p>
          </div>
          <div class="offices__section">
            <h3 class="offices__number">+44(203)190 87 96</h3>
            <p class="offices__company">{!! $blocks->get('contacts_feedback') !!}</p>
          </div>
          <div class="offices__section">
            <h3 class="offices__mail">documents@sample-group.com</h3>
            <p class="offices__company">{!! $blocks->get('contacts_feedback') !!}</p>
          </div>
          <div class="offices__section">
            <h3 class="offices__mail">support@sample-group.com</h3>
            <p class="offices__company">SampleGroup UK Ltd</p>
          </div>
          <div class="offices__section">
            <h3 class="offices__mail">finance@sample-group.com</h3>
            <p class="offices__company">{!! $blocks->get('contacts_financial_department') !!}</p>
          </div>

        </div>
        <!-- Блок адреса и изображения -->
        <div class="offices__block">
          <div class="offices__section">
            <h3 class="offices__location">{!! $blocks->get('contacts_headquarters') !!}</h3>
            <p class="offices__address">
              {!! $blocks->get('contacts_address') !!}
            </p>
          </div>
          <div class="offices__image-wrapper">
            <img
              src="/assets/img/contact-img.png"
              alt="Штаб-квартира"
              class="offices__image" />
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include('../resources/includes/blocks/call-us-block.php') ?>

  <?php include('../resources/includes/footer.php') ?>

</body>

</html>