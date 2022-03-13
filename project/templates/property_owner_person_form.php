<?php

if(isset($_POST["submit"])){
    $nic=$_POST["property_owner_person_form_nic"];
    $name=$_POST["property_owner_person_form_name"];
    $email=$_POST["property_owner_person_form_email"];
    $contact_no=$_POST["property_owner_person_form_contact_no"];
    $address=$_POST["property_owner_person_form_address"];
    //$type=$_POST["property_owner_person_form_type"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql5 = "INSERT INTO property_owner (type)VALUES('person')";
    mysqli_query($linkz, $sql5);
    $sql4="SELECT max(property_owner_id) from property_owner";
    $result1 = mysqli_query($linkz,$sql4);
    $row1 =mysqli_fetch_array($result1);
    // mysqli_query($linkz, $sql4);
    $sql1= "INSERT INTO person (nic, address, contact_no, name, email,property_owner_id)VALUES('$nic','$address','$contact_no', '$name', '$email',$row1[0])";
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
                <div style="font-weight: bold">Person Registration Form</div>
            </div>
            <div class="card-body">
                <form action="" method="post" onsubmit="alert('Form is successfully submitted.');">

                    <div class="row">
                        <label for="property_owner_person_form_nic">National Identity Card Number</label>
                        <input type="text" id="property_owner_person_form_nic" name="property_owner_person_form_nic" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_person_form_name">Full Name</label>
                        <input type="text" id="property_owner_person_form_name" name="property_owner_person_form_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_person_form_email">Email</label>
                        <input type="text" id="property_owner_person_form_email" name="property_owner_person_form_email" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_person_form_contact_no">Contact Number</label>
                        <input type="text" id="property_owner_person_form_contact_no" name="property_owner_person_form_contact_no" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="property_owner_person_form_address">Address</label>
                        <input type="textarea" id="property_owner_person_form_address" name="property_owner_person_form_address" class="form-control" required>
                    </div>
                    <!--                    <div class="row">-->
                    <!--                        <label for="property_owner_person_form_type">Type</label>-->
                    <!--                        <select class="form-control" id="property_owner_person_form_type" name="property_owner_person_form_type" style="appearance: auto">-->
                    <!--                            <option>Bungalow</option>-->
                    <!--                            <option>Annex</option>-->
                    <!--                            <option>Commercial</option>-->
                    <!--                            <option>Flat</option>-->
                    <!--                        </select>-->
                    <!--                    </div>-->
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


