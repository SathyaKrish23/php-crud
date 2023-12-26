<?php include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <!-- JQuery
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>
     -->
   <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
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
        .icon{
            width:20px;
        }

        #student-table, #admin-table{
            width: 100%;
        }
        th{
            font-size:clamp(12px, 4vw, 18px);
        }
        td{
            font-size:clamp(10px, 4vw, 16px);
        }
      
        
    </style>
</head>
<body>
    <div class="menu">
        <a href="index.php" class="btn btn-primary">New Member</a>
        <a href="display.php" class="btn btn-info">Display Members </a>
    </div>

    <!-- Student -->

<div class="table-responsive mt-5" id="student-table">
        <h4 class="text-center mb-5">STUDENT TABLE</h4>
        <table class="table text-center" id="student-table" class="display" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">MOBILE</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">OPERATION</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $user = "student";
                    $sql = "select * from {$user}";
                    $result = mysqli_query($con,$sql);

                    if($result ==  FALSE){
                        die(mysqli_error());
                    };

                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td> {$row['id']} </td>
                                <td> {$row['name']} </td>
                                <td> {$row['email']} </td>
                                <td> {$row['mobile']} </td>
                                <td> {$row['password']} </td>
                                <td> <a href='update.php?updateId={$row['id']}&user={$user} ' class='btn btn-info'><img src='.\images\update.png' alt='edit icon' class='icon'></a>
                                <a href='delete.php?deleteId={$row['id']}&user={$user}' class='btn btn-danger'> <img src='.\images\bin.png' alt='delete icon' class='icon'></a>  </td>
                              </tr>";
                    }
                    
                    
                ?>
            </tbody>
        </table>
    </div>

        <!-- Admin -->

        <div class="table-responsive mt-5" id="student-table">
        <h4 class="text-center mb-5">ADMIN TABLE</h4>
        <table class="table text-center" id="admin-table" class="display" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">MOBILE</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">OPERATION</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $user = "admin";
                    $sql = "select * from {$user}";
                    $result = mysqli_query($con,$sql);

                    if($result ==  FALSE){
                        die(mysqli_error());
                    };

                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                                <td> {$row['id']} </td>
                                <td> {$row['name']} </td>
                                <td> {$row['email']} </td>
                                <td> {$row['mobile']} </td>
                                <td> {$row['password']} </td>
                                <td> <a href='update.php?updateId={$row['id']}&user={$user}' class='btn btn-info'><img src='images\update.png' alt='edit icon' class='icon'></a>
                                <a href='delete.php?deleteId={$row['id']}&user={$user} ' class='btn btn-danger'> <img src='images\bin.png' alt='delete icon' class='icon'></a>  </td>
                              </tr>";
                    }
                    
                ?>
            </tbody>
        </table>
    </div>



  <!-- <script defend type="text/javascript">
    $(document).ready(function(){
        $('#student-table').DataTable();
    });
    $(document).ready(function(){
        $('#admin-table').DataTable();
    });
</script> -->
 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>


</body>
</html>