<?php
 
 session_start();
 include "php/config.php";
 if(isset($_POST['edit']))
 {
    $unique_id=$_SESSION['unique_id'];
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = strip_tags($_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $select= "select * from users where unique_id='$unique_id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['unique_id'];
    if($res === $unique_id)
    {
            $imageName = $userImage ['name'];
            $fileType  = $userImage['type'];
            $fileSize  = $userImage['size'];
            $fileTmpName = $userImage['tmp_name'];
            $fileError = $userImage['error'];

            $fileImageData = explode('/',$fileType);
            $fileExtension = $fileImageData[count($fileImageData)-1];

            
            if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg'){
                //Process Image
                
                if($fileSize < 5000000){
                    //var_dump(basename($imageName));

                    $fileNewName = "php/images/".$imageName;
                    
                    $uploaded = move_uploaded_file($fileTmpName,$fileNewName);
                    
                    if($uploaded){
                        $loggedInUser = $_SESSION['unique_id'];
                        
       $update = "update users set fname='$fname',lname='$lname',email='$email' ,img='$imageName' where unique_id='$loggedInUser'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:users.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:editPro.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:editPro.php');
    }

?>
