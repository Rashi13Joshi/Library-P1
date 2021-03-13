<?php
$link = mysqli_connect("localhost", "root", "", "library",);
 // Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = $authors = $description=$image_url=$book_pdf='';

if(isset($_REQUEST['name'])){
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$authors = mysqli_real_escape_string($link, $_REQUEST['authors']);
$description= mysqli_real_escape_string($link, $_REQUEST['description']);
 $image_url=mysqli_real_escape_string($link, $_REQUEST['image_url']);
 $book_pdf=mysqli_real_escape_string($link, $_REQUEST['book_pdf']);}



$sql = "INSERT INTO books (name,authors,description,image_url,book_pdf) VALUES ('$name', '$authors', '$description','$image_url','$book_pdf')";
if(mysqli_query($link, $sql)){
  ?>
 <script type="text/javascript"> alert('Data submitted successfully'); </script>
 <?php
} else{
  ?>
 <script type="text/javascript"> alert('Data not sumbitted'); </script>
 <?php
}

// Close connection
mysqli_close($link);
?>
