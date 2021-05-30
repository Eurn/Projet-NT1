<?php
class coordonneesValidation{
    private $name, $firstname, $email, $mdp;

    public $listErrors=array();

    public function __construct()
    {
    $ctp = func_num_args();
    $args = func_get_args();
        switch($ctp){
            case 4:
                $this->construct1($args[0],$args[1],$args[2],$args[3]);
                break;
            case 2:
                $this->construct2($args[0],$args[1]);
                break;
            default:
                break;
        }
    }
    function construct1($name, $firstname, $email, $mdp){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    function construct2($email, $mdp){
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function setMdp($mdp){
        $this->mdp = $mdp;
    }

    function isNameAndFirstname($field, $msg) {
        if (!preg_match("#^[a-zA-Z]*$#", $field)) {
            print $msg  . "<br/>"; 
            array_push($this->listErrors,$msg);
        } 

    }

    function isEmailAddress($field, $msg) {
        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$field)) {
            print $msg  . "<br/>";  
            array_push($this->listErrors,$msg);
        }

    }

    function isMdp($field, $msg) {
        if (!preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#", $field)) {
            print $msg  . "<br/>"; 
            array_push($this->listErrors,$msg);
        } 

    }
    function isEmpty($field, $msg){
        $field = trim($field);
        if($field === ""){
            print($msg . "<br/>"); 
            array_push($this->listErrors, $msg);
        }

    }

    public function checkInscription(){
        $this->isEmpty($this->name,"Le nom saisi est vide");
        $this->isNameAndFirstname($this->name,"Le nom saisi n'est pas valide");
    
        $this->isEmpty($this->firstname,"Le prénom saisi est vide");
        $this->isNameAndFirstname($this->firstname,"Le prénom saisi n'est pas valide");
    
        $this->isEmpty($this->email,"L'email saisi est vide");
        $this->isEmailAddress($this->email,"L'email saisi n'est pas valide");

        $this->isEmpty($this->mdp,"Le mot de passe saisi est vide");
        $this->isMdp($this->mdp,"Le mot de passe saisi n'est pas valide");
      
        if(count($this->listErrors) === 0 ){
            return true;
        } 
        return $this->listErrors;
    }

    public function checkConnexion()
    {
        $this->isEmpty($this->email, "L'email saisi est vide");
        $this->isEmailAddress($this->email, "L'email saisi n'est pas valide");

        $this->isEmpty($this->mdp, "Le mot de passe saisi est vide");
        $this->isMdp($this->mdp, "Le mot de passe saisi n'est pas valide");

        if (count($this->listErrors) === 0) {
            return true;
        }
        return $this->listErrors;
    }
}
?>