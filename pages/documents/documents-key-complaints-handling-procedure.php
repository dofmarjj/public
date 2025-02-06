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
                    <h1>{!! $blocks->get('handling_procedure_title') !!}</h1>

                </div>
            </div>
            <div>

                <h3>{!! $blocks->get('handling_procedure_ыubmitting_your_complaint') !!}</h3>
                <p>{!! $blocks->get('handling_procedure_may_submit_your_complaint') !!}</p>
                <p>{!! $blocks->get('handling_procedure_may_use_the_сomplaints') !!} <a href="">documents@sample.com</a></p>

                <h3>{!! $blocks->get('handling_procedure_рandling_of_your_сomplaint') !!}</h3>
                <p>{!! $blocks->get('handling_procedure_once_we_receive_your') !!}</p>
                <p>{!! $blocks->get('handling_procedure_shall_try_to_reply') !!}</p>
                <p>{!! $blocks->get('handling_procedure_we_reach_an_outcome') !!}</p>
                <p>{!! $blocks->get('handling_procedure_understood_that_your') !!}</p>
                <p>{!! $blocks->get('handling_procedure_case_where_you_are') !!}</p>

                <p>{!! $blocks->get('handling_procedure_contact_info') !!}</p>
                <div>
                    <p>{!! $blocks->get('handling_procedure_adress') !!}</p>
                    <ul style="list-style: none">
                        <li>SW1P 4RS</li>
                        <li>21-24 Millbank, London</li>
                        <li>Great Britain</li>
                    </ul>
                </div>


            </div>
        </div>

    </section>
    <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>