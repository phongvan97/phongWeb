<div class="inner-block">
    <div class="chart-main-block">
        <div class="chart-first-line">
            <div class="col-md-6 chart-blo-1">
                <div class="dygno">
                    <h2>Doughnut</h2>

                    <canvas id="doughnut" height="375" width="587" style="width: 470px; height: 300px;"></canvas>
                    <script>
                        var doughnutData = [
                            {
                                value: 30,
                                color:"#337AB7"
                            },
                            {
                                value : 50,
                                color : "#929292"
                            },
                            {
                                value : 100,
                                color : "#FC8213"
                            },
                            {
                                value : 40,
                                color : "#68AE00"
                            },
                        ];
                        new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>
            </div>
            <div class="col-md-6 chart-blo-1">
                <div class="line-chart">
                    <h3>Line Chart</h3>
                    <canvas id="line" height="375" width="700" style="width: 560px; height: 300px;"> </canvas>
                    <script>
                        var lineChartData = {
                            labels : ["","","","","","",""],
                            datasets : [
                                {
                                    fillColor : "rgba(252, 130, 19, 0.74)",
                                    strokeColor : "#FC8213",
                                    pointColor : "#FC8213",
                                    pointStrokeColor : "#fff",
                                    data : [65,59,90,81,56,55,40]
                                },
                                {
                                    fillColor : "rgba(51, 122, 183, 0.71)",
                                    strokeColor : "#337AB7",
                                    pointColor : "#337AB7",
                                    pointStrokeColor : "#fff",
                                    data : [28,48,40,19,96,27,100]
                                }
                            ]

                        };
                        new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);

                    </script>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="chart-second-line">
            <div class="col-md-6 chart-blo-1">
                <div class="polararea">
                    <h3>Polar Chart</h3>
                    <canvas id="polarArea" height="337" width="500" style="width: 400px; height: 270px;"></canvas>
                    <script>
                        var chartData = [
                            {
                                value : Math.random(),
                                color: "#FC8213"
                            },
                            {
                                value : Math.random(),
                                color: "#68AE00"
                            },
                            {
                                value : Math.random(),
                                color: "#337AB7"
                            },
                            {
                                value : Math.random(),
                                color: "#FC8213"
                            },
                            {
                                value : Math.random(),
                                color: "#68AE00"
                            },
                            {
                                value : Math.random(),
                                color: "#337AB7"
                            }
                        ];
                        new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
                    </script>
                </div>
            </div>
            <div class="col-md-6 chart-blo-1">
                <div class="chart-other">
                    <h3>Pie</h3>
                    <canvas id="pie" height="337" width="587" style="width: 470px; height: 270px;"></canvas>
                    <script>
                        var pieData = [
                            {
                                value: 30,
                                color:"#337AB7"
                            },
                            {
                                value : 50,
                                color : "#FC8213"
                            },
                            {
                                value : 100,
                                color : "#8BC34A"
                            }

                        ];
                        new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
                    </script>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>