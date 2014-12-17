<?php 
session_start();

if (!isset($_SESSION['username']))
{
    header("Location: login.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <link href="css/global_framework.css" rel="stylesheet" type="text/css">
    <link href="css/food_page.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- TOP TOOLBAR -->
<div id="toolbar">
    <div id="greeting">WorkoutDiary v1</div>
    <div id="settings">
        <ul>
            <li><img src="img/settings.png" width="50%"></li>
            <ul>
                <li>
                    <a href="myaccount.php">My Account</a>
                </li>
                <li>
                    <a href="#" id="logMeOut">Sign Out</a>
                </li>
            </ul>
        </ul>
    </div>
</div>

<div class="menu_panel"></div>

<div class="food_wrapper">

    <div class="input_panel">
        <h1>Enter Food and Drink</h1>
        <p>Because I'm lazy, and don't have a list of foods/drinks to choose from yet, you must write what you've consumed along with a ballpark calorie count! mu-haha</p>
        <div id="form_here">
            <form name='foodform' class='food_form'>
                <p>Item:<input type='text' class='item_input' /></p>
                <p>Calories:<input type='text' class='calories_input' /></p>
                <input type='button' name='submitFood' class='submitFood' value='Submit'/>
            </form>
        </div>
    </div>

    <div class="localstorage_panel">
        <h1>So far...</h1>
        <div id="food_here"></div>
        <div id="submitToDB">
            <form id='submit_db'>
                <input type='button' name='submitDB' id="submitDB" value='Submit'/>
            </form>
        </div>
    </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/global_engine.js"></script>
<script src="js/food_engine.js"></script>
</body>
</html>