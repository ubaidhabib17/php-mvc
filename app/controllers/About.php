<?php 


class About{
    public function index($nama = "anonim", $pekerjaan = "belum diketahui"){
        echo "Halo nama saya $nama , pekerjaan saya $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}