@extends('layout-main.main')


@section('container')
<link rel="stylesheet" href="style-layout-laporan.css" type="text/css">
<title>Laporan</title>

<div class="grafik-penjualan">
	<div class="grafik">
		<canvas id="linechart"></canvas>
	</div>
</div>

<div class="cetak1">
	<table class="cetaknya">
		<form>
			<tr class="top">
				<td>Pilih Bulan</td>
				<td>Pilih Tahun</td>
				<td>Aksi</td>
			</tr>
			<tr>
				<td>
					<select class="drop">
                        <option value="">Januari</option>
                        <option value="">Februari</option>
                        <option value="">Maret</option>
                        <option value="">April</option>
                        <option value="">Mei</option>
                        <option value="">Juni</option>
                        <option value="">Juli</option>
                        <option value="">Agustus</option>
                        <option value="">September</option>
                        <option value="">Oktober</option>
                        <option value="">November</option>
                        <option value="">Desember</option>
                    </select>
                </td>
				<td>
					<select class="drop">
                        <option value="">2010</option>
                        <option value="">2011</option>
                        <option value="">2012</option>
                        <option value="">2013</option>
                        <option value="">2014</option>
                        <option value="">2015</option>
                        <option value="">2016</option>
                        <option value="">2017</option>
                        <option value="">2018</option>
                        <option value="">2019</option>
                        <option value="">2020</option>
                        <option value="">2021</option>
                    </select>
				</td>
				<td>
					<a href="#" class="cari"> Cari </a>
				</td>
			</tr>
		</form>
	</table>
</div>

<div class="cetak1">
	<table class="cetaknya">
		<form>
			<tr class="top">
				<td>Pilih Tahun</td>
				<td>Aksi</td>
			</tr>
			<tr>
				<td>
					<select class="drop">
                        <option value="">2010</option>
                        <option value="">2011</option>
                        <option value="">2012</option>
                        <option value="">2013</option>
                        <option value="">2014</option>
                        <option value="">2015</option>
                        <option value="">2016</option>
                        <option value="">2017</option>
                        <option value="">2018</option>
                        <option value="">2019</option>
                        <option value="">2020</option>
                        <option value="">2021</option>
                    </select>
				</td>
				<td>
					<a href="#" class="cari"> Cari </a>
				</td>
			</tr>
		</form>
	</table>
</div>

<div class="list-selesai">
	<table>
		<tr class="thnya">
			<td>No</td>
			<td>ID Transaksi</td>
			<td>Tanggal</td>
			<td>Nama</td>
			<td>Nominal Transaksi</td>
			<td style="text-align: center;">Aksi</td>
		</tr>
		<tr>
			<td>1</td>
			<td>0001</td>
			<td>17/08/02</td>
			<td>Luqman</td>
			<td>Rp 70.000</td>
			<td class="c">
                <a href="" class="detail">Detail</a>
            </td>
		</tr>
		<tr>
			<td>2</td>
			<td>0001</td>
			<td>17/08/02</td>
			<td>Luqman</td>
			<td>Rp 70.000</td>
			<td class="c">
                <a href="" class="detail">Detail</a>
            </td>
		</tr>
		<tr>
			<td>3</td>
			<td>0001</td>
			<td>17/08/02</td>
			<td>Luqman</td>
			<td>Rp 70.000</td>
			<td class="c">
                <a href="" class="detail">Detail</a>
            </td>
		</tr>
		<tr>
			<td>4</td>
			<td>0001</td>
			<td>17/08/02</td>
			<td>Luqman</td>
			<td>Rp 70.000</td>
			<td class="c">
                <a href="" class="detail">Detail</a>
            </td>
		</tr>
		<tr>
			<td>5</td>
			<td>0001</td>
			<td>17/08/02</td>
			<td>Luqman</td>
			<td>Rp 70.000</td>
			<td class="c">
                <a href="" class="detail">Detail</a>
            </td>
		</tr>
	</table>
</div>

<button>
	Cetak
</button>


<script>
		const labels = [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'Mei',
                'Jun',
                'Jul',
                'Agu',
                'Sep',
                'Okt',
                'Nov',
                'Des',
                ];

                const data = {
                labels: labels,
                datasets: [{
                label: 'Total Order',
                backgroundColor: '#191E20',
                borderColor: 'rgb(255, 99, 132)',
                borderRadius : 5,
                data: [15, 10, 8, 10, 6, 4, 8, 20, 5, 12, 31, 10],
                
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