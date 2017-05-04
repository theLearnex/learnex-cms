<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($first_name,$email_id,$password)
	{
		try
		{
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO tbl_users(first_name,email_id,password) 
		                                               VALUES(:first_name, :email_id, :password)");
												  
			$stmt->bindparam(":first_name", $first_name);
			$stmt->bindparam(":email_id", $email_id);
			$stmt->bindparam(":password", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($first_name,$email_id,$password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT id, first_name, email_id, password FROM users WHERE first_name=:first_name OR email_id=:email_id ");
			$stmt->execute(array(':first_name'=>$first_name, ':email_id'=>$email_id));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($password, $userRow['password']))
				{
					$_SESSION['user_session'] = $userRow['id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>