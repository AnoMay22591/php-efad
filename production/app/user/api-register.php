<?php
//  $status = move_uploaded_file($_FILES['files']['tmp_name'],$_FILES['files']['name']);
// echo  $status;
if(isset($_FILES['files']['name'])){

    $file = $_FILES['files'];
    // print_r($file);
    $status = move_uploaded_file($file['tmp_name'],$file['name']);
    echo  $file['name'];//$status;
}

// if(isset($_FILES['files']['name'][0])){
//     $value = '';
//     for($i = 0 ; $i < count($_FILES['files']['name']) ; $i++){
//         $value = $_FILES['files']['name'][0];
//         // print_r($_FILES)
//         // $file = strtolower($_FILES['files']['name'][0]);
//         // $org = getFilename($_FILES['files']['name'][0]);
//         // $name_org = pathinfo(basename($_FILES['files']['name'][0]),PATHINFO_FILENAME); 
//         // $var = pathinfo(basename($_FILES['files']['name'][0]),PATHINFO_EXTENSION); 
//         // $random = rand(0000, 9999);
//         // $mk_type = $random.strtotime("now");
//         // echo $imgandtype = $mk_type.".".$var;
                    
//         // if(move_uploaded_file($_FILES['files']["tmp_name"][0],'../tempfiles/'.$imgandtype)){
//         //     $sql = "INSERT INTO e_fad_db.local_files_upload (auto_filesname, old_filesname, extension,date) VALUES (?,?,?,?)";
//         //     $stmt= $connect_pdo->prepare($sql);
//         //     $stmt->execute([$mk_type, $org, $var, $datetime]);
//         //     if( $stmt ){

//         //     }else{
//         //         $status_retuen = "n";
//         //     }
//         // }
//     }
// }
  

// echo $value;

// function getFilename($path){
//     if (strpos($path, '/') === false)
//     {
//         $path_parts = pathinfo('a'.$path);
//     }
//     else
//     {
//         $path= str_replace('/', '/a', $path);
//         $path_parts = pathinfo($path);
//     }
//     return substr($path_parts["filename"],1);
// }
?>