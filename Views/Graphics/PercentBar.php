<?php

namespace View\Graphics;

$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root . "/SistemaTutoriaFIUAEMex/View/Graphics/Displayable.php");

use View\Graphics\Displayable;

/**
 * Grados para el formato condicional.
 */
enum grade {
    case LOW;
    case HIGH;
}

/**
 * Barra de porcentaje con formato condicional.
 * 
 * @author Santi <ssotov001@alumno.uaemex.mx>
 */
Class PercentBar implements Displayable{
    /**
     * Valor del relleno de la barra de porcentaje.
     * 
     * @var int
     */
    public $value;

    /**
     * Grado del formato condicional.
     * "low" es menor o igual a 50 y "high" es mayor a 50.
     * 
     * @var string;
     */
    public $grade;

    /**
     * Constructora de barra de porcentaje.
     * 
     * Crea una nueva barra de porcentaje con base en el valor dado.
     * 
     * @param int $value Valor de porcentaje que se desea mostrar entre 0 y 100.
     * 
     * @return PercentBar
     */
    function __construct($value) {
        $this -> value = $value;

        $this->grade = $value > 50 ? grade::HIGH : grade::LOW;
    }

    /**
     * Implementacion de metodo abstracto.
     * 
     * Implementacion del metodo display de la interfaz Displayable. 
     * Renderiza la imagen de la barra de porcentaje considerando el formato condicional.
     */
    function display() {
        ?>
            <div class="percent-bar percent-bar-<?php echo $this->grade == grade::HIGH ? "high" : "low"; ?>">
                <div class="percent-fill percent-fill-<?php echo $this->grade == grade::HIGH ? "high" : "low"; ?>" 
                style="width:<?php echo $this -> value; ?>%">
                    <?php echo $this -> value; ?>%
                </div>
            </div>
        <?php
    }
}