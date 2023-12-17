<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKO - Início</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link href="style/index.scss" rel="stylesheet" />
    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
    <!-- Topo da Página -->
    <div class="circles-topo">
        <svg height="150px" width="100%">
            <ellipse class="circle1" cx="80" cy="0" rx="180" ry="130"></ellipse>
            <ellipse class="circle2" cx="280" cy="0" rx="180" ry="150"></ellipse>
        </svg>
    </div>
    <div class="content-sandwich">
        <button class="menu-sandwich">
            <div class="bar"></div>
        </button>
    </div>
    <nav class="mobile-navbar">
                <a href="#" class="nav-link">
                    <img src="img/about-us.svg" width="35px" height="35px">
                    <span class="link-text">Sobre nós</span>
                </a>

                <a href="#" class="nav-link">
                    <img src="img/logout.svg" width="35px" height="35px">
                    <span class="link-text">Logout</span>
                </a>
    </nav>
    <div class="topo-barra">
    <!-- Barra de Pesquisa -->
        <div class="barra-pesquisa">
                <div class="search-bar">
                    <img class="lupa" src="img/lupa.svg" value="Submit">
                    <input type="text" class="txtPesquisa" placeholder="pesquisa aí..."> 
                </div>
        </div>
    </div>
    <!-- Carrossel Principal -->
    <div class="content-carrossel">
        <div class="carrossel-destaques">
                <article class="card" id="img1-carrossel">
                    <h3>Contrate Plano de Limpeza</h3>
                </article>
                <article class="card" id="img2-carrossel">
                    <h3>Escova e Hidratação!</h3>
                </article>
                <article class="card" id="img3-carrossel">
                    <h3>Consertamos Celulares - Jardim Ingá!</h3>
                </article>
                <article class="card" id="img4-carrossel">
                    <h3>Karen Bachini - Makeup</h3>
                </article>
                <article class="card" id="img5-carrossel">
                    <h3>Conserto de Geladeiras e Fogões</h3>
                </article>
        </div>
    </div>

    <h1>principais serviços</h1>

    <!-- Container Cards Profissionais -->
    <div class="container-cards">
        <!-- Card 1 -->
        <div class="cards-servico">
            <div class="img_servico">
                <img class="img_serv" src="img/ServicoDefault.png" id="servico-1">
            </div>
            <div class="titulo_servico">
                <h3>Pintura</h3>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="cards-servico">
            <div class="img_servico">
                <img class="img_serv" src="img/limpeza.png" id="servico-2">
            </div>
            <div class="titulo_servico">
                <h3>Limpeza</h3>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="cards-servico">
            <div class="img_servico">
                <img class="img_serv" src="img/cabelo.png" id="servico-3">
            </div>
            <div class="titulo_servico">
                <h3>Cabelo</h3>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="cards-servico">
            <div class="img_servico">
                <img class="img_serv" src="img/eletricista.png" id="servico-4">
            </div>
            <div class="titulo_servico">
                <h3>Elétrica</h3>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="cards-servico">
            <div class="img_servico">
                <img class="img_serv" src="img/encanamento.png" id="servico-5">
            </div>
            <div class="titulo_servico">
                <h3>Hidráulica</h3>
            </div>
        </div>
</div>

    <h1>prestadores indicados</h1>

    <!-- Container Cards Profissionais-->
    <div class="container-cards">
        <!-- Card 1 - PROFISSIONAL -->
        <div class="cards-profissional">
            <a href="pprofile.php/Juliette">
            <div class="img_profissional">
                <img class="img_serv" src="img/ProfissionalDefault.png" id="prestador-1">
            </div>
            <div class="titulo_profissional">
                <h3>Juliette</h3>
            </div>
            </a>
        </div>

        <!-- Card 2 - PROFISSIONAL -->
        <div class="cards-profissional">
        <a href="pprofile.php/InesBrasilTV>">
            <div class="img_profissional">
                <img class="img_serv" src="img/InesBrasil.png" id="prestador-2">
            </div>
            <div class="titulo_profissional">
                <h3>Inês Brasil</h3>
            </div>
        </a>
        </div>

        <!-- Card 3 - PROFISSIONAL -->
        <div class="cards-profissional">
        <a href="pprofile.php/Rayssa>">
            <div class="img_profissional">
                <img class="img_serv" src="img/Rayssa.png" id="prestador-3">
            </div>
            <div class="titulo_profissional">
                <h3>Rayssa</h3>
            </div>
        </a>
        </div>

        <!-- Card 4 - PROFISSIONAL -->
        <div class="cards-profissional">
        <a href="pprofile.php/Anitta">
            <div class="img_profissional">
                <img class="img_serv" src="img/Anitta.png" id="prestador-4">
            </div>
            <div class="titulo_profissional">
                <h3>Anitta</h3>
            </div>
        </a>
        </div>

        <!-- Card 5 - PROFISSIONAL -->
        <div class="cards-profissional">
        <a href="pprofile.php/Beyonce>">
            <div class="img_profissional">
                <img class="img_serv" src="img/Beyoncé.png" id="prestador-5">
            </div>
            <div class="titulo_profissional">
                <h3>Beyoncé</h3>
            </div>
        </a>
        </div>
    </div>

    <!-- Menu Inferior -->
    <div class="menu-inferior">
        <div class="menu-inferior-lower">
            <a href="index.php"><img class="home" src="img/home-img.svg"></a>
            <a href="search.php"><img class="pesquisa-barra" src="img/search-img.svg"></a>
            <div class="menu-inferior-outNew">
                <div class="menu-inferior-new">
                    <a href="novo-biko.php">
                    <img class="novoBIKO" src="img/new-img.svg">
                    </a>
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