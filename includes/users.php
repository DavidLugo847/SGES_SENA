<?php

class UsersAdmin{
    private $UsId;
    private $UsName;
    private $UsMail;
    private $UsPass;
    private $UsPassadmin;
    
    
    function __construct(){}
    
    
    public function getUsid(){
    return $this->UsId;
}
    public function  setUsid($UsId){
    $this->UsId = $UsId;
}

    public function getUsName(){
    return $this->UsName;
}
    public function setUsName($UsName){
    $this->UsName = $UsName;
}
    public function getUsMail(){
    return $this->UsMail;
}
    public function setUsMail($UsMail){
    $this->UsMail = $UsMail;
}
    public function getUsPass(){
    return $this->UsPass;
}
    public function setUsPass($UsPass){
    $this->UsPass = $UsPass;
}
    public function getUsPassadmin(){
    return $this->UsPassadmin;
}
    public function setUsPassadmin($UsPassadmin){
    $this->UsPassadmin = $UsPassadmin;
}

}
class UserEgresado{
    private $EgId;
    private $EgNombres;
    private $EgApellidos;

    
    
    function __construct(){}
    
    
    public function getEgid(){
    return $this->EgId;
}
    public function  setEgid($EgId){
    $this->EgId = $EgId;
}

    public function getEgNombres(){
    return $this->EgNombres;
}
    public function setEgNombres($EgNombres){
    $this->EgNombres = $EgNombres;
}
    public function getEgApellidos(){
    return $this->EgApellidos;
}
    public function setApellidos($EgApellidos){
    $this->EgApellidos = $EgApellidos;
}



}
