<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style/cadastro.scss" rel="stylesheet" />
</head>
<body id="cadastro-page">
    <div class= "login"> 
        <div class="container">
            <div class = "row">
                <div class = "col-lg-4 offset-lg-4">
                    <div class= "card"> 
                        <div class="card-top">
                             <img class="logo-biko" src="img/icon-2.png">
                             <h3>BIKO - Cadastre-se!</h3>
                </div>
        <div class="card-body"> 
        <form action = "identificacao.php" method="POST">
        
        
            <div class="mb-3">
                <label class="CEP">CEP</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="05743" aria-label="CEP">
                    <span class="input-group-text">-</span>
                    <input type="text" class="form-control" placeholder="000" aria-label="CEP-Dig">
                </div>

                <label>Logradouro </label>
                <div class="mb-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Rua do Exemplo" aria-label="Logradouro">
                    <span class="input-group-text">Número</span>
                    <input type="text" class="form-control" placeholder="201" aria-label="NumEnd">
                </div>

                <label class="CidadeBairro">Cidade e Estado</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Cidade</span>
                    <input type="text" class="form-control" placeholder="São Paulo" aria-label="Cidade">
                    <span class="input-group-text">UF</span>
                    <input type="text" class="form-control" placeholder="SP" aria-label="UF">
                </div>
                </div>
                
                <label>Bairro</label>
                <input type= "text"
                    name= "usuario"
                    class= "form-control" placeholder="Jardim do Santo Exemplo">
                    <div class="mb-3">

                    <label id="senha">Defina uma senha! </label>
                    <input type= "password"
                        name= "senha"
                            class= "form-control">

                    <label id="senha">Confirme sua senha! </label>
                    <input type= "password"
                        name= "senha"
                            class= "form-control">
                </div>
                    <div class="mb-3" id="botao">
                        <button type = "submit" 
                            class= "btn
                            btn-primary">Próximo</button>

</div>
</form>
</div>
    </div>      
    </div>
    </div> 
</div> 
</body>
</html>