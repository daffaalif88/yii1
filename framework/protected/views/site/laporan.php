<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<div class="p-5 mb-4 rounded-3" style="background-color: #B0EBB4;">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Jumlah Peserta Yang Mengikuti Diklat 1 Tahun Terakhir</h1>
        <p class="col-md-8 fs-4"></p>
        <canvas id="pendaftaranChart" width="400" height="200"></canvas>

        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
        <script>
            var ctx = document.getElementById('pendaftaranChart').getContext('2d');
            var pendaftaranChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?= json_encode(array_column($data, 'month')) ?> ,
                    datasets: [{
                        label: 'Jumlah Pendaftaran',
                        data: <?= json_encode(array_column($data, 'count')) ?> ,
                        backgroundColor: 'rgba(255, 8, 0, 0.3)',
                        borderColor: 'rgba(255, 0, 0, 0.8)',
                        borderWidth: 5
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 rounded-3" style="background-color: #BFF6C3;">
            <h2>Keaktifan Peserta Diklat Dalam 1 Tahun Terakhir</h2>
            <!-- <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                mix and match with additional component themes and more.</p> -->
            <canvas id="kehadiranChart" width="400" height="200"></canvas>

            <script>
                var ctx = document.getElementById('kehadiranChart').getContext('2d');
                var kehadiranChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: <?= json_encode(array_column($data2, 'month')) ?> ,
                        datasets: [{
                            label: 'Jumlah Kehadiran',
                            data: <?= json_encode(array_column($data2, 'count')) ?> ,
                            backgroundColor: 'rgba(71, 62, 255, 0.3)',
                            borderColor: 'rgba(71, 62, 255, 0.8)',
                            borderWidth: 5
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            <!-- <button class="btn btn-outline-dark" type="button">Example button</button> -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 border rounded-3" style="background-color: #E0FBE2;">
            <h2>Informasi Data</h2>
            <p>Peserta Data:</p>
            <p><?php echo CHtml::link('View Detail', array('/peserta/index'), array('class' => 'btn btn-outline-secondary '));?>
			</p>
            <hr>
            <p>Kehadira Data:</p>
            <p><?php echo CHtml::link('View Detail', array('/kehadiran/index'), array('class' => 'btn btn-outline-secondary'));?>
			</p>
        </div>
    </div>
</div>