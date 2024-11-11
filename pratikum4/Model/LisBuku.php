<?php

require_once "Buku,php";

class ListBuku{

    public function getData(){
        $list_buku = array(
            new Buku('Belajar PHP Dasar', 'James W.', 'informatika','2024'),
            new Buku('Matematika Diskrit', 'Emely S.', 'Andi publisher', '2017'),
            new Buku('Kalkulus 2', 'Robert R.', 'Erlangga', '2020'),
            new Buku('Metode penelitian', 'Santi O', 'informatika', '2018')
        );

        return $list_buku;
    }

}