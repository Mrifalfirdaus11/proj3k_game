<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "loginregister");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $id = rand(10000, 100000);
  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $tanggal = date("Y-m-d");

  if(empty($name) || empty($username) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query = "INSERT INTO tb_user VALUES('$id', '$name', '$username', '$password', '$tanggal')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"]; 
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>