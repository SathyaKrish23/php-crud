<?php 
include 'connect.php'; 

if(isset( $_POST['submit'])){
    $user = $_POST['user'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $insert = "insert into {$user} (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con , $insert);

    if($result){
        header("Location:display.php");
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
    <title>New Student</title>
    
    <style>
        *{
            margin:0;
            padding:0;
        }
        
        body{
            background-color: whitesmoke;
        }
        .menu{
            display:flex;
            justify-content:flex-end;
            align-items:center;
            gap:1em;
            margin:1rem;
        }
        .container{
           
            width:100%;
            height:90svh;
            display:grid;
            place-items:center;
        }
        .form-container{
            background-color: lightblue;
            padding:1em;
            outline:1px solid blue;
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
        .popup-danger{
            padding:10px 20px;
            background-color: #ffdddd;
            border-left: 6px solid #f44336;
            outline:1px solid #f44336;
        }
        .user-toggle{
            display:flex;
            flex-wrap:nowrap;
            justify-content:space-evenly;
            /* gap:3em; */
            outline: 1px solid white;
        }
        .user-toggle > div{
            width:100%;
            outline:1px solid white;
            background-color: grey;
          
        }
        .user-toggle > div > label{
            width:100%;
            padding: 5px 20px;
            cursor: pointer;
            font-weight:600;
        }
        #student,#admin{
            display:none;
        }
        input[type="radio"]:checked + label{
            color:white;
            background-color: #1DA2FF;
            transition: background-color 0.5s ease;
        }
        .menu{
            height:10svh;
            display:flex;
            justify-content:flex-end;
            align-items:center;
            gap:1em;
            margin:0 1rem;
        }

    </style>
</head>
<body>

    <div class="menu">
        <a href="index.php" class="btn btn-primary">New Member</a>
        <a href="display.php" class="btn btn-info">Display Members </a>
    </div>
    <div class="container">
    <div class="form-container">
    <form method="post">
        <div class="user-toggle">
            <div>
                <input type="radio" name="user" id="student" value="student" checked>
                <label for="student">Student</label>   
            </div>
            <div>
                <input type="radio" name="user" id="admin" value="admin">
                <label for="admin">Admin</label>
            </div>
        </div>
        <h3 class="text-center mt-2">REGISTER</h3>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div>
                <label for="mobile">Mobile</label>
                <input type="number" name="mobile" class="form-control" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
</body>
</html>