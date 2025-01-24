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

    <section class="_indent _container">
        <div>
            <div>
                <div>
                    <h1>{!! $blocks->get('risk_disclosure_title') !!}</h1>

                </div>
            </div>
            <div>

                <h3>{!! $blocks->get('risk_disclosure_use_of_leverage') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_margin_trading') !!}</p>


                <h3>{!! $blocks->get('risk_disclosure_instability_of_financial_instruments') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_quotes_of_most_instruments') !!}</p>




                <h3>{!! $blocks->get('risk_disclosure_technical_risks') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_not_responsible') !!}</p>
                <p>{!! $blocks->get('risk_disclosure_working_with_the_client') !!}</p>

                <ul>
                    <li>{!! $blocks->get('risk_disclosure_failures_in_your_equipment') !!}</li>
                    <li>{!! $blocks->get('risk_disclosure_errors_in_your_client') !!}</li>
                    <li>{!! $blocks->get('risk_disclosure_failure_to_update_your_version') !!}</li>
                    <li>{!! $blocks->get('risk_disclosure_your_failure_to_follow') !!}</li>
                </ul>

                <p>{!! $blocks->get('risk_disclosure_not_responsible_for_errors') !!}</p>



                <h3>{!! $blocks->get('risk_disclosure_market_risks') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_you_agree_that') !!}</p>




                <h3>{!! $blocks->get('risk_disclosure_risks_associated') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_also_assume_responsibility') !!}</p>



                <h3>{!! $blocks->get('risk_disclosure_risks_associated_trading_platform') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_your_instructions') !!}</p>
                <p>{!! $blocks->get('risk_disclosure_must_understand_that') !!}</p>
                <p>{!! $blocks->get('risk_disclosure_you_acknowledge_that') !!}</p>




                <h3>{!! $blocks->get('risk_disclosure_communication_risks') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_you_must_be_aware') !!}</p>
                <p>{!! $blocks->get('risk_disclosure_not_responsible_for_financial') !!}</p>
                <p>{!! $blocks->get('risk_disclosure_responsible_for_the_security') !!}</p>




                <h3>{!! $blocks->get('risk_disclosure_force_majeure') !!}</h3>

                <p>{!! $blocks->get('risk_disclosure_not_responsible_for_financial_losses') !!}</p>




            </div>
        </div>

    </section>

    <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>