<?php
/**
 * Control base manejo de uris y lanza procesos
 * Primer parametro: Controlador
 * Segundo parametro: Metodo
 * Lo siguiente parametros: Parametros o valores
 */
 class Control{

    private $controlador = "Login";
    private $metodo = "Caratula";
    private $parametros = [];

    function __construct()
    {
        //print "Bienvenid@ a la Aplicación";
        $url = $this->separarURL();
        if($url != "" && file_exists('../app/controladores/'.ucwords($url[0]).".php"))
        {
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
            var_dump($url);
        }
        //Cargamos la clase del controlador
        require_once("../app/controladores/".ucwords($this->controlador).".php");
        $this->controlador = new $this->controlador;
    }

    public function separarURL()
    {
        $url = "";
        if(isset($_GET['url']))
        {
            //eliminar caracter final
            $url = rtrim($_GET['url'],"/");
            $url = rtrim($_GET['url'],"\\");
            //sanatizamos
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode("/",$url);
        }

        return $url;
    }
 }
?>