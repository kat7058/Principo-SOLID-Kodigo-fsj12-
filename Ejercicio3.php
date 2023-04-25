<?php
/** El principio que fue violado es el de OPEN-CLOSED el cual dice "Los objetos o entidades deben estar abiertos para la extension,
 *  pero cerrados para la modificacion."
 * Solucion:
 * Se crearon dos clases que implementan extesiones pero que estan cerradas a modificaciones
 * es decir si se tiene que agregar otro tipo de pago como con tarjeta de debito o otros ya no se tendria que modificar
 * la funcion tipopago caada vez que se agregara algun tipo de pago.
 *  */
interface Pago{
    public function transferencia($cantidad);
}

class TarjetaCredito implements TipoPago {
    public function transferencia($cantidad){
        return "El pago se realizara con tarjeta de credito";

    }
}
 
class Paypal implements TipoPago {
    public function transferencia($cantidad){
        return "El pago se realizara a traves de Paypal";

    }
    
}


?>