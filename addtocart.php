<?php require('mysqlconnect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
		{
			$id = $_POST['cartid'];
			$category = $_POST['cartcategory'];
			$username = $_SESSION['username'];
			echo $username;
			echo $id;
			echo $category;
			$sessionid = session_id();
			echo $sessionid;
			$sql = 'INSERT INTO products.cart (sessionid, productid, username, category) VALUES ("'.$sessionid.'", '.$id.', "'.$username.'", "'.$category.'")';
			echo '<br>'.$sql;
			$conn->query($sql);
			$conn->close();
			echo "<script> window.location.assign('index.php'); </script>";
		}
		else
		{
			$id = $_POST['cartid'];
			$sessionid = session_id();
			$category = $_POST['cartcategory'];
			$sql = 'INSERT INTO products.cart (sessionid, productid, category) VALUES ("'.$sessionid.'", '.$id.', "'.$category.'")';
			echo '<br>'.$sql;
			$conn->query($sql);
			$conn->close();
			echo "<script> window.location.assign('index.php'); </script>";
		}
	}
?>