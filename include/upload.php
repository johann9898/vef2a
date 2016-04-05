<?php
use File\Upload;

if (isset($_POST['upload'])) {

    echo "<pre>";
    
    print_r($_FILES);

    echo "</pre>";

    $destination = $_SERVER['DOCUMENT_ROOT'] . "/2T/1608984379/vef_2a/images/";
    require_once 'File/Upload.php';
    // echo $destination;
    try {
        $loader = new Upload($destination);
        $loader->upload();
        $result = $loader->getMessages();
    } 
    catch (Exception $e) {
        echo "<script type='text/javascript'>alert('$e->getMessage()')</script>";
    }
    }
?>