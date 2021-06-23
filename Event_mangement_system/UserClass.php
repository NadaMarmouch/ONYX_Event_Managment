<?php
//include "DB.php";
$con = mysqli_connect("localhost", "root", "","onyx_event_management");

class User
{
	public $UserName;
	public $Password;
	public $email;
	public $UserType_obj;
	public $ID;
	
	function __construct($id)	{
		if ($id !="")
		{
			$con = mysqli_connect("localhost", "root", "","onyx_event_management");
			$sql="select * from user where 	id=$id";
			$User = mysqli_query($con,$sql);
			if ($row = mysqli_fetch_array($User))
			{
				$this->UserName=$row["full_name"];
				$this->Password=$row["password"];
				$this->ID=$row["id"];
					$this->email=$row["email"];
		.......		// $this->UserType_obj=new UserType($row["UserType_id"]);
			}
		}
	}
	
	static function login($UserName,$Password)
	{

		$con = mysqli_connect("localhost", "root", "","onyx_event_management");
		$sql="SELECT * FROM user WHERE full_name='$UserName' and password='$Password'";	
		$result=mysqli_query($con,$sql);
		if ($row=mysqli_fetch_array($result))
		{
			return new User($row[0]); 		
		}
		return NULL;
	}
	
	static function SelectAllUsersInDB()
	{
		$con = mysqli_connect("localhost", "root", "","onyx_event_management");
		$sql="select * from users";
		$Users = mysqli_query($con,$sql);
		$i=0;
		$Result;
		while ($row = mysql_fetch_array($Users))
		{
			$MyObj= new User($row["id"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
	
	static function deleteUser($ObjUser)
	{
		$con = mysqli_connect("localhost", "root", "","User");
		$sql="delete from users where ID=".$ObjUser->ID;
		mysqli_query($con,$sql);
	}
	
	static function InsertinDB_Static($UN,$PW)	{
		$con = mysqli_connect("localhost", "root", "","User");
		$sql="insert into users(UserName,Password,UserType_id) values ('$UN','$PW',2)";
		if(mysqli_query($con,$sql))
			return true;
		else
			return false;
	}
	
	function UpdateMyDB()
	{
		$con = mysqli_connect("localhost", "root", "","User");
		$sql="update users set UserName='".$this->UserName."' ,Password='$this->Password' where ID=".$this->ID."";
		mysql_query($sql);
	}	
}
class UserType
{
	public $ID;
	public $UserTypeName;
	public $ArrayOfPages;
	function __construct($id)
	{
		if ($id !="")
		{	$con = mysqli_connect("localhost", "root", "","User");
			$sql="select * from usertypes where ID=$id";
			$result=mysqli_query($con,$sql);
			if ($row = mysqli_fetch_array($result))
			{
				$this->UserTypeName=$row["Name"];
				$this->ID=$row["ID"];
				$sql="select PageID from UserType_Pages where UserTypeID=$this->ID";
				$result=mysqli_query($con,$sql);
				$i=0;
				while($row1=mysqli_fetch_array($result))
				{
					$this->ArrayOfPages[$i]=new pages($row1[0]);
					$i++;
				}
			}
		}
	}
	
	static function SelectAllUserTypesInDB()
	{$con = mysqli_connect("localhost", "root", "","User");

		$sql="select * from usertypes";
		$TypeDataSet = mysqli_query($con,$sql);
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new UserType($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
}

class pages
{
	public $ID;
	public $FreindlyName;
	public $Linkaddress;

	function __construct($id)
	{
		if ($id !="")
		{	$con = mysqli_connect("localhost", "root", "","User");

			$sql="select * from pages where ID=$id";
			$result2=mysqli_query($con,$sql) ;
			if ($row2 = mysqli_fetch_array($result2))
			{
				$this->FreindlyName=$row2["FreindlyName"];
				$this->Linkaddress=$row2["Linkaddress"];
				$this->ID=$row2["ID"];
			}
		}
	}
	
	static function SelectAllPagesInDB()
	{$con = mysqli_connect("localhost", "root", "","User");

		$sql="select * from pages";
		$PageDataSet = mysqli_query($con,$sql);		
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($PageDataSet))
		{
			$MyObj= new pages($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
}
?>