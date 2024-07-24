<div class="card flex-fill w-100">
    <div class="card-header">
        <div class="card-actions float-end">
            <div class="dropdown show">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"
                    class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-more-horizontal align-middle">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="19" cy="12" r="1"></circle>
                        <circle cx="5" cy="12" r="1"></circle>
                    </svg>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <h5 class="card-title mb-0">Browser Usage</h5>
    </div>
    <div class="card-body d-flex">
        <div class="align-self-center w-100">
            <div class="py-3">
                <div class="chart chart-xs">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="chartjs-dashboard-pie" width="314" height="150"
                        style="display: block; width: 314px; height: 150px;"
                        class="chartjs-render-monitor"></canvas>
                </div>
            </div>

            <table class="table mb-0">
                <tbody>
                    <tr>
                        <td><i class="fas fa-circle text-primary fa-fw"></i> Chrome <span
                                class="badge badge-success-light">+12%</span></td>
                        <td class="text-end">4306</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle text-warning fa-fw"></i> Firefox <span
                                class="badge badge-danger-light">-3%</span></td>
                        <td class="text-end">3801</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle text-danger fa-fw"></i> Edge</td>
                        <td class="text-end">1689</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle text-dark fa-fw"></i> Other</td>
                        <td class="text-end">3251</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Chrome", "Firefox", "IE", "Other"],
                datasets: [{
                    data: [4306, 3801, 1689, 3251],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger,
                        "#E8EAED"
                    ],
                    borderWidth: 5,
                    borderColor: window.theme.white
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 70
            }
        });
    });
</script>