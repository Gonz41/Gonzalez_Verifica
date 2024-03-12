<?php
class Impianto implements JsonSerializable{
    private $nome;
    private $latitudine;
    private $longitudine;
    private $dispositivoDiAllarme;
    private $rilevatore;

    function __construct($nome,$latitudine,$longitudine){
        $this->nome = $nome;
        $this->latitudine = $latitudine;
        $this->longitudine = $longitudine;
    }

    function getNome(){
        return $this->nome;
    }

    function getLatitudine(){
        return $this->latitudine;
    }

    function addDispositivo($dispositivo){
        array_push($this->dispositivi,$dispositivo);
    }

    function addRilevatore($rilevatori){
        array_push($this->rilevatore, $rilevatori);
    }

    function getDispositivo($codice){
        foreach($this->dispositivi as $dispositivi){
            if($dispositivi->getIdentificativo() === $codice){
                return $dispositivi->toString();
            }
        }
        return "Dispositivo non presente";
    }

    function toString(){
        $string = $this->nome . ":" . $this->latitudine . ":" . $this->longitudine;

        return $string;
    }

    function jsonSerialize(){
        return[
            "nome"=>$this->nome,
            "latitudine"=>$this->latitudine,
            "longitudine"=>$this->longitudine,

        ];
    }

}

?>