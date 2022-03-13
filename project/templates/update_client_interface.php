<?php

if(isset($_POST["submit"])){
    $number=$_POST["update_client_interface_client_number"];
    $type=$_POST["update_client_interface_type"];
    $typeupdate=$_POST["update_client_interface_update"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql1="UPDATE client SET $type='$typeupdate' WHERE client_no=$number";
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
                <div style="font-weight: bold">Update a Client</div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <label for="update_client_interface_client_number">Enter Client Number </label>
                        <input type="text" id="update_client_interface_client_number" name="update_client_interface_client_number" class="form-control">
                    </div>
                    <div class="row">
                        <label for="update_client_interface_type">Update</label>
                        <select class="form-control" id="update_client_interface_type" name="update_client_interface_type" style="appearance: auto">
                            <option value="full_name">Name</option>
                            <option value="nic">NIC</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="update_client_interface_update">Enter Update </label>
                        <input type="text" id="update_client_interface_update" name="update_client_interface_update" class="form-control">
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