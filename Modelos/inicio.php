<?php

class Inicio
{

    private $pdo;
    //atributos
    private $ini_numcit;
	private $ini_numpac;
	private $ini_nummed;
	private $ini_numusu;

    //constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getIni_numcit() : ?int{
        return $this->ini_numcit;
    }

    public function setIni_numcit(int $numcit){
        $this->ini_numcit=$numcit;
    }

    public function getIni_numpac() : ?int{
        return $this->ini_numpac;
    }

    public function setIni_numpac(int $numpac){
        $this->ini_numpac=$numpac;
    }

    public function getIni_nummed() : ?int{
        return $this->ini_nummed;
    }

    public function setIni_nummed(int $nummed){
        $this->ini_nummed=$nummed;
    }
    public function getIni_numusu() : ?int{
        return $this->ini_numusu;
    }

    public function setIni_numusu(int $numusu){
        $this->ini_numusu=$numusu;
    }

    public function Contarcita(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM citas");
            $consulta->execute();
            $consulta->fetch(PDO::FETCH_OBJ);
            $nc = $consulta->rowCount();
            $consulta1 = $this->pdo->prepare("SELECT * FROM pacientes");
            $consulta1->execute();
            $consulta1->fetch(PDO::FETCH_OBJ);
            $np = $consulta1->rowCount();
            $consulta2 = $this->pdo->prepare("SELECT * FROM medicos");
            $consulta2->execute();
            $consulta2->fetch(PDO::FETCH_OBJ);
            $nm = $consulta2->rowCount();
            $consulta3 = $this->pdo->prepare("SELECT * FROM usuarios");
            $consulta3->execute();
            $consulta3->fetch(PDO::FETCH_OBJ);
            $nu = $consulta3->rowCount();
            $i = new Inicio();
            $i->setIni_numcit($nc);
            $i->setIni_numpac($np);
            $i->setIni_nummed($nm);
            $i->setIni_numusu($nu);
            
            return $i;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>