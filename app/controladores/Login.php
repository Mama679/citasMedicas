<?php
class Login extends Controlador
{
    function __construct()
    {
        print "<h1>Hola desde el Controlador Login</h1>";
    }

    public function inicio()
    {
        print "Hola Metodo inicio<br>";
    }

    public function metodoVariables()
    {
        if(func_num_args() > 0)
        {
            for($i=0; $i <func_num_args(); $i++)
            {
                print func_get_arg($i)."<br>";
            }
        }
        else
        {
            print "No hay parametros.";
        }
    }

    public function metodoFijo($p1="Uno", $p2="Dos", $p3="Tres")
    {
        print $p1."<br>";
        print $p2."<br>";
        print $p3."<br>";
    }
}
?>