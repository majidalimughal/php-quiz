<?php

session_start();
class users
{
	public $host="localhost";
	public $username="root";
	public $password="";
	public $db_name="quiz";
	public $conn;
	public $data;
	public $cat;
	public $ques; 


	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->password,$this->db_name);
		if ($this->conn->connect_errno)
	{
		die("database connection failed".$this->conn->connect_errno);
	}
	}

	public function signup($data)    
	{
		$this->conn->query($data);
		return true;
	}

	public function signin($username,$password)
	{
		$query=$this->conn->query("select username,password from signup where username='$username' and password='$password'");
		$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['username']=$username;
			return ture;
		}
		else {
			return false;
		}
	}

	public function users_profile($username)
	{
		$query=$this->conn->query("select * from signup where username='$username'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$this->data[]=$row;
		}
		return $this->data;
		
	}

	 public function cat_show()
	{
		$query=$this->conn->query("select * from category");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->cat[]=$row;
		}
		return $this->cat;
	}


	public function question_show($ques)
	{
		$query=$this->conn->query("select * from questions where cat_id='$ques'");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->ques[]=$row;
		}
		return $this->ques;
	}

	public function answer($data)
	{
		$ans=implode("",$data);
		$right=0;
		$wrong=0;
		$no_answer=0;
		$query=$this->conn->query("select id,answer from questions where cat_id='".$_SESSION['cat']."'");
		while($qust=$query->fetch_array(MYSQLI_ASSOC))
		{
			if($qust['answer']==$_POST[$qust['id']])
			{
				$right++;
			}
			else if($_POST[$qust['id']]=="no_attempt")
			{
				$no_answer++;
			}
			else
			{
				$wrong++;
			}
		}

		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;
		
	}


	public function add_quiz($rec)
	{
		$a=$this->conn->query($rec);
		return true;
	}

	public function delete_quiz($rec)
	{
		$a=$this->conn->query($rec);
		return true;
	}

	public function cat_shows()
	{
		$query=$this->conn->query("select * from category");
		while($row=$query->fetch_array(MYSQLI_ASSOC))
		{
			$this->cat[]=$row;
		}
		return $this->cat;
	}

	public function url($url)
	{
		header("location:".$url);
	}
	

}
?>