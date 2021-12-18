<?php
if(isset($_POST['upload'])){

  // Getting file name
  $filename = $_FILES['imagefile']['name'];
 
  // Valid extension
//  $valid_ext = array('jpeg','jpg');
$valid_ext = array('png');

  // Location
  $location = $filename;
  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);

  // Check extension
 // if(in_array($file_extension,$valid_ext)){


//



    //$_POST['filenamehere']
    
    
    if(empty($_POST['filenamehere'])){

    $postedfilenamehere = 'defaultfilename.png';

    } else {
    $postedfilenamehere = $_POST['filenamehere'];
    }
    
    
    $imgPath = $location; // set your image file

    $im = new IMagick();
    $im->readImage($_FILES['imagefile']['tmp_name']);
   

    

                $imSize = clone $im;
                $imSize->resizeImage( 200, 200,  imagick::FILTER_LANCZOS, 1, TRUE);
//              $imSize->writeImage(sprintf("%s-%s-%.1f.jpg", $imgPath, imagick::FILTER_LANCZOS, 1));
                //$imSize->writeImage($imgPath);
                $imSize->writeImage($postedfilenamehere);
                $imSize->destroy();







//    
    
 // }else{
  //  echo "Invalid file type.";
 // }
}

// Compress image


?>
