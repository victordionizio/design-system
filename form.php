<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inputs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/styleform.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/form.css">
    <style>

        @media screen and (max-width: 768px) {
            .body-botoes{
                width: 93%;

            }

            .botoesqueaparecem{
                width: 100%;
            }
            .input-custom-grande{
                width: 300px;
            }
            .input-custom-medio{
                width: 260px;
            }

            .code-container{
                width: 110%;
                margin-left: -10px;
                padding: 4px;
            }
        }
    </style>
</head>

<body>
    <?php require "php/navbar.php"; ?>

    <h1 style="margin-top: 100px;">Elementos de formulário</h1><br><br>
    <div class="body-botoes">

        <div class="grupo-inputs">
            <h3>Inputs</h3>
            <p>Os <em>inputs</em> são campos utilizados para inserir textos. Para estilizar um <em>input</em>, <br>basta
                atribuir à classe o padrão <code>input-custom-(tamanho)</code>.</p>
            <p>Além disso os <em>inputs</em> podem ocupar toda a linha ou ser do tipo área para digitação. <br> Para
                isso,
                utilize as classes <code>input-custom-linha</code> ou <code>input-custom-area</code>.</p>

            <div class="inputspadrao">
                <h4>Tamanhos</h4>
                <input type="text" class="input-custom-pequeno" placeholder="Pequeno"><br><br>
                <input type="text" class="input-custom-medio" placeholder="Médio"><br><br>
                <input type="text" class="input-custom-grande" placeholder="Grande"><br><br>
                <h4>Linha toda</h4>
                <input type="text" class="input-custom-linha" placeholder="Linha toda"><br><br>

                <h4>Área de textos grandes</h4>
                <textarea class="form-control input-custom-area" id="mensagem" rows="4"
                    placeholder="Escreva aqui"></textarea><br><br>

                <div class="code-container">

                    <div class="code-content" id="codeContent">

                        <div class="code-content">
                            <span class="code-line">
                                <span class="tag">&lt;label</span> <span class="attribute">for=</span><span
                                    class="value">""</span><span class="value">&gt;</span>Input pequeno<span
                                    class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;input</span> <span class="attribute">type=</span><span
                                    class="value">"text"</span> <span class="attribute">class=</span><span
                                    class="value">"input-custom-pequeno"</span> <span
                                    class="attribute">placeholder=</span><span class="value">"Pequeno"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;label</span> <span class="attribute">for=</span><span
                                    class="value">""</span><span class="tag">&gt;</span>Input Medio<span
                                    class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;input</span> <span class="attribute">type=</span><span
                                    class="value">"text"</span> <span class="attribute">class=</span><span
                                    class="value">"input-custom-medio"</span> <span
                                    class="attribute">placeholder=</span><span class="value">"Médio"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;label</span> <span class="attribute">for=</span><span
                                    class="value">""</span><span class="tag">&gt;</span>Input Grande<span
                                    class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;input</span> <span class="attribute">type=</span><span
                                    class="value">"text"</span> <span class="attribute">class=</span><span
                                    class="value">"input-custom-grande"</span> <span
                                    class="attribute">placeholder=</span><span class="value">"Grande"</span><span
                                    class="tag">&gt;</span>
                            </span>

                            <span class="code-line">
                                <span class="tag">&lt;label</span> <span class="attribute">for=</span><span
                                    class="value">""</span><span class="value">&gt;</span>Input linha toda<span
                                    class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;input</span> <span class="attribute">type=</span><span
                                    class="value">"text"</span> <span class="attribute">class=</span><span
                                    class="value">"input-custom-linha"</span> <span
                                    class="attribute">placeholder=</span><span class="value">"Pequeno"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag"><br>&lt;label</span> <span class="attribute">for=</span><span
                                    class="value">"mensagem"</span> <span class="attribute">class=</span><span
                                    class="value">"form-label"</span><span class="tag">&gt;</span>Textos
                                grandes<span class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;textarea</span> <span class="attribute">class=</span><span
                                    class="value">"form-control input-custom-area"</span> <span
                                    class="attribute">id=</span><span class="value">"mensagem"</span> <span
                                    class="attribute">rows=</span><span class="value">"4"</span> <span
                                    class="attribute">placeholder=</span><span class="value">"Escreva
                                    aqui"</span><span class="tag">&gt;</span><span class="tag">&lt;/textarea&gt;</span>
                            </span>

                            <span class="code-line">
                                <span class="tag"><br>&lt;label</span> <span class="attribute">for=</span><span
                                    class="value">"mensagem"</span> <span class="attribute">class=</span><span
                                    class="value">"form-label"</span><span class="tag">&gt;</span>Textos
                                grandes<span class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;textarea</span> <span class="attribute">class=</span><span
                                    class="value">"form-control input-custom-area"</span> <span
                                    class="attribute">id=</span><span class="value">"mensagem"</span> <span
                                    class="attribute">rows=</span><span class="value">"4"</span> <span
                                    class="attribute">placeholder=</span><span class="value">"Escreva
                                    aqui"</span><span class="tag">&gt;</span><span class="tag">&lt;/textarea&gt;</span>
                            </span>
                        </div>


                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>
            </div>
            <br><br>









<!--________________________________________________________________ Selects _______________________________________________________________-->

            <div class="grupo-inputs">
                <h3>Selects</h3>

                <p>Os elementos <code>&lt;select&gt;</code> criam listas suspensas, e podem ter diferentes tamanhos
                    conforme a classe aplicada: <code>select-pequeno</code>, <code>select-medio</code>,
                    <code>select-grande</code> ou <code>select-linha</code>, que ocupa toda a largura disponível.</p>

                <p>Os <code>radio buttons</code> e <code>checkboxes</code> possuem estilo arredondado aplicando as
                    classes <code>radio-custom-arredondado</code> e <code>checkbox-custom-arredondado</code>,
                    respectivamente, para um visual mais moderno e uniforme.</p>


                <div class="inputspadrao">
                    <h4>Tamanhos Select</h4><br>

                    <select class="select-pequeno">
                        <option>Opção 1</option>
                        <option>Opção 2</option>
                    </select><br><br>

                    <select class="select-medio">
                        <option>Opção 1</option>
                        <option>Opção 2</option>
                    </select><br><br>

                    <select class="select-grande">
                        <option>Opção 1</option>
                        <option>Opção 2</option>
                    </select>
                    <br><br>
                    <h4>Linha toda</h4>

                    <select class="select-linha">
                        <option>Opção 1</option>
                        <option>Opção 2</option>
                    </select><br><br>

                    <h4>Apenas uma opção</h4><br>
                    <div class="form-check mb-3">
                        <input class="form-check-input radio-custom-arredondado" type="radio" name="flexRadio"
                            id="radio1">
                        <label class="form-check-label" for="radio1">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input radio-custom-arredondado" type="radio" name="flexRadio"
                            id="radio2">
                        <label class="form-check-label" for="radio2">
                            Feminino
                        </label>
                    </div>
                    <br><br>
                    <h4>Múltiplas Escolhas</h4><br>
                    <div class="form-check mb-3">
                        <input class="form-check-input checkbox-custom-arredondado" type="checkbox" value=""
                            id="check1">
                        <label class="form-check-label" for="check1">
                            Aceito os termos
                        </label>

                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input checkbox-custom-arredondado" type="checkbox" value=""
                            id="check2">
                        <label class="form-check-label" for="check1">
                            Aceito a politica de privacidade
                        </label>

                    </div>
                    <!--Caixa que vai os códigos-->
                    <div class="code-container">



                        <div class="code-content" id="codeContent">

                            <span class="code-line">
                                <span class="tag">&lt;select</span> <span class="attribute">class=</span><span
                                    class="value">"select-pequeno"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 1<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 2<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/select&gt;</span>
                            </span>
                            <span class="code-line"></span>

                            <span class="code-line">
                                <span class="tag">&lt;select</span> <span class="attribute">class=</span><span
                                    class="value">"select-medio"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 1<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 2<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/select&gt;</span>
                            </span>
                            <span class="code-line"></span>

                            <span class="code-line">
                                <span class="tag">&lt;select</span> <span class="attribute">class=</span><span
                                    class="value">"select-grande"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 1<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 2<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/select&gt;</span>
                            </span>


                            <span class="code-line"><br>
                                <span class="tag">&lt;select</span> <span class="attribute">class=</span><span
                                    class="value">"select-linha"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 1<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;option&gt;</span>Opção 2<span
                                    class="tag">&lt;/option&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/select&gt;</span>
                            </span>


                            <span class="code-line"><br><br>
                                <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"form-check mb-3"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-input
                                    radio-custom-arredondado"</span> <span class="attribute">type=</span><span
                                    class="value">"radio"</span> <span class="attribute">name=</span><span
                                    class="value">"flexRadio"</span> <span class="attribute">id=</span><span
                                    class="value">"radio1"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;label</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-label"</span> <span
                                    class="attribute">for=</span><span class="value">"radio1"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;Masculino
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/div&gt;</span>
                            </span>

                            <span class="code-line">
                                <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"form-check mb-3"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-input
                                    radio-custom-arredondado"</span> <span class="attribute">type=</span><span
                                    class="value">"radio"</span> <span class="attribute">name=</span><span
                                    class="value">"flexRadio"</span> <span class="attribute">id=</span><span
                                    class="value">"radio2"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;label</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-label"</span> <span
                                    class="attribute">for=</span><span class="value">"radio2"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;Feminino
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/div&gt;</span>
                            </span>




                            <span class="code-line"><br><br>
                                <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"form-check mb-3"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-input
                                    checkbox-custom-arredondado"</span> <span class="attribute">type=</span><span
                                    class="value">"checkbox"</span> <span class="attribute">value=</span><span
                                    class="value">""</span> <span class="attribute">id=</span><span
                                    class="value">"check1"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;label</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-label"</span> <span
                                    class="attribute">for=</span><span class="value">"check1"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;Aceito os termos
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/div&gt;</span>
                            </span>

                            <span class="code-line">
                                <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"form-check mb-3"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-input
                                    checkbox-custom-arredondado"</span> <span class="attribute">type=</span><span
                                    class="value">"checkbox"</span> <span class="attribute">value=</span><span
                                    class="value">""</span> <span class="attribute">id=</span><span
                                    class="value">"check2"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;label</span> <span
                                    class="attribute">class=</span><span class="value">"form-check-label"</span> <span
                                    class="attribute">for=</span><span class="value">"check1"</span><span
                                    class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;Aceito a politica de privacidade
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/label&gt;</span>
                            </span>
                            <span class="code-line">
                                <span class="tag">&lt;/div&gt;</span>
                            </span>


                        </div>

                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>
            </div>
            <br>





<!--_______________________________________________________________________________ Uploads _____________________________________________________________________________-->


            <div class="grupo-inputs">
                <h3>Uploads</h3>
                <p>Os <em>inputs</em> são campos utilizados para inserir textos. Para estilizar um <em>input</em>,
                    <br>basta
                    atribuir à classe o padrão <code>input-custom-(tamanho)</code>.</p>
                <p>Além disso os <em>inputs</em> podem ocupar toda a linha ou ser do tipo área para digitação. <br> Para
                    isso,
                    utilize as classes <code>input-custom-linha</code> ou <code>input-custom-area</code>.</p>

                <div class="inputspadrao">
                    <h4>Tamanhos</h4>
                    <div class="mb-3">
                        <input class="form-control arquivo-pequeno" type="file" id="arquivo">
                    </div>

                    <div class="mb-3">
                        <input class="form-control arquivo-medio" type="file" id="arquivo">
                    </div>

                    <div class="mb-3">
                        <input class="form-control arquivo-grande" type="file" id="arquivo">
                    </div>
                    <div class="mb-3">
                        <h4>linha toda </h4>
                        <input class="form-control arquivo-linha" type="file" id="arquivo">
                    </div>
                    <h4>Enviar múltiplos arquivos</h4>

                    <div class="mb-3">
                        <label for="arquivos-multiplos" class="form-label"></label>
                        <input class="form-control input-custom-arredondado" type="file" id="arquivos-multiplos"
                            multiple>
                    </div><br><br>


                    <!--Caixa que vai os códigos-->
                    <div class="code-container">



                        <div class="code-content" id="codeContent">

                            <div class="code-content">
                                <span class="code-line">
                                    <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                        class="value">"mb-3"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                        class="attribute">class=</span><span class="value">"form-control
                                        arquivo-pequeno"</span> <span class="attribute">type=</span><span
                                        class="value">"file"</span> <span class="attribute">id=</span><span
                                        class="value">"arquivo-pequeno"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    <span class="tag">&lt;/div&gt;</span>
                                </span>

                                <span class="code-line">
                                    <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                        class="value">"mb-3"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                        class="attribute">class=</span><span class="value">"form-control
                                        arquivo-medio"</span> <span class="attribute">type=</span><span
                                        class="value">"file"</span> <span class="attribute">id=</span><span
                                        class="value">"arquivo-medio"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    <span class="tag">&lt;/div&gt;</span>
                                </span>

                                <span class="code-line">
                                    <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                        class="value">"mb-3"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                        class="attribute">class=</span><span class="value">"form-control
                                        arquivo-grande"</span> <span class="attribute">type=</span><span
                                        class="value">"file"</span> <span class="attribute">id=</span><span
                                        class="value">"arquivo-grande"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    <span class="tag">&lt;/div&gt;</span>
                                </span>

                                <span class="code-line">
                                    <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                        class="value">"mb-3"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                        class="attribute">class=</span><span class="value">"form-control
                                        arquivo-linha"</span> <span class="attribute">type=</span><span
                                        class="value">"file"</span> <span class="attribute">id=</span><span
                                        class="value">"arquivo-linha"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    <span class="tag">&lt;/div&gt;</span>
                                </span>

                                <span class="code-line">
                                    <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                        class="value">"mb-3"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;label</span> <span
                                        class="attribute">for=</span><span class="value">"arquivos-multiplos"</span>
                                    <span class="attribute">class=</span><span class="value">"form-label"</span><span
                                        class="tag">&gt;&lt;/label&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;input</span> <span
                                        class="attribute">class=</span><span class="value">"form-control
                                        input-custom-arredondado"</span> <span class="attribute">type=</span><span
                                        class="value">"file"</span> <span class="attribute">id=</span><span
                                        class="value">"arquivos-multiplos"</span> <span
                                        class="attribute">multiple</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    <span class="tag">&lt;/div&gt;</span>
                                </span>

                            </div>


                            <button class="copy-button" onclick="copyCode(this)">
                                <i class="far fa-copy">copiar</i>
                            </button>

                        </div>
                    </div><br>
                </div>
                <br><br>





<!--_____________________________________________________ Formulário de exemplo __________________________________________________________-->


                <div class="grupo-inputs">
                    <h3>Formulário de exemplo</h3>

                    <div class="inputspadrao">
                        <form>
                            <!-- Nome -->
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome completo</label>
                                <input type="text" class="form-control input-custom-pequeno" id="nome"
                                    placeholder="Digite seu nome">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control input-custom-pequeno" id="email"
                                    placeholder="exemplo@email.com">
                            </div>

                            <!-- Telefone -->
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control input-custom-pequeno" id="telefone"
                                    placeholder="(00) 00000-0000">
                            </div>

                            <!-- Select -->
                            <div class="mb-3">
                                <label for="assunto" class="form-label">Assunto</label>
                                <select class="form-select input-custom-pequeno" id="assunto">
                                    <option selected>Selecione...</option>
                                    <option>Suporte</option>
                                    <option>Orçamento</option>
                                    <option>Dúvidas</option>
                                </select>
                            </div>

                            <!-- Input de arquivo único -->
                            <div class="mb-3">
                                <label for="arquivo" class="form-label">Anexar arquivo</label>
                                <input class="form-control arquivo-linha" type="file" id="arquivo">
                            </div>

                            <!-- Input de múltiplos arquivos -->
                            <div class="mb-3">
                                <label for="arquivos" class="form-label">Anexar múltiplos arquivos</label>
                                <input class="form-control arquivo-linha" type="file" id="arquivos" multiple>
                            </div>

                            <!-- Mensagem -->
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control " id="mensagem" rows="4"
                                    placeholder="Digite sua mensagem"></textarea>
                            </div>

                            <!-- Botão -->
                            <button type="submit" class="btn-custom-verde-vazado-medio-arredondado">Enviar</button>
                        </form>
                        <br><br>


                        <!--Caixa que vai os códigos-->
                        <div class="code-container">



                            <div class="code-content" id="codeContent">

                                <div class="code-content">
                                    <span class="code-line"><span class="tag">&lt;form&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"nome"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>Nome completo<span
                                            class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;input</span>
                                        <span class="attribute">type=</span><span class="value">"text"</span> <span
                                            class="attribute">class=</span><span class="value">"form-control
                                            input-custom-pequeno"</span> <span class="attribute">id=</span><span
                                            class="value">"nome"</span> <span class="attribute">placeholder=</span><span
                                            class="value">"Digite seu nome"</span><span class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"email"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>E-mail<span class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;input</span>
                                        <span class="attribute">type=</span><span class="value">"email"</span> <span
                                            class="attribute">class=</span><span class="value">"form-control
                                            input-custom-pequeno"</span> <span class="attribute">id=</span><span
                                            class="value">"email"</span> <span
                                            class="attribute">placeholder=</span><span
                                            class="value">"exemplo@email.com"</span><span class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"telefone"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>Telefone<span
                                            class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;input</span>
                                        <span class="attribute">type=</span><span class="value">"tel"</span> <span
                                            class="attribute">class=</span><span class="value">"form-control
                                            input-custom-pequeno"</span> <span class="attribute">id=</span><span
                                            class="value">"telefone"</span> <span
                                            class="attribute">placeholder=</span><span class="value">"(00)
                                            00000-0000"</span><span class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"assunto"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>Assunto<span class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;select</span>
                                        <span class="attribute">class=</span><span class="value">"form-select
                                            input-custom-pequeno"</span> <span class="attribute">id=</span><span
                                            class="value">"assunto"</span><span class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="tag">&lt;option</span> <span class="attribute">selected</span><span
                                            class="tag">&gt;</span>Selecione...<span
                                            class="tag">&lt;/option&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="tag">&lt;option&gt;</span>Suporte<span
                                            class="tag">&lt;/option&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="tag">&lt;option&gt;</span>Orçamento<span
                                            class="tag">&lt;/option&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="tag">&lt;option&gt;</span>Dúvidas<span
                                            class="tag">&lt;/option&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="tag">&lt;/select&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"arquivo"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>Anexar arquivo<span
                                            class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;input</span>
                                        <span class="attribute">class=</span><span class="value">"form-control
                                            input-custom-pequeno"</span> <span class="attribute">type=</span><span
                                            class="value">"file"</span> <span class="attribute">id=</span><span
                                            class="value">"arquivo"</span><span class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"arquivos"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>Anexar múltiplos arquivos<span
                                            class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;input</span>
                                        <span class="attribute">class=</span><span class="value">"form-control
                                            input-custom-pequeno"</span> <span class="attribute">type=</span><span
                                            class="value">"file"</span> <span class="attribute">id=</span><span
                                            class="value">"arquivos"</span> <span class="attribute">multiple</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span class="value">"mb-3"</span><span
                                            class="tag">&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;label</span>
                                        <span class="attribute">for=</span><span class="value">"mensagem"</span> <span
                                            class="attribute">class=</span><span class="value">"form-label"</span><span
                                            class="tag">&gt;</span>Mensagem<span
                                            class="tag">&lt;/label&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="tag">&lt;textarea</span> <span class="attribute">class=</span><span
                                            class="value">"form-control input-grande-arredondado"</span> <span
                                            class="attribute">id=</span><span class="value">"mensagem"</span> <span
                                            class="attribute">rows=</span><span class="value">"4"</span> <span
                                            class="attribute">placeholder=</span><span class="value">"Digite sua
                                            mensagem"</span><span class="tag">&gt;&lt;/textarea&gt;</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="tag">&lt;button</span> <span
                                            class="attribute">type=</span><span class="value">"submit"</span> <span
                                            class="attribute">class=</span><span
                                            class="value">"btn-custom-verde-vazado-medio-arredondado"</span><span
                                            class="tag">&gt;</span>Enviar<span class="tag">&lt;/button&gt;</span></span>

                                    <span class="code-line"><span class="tag">&lt;/form&gt;</span></span>

                                </div>


                                <button class="copy-button" onclick="copyCode(this)">
                                    <i class="far fa-copy">copiar</i>
                                </button>

                            </div>
                        </div><br>
                    </div>
                    <br><br>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
                        crossorigin="anonymous">
                    </script>
                    <script src="js/estilogeralbtn.js"></script>

</body>

</html>