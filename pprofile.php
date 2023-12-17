<?php 
    set_include_path('D:\XAMPP\htdocs\BIKO\php');
    include ('conexao.php');
    $url_separate = explode("/", $_SERVER["REQUEST_URI"]);
    $username = $url_separate[3];
    if ($username == null){
        header('Location: http://192.168.15.20:8221/BIKO/not-found.php');
        die();
    }
    $static = 'http://192.168.15.20:8221/BIKO/';
    include ('perfil.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Perfil</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="<?php echo $static ?>style/pprofile.scss" rel="stylesheet" />

</head>
<body>
    <div class="topo-perfil">
        <h2 class="nome-prestador"><?php echo $dados['Nome'] ?></h2>
        <img class="verified" src="<?php echo $static ?>img/verified.svg">
    </div>

    <div class="foto-perfil">
        <img class="foto-prestador" src="<?php echo $dados['Foto']?>">
    </div>

    <div class="inferior-perfil">
        <div class="nome-usuario">
            <p class="username">@<?php echo $username?></p>
        </div>
        <div class="avaliacao">
            <div class="estrelas">
                <img class="estrela" src="<?php echo $static ?>img/estrela-cheia.svg" id="star-1">
                <img class="estrela" src="<?php echo $static ?>img/estrela-cheia.svg" id="star-2">
                <img class="estrela" src="<?php echo $static ?>img/estrela-cheia.svg" id="star-3">
                <img class="estrela" src="<?php echo $static ?>img/estrela-cheia.svg" id="star-4">
                <img class="estrela" src="<?php echo $static ?>img/estrela-cheia.svg" id="star-5">
                <img class="estrela" src="<?php echo $static ?>img/sad-stars.svg" id="no-star">
            </div>
            <p class="avaliacao-prestador"><?php if ($dados['MediaAvaliacao'] != 0) { echo $dados['MediaAvaliacao']; } else { echo 'sem avaliação ainda!';}?></p>
        </div>

        <div class="contador-bikos">
            <p class="static-trabalhos">bikos realizados</p>
            <p class="contador"><?php echo $dados['TotalBIKOs'] ?></p>
        </div>
    </div>

    <div class="video-apresentacao">
        <h3 class="titulo-video">vídeo de apresentação</h3>
        <img class="thumbnail-video" src="https://placehold.co/200x200">
    </div>

    <div class="menu-prestador">
        <div class="enviar-msg">
            <img class="caixa-msg" src="<?php echo $static ?>/img/enviar-msg.svg">
            <p class="msg-enviar">enviar mensagem</p>
        </div>

        <div class="solicitar-servico">
            <img class="priv-solicitar" src="<?php echo $static ?>/img/solicitar-priv.svg">
            <p class="msg-solicitar">solicitar um biko</p>
        </div>

        <div class="ver-avaliacoes">
            <img class="avaliacoes" src="<?php echo $static ?>/img/star-half-filled.svg">
            <p class="msg-solicitar">avaliações</p>
        </div>
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