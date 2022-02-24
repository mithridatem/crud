<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./script/script.js" defer></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="./script/modal.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>addUser</title>
</head>
<body>
    <h2>Ajouter un utilisateur</h2>
    <form action="#" method="post">
        <p>Saisir votre nom :</p>
        <p><input type="text" name="name_util"></p>
        <p>Saisir votre prénom :</p>
        <p><input type="text" name="first_name_util"></p>
        <p>Saisir votre mail :</p>
        <p><input type="text" name="mail_util"></p>
        <p>Saisir votre password :</p>
        <p><input type="text" name="password_util"></p>
        <input type="submit" value="Ajouter">
    </form>
    <p id="zone"></p>
    <p id="error"></p>
</body>
</html>