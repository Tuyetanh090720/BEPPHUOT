<?php

class UserModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function signup($username, $password)
	{	
		$sql = "INSERT INTO users (tendn, pass)
							VALUES ('$username', '$password')";
		$this->db->conn->query($sql);

		$sql = "SELECT * FROM users WHERE (tendn = '$username' AND pass = '$password')";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

	public function checkExists($username) 
	{
		$sql = "SELECT * FROM users WHERE tendn = '$username'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
	
	public function login($username, $password)
	{
		$sql = "SELECT * FROM users WHERE (tendn = '$username' AND pass = '$password')";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

	///hiển thị menu
	public function menu()
	{	
		// $this->db->conn->real_escape_string($name);
		$sql = "SELECT * FROM parentcategory";

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function neMenu()
	{	
		$sql = "SELECT * FROM category";

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//Tag post Category
	public function tagPostCategory($id)
	{	
		$sql = "SELECT * FROM category, parentcategory WHERE category.ParentId = parentcategory.ParentId AND category.CategoryId = $id"; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//Left post Category
	public function leftPostCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY DatePost DESC "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//Top post Category
	public function topPostCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY ViewNumber DESC LIMIT 5 "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function slideTopCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY ViewNumber, DatePost DESC LIMIT 3 "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//right post Category
	public function rightPostCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY DatePost DESC LIMIT 8 "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	
	//right post Home
	public function rightHome()
	{	
		$sql = "SELECT * FROM posts ORDER BY DatePost DESC limit 8 "; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	
	//Slie Home
	public function slideHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId='201' ORDER BY DatePost DESC limit 3 "; 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	
	public function slideTopHome()
	{	
		$sql = "SELECT * FROM posts ORDER BY ViewNumber DESC limit 6 "; 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	public function recipeHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId LIKE '1%' ORDER BY DatePost DESC limit 6";

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function foodHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId LIKE '2%' ORDER BY DatePost DESC limit 6"; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function rightSlide()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId='201' ORDER BY PostId DESC limit 5"; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function bookHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId LIKE '3%' ORDER BY DatePost DESC limit 10"; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	public function SinglePost($id)
	{	
		mysqli_query($this->db->conn,"UPDATE posts SET ViewNumber = ViewNumber + 1 WHERE PostId = $id"); 
		$sql = "SELECT * FROM posts WHERE PostId = $id"; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	public function BottomPost($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = ( SELECT CategoryId FROM posts WHERE PostId = $id)"; 
 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	public function HeaderPost($id)
	{	
		$sql = "SELECT CategoryName, ParentName FROM posts INNER JOIN category ON posts.CategoryId=category.CategoryId INNER JOIN parentcategory ON category.ParentId=parentcategory.ParentId WHERE PostId=$id"; 
 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	public function PrevPost($id)
	{	
		$sql = "SELECT * FROM posts WHERE PostId < $id ORDER BY PostId DESC LIMIT 1;"; 
 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	public function NextPost($id)
	{	
		$sql = "SELECT * FROM posts WHERE PostId > $id ORDER BY PostId LIMIT 1;"; 
 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	
}