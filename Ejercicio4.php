<?php
/** El principio violado fue el de INTERFACE SEGREGATION el cual dice "Nunca se debe obligar
 * a un cliente a implementar una interfaz que no usa y no se debe obligar a los clientes a depender de metodos que no usan".
 * Solucion:
 * Se implementaron multiples interfaces para evitar que las clases 
 * dependan de metodos que no usan y tampoco a implementar interfaces que no usan. */
interface exportarPDF{
    public function PDF();

}
interface exportarJSON{
    public function JSON();

}
interface exportarText{
    public function Text();

}

class BoletaPago implements exportarPDF{
    public function PDF(){
        return " Boleta de pago en formato PDF";
    }

}

class Mensaje implements exportarText{
    public function Text(){
        return "Mostrar mensaje tipo text";
    }
}


?>