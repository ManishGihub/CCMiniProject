<?php

if(isset($_POST['upload'])){
    $file_name = $_FILES['myfile']['name'];
    $file_tmp_name = $_FILES['myfile']['tmp_name'];
    if(move_uploaded_file($file_tmp_name,"uploads/".$file_name)){
        echo "File Uploaded successfully.";
    }
    else{
        echo "Error.... Please try again.";
    }
}

?>

<a download="<?php echo $file_name; ?>" href="uploads/<?php echo $file_name; ?>">Click here to Download</a>