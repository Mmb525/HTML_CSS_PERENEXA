<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
$name = $_REQUEST['name'];
$Runs = $_REQUEST['Runs'];
$NO = $_REQUEST['NO'];
$Innings = $_REQUEST['Innings'];
$average=0;
if($_REQUEST['Role']=="Batsman")
{
    $match = $Innings- $NO;
    $average=$Runs/$match;
    echo "Average of $name is $average ";
}
if($_REQUEST['Role']=="Bowler")
{
    $average = $Runs/$NO;
    echo "Average of $name is $average ";
}


?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    h1 {
        text-align: center;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
<div class="container">
    <h1>Cricketer Information</h1>
    <form id="cricketerForm">
        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="age">Age:</label>
        <input type="number" name="age">

        <label for="Role">Role</label>
        <select name="Role" id="Role">
            <option value="Batsman" name="Batsman">Batsman</option>
            <option value="Bowler" name="Bowler">Bowler</option>
            <option value="AllRounder">All Rounder</option>
        </select>

        <div class="bat" id="bat">
            <label for="Runs">Enter the Number of Runs </label>
            <input type="number" name="Runs">
            <label for="NO">Enter the Number of time player Not Out/out</label>
            <input type="number" name="NO">
            <label for="Innings">Enter the Number of innings played</label>
            <input type="number" name="Innings">
        </div>
       

        <button name="submit">Submit</button>
    </form>




</div>