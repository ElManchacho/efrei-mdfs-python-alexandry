<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir un livre</title>

    <!-- Load style from uikit -->
    <!-- https://getuikit.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/css/uikit.min.css" />

</head>
<body>

    <form method="POSt" action="{{ url_for('update_book')}}">
        <fieldset class="uk-fieldset">

        <div class="uk-margin">
                <input class="uk-input" style="visibility: hidden" type="text" value="{{data['id']}}" name='id'>
            </div>

            <legend class="uk-legend">📖 Le livre en question !</legend>
            <div class="uk-margin">
                <input class="uk-input" type="text" value="{{data['nom']}}" name='name'>
            </div>

            <div class="uk-margin">
                <input class="uk-input" type="text" value="{{data['auteur']}}" name='author'>
            </div>

        </fieldset>

        <p uk-margin>
        <button class="uk-button uk-button-default"><a href="delete_book?id={{data['id']}}"> 🗑 Supprimer le livre </a></button>

        <input class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom" type="submit" value="🎉 Valider le formulaire">
    </form>

    

    <!-- INPUT TO BACK TO HOME -->
    <p uk-margin>
        <button class="uk-button uk-button-default"><a href="/"> 🏠 Revenir à l'accueil </a></button>
    </p>


    <!-- Load script from uikit -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.4/dist/js/uikit-icons.min.js"></script>

</body>
</html>