<?php

if(isset($_POST["submit"])){
    $number=$_POST["advertise_form_property_number"];
    $newspaper=$_POST["advertise_form_newspaper"];
    $publish_date=$_POST["advertise_form_publish_date"];
    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
    $sql1= "INSERT INTO advertise VALUES('$number','$newspaper','$publish_date')";
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
    <div class="header"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Employee</a></div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">Advertise Form</div>
            </div>
            <div class="card-body">
                <form action="" method="post" onsubmit="alert('Form is successfully submitted.');">
                    <div class="row">
                        <label for="advertise_form_property_number">Property Number</label>
                        <input type="text" id="advertise_form_property_number" name="advertise_form_property_number" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <label for="advertise_form_newspaper">News Paper</label>
                        <select class="form-control" id="advertise_form_newspaper" name="advertise_form_newspaper" style="appearance: auto" required>
                            <option>Sunday Times</option>
                            <option>Lanka Deepa</option>
                            <option>Mawbima</option>
                            <option>Ada</option>
                            <option>Daily News</option>
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <label for="advertise_form_publish_date">Publish Date</label>
                        <input type="date" id="advertise_form_publish_date" name="advertise_form_publish_date" class="form-control" required>
                    </div>
                    <br>
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





