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
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BIKO - Conversa com <?php echo $username ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="<?php echo $static ?>style/chat-direto.scss" />
  </head>
  <body>
    <div class="main-container">
      <span class="text">com <?php echo $username ?></span>
      <div class="wrapper">
        <div class="pic">
          <span class="text-2"
            >E aí, gatinha! Claro que podemos, vamos arrasar no seu novo
            visu!!</span
          >
        </div>
        <div class="img">
          <span class="text-3">Amoo! Quando podemos marcar?</span>
        </div>
        <div class="pic-2">
          <span class="text-4"
            >No momento estamos com uma pequena fila, mas já se inscreva para
            garantir sua vaga!</span
          >
        </div>
        <div class="img-2">
          <span class="text-5">Entendi! Muito obrigada pelo suporte!</span>
        </div>
        <div class="img-3">
          <span class="text-6"
            >Oi, sou uma grande fã! Você pode fazer meu cabelo?</span
          >
        </div>
        <span class="text-7">Olá!</span>
        <div class="pic-3"></div>
        <span class="text-8">Escreva algo...</span>
      </div>
      <span class="text-9">CHAT</span>
      <div class="img-4"><div class="img-5"></div></div>
      <div class="img-6"></div>
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
            <a href="<?php echo $static ?>chat-direto.php/WanessaWolf"><img class="acesso-Chat" src="<?php echo $static ?>img/chat-img.svg"></a>
            <img class="acesso-meuPerfil" src="<?php echo $static ?>img/user-profile.svg">
        </div>
    </div>
  </body>
</html>