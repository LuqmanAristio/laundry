@extends('layout-main.main')

@section('container')
<title>Tambah Pegawai</title>
<link rel="stylesheet" href="style-add-pegawai.css" type="text/css">

<div class="box">
    <div class="top-box">
        <div class="title-box">
            <i class='bx bxs-user-plus'></i>
            <h3> Tambah Data Pegawai Baru</h3>
        </div>
    </div>
    <div class="bot-box">
        <h3>SILAHKAN ISI DATA DIBAWAH INI</h3>
        <div class="box-form">
            <form action="#">
                <table>
                    <tr>
                        <td>ID Pegawai</td>
                        <td>No KTP</td>
                    </tr>
                    <tr>
                        <td><input type="text" value="0001" readonly></td>
                        <td><input type="text" placeholder="0812346789"></td>
                    </tr>
                    <tr>
                        <td class="gap"></td>
                        <td class="gap"></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Masukan Nama Lengkap"></td>
                        <td><input type="text" placeholder="Masukan Email..."></td>
                    </tr>
                    <tr>
                        <td class="gap"></td>
                        <td class="gap"></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>Alamat Tinggal</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Masukan No Telepon"></td>
                        <td><input type="text" placeholder="Masukan Alamat Tinggal"></td>
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