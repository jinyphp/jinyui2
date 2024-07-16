<div class="chart">
    <div class="chartjs-size-monitor">
        <div class="chartjs-size-monitor-expand">
            <div class=""></div>
        </div>
        <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
        </div>
    </div>
    <canvas id="chartjs-polar-area" width="667" height="300" style="display: block; width: 667px; height: 300px;"
        class="chartjs-render-monitor"></canvas>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Polar Area chart
        new Chart(document.getElementById("chartjs-polar-area"), {
            type: "polarArea",
            data: {
                labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
                datasets: [{
                    label: "Model S",
                    data: [35, 38, 65, 70, 24],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.success,
                        window.theme.danger,
                        window.theme.warning,
                        window.theme.info
                    ]
                }]
            },
            options: {
                maintainAspectRatio: false
            }
        });
    });

</script>
