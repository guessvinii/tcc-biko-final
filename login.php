<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style/login.scss" rel="stylesheet" />
</head>
<body id="login-page">
    <div class= "login"> 
        <div class="container">
            <div class = "row">
                <div class = "col-lg-4 offset-lg-4">
                    <div class= "card"> 
                        <div class="card-top">
                             <img class="logo-biko" src="img/icon-2.png">
                             <h3>BIKO - Login</h3>
                </div>
    <div class="card-body"> 
    <form action = "index.php" method="POST">
        <div class="mb-3">
            <label>Usuário </label>
            <input type= "text" name= "usuario" class= "form-control">
        </div>
        <div class="mb-3">
            <label>Senha </label>
            <input type= "password" name= "senha" class= "form-control">
        </div>
        <div class="mb-3">
            <button type = "submit" class= "btn btn-primary">Entrar</button>
        </div>
    </form>

<form action="cadastro.php" method="POST">
    <div class="mb-3" id="botao">
        <button type = "submit"  class= "btn btn-primary" id="cadastro">Cadastre-se</button>
    </div>
</form>

</div>
</div>      
</div>
</div> 
</div> 
</body>
</html>