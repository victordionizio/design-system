<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Design System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo_minificado.png" type="image/x-icon">

    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="logo">
                <img src="img/logo_minificado.png" alt="Logo">
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                
                <div class="offcanvas-header">
                    <div class="logo">
                <img src="img/logo_minificado.png" alt="Logo">
            </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body">
                    
                    <div class="accordion w-100" id="accordionMenuSanfona"> 
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <strong>Comece por aqui</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionMenuSanfona">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="introducao.php" class="lista-links"><strong>Introdução</strong></a></li>
                                        <!-- <li><a href="#" class="lista-links"><strong>Configuração</strong></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Componentes</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionMenuSanfona">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="cores.php" class="lista-links"><strong>Cores</strong></a></li>
                                        <li><a href="botoes.php" class="lista-links"><strong>Botões</strong></a></li>
                                        <li><a href="popup.php" class="lista-links"><strong>PopUps</strong></a></li>
                                        <li><a href="form.php" class="lista-links"><strong>Formulários</strong></a></li>
                                        <li><a href="graficos.php" class="lista-links"><strong>Gráficos</strong></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item link-sem-seta">
                            <h2 class="accordion-header">
                                <a href="manuais.php" class="accordion-button collapsed">
                                    <strong>Manuais de uso</strong>
                                </a>
                            </h2>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>