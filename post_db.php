<?php

$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data
include 'db.php';
include 'config.php';
mysqli_select_db($db, DB_NAME) or die(mysqli_error($db));






if($_POST['jobs']) {
    $job    = stripslashes(trim($_POST['job']));
    $org    =stripslashes(trim($_POST['org']));
    $jobloc =stripslashes(trim($_POST['jloc']));
    $jtype  =stripslashes(trim($_POST['type']));
    $jexp   =stripslashes(trim($_POST['jexp']));
    $jpost  =$_POST['jposted'];
    $jdeadline=$_POST['jdeadline'];
    $image = addslashes(file_get_contents($_FILES['jimage']['tmp_name']));
    $image_name = addslashes($_FILES['jimage']['name']);
    $image_size = getimagesize($_FILES['jimage']['tmp_name']);

                move_uploaded_file($_FILES["jimage"]["tmp_name"], "uploads/" . $_FILES["jimage"]["name"]);
                $thumbnails = "uploads/" . $_FILES["jimage"]["name"];
    $jdetail =stripslashes(trim($_POST['jdetail']));
    // $blogTitle    = stripslashes(trim($_POST['blogTitle']));
    // $date   = $_POST['date'];

    // $message = stripslashes(trim($_POST['message']));

    if (empty($job)) {
        $errors['job'] = 'Job name is required.';
    }
    if (empty($org)) {
        $errors['org'] = 'Organization name is required.';
    }
    if (empty($jobloc)) {
        $errors['jloc'] = 'Job Location is required.';
    }
    if (empty($jtype)) {
        $errors['type'] = 'Job type is required.';
    }
    if (empty($jexp)) {
        $errors['jexp'] = 'Experience is required.';
    }
    if (empty($jdeadline)) {
        $errors['jdeadline'] = 'Deadline is required.';
    }
    if (empty($image)) {
        $errors['jimage'] = 'Image is required.';
    }

    // if (empty($blogTitle)) {
    //     $errors['blogTitle'] = 'BlogTitle is required.';
    // }
    // if (empty($date)) {
    //     $errors['email'] = 'Date  is required.';
    // }
    // if (empty($message)) {
    //     $errors['message'] = 'message is required.';
    // }
    // if (empty($image)) {
    //     $errors['image'] = 'image is required.';
    // }
    // if there are any errors in our errors array, return a success boolean or false
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
		$json = array();
					  
           $query = 'INSERT INTO jobs VALUES 
           ("'.$job.'", "'.$org.'", "'.$jpost.'","'.$jobloc.'", "'.$jtype.'", "'.$jexp.'", "'.$jdetail.'", "'.$jdeadline.'", "'.$thumbnails.'" )';

if($db->query($query) == TRUE){
	 	 $data['success'] = true;
        $data['message'] = 'Congratulations. Your message has been sent successfully';

	 }else{
	 	 $data['success'] = false;
		 $data['errors']  = "error in inserting in the db";
	 	echo mysqli_error($db);
	 }
        
       
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}

?>

