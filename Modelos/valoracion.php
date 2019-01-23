<?php

class Valoracion
{

    //atributos
    private $val_id;
    private $val_idcita;
    private $val_paciente;
	/*private $val_numdoc;
	private $val_nom1;
	private $val_nom2;
    private $val_apellido1;
    private $val_apellido2;
	private $val_sexo;
    private $val_fec_nac;
    private $val_e_mail;
    private $val_tipo_doc;*/
    /***** */
    private $val_fec_hoy;
    private $val_peso;
    private $val_talla;
    private $val_f_cardiaca;
    private $val_f_respiratoria;
    private $val_p_arterial;
    private $val_temp;
    private $val_saturacion02;
    private $val_r_an_fis;
    private $val_r_exa_diag;
    private $val_diagnostico;
    private $val_compli;
    private $val_trat_aplic;
    
	//constructor de la clase
	function __CONSTRUCT(){
		$this->pdo = BasedeDatos::conectar();
    }

    public function getVal_id() : ?int{
        return $this->val_id;
    }

    public function setVal_id(int $id){
        $this->val_id=$id;
    }

    public function getVal_idcita() : ?int{
        return $this->val_idcita;
    }

    public function setVal_idcita(int $idcita){
        $this->val_idcita=$idcita;
    }
    public function getVal_Paciente() : ?string{
        return $this->val_paciente;
    }

    public function setVal_Paciente(string $paciente){
        $this->val_paciente=$paciente;
    }

   /* public function getPac_nom1() : ?string{
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
    }*/

    /***************** */

    public function getVal_fec_hoy() : ?string{
        return $this->val_fec_hoy;
    }

    public function setVal_fec_hoy(string $fec_hoy){
        $this->val_fec_hoy=$fec_hoy;
    }

    public function getVal_peso() : ?string{
        return $this->val_peso;
    }

    public function setVal_peso(string $peso){
        $this->val_peso=$peso;
    }

    public function getVal_talla() : ?string{
        return $this->val_talla;
    }

    public function setVal_talla(string $talla){
        $this->val_talla=$talla;
    }

    public function getVal_f_cardiaca() : ?string{
        return $this->val_f_cardiaca;
    }

    public function setVal_f_cardiaca(string $f_cardiaca){
        $this->val_f_cardiaca=$f_cardiaca;
    }

    public function getVal_f_respiratoria() : ?string{
        return $this->val_f_respiratoria;
    }

    public function setVal_f_respiratoria(string $f_respiratoria){
        $this->val_f_respiratoria=$f_respiratoria;
    }

    public function getVal_p_arterial() : ?string{
        return $this->val_p_arterial;
    }

    public function setVal_p_arterial(string $p_arterial){
        $this->val_p_arterial=$p_arterial;
    }

    public function getVal_temp() : ?string{
        return $this->val_temp;
    }

    public function setVal_temp(string $temp){
        $this->val_temp=$temp;
    }

    public function getVal_saturacion02() : ?string{
        return $this->val_saturacion02;
    }

    public function setVal_saturacion02(string $saturacion02){
        $this->val_saturacion02=$saturacion02;
    }

    public function getVal_r_an_fis() : ?string{
        return $this->val_r_an_fis;
    }

    public function setVal_r_an_fis(string $r_an_fis){
        $this->val_r_an_fis=$r_an_fis;
    }

    public function getVal_r_exa_diag() : ?string{
        return $this->val_r_exa_diag;
    }

    public function setVal_r_exa_diag(string $r_exa_diag){
        $this->val_r_exa_diag=$r_exa_diag;
    }

    public function getVal_diagnostico() : ?string{
        return $this->val_diagnostico;
    }

    public function setVal_diagnostico(string $diagnostico){
        $this->val_diagnostico=$diagnostico;
    }

    public function getVal_compli() : ?string{
        return $this->val_compli;
    }

    public function setVal_compli(string $compli){
        $this->val_compli=$compli;
    }

    public function getVal_trat_aplic() : ?string{
        return $this->val_trat_aplic;
    }

    public function setVal_trat_aplic(string $trat_aplic){
        $this->val_trat_aplic=$trat_aplic;
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

    public function ConsultarMedico(){
        try{
            $usuario = $_SESSION['USER'];
            $consulta = $this->pdo->prepare("SELECT count(*) FROM medicos WHERE user = '$usuario';");
            $consulta->execute();
            return $consulta;
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    /*public function Obtener($numdoc){
        try{
            $consulta = $this->pdo->prepare("SELECT * FROM pacientes WHERE numdoc=?;");
            $consulta->execute(array($numdoc));
            $r = $consulta->fetch(PDO::FETCH_OBJ);
            $p = new Valoracion
        ();
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
    }*/

    public function Insertar(Valoracion $p){
        try{
            $consulta="INSERT INTO valoraciones(idcita, paciente, fec_hoy, peso, talla, f_cardiaca, f_respiratoria, p_arterial, temp, saturacion02, r_an_fis, r_exa_fis, diagnostico, compli, trat_aplic) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(

                        $p->getVal_idcita(),
                        $p->getVal_paciente(),
                        $p->getVal_fec_hoy(),
                        $p->getVal_peso(),
                        $p->getVal_talla(),
                        $p->getVal_f_cardiaca(),
                        $p->getVal_f_respiratoria(),
                        $p->getVal_p_arterial(),
                        $p->getVal_temp(),
                        $p->getVal_saturacion02(),
                        $p->getVal_r_an_fis(),
                        $p->getVal_r_exa_diag(),
                        $p->getVal_diagnostico(),
                        $p->getVal_compli(),
                        $p->getVal_trat_aplic()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Valoracion $p){
        try{
            $consulta="UPDATE valoraciones SET 
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