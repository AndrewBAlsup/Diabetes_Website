<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <meta name="keywords" content="..."> <!-- Page key words for search engines-->
    <meta name="description" content="..."> <!-- Page description on search engines-->
    <title>Diabetes Risk Calculator</title>
</head>
<body>

    <?php
    // define variables and set to empty values
    $sex = $race = $gender = $weight = $a1c_result = "";
    $blood_sugar = $insulin = $medication = "";
    ?>

    <menu>
        <ul>
            <li><a href="">Individual Page</a></li>
            <li><a href="">Administrator Page</a></li>
            <li><a href="">Calculator Details</a></li>
        </ul>
    </menu>

    <?php 
    echo "<pre>"; print_r($_POST); echo "</pre>";
    ?>
    <form method="POST" action="">
        <label for="file">Upload file</label>
        <input id="file" type="file" name="file">
        <br>
        Sex:
        <br>
        <input type="radio" id="male" name="sex" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="sex" value="Female">
        <label for="female">Female</label>
        <br>
        Race:
        <br>
        <input type="radio" id="caucasian" name="race" value="Caucasian">
        <label for="caucasian">Caucasian</label><br>
        <input type="radio" id="asian" name="race" value="Asian">
        <label for="asian">Asian</label><br>
        <input type="radio" id="african_american" name="race" value="African American">
        <label for="african_american">African American</label><br>
        <input type="radio" id="hispanic" name="race" value="Hispanic">
        <label for="hispanic">Hispanic</label><br>
        <input type="radio" id="other" name="race" value="Other">
        <label for="other">Other</label><br>
        <input type="radio" id="unknown" name="race" value="Unknown">
        <label for="unknown">Unknown</label>
        <br>
        Age:
        <br>
        <input type="number" id="age" name="age" min="0" max="100">
        <br>
        Weight:
        <br>
        <input type="number" id="weight" name="weight" min="0" max="1000">
        <br>
        A1C Test Result:
        <br>
        <input type="radio" id="less_than_7" name="a1c_result" value="Less than 7">
        <label for="less_than_7">Less than 7</label><br>
        <input type="radio" id="btwn_7_8" name="a1c_result" value="Between 7 and 8">
        <label for="btwn_7_8">Between 7 and 8</label><br>
        <input type="radio" id="greater_than_8" name="a1c_result" value="Greater than 8">
        <label for="greater_than_8">Greater than 8</label><br>
        <input type="radio" id="unknown_a1c" name="a1c_result" value="Unknown">
        <label for="unknown_a1c">Unknown</label>
        <br>
        Blood Sugar:
        <br>
        <input type="radio" id="less_than_200" name="blood_sugar" value="Less than 200">
        <label for="less_than_200">Less than 200</label><br>
        <input type="radio" id="btwn_200_300" name="blood_sugar" value="Between 200 and 300">
        <label for="btwn_200_300">Between 200 and 300</label><br>
        <input type="radio" id="greater_than_300" name="blood_sugar" value="Greater than 300">
        <label for="greater_than_300">Greater than 300</label>
        <br>
        Insulin:
        <br>
        <input type="radio" id="yes_insulin" name="insulin" value="Yes">
        <label for="yes_insulin">Yes</label><br>
        <input type="radio" id="no_insulin" name="insulin" value="No">
        <label for="no_insulin">No</label><br>
        Other Diabetes Medications:
        <br>
        <input type="radio" id="yes_medication" name="medication" value="Yes">
        <label for="yes_medication">Yes</label><br>
        <input type="radio" id="no_medication" name="medication" value="No">
        <label for="no_medication">No</label><br>
        <!--
        <br>
        <input type="checkbox" id="medication_1" name="medication_1" value="Medication 1">
        <label for="medication_1">Medication 1</label><br>
        <input type="checkbox" id="medication_2" name="medication_2" value="Medication 2">
        <label for="medication_2">Medication 2</label>
        <br>-->
        <input type="submit" name="submit" value="Submit"> 
    </form>
</body>
</html>