<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css" />
        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/colors-css/2.2.0/colors.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="charset" content="utf8">
        <style>
            body {
                padding: 1em;
            }
            h1.ui.header {
                font-size: 5em;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: .8em;
                padding-top: 0;
                margin-top: 0;
            }
            dt {
                margin: 1em;
            }
            blockquote {
                color: darkgray;
                font-style: italic;
                font-size: larger;
            }
            .ui.header {
                width: 100%;
            }
            .ui.header.top {
                text-align: center;
            }


            h3.ui.header {
                text-transform: uppercase;
                font-size: 2em;
                letter-spacing: 0.1em;
            }
            h1.ui.glou span::before, h3.ui a::before {
                content: url('glou.png');
            }
            h1.ui.glou {
                margin-bottom: 0;
            }

            h3.ui a:hover, h3.ui a:active {
                filter: invert(1);
            }

        </style>
    </head>
    <body>
        <div class="ui text container header top">
            <h1 class="first ui glou">
                <span> </span>
            </h1>

            <h1 class="first ui dividing header">IVRESSE</h1>
            <blockquote>
            <?php echo $number = rand(0, 9) ?>
                <span style="color:#<?php echo $number ?><?php echo $number ?>;">Toucher du doigt la substantifique moëlle</span> <span style="color:#<?php echo $number ?><?php echo $number ?><?php echo $number ?>;">assister au triomphe du signal sur le bruit</span> <span style="color:#<?php echo $number ?><?php echo $number ?><?php echo $number ?>;">manifester un désintérêt total pour les flacons</span> <span style="color:#<?php echo $number ?><?php echo $number ?><?php echo $number ?>;">transpercer des rêves à grands coups d'étoiles</span>
            </blockquote>
        </div>

        <br>
        <br>
        <br>
        <br>

<?php foreach (['daheardit-records', 'ouiedire', 'mazemod', 'musiqueapproximative', 'musiques-incongrues', 'rebeccarium'] as $site): ?>
        <div class="ui text container">
          <h3 class="first ui header dividing"><a name="<?php echo $site ?>" href="#<?php echo $site ?>"> </a> <?php echo $site ?></h3>
          <dl class="ui text">
                <dt><h4>Administration</h4></dt>
                <dd><strong>Connexion</strong> : <a href="https://ivresse.constructions-incongrues.net/admin/#/login?project=<?php echo $site ?>">https://ivresse.constructions-incongrues.net/admin/#/login?project=<?php echo $site ?></a></dd>

                <dt><h4>API REST</h4></dt>
                <dd><strong>Point d'accès</strong> : <a href="https://ivresse.constructions-incongrues.net/<?php echo $site ?>/">https://ivresse.constructions-incongrues.net/<?php echo $site ?>/</a></dd>
                <dd><strong>Documentation</strong> : <a href="https://docs.directus.io/api/reference.html">https://docs.directus.io/api/reference.html</a></dd>

                <dt><h4>API GraphQL</h4></dt>
                <dd><strong>Documentation</strong> : <a href="https://docs.directus.io/api/graphql.html">https://docs.directus.io/api/graphql.html</a></dd>
                <dd><strong>Point d'accès</strong> : <a href="https://ivresse.constructions-incongrues.net/<?php echo $site ?>/gql">https://ivresse.constructions-incongrues.net/<?php echo $site ?>/gql</a></dd>
                <dd><strong>Explorateur</strong> : <a href="https://ivresse.constructions-incongrues.net/docs/graphiql.php?endpoint=https://ivresse.constructions-incongrues.net/<?php echo $site ?>/gql&token=">https://ivresse.constructions-incongrues.net/docs/graphiql.php</a></dd>
          </dl>
        </div>

        <div class="ui text container">
            <br>
            <br>
        </div>
<?php endforeach ?>

    </body>
</html>
