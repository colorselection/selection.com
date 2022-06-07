<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection du couleur</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
 <section>
        <h1>Selection du couleur</h1>
        <br>
        <form   action="database.php" method="post">
        <?php

if(isset($_SESSION["sucess"])){
    echo "
opération réalisée avec succès! ";
}
session_destroy();
?>   
       <select name="color" class="form-select" aria-label="Default select example">
           <option selected></option>
           <option value="red"> red</option>
           <option value="green"> green</option>
           <option value="blue"> blue</option>
           <option value="yellow"> yellow</option>
           <option value="white"> white</option>
       </select>
       <br>
       <input type="submit" value="envoyer">
    </form>
 </section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    display: flex;
    background: rgb(94, 136, 228);
    align-items: center;
    justify-content: center;
    padding: 250px;
}
section{
   height: 250px;
   width: 400px;
   background: white;
}
section h1{
border: 1px solid rgb(184, 176, 176);
text-align: center;
font-size: 30px;
background:pink;
}
section form{
   padding-top: 15px;
   padding-left: 20px;
  padding-right: 5px;
   position: relative;
    width: 380px;
    display: flex;
    flex-direction: column;
}
input[type="submit"]{
    transition: .5s;
    border: 1px solid #2691d9;
  background: #2691d9;
  border-radius: 18px;
  height: 40px;
  font-size: 20px;
  color: white;
  cursor:pointer;
    }
    select{
        height: 40px;
    }
</style>
</body>
</html>