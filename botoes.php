<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Botões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/estilobotao.css">
    <link rel="stylesheet" href="css/btn.css">
    <style>

        @media screen and (max-width: 768px) {
            .body-botoes{
                width: 90%;
            }

            .botoesqueaparecem{
                width: 100%;
            }
            

            
        }
    </style>

</head>

<body>
    <?php require "php/navbar.php"; ?>

    <h1 style="margin-top: 100px;">Botões</h1>
    <!--DIV Mãe-->
    <div class="body-botoes">
        <br>
        <h3>Botões Padrão</h3>
        <p>Para estilizar seu botão, basta apenas adicionar a classe ao botão, e ele vai se estilizar automaticamente.
        </p>
        <!--Div que de grupo de botões-->
        <div class="grupo-botao">
            <div class="botaopadrao">
                <!--Lista de Botões-->
                <button class="btn-custom-branco">Clique Aqui</button>
                <button class="btn-custom-azul">Clique Aqui</button>
                <button class="btn-custom-vermelho">Clique Aqui</button>
                <button class="btn-custom-verde">Clique Aqui</button>
                <button class="btn-custom-laranja">Clique Aqui</button>
                <button class="btn-custom-preto">Clique Aqui</button>
                <button class="btn-custom-azul-escuro">Clique Aqui</button>
                <button class="btn-custom-verde-escuro">Clique Aqui</button>

                <!--Caixa que vai os códigos-->
                <div class="code-container">
                    <div class="code-content" id="codeContent">
                        <!--botão branco-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span>
                            <span class="attribute">class</span>="btn-custom-branco"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-azul"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão vermelho-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-vermelho"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão verde-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-verde"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão laranja-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-laranja"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão preto-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-preto"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul escuro-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-azul-escuro"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Verde-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-verde-escuro"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                    </div>
                    <button class="copy-button" onclick="copyCode(this)">
                        <i class="far fa-copy">copiar</i>
                    </button>

                </div>
            </div>



            <!--------------------------------------------------------------------------------------------------->



            <br><br>
            <h3>Botões Vazados</h3>
            <p>Para deixar o botão vazado, basta apenas escrever "-vazado" depois da cor na classe do seu botão.</p>
            <div class="botaopadrao">
                <!--Lista de Botões-->
                <button class="btn-custom-azul-vazado">Clique Aqui</button>
                <button class="btn-custom-vermelho-vazado">Clique Aqui</button>
                <button class="btn-custom-verde-vazado">Clique Aqui</button>
                <button class="btn-custom-laranja-vazado">Clique Aqui</button>
                <button class="btn-custom-preto-vazado">Clique Aqui</button>
                <button class="btn-custom-azul-escuro-vazado">Clique Aqui</button>
                <button class="btn-custom-verde-escuro-vazado">Clique Aqui</button>

                <!--Caixa que vai os códigos-->
                <div class="code-container">
                    <div class="code-content" id="codeContent">

                        <!--botão Azul vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-azul-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão vermelho vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-vermelho-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão verde vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-verde-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão laranja vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-laranja-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão preto vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-preto-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul escuro vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-azul-escuro-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Verde escuro vazado-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-verde-escuro-vazado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                    </div>
                    <button class="copy-button" onclick="copyCode(this)">
                        <i class="far fa-copy">copiar</i>
                    </button>

                </div>
            </div><br><br>



           <!--------------------------------------------------------------------------------------------------->




            <h3>Tamanhos</h3>
            <p><strong>Tamanhos fixos</strong> mantêm sempre as mesmas dimensões, independentemente da página ou do
                local onde forem utilizados.</p>
            <p>Eles <strong>não se ajustam automaticamente</strong> ao tamanho das páginas ou das <em>divs</em> em que
                estão inseridos.</p>
            <p>Para definir um botão com tamanho fixo, basta adicionar à classe do botão a variação desejada:
                <strong>médio</strong>, <strong>grande</strong> ou <strong>extra grande</strong>.</p>

            <div class="botaopadrao">
                <!--Lista de Botões-->

                <button class="btn-custom-laranja-medio">Clique Aqui</button><br><br>
                <button class="btn-custom-preto-grande">Clique Aqui</button><br><br>
                <button class="btn-custom-verde-extra-grande">Clique Aqui</button><br><br>

                <button class="btn-custom-azul-vazado-extra-grande">Clique Aqui</button><br><br>
                <button class="btn-custom-vermelho-vazado-grande">Clique Aqui</button><br><br>
                <button class="btn-custom-roxo-vazado-medio">Clique Aqui</button><br><br>

                <!--Caixa que vai os códigos-->
                <div class="code-container">
                    <div class="code-content" id="codeContent">

                        <!--botão laranja-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-laranja-medio"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão preto-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-preto-grande"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul escuro-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-verde-extra-grande"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão laranja-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-azul-vazado-extra-grande"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão preto-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-vermelho-vazado-grande"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul escuro-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-roxo-vazado-medio"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>

                    </div>
                    <button class="copy-button" onclick="copyCode(this)">
                        <i class="far fa-copy">copiar</i>
                    </button>

                </div>
            </div><br>



              <!--------------------------------------------------------------------------------------------------->


                    

            <!--Arredondamento-->
            <br>
            <h3>Arredondamento</h3>
            <p>Para deixar um botão com cantos arredondados, basta adicionar a palavra <strong>"arredondado"</strong>
                junto ao tamanho na classe do botão.</p>

            <div class="botaopadrao">
                <!--Lista de Botões-->

                <button class="btn-custom-laranja-medio-arredondado">Clique Aqui</button><br><br>
                <button class="btn-custom-preto-grande-arredondado">Clique Aqui</button><br><br>
                <button class="btn-custom-verde-extra-grande-arredondado">Clique Aqui</button><br><br>

                <button class="btn-custom-azul-vazado-extra-grande-arredondado">Clique Aqui</button><br><br>
                <button class="btn-custom-vermelho-vazado-grande-arredondado">Clique Aqui</button><br><br>
                <button class="btn-custom-roxo-vazado-medio-arredondado">Clique Aqui</button><br><br>

                <!--Caixa que vai os códigos-->
                <div class="code-container">
                    <div class="code-content" id="codeContent">

                        <!--botão laranja-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-laranja-medio-arredondado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão preto-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-preto-grande-arredondado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul escuro-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-verde-extra-grande-arredondado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão laranja-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-azul-vazado-extra-grande-arredondado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão preto-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-vermelho-vazado-grande-arredondado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>
                        <!--botão Azul escuro-->
                        <span class="code-line">
                            &lt;<span class="tag">button</span> <span
                                class="attribute">class</span>="btn-custom-roxo-vazado-medio-arredondado"&gt;
                            <span class="value">Clique Aqui</span>
                            &lt;/<span class="tag">button</span>&gt;
                        </span>

                    </div>
                    <button class="copy-button" onclick="copyCode(this)">
                        <i class="far fa-copy">copiar</i>
                    </button>
                </div>
            </div><br>



            <!--------------------------------------------------------------------------------------------------->





            <br>
            <h3>Ícone de inserir</h3>
            <p>Botão para inserir, é um icone de "+" onde o usuário vai clicar e abrir um arquivo para selecionar. </p>
            <p>Para mudar as cores, basta apenas colocar a classe ao lado.</p>

            <div class="botaopadrao">
                <!--Lista de Botões-->
                <div class="botoesqueaparecem">

                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-azul">
                        <h1>+</h1>
                    </label>



                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-verde">
                        <h1>+</h1>
                    </label>

                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-laranja">
                        <h1>+</h1>
                    </label>

                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-vermelho">
                        <h1>+</h1>
                    </label>

                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-preto">
                        <h1>+</h1>
                    </label>

                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-amarelo">
                        <h1>+</h1>
                    </label>

                    <input type="file" id="upload" class="input-file" accept=".pdf,.doc,.docx,.jpg,.png">
                    <label for="upload" class="subir-arquivos-roxo">
                        <h1>+</h1>
                    </label>
                </div>
                <!--Caixa que vai os códigos-->
                <div class="code-container">
                    <div class="code-content" id="codeContent">


                        <!--botão azul-->

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-azul"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-verde"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-laranja"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-vermelho"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-preto"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-amarelo"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>

                        <span class="code-line">    &lt;<span class="tag">input</span> <span
                                class="attribute">type</span>=<span>"file"</span>
                            <span class="attribute">id</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"input-file"</span>
                            <span class="attribute">accept</span>=<span>".pdf,.doc,.docx,.jpg,.png"</span>&gt;</span>
                        <span class="code-line">    &lt;<span class="tag">label</span> <span
                                class="attribute">for</span>=<span>"upload"</span>
                            <span class="attribute">class</span>=<span>"subir-arquivos-roxo"</span>&gt;&lt;<span
                                class="tag">h1</span>&gt;<span class="value">+</span>&lt;/<span
                                class="tag">h1</span>&gt;&lt;/<span class="tag">label</span>&gt;</span><br>





                    </div>
                    <button class="copy-button" onclick="copyCode(this)">
                        <i class="far fa-copy">copiar</i>
                    </button>
                </div>
            </div><br>
        </div><br>




            <!--------------------------------------------------------------------------------------------------->




        <h3>Botão liga e desliga</h3>
        <p>Esse botão é usado para ativar ou desativar itens.</p>

        <div class="botaopadrao">
            <!--Lista de Botões-->

            <input type="checkbox" id="myToggle" class="toggle-checkbox">
            <label for="myToggle" class="toggle-label"></label>

            <!--Caixa que vai os códigos-->
            <div class="code-container">
                <div class="code-content" id="codeContent">

                    <span class="code-line">    &lt;<span class="tag">input</span> <span
                            class="attribute">type</span>=<span>"checkbox"</span>
                        <span class="attribute">id</span>=<span>"myToggle"</span>
                        <span class="attribute">class</span>=<span>"toggle-label"</span>
                        <span class="attribute"></span><span></span>&gt;</span>
                    <span class="code-line">    &lt;<span class="tag">label</span> <span
                            class="attribute">for</span>=<span>"myToggle"</span>
                        <span class="attribute">class</span>=<span>"toggle-label"</span>&gt;&lt;<span
                            class="tag">/label</span>&gt;</span><br>


                </div>
                <button class="copy-button" onclick="copyCode(this)">
                    <i class="far fa-copy">copiar</i>
                </button>

            </div>
        </div><br><br>



     <!--------------------------------------------------------------------------------------------------->



        <h3>Ícones no botão</h3>
        <p>Para adicionar um ícone a um botão, insira uma imagem dentro do elemento do botão. <br>Utilize as classes
            <strong>"icone-direita"</strong> ou <strong>"icone-esquerda"</strong> na imagem para posicioná-la no lado
            desejado.</p>
        <p> importante notar que a imagem se adaptará automaticamente ao tamanho do botão,<br>
            independentemente de suas dimensões originais.</p>


        <div class="botaopadrao">
            <!--Lista de Botões-->

            <button class="btn-custom-laranja-grande-arredondado"><img
                    src="https://cdn-icons-png.flaticon.com/512/40/40358.png" class="icone-esquerda"> Clique Aqui
            </button><br><br>

            <button class="btn-custom-verde-vazado-grande-arredondado">Clique Aqui <img
                    src="https://cdn-icons-png.flaticon.com/512/40/40358.png" class="icone-direita"></button><br><br>

            <!--Caixa que vai os códigos-->
            <div class="code-container">
                <div class="code-content" id="codeContent">



                    <span class="code-line">
                        &lt;<span class="tag">button</span> <span
                            class="attribute">class</span>="btn-custom-laranja-grande-arredondado"&gt;

                        &lt;<span class="tag">img</span>
                        <span class="attribute">class</span>="..."
                        <span class="tag"></span>&gt;

                        <span class="value">Clique Aqui</span>
                        &lt;/<span class="tag">button</span>&gt;
                    </span>


                    <span class="code-line">
                        &lt;<span class="tag">button</span> <span
                            class="attribute">class</span>="btn-custom-verde-vazado-grande-arredondado"&gt;

                        &lt;<span class="tag">img</span>
                        <span class="attribute">class</span>="..."
                        <span class="tag"></span>&gt;

                        <span class="value">Clique Aqui</span>
                        &lt;/<span class="tag">button</span>&gt;
                    </span>

                </div>
                <button class="copy-button" onclick="copyCode(this)">
                    <i class="far fa-copy">copiar</i>
                </button>
            </div>
        </div><br>



        <!--------------------------------------------------------------------------------------------------->




    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="js/estilogeralbtn.js"></script>




</body>

</html>