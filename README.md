# README - Sumário + Referência + Observações

- Conexão Banco de Dados [conexao.php](./php/conexao.php)

1. Tela de Cadastro 1 [cadastro.php](cadastro.php) [style](./style/cadastro.scss)
2. Tela de Cadastro 2 [cadastro2.php](cadastro2.php) [style](./style/cadastro2.scss)
3. Tela de Cadastro 3 [identificacao.php](identificacao.php) [style](./style/identificacao.scss)
4. Tela de Login [login.php](login.php) [style](./style/login.scss)
5. Tela Inicial [index.php](index.php) [style](./style/index.scss)
5.1. Carrossel [index.js](./js/index.js)

6. Tela de Pesquisa [search.php](search.php) [style](./style/search.scss)
6.1. Buscar Perfis Recomendados [perfis-recomendados.php](./php/perfis-recomendados.php)

7. Perfil do Prestador [pprofile.php](pprofile.php) [style](./style/pprofile.scss)
7.1. Buscar Informações do Perfil [perfil.php](./php/perfil.php)

8. Solicitar Novo BIKO 1 [novo-biko.php](novo-biko.php) [style](./style/novo-biko.scss)
9. Solicitar Novo BIKO 2 [novo-biko2.php](novo-biko2.php) [style](./style/novo-biko.scss)
9.1. Mudança de Campos da Tela [novo-biko.js](./js/new-biko.js)

10. Tela de Chat Estática [chat-direto.php](chat-direto.php) [style](./style/chat-direto.scss)
11. Avaliações - quase estática [avaliacoes.php](avaliacoes.php) [style](./style/avaliacoes.scss)


## Banco de Dados 
Algumas tabelas foram adaptadas do modelo físico mostrado na monografia para evitar pequenos erros com a falta de valores. Além disto, o código está anexado na pasta SQL. [bdBIKO.sql](./sql/bdBIKO_Final.sql);



### Observações
Os códigos possuem uma variável chamada STATIC, que atua no direcionamento da aplicação na hora de buscar por arquivos no diretório. Neste caso, ela estará sempre configurada para o meu IP (por ter sido desenvolvido no meu pc), mas pode ser alterada para http://localhost/BIKO/ se necessário para utilização em qualquer máquina que possua o XAMPP e tenha esses arquivos.
