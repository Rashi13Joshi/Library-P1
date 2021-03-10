<?php
      $link = mysqli_connect("localhost", "root", "", "library",);     //Database coonection
      $db=mysqli_select_db($link,'dbsetup.php');

       if(isset($_GET['id'])){

         $id =mysqli_real_escape_string($link, $_GET['id']);

          $query="SELECT * FROM books WHERE id=$id";

         $query_run=mysqli_query($link, $query);

         $row=mysqli_fetch_assoc($query_run);

          mysqli_free_result($query_run);
          mysqli_close($link);

       }
?>
<html>
<head>
<title>Details</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<style>

@media screen and (min-width:50rem)                                          //for big screens
{
      h1{
        font-family: 'Aclonica', sans-serif;
        padding-top: 15px;
        font-size: 70px;
      }
      .right-half {
        background-color: #DCDCDC;
        position: absolute;
        right: 30px;
        width: 40%;
        color:#fff;
        height:82%;
        top: 50px;
        border-radius: 250px;
      }

      img{
        position: absolute;
        right:80px;
        padding-top: 20px;
      }

      .left-half {
        position: absolute;
        left: 0px;
        width: 55%;
        color:grey;
        height:auto;
      }

      p{
        font-size: 20px;
      }

      i,a{
        color:#DC143C;
        font-size: 20px;
      }
}

@media screen and (max-width:50rem){                  //for smaller screen

        h1{
          font-family: 'Aclonica', sans-serif;
          padding-top: 10px;
          margin-bottom: 280px;
        }

        .left-half {
          position: absolute;
          color:#696969;
          height:auto;
        }

        p{
          font-size: 15px;
        }

        img{
          height: 230px;
          width:230px;
          margin-top: 25px;
          margin-left: 10px;
        }

        .right-half {
          background-color: #DCDCDC;
          height: 280px;
          width:280px;
          margin-top: 100px;
          margin-left: 40px;
          border-radius: 150px;
        }


        i,a{
          color:#DC143C;
          font-size: 15px;
        }
      }
</style>
<body>

<!------------------------------------------------------------------------------------>
<div class="container">
      <div class="row ">
            <div class="col left-half">
                   <h1><?php echo $row['name'];?></h1>
                   <i><b>By&nbsp;&nbsp;<?php echo $row['authors'];?></b><br></i>
                   <p><b>Description :</b><br><?php echo $row['description'];?><a href="<?php echo $row['book_pdf']; ?>">Try book</p>
                 </div>
            <div class="col right-half">
            <img src="<?php echo $row['image_url'];?>" height="470" width="350">
            </div>
      </div>
</div>


</body>

</html>
