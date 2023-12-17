<?php 
    set_include_path('D:\XAMPP\htdocs\BIKO\php');
    include ('conexao.php');
    $static = 'http://192.168.15.20:8221/BIKO/';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Novo BIKO</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="<?php echo $static ?>style/novo-biko.scss" rel="stylesheet" />
    <script type="text/javascript" src="js/new-biko.js"></script>

</head>
<body>
    <div class="text-newBIKO">
        <h1 class="titulo-novoBIKO">Novo BIKO</h1>
        <p class="descricao-novoBIKO">Quer incluir uma foto do local? Anexe-a abaixo. Não revele informações do local.</p>
    </div>
    <div class="solicitar-biko">
        <form action="php/solicitar-biko.php" method="POST">
            <div class="address-bar">
                <h3 class="cep-static">cep</h3>
                <div class="data-bar">
                    <img class="help" src="img/question-mark.svg">
                    <input type="text" class="txtCEP" placeholder="digite seu cep..."> 
                </div>
                <h3 class="logradouro-static">logradouro (rua, avenida, estrada)</h3>
                <div class="data-bar">
                    <input type="text" class="txtLogradouro" placeholder="rua do exemplo, 201"> 
                </div>
                <!-- Título Cidade Bairro -->
                <div class="titulo-twoTitles">
                    <h3 class="bairro-static">bairro</h3>
                    <h3 class="cidade-static" id="second">cidade</h3>
                </div>
                <!-- Cidade Bairro -->
                <div class="address-twoBars">
                    <div class="data-bar2">
                        <input type="text" class="txtTwoBars" placeholder="bairro"> 
                    </div>
                    <div class="data-bar2" id="second-input">
                        <input type="text" class="txtTwoBars" placeholder="cidade"> 
                    </div>
                </div>
                <!-- Título Numero UF -->
                <div class="titulo-twoTitles">
                    <h3 class="numero-static">número</h3>
                    <h3 class="cidade-static" id="second">uf (estado)</h3>
                </div>
                <div class="address-twoBars">
                    <div class="data-bar2">
                        <input type="text" class="txtTwoBars" placeholder="bairro"> 
                    </div>
                    <div class="data-bar2" id="second-input">
                        <input type="text" class="txtTwoBars" placeholder="cidade"> 
                    </div>
                </div>
                <!-- Complemento -->
                <h3 class="complemento-static">complemento</h3>
                <div class="data-bar">
                    <input type="text" class="txtComplemento" placeholder="exemplo: casa do muro azul"> 
                </div>
            </div>
            </div>
            <button class="submit" type="submit">próximo</button>
        </form>
    </div>


    <!-- Menu Inferior -->
    <div class="menu-inferior">
        <div class="menu-inferior-lower">
            <a href="<?php echo $static ?>index.php"><img class="home" src="<?php echo $static ?>img/home-img.svg"></a>
            <a href="<?php echo $static ?>search.php"><img class="pesquisa-barra" src="<?php echo $static ?>img/search-img.svg"></a>
            <div class="menu-inferior-outNew">
                <div class="menu-inferior-new">
                    <img class="novoBIKO" src="<?php echo $static ?>img/new-img.svg">
                </div>
            </div>
            <a href="http://192.168.15.20:8221/BIKO/chat-direto.php/WanessaWolf">
            <img class="acesso-Chat" src="img/chat-img.svg">
            </a>
            <img class="acesso-meuPerfil" src="<?php echo $static ?>img/user-profile.svg">
        </div>
    </div>
</body>
</html>