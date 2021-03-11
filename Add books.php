<html>
<head>
<title>Add Book</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<style>

body{
font-family: 'Patrick Hand', cursive;
}

@media screen and (min-width:50rem){
  .frame{
    border-top: 3px solid #DCDCDC;
    border-bottom: 3px solid #DCDCDC;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    width:540px;
    height:500px;
    border-radius: 5px;
  }



  input{
    text-align: center;
    width:510px;
    border: 2px solid #DCDCDC;
    border-radius: 5px;
  }
  label{
    margin-top: 17px;
    font-size: 18px;
    padding-left: 10px;
    color:#696969;
  }

  .submit{
    width:80px;
    background-color: #fff;
    border-color: #DC143C;
    color:#DC143C;
    margin-top: 10px;
  }
}

h4{
  color:#fff;
  font-size: 2.5vw;
  border: 1px solid #DC143C;
  border-radius: 5px;
  text-align: center;
  margin-top: 20px;
  position: absolute;
  right:10px;
  width: 20%;
  background-color: #DC143C;
}

h1{
  color:#DC143C;
  font-size: 6vw;
}


@media screen and (max-width:50rem){
  .frame{
    border-top: 3px solid #DCDCDC;
    border-bottom: 3px solid #DCDCDC;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: auto;
    margin-top: 15px;
    width:340px;
    height:520px;
    border-radius: 5px;
  }

  h1{
    padding-top: 15px;
  }


  label{
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 18px;
    padding-left: 10px;
    width:150px;
    color:#DC143C;
  }

  input{
    border-radius: 5px;
    text-align: center;
    border-color: #DC143C;
    width:300px;
    margin-bottom: 10px;
  }

  .submit{
    width:100px;
    margin-left: 5px;
    background-color: #fff;
    border-color: #DC143C;
    color:#DC143C;
    margin-top: 30px;
    margin-left: 80px;
  }


}
#description{
  height:60px;
}



</style>

</head>
<body>
 <div class="container ">
   <div class="row">
       <div class="col">
            <h1>Welcome book nut!!</h1>
       </div>
       <div class="col">
          <a href="Library.php"><h4>Home</h4></a>
       </div>
  </div>
    <form action="dbsetup.php">
   <div class="row frame">
             <div class="col-4">
                  <label for="name">Book Name</label><br>
                  <input id="name" name="name" required placeholder="Name">
                  <label for="author">Author(s)</label><br>
                  <input id="authors" name="authors" required placeholder="Author(s)">
                  <label for="description">Description</label>
                  <input id="description" name="description" required placeholder="Describe the book">
                  <label for="image_url">Image URL</label>
                  <input id="image_url" name="image_url" required pattern="^(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))\.?)(?::\d{2,})?(?:[/?#]\S*)?$" placeholder="Image URL">
                  <label for="book_pdf">Book PDF URL</label>
                  <input id="book_pdf" name="book_pdf" pattern="^(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))\.?)(?::\d{2,})?(?:[/?#]\S*)?$" placeholder="Book PDF URL">
                  <input class="submit" type="submit" value="SAVE">
             </div>
    </div>
  </form>
</body>
</html>
