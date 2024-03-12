<?php
class Rilevatore  implements JsonSerializable{
    private $identificativo;
    private $misurazioni;
    private $unitaDiMisura;
    private $sogliaDiAllarme;
    private $codiceSeriale;

    function __construct($identificativo,$misurazioni,$unitaDiMisura,$sogliaDiAllarme,$codiceSeriale){
        $this->identificativo = $identificativo;
        $this->misurazioni = [
            31331=>"valore1";
            34122=>"valore2";
            3412=>"valore3";
        ];
        $this->unitaDiMisura = $unitaDiMisura;
        $this->sogliaDiAllarme = $sogliaDiAllarme;
        $this->codiceSeriale = $codiceSeriale;
    }

    function jsonSerializable(){
        return[
            parent::jsonSerializable();
            "misurazioni"=>$this->misurazioni,
            "unitaDiMi"
        ];
    }


    
}

?>