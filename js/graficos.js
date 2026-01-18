//    GRÁFICO DE BARRAS    
    const ctxBarrasAzul = document.getElementById('grafico-barras-azul');
    new Chart(ctxBarrasAzul, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Vendas (R$)',
          data: [1200, 1900, 3000, 2500, 2000, 5000],
          backgroundColor: 'rgba(0, 134, 196, 0.5)',
          borderColor: 'rgba(0, 37, 105, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });

const ctxBarrasVerde = document.getElementById('grafico-barras-verde');
    new Chart(ctxBarrasVerde, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Vendas (R$)',
          data: [1200, 1900, 3000, 2500, 2000, 5000],
          backgroundColor: 'rgba(0, 155, 39, 0.5)',
          borderColor: 'rgba(0, 43, 16, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });


    const ctxBarrasLaranja = document.getElementById('grafico-barras-laranja');
    new Chart(ctxBarrasLaranja, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Vendas (R$)',
          data: [1200, 1900, 3000, 2500, 2000, 5000],
          backgroundColor: 'rgba(255, 115, 0, 0.5)',
          borderColor: 'rgba(105, 30, 0, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });


    
    const ctxBarrasVermelho = document.getElementById('grafico-barras-vermelho');
    new Chart(ctxBarrasVermelho, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Vendas (R$)',
          data: [1200, 1900, 3000, 2500, 2000, 5000],
          backgroundColor: 'rgba(238, 0, 0, 0.5)',
          borderColor: 'rgba(97, 0, 0, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });

    const ctxBarrasAmarelo = document.getElementById('grafico-barras-amarelo');
    new Chart(ctxBarrasAmarelo, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Vendas (R$)',
          data: [1200, 1900, 3000, 2500, 2000, 5000],
          backgroundColor: 'rgba(255, 251, 0, 0.5)',
          borderColor: 'rgba(155, 152, 0, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });

























































    //     GRÁFICO DE PIZZA    
    const ctxPizza = document.getElementById('grafico-pizza');
    new Chart(ctxPizza, {
      type: 'pie',
      data: {
        labels: ['Produto A', 'Produto B', 'Produto C'],
        datasets: [{
          label: 'Participação de Mercado',
          data: [50, 30, 20],
          backgroundColor: [
            'rgba(0, 226, 38, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 145, 0, 0.6)'
          ],
          borderColor: '#fff',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
      }
    });







    

    //     GRÁFICO DE LINHA 
    const ctxLinha = document.getElementById('grafico-linha');
    new Chart(ctxLinha, {
      type: 'line',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Crescimento de Vendas',
          data: [1000, 1500, 2000, 2500, 3000, 4000],
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          fill: true,
          tension: 0.3
        }]
      },
      
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });






    const ctxLinha2 = document.getElementById('grafico-linha2');
new Chart(ctxLinha2, {
  type: 'line',
  data: {
    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'], // Meses
    datasets: [
      {
        label: 'Crescimento de Vendas 2024',
        data: [1000, 1500, 2000, 2500, 3000, 4000],
        borderColor: 'rgba(0, 255, 34, 1)',
        fill: true,
        tension: 0.3
      },
      {
        label: 'Crescimento de Vendas 2023',
        data: [800, 1200, 1800, 2200, 2600, 3500],
        borderColor: 'rgba(255, 115, 0, 1)', 
        fill: true,
        tension: 0.3
      },
      
    ]
  },

  options: {
    responsive: true,
    plugins: { legend: { display: true, position: 'bottom' } },
    scales: { y: { beginAtZero: true } }
  }
});





const ctxLinha3 = document.getElementById('grafico-linha3');
new Chart(ctxLinha3, {
  type: 'line',
  data: {
    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'], // Meses
    datasets: [
      {
        label: 'Crescimento de Vendas 2024',
        data: [1000, 1500, 2000, 2500, 3000, 4000],
        borderColor: 'rgba(75, 192, 192, 1)',
        fill: true,
        tension: 0.3
      },
      {
        label: 'Crescimento de Vendas 2023',
        data: [800, 1200, 1800, 2200, 2600, 3500],
        borderColor: 'rgba(255, 99, 132, 1)',
        fill: true,
        tension: 0.3
      },
      {
        label: 'Crescimento de Vendas 2022',
        data: [600, 1000, 1400, 2000, 2400, 2800],
        borderColor: 'rgba(54, 162, 235, 1)',
        fill: true,
        tension: 0.3
      }
    ]
  },

  options: {
    responsive: true,
    plugins: { legend: { display: true, position: 'bottom' } },
    scales: { y: { beginAtZero: true } }
  }
});



