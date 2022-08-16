<h1 Align='center'>Projeto CRUD em Laravel 9</h1>
  <p> Projeto feito com o Framework <strong>Laravel</strong>, usando um banco de dados <strong>MySql</strong>.</p>

<h2>Pré-requisito</h2>

<ul>
  <li>PHP 8.0 ou maior;</li>
  <li>Composer;</li>
  <li>MySql;</li>
</ul>

<h2>Configurar o database</h2>

<ol>
  <li>Após baixar o codigo é necessario vincular seu database corretamente com o <strong>Laravel</strong>;</li>
    <ul><li>Dentro da pasta 'project_empresas' acesse: '.env'</li>
    <li>Altere 'username' e 'password' para os respectivos valores do seu Database, e se necessario a 'port'</li></ul>

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=''
  <br>

<li> Usando o Migrate para criar as tabelas</ li>
  <ul>
    <li>Abrir cmd;</li>
    <li>Entrar no diretorio do projeto com o comando 'cd'</li>
    <li>Digitar: php artisan migrate</li>
  </ul>
</ol>

<h2>Rodando a aplicação</h2>
<ol>
<li>Usando o artisan: </li>
<ul>
    <li>Abrir cmd;</li>
    <li>Entrar no diretorio do projeto com o comando 'cd'</li>
    <li>Digitar: php artisan serve</li>
</ul>
</ol>

<ul><li>Pronto! Agora é só acessar a url: 'localhost:8000/' no seu navegador.</li></ul>

<h2>Funcionalidades</h2>

  <p><strong>CRUD</strong> (Create, Read, Update, Delete)</p>
  <p>Validação de dados</p>
  
<h2>Urls</h2>
<p>/empresas/ -> Navegação, Lista de empresas e Deletar</p>
<p>/empresas/create/-> Cadatrar</p>
<p>/empresas/{$id}-> Atualizar </p>

<h2>Tecnologias</h2>
<p>As seguintes técnologias foram usadas na construção do projeto:</p>
<ul>
  <li><strong>Laravel 9</strong>;</li>
  <li><strong>PHP8</strong>;</li>
  <li><strong>Bootstrap5</strong>;</li>
  <li><strong>HTML5</strong>;</li>
  <li><strong>CSS3</strong>;</li>
</ul>
