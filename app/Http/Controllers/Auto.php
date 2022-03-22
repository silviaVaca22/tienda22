<?php
namespace App\Http;
class Auto
{
    public $color;
    public $modelo;
    public $año;
    public $funcional;
    
    function arrancar()
    {
        echo ' <p> El automovel esta arrancando <p>';
    }
    function mostrar()
    {
        echo ' echo <p> el Color del auto es:'. $this-> color . '</p>';
        echo ' echo <p> el Modelo del auto es:'. $this-> modelo . ' </p>';
        echo ' echo <p> el Año del auto es:'. $this-> año . '</p>';
        echo ' echo <p> el Auto e funcional: '. $this-> funcional . '</p>';
        echo '<hr>';
        If($this->funcional)
        {
	        echo '<p> el auto es funcional</p>';
        }
        else
        {
            echo '<p> el auto NO es funcional</p>';
        }


    }
}