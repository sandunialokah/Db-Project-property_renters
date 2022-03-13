<?php

if(isset($_POST["submit"])){
    $number=$_POST["delete_client_interface_client_number"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql1="DELETE FROM client WHERE sewana.client.client_no=$number";
    mysqli_query($linkz, $sql1);
    // echo "Student ".$name. " was entered.";
//Confirm message
    // echo "<hr>";
    mysqli_close($linkz);
}
?>

<html>
<head>
    <title>Rent</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
<div class="container-fluid p-0">
    <div class="header">
        <div class="col"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Manager</a></div>
    </div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">Delete a Client</div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <label for="delete_client_interface_client_number">Enter Client Number </label>
                        <input type="text" id="delete_client_interface_client_number" name="delete_client_interface_client_number" class="form-control">
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="form-control mt-3" style="background-color: #6c757d; border: none">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
