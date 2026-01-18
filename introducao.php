



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="css/introducao.css" rel="stylesheet" >
    <style>
      @media screen and (max-width: 668px) {
          .corpo{
            width: 100%;
          }

          .intro-config{
            max-width: 100vh;
            width: 90%;
          }
          .intro-cont{
            width: 100%;
          }
            
      }
    </style>
  </head>
  <body>
    <?php require "php/navbar.php"; ?>
    <div class="corpo">

        <div class="intro-config">
            <h1>Introdução</h1>
            <p class="subtitle">Baixe o Mad Design System para obter o CSS e o JavaScript compilados.</p>
            
            <div class="intro-cont">
                <h3>CSS e JS compilados</h3>
                <p>Baixe o código compilado pronto para uso e inserir facilmente no seu projeto, no download inclui:</p>
                <ul>
                    <li>Pacotes CSS compilados e minimizados;</li>
                    <li>Plugins JavaScript compilados e minimizados;</li>
                </ul>
            </div>
            
<a href="#" id="download-btn" class="download-btn"><strong>Download</strong></a>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    // Seleciona o botão pelo ID
    const downloadBtn = document.getElementById('download-btn');
    
    // Adiciona um "ouvinte de evento" para o clique no botão
    downloadBtn.addEventListener('click', (event) => {
        // Previne o comportamento padrão do link (que seria seguir o href="#")
        event.preventDefault();

        // Define o caminho do arquivo ZIP
        const arquivoZip = 'baixar.zip';
        
        // Cria um elemento <a> temporário
        const link = document.createElement('a');
        
        // Define o 'href' do link para o arquivo ZIP
        link.href = arquivoZip;
        
        // Adiciona o atributo 'download' com o nome do arquivo,
        // isso força o download em vez de abrir no navegador
        link.download = 'mad-design-system.zip';
        
        // Adiciona o link ao corpo do documento (é necessário para que o 'click' funcione em alguns navegadores)
        document.body.appendChild(link);
        
        // Simula o clique no link, iniciando o download
        link.click();
        
        // Remove o link do documento após o clique
        document.body.removeChild(link);
    });
});
  </script>
</body>
</html>