<?php
session_unset();


?>


<html>
    <head>
        <title>Main, favorite movie</title>
    </head>
    <body>
        <form method="post" action="sub.php">
            <p>Enter your username <input type="text" name="user"/></p>
            <p>Enter your password <input type="password" name="pass"/></p>
            <p>Enter your font <input type="text" name="fontFamily"/></p>
            <p>Enter your font size <input type="text" name="fontSize"/></p>
            <p>Enter your color <input type="color" name="color"/></p>
            <p>Enter the text you want to write in that color, font and size<input type="text" name="text"/></p>
            <p>Want to save your color, font and size?<input type="checkbox" name="confirmar" value="guardartusmus"/></p>
            <p>Want to use the lasts saved inputs?<input type="checkbox" name="savedCookies" value="guardartusmus2"/></p>
            <p><input type="submit" name="submit" value="submit"/></p>
        </form>
            <?php
                echo $_COOKIE["username"];
                echo "<p>My favorite movie is ";
                echo $_GET["myfavMovie"];
                echo "</p>";
                
                
                echo "<ul><li>Integrating HTML with PHP</li><li>Using Constants and Variables</li><li>Passing Variables between Pages</li><li>Passing Variables through a URL</li><li>Passing Variables with Sessions</li><li>Passing Variables with Cookies</li><li>Setting a Cookie</li><li>Using Forms to Get Information</li><li>Using if/else Arguments</li><li>Using if and else Together</li></ul>";
                echo "<p>Qualifies the document (0-10), and the teacher's explanation (0-10): Document/10; Explanation/10</p>";
                echo "<p>As a student, put a mark to yourself: dies de dies</p>";
                echo "<p>Explain an improvement: Nothing to add</p>";
                
                include 'include.php';
                echo "$developed";
                
            ?>
    </body>
</html>