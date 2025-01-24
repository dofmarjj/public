<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
  <link rel="stylesheet" href="/styles/style.css" />
  <link rel="stylesheet" href="/styles/fonts.css" />
</head>

<body>
  <?php include('../resources/includes/menu.php') ?>

  <section class="_container _indent">
    <div>
      <div>
        <div>
          <h1> {!! $blocks->get('corporate_actions_title') !!}</h1>
          <p> {!! $blocks->get('corporate_actions_description') !!}</p>
          <p> {!! $blocks->get('corporate_actions_time_period') !!}</p>
          <div> {!! $blocks->get('corporate_actions_Dividends') !!}</div>
          <ul>
            <li> {!! $blocks->get('corporate_actions_margin_requirements') !!}</li>
            <li>
              <strong> {!! $blocks->get('corporate_actions_long_positions') !!}</strong> {!! $blocks->get('corporate_actions_clients_long') !!}
            </li>
            <li>
              <strong> {!! $blocks->get('corporate_actions_short_position') !!}</strong> {!! $blocks->get('corporate_actions_clients_short') !!}
            </li>
          </ul>
          <p>
            <i>ℹ</i> {!! $blocks->get('corporate_actions_securities') !!}
          </p>
          <div> {!! $blocks->get('corporate_actions_adjustments') !!}</div>
          <p> {!! $blocks->get('corporate_actions_when_corporate_action') !!}</p>
          <div> {!! $blocks->get('corporate_actions_stock_split') !!}</div>
          <div> {!! $blocks->get('corporate_actions_stock_split_normal') !!}</div>
          <p> {!! $blocks->get('corporate_actions_market_capitalization') !!}</p>
          <div> {!! $blocks->get('corporate_actions_example') !!}</div>
          <ul>
            <li> {!! $blocks->get('corporate_actions_buy_100') !!}</li>
            <li> {!! $blocks->get('corporate_actions_client_position') !!}</li>
            <li> {!! $blocks->get('corporate_actions_two_new_position') !!}</li>

            <li> {!! $blocks->get('corporate_actions_client_position_nochange') !!}</li>
          </ul>
          <div> {!! $blocks->get('corporate_actions_consolidation_shares') !!}</div>
          <p> {!! $blocks->get('corporate_actions_influence_on_market') !!}</p>
          <div>{!! $blocks->get('corporate_actions_example') !!}</div>
          <ul>
            <li> {!! $blocks->get('corporate_actions_buy_moree') !!}</li>
            <li> {!! $blocks->get('corporate_actions_position_100_stock') !!}</li>
            <li> {!! $blocks->get('corporate_actions_') !!}</li>
            <li> {!! $blocks->get('corporate_actions_position_clients') !!}</li>
          </ul>
          <div> {!! $blocks->get('corporate_actions_rights_issue') !!}</div>
          <p> {!! $blocks->get('corporate_actions_result_be') !!}</p>
          <ul>
            <li> {!! $blocks->get('corporate_actions_rights_issue_opportunity') !!}</li>
            <li> {!! $blocks->get('corporate_actions_preventing_shortages') !!}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>