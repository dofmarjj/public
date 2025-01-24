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

        <h1> {!! $blocks->get('bonus_rules_title') !!}</h1>

        <h3>{!! $blocks->get('bonus_rules_bonus_terms') !!}</h3>

        <p>{!! $blocks->get('bonus_rules_bonus_will_be_credited') !!}</p>

        <ul style="list-style: none">
            <li>{!! $blocks->get('bonus_rules_customer_is_over_the_age') !!}</li>
            <li>{!! $blocks->get('bonus_rules_order_to_receive_the_bonus') !!}</li>
        </ul>


        <p>{!! $blocks->get('bonus_rules_company_offers_different') !!}</p>



        <p>{!! $blocks->get('bonus_rules_terms_and_conditions') !!}</p>




        <p>{!! $blocks->get('bonus_rules_reserves_the_right_to_change') !!}</p>



        <p>{!! $blocks->get('bonus_rules_reserves_the_right_to_deny') !!}</p>




        <p>{!! $blocks->get('bonus_rules_requirement_is_not_fulfilled') !!}</p>

        <p>{!! $blocks->get('bonus_rules_bonus_deposits') !!}</p>
        <p>{!! $blocks->get('bonus_rules_bonus_and_profits') !!}</p>
        <p>{!! $blocks->get('bonus_rules_client_may') !!}</p>
        <p>{!! $blocks->get('bonus_rules_accepting_the_deposit') !!}</p>
        <p>{!! $blocks->get('bonus_rules_bonuses_received') !!}</p>



        </div>
        </div>
        </div>
    </section>
    <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>