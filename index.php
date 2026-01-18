<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Design System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Define a fonte e remove margens padrão do corpo */
        body {
            font-family: 'Segoe UI', 'Roboto', 'Helvetica Neue', sans-serif;
            margin: 0;
            background-color: #f5f5f5; /* Cor de fundo cinza claro */
            display: flex; /* Habilita o Flexbox para centralização */
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            min-height: 100vh; /* Garante que a página tenha pelo menos 100% da altura da tela */
            color: #707070;
            text-align: center; /* Alinha o texto ao centro */
            line-height: 1.5;
            padding: 20px; /* Adiciona um pequeno padding para telas menores */
        }

        /* Estilos do container principal */
        .content-container {
            max-width: 600px; /* Limita a largura do conteúdo para não esticar demais */
        }

        /* Estilos do logotipo */
        .logo-body {
            max-width: 550px; /*Limita a largura da imagem */
            width: 100%;
            margin-bottom: 25px;
        }

        /* Estilos do título */
        .title {
            font-size: 2em; /* Tamanho da fonte do título */
            font-weight: 500; /* Peso da fonte para parecer mais fino */
            margin-bottom: 10px; /* Espaço abaixo do título */
            color: #707070;
        }

        /* Estilos do parágrafo */
        p {
            font-size: 1.2em; /* Tamanho da fonte do parágrafo */
            color: #707070;

        }

        
    </style>
  </head>
  <body>
    <?php require "php/navbar.php"; ?>

     <div class="content-container">
        <img src="img/logotipo.png" alt="Open Design System Logo" class="logo-body">
        <h2 class="title">O que é a Open Design System?</h2>
        <p>A <strong>Open Design System</strong> é o nosso Sistema de Design, o lar de todos os nossos padrões, componentes e ativos reutilizáveis relacionados ao design de produtos dos nossos sistema web.</p>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>