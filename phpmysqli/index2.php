<?php
include 'inc/header.php';
?>


<?php

$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";


try{
	$pdo = new PDO($dsn, $user, $pass);
}catch( PDOException $e){
    echo "Connection fail......".$e->getMessage();
}


// $sql="SELECT * FROM tbl_user";
// $result = $pdo->query($sql);
// foreach ($result as $value) {
// 	echo $value['skill']."<br/>";
// }
// $name="Ariful Islam";
// $email="ariful@gmail.com";
// $skill="Blogger";
// $age="26";

// $id = 1;
// $sql = "SELECT * FROM tbl_user WHERE id=?";
// $stmt = $pdo->prepare($sql);
// $stmt->bindValue(1, $id);
// $stmt->execute();
// while ($data = $stmt->fetch()) {
// 	echo "Name: ".$data['name']."<br/>";
// 	echo "Skill: ".$data['skill']."<br/>";
// }



// $sql = "INSERT INTO tbl_user(name, email, skill, age) VALUES(?, ?, ?, ?)";
// $stmt = $pdo->prepare($sql);
// $arr  = array($name, $email, $skill, $age);
// $stmt->execute($arr);



// $sql = "INSERT INTO tbl_user(name, email, skill, age) VALUES(:name, :email, :skill, :age)";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':name',$name, PDO::PARAM_STR);
// $stmt->bindParam(':email',$email, PDO::PARAM_STR);
// $stmt->bindParam(':skill',$skill, PDO::PARAM_STR);
// $stmt->bindParam(':age',$age, PDO::PARAM_INT);
// $stmt->execute();


 // $id = 1;
 // $skill = "JAVA PHP";

 // $sql = "UPDATE tbl_user SET skill=:skill WHERE id=:id ";
 // $stmt = $pdo->prepare($sql);

 //  $stmt->bindParam(':skill', $skill);
 //  $stmt->bindParam(':id', $id);
 //  $stmt->execute();

 // $id = 8;
 // $sql = "DELETE FROM tbl_user WHERE id=:id ";
 // $stmt = $pdo->prepare($sql);


 //  $stmt->bindParam(':id', $id);
 //  $stmt->execute();


?>



<?php
include 'inc/footer.php';
?>