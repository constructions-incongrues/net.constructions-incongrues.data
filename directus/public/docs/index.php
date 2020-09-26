<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css" />
        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/colors-css/2.2.0/colors.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="charset" content="utf8">
        <style>
            body {
                padding: 3em;
            }
            h1.ui.header {
                font-size: 5em;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: .8em;
            }
            dt {
                margin: 1em;
            }

            .ui.header {
                text-align: center;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="ui text container header">
            <h1 class="first ui dividing header">IVRESSE</h1>
            <q>
                Substantifique moëlle, triomphe du Signal sur le Bruit, désintérêt profond pour les Flacons.
            </q>
        </div>

        <br>
        <br>

<?php foreach (['daheardit-records', 'mazemod', 'musiqueapproximative', 'musiques-incongrues'] as $site): ?>
        <div class="ui text container">
          <h3 class="first" name="<?php echo $site ?>"><?php echo $site ?></h3>
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

        <br>
        <br>
<?php endforeach ?>
        
    </body>
</html>

