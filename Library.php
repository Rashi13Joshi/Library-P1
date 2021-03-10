
<html>
 <head>
   <title>Library</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Reggae+One&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>

   body {
     background-image: url("imageedit_2_6915477300.png");
     background-size: cover;
   }

    h1{
      text-align: center;
      font-family: 'Reggae One', cursive;
      color:#DC143C;
      font-size: 4vw;
      padding-top: 20px;
    }

    h4{
      color:#fff;
      font-size: 2vw;
      border: 1px solid #DC143C;
      border-radius: 5px;
      text-align: center;
      margin: auto;
      width: 20%;
      padding: 8px;
      font-family: 'Montserrat Alternates', sans-serif;
      background-color: #DC143C;
    }
  /*  .resize {
      width: 100%;
      max-width: 50px;
      height: auto;
    }*/

/*.field{
  border-radius: 15px;
  background-color: grey;
  width:150px;
  height:200px;
}*/



    img{
      border-top: 4px solid #fff;
      border-right: 4px solid #fff;
      border-left: 4px solid #fff;
      border-bottom: 4px solid #fff;
      background-color: #fff;
      border-radius: 10px;
    }

    p{
      border-top: 4px solid #fff;
      border-right: 4px solid #fff;
      border-left: 4px solid #fff;
      border-bottom: 4px solid #fff;
      background-color: #fff;
      border-radius: 10px;
      width:180px;
      font-size: 75%;
      font-family: 'Montserrat Alternates', sans-serif;
      margin-bottom: 35px;
    }

    @media screen and (max-width:50rem){
      p{
        width:140px;
      }

    }
  </style>
</head>
<body>
  <h1>Be awesome...be a book nut!!</h1>
  <a href="Add Books.php"><h4>Add More</h4></a>
  <br>
<!------------------------------------------------------------------------------------>
  <div class="container">
        <div class="row ">
          <?php
          $link = mysqli_connect("localhost", "root", "", "library",);
          $db=mysqli_select_db($link,'dbsetup.php');
          $query="SELECT * FROM books";
          $query_run=mysqli_query($link,$query);

          if($query_run)
          {
            foreach($query_run as $row)
            {
              ?><div class="col">
                <img src="<?php echo $row['image_url'];?>" height="150" width="150">
                <p><b><?php echo $row['name'];?> <br><i><?php echo $row['authors'];?></i><br><a href="Book Details.php?id=<?php echo $row['id']?>">Know more</a></p></b>
              </div><?php
            }

          }
          ?>

      </div>
  </div>
</body>

</html>


<!----http://localhost/phpmyadmin/sql.php?db=library&table=books&pos=0-->
