<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>

<script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
</script>

<style type="text/css">
/* Add this CSS to ensure footer stays at the bottom */
.ftr-bg {
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Adjust the margin of the body to create space for the footer */
body {
    margin-bottom: 150px; /* Adjust as needed */
}
</style>

</head>

<body>
<div class="h_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
            </div>
        </div>
    </div>
</div>
<div class="nav_bg">
    <div class="wrap">
        <?php require('header.php');?>
    </div>
    <div style="height:300px; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
        <table cellpadding="20" cellspacing="20" width="1000px" height="200px" style="margin:auto" >
            <tr>
                <td colspan="7" align="center"><img src="Images/brequest.png" height="90px" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>   
            <tr style="background-color:bisque" align="center" class="bold">            
                <td class="bold" style="color:red">Blood Group</td>
                <td align="center">Name</td>
                <td align="center">Gender</td>
                <td align="center">Age</td>
                <td align="center">Contact No</td>
                <td align="center">Pincode</td>
                <td align="center">Till Required Date(YY-MM-DD)</td>
            </tr>
            <?php
                // Establish connection to the database
                $cn = mysqli_connect("localhost","root","","bloodbank");

                // Check if connection is successful
                if (!$cn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Define an associative array for blood groups
                $bloodGroups = array(
                    13 => 'O+',
                    14 => 'O-',
                    15 => 'AB+',
                    16 => 'AB-',
                    17 => 'A+',
                    18 => 'A-',
                    19 => 'B+',
                    20 => 'B-'
                );

                // Construct the SQL query to select all records
                $sql = "SELECT * FROM requestes";

                // Execute the query
                $result = mysqli_query($cn,$sql);

                // Check if there are records
                if(mysqli_num_rows($result) > 0) {
                    // Loop through each record
                    while($data = mysqli_fetch_array($result)) {
                        // Convert blood group ID to label using the associative array
                        $bloodGroup = $bloodGroups[$data['bgroup']];
                        echo "<tr>
                                <td style='padding-left:50px'>$bloodGroup</td>
                                <td style='padding-left:10px'>$data[name]</td>
                                <td style='padding-left:20px'>$data[gender]</td>
                                <td style='padding-left:30px'>$data[age]</td>
                                <td style='padding-left:50px'>$data[mobile]</td>
                                <td style='padding-left:50px'>$data[pincode]</td>
                                <td style='padding-left:60px'>$data[reqdate]</td>
                            </tr>";
                    }
                } else {
                    echo "";
                }

                // Close the database connection
                mysqli_close($cn);
            ?>
        </table>
    </div>
</div>
<div class="clear"></div>
<div class="ftr-bg">
    <div class="wrap">
        <div class="footer">
            <div class="f_nav">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="donar.php">Donor</a></li>
                    <li><a href="admin/admimlogin.php">Admin Login</a></li>
                    <li><a href="./requests.php">View Requests</a></li> <!-- Added link to go back to requests.php -->
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="copy"></div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
