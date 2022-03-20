
<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>

<!DOCTYPE html>
<html>

<head>
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<style>
    * {
  background-color: rgb(179, 202, 202);
}

.heading {
  background-color: rgb(46, 56, 56);
  text-align: center;
  font-family: arial;
  font-size: 20px;
  margin: 25px;
  width: 650px;
  height: 100px;
  outline: dashed 3px black;
  margin-left: 300px;
  padding: 12px;
}

.information {
  /* text-align: center;     */
  font-family: arial;
  font-size: 20px;
  margin: 25px;
  width: 650px;
  height: 100px;
}

a {
  background-color: black;
  color: beige;
  float: right;
  margin-top: 220px;
  margin-right: 50px;
  text-size-adjust: 20px;
  width: 90px;
  border: 6px solid black;
  border-radius: 50px;
  text-align: center;
  /* padding: 10px 40px;  
  overflow:hidden; */
  transform-style: preserve-3d;
}


@keyframes bounce {
  0%, 20%, 60%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  40% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
  }
}

a:hover{
    animation: bounce 1s;
}


</style>
<body>
  <div class="looks">

    <div class="heading">
      <h1>DotEvolve's Employee Info</h1>
    </div>
    <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Hello valuable employee, Your details: </h2>
    <div class="information">

      <p>Name:&nbsp;<?php echo $_SESSION['user_name']; ?></p>
      
      <p>DOB- &nbsp;02/05/2000</p>
      <p>Address- &nbsp;Sarojini Nagar, Delhi</p>
      <p>Job Title- &nbsp;Web Developer Intern</p>
      <p>Department- &nbsp;Developing</p>
      <p>Phone Number- &nbsp;9876543210</p>
      <p>Gender- &nbsp;Male</p>
      <p>Id No.- &nbsp; DTEV88120</p>
    </div>


    <a href="logout.php">Logout</a>
  </div>
</body>

</html>
<?php
}

else{
    header("Location: index.php");
    exit();
}
?>
