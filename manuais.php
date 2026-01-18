<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Estilos base e centralização */
        body {
            font-family: 'Segoe UI', 'Roboto', 'Helvetica Neue', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #444;
        }

        .container-config {
            max-width: 700px;
            width: 100%;
            text-align: center;
        }

        /* Estilos do Título */
        h2 {
            font-size: 2.5em;
            font-weight: 500;
            color: #555;
            margin-bottom: 30px;
        }

        /* Estilos do Card principal */
        .card-manual {
            background-color: #F5F5F5;
            border-radius: 20px;
            box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.22);
            padding: 40px 30px;
        }

        /* ========================================
        BOOTSTRAP ACCORDION OVERRIDES 
        ========================================
        */
        
        /* Remove bordas e espaça os itens do acordeão */
        .card-manual .accordion-item {
            border: none;
            margin-bottom: 15px; 
            background-color: transparent;
        }
        
        /* Estilo do botão (cabeçalho do acordeão) */
        .card-manual .accordion-button {
            /* Cor verde sólida */
            background-color: #3bb54b; 
            color: white;
            /* Cria o formato de pílula - usa !important para sobrescrever o Bootstrap */
            border-radius: 20px !important; 
            padding: 15px 25px;
            font-weight: 600;
            font-size: 0.5em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Estado "Hover" do botão */
        .card-manual .accordion-button:hover {
            background-color: #2e9639; /* Verde levemente mais escuro */
            color: white;
        }

        /* Estilo para quando o botão está EXPANDIDO (aberto) */
        .card-manual .accordion-button:not(.collapsed) {
            background-color: #3bb54b; /* Mantém o verde sólido */
            color: white;
            box-shadow: none;
            border-bottom-left-radius: 20px !important;
            border-bottom-right-radius: 20px !important;
        }

        /* Remove o anel de foco azul padrão do Bootstrap */
        .card-manual .accordion-button:focus {
            box-shadow: none !important;
        }

        /* Estiliza o ícone (seta/chevron) para ser branco */
        .card-manual .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        /* Estilo do corpo do conteúdo colapsável */
        .card-manual .accordion-body {
            text-align: left;
            padding-top: 15px;
            font-size: 1.05em;
        }
    </style>
</head>
<body>
    <?php require "php/navbar.php"; ?>
    <div class="container-config">
        <h2>Manuais de uso</h2>
        
        <div class="card-manual">
            <div class="accordion" id="manualsAccordion">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Como subir um projeto?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#manualsAccordion">
                        <div class="accordion-body">
                            Aqui viria o conteúdo detalhado sobre como subir um projeto, seguindo os padrões do Mad Design System.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Quais são as extensões necessárias?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#manualsAccordion">
                        <div class="accordion-body">
                            As extensões necessárias para o VS Code incluem Prettier, ESLint e a extensão de tema do Mad DS.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Como subir um repositório no git
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#manualsAccordion">
                        <div class="accordion-body">
                            Utilize os comandos `git init`, `git add .`, `git commit -m "initial commit"` e, em seguida, defina o remoto e faça o push.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Como baixo todos os códigos?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#manualsAccordion">
                        <div class="accordion-body">
                            Você pode baixar todos os códigos usando o comando `git clone https://www.branas.io/blog/o-que-e-e-quando-devemos-utilizar-o-padrao-repository.html`.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Como baixo todos os códigos?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#manualsAccordion">
                        <div class="accordion-body">
                            Você pode baixar todos os códigos usando o comando `git clone https://www.branas.io/blog/o-que-e-e-quando-devemos-utilizar-o-padrao-repository.html`.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>