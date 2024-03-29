<?php
/*
Tengku Muhammad Rafi
193040091
https://github.com/TengkuRafi/prakweb2021_phpmvc_193040091
Pertemuan4
Mengerjakan MVC Vidio 5
1 Oktober 2021
*/


class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();

        // controller
        if($url == NULL)
        {
     $url = [$this->controller];
 }
if(file_exists('../app/controllers/'. $url[0] . '.php'))
 {
     $this->controller = $url[0];
     unset($url[0]);
 }

         require_once '../app/controllers/' . $this->controller . '.php';
         $this->controller = new $this->controller; 

        //  method
        if (isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // parameter

        if (!empty($url)){
            $this->params = array_values($url);
            
        }

        // jalankan controller dan method,  serta kirimkan params jika ada

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
        if(isset($_GET['url'])){

            $url = rtrim ($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}
?> 