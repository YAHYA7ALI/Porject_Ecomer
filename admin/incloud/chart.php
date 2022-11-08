    <html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Language', 'Speakers (in millions)'],
                <?php
							$seclet = "SELECT * FROM category ";
							$result = $conn->query($seclet);
							while ($row = $result -> fetch_assoc()) {
						?>
							['<?php echo $row['name'] ?>',
								<?php
									$id = $row['id'];
									$secletB = "SELECT * FROM products WHERE cat_id = $id ";
									$resultB = $conn -> query($secletB);
									$numB = $resultB ->num_rows;
									echo $numB;
								?>
							],
							<?php
								}
							?>
            ]);
            var options = {
            title: 'Category List Use',
            legend: 'none',
            pieSliceText: 'label',
            slices: {  4: {offset: 0.2},
                        12: {offset: 0.3},
                        14: {offset: 0.4},
                        15: {offset: 0.5},
            },
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
        </script>
    </head>
    <body>
        <div id="piechart" style="width: 80%; height: 500px;"></div>
    </body>
    </html>