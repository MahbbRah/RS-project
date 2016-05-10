<?php
      class admin{
	      public $host=db_server;
	      public $user=db_user;
	      public $pass=db_pass;
	      public $dbname=db_name;
		  public $link;
		  public $error;
		  public function __construct()
		  {
		     $this->connectdb();
		  }
		  public function connectdb()
		  {
		      $this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
			  if(!$this->link)
			  {
			     $this->error="Connection Faild";
				 return false;
			  }
		  }
		  
		  //insert function
		  public function insert($query)
		  {
		     $insert_row=$this->link->query($query) or die($this->link->error.__LINE__);

		  }
		  public function update($query)
	    {
	         $update_row=$this->link->query($query) or die($this->link->error.__LINE__);
	         echo '<script>alert("Data UPDATE Successfully");</script>';
	    }
	  }
?>