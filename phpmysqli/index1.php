<?php
include 'inc/header.php';
?>

<?php

  $db = new mysqli("localhost","root","","test");
 if (mysqli_connect_errno()) {
 	    echo "Connection failed..";
 	    exit();
 }

 // $sql  = "UPDATE tbl_user SET skill='java, php' WHERE id = '1'";

// $result = $db->query($sql); 
 // while ( $data = $result->fetch_object()) {
 	
 // 	echo "<pre>";
 // 	echo $data->skill;
 // 	echo "</pre>";
 // }

 // $sql = "SELECT name, skill FROM tbl_user ORDER BY id";

 //  $stmt = $db->prepare($sql); 
 // $stmt->execute();
 // $stmt->bind_result($name, $skill);
 // while ($stmt->fetch()) {
 // 	echo "$skill<br/>";
 // }


//  $sql = "INSERT INTO tbl_user(name, email, skill) VALUES(?,?,?)";

// $stmt = $db->prepare($sql);
// $stmt->bind_param("sss",$name,$email,$skill);

// $name="Abid Hasan";
// $email="abid@gmail.com";
// $skill="PHP Developer";
// $stmt->execute();
// $stmt->close();
// $db->close();

 // $sql = "SELECT image FROM images WHERE id=?";
 // $stmt = $db->prepare($sql);
 // $stmt->bind_param('i',$id);
 // $id = 1;
 // $stmt->execute();
 // $stmt->bind_result($image);
 // $stmt->fetch();
 // header("content-type: png");
 // echo '<img src="data:image/png;base64, '.base64_encode($image).'">';



 // $sql = "INSERT INTO images(image) VALUES(?)";



 // $stmt = $db->prepare($sql);
 // $stmt->bind_param("b",$image);
 // $image = file_get_contents(""); 
 // $stmt->send_long_data(0, $image);
 // $stmt->execute();





?>






<?php
include 'inc/footer.php';
?>