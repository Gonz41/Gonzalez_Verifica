<?php
class RilevatoreDiUmidita extends Rilevatore implements JsonSerializable{
    private $posizione;

    function __construct($identificativo,$misurazioni,$unitaDiMisura,$sogliaDiAllarme,$codiceSeriale,$posizione){
        parent::__construct($identificativo,$misurazioni,$unitaDiMisura,$sogliaDiAllarme,$codiceSeriale);
        $this->posizione = $posizione;
    }

    function getPosizione(){
        return $this->posizione;
    }

    function jsonSerialize(){
        return[
            parent::jsonSerialize(),
            "posizione"=>$this->posizione,
        ];
    }
}

?>