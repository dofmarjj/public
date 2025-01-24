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
            <div class="">
                <div>
                    <div>
                        <h1 class=" ">
                            {!! $blocks->get('money_laundering_title') !!}
                        </h1>

                        <h3>{!! $blocks->get('money_laundering_definition_of_money') !!}</h3>

                        <p>{!! $blocks->get('money_laundering_modern_society') !!}</p>

                        <h3>{!! $blocks->get('money_laundering_laws_against') !!}</h3>

                        <p>{!! $blocks->get('money_laundering_prevent_money_laundering') !!}</p>

                        <h3>{!! $blocks->get('money_laundering_client_identity') !!}</h3>

                        <p>{!! $blocks->get('money_laundering_part_of_complying') !!}</p>

                        <h3>{!! $blocks->get('money_laundering_compliance_privacy') !!}</h3>

                        <p>{!! $blocks->get('money_laundering_personal_data') !!}</p>

                    </div>


                    <!---->
                </div>
            </div>
        </div>
    </section>
    <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>