<?php 


class About extends Controller{
    public function index($nama = "anonim", $pekerjaan = "belum diketahui"){
        $data['judul'] = "About Me";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = "My Pages";

        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}