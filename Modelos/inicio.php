<?php

class Inicio
{

    private $pdo;
    //atributos
    private $ini_numcit;
	private $ini_numpac;
	private $ini_nummed;
    private $ini_numusu;
    private $ini_mege;
	private $ini_gine;
	private $ini_pedi;
    private $ini_orto;
    private $ini_mein;
	private $ini_psico;
	private $ini_nutri;
    private $ini_bacte;

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

    public function getIni_mege() : ?int{
        return $this->ini_mege;
    }

    public function setIni_mege(int $mege){
        $this->ini_mege=$mege;
    }

    public function getIni_gine() : ?int{
        return $this->ini_gine;
    }

    public function setIni_gine(int $gine){
        $this->ini_gine=$gine;
    }

    public function getIni_pedi() : ?int{
        return $this->ini_pedi;
    }

    public function setIni_pedi(int $pedi){
        $this->ini_pedi=$pedi;
    }
    public function getIni_orto() : ?int{
        return $this->ini_orto;
    }

    public function setIni_orto(int $orto){
        $this->ini_orto=$orto;
    }

    public function getIni_mein() : ?int{
        return $this->ini_mein;
    }

    public function setIni_mein(int $mein){
        $this->ini_mein=$mein;
    }

    public function getIni_psico() : ?int{
        return $this->ini_psico;
    }

    public function setIni_psico(int $psico){
        $this->ini_psico=$psico;
    }

    public function getIni_nutri() : ?int{
        return $this->ini_nutri;
    }

    public function setIni_nutri(int $nutri){
        $this->ini_nutri=$nutri;
    }
    public function getIni_bacte() : ?int{
        return $this->ini_bacte;
    }

    public function setIni_bacte(int $bacte){
        $this->ini_bacte=$bacte;
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
            $consulta4 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Medicina General'");
            $consulta4->execute();
            $consulta4->fetch(PDO::FETCH_OBJ);
            $mg = $consulta4->rowCount();
            $consulta5 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Ginecologia'");
            $consulta5->execute();
            $consulta5->fetch(PDO::FETCH_OBJ);
            $gi = $consulta5->rowCount();
            $consulta6 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Pediatría'");
            $consulta6->execute();
            $consulta6->fetch(PDO::FETCH_OBJ);
            $pe = $consulta6->rowCount();
            $consulta7 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Ortopedia'");
            $consulta7->execute();
            $consulta7->fetch(PDO::FETCH_OBJ);
            $or = $consulta7->rowCount();
            $consulta8 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Medicina Interna'");
            $consulta8->execute();
            $consulta8->fetch(PDO::FETCH_OBJ);
            $mi = $consulta8->rowCount();
            $consulta9 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Psicologia'");
            $consulta9->execute();
            $consulta9->fetch(PDO::FETCH_OBJ);
            $ps = $consulta9->rowCount();
            $consulta10 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Nutrición'");
            $consulta10->execute();
            $consulta10->fetch(PDO::FETCH_OBJ);
            $nut = $consulta10->rowCount();
            $consulta11 = $this->pdo->prepare("SELECT * FROM citas WHERE area='Bacteriología'");
            $consulta11->execute();
            $consulta11->fetch(PDO::FETCH_OBJ);
            $ba = $consulta11->rowCount();
            $i = new Inicio();
            $i->setIni_numcit($nc);
            $i->setIni_numpac($np);
            $i->setIni_nummed($nm);
            $i->setIni_numusu($nu);
            $i->setIni_mege($mg);
            $i->setIni_gine($gi);
            $i->setIni_pedi($pe);
            $i->setIni_orto($or);
            $i->setIni_mein($mi);
            $i->setIni_psico($ps);
            $i->setIni_nutri($nut);
            $i->setIni_bacte($ba);

            return $i;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>