<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>account replenishment</title>
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
      <div class="content-block__text">
        <div class="content-block__line"></div>
        <h2 class="content-block__title">
          {!! $blocks->get('replenishment_title') !!}
        </h2>
      </div>
      <div class="content-block__image">
        <img class="" src="/assets/img/key.png" alt="Ключ" />
      </div>
    </div>
  </section>


  <section class="payment-methods">
    <h2 class="payment-methods__title">
      {!! $blocks->get('replenishment_description') !!}
    </h2>
    <div class="payment-methods__table-wrapper">
      <table class="payment-methods__table">
        <thead>
          <tr>
            <th>{!! $blocks->get('replenishment_payment_method') !!}</th>
            <th>{!! $blocks->get('replenishment_processing_time') !!}</th>
            <th>{!! $blocks->get('replenishment_limits') !!}</th>
            <th>{!! $blocks->get('replenishment_commissions') !!}</th>
          </tr>
          <tr>
            <th></th>
            <td>
              <ul class="sec-col">
                <li>{!! $blocks->get('replenishment_deposit_funds') !!}</li>
                <li>{!! $blocks->get('replenishment_withdrawal') !!}</li>
              </ul>
            </td>
            <td>
              <ul class="sec-col">
                <li>{!! $blocks->get('replenishment_deposit_funds') !!}</li>
                <li>{!! $blocks->get('replenishment_withdrawal') !!}</li>
              </ul>
            </td>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="/assets/img/payment/bank-transfer.png" alt="Bank Transfer" />
              <p>{!! $blocks->get('replenishment_bank_transfers') !!}</p>
            </td>
            <td>
              <ul>
                <li>3-5 {!! $blocks->get('replenishment_days') !!}</li>
                <li>3-5 {!! $blocks->get('replenishment_days') !!}</li>
              </ul>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_up_to_30min') !!}</li>
                <li>{!! $blocks->get('replenishment_at_least') !!} 1,000$</li>
              </ul>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_from') !!} 1.5% {!! $blocks->get('replenishment_to') !!} 3%</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>
              <img src="/assets/img/payment/visa.png" alt="VISA" />
              <img src="/assets/img/payment/mastercard.png" alt="MasterCard" />
              <img src="/assets/img/payment/maestro.png" alt="maestro" />
              <img src="/assets/img/payment/unionpay.png" alt="unionpay" />
              <p>{!! $blocks->get('replenishment_supported_currencies') !!} USD, EUR, GBP, CHF, JPY, PLN, AUD</p>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_up_to_30min') !!}</li>
                <li>{!! $blocks->get('replenishment_up_to_3days') !!}</li>
              </ul>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_at_least') !!} 50$</li>
                <li>{!! $blocks->get('replenishment_at_least') !!} 50$</li>
              </ul>
            </td>
            <td>
              <p>0%</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="/assets/img/payment/mir.png" alt="МИР" />
              <img src="/assets/img/payment/spb.png" alt="СПБ" />
              <p>{!! $blocks->get('replenishment_supported_currencies') !!} RUB</p>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_up_to_30min') !!}</li>
                <li>{!! $blocks->get('replenishment_up_to_3days') !!}</li>
              </ul>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_from') !!} 10,000.00 RUB</li>
                <li>{!! $blocks->get('replenishment_at_least') !!} 5,000 RUB</li>
              </ul>
            </td>
            <td>0%</td>
          </tr>
          <tr>
            <td>
              <img src="/assets/img/payment/btc.png" alt="Crypto" />
              <p>{!! $blocks->get('replenishment_supported_currencies') !!} Bitcoin, Ethereum, Tether (USDT)</p>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_1_6hours') !!}</li>
                <li>{!! $blocks->get('replenishment_1_6days') !!}</li>
              </ul>
            </td>
            <td>
              <ul>
                <li>{!! $blocks->get('replenishment_at_least') !!} 500$</li>
                <li>{!! $blocks->get('replenishment_at_least') !!} 500$</li>
              </ul>
            </td>
            <td>0%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>


  <?php include('../resources/includes/blocks/call-us-block.php') ?>

</body>

</html>