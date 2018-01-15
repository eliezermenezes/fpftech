# fpftech

WebApp de produtos para uma loja virtual utilizando Framework PHP Laravel e MySQL.

Back-End: PHP
- RESTful;
- Eloquent ORM do Laravel;
- Laravel.

Front-End: PHP (Seria com AngulaJS 1.5, mas não deu certo)
- Html, Css, Javascript;
- Bootstrap.

Instruções para configuração e utilização da aplicação

1. Abra o Projeto

-> Após baixar e descompactar, navegue até o projeto pelo Terminal (usando o comando 'cd') se estiver usando Linux ou Prompt de Comando (usando o comando 'dir') se estiver usando Windows.

-> Na raiz do projeto, digite 'php artisan serve'. Esse é o servidor do laravel.

2. Banco de Dados

- Criar banco de dados:
-> Utilizar de uma ferramenta de queries ou mesmo pelo phpmyadmin e criar o banco de dados com o nome 'fpftech'. Ou se preferir digite apenas 'CREATE DATABASE fpftech';

Se na instalação do servidor Apache você configurou um usuario e uma senha, é preciso editar o arquivo .env na raiz do projeto.

-> Na raiz do projeto digite ' php artisan migrate' usando o Terminal ou Prompt de Comando. Comando para criar as tabelas no banco de dados.

3. Utilização da Aplicação

- Abra o navegador de preferência e digite 'http://localhost:8000/'.
