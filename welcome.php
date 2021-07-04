<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body bgcolor="#87CEFA">


    <table width="100%" class="tabl">
        <tr>
            <td align="center"><br><br>
                <font size="6" color="black">
                    <h1>DREAM EVENTS</h1>
                    <b><p>Your orders,Our afforts</p></b><br>
                </font>
            </td>
        </tr>
    </table>

    <nav>
        <label class="logo">Dream Events</label>
        <ul>
            <li><a class="active" href="welcome.php">Home</a></li>


            <li>
                <a href="about1.html">About
                  </a>
                <ul>
                    <li><a href="about1.html">About Us</a></li>
                    <li><a href="gallary1.html">Gallary</a></li>
                </ul>
            </li>

            <li>
                <a href="book1.html">Booking
                  </a>
                <ul>
                    <li><a href="#1">Music Fest</a></li>
                    <li><a href="#2">Farwells</a></li>
                    <li><a href="#3">Weddings</a></li>
                    <li><a href="#4">Confernce</a></li>
                    <li><a href="#5">Birthdays</a></li>
                </ul>
            </li>


            <li><a href="contact1.html">Contact</a></li>

        </ul>
    </nav><br>

    <table align="left" width="20%">
        <tr>
            <td valign="center" align="center"><button class="button1"><a href="logout.php"> <font size="6" color="red">&nbsp;&nbsp;&nbsp;LOGOUT&nbsp;&nbsp;&nbsp;</font></a></button></td>
        </tr>
    </table>

    <br><br><br><br>
    <table class="tab5" width="80%" height="550px" >
        <tr>
            <td colspan="4" height="200px">
                <font align="center" size="18" color="white">
                    <h1><b>WELCOME</b></h1><br>
                    <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
                </font><br><br>
            </td>
        </tr>
    </table>

    <br><br><br>

    <table width="100%" bgcolor="#353535">
        <tr>
            <td align="center">
                <font color="white" size="5">
                    Thank you for visiting<br> Created by Dream Events Team | <span class="fa fa-copyright"></span> &nbsp;2021
                </font>
            </td>
        </tr>
    </table>
</body>
</html>