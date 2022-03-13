<?php

if(isset($_POST["submit"])){
    $number=$_POST["property_form_property_owner_number"];
    $branch=$_POST["property_form_branch"];
    $rental=$_POST["property_form_rental"];
    $address=$_POST["property_form_address"];
    $no_of_rooms=$_POST["property_form_no_of_rooms"];
    $type=$_POST["property_form_type"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql1="SELECT branch_no FROM branch WHERE address='$branch'";
    $result1=mysqli_query($linkz, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $sql4="INSERT INTO sewana.pbp_register (branch_no,property_owner_id) VALUES ('$row1[0]', '$number')";
    $result4=mysqli_query($linkz, $sql4);
    $sql3="SELECT max(property_no) FROM sewana.pbp_register";
    $result3=mysqli_query($linkz, $sql3);
    $row3 = mysqli_fetch_array($result3);
    $sql2= "INSERT INTO property (property_no, branch_no, rental, address, no_rooms, $type)VALUES('$row3[0]','$row1[0]', '$rental', '$address', '$no_of_rooms', '1')";
    mysqli_query($linkz, $sql2);


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
    <div class="header"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Property Owner</a></div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">Property Registration Form</div>
            </div>
            <div class="card-body">
                <form id="client_form" action="" method="post" onsubmit="alert('Form is successfully submitted.');">

                    <div class="row">
                        <label for="property_form_property_owner_number">Property Owner Number</label>
                        <input type="text" id="property_form_property_owner_number" name="property_form_property_owner_number" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_form_branch">Branch</label>
                        <select class="form-control" id="property_form_branch" name="property_form_branch" style="appearance: auto" required>
                            <option>Colombo</option>
                            <option>Gampaha</option>
                            <option>Galle</option>
                            <option>Kaluthara</option>
                            <option>Kandy</option>
                            <option>Jaffna</option>
                            <option>Trincomalee</option>
                            <option>Rathnapura</option>
                            <option>Mathara</option>
                            <option>Anuradhapura</option>
                            <option>Polonnaruwa</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_form_rental">Rental</label>
                        <input type="text" id="property_form_rental" name="property_form_rental" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_form_address">Address</label>
                        <input type="text" id="property_form_address" name="property_form_address" class="form-control" required>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <label for="property_form_no_of_rooms">No of Rooms</label>
                        <input type="number" id="property_form_no_of_rooms" name="property_form_no_of_rooms" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_form_type">Type</label>
                        <select class="form-control" id="property_form_type" name="property_form_type" style="appearance: auto" required>
                            <option value="bunglow">Bungalow</option>
                            <option value="annex">Annex</option>
                            <option value="commercial">Commercial</option>
                            <option value="flat">Flat</option>
                        </select>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="form-control mt-3" style="background-color: #6c757d; border: none">
                    </div>
                </form>
            </div>
        </div
    </div>
</div>
</body>
</html>



