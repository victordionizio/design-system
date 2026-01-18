<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/grafico.css">
    <link rel="stylesheet" href="css/btn.css">
    <link rel="stylesheet" href="css/stylegrafico.css">

    <style>

        @media screen and (max-width: 768px) {
            .body-graficos{
                width: 93%;
            }
            .inputsgrafico{
                padding-left: 6%;
            }
            .inputsgrafico .dashboard{
                padding-left: 0;
            }
            .inputsgrafico .dashboard .grafico-container{
                margin-left: 0;
                width: 100%;
                max-width: 300px;
            }
        
           
        }
    </style>
</head>

<body>
    <?php require "php/navbar.php"; ?>



    <h1 style="margin-top: 100px;">Gráficos</h1><br><br>
    <div class="body-graficos">

        <div class="grupo-grafico">
            <h3>Gráfico de Barras</h3>
            <p>O gráfico de barras é utilizado para comparar valores entre diferentes categorias, representando os dados
                por meio de barras retangulares. A altura ou o comprimento de cada barra é proporcional ao valor que ela
                representa, facilitando a visualização de diferenças e tendências.</p>
            <p>Para alterar a cor de um gráfico basta apenas adicionar a classe <strong>grafico-barras-a cor
                    escolhida</strong>
                Ou alterar a cor no código Java-script
            </p>

            <div class="inputsgrafico">
                <h4>Cores do Gráfico de barras</h4>
                <div class="dashboard">
                    <div class="grafico-container">
                        <canvas id="grafico-barras-azul"></canvas>
                    </div>
                    <div class="grafico-container">
                        <canvas id="grafico-barras-verde"></canvas>
                    </div>
                    <div class="grafico-container">
                        <canvas id="grafico-barras-laranja"></canvas>
                    </div>
                    <div class="grafico-container">
                        <canvas id="grafico-barras-vermelho"></canvas>
                    </div>

                </div>

                <h5>HTML</h5>
                <div class="code-container">
                    <div class="code-content" id="codeContent">
                        <div class="code-content">
                            <span class="code-line">
                                <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"dashboard"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"grafico-container"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                    class="attribute">id=</span><span class="value">"grafico-barras-azul"</span><span
                                    class="tag">&gt;&lt;/canvas&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"grafico-container"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                    class="attribute">id=</span><span class="value">"grafico-barras-verde"</span><span
                                    class="tag">&gt;&lt;/canvas&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"grafico-container"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                    class="attribute">id=</span><span class="value">"grafico-barras-laranja"</span><span
                                    class="tag">&gt;&lt;/canvas&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                    class="value">"grafico-container"</span><span class="tag">&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                    class="attribute">id=</span><span
                                    class="value">"grafico-barras-vermelho"</span><span
                                    class="tag">&gt;&lt;/canvas&gt;</span>
                            </span>
                            <span class="code-line">
                                &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
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
                <br>
                <h5>Java Script</h5>
                <div class="code-container">
                    <div class="code-content" id="codeContent">
                        <div class="code-content">
                            <span class="code-line"><span class="tag">const</span> <span
                                    class="value">ctxBarrasAzul</span> <span class="attribute">=</span> <span
                                    class="value">document.getElementById(</span><span
                                    class="value">'grafico-barras-azul'</span><span class="value">)</span><span
                                    class="value">;</span></span>

                            <span class="code-line"><span class="tag">new</span> <span class="value">Chart(</span><span
                                    class="value">ctxBarrasAzul</span><span class="value">, {</span></span>
                            <span class="code-line">&nbsp;&nbsp;<span class="attribute">type:</span> <span
                                    class="">'bar'</span><span class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;<span class="attribute">data:</span> <span
                                    class="value">{</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">labels:</span> <span
                                    class="value">[</span><span class="">'Jan'</span><span class="value">,</span>
                                <span class="">'Fev'</span><span class="value">,</span> <span class="">'Mar'</span><span
                                    class="value">,</span> <span class="">'Abr'</span><span class="value">,</span> <span
                                    class="">'Mai'</span><span class="value">,</span> <span class="">'Jun'</span><span
                                    class="value">]</span><span class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">datasets:</span>
                                <span class="value">[{</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="attribute">label:</span> <span class="">'Vendas (R$)'</span><span
                                    class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="attribute">data:</span> <span class="value">[</span><span
                                    class="">1200</span><span class="value">,</span> <span class="">1900</span><span
                                    class="value">,</span> <span class="">3000</span><span class="value">,</span> <span
                                    class="">2500</span><span class="value">,</span> <span class="">2000</span><span
                                    class="value">,</span> <span class="">5000</span><span class="value">]</span><span
                                    class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="attribute">backgroundColor:</span> <span class="">'rgba(0, 134, 196,
                                    0.5)'</span><span class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="attribute">borderColor:</span> <span class="">'rgba(0, 37, 105,
                                    1)'</span><span class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="attribute">borderWidth:</span> <span class="">1</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="value">}]</span></span>
                            <span class="code-line">&nbsp;&nbsp;<span class="value">}</span><span
                                    class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;<span class="attribute">options:</span> <span
                                    class="value">{</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">responsive:</span>
                                <span class="value">true</span><span class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">plugins:</span>
                                <span class="value">{</span> <span class="attribute">legend:</span> <span
                                    class="value">{</span> <span class="attribute">display:</span> <span
                                    class="value">true</span> <span class="value">}</span> <span
                                    class="value">}</span><span class="value">,</span></span>
                            <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">scales:</span> <span
                                    class="value">{</span> <span class="attribute">y:</span> <span
                                    class="value">{</span> <span class="attribute">beginAtZero:</span> <span
                                    class="value">true</span> <span class="value">}</span> <span
                                    class="value">}</span></span>
                            <span class="code-line">&nbsp;&nbsp;<span class="value">}</span></span>
                            <span class="code-line"><span class="value">})</span><span class="value">;</span></span>


                        </div>


                        <button class="copy-button" onclick="copyCode(this)">
                            <i class="far fa-copy">copiar</i>
                        </button>

                    </div>
                </div><br>
            </div>
            <br><br>





















            <br><br>

            <div class="grupo-grafico">
                <h3>Gráfico de Pizza</h3>
                <p>O gráfico de pizza é utilizado para mostrar a proporção de cada categoria em relação ao total. Ele é
                    dividido em “fatias”,<br> onde cada parte representa um percentual dos dados, facilitando a
                    visualização de participação e comparação entre os elementos.</p>


                <div class="inputsgrafico">
                    <div class="dashboard1">
                        <div class="grafico-container">
                            <canvas id="grafico-pizza"></canvas>
                        </div>


                    </div>

                    <h5>HTML</h5>
                    <div class="code-container">
                        <div class="code-content" id="codeContent">
                            <div class="code-content">
                                <span class="code-line">
                                    <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                        class="value">"dashboard"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                        class="attribute">class=</span><span
                                        class="value">"grafico-container"</span><span class="tag">&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                        class="attribute">id=</span><span class="value">"grafico-pizza"</span><span
                                        class="tag">&gt;&lt;/canvas&gt;</span>
                                </span>
                                <span class="code-line">
                                    &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
                                </span>

                            </div>


                            <button class="copy-button" onclick="copyCode(this)">
                                <i class="far fa-copy">copiar</i>
                            </button>

                        </div>

                    </div><br>
                    <br>
                    <h5>Java Script</h5>
                    <div class="code-container">
                        <div class="code-content" id="codeContent">
                            <div class="code-content">
                                <span class="code-line"><span class="tag">const</span> <span
                                        class="value">ctxPizza</span> <span class="attribute">=</span> <span
                                        class="value">document.getElementById(</span><span
                                        class="value">'grafico-pizza'</span><span class="value">)</span><span
                                        class="value">;</span></span>

                                <span class="code-line"><span class="tag">new</span> <span
                                        class="value">Chart(</span><span class="value">ctxPizza</span><span
                                        class="value">, {</span></span>
                                <span class="code-line">&nbsp;&nbsp;<span class="attribute">type:</span> <span
                                        class="value">'pie'</span><span class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;<span class="attribute">data:</span> <span
                                        class="value">{</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">labels:</span>
                                    <span class="value">[</span><span class="value">'Produto A'</span><span
                                        class="value">,</span> <span class="value">'Produto B'</span><span
                                        class="value">,</span> <span class="value">'Produto C'</span><span
                                        class="value">]</span><span class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">datasets:</span>
                                    <span class="value">[{</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="attribute">label:</span> <span class="value">'Participação de
                                        Mercado'</span><span class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="attribute">data:</span> <span class="value">[</span><span
                                        class="value">50</span><span class="value">,</span> <span
                                        class="value">30</span><span class="value">,</span> <span
                                        class="value">20</span><span class="value">]</span><span
                                        class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="attribute">backgroundColor:</span> <span class="value">[</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="value">'rgba(0, 226, 38, 0.6)'</span><span class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="value">'rgba(54, 162, 235, 0.6)'</span><span
                                        class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="value">'rgba(255, 145, 0, 0.6)'</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="value">]</span><span class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="attribute">borderColor:</span> <span class="value">'#fff'</span><span
                                        class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="attribute">borderWidth:</span> <span class="value">2</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="value">}]</span></span>
                                <span class="code-line">&nbsp;&nbsp;<span class="value">}</span><span
                                        class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;<span class="attribute">options:</span> <span
                                        class="value">{</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="attribute">responsive:</span> <span class="value">true</span><span
                                        class="value">,</span></span>
                                <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="attribute">plugins:</span>
                                    <span class="value">{</span> <span class="attribute">legend:</span> <span
                                        class="value">{</span> <span class="attribute">position:</span> <span
                                        class="value">'bottom'</span> <span class="value">}</span> <span
                                        class="value">}</span></span>
                                <span class="code-line">&nbsp;&nbsp;<span class="value">}</span></span>
                                <span class="code-line"><span class="value">})</span><span class="value">;</span></span>

                            </div>


                            <button class="copy-button" onclick="copyCode(this)">
                                <i class="far fa-copy">copiar</i>
                            </button>

                        </div>
                    </div><br>
                </div>
                <br><br>



                









                <br><br>

                <div class="grupo-grafico">
                    <h3>Gráfico de Linha</h3>
                    <p>O gráfico de linha é utilizado para representar a evolução dos dados ao longo do tempo ou em uma
                        sequência de valores. Para alterar as cores das linhas, basta modificar as configurações no
                        código JavaScript. Caso queira exibir mais de uma linha no mesmo gráfico, utilize as classes
                        adicionais: <code>grafico-linha2</code> para dois conjuntos de dados e
                        <code>grafico-linha3</code> para três conjuntos de dados.</p>

                    <div class="inputsgrafico">
                        <div class="dashboard">
                            <div class="grafico-container">
                                <canvas id="grafico-linha"></canvas>
                            </div>

                            <div class="grafico-container">
                                <canvas id="grafico-linha2"></canvas>
                            </div>

                            <div class="grafico-container">
                                <canvas id="grafico-linha3"></canvas>
                            </div>

                        </div>

                        <h5>HTML</h5>
                        <div class="code-container">
                            <div class="code-content" id="codeContent">
                                <div class="code-content">
                                    <span class="code-line">
                                        <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                            class="value">"dashboard"</span><span class="tag">&gt;</span>
                                    </span>
                                    <span class="code-line">
                                        &nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span
                                            class="value">"grafico-container"</span><span class="tag">&gt;</span>
                                    </span>
                                    <span class="code-line">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                            class="attribute">id=</span><span class="value">"grafico-pizza"</span><span
                                            class="tag">&gt;&lt;/canvas&gt;</span>
                                    </span>
                                    <span class="code-line">
                                        &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
                                    </span>

                                    <span class="code-line">
                                        <span class="tag">&lt;div</span> <span class="attribute">class=</span><span
                                            class="value">"dashboard"</span><span class="tag">&gt;</span>
                                    </span>
                                    <span class="code-line">
                                        &nbsp;&nbsp;<span class="tag">&lt;div</span> <span
                                            class="attribute">class=</span><span
                                            class="value">"grafico-container"</span><span class="tag">&gt;</span>
                                    </span>
                                    <span class="code-line">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;canvas</span> <span
                                            class="attribute">id=</span><span class="value">"grafico-pizza"</span><span
                                            class="tag">&gt;&lt;/canvas&gt;</span>
                                    </span>
                                    <span class="code-line">
                                        &nbsp;&nbsp;<span class="tag">&lt;/div&gt;</span>
                                    </span>
                                </div>


                                <button class="copy-button" onclick="copyCode(this)">
                                    <i class="far fa-copy">copiar</i>
                                </button>

                            </div>

                        </div><br>
                        <br>
                        <h5>Java Script</h5>
                        <div class="code-container">
                            <div class="code-content" id="codeContent">
                                <div class="code-content">

                                    <span class="code-line"><span class="tag">const</span> <span
                                            class="value">ctxLinha3</span> <span class="attribute">=</span> <span
                                            class="value">document.getElementById(</span><span
                                            class="value">'grafico-linha3'</span><span class="value">)</span><span
                                            class="value">;</span></span>

                                    <span class="code-line"><span class="tag">new</span> <span
                                            class="value">Chart(</span><span class="value">ctxLinha3</span><span
                                            class="value">, {</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="attribute">type:</span> <span
                                            class="value">'line'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="attribute">data:</span> <span
                                            class="value">{</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">labels:</span> <span class="value">[</span><span
                                            class="value">'Jan'</span><span class="value">,</span> <span
                                            class="value">'Fev'</span><span class="value">,</span> <span
                                            class="value">'Mar'</span><span class="value">,</span> <span
                                            class="value">'Abr'</span><span class="value">,</span> <span
                                            class="value">'Mai'</span><span class="value">,</span> <span
                                            class="value">'Jun'</span><span class="value">]</span><span
                                            class="value">,</span></span>

                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">datasets:</span> <span class="value">[{</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">label:</span> <span class="value">'Crescimento de Vendas
                                            2024'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">data:</span> <span class="value">[</span><span
                                            class="value">1000</span><span class="value">,</span> <span
                                            class="value">1500</span><span class="value">,</span> <span
                                            class="value">2000</span><span class="value">,</span> <span
                                            class="value">2500</span><span class="value">,</span> <span
                                            class="value">3000</span><span class="value">,</span> <span
                                            class="value">4000</span><span class="value">]</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">borderColor:</span> <span class="value">'rgba(75, 192,
                                            192, 1)'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">fill:</span> <span class="value">true</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">tension:</span> <span class="value">0.3</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="value">},
                                            {</span></span>

                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">label:</span> <span class="value">'Crescimento de Vendas
                                            2023'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">data:</span> <span class="value">[</span><span
                                            class="value">800</span><span class="value">,</span> <span
                                            class="value">1200</span><span class="value">,</span> <span
                                            class="value">1800</span><span class="value">,</span> <span
                                            class="value">2200</span><span class="value">,</span> <span
                                            class="value">2600</span><span class="value">,</span> <span
                                            class="value">3500</span><span class="value">]</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">borderColor:</span> <span class="value">'rgba(255, 99,
                                            132, 1)'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">fill:</span> <span class="value">true</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">tension:</span> <span class="value">0.3</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="value">},
                                            {</span></span>

                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">label:</span> <span class="value">'Crescimento de Vendas
                                            2022'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">data:</span> <span class="value">[</span><span
                                            class="value">600</span><span class="value">,</span> <span
                                            class="value">1000</span><span class="value">,</span> <span
                                            class="value">1400</span><span class="value">,</span> <span
                                            class="value">2000</span><span class="value">,</span> <span
                                            class="value">2400</span><span class="value">,</span> <span
                                            class="value">2800</span><span class="value">]</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">borderColor:</span> <span class="value">'rgba(54, 162,
                                            235, 1)'</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">fill:</span> <span class="value">true</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">tension:</span> <span class="value">0.3</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="value">}]</span></span>

                                    <span class="code-line">&nbsp;&nbsp;<span class="value">}</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="attribute">options:</span> <span
                                            class="value">{</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">responsive:</span> <span class="value">true</span><span
                                            class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">plugins:</span> <span class="value">{</span> <span
                                            class="attribute">legend:</span> <span class="value">{</span> <span
                                            class="attribute">display:</span> <span class="value">true</span><span
                                            class="value">,</span> <span class="attribute">position:</span> <span
                                            class="value">'bottom'</span> <span class="value">}</span> <span
                                            class="value">}</span><span class="value">,</span></span>
                                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            class="attribute">scales:</span> <span class="value">{</span> <span
                                            class="attribute">y:</span> <span class="value">{</span> <span
                                            class="attribute">beginAtZero:</span> <span class="value">true</span> <span
                                            class="value">}</span> <span class="value">}</span></span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="value">}</span></span>
                                    <span class="code-line"><span class="value">})</span><span
                                            class="value">;</span></span>

                                </div>


                                <button class="copy-button" onclick="copyCode(this)">
                                    <i class="far fa-copy">copiar</i>
                                </button>

                            </div>
                        </div><br>
                    </div>
                    <br><br>


                    <script src="js/graficos.js"> </script>
</body>

</html>