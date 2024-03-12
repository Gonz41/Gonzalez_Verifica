<?php
class Dispositivo implements JsonSerializable{
    private $identificativo;

    function __construct($identificativo){
        $this->identificativo = $identificativo;
    }

    function getIdentificativo(){
        return $this->identificativo;
    }

    function jsonSerialize(){
        return[
            "identificativo"=>$this->identificativo
        ];
    }
}
?>