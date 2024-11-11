<?php

require_once '../Model/ListBuku.php';

class BukuController{

    public function jalankan(){

        // Mengggunaka model 
        $daftar_buku_model = new Listbuku();
        $daftar_buku = $daftar_buku_model->getData();

        //mengirim dan menampilkan data ke view
        include_once "../Buku/BukuView.php";

    }
}