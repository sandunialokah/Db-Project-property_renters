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
                <div style="font-weight: bold">View Clients</div>
            </div>
            <div class="card-body">
                <?php

                // if(isset($_POST["submit"])){
                    $linkz=mysqli_connect("localhost","root","", "sewana")or die("Sorry Didnot "); //Connecting
                    // mysqli_select_db("sewana") or die("No_DB_Found"); //Selecting Database
                    $sql1="SELECT c.client_no, c.branch_no, c.full_name, c.nic, c.email, cpr.requirement_no, cpr.max_rent, cpr.area, cpr.type, cpr.renting_date FROM client c LEFT JOIN client_property_requirement cpr ON c.client_no = cpr.client_no";

                    $result1=mysqli_query($linkz, $sql1);

                    if($result1){

                        echo "<table class='table table-hover table-bordered table-sm'>
                        <tr>
                        <th>Client Number</th>
                        <th>Branch Number</th>
                        <th>Full Name</th>
                        <th>NIC</th>
                        <th>Email</th>
                        <th>Requirement Number</th>
                        <th>Max Rent</th>
                        <th>Area</th>
                        <th>Type</th>
                        <th>Renting Date</th>
                        
                        
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

