<?php
/** El principio que fue violado es el de LISKOV SUBSTITUTION el cual dice que " Cada subclase o clase derivada debe ser 
 * sustituible por su clase base o padre"
 * Solucion:
 * Se empleo una abstracion correcta para cada clase, la creacion y utilizacion de metodos necesarios sin necesidad de usar 
 * excepciones y asi los mismos metodos pueden ser utilizados en distintas clases.
 */
interface mayorDeEdad{
    public function pago();
}

interface menorDeEdad{
    public function estudiar();
}

class Adulto implements mayorDeEdad{
    public function pago(){
        echo "Es mayor de edad puede pagar";
    }
}

class Niño implements menorDeEdad{
    public function studiar(){
        echo "Es menor de edad debe estudiar";
    }
}


?>