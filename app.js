$(document).ready(function () {
    showGraph();
});


function showGraph()
{
    {
        $.post("data.php",
        function (data)
        {
            console.log(data);
             var name = [];
            var salary = [];

            for (var i in data) {
                name.push(data[i].name);
                salary.push(data[i].salary);
            }

            var chartdata = {
                labels: name,
                datasets: [
                    {
                        label: 'Salary graph',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: salary
                    }
                ]
            };

            var graphTarget = $("#graphCanvas");

            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata
            });
        });
    }
}