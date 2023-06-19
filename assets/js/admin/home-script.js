$(function(){
    $(".sidebar").load("/html/admin/sidebar.html")
    $(".nav").load("/html/admin/nav.html")
})

//Get current day
date = new Date()
month = date.getMonth() + 1
year = date.getFullYear()
day = date.getDate()
document.getElementById("current-date").innerHTML = day + "/" + month + "/" + year

//Draw line chart
var ctx = document.getElementById('lineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        datasets: [{
            label: 'Lượng truy cập',
            data: [560, 124, 300, 94, 415, 982, 744],
            backgroundColor: [
                'rgb(236, 133, 59)'
            ],
            borderColor: 'rgb(236, 133, 59)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});
