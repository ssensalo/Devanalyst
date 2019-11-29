<?php 
include 'db.php';
include 'config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));
$sub_name = "";
$sub_email = "";
if(isset($_POST["subscribe"])){
    $sub_name    = stripslashes(trim($_POST['sub_name']));
    $sub_email    = stripslashes(trim($_POST['sub_email']));

    $sub_existing = $db->query("SELECT * FROM subscribers WHERE email ='$sub_email'");
    if ($sub_existing->num_rows == 0) {
        $query = 'INSERT INTO subscribers 
        VALUES (null, "'.$sub_name.'", "'.$sub_email.'")';
            
        if($db->query($query) == TRUE){
        $message = "Congratulations. You have subscribed to our news letter";

        }else{
        $message  = "error in inserting in the db";
        echo mysqli_error($db);
        }
    }else{
        echo "Already subscribed";
    }

}

?>