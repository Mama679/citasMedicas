<?php
/**
 * Control base manejo de uris y lanza procesos
 * Primer parametro: Controlador
 * Segundo parametro: Metodo
 * Lo siguiente parametros: Parametros o valores
 */

 class Control{
    function __construct()
    {
        //print "Bienvenid@ a la Aplicación";
        $url = $this->separarURL();
        var_dump($url);
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