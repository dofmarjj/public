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
                    <h1>
                        {!! $blocks->get('information_documents_title') !!}
                    </h1>
                    <p>
                        {!! $blocks->get('information_documents_discription') !!}
                    </p>
                    <p>
                        {!! $blocks->get('information_documents_important_documents') !!}
                    </p>
                </div>
            </div>

        </div>
    </section>
    <?php include('../resources/includes/blocks/call-us-block.php') ?>
</body>

</html>