<?php
class DispositivoDiAlarme implements JsonSerializable{
    private $numeroDiTelefono;
    private $identificativo,
    function __construct($identificativo, $numeroDiTelefono){
        $this->identificativo = $identificativo;
        $this->numeroDiTelefono = $numeroDiTelefono;
    }

    function getNumeroDiTelefono(){
        return $this->numeroDiTelefono;
    }

    function getId(){
        return $this->identificativo;
    }

    function jsonSerialize(){
        return[
            "id"=>$this->identificativo,
            "numeroDiTelefono"=>$this->numeroDiTelefono
        ];
    }
}

?>