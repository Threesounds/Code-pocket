<?php
class User
{
   private $id;
   private $first_name;
   private $last_name;
   private $age;
   
   public function __construct($id,$first_name,$last_name,$age)
    {
     $this->id = $id;
     $this->first_name = $first_name;
     $this->last_name = $last_name;
     $this->age = $age;
    }
	
    public function ispispodataka()
    { return $this->first_name.' '.$this->last_name;}
	
    public function punoletan()
    {
        if ($this->age >= 18) {
        return True;
        }
		else return False;		
	}
}
$kopija = new User(5,'Trifun','Jokic',31);
echo $kopija->ispispodataka(). " ". $kopija->punoletan();
?>