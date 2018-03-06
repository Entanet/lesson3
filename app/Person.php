 <?php

 class Person
 {
 	public $name;
    public $age;
    public $gender;
    public $postcode;
    public $move;
    public $id;  

    public function __construct($id)
    {
    	$this->id = $id;
    	$this->name = "Mike";
        $this->age = 33;
        $this->gender = "Male";
        $this->postcode = "TF32NS";
        $this->move = "Mind Trick";
    }

    public function getDescription()
    {
    	    if($this->age > 60){
        		return "Master";
		    }elseif($this->age > 20){
		        return "Padwan";
		    }else{
		        return "Youngling";
		    }
    }
 }

