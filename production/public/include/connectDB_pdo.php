<?php
$serv = "localhost";
$user = "fad";
$pass = "Fad212224236";
$db = "e_fad_db";
try{
    $connect_pdo = new PDO("mysql:host=$serv;db=$db",$user,$pass);
    $connect_pdo->exec("set names utf8mb4");
    $connect_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
   
}catch (PDOException $e){
    echo "Error" . $e->getMessage();
}
/* -----------------------------ตัวอย่าง Insert PDO ใส่ชื่อ DB.Tabel ----------------------------------------------

$sql = "INSERT INTO e_fad_db.jobtitle (job_code, job_name, status,datetime) VALUES (?,?,?,?)";
$stmt= $connect_pdo->prepare($sql);
$stmt->execute([$subject, $description, $linkfiles, $datetime]);

-----------------------------------------------------------------------------------*/

/*-------------------------------- ตัวอย่างการ Select PDO ------------------------------------------

$query = $connect_pdo->query('SELECT * from e_fad_db.department');
$query->setFetchMode(PDO::FETCH_ASSOC);

while($row = $query->fetch()) {
    echo $row['department_code'] . "\n";
}

---------------------------------------------------------------------------------*/

/*

$sql = "UPDATE e_fad_db.jobtitle SET job_code=? WHERE id_job=?";
$connect_pdo->prepare($sql)->execute(["ass", "3"]);

*/
?>