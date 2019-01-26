<?php

class Paciente
{

    private $pdo;
    //atributos
    private $pac_id;
	private $pac_numdoc;
	private $pac_nom1;
	private $pac_nom2;
    private $pac_apellido1;
    private $pac_apellido2;
	private $pac_sexo;
    private $pac_fec_nac;
    private $pac_e_mail;
    private $pac_tipo_doc;

	//constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getPac_id() : ?int{
        return $this->pac_id;
    }

    public function setPac_id(int $id){
        $this->pac_id=$id;
    }

    public function getPac_numdoc() : ?string{
        return $this->pac_numdoc;
    }

    public function setPac_numdoc(string $numdoc){
        $this->pac_numdoc=$numdoc;
    }

    public function getPac_nom1() : ?string{
        return $this->pac_nom1;
    }

    public function setPac_nom1(string $nom1){
        $this->pac_nom1=$nom1;
    }
    public function getPac_nom2() : ?string{
        return $this->pac_nom2;
    }

    public function setPac_nom2(string $nom2){
        $this->pac_nom2=$nom2;
    }
    public function getPac_apellido1() : ?string{
        return $this->pac_apellido1;
    }

    public function setPac_apellido1(string $apellido1){
        $this->pac_apellido1=$apellido1;
    }
    public function getPac_apellido2() : ?string{
        return $this->pac_apellido2;
    }

    public function setPac_apellido2(string $apellido2){
        $this->pac_apellido2=$apellido2;
    }
    public function getPac_sexo() : ?string{
        return $this->pac_sexo;
    }

    public function setPac_sexo(string $sexo){
        $this->pac_sexo=$sexo;
    }
    public function getPac_fec_nac() : ?string{
        return $this->pac_fec_nac;
    }

    public function setPac_fec_nac(string $fec_nac){
        $this->pac_fec_nac=$fec_nac;
    }
    public function getPac_e_mail() : ?string{
        return $this->pac_e_mail;
    }

    public function setPac_e_mail(string $e_mail){
        $this->pac_e_mail=$e_mail;
    }
    
    public function getPac_tipo_doc() : ?string{
        return $this->pac_tipo_doc;
    }

    public function setPac_tipo_doc(string $tipo_doc){
        $this->pac_tipo_doc=$tipo_doc;
    }

    public function Listar(){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM pacientes;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function Obtener($numdoc){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM pacientes WHERE numdoc=?;");
            $consulta->execute(array($numdoc));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            $p = new Paciente();
            $p->setPac_id($r->id);
            $p->setPac_tipo_doc($r->tipo_doc);
            $p->setPac_numdoc($r->numdoc);
            $p->setPac_nom1($r->nom1);
            $p->setPac_nom2($r->nom2);
            $p->setPac_apellido1($r->apellido1);
            $p->setPac_apellido2($r->apellido2);
            $p->setPac_sexo($r->sexo);
            $p->setPac_fec_nac($r->fec_nac);
            $p->setPac_e_mail($r->e_mail);

            return $p;

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Verificar($numdoc){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM pacientes WHERE numdoc='$numdoc';");
            $consulta->execute();
            $consulta->fetch(PDO::FETCH_OBJ);
            if ($consulta->rowCount() > 0) {
                $documento = 'existe';
                return $documento;
            } else {
                $documento = 'vacio';
                return $documento;
            }

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Paciente $p){
        try{
            $consulta="INSERT INTO pacientes(tipo_doc, numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail) VALUES (?,?,?,?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p->getPac_tipo_doc(),
                        $p->getPac_numdoc(),
                        $p->getPac_nom1(),
                        $p->getPac_nom2(),
                        $p->getPac_apellido1(),
                        $p->getPac_apellido2(),
                        $p->getPac_sexo(),
                        $p->getPac_fec_nac(),
                        $p->getPac_e_mail()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Paciente $p){
        try{
            $consulta="UPDATE pacientes SET 
                tipo_doc=?,
                numdoc=?,
                nom1=?, 
                nom2=?, 
                apellido1=?, 
                apellido2=?, 
                sexo=?, 
                fec_nac=?, 
                e_mail=? 
                WHERE id=?;";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $p->getPac_tipo_doc(),
                        $p->getPac_numdoc(),
                        $p->getPac_nom1(),
                        $p->getPac_nom2(),
                        $p->getPac_apellido1(),
                        $p->getPac_apellido2(),
                        $p->getPac_sexo(),
                        $p->getPac_fec_nac(),
                        $p->getPac_e_mail(),
                        $p->getPac_id()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}
?>