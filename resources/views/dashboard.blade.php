@extends('layout-main.main')

@section('container')
<title>Dashboard</title>
<link rel="stylesheet" href="style-layout-dashboard.css" type="text/css">

        <div class="date">
                <div class="welcome">Welcome Back !</div>
                <div class="tanggal"><?php $tgl=date('l, d-m-Y'); echo $tgl; ?></div>
        </div>

        <div class="basic-info">
                <div class="box-1">
                        <div class="ikon" style="background-color: #191E20;">
                                <i class='bx bxs-user'></i>
                        </div>
                        <div class="judul">
                                <h3>20</h3>
                                <h4>Pelanggan</h4>
                        </div>
                        <hr class="garis">
                        <h5 class="waktu">Hari Ini</h5>
                </div>
                <div class="box-2">
                        <div class="ikon" style="background-color: #A46460;">
                                <i class='bx bxs-user-detail' ></i>
                        </div>
                        <div class="judul">
                                <h3>20</h3>
                                <h4>Karyawan</h4>
                        </div>
                        <hr class="garis">
                        <h5 class="waktu">Hari Ini</h5>
                </div>
                <div class="box-2">
                        <div class="ikon" style="background-color: #C4CDD0;">
                                <i class='bx bxs-food-menu'></i>
                        </div>
                        <div class="judul">
                                <h3>20</h3>
                                <h4>Pesanan</h4>
                        </div>
                        <hr class="garis">
                        <h5 class="waktu">Hari Ini</h5>
                </div>
                <div class="box-2">
                        <div class="ikon" style="background-color: #94A4B0;">
                                <i class='bx bxs-book-bookmark' ></i>
                        </div>
                        <div class="judul">
                                <h3>20</br></h3>  
                                <h4>Pesanan</h4>
                        </div>
                        <hr class="garis">

                        <h5 class="waktu">Bulan Ini</h5>
                </div>
        </div>

        <div class="grafikorder">
                <div class="infografik">
                        <h3>GRAFIK PENJUALAN</h3>
                        <div class="grafik">
                                <canvas id="linechart"></canvas> 
                        </div>
                </div>
                <div class="order">
                        <hr>
                        <h3>ORDER TERBARU</h3>
                        
                        <div class="tabel">
                                <table>
                                        <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>Luqman Aristio</td>
                                                <td>17/08/02</td>
                                                <td>Proses</td>
                                        </tr>
                                        <tr>
                                                <td>2</td>
                                                <td>Adi Priana</td>
                                                <td>17/08/02</td>
                                                <td>Proses</td>
                                        </tr>
                                        <tr>
                                                <td>3</td>
                                                <td>Yulia Damayanti</td>
                                                <td>17/08/02</td>
                                                <td>Proses</td>
                                        </tr>
                                        <tr>
                                                <td>4</td>
                                                <td>Ira Arituddiniyah</td>
                                                <td>17/08/02</td>
                                                <td>Proses</td>
                                        </tr>
                                        <tr>
                                                <td>5</td>
                                                <td>Oning Pusparama</td>
                                                <td>17/08/02</td>
                                                <td>Proses</td>
                                        </tr>
                                        <tr>
                                                <td>6</td>
                                                <td>Luqman Aristio</td>
                                                <td>17/08/02</td>
                                                <td>Proses</td>
                                        </tr>
                                </table>
                        </div>
                        
                </div>
        </div>
        
        <script>
		const labels = [
                'Senin',
                'Selasa',
                'Rabu',
                'Kamis',
                'Jumat',
                'Sabtu',
                'Minggu',
                ];

                const data = {
                labels: labels,
                datasets: [{
                label: 'Total Pesanan',
                backgroundColor: '#191E20',
                borderColor: 'rgb(255, 99, 132)',
                borderRadius : 5,
                data: [15, 10, 8, 10, 6, 4, 8],
                
                }]
                };

                const config = {
                type: 'bar',
                data: data,
                options: {
                        plugins: {
                        legend: {
                                labels: {
                                // This more specific font property overrides the global property
                                font: {
                                        size: 14
                                }
                                }
                        }
                        }
                }
                };

                const myChart = new Chart(
                document.getElementById('linechart'),
                config
                );
	</script>
@endsection