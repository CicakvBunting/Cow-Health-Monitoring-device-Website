
databpmtes = [120,56,70,80,90,43,60,67,80,90,80,50,70,80,50,60,90,32,67,89,67,80,90,65];
// var databpmtes = <?php echo json_encode("42", JSON_HEX_TAG); ?>;
waktutes= ['00:00','1:00','2:00','3:00','4:00','5:00','6:00','7:00','8:00','9:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00'];
datatemptes = [30,28,29,28,29,27,30,30,40,20,31,17,18,19,12,23,25,26,26,27,24,25,26,24];


// new Chart(document.getElementById("bpm-chart"), {
//   type: 'line',
//   data: {
//     labels: waktutes,
//     datasets: [{ 
//         data: databpmtes,
//         label: "Beats per Second",
//         borderColor: 'green',
//         pointBorderColor: 'green',
//         pointBackgroundColor: 'black',
//         pointRadius:3,
//         fill: false,
//         pointHoverBackgroundColor: 'green',
//         pointHoverBorderColor    : 'green'
//       }
//     ],
    
//   },
//   plugins: [{
//     beforeRender: (x, options) => {
//       const c = x.chart;
//       const dataset = x.data.datasets[0];
//       const yScale = x.scales['y-axis-0'];
//       const yPos = yScale.getPixelForValue(70);
    
//       const gradientFill = c.ctx.createLinearGradient(0, 0, 0, c.height);
//       gradientFill.addColorStop(0, 'rgb(86,188,77)');
//       gradientFill.addColorStop(yPos / c.height, 'rgb(86,188,77)');
//       gradientFill.addColorStop(yPos / c.height, 'rgb(229,66,66)');
//       gradientFill.addColorStop(1, 'rgb(229,66,66)');
    
//       const model = x.data.datasets[0]._meta[Object.keys(dataset._meta)[0]].dataset._model;
//       model.borderColor = gradientFill;
//     },
//     }],
//   options: {
//     maintainAspectRatio: false,
//     tooltips: {
//       mode: 'index',
//       intersect: true
//     },
//     hover: {
//       mode: 'index',
//       intersect: true
//     },
//     legend: {
//       display: false
//     },
//     scales : {
//       yAxes : [{
//         gridLines: {
//           display: false
//         },
//           ticks : {
//               beginAtZero : true,
//               suggestedMax: 200
//           }   
//       }],
//       xAxes: [{
//         display: true,
//         gridLines: {
//           display: false
//         },
//         ticks: {
//           fontColor: '#495057',
//           fontStyle: 'bold'
//         }
//       }]
//   }
//   }
// });
//end chart bpm


//chart temp
// new Chart(document.getElementById("temp-chart"), {
//   type: 'line',
//   data: {
//     labels: waktutes,
//     datasets: [{ 
//         data: datatemptes,
//         label: "Beats per Second",
//         borderColor: 'green',
//         pointBorderColor: 'green',
//         pointBackgroundColor: 'black',
//         pointRadius:3,
//         fill: false,
//         pointHoverBackgroundColor: 'green',
//         pointHoverBorderColor    : 'green'
//       }
//     ],
    
//   },
//   plugins: [{
//     beforeRender: (x, options) => {
//       const c = x.chart;
//       const dataset = x.data.datasets[0];
//       const yScale = x.scales['y-axis-0'];
//       const yPos = yScale.getPixelForValue(28);
    
//       const gradientFill = c.ctx.createLinearGradient(0, 0, 0, c.height);
//       gradientFill.addColorStop(0, 'rgb(86,188,77)');
//       gradientFill.addColorStop(yPos / c.height, 'rgb(86,188,77)');
//       gradientFill.addColorStop(yPos / c.height, 'rgb(229,66,66)');
//       gradientFill.addColorStop(1, 'rgb(229,66,66)');
    
//       const model = x.data.datasets[0]._meta[Object.keys(dataset._meta)[0]].dataset._model;
//       model.borderColor = gradientFill;
//     },
//     }],
//   options: {
//     maintainAspectRatio: false,
//     tooltips: {
//       mode: 'index',
//       intersect: true
//     },
//     hover: {
//       mode: 'index',
//       intersect: true
//     },
//     legend: {
//       display: false
//     },
//     scales : {
//       yAxes : [{
//         gridLines: {
//           display: false
//         },
//           ticks : {
//               beginAtZero : true,
//           }   
//       }],
//       xAxes: [{
//         display: true,
//         gridLines: {
//           display: false
//         },
//         ticks: {
//           fontColor: '#495057',
//           fontStyle: 'bold'
//         }
//       }]
//   }
//   }
// });
//end chart temp