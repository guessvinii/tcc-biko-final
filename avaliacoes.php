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
    <title>BIKO - Avaliações</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="<?php echo $static ?>style/avaliacoes.scss" rel="stylesheet" />
    <link rel="stylesheet" href="style/sweetalert2.css" />
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

    <h2 class="avaliacoes">Avaliações</h2>
    <div class="wrapper" id="wrapper-1">
        <img class="perfil" src="<?php echo $static ?>img/user.png">
        <span class="text-7">Adoro os vídeos dela e fico feliz de ter sido maquiada por alguém tão chique. Serviço impecável.</span>
        <span class="text-8">5 estrelas.</span>
    </div>

    <div class="wrapper" id="wrapper-2">
        <img class="perfil" src="<?php echo $static ?>img/user.png">
        <span class="text-7">Adoro os vídeos dela e fico feliz de ter sido maquiada por alguém tão chique. Serviço impecável.</span>
        <span class="text-8">5 estrelas.</span>
    </div>

    <div class="wrapper" id="wrapper-3">
        <img class="perfil" src="<?php echo $static ?>img/user.png">
        <span class="text-7">Adoro os vídeos dela e fico feliz de ter sido maquiada por alguém tão chique. Serviço impecável.</span>
        <span class="text-8">5 estrelas.</span>
    </div>

    <div class="wrapper" id="wrapper-4">
        <img class="perfil" src="<?php echo $static ?>img/user.png">
        <span class="text-7">Adoro os vídeos dela e fico feliz de ter sido maquiada por alguém tão chique. Serviço impecável.</span>
        <span class="text-8">5 estrelas.</span>
    </div>
    

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
            <img class="acesso-Chat" src="<?php echo $static ?>img/chat-img.svg">
            </a>
            <img class="acesso-meuPerfil" src="<?php echo $static ?>img/user-profile.svg">
        </div>
    </div>
  </body>
</html>