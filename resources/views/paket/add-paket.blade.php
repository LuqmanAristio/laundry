@extends('layout-main.main')

@section('container')
<title>Tambah Paket</title>
<link rel="stylesheet" href="style-add-pegawai.css" type="text/css">

<div class="box">
    <div class="top-box">
        <div class="title-box">
            <i class='bx bxs-user-plus'></i>
            <h3> Tambah Data Paket Baru</h3>
        </div>
    </div>
    <div class="bot-box">
        <h3>SILAHKAN ISI DATA DIBAWAH INI</h3>
        <div class="box-form">
            <form action="#">
                <table>
                    <tr>
                        <td>ID Paket</td>
                        <td>Nama Paket</td>
                    </tr>
                    <tr>
                        <td><input type="text" value="0001" readonly></td>
                        <td><input type="text" placeholder="Masukan Nama..."></td>
                    </tr>
                    <tr>
                        <td class="gap"></td>
                        <td class="gap"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Masukan Harga Paket..."></td>
                        <td><input type="text" placeholder="Masukan Keterangan Paket..."></td>
                    </tr>
                    <tr>
                        <td class="gap"></td>
                        <td class="gap"></td>
                    </tr>
                </table>
                <button>Simpan</button>
                <button style="margin-left:10px">Reset</button>
                <button style="margin-left:10px">Kembali</button>
            </form>
        </div>
    </div>
</div>
@endsection