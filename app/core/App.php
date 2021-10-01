<?php
/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_phpmvc_193040091
Pertemuan3
Mengerjakan MVC Vidio 3
1 Oktober 2021
*/


class App {
    public function __construct()
    {
        $url = $this-> parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);   
            return $url;
        }
    }

}