
<div class="content-wrapper">
    <!-- Content Header (Page header) -->





    <?php
    $dbhandle = new mysqli('localhost','root','','c1dkukucka17');

    $query = "SELECT x1.nazov,COUNT(x5.meno) as number FROM firma x1 JOIN prax_has_firma x2 ON x1.idFirma=x2.Firma_idFirma JOIN prax x3 ON x3.idprax=x2.prax_idprax JOIN student_has_prax x4 ON x4.prax_idprax=x3.idprax JOIN student x5 ON x5.idStudent=x4.student_idStudent GROUP BY x1.nazov";
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
                        title: 'Počet študentov na jednotlivej praxe'
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
        $dbhandle = new mysqli('localhost','root','','c1dkukucka17');

        $query = "SELECT meno,COUNT(*)AS number FROM student GROUP BY meno";
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


                        ['meno', 'number'],
                        <?php
                        while ($row= $res->fetch_assoc())                        {


                         echo "['".$row['meno']."',".$row['number']."],";

                        }

                        ?>

                    ]);

                    var options = {
                        title: 'Študenti s rovnakým krsným menom',
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







