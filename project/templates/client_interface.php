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
        <div class="col"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Client</a></div>
    </div>
    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">View Properties</div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <label for="client_interface_client_number">Enter Client Number </label>
                        <input type="text" id="client_interface_client_number" name="client_interface_client_number" class="form-control">
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
                <div style="font-weight: bold">Properties</div>
            </div>
            <div class="card-body">
                <?php

                if(isset($_POST["submit"])){
                    $number=$_POST["client_interface_client_number"];
                    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
                    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
                    $sql1="SELECT max_rent, renting_date, area, type FROM sewana.client_property_requirement WHERE client_no=$number";


                    // if ($result) {
                    //     if (mysql_num_rows($result) > 0) {
                    //       echo 'found!';
                    //     } else {
                    //       echo 'not found';
                    //     }
                    //   } else {
                    //     echo 'Error: '.mysql_error();
                    //   }


                    $result1=mysqli_query($linkz, $sql1);
                    $row1 = mysqli_fetch_array($result1);
                    $sql2="SELECT property_no, address, rental, no_rooms FROM sewana.property WHERE rental<=$row1[0] AND $row1[3]=1 AND  address LIKE '%$row1[2]%'";
                    $result2=mysqli_query($linkz, $sql2);

                    if($result2){

                        echo "<table class='table table-hover table-bordered table-sm'>
                        <tr>
                        <th>Address</th>
                        <th>Rental</th>
                        <th>No of Rooms</th><th>Property No</th>
                        
                        </tr>";

                        while($row2 = mysqli_fetch_array($result2)) {
                            echo "<tr>";
                            echo "<td>" . $row2[1] . "</td>";
                            echo "<td>" . $row2[2] . "</td>";
                            echo "<td>" . $row2[3] . "</td>";
                            echo "<td>" . $row2[0] . "</td>";
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
