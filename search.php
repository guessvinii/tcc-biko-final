<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Pesquisar...</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="style/search.scss" rel="stylesheet" />
    <?php
        set_include_path('D:\XAMPP\htdocs\BIKO\php');
        include ('conexao.php');
    ?>
</head>
<body>
    <!-- Barra de Pesquisa -->

    <div class="barra-pesquisa">
        <form action="">
            <div class="search-bar">
                <button class="lupa" type="submit"></button>
                <input name="busca" type="text" class="txtPesquisa" placeholder="pesquisa aí..."> 
            </div>
        </form>
    </div>

    <h1 class="title-result">resultados encontrados</h1>
    <div class="result-section">
    <?php
        $result_count = 0;
        $pesquisa = $mysqli->real_escape_string(@$_GET['busca']);
        $sql_code = "SELECT * 
        FROM tbPrestador
        WHERE Nome LIKE '%$pesquisa%'";

        $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar! ".$mysqli->error);
        if ($sql_query->num_rows == 0){
            ?>
            <div class="no-results">
                <img class="not-found" src="img/not-found.svg">
                <p>Infelizmente, não foi possível encontrar resultados relacionados à '<?php echo $_GET['busca'];?>'</p>
            </div>
    <?php
        } else {
            while($dados = $sql_query->fetch_assoc()){
                if($result_count != 8){
                $result_count = $result_count + 1;
                ?>
            <a href="pprofile.php/<?php echo $dados['Username']?>"> 
            <div class="search-result" id="result">
                <img class="profile-picture" src="<?php echo $dados['Foto'];?>">
                <h3><?php echo $dados['Nome'];?></h3>
                <div class="like-button">
                    <div class="favorito-<?php echo $result_count?>">
                        <input id="favorito-<?php echo $result_count?>" type="checkbox">
                        <label for="favorito-<?php echo $result_count?>"></label>
                    </div>
                </div>
            </div>
            </a>
            <style>
                .favorito-<?php echo $result_count?> > input {
                    display: none;
                }
                .favorito-<?php echo $result_count?> {
                    box-shadow: none;
                    width: 15px;
                    height: 15px;
                    padding: 0%;
                    margin: 0%;
                }
                .favorito-<?php echo $result_count?> input + label::before {
                    content: '';
                    width: 15px;
                    height: 15px;
                    border-radius: 10%;
                    background-image: url(/BIKO/img/fav-default.svg);
                    background-size: 15px;
                    display: inline-block;
                    vertical-align: middle;
                    margin-right: 8px;
                    margin-bottom: 3px;
                }
                .favorito-<?php echo $result_count?> input:checked + label:before {
                    background-image: url(/BIKO/img/fav-filled.svg);
                    background-size: 15px;
                }
            </style>
    <?php
                }
        }
    }
    
    ?>
    </div>

    <h1 class="title-result">você também pode gostar de...</h1>

    <!-- Resultados Similares -->
    <div class="similar-section">
        <?php include ('perfis-recomendados.php'); ?>
    </div>

    <!-- Menu Inferior -->
    <div class="menu-inferior">
        <div class="menu-inferior-lower">
            <a href="index.php"><img class="home" src="img/home-img.svg"></a>
            <a href="search.php"><img class="pesquisa-barra" src="img/search-img.svg"></a>
            <div class="menu-inferior-outNew">
                <div class="menu-inferior-new">
                    <img class="novoBIKO" src="img/new-img.svg">
                </div>
            </div>
            <a href="http://192.168.15.20:8221/BIKO/chat-direto.php/WanessaWolf">
            <img class="acesso-Chat" src="img/chat-img.svg">
            </a>
            <img class="acesso-meuPerfil" src="img/user-profile.svg">
        </div>
    </div>
</body>
</html>