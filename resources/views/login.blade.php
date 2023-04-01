<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../Style/home.css">
    <link rel="stylesheet" href="{{ asset('style/login.css') }}">
    <title>GetJob-Login</title>
</head>

<body>
    <div class="lg-container v-box flex-align-center flex-justify-center">
        <h1><span class="lg-color">Get</span>Job</h1>
        <p>Se connecter et touver votre future travaille avec GetJob</p>
        <form action="" class="v-box lg-form">
            <div class="lg-ipt v-box ">
                <small class="lg-ipt-lb lb-us">Utilisateur</small>
                <input type="text" name="username" class="lg-ipt-fld fld-us">
            </div>
            <div class="lg-ipt v-box">
                <small class="lg-ipt-lb lb-ps">Mot de passe</small>
                <input type="password" name="username" class="lg-ipt-fld fld-ps">
                <span class="material-icons-sharp" id="sh-on">visibility</span>
                <span class="material-icons-sharp" id="sh-off">visibility_off</span>
            </div>
            <button type="submit" id="lg-ipt-sub">Se connecter</button>
            <small class="lg-txt-fm">vous avez oublier votre mot de passe click <a href=""
                    class="lg-fm">ici</a></small>
        </form>
        <small class="lg-txt-cr">vous n'avez pas une compte?</small>
        <p>Cree un Compte Maintenant</p>
        <a href="" class="lg-cr v-box flex-align-center flex-justify-center">
            <p>Cree compte</p>
        </a>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
