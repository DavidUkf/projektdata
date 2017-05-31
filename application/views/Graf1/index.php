
<div class="content-wrapper">
    <!-- Content Header (Page header) -->





    <?php
    $dbhandle = new mysqli('localhost','c1dkukucka17','mPeWkkyV9s38','c1dkukucka17');

    $query = "SELECT x1.poznamka as nazov,COUNT(x2.meno) as number FROM student x2 JOIN prax x1 ON x1.idprax=x2.idStudent GROUP BY x2.meno";
    $res = $dbhandle->query($query);
    ?>
    <section class="content-header">

        <html>
        <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['nazov','number'],
                        <?php
                        while ($row= $res->fetch_assoc())
                        {
                            echo "['".$row['nazov']."',".$row['number']."],";

                        }

                        ?>
                    ]);

                    var options = {
                        title: 'Počet študentov s rovnakou praxou'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            </script>
        </head>
        <body>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        </body>



        </html>


        <?php
        $dbhandle = new mysqli('localhost','c1dkukucka17','mPeWkkyV9s38','c1dkukucka17');

        $query = "SELECT zodpovedny,COUNT(*)AS number FROM prax GROUP BY zodpovedny";
        $res = $dbhandle->query($query);
        ?>

        <html>
        <head>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([


                        ['zodpovedny', 'number'],
                        <?php
                        while ($row= $res->fetch_assoc())                        {


                            echo "['".$row['zodpovedny']."',".$row['number']."],";

                        }

                        ?>

                    ]);

                    var options = {
                        title: 'Ukazovateľ kolko ma jeden zamestnanec na seba žiakov',
                        pieHole: 0.4,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                    chart.draw(data, options);
                }
            </script>
        </head>
        <body>
        <div id="donutchart" style="width: 900px; height: 500px;"></div>

        </body>
        </html>







