<?php

class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function create($fname,$lname,$email,$mobile,$password,$gender,$dob,$zipcode,$about_me,$basic_information,$work_education,$slogan)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO tbl_users(first_name,last_name,email_id,mobile,password,gender,dob,zipcode,about_me,basic_information,work_education,slogan,zone,state,city) VALUES(:fname, :lname, :email, :mobile, :password, :gender, :dob, :zipcode, :about_me, :basic_information, :work_education, :slogan, :zone, :state, :city)");
			$stmt->bindparam(":fname",$fname);
			$stmt->bindparam(":lname",$lname);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":mobile",$mobile);
			$stmt->bindparam(":password",$password);
			$stmt->bindparam(":gender",$gender);
			$stmt->bindparam(":dob",$dob);
			$stmt->bindparam(":zipcode",$zipcode);
			$stmt->bindparam(":about_me",$about_me);
			$stmt->bindparam(":basic_information",$basic_information);
			$stmt->bindparam(":work_education",$work_education);
			$stmt->bindparam(":slogan",$slogan);
			$stmt->bindparam(":zone",$zone);
			$stmt->bindparam(":state",$state);
			$stmt->bindparam(":city",$city);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}
	
	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM tbl_users WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id,$fname,$lname,$email,$mobile,$password,$gender,$dob,$zipcode,$about_me,$basic_information,$work_education,$slogan,$zone,$state,$city)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE tbl_users SET first_name=:fname, 
		                                               last_name=:lname, 
													   email_id=:email, 
													   mobile=:mobile,
													   password=:password,
													   gender=:gender,
													   dob=:dob,
													   zipcode=:zipcode,
													   about_me=:about_me,
													   basic_information=:basic_information,
													   work_education=:work_education,
													   slogan=:slogan,
													   zone=:zone,
													   state=:state,
													   city=:city
													WHERE id=:id ");
			$stmt->bindparam(":fname",$fname);
			$stmt->bindparam(":lname",$lname);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":mobile",$mobile);
			$stmt->bindparam(":password",$password);
			$stmt->bindparam(":gender",$gender);
			$stmt->bindparam(":dob",$dob);
			$stmt->bindparam(":zipcode",$zipcode);
			$stmt->bindparam(":about_me",$about_me);
			$stmt->bindparam(":basic_information",$basic_information);
			$stmt->bindparam(":work_education",$work_education);
			$stmt->bindparam(":slogan",$slogan);
			$stmt->bindparam(":zone",$zone);
			$stmt->bindparam(":state",$state);
			$stmt->bindparam(":city",$city);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM tbl_users WHERE id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
	
	/* paging */
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['first_name']); ?></td>
                <td><?php print($row['last_name']); ?></td>
                <td><?php print($row['email_id']); ?></td>
                <td><?php print($row['mobile']); ?></td>
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
}
