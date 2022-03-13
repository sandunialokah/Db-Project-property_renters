<?php

if(isset($_POST["submit"])){
    $company_id=$_POST["property_owner_company_form_company_id"];
    $company_name=$_POST["property_owner_company_form_company_name"];
    $email=$_POST["property_owner_company_form_email"];
    $contact_no=$_POST["property_owner_company_form_contact_no"];
    $address=$_POST["property_owner_company_form_address"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql5 = "INSERT INTO property_owner (type)VALUES('company')";
    mysqli_query($linkz, $sql5);
    $sql4="SELECT max(property_owner_id) from property_owner ";
    $result1 = mysqli_query($linkz,$sql4);
    $row1 =mysqli_fetch_array($result1);
    // mysqli_query($linkz, $sql4);
    $sql1= "INSERT INTO company (company_id, address, contact_no, company_name, email,property_owner_id)VALUES('$company_id','$address','$contact_no', '$company_name', '$email',$row1[0])";
    mysqli_query($linkz, $sql1);

    //$row2 = mysqli_fetch_array($result2);
    //$sql2= "INSERT INTO client_property_requirement (client_no, max_rent, renting_date, area, type)VALUES('$row2[0]', '$max_rent','$renting_date','$area','$type')";
    //mysqli_query($linkz, $sql2);
    // echo "Student ".$name. " was entered.";
//Confirm message
    //echo "<hr>";
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
                <div style="font-weight: bold">Company Registration Form</div>
            </div>
            <div class="card-body">
                <form action="" method="post" onsubmit="alert('Form is successfully submitted.');">

                    <div class="row">
                        <label for="property_owner_company_form_company_id">Company Id</label>
                        <input type="text" id="property_owner_company_form_company_id" name ="property_owner_company_form_company_id" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_company_form_company_name">Full Name</label>
                        <input type="text" id="property_owner_company_form_company_name" name ="property_owner_company_form_company_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_company_form_email">Email</label>
                        <input type="email" id="property_owner_company_form_email" name ="property_owner_company_form_email" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_company_form_contact_no">Contact Number</label>
                        <input type="text" id="property_owner_company_form_contact_no" name="property_owner_company_form_contact_no" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_company_form_address">Address</label>
                        <input type="textarea" id="property_owner_company_form_address" name="property_owner_company_form_address" class="form-control" required>
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