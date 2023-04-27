<?php
$op = "";
if (isset($_GET['output'])) {
    $output = $_GET['output'];
    if ($output == 0) {
        $GLOBALS['op'] = "Based on your input, our analysis indicates that you are not at an increased likelihood of experiencing Coronary Heart Disease (CHD). Keep up the good work and stay healthy!";
    } elseif ($output == 1) {
        $GLOBALS['op'] = "Based on your input, our analysis suggests that you are at an increased likelihood of experiencing Coronary Heart Disease (CHD). As such, we highly recommend seeking consultation with a medical professional in order to better understand your current state of health and discuss potential preventative measures.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHD</title>
    <link rel="stylesheet" href="../../CSS/form_prediction.css" />

<body>
    <div class="title">Productivity score prediction</div>
    <form method="post" action="http://localhost:5000/predict">
        <div class="input_container">
            <table>
                <!-- dropdown- gender education, mood -->
                <tr>
                    <td><label for="gender">Choose your gender:</label></td>
                </tr>
                <tr>
                    <td>
                        <select name="gender" id="gender" class="dropdown">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="age">Enter your age:</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" name="age" id="age"></td>
                </tr>
                <tr>
                    <td><label for="education">Choose your education level:</label></td>
                </tr>
                <tr>
                    <td>
                        <select name="education" id="education" class="dropdown">
                            <option value="School">School</option>
                            <option value="Higher secondary">Higher secondary</option>
                            <option value="Under graduate">Under graduate</option>
                            <option value="Post graduate">Post graduate</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="study_time">Enter the time you spent for studying:</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" id="study_time" name="study_time"></td>
                </tr>
                <tr>
                    <td><label for="hw_time">Enter the time you spent doing homeworks:</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" id="hw_time" name="hw_time"></td>
                </tr>
                <tr>
                    <td><label for="sleep_time">How long do you sleep?</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" id="sleep_time" name="sleep_time"></td>
                </tr>
                <tr>
                    <td><label for="leisure_activities">Time you spent for leisure activities:</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" id="leisure_activities" name="leisure_activities"></td>
                </tr>
                <tr>
                    <td><label for="mood">Your current mood:</label></td>
                </tr>
                <tr>
                    <td>
                        <select name="mood" id="mood" class="dropdown">
                            <option value="Happy">Happy</option>
                            <option value="Sad">Sad</option>
                            <option value="Neutral">Neutral</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="device_usage">Time spent on usage of devices:</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" name="device_usage"></td>
                </tr>
                <tr>
                    <td><label for="break_time">Time spent for breaks:</label></td>
                </tr>
                <tr>
                    <td><input type="number" class="input" name="break_time"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="PREDICT" class="Predbtn"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Home" class="Predbtn" onclick="window.location.href='../../Layout.php'"></td>
                </tr>


            </table>
            <br>
            <?php if (!empty($output)) : ?>
                <label class="op_box"><?php echo $output; ?></label>
            <?php endif; ?>
            <!-- <label class="op_box"><?php echo  $output; ?> </label> -->
        </div>
    </form>
</body>

</html>