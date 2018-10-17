<?php

class Medico
{

    private $pdo;
    //atributos
    private $med_tipo_doc;
	private $med_numdoc;
	private $med_nom1;
	private $med_nom2;
    private $med_apellido1;
    private $med_apellido2;
	private $med_sexo;
    private $med_fec_nac;
    private $med_e_mail;
    private $med_direc;
    private $med_telefono;
    private $med_estado;
    private $med_area;
    private $med_user;
    private $med_password;

    //constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getMed_tipo_doc() : ?string{
        return $this->med_tipo_doc;
    }

    public function setMed_tipo_doc(string $tipo_doc){
        $this->med_tipo_doc=$tipo_doc;
    }

    public function getMed_numdoc() : ?int{
        return $this->med_numdoc;
    }

    public function setMed_numdoc(int $numdoc){
        $this->med_numdoc=$numdoc;
    }

    public function getMed_nom1() : ?string{
        return $this->med_nom1;
    }

    public function setMed_nom1(string $nom1){
        $this->med_nom1=$nom1;
    }

    public function getMed_nom2() : ?string{
        return $this->med_nom2;
    }

    public function setMed_nom2(string $nom2){
        $this->med_nom2=$nom2;
    }

    public function getMed_apellido1() : ?string{
        return $this->med_apellido1;
    }

    public function setMed_apellido1(string $apellido1){
        $this->med_apellido1=$apellido1;
    }

    public function getMed_apellido2() : ?string{
        return $this->med_apellido2;
    }

    public function setMed_apellido2(string $apellido2){
        $this->med_apellido2=$apellido2;
    }

    public function getMed_sexo() : ?string{
        return $this->med_sexo;
    }

    public function setMed_sexo(string $sexo){
        $this->med_sexo=$sexo;
    }

    public function getMed_fec_nac() : ?string{
        return $this->med_fec_nac;
    }

    public function setMed_fec_nac(string $fec_nac){
        $this->med_fec_nac=$fec_nac;
    }

    public function getMed_e_mail() : ?string{
        return $this->med_e_mail;
    }

    public function setMed_e_mail(string $e_mail){
        $this->med_e_mail=$e_mail;
    }
    
    public function getMed_direc() : ?string{
        return $this->med_direc;
    }

    public function setMed_direc(string $direc){
        $this->med_direc=$direc;
    }

    public function getMed_telefono() : ?string{
        return $this->med_telefono;
    }

    public function setMed_telefono(string $telefono){
        $this->med_telefono=$telefono;
    }

    public function getMed_estado() : ?string{
        return $this->med_estado;
    }

    public function setMed_estado(string $estado){
        $this->med_estado=$estado;
    }

    public function getMed_area() : ?string{
        return $this->med_area;
    }

    public function setMed_area(string $area){
        $this->med_area=$area;
    }

    public function getMed_user() : ?string{
        return $this->med_user;
    }

    public function setMed_user(string $user){
        $this->med_user=$user;
    }

    public function getMed_password() : ?string{
        return $this->med_password;
    }

    public function setMed_password(string $password){
        $this->med_password=$password;
    }
    
    public function Listar(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM medicos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function ListarAreas(){
        try{
            $consultapa = $this->pdo->prepare("SELECT * FROM areas;");
            $consultapa->execute();
            return $consultapa->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function Insertar(Medico $m){
        try{
            $consulta="INSERT INTO medicos(tipo_doc, numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail, direc, telefono, estado, area, user, password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $m->getMed_tipo_doc(),
                        $m->getMed_numdoc(),
                        $m->getMed_nom1(),
                        $m->getMed_nom2(),
                        $m->getMed_apellido1(),
                        $m->getMed_apellido2(),
                        $m->getMed_sexo(),
                        $m->getMed_fec_nac(),
                        $m->getMed_e_mail(),
                        $m->getMed_direc(),
                        $m->getMed_telefono(),
                        $m->getMed_estado(),
                        $m->getMed_area(),
                        $m->getMed_user(),
                        $m->getMed_password()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}

?>