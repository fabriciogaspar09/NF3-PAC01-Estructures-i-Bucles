<?php

session_start();

$_SESSION['username']=$_POST['user'];
$_SESSION['userpass']=$_POST['pass'];
$_SESSION['fontFamily']=$_POST['fontFamily'];
$_SESSION['fontSize']=$_POST['fontSize'];
$_SESSION['usercolor']=$_POST['color'];
$_SESSION['authuser']=0;

if(($_SESSION['username']=='sampleFabricio')and($_SESSION['userpass']=='phpSample')){
    $_SESSION['authuser']=1;
    setcookie("username","sampleFabricio",time()+10);
    include 'include.php';
    if(!isset($_SESSION['contador'])){
    $_SESSION['contador'] = 1;
    }else{
        $_SESSION['contador']++;
        if($_POST['confimar']=="guardartusmus"){
            setcookie("fontFamily",$_POST['fontFamily']);
            setcookie("fontSize",$_POST['fontSize']);
            setcookie("usercolor",$_POST['color']);
        }
    
    }
        
}else{
    $nombre_usuario = $_POST['user'] ?? 'no one';
    $nombre_usuario = $_POST['user'] ?? $_POST['user'] ?? ' no one';
    exit();};


?>

<html>
    <head>
        <title>Sub, favorite movie</title>
    </head>
    <body>
        <?php
            $myfavMovie=urlencode("I'm legend");
            echo $_SESSION['contador'];
            
            echo $_COOKIE["username"];            
            echo "<p><a href='userStart.php?myfavMovie=$myfavMovie'>More about my favorite movie";
            echo "</a></p>";
            echo "<p></p>";
            
            date_default_timezone_set('Europe/Andorra');
            $month = date('n');
            $yesterday = date('l',strtotime("-1 days"));
            $previousMonth = date('m',strtotime("-1 months"));
            $totalMonths = 12;
            
            if ($month == 1) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 2) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 28 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 3) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Spring</p>";
            }
            if ($month == 4) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 30 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Spring</p>";
            }
            if ($month == 5) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Spring</p>";
            }
            if ($month == 6) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 30 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 7) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 8) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 9) {
                $date1 = date("d");  //current date or any date
                 $date2 = 30;   //Future date
                 $daysLeft = $date1 - $date2 ;  //find difference
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Summer</p>";
            }
            if ($month == 10) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 11) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 30 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            if ($month == 12) {
                 $date1 = date("d");  //current date or any date
                 $date2 = 31 ;  //Future date
                 $daysLeft = $date1 - $date2 ;
                 
                 $monthDate = date("m");
                 $monthsLeft = $totalMonths - $monthDate;
                 
                 echo "<p>Good Winter</p>";
            }
            
            
            echo "<p>Yesterday was $yesterday</p>";
            echo "<p>The previous month was $previousMonth</p>";
            echo "<p>There are $daysLeft days left in this month</p>";
            echo "<p>There are $monthsLeft months left in this year</p>";
            if($_POST['savedCookies']=="guardartusmus2"){
                echo '<span style="font-family: ';
                echo $_COOKIE['fontFamily'];
                echo ';font-size:';
                echo $_COOKIE['fontSize'];
                echo ';color:';
                echo $_COOKIE['usercolor'];
                echo '">';
                echo $_POST['text'];
                echo "</span>";
            }else{
                echo '<span style="font-family: ';
                echo $_POST['fontFamily'];
                echo ';font-size:';
                echo $_POST['fontSize'];
                echo ';color:';
                echo $_POST['color'];
                echo '">';
                echo $_POST['text'];
                echo "</span>";
            }
            
            include 'include.php';
            echo "<p>$developed</p> <br/>";
            
            
        ?>
    <body>
</html> 