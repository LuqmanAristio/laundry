@extends('layout-main.main')


@section('container')
<title>Transaksi</title>
<link rel="stylesheet" href="style-layout-transaksi.css" type="text/css">
<link rel="stylesheet" href="style-layout-pelanggan-paket.css" type="text/css">

        <div class="info-transaksi">
                <div class="box-info">
                        <div class="left-img">
                                <img src="image/checklist.png" alt="">
                        </div>
                        <div class="right-text">
                                <h3>10</h3>
                                <h4>Pesanan Hari Ini</h4>
                        </div>
                </div>
                <div class="box-info">
                        <div class="left-img">
                                <img src="image/checklist-bulan.png" alt="">
                        </div>
                        <div class="right-text">
                                <h3>70</h3>
                                <h4>Pesanan Bulan Ini</h4>
                        </div>   
                </div>
                <div class="box-info">
                        <div class="left-img">
                                <img src="image/salary.png" alt="">
                        </div>
                        <div class="right-text">
                                <h3>Rp 170.000</h3>
                                <h4>Pemasukan Hari Ini</h4>
                        </div>
                </div>
                <div class="box-info">
                        <div class="left-img">
                                <img src="image/earnings.png" alt="">
                        </div>
                        <div class="right-text">
                                <h3>Rp 5.000.000</h3>
                                <h4>Pemasukan Bulan Ini</h4>
                        </div>
                </div>
        </div>
        <div class="list-transaksi">
                <div class="top-list">
                        <div class="kotak-kiri-trx">
                                <i class='bx bxs-user-account'></i>
                                <h4>Transaksi Pesanan</h4>
                        </div>
                        
                </div>
                <div class="bot-list">
                        <div class="left-trx">
                                <div class="trx-top">
                                        <i class='bx bxs-user-circle'></i>
                                        <h2>Luqman Aristio</h2>
                                </div>
                                <div class="form-trx">
                                        <div class="top-form">
                                                <h3>Form Transaksi</h3>
                                        </div>
                                        <div class="input-form">
                                                <form action="#">
                                                        <table class="formnya">
                                                                <tr>
                                                                        <td class="title">Tanggal</td>
                                                                        <td><input type="text" readonly value="<?php $tgl=date('d/m/Y'); echo $tgl; ?>"></td>
                                                                        <td class="title-unik">ID</td>
                                                                        <td>
                                                                                <select>
                                                                                        <option value="">Non Member</option>
                                                                                        <option value="">00001 - Luqman</option>
                                                                                        <option value="">00001 - Luqman</option>
                                                                                        <option value="">00001 - Luqman</option>
                                                                                        <option value="">00001 - Luqman</option>
                                                                                </select>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                        <td class="title">Kuantitas</td>
                                                                        <td><input type="text"></td>
                                                                        <td class="title-unik">Paket</td>
                                                                        <td>
                                                                                <select>
                                                                                        <option value="">001 - Regular</option>
                                                                                        <option value="">001 - Regular</option>
                                                                                        <option value="">001 - Regular</option>
                                                                                        <option value="">001 - Regular</option>
                                                                                        <option value="">001 - Regular</option>
                                                                                </select>
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                        <td class="title">Pembayaran</td>
                                                                        <td>
                                                                                <select>
                                                                                        <option value="">Cash</option>
                                                                                        <option value="">QRIS</option>
                                                                                        <option value="">Transfer</option>
                                                                                </select>
                                                                        </td>
                                                                        <td class="tombol" colspan="2">
                                                                                <button>PROSES</button>
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                </form>
                                        </div>                                        
                                </div>   
                        </div>
                        <div class="right-trx">
                                <div class="line-top">

                                </div>
                                <h2 class="title-pes">PESANAN TERBARU</h2>

                                <div class="list-pesanan">
                                        <a href="">Menu Pesanan</a>
                                </div>

                                <div class="order">
                                        <div class="tabel">
                                        <table class="list-order">
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
                                        </table>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection