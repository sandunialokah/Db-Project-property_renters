<?php

if(isset($_POST["submit"])){
    $number=$_POST["client_form_employee_number"];
    $name=$_POST["client_form_name"];
    $nic=$_POST["client_form_nic"];
    $email=$_POST["client_form_email"];
    $branch=$_POST["client_form_branch"];
    $max_rent=$_POST["client_form_max_rent"];
    $renting_date=$_POST["client_form_renting_date"];
    $area=$_POST["client_form_area"];
    $type=$_POST["client_form_type"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql1="SELECT branch_no FROM branch WHERE address='$branch'";
    $result1=mysqli_query($linkz, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $sql2= "INSERT INTO client (full_name, nic, email, branch_no)VALUES('$name','$nic','$email', '$row1[0]')";
    mysqli_query($linkz, $sql2);
    $sql3="SELECT client_no FROM client WHERE nic='$nic'";
    $result3=mysqli_query($linkz, $sql3);
    $row3 = mysqli_fetch_array($result3);
    $sql4= "INSERT INTO client_property_requirement (client_no, max_rent, renting_date, area, type)VALUES('$row3[0]', '$max_rent','$renting_date','$area','$type')";
    mysqli_query($linkz, $sql4);
    $sql5="INSERT INTO sewana.bce_register (client_no, emp_id, branch_no) VALUES ('$row3[0]', '$number', '$row1[0]')";
    mysqli_query($linkz, $sql5);
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
    <div class="header"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Employee</a></div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">Client Registration Form</div>
            </div>
            <div class="card-body">
                <form action="" method="post" onsubmit="alert('Form is successfully submitted.');">
                    <div class="row">
                        <label for="client_form_employee_number">Employee Number</label>
                        <input type="text" id="client_form_employee_number" name="client_form_employee_number" class="form-control" required>
                    </div>
                    <div class="row">
                        <label for="client_form_name">Full Name</label>
                        <input type="text" id="client_form_name" name="client_form_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="client_form_nic">NIC</label>
                        <input type="text" id="client_form_nic" name="client_form_nic" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="client_form_email">Email</label>
                        <input type="email" id="client_form_email" name="client_form_email" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="client_form_branch">Branch</label>
                        <select class="form-control" id="client_form_branch" name="client_form_branch" style="appearance: auto" required>
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
                        <label for="client_form_max_rent">Max Rent</label>
                        <input type="number" id="client_form_max_rent" name="client_form_max_rent" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="client_form_renting_date">Renting Date</label>
                        <input type="date" id="client_form_renting_date" name="client_form_renting_date" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="client_form_area">Area</label>
                        <input type="text" id="client_form_area" name="client_form_area" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="client_form_type">Type</label>
                        <select class="form-control" id="client_form_type" name="client_form_type" style="appearance: auto" required>
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


