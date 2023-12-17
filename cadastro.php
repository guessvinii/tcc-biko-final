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
        <form action = "cadastro2.php" method="POST">

                <div class="mb-3">
                <label>Nome Completo </label>
                <input type= "text"
                    name= "usuario"
                    class= "form-control">

                <div class="input-group">
                    <span class="input-group-text">CPF</span>
                    <input type="text" aria-label="CPF_1" class="form-control">
                    <input type="text" aria-label="CPF_2" class="form-control">
                    <input type="text" aria-label="CPF_3" class="form-control">
                    <span class="input-group-text">-</span>
                    <input type="text" aria-label="CPF_4" class="form-control">
                </div>

                <label class="RG">RG/RNE</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="RG" aria-label="RG">
                    <span class="input-group-text">-</span>
                    <input type="text" class="form-control" placeholder="Dígito" aria-label="Dig">
                    <span class="input-group-text">/</span>
                    <input type="text" class="form-control" placeholder="Estado/RNE" aria-label="EstadoRNE">
                </div>

                <label class="DataNasc">Data de Nascimento</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dia</span>
                    <input type="text" class="form-control" placeholder="01" aria-label="Day">
                    <span class="input-group-text">Mês</span>
                    <input type="text" class="form-control" placeholder="05" aria-label="Month">
                    <span class="input-group-text">Ano</span>
                    <input type="text" class="form-control" placeholder="2000" aria-label="Year">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Telefone (com DDD)</span>
                    <input type="text" aria-label="DDD" class="form-control">
                    <input type="text" aria-label="Tel" class="form-control">
                </div>
                </div>
                </div>
                    <div class="mb-3" id="botao">
                        <button type = "submit" 
                            class= "btn
                            btn-primary">Próximo</button>

                    </div>
</form>
<form action = "testando.php" method="POST" id="retornar-login">
<div class="mb-3" id="botao">
        <button type = "submit"  class= "btn btn-primary" id="return-login">Fazer login</button>
    </div>
</form>

</div>


</form>
            </div>      
        </div>
    </div> 
</div> 
</body>
</html>