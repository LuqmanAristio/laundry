@extends('layout-main.main')


@section('container')
<title>Pelanggan</title>
<link rel="stylesheet" href="style-layout-pelanggan-paket.css" type="text/css">

<div class="list-pelanggan">
                <div class="top-list">
                        <div class="kotak-kiri">
                                <i class='bx bxs-user-account'></i>
                                <h4>Daftar Pelanggan</h4>
                        </div>
                        
                </div>
                <div class="bot-list">
                        <div class="search-add">
                                <a href="/tambah-pelanggan">
                                <div class="add-peg">
                                        <i class='bx bx-plus' ></i>
                                        <h4>Tambah Pelanggan</h4>
                                </div>
                                </a>
                                <form action="#" class="cari-peg">
                                        <i class='bx bxs-user' ></i>
                                        <input type="search" placeholder="Cari ID Pelanggan..." class="cari-form">
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
                                                <td class="tengah">Action</td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="detail">
                                                        <a href="" class="edit"><i class='bx bxs-edit'></i></a>
                                                        <a href="" class="delete"><i class='bx bxs-trash' ></i></a>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="detail">
                                                        <a href="" class="edit"><i class='bx bxs-edit'></i></a>
                                                        <a href="" class="delete"><i class='bx bxs-trash' ></i></a>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="detail">
                                                        <a href="" class="edit"><i class='bx bxs-edit'></i></a>
                                                        <a href="" class="delete"><i class='bx bxs-trash' ></i></a>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>001</td>
                                                <td>Luqman</td>
                                                <td>08123456789</td>
                                                <td>Denpasar</td>
                                                <td class="detail">
                                                        <a href="" class="edit"><i class='bx bxs-edit'></i></a>
                                                        <a href="" class="delete"><i class='bx bxs-trash' ></i></a>
                                                </td>
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