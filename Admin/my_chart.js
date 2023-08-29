
chartFunction(15,19);

function chartFunction( inv,entro)
{

const ctx = document.getElementById('myChart');
const investing = document.getElementById('invest');
const visits = document.getElementById('visits');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Investor', 'Entreprenure'],
      datasets: [{
        label: 'Ratio of Investor and Entreprenure',
        data: [inv,entro],
        backgroundColor: [
          'rgb(243, 61, 60)',
          'rgb(127, 242, 61)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });


  trafic(1255, 1922,456);
  
  rateFunction(1255, 1922,456);
}

  
  function rateFunction(a, b,c)
  {
  new Chart(investing, {
     type: 'line',
    data: {
      labels: ['January', 'Fabruary', 'March'],
      datasets: [{
        label: 'Investing Rate Per Month',
        data: [a, b,c],
        backgroundColor: [
          'rgb(243, 61, 60)',
          'rgb(127, 242, 61)',
          'rgba(255, 206, 86, 0.2)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
  
}
   
  function trafic(d,e,f)
  {

  new Chart(visits, {
     type: 'bar',
    data: {
      labels: ['January', 'Fabruary', 'March'],
      datasets: [{
        label: 'Website Traffic Per Month',
        data: [d,e,f],
        backgroundColor: [
          'rgb(127, 242, 61)',
          'rgb(127, 242, 61)',
          'rgba(255, 206, 86, 0.2)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });rateFunction(1255, 1922,456);
}