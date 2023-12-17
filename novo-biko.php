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
    <script type="text/javascript" src="<?php echo $static ?>js/new-biko.js"></script>

</head>
<body id="override">
    <div class="text-newBIKO">
        <h1 class="titulo-novoBIKO">Novo BIKO</h1>
        <p class="descricao-novoBIKO" id="txtDescricao">Primeiro, precisamos saber a categoria do BIKO. Escolhe entre as disponíveis.</p>
    </div>
    <div class="solicitar-biko">
        <form action="index-solicitado.php" method="POST">
            <!-- Aba Categoria -->
            <div class="category-bar">
                <h3 class="categoria-static">categoria</h3>
                <select class="categoria" name="categoria">
                    <option selected value="limp-ambientes">limpeza de ambientes</option>
                    <option value="reparos-domesticos">reparos domésticos</option>
                    <option value="montagem-moveis">montagem e instalação de móveis</option>
                    <option value="manicure-ou-pedicure">manicure ou pedicure</option>
                    <option value="cuidados-cabelo">cabelo e correlatos</option>
                    <option value="cuidados-jardinagem">jardinagem</option>
                    <option value="servicos-rapidos">serviços rápidos</option>
                </select>
                <img class="seta" src="<?php echo $static ?>img/seta.svg">
            </div>
            <!-- Aba Descrição -->
            <div class="description-bar">
                <h3 class="descricao-static">descrição</h3>
                <textarea id="descricao" name="descricao_biko" placeholder="escreva uma descrição de até 500 caracteres..." maxlength="500"; style="resize: none"></textarea>
                <div class="contador-div">
                    <span id="contador">0</span><label for="descricao">/500 caracteres</label>
                </div>
            </div>
            <!-- Aba Imagem -->
            <div class="image-bar">
                <h3 class="imagem-static">imagem</h3>
                <input type="file" accept="image/*" class="input-foto" id="drop-area">
            </div>
            <!-- Aba Endereço -->
            <div class="address-bar is-inactive">
                <h3 class="cep-static">cep</h3>
                <div class="data-bar">
                    <img class="help" src="img/question-mark.svg">
                    <input type="text" class="txtCEP" placeholder="digite seu cep..." name="cep"> 
                </div>
                <h3 class="logradouro-static">logradouro (rua, avenida, estrada)</h3>
                <div class="data-bar">
                    <input type="text" class="txtLogradouro" placeholder="rua do exemplo, 201" name="logradouro"> 
                </div>
                <!-- Título Cidade Bairro -->
                <div class="titulo-twoTitles">
                    <h3 class="bairro-static">bairro</h3>
                    <h3 class="cidade-static" id="second">cidade</h3>
                </div>
                <!-- Cidade Bairro -->
                <div class="address-twoBars">
                    <div class="data-bar2">
                        <input type="text" class="txtTwoBars" placeholder="bairro" name="bairro"> 
                    </div>
                    <div class="data-bar2" id="second-input">
                        <input type="text" class="txtTwoBars" placeholder="cidade" name="cidade"> 
                    </div>
                </div>
                <!-- Título Numero UF -->
                <div class="titulo-twoTitles">
                    <h3 class="numero-static">número</h3>
                    <h3 class="cidade-static" id="second">uf (estado)</h3>
                </div>
                <div class="address-twoBars">
                    <div class="data-bar2">
                        <input type="text" class="txtTwoBars" placeholder="número" name="numero"> 
                    </div>
                    <div class="data-bar2" id="second-input">
                        <input type="text" class="txtTwoBars" placeholder="exemplo: sp" name="uf"> 
                    </div>
                </div>
                <!-- Complemento -->
                <h3 class="complemento-static">complemento</h3>
                <div class="data-bar">
                    <input type="text" class="txtComplemento" placeholder="exemplo: casa do muro azul" name="complemento"> 
                </div>
            </div>
            <button class="next is-active" type="button">próximo</button>
            <button class="submit" type="submit">solicitar</button>
            </div>
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