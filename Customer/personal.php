<?php

 class Personal {
private $errors=array();

public function personalRegisteration($POST){
    // validatation
    foreach($POST as $key=>$value){
        // First name validate for empty input
        if($key=='firstName'){
            if(trim($value)==""){
                $this->errors[]="Please fill first name";
            }
            // chech for first name not number
            if(is_numeric($value)){
                $this->errors[]="first name cannot be number";
            }
            // check First name doesnot contain number
            if(preg_match("/[0-9]+/",$value)){
                $this->errors[]="First name must not contain numbers.";
            }

        }
        // for middle name validation for empty input
        if($key=='middleName'){
            if(trim($value)==""){
                $this->errors[]="Please fill middle name";
            }
            // check Middle name cannot be  number
            if(is_numeric($value)){
                $this->errors[]="middle name can not be number";
            }
            // check middle name doesnot contain number
            if(preg_match("/[0-9]+/",$value)){
                $this->errors[]="middle name must not contain numbers.";
            }

        }
        // validation for last name for empty inputs
        if($key=="lastName"){
            if(trim($value)==""){
                $this->errors[]="Please fill last name";
            }
            // check last  name cannot be number
            if(is_numeric($value)){
                $this->errors[]="last name can not be number";
            }
            // check last name doesnot contain number
            if(preg_match("/[0-9]+/",$value)){
                $this->errors[]="last name must not contain numbers.";
            }

        }
        //validation for kebel for empty imputs
        if($key=="kebele"){
            if(trim($value)==""){
                $this->errors[]="Please fill keble name";
            }
        }
            

    }
    
    $database=new Database();

        if(count($this->errors)==0){
            $query="insert into personal (firstName,middleName,lastName,kebele) values (:firstName,:middleName,:lastName,:kebele)";
            $data=array();
            $data['firstName']=$POST['firstName'];
            $data['middleName']=$POST['middleName']; 
            $data['lastName']=$POST['lastName'];
            $data['kebele']=$POST['kebele'];
        
            $result=$database->write($query,$data);
            if(!$result){
                $this->errors="The data couldn't inserted";
            }

        }
    
  
    
    return $this->errors;
}


}
?>
 <!-- /* getter
 public function getFirstName(){
     return $this->fname;
 }
 public function getMiddleName(){
    return $this->mname;
}
public function getLastName(){
    return $this->lname;
}
public function getKebele(){
    return $this->Kebele;
}
// setter
public function setFirstName($firstName){
    $this->fname=$firstName;
}
public function setMiddletName($middleName){
    $this->mname=$middleName;
}
public function setlastName($lastName){
    $this->lname=$lastName;
}
public function setKebele($kebele){
    $this->kebele=$kebele;
}
*/ -->
