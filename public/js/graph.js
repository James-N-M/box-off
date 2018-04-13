

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {
        let wins = parseInt($("#wins").val());   
        let loses = parseInt($("#loses").val());  
        
        var data = google.visualization.arrayToDataTable([
            ["Col1", 'Col2'],
            ['Wins', wins],
            ['Loses', loses]
        ]);
    
        var options = {
          title: 'Wins Lose Record'
        };
            
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            
        chart.draw(data, options);
            
        } 