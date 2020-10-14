<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css" />
        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/colors-css/2.2.0/colors.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="charset" content="utf8">
        <title>I V R E S S E</title>
        <link rel="icon" type="image/png" href="docs/glou.png" />
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
                font-size: 1.5em;
                letter-spacing: 0.1em;
            }
            h1.ui.glou span::before {
                content: url('docs/glou.png');
            }
            h1.ui.glou {
                margin-bottom: 0;
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
                <span style="color:#<?php $number = rand(0, 9); echo sprintf('%d%d%d', $number, $number, $number) ?>;">Planter son doigt dans la substantifique moëlle</span> <span style="color:#<?php $number = rand(0, 9);  echo sprintf('%d%d%d', $number, $number, $number) ?>;">assister au triomphe du signal sur le bruit</span> <span style="color:#<?php $number = rand(0, 9); echo sprintf('%d%d%d', $number, $number, $number) ?>;">manifester un désintérêt profond pour les flacons</span> <span style="color:#<?php $number = rand(0, 9); echo sprintf('%d%d%d', $number, $number, $number) ?>;">transpercer des rêves à grands coups d'étoiles</span>
            </blockquote>
        </div>

        <br>
        <br>
        <br>
        <br>

<?php foreach (['daheardit-records', 'empilements', 'ouiedire', 'mazemod', 'musiqueapproximative', 'musiques-incongrues', 'rebeccarium'] as $site): ?>
        <div class="ui text container">
          <h3 class="first ui header dividing"><a name="<?php echo $site ?>" href="#<?php echo $site ?>"><?php echo $site ?></a></h3>
          <dl class="ui text">
                <dt><h4>Administration</h4></dt>
                <dd><strong>Connexion</strong> : <a href="https://data.constructions-incongrues.net/admin/#/login?project=<?php echo $site ?>">https://data.constructions-incongrues.net/admin/#/login?project=<?php echo $site ?></a></dd>

                <dt><h4>API REST</h4></dt>
                <dd><strong>Point d'accès</strong> : <a href="https://data.constructions-incongrues.net/<?php echo $site ?>/">https://data.constructions-incongrues.net/<?php echo $site ?>/</a></dd>
                <dd><strong>Documentation</strong> : <a href="https://docs.directus.io/api/reference.html">https://docs.directus.io/api/reference.html</a></dd>

                <dt><h4>API GraphQL</h4></dt>
                <dd><strong>Documentation</strong> : <a href="https://docs.directus.io/api/graphql.html">https://docs.directus.io/api/graphql.html</a></dd>
                <dd><strong>Point d'accès</strong> : <a href="https://data.constructions-incongrues.net/<?php echo $site ?>/gql">https://data.constructions-incongrues.net/<?php echo $site ?>/gql</a></dd>
                <dd><strong>Explorateur</strong> : <a href="https://data.constructions-incongrues.net/docs/graphiql.php?endpoint=https://data.constructions-incongrues.net/<?php echo $site ?>/gql&token=">https://data.constructions-incongrues.net/docs/graphiql.php</a></dd>
          </dl>
        </div>

        <div class="ui text container">
            <br>
            <br>
        </div>
<?php endforeach ?>

    </body>
</html>
