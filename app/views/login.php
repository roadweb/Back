<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Se Connecter</h1>
    </div>
    <?php if(isset($flash['error'])) : ?>
        <div class="alert alert-danger" role="alert"><?php echo $flash['error']; ?></div>
    <?php endif; ?>
    <form action="#" method="post">
        <div class="form-group">
            <label for="">Nom d'utilisateur</label>
            <input class="form-control" type="text" name="username"/>
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input class="form-control" type="password" name="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>
    </form>
</div>
</body>
</html>