<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/pop.css">
    <link rel="stylesheet" href="css/btn.css">
    <style>

        @media screen and (max-width: 768px) {
            .body-pop{
                width: 90%;
            }
            .btn-custom-roxo-medio-arredondado,.btn-custom-laranja-medio-arredondado,.btn-custom-verde-medio-arredondado,.btn-custom-azul-medio-arredondado,.btn-custom-vermelho-vazado-medio-arredondado{
                width: 290px;
            }
        }
    </style>

</head>

<body>
    <?php require "php/navbar.php"; ?>

    <h1 style="margin-top: 100px;">Modal</h1>
    <div class="body-pop">
        <div class="grupo-pop">
            <h3>Modal Padrão</h3>
            <p>Você pode utilizar o código à baixo para criar um modal, que quando clicado mostra um aviso com as
                opções.
                <br>
                Eles podem ser fechados, clicando no "X", clicando em "Fechar" ou Clicando fora do modal.
            </p>
            <div class="pop-conteudo">
                <button type="button" class="btn-custom-roxo-medio-arredondado" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Exemplo de Modal
                </button>

                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Este é um Modal de exemplo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Conteúdo que você pode escrever
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn-custom-vermelho"
                                    data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn-custom-verde">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Caixa que vai os códigos-->
                <div class="code-container">
                    <div class="code-content" id="codeContent">

                        <span class="code-line">
                            &lt;<span class="tag">button</span>
                            <span class="attribute">type</span>="button"
                            <span class="attribute">class</span>="btn-custom-roxo-medio-arredondado"
                            <span class="attribute">data-bs-toggle</span>="modal"
                            <span class="attribute">data-bs-target</span>="#exampleModal"&gt;
                            <span class="value">Exemplo de Modal</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <span class="code-line">&lt;<span class="tag">div</span> <span
                                class="attribute">class</span>=<span>"modal fade"</span> <span
                                class="attribute">id</span>=<span>"exampleModal"</span> <span
                                class="attribute">tabindex</span>=<span>"-1"</span> <span
                                class="attribute">aria-labelledby</span>=<span>"exampleModalLabel"</span> <span
                                class="attribute">aria-hidden</span>=<span>"true"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">div</span> <span
                                class="attribute">class</span>=<span>"modal-dialog"</span>&gt;</span>
                        <span class="code-line">        &lt;<span class="tag">div</span> <span
                                class="attribute">class</span>=<span>"modal-content"</span>&gt;</span>
                        <span class="code-line">            &lt;<span class="tag">div</span> <span
                                class="attribute">class</span>=<span>"modal-header"</span>&gt;</span>
                        <span class="code-line">                &lt;<span class="tag">h1</span> <span
                                class="attribute">class</span>=<span>"modal-title fs-5"</span> <span
                                class="attribute">id</span>=<span>"exampleModalLabel"</span>&gt;<span class="value">Este
                                é um modal de exemplo</span>&lt;/<span class="tag">h1</span>&gt;</span>
                        <span class="code-line">                &lt;<span class="tag">button</span> <span
                                class="attribute">type</span>=<span>"button"</span> <span
                                class="attribute">class</span>=<span>"btn-close"</span> <span
                                class="attribute">data-bs-dismiss</span>=<span>"modal"</span> <span
                                class="attribute">aria-label</span>=<span>"Close"</span>&gt;&lt;/<span
                                class="tag">button</span>&gt;</span>
                        <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                        <span class="code-line">            &lt;<span class="tag">div</span> <span
                                class="attribute">class</span>=<span>"modal-body"</span>&gt;<span class="value">Conteúdo
                                que você pode escrever</span>&lt;/<span class="tag">div</span>&gt;</span>
                        <span class="code-line">            &lt;<span class="tag">div</span> <span
                                class="attribute">class</span>=<span>"modal-footer"</span>&gt;</span>
                        <span class="code-line">                &lt;<span class="tag">button</span> <span
                                class="attribute">type</span>=<span>"button"</span> <span
                                class="attribute">class</span>=<span>"btn-custom-vermelho"</span> <span
                                class="attribute">data-bs-dismiss</span>=<span>"modal"</span>&gt;<span
                                class="value">Fechar</span>&lt;/<span class="tag">button</span>&gt;</span>
                        <span class="code-line">                &lt;<span class="tag">button</span> <span
                                class="attribute">type</span>=<span>"button"</span> <span
                                class="attribute">class</span>=<span>"btn-custom-vermelho"</span>&gt;<span
                                class="value">Salvar</span>&lt;/<span class="tag">button</span>&gt;</span>
                        <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                        <span class="code-line">        &lt;/<span class="tag">div</span>&gt;</span>
                        <span class="code-line">    &lt;/<span class="tag">div</span>&gt;</span>
                        <span class="code-line">&lt;/<span class="tag">div</span>&gt;</span>
                    </div>
                    <button class="copy-button" onclick="copyCode(this)">
                        <i class="far fa-copy">copiar</i>
                    </button>

                </div>
            </div><br>


<!--_________________________________________________modal estático_____________________________________________-->





            <div class="grupo-pop">
                <h3>Modal estático</h3>
                <p>Você pode utilizar o código à baixo para criar um modal estático, que quando clicado mostra um aviso
                    com
                    as
                    informações.
                    <br>
                    Eles podem ser fechados, clicando no "X", clicando em "Fechar" <strong>se clicar fora do botão ele
                        não
                        vai aceitar</strong>.
                </p>
                <div class="pop-conteudo">
                        <button type="button" class="btn-custom-laranja-medio-arredondado" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Esse é um modal estático
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Exemplo de modal estático</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Conteúdo do modal
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn-custom-vermelho"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn-custom-azul">Eu entendi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Caixa que vai os códigos-->
                    <div class="code-container">
                        <div class="code-content" id="codeContent">
                            <span class="code-line">&lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-laranja-medio-arredondado"</span>
                                <span class="attribute">data-bs-toggle</span>=<span>"modal"</span> <span
                                    class="attribute">data-bs-target</span>=<span>"#staticBackdrop"</span>&gt;<span
                                    class="value">Esse é um modal estático</span>&lt;/<span
                                    class="tag">button</span>&gt;</span>

                            <span class="code-line">&lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal fade"</span> <span
                                    class="attribute">id</span>=<span>"staticBackdrop"</span> <span
                                    class="attribute">data-bs-backdrop</span>=<span>"static"</span> <span
                                    class="attribute">data-bs-keyboard</span>=<span>"false"</span> <span
                                    class="attribute">tabindex</span>=<span>"-1"</span> <span
                                    class="attribute">aria-labelledby</span>=<span>"staticBackdropLabel"</span> <span
                                    class="attribute">aria-hidden</span>=<span>"true"</span>&gt;</span>
                            <span class="code-line">    &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-dialog"</span>&gt;</span>
                            <span class="code-line">        &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-content"</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-header"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">h1</span> <span
                                    class="attribute">class</span>=<span>"modal-title fs-5"</span> <span
                                    class="attribute">id</span>=<span>"staticBackdropLabel"</span>&gt;<span
                                    class="value">Exemplo de modal estático</span>&lt;/<span
                                    class="tag">h1</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-close"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span> <span
                                    class="attribute">aria-label</span>=<span>"Close"</span>&gt;&lt;/<span
                                    class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-body"</span>&gt;<span
                                    class="value">Conteúdo do
                                    modal</span>&lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-footer"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-vermelho"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span>&gt;<span
                                    class="value">Fechar</span>&lt;/<span class="tag">button</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-azul"</span>&gt;<span
                                    class="value">Eu
                                    entendi</span>&lt;/<span class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">        &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">    &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">&lt;/<span class="tag">div</span>&gt;</span>
                        </div>
                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>

            </div><br>



<!--_________________________________________________conteudo grande_____________________________________________-->

            <div class="grupo-pop">
                <h3>Modal com Scroll (conteúdo grande)</h3>
                <p>Utilizando esse modal, você tem a possibilidade de usar textos grandes dentro do seu modal

                </p>
                <div class="pop-conteudo">

                    <button type="button" class="btn-custom-verde-medio-arredondado" data-bs-toggle="modal"
                        data-bs-target="#scrollableModal">
                        Modal com Scroll
                    </button>
                    <!--Caixa que vai os códigos-->
                    <div class="code-container">

                        <!-- Botão -->


                        <!-- Modal Scrollável -->
                        <div class="modal fade" id="scrollableModal" tabindex="-1"
                            aria-labelledby="scrollableModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="scrollableModalLabel">modal com Scroll</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Nesse pop up não tem limite de tamanho para textos, ele se adapta e começa a
                                            scrolar</p>
                                        <!-- Repita ou use JS pra gerar muito conteúdo -->
                                        <p>... (adicione vários parágrafos para forçar o scroll) ...
                                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn-custom-vermelho"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="code-content" id="codeContent">
                            <span class="code-line">&lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-verde-medio-arredondado"</span>
                                <span class="attribute">data-bs-toggle</span>=<span>"modal"</span> <span
                                    class="attribute">data-bs-target</span>=<span>"#scrollableModal"</span>&gt;<span
                                    class="value">modal com Scroll</span>&lt;/<span
                                    class="tag">button</span>&gt;</span>

                            <span class="code-line">&lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal fade"</span> <span
                                    class="attribute">id</span>=<span>"scrollableModal"</span> <span
                                    class="attribute">tabindex</span>=<span>"-1"</span> <span
                                    class="attribute">aria-labelledby</span>=<span>"scrollableModalLabel"</span> <span
                                    class="attribute">aria-hidden</span>=<span>"true"</span>&gt;</span>
                            <span class="code-line">    &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-dialog
                                    modal-dialog-scrollable"</span>&gt;</span>
                            <span class="code-line">        &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-content"</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-header"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">h5</span> <span
                                    class="attribute">class</span>=<span>"modal-title"</span> <span
                                    class="attribute">id</span>=<span>"scrollableModalLabel"</span>&gt;<span
                                    class="value">modal com Scroll</span>&lt;/<span class="tag">h5</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-close"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span> <span
                                    class="attribute">aria-label</span>=<span>"Fechar"</span>&gt;&lt;/<span
                                    class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-body"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">p</span>&gt;<span
                                    class="value">Nesse pop up não tem limite de tamanho para textos, ele se adapta e
                                    começa a scrolar</span>&lt;/<span class="tag">p</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">p</span>&gt;<span
                                    class="value">... (adicione vários parágrafos para forçar o scroll)
                                    ...</span>&lt;/<span class="tag">p</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-footer"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-vermelho"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span>&gt;<span
                                    class="value">Fechar</span>&lt;/<span class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">        &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">    &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">&lt;/<span class="tag">div</span>&gt;</span>
                        </div>
                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>

            </div><br>



















            <div class="grupo-pop">
                <h3>Modal com formulário</h3>
                <p>Utilizando esse modal, você tem a possibilidade de usar formularios dentro do seu modal

                </p>
                <div class="pop-conteudo">


                    <!--Caixa que vai os códigos-->
                    <button type="button" class="btn-custom-azul-medio-arredondado" data-bs-toggle="modal"
                        data-bs-target="#formModal">
                        Modal com Formulário
                    </button>
                    <div class="code-container">



                        <!-- Modal Formulário -->
                        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <form class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="formModalLabel">Formulário no modal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="nome" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn-custom-vermelho"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn-custom-verde">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="code-content" id="codeContent">
                            <span class="code-line">&lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-azul-medio-arredondado"</span>
                                <span class="attribute">data-bs-toggle</span>=<span>"modal"</span> <span
                                    class="attribute">data-bs-target</span>=<span>"#formModal"</span>&gt;<span
                                    class="value">modal com Formulário</span>&lt;/<span
                                    class="tag">button</span>&gt;</span>

                            <span class="code-line">&lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal fade"</span> <span
                                    class="attribute">id</span>=<span>"formModal"</span> <span
                                    class="attribute">tabindex</span>=<span>"-1"</span> <span
                                    class="attribute">aria-labelledby</span>=<span>"formModalLabel"</span> <span
                                    class="attribute">aria-hidden</span>=<span>"true"</span>&gt;</span>
                            <span class="code-line">    &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-dialog"</span>&gt;</span>
                            <span class="code-line">        &lt;<span class="tag">form</span> <span
                                    class="attribute">class</span>=<span>"modal-content"</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-header"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">h5</span> <span
                                    class="attribute">class</span>=<span>"modal-title"</span> <span
                                    class="attribute">id</span>=<span>"formModalLabel"</span>&gt;<span
                                    class="value">Formulário no modal</span>&lt;/<span class="tag">h5</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-close"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span> <span
                                    class="attribute">aria-label</span>=<span>"Fechar"</span>&gt;&lt;/<span
                                    class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-body"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"mb-3"</span>&gt;</span>
                            <span class="code-line">                    &lt;<span class="tag">label</span> <span
                                    class="attribute">for</span>=<span>"nome"</span> <span
                                    class="attribute">class</span>=<span>"form-label"</span>&gt;<span
                                    class="value">Nome</span>&lt;/<span class="tag">label</span>&gt;</span>
                            <span class="code-line">                    &lt;<span class="tag">input</span> <span
                                    class="attribute">type</span>=<span>"text"</span> <span
                                    class="attribute">class</span>=<span>"form-control"</span> <span
                                    class="attribute">id</span>=<span>"nome"</span> <span
                                    class="attribute">required</span>&gt;</span>
                            <span class="code-line">                &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"mb-3"</span>&gt;</span>
                            <span class="code-line">                    &lt;<span class="tag">label</span> <span
                                    class="attribute">for</span>=<span>"email"</span> <span
                                    class="attribute">class</span>=<span>"form-label"</span>&gt;<span
                                    class="value">E-mail</span>&lt;/<span class="tag">label</span>&gt;</span>
                            <span class="code-line">                    &lt;<span class="tag">input</span> <span
                                    class="attribute">type</span>=<span>"email"</span> <span
                                    class="attribute">class</span>=<span>"form-control"</span> <span
                                    class="attribute">id</span>=<span>"email"</span> <span
                                    class="attribute">required</span>&gt;</span>
                            <span class="code-line">                &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-footer"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-vermelho"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span>&gt;<span
                                    class="value">Cancelar</span>&lt;/<span class="tag">button</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"submit"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-verde"</span>&gt;<span
                                    class="value">Enviar</span>&lt;/<span class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">        &lt;/<span class="tag">form</span>&gt;</span>
                            <span class="code-line">    &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">&lt;/<span class="tag">div</span>&gt;</span>
                        </div>





                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>

            </div><br>















































            <div class="grupo-pop">
                <h3>Modal não bloqueante</h3>
                <p>Utilizando esse modal, o conteúdo atrás do modal continua disponível.

                </p>
                <div class="pop-conteudo">

                    <button type="button" class="btn-custom-vermelho-vazado-medio-arredondado" id="nonBlockingBtn">
                        Modal Não Bloqueante
                    </button>
                    <div class="code-container">

                        <!-- Modal -->
                        <div class="modal fade" id="nonBlockingModal" tabindex="-1" aria-labelledby="nonBlockingLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="nonBlockingLabel">Modal não bloqueante</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        Você pode interagir com o conteúdo atrás deste modal.
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="code-content" id="codeContent">
                            <span class="code-line">&lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-custom-vermelho-vazado-medio-arredondado"</span>
                                <span class="attribute">id</span>=<span>"nonBlockingBtn"</span>&gt;<span
                                    class="value">modal Não Bloqueante</span>&lt;/<span
                                    class="tag">button</span>&gt;</span>

                            <span class="code-line">&lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal fade"</span> <span
                                    class="attribute">id</span>=<span>"nonBlockingModal"</span> <span
                                    class="attribute">tabindex</span>=<span>"-1"</span> <span
                                    class="attribute">aria-labelledby</span>=<span>"nonBlockingLabel"</span> <span
                                    class="attribute">aria-hidden</span>=<span>"true"</span>&gt;</span>
                            <span class="code-line">    &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-dialog"</span>&gt;</span>
                            <span class="code-line">        &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-content"</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-header"</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">h5</span> <span
                                    class="attribute">class</span>=<span>"modal-title"</span> <span
                                    class="attribute">id</span>=<span>"nonBlockingLabel"</span>&gt;<span
                                    class="value">modal não bloqueante</span>&lt;/<span
                                    class="tag">h5</span>&gt;</span>
                            <span class="code-line">                &lt;<span class="tag">button</span> <span
                                    class="attribute">type</span>=<span>"button"</span> <span
                                    class="attribute">class</span>=<span>"btn-close"</span> <span
                                    class="attribute">data-bs-dismiss</span>=<span>"modal"</span> <span
                                    class="attribute">aria-label</span>=<span>"Fechar"</span>&gt;&lt;/<span
                                    class="tag">button</span>&gt;</span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">            &lt;<span class="tag">div</span> <span
                                    class="attribute">class</span>=<span>"modal-body"</span>&gt;</span>
                            <span class="code-line">                <span class="value">Você pode interagir com o
                                    conteúdo atrás deste modal.</span></span>
                            <span class="code-line">            &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">        &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">    &lt;/<span class="tag">div</span>&gt;</span>
                            <span class="code-line">&lt;/<span class="tag">div</span>&gt;</span>
                        </div>


                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>

            </div><br>













        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="js/estilogeralbtn.js"></script>

    <script>
        const myModal = new bootstrap.Modal(document.getElementById('nonBlockingModal'), {
            backdrop: false,
            keyboard: true
        });

        document.getElementById('nonBlockingBtn').addEventListener('click', () => {
            myModal.show();
        });
    </script>


</body>

</html>