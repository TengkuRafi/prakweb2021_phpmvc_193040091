<?php

class About {
    public function index($nama ='Tengku', $pekerjaan ='Mahasiswa')
    {
        echo "Halo, Nama Saya $nama, Saya adalah seorang $pekerjaan Informatika Unpas";
    }
    public function page()
    {
        echo 'About/page';
    }
}