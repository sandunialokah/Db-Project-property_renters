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
        <div class="col"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Property Owner</a>
            <span style="float: right; padding-left: 15px"><a href="property_owner_company_form.php" style="text-decoration: none; color: black"> Company Form</a></span>
            <span style="float: right; padding-left: 15px"><a href="property_owner_person_form.php" style="text-decoration: none; color: black"> Person Form</a></span>
            <span style="float: right"><a href="property_form.php" style="text-decoration: none; color: black"> Property Form</a></span>
        </div>
    </div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">Advertised Properties</div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <label for="property_owner_interface_property_owner_id">Enter Property Owner Id </label>
                        <input type="text" id="property_owner_interface_property_owner_id" name="property_owner_interface_property_owner_id" class="form-control">
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="form-control mt-3" style="background-color: #6c757d; border: none">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">Clients</div>
            </div>
            <div class="card-body">
                <?php

                if(isset($_POST["submit"])){
                    $number=$_POST["property_owner_interface_property_owner_id"];
                    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
                    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
                    $sql1="SELECT property_no FROM pbp_register WHERE property_owner_id=$number";
                    $result1=mysqli_query($linkz, $sql1);
                    $row1 = mysqli_fetch_array($result1);
                    $sql2="SELECT property_no, newspaper_name, publish_date FROM sewana.advertise WHERE property_no=$row1[0]";
                    $result2=mysqli_query($linkz, $sql2);
                    if($result2){

                        echo "<table class='table table-hover table-bordered table-sm'>
                            <tr>
                            <th>Property Number</th>
                            <th>Newspaper Name</th>
                            <th>Publish Date</th>
                            </tr>";

                        while($row2 = mysqli_fetch_array($result2)) {
                            echo "<tr>";
                            echo "<td>" . $row2[0] . "</td>";
                            echo "<td>" . $row2[1] . "</td>";
                            echo "<td>" . $row2[2] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<center> not found </center>";
                    }
                    mysqli_close($linkz);
                }

                // echo "Student ".$name. " was entered.";
                //Confirm message
                // echo "<hr>";
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
