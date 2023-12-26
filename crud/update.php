<?php include 'connect.php';

$id = $_GET['updateId'];
$user = $_GET['user'];



$sql = "select * from `$user` where id = $id ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $update = "update `$user` set id = $id, name = '$name' , email = '$email' , mobile=$mobile , password = '$password' where id = $id ";
    $result = mysqli_query($con , $update);

    if($result){
        header("Location:display.php");
        // echo "<p class='popup-success'>Your Record Saved Successfully</p>";
    }else{
        die(mysqli_error());
    }
 }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
         *{
            margin:0;
            padding:0;
        }
        body{
            background-color: whitesmoke;
            width:100%;
            height:100svh;
            display:grid;
            place-items:center;
        }
        .form-container{
            background-color: lightgreen;
            padding:1em;
            outline:1px solid red;
            width:clamp(280px, 80vw, 300px);
        }
        form{
            display:flex;
            flex-direction:column;
            justify-content: center;
            gap:1em;
        }
        .popup-success{
            padding:10px 20px;
            background-color: #ddffdd;
            border-left: 6px solid #04AA6D;
            outline:1px solid #04AA6D;
        }
    </style>
</head>
<body>
<div class="form-container">
        <h3 class="text-center mt-3">UPDATE INFO</h3>
        <form method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value = <?php echo $name ?> >
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value = <?php echo $email ?>>
            </div>
            <div>
                <label for="mobile">Mobile</label>
                <input type="number" name="mobile" class="form-control" value = <?php echo $mobile ?>>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value = <?php echo $password ?>>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-secondary" href="display.php">Cancel</a>
        </form>
    </div>
    
</body>
</html>