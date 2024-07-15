<?php
$isDataReady = "";
if (isset($_POST["submit"])){
    $title = $_POST["title"] ? $_POST["title"] : "" ;
    $author = $_POST["author"] ? $_POST["author"] : "" ;
    $genre = $_POST["genre"] ? $_POST["genre"] : "" ;
    $description = $_POST["description"] ? $_POST["description"] : "" ;

    if(empty($coverimg) || empty($title) || empty($author) || empty($genre) || empty($description)){
      $msg = "Please fill up all the fields";
    }


    if ($isDataReady) {

        // storing name and temp name of file
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
    
        // stroring images in $coverimg variable 
        $coverimg = "images/".$filename;
        // echo $$coverimg;
        move_uploaded_file($tempname, $coverimg);
    
            $subjectStr = implode(", ", $subject);
                  $insert = "INSERT INTO `upload_books`(`image`, `title`, `author`, `genre`, `description`) VALUES ('$coverimg','$title', '$author', '$genre', '$description')";

    
            print_r($insert);
            die;
            $result = mysqli_query($conn, $insert);
    
            if ($result) {
                header('location: ./read.php');
                exit();
            } else {
                echo "failed";
            }
        }
    
    }
    

?>

<div class="container">

<form class="row g-3 pt-100 pb-100" action="<?php SITE_URL ?>uploadForm"  method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="coverimg" class="form-label">Book cover</label>
        <input class="form-control form-control-lg" type="file" id="coverimg" name="coverimg">
    </div>
    <div class="col-md-6">
        <label for="title" class="form-label">Title</label>
        <input type="email" class="form-control" id="title" name="title">
    </div>
    <div class="col-md-4">
        <label for="author" class="form-label">Author</label>
        <input type="password" class="form-control" id="author" name="author">
    </div>
    <div class="col-md-2">
        <label for="genre" class="form-label">genre</label>
        <input type="text" class="form-control" id="genre" name="genre">
    </div>
    <div class="col-12">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="col-12 d-flex justify-content-center" >
        <button type="submit" class="solid-btn mt-30" name="submit" > Submit </button>

    </div>
</form>
</div>

