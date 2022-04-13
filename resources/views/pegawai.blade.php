@extends('layout-main.main')


@section('container')
<link rel="stylesheet" href="style-layout-pegawai.css" type="text/css">
<title>Pegawai</title>
        <div class="info-pegawai">
                <div class="info-aktif">
                        <div class="pegawai">
                                <h3>30</h3>
                                <h4>Pegawai Aktif</h4>
                        </div>
                        <div class="logo-peg">
                                <i class='bx bxs-user-check'></i>
                        </div>
                </div>
                <div class="info-mati">
                        <div class="pegawai">
                                <h3>30</h3>
                                <h4>Pegawai Non-Aktif</h4>
                        </div>
                        <div class="logo-peg">
                                <i class='bx bxs-user-x' ></i>
                        </div>
                </div>
        </div>
        <div class="list-pegawai">
                <div class="top-list">
                        <div class="kotak-kiri">
                                <i class='bx bxs-user-account'></i>
                                <h4>Daftar Pegawai</h4>
                        </div>
                        
                </div>
                <div class="bot-list">
                        <div class="search-add">
                                <a href="/tambah-pegawai">
                                <div class="add-peg">
                                        <i class='bx bx-plus' ></i>
                                        <h4>Tambah Pegawai</h4>   
                                </div>
                                </a>
                                <form action="#" class="cari-peg">
                                        <i class='bx bxs-user' ></i>
                                        <input type="search" placeholder="Cari ID Pegawai..." class="cari-form">
                                        <button>CARI</button>
                                </form>
                                
                        </div>
                        <div class="daftar-peg">
                                <table>
                                        <tr class="thnya">
                                                <td>ID</td>
                                                <td>Nama</td>
                                                <td>No Telepon</td>
                                                <td>Alamat</td>
                                                <td class="tengah">Status</td>
                                                <td class="tengah">Detail</td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="status"><p>Aktif</p></td>
                                                <td class="detail"><a href="#">Detail</a></td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="status"><p>Aktif</p></td>
                                                <td class="detail"><a href="#">Detail</a></td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="status"><p>Aktif</p></td>
                                                <td class="detail"><a href="#">Detail</a></td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="status"><p>Aktif</p></td>
                                                <td class="detail"><a href="#">Detail</a></td>
                                        </tr>
                                </table>
                        </div>
                        <div class="kolom-list">
                        <nav>
                                <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                                <a href=""> << Previous</a>
                                        </li>
                                        <li>
                                                <a href="">1</a>
                                                <a href="">2</a>
                                                <a href="">3</a>
                                        </li>
                                        <li class="page-item">
                                                <a href="">Next >> </a>
                                        </li>
                                </ul>
		        </nav>
                        </div>
                </div>
        </div>
@endsection