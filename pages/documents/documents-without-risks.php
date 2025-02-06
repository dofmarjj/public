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


    <section>
        <div>
            <div>
                <div>
                    <h1> {!! $blocks->get('without_risks_title') !!}</h1>

                    <p>
                        {!! $blocks->get('without_risks_subject_to_all_terms') !!}
                    </p>

                    <ul>
                        <li>{!! $blocks->get('without_risks_offers_relate') !!}</li>
                        <li>{!! $blocks->get('without_risks_free_trade') !!}</li>
                        <li>{!! $blocks->get('without_risks_client_will_entitled') !!}</li>
                        <li>{!! $blocks->get('without_risks_clients_responsibility_to_contact') !!}</li>
                        <li>{!! $blocks->get('without_risks_promotion_shall') !!}</li>
                    </ul>


                    <p>
                        {!! $blocks->get('without_risks_reserve_the_right') !!}
                    </p>
                    <p>
                        {!! $blocks->get('without_risks_reserve_the_right_to_alter') !!}
                    </p>
                    <p>
                        {!! $blocks->get('without_risks_recommend_that') !!}
                    </p>
                    <p>
                        {!! $blocks->get('without_risks_dispute_or_situation') !!}
                    </p>
                    <p>
                        {!! $blocks->get('without_risks_promotion_terms') !!}
                    </p>
                    <p>
                        {!! $blocks->get('without_risks_concerning_all_bonuses') !!}
                    </p>


                </div>
            </div>
        </div>
    </section>
    <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>