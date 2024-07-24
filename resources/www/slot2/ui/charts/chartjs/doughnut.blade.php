<div class="chart chart-sm">
    <div class="chartjs-size-monitor">
        <div class="chartjs-size-monitor-expand">
            <div class=""></div>
        </div>
        <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
        </div>
    </div>
    <canvas id="chartjs-doughnut" width="667" height="250" style="display: block; width: 667px; height: 250px;"
        class="chartjs-render-monitor"></canvas>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Doughnut chart
        new Chart(document.getElementById("chartjs-doughnut"), {
            type: "doughnut",
            data: {
                labels: ["Social", "Search Engines", "Direct", "Other"],
                datasets: [{
                    data: [260, 125, 54, 146],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.success,
                        window.theme.warning,
                        "#dee2e6"
                    ],
                    borderColor: "transparent"
                }]
            },
            options: {
                maintainAspectRatio: false,
                cutoutPercentage: 65,
                legend: {
                    display: false
                }
            }
        });
    });

</script>
