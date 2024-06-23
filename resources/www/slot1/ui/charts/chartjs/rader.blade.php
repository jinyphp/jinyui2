<div class="chart">
    <div class="chartjs-size-monitor">
        <div class="chartjs-size-monitor-expand">
            <div class=""></div>
        </div>
        <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
        </div>
    </div>
    <canvas id="chartjs-radar" width="667" height="300" style="display: block; width: 667px; height: 300px;"
        class="chartjs-render-monitor"></canvas>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Radar chart
        new Chart(document.getElementById("chartjs-radar"), {
            type: "radar",
            data: {
                labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
                datasets: [{
                    label: "Model X",
                    backgroundColor: "rgba(0, 123, 255, 0.2)",
                    borderColor: window.theme.primary,
                    pointBackgroundColor: window.theme.primary,
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: window.theme.primary,
                    data: [70, 53, 82, 60, 33]
                }, {
                    label: "Model S",
                    backgroundColor: "rgba(220, 53, 69, 0.2)",
                    borderColor: window.theme.danger,
                    pointBackgroundColor: window.theme.danger,
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: window.theme.danger,
                    data: [35, 38, 65, 85, 84]
                }]
            },
            options: {
                maintainAspectRatio: false
            }
        });
    });

</script>
