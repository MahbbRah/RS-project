<?php
class db{
	private $dbhost ='localhost';
	private $dbuser ='root';
	private $dbpass ='';
	private $dbname ='tpiproject';
	private $conn;
	function __construct(){
		$dbhost=$this->dbhost;
		$dbuser=$this->dbuser;
		$dbpass=$this->dbpass;
		$dbname=$this->dbname;
		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
		$this->conn = $conn;
	}	
	//COMPUTER FUNCTION
	function insert_computer($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology){
		$conn = $this->conn;
		$sql = "INSERT INTO computer 
		(roll,reg,s_name,f_name,m_name,session,shift,technology) 
		VALUES 
		(:roll,:reg,:s_name,:f_name,:m_name,:session,:shift,:technology)";
		$q = $conn->prepare($sql);
	if ($q) {
			$q->execute(array(':roll'	=>$roll,
						  ':reg'		=>$reg,
						  ':s_name'		=>$s_name,
						  ':f_name'		=>$f_name,
						  ':m_name'		=>$m_name,
						  ':session'		=>$session,
						  ':shift'		=>$shift,
						  ':technology'	=>$technology));
			echo '<script>alert("Data insert Successfully");</script>';
		}
		else{
			echo '<script>alert("Data not insert ");</script>';
		}
	}
	//FOOD FUNCTION
	function insert_food($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology){
		$conn = $this->conn;
		$sql = "INSERT INTO food 
		(roll,reg,s_name,f_name,m_name,session,shift,technology) 
		VALUES 
		(:roll,:reg,:s_name,:f_name,:m_name,:session,:shift,:technology)";
		$q = $conn->prepare($sql);
	if ($q) {
			$q->execute(array(':roll'	=>$roll,
						  ':reg'		=>$reg,
						  ':s_name'		=>$s_name,
						  ':f_name'		=>$f_name,
						  ':m_name'		=>$m_name,
						  ':session'		=>$session,
						  ':shift'		=>$shift,
						  ':technology'	=>$technology));
			echo '<script>alert("Data insert Successfully");</script>';
		}
		else{
			echo '<script>alert("Data not insert ");</script>';
		}
	}
	//RAC FUNCTION
	function insert_rac($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology){
		$conn = $this->conn;
		$sql = "INSERT INTO rac 
		(roll,reg,s_name,f_name,m_name,session,shift,technology) 
		VALUES 
		(:roll,:reg,:s_name,:f_name,:m_name,:session,:shift,:technology)";
		$q = $conn->prepare($sql);
	if ($q) {
			$q->execute(array(':roll'	=>$roll,
						  ':reg'		=>$reg,
						  ':s_name'		=>$s_name,
						  ':f_name'		=>$f_name,
						  ':m_name'		=>$m_name,
						  ':session'		=>$session,
						  ':shift'		=>$shift,
						  ':technology'	=>$technology));
			echo '<script>alert("Data insert Successfully");</script>';
		}
		else{
			echo '<script>alert("Data not insert ");</script>';
		}
	}
	//AIDT FUNCTION
	function insert_aidt($roll,$reg,$s_name,$f_name,$m_name,$session,$shift,$technology){
		$conn = $this->conn;
		$sql = "INSERT INTO aidt 
		(roll,reg,s_name,f_name,m_name,session,shift,technology) 
		VALUES 
		(:roll,:reg,:s_name,:f_name,:m_name,:session,:shift,:technology)";
		$q = $conn->prepare($sql);
	if ($q) {
			$q->execute(array(':roll'	=>$roll,
						  ':reg'		=>$reg,
						  ':s_name'		=>$s_name,
						  ':f_name'		=>$f_name,
						  ':m_name'		=>$m_name,
						  ':session'		=>$session,
						  ':shift'		=>$shift,
						  ':technology'	=>$technology));
			echo '<script>alert("Data insert Successfully");</script>';
		}
		else{
			echo '<script>alert("Data not insert ");</script>';
		}
	}
}
 