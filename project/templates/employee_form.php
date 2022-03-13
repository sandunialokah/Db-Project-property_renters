<?php

if(isset($_POST["submit"])){
    $name=$_POST["employee_form_name"];
    $nic=$_POST["employee_form_nic"];
    $dob=$_POST["employee_form_dob"];
    $branch_no=$_POST["employee_form_branch_no"];
    $gender=$_POST["employee_form_gender"];
    $start_date=$_POST["employee_form_start_date"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database

    $sql1= "INSERT INTO employee (branch_no, name, salary, nic,start_date,gender, dob)VALUES('$branch_no','$name','25,000', '$nic','$start_date','$gender', '$dob')";
    mysqli_query($linkz, $sql1);
    $sql2="SELECT emp_id FROM sewana.employee WHERE nic=$nic";
    $result2=mysqli_query($linkz, $sql2);
    $row2 = mysqli_fetch_array($result2);

    // echo "Student ".$name. " was entered.";
//Confirm message
    // echo "<hr>";
    mysqli_close($linkz);
    echo "<script>onsubmit(alert('Employee number: $row2[0]'))</script>";
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
                <div style="font-weight: bold">Employee Registration Form</div>
            </div>
            <div class="card-body">
                <form action="" method=post onsubmit="alert('Form is successfully submitted.');">

                    <div class="row">
                        <label for="employee_form_branch_no">Branch No.</label>
                        <input type="text" id="employee_form_branch_no" name ="employee_form_branch_no" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="employee_form_nic">National Identity Card Number</label>
                        <input type="text" id="employee_form_nic" name="employee_form_nic" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="employee_form_name">Full Name</label>
                        <input type="text" id="employee_form_name" name="employee_form_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="employee_form_dob">Date of Birth</label>
                        <input type="date" id="employee_form_dob" name="employee_form_dob" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="employee_form_gender">Gender</label>
                        <label for="employee_form_gender">Male &nbsp;<input type="radio" id="employee_form_gender" name="employee_form_gender" value='M'></label>
                        <label for="employee_form_gender">Female &nbsp;<input type="radio" id="employee_form_gender" name="employee_form_gender" value='F'></label>
                    </div>
                    <br>
                    <div class="row">
                        <label for="employee_form_start_date">Start Date</label>
                        <input type="date" id="employee_form_start_date" name="employee_form_start_date" class="form-control" required>
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
