<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.jss"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script>
function buildChart() {
console.log(window.sessionStorage.field_items);
var items =  JSON.parse(window.sessionStorage.field_items);
var time_data = [];
var field_names = [];
var backgroundColors = [];
var borderColors = [];
for(var i=0; i<items.length; i++){
      time_data.push(items[i].time);
      field_names.push(items[i].name);
      color1 = Math.floor(Math.random() * 256);
      color2 = Math.floor(Math.random() * 256);
      color3 = Math.floor(Math.random() * 256);
      backgroundColors.push('rgba('+ color1 + ',' + color2 + ',' + color3 + ', 0.2)' );
      borderColors.push('rgba('+ color1 + ',' + color2 + ',' + color3 + ', 1)' );
}

var ctx = document.getElementById("myChart").getContext('2d');
console.log(field_names);
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: field_names,
        datasets: [{
            label: 'Time of each field in milliseconds',
            data: time_data,
            backgroundColor: backgroundColors,
            borderColor: borderColors,
            borderWidth: 1,
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


}
</script>
<title> Time </title>
</head>  
<body onload="buildChart();">
    <canvas id="myChart" width="400" height="400"></canvas>
</body>


</html>