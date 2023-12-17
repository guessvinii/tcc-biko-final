<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Identificação</title>
    <link href="style/identificacao.scss" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body id="login-page">
    <div class= "login"> 
        <div class="container">
            <div class = "row">
                <div class = "col-lg-4 offset-lg-4">
                    <div class= "card"> 
                        <div class="card-top">
                             <img class="logo-biko" src="img/icon-2.png">
                             <h3>BIKO - Identificação</h3>
                </div>
        <div class="card-body"> 
        <form action = "index.php" method="POST">
            <div class="mb-3">
                <label class="aviso-identidade">Para proporcionar mais segurança aos nossos usuários, 
                    exigimos que um documento oficial seja escaneado e enviado para análise. Você terá acesso à plataforma logo em seguida, 
                    mas pode ter sua conta bloqueada nos próximos minutos caso alguma irregularidade seja constatada.</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Enviar</button>
                </div>
                </div>
                <div class="mb-3" id="botao">
                    <button type = "submit" class= "btn btn-primary">Concluir</button>
                </div>
        </form>
        </div>
        </div>      
        </div>
        </div> 
    </div>
</div>
</body>
</html>