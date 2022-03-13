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
        <div class="col"><a href="home.php" style="text-decoration: none; color: black"> Sewana Property Renters - Employee</a></div>
    </div>

    <div class="container-fluid pt-4">
        <div class="card">
            <div class="card-header">
                <div style="font-weight: bold">View Property</div>
            </div>
            <div class="card-body">
                <?php

                // if(isset($_POST["submit"])){
                $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
                // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
                $sql1="SELECT pbp.property_owner_id, p.property_no, p.branch_no, p.rental, p.address, p.no_rooms, p.flat, p.annex, p.commercial, p.bunglow FROM sewana.property p LEFT JOIN sewana.pbp_register pbp ON p.property_no = pbp.property_no";

                $result1=mysqli_query($linkz, $sql1);

                if($result1){

                    echo "<table class='table table-hover table-bordered table-sm'>
                        <tr>
                        <th>Property Owner ID</th>
                        <th>Property Number</th>
                        <th>Branch Number</th>
                        <th>Rental</th>
                        <th>Address</th>
                        <th>Number of Rooms</th>
                        <th>Flat</th>
                        <th>Annex</th>
                        <th>Commercial</th>
                        <th>Bunglow</th>
                        
                        
                        </tr>";

                    while($row1 = mysqli_fetch_array($result1)) {
                        echo "<tr>";
                        echo "<td>" . $row1[0] . "</td>";
                        echo "<td>" . $row1[1] . "</td>";
                        echo "<td>" . $row1[2] . "</td>";
                        echo "<td>" . $row1[3] . "</td>";
                        echo "<td>" . $row1[4] . "</td>";
                        echo "<td>" . $row1[5] . "</td>";
                        echo "<td>" . $row1[6] . "</td>";
                        echo "<td>" . $row1[7] . "</td>";
                        echo "<td>" . $row1[8] . "</td>";
                        echo "<td>" . $row1[9] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else{
                    echo "<center> not found </center>";
                }



                mysqli_close($linkz);
                // }

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


