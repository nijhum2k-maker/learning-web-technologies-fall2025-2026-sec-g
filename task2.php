<?php
$name = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);

    if (empty($name)) {
        $error = "Name cannot be empty.";
    } elseif (!preg_match("/^[A-Za-z]/", $name)) {
        $error = "Name must start with a letter.";
    } elseif (!preg_match("/^[A-Za-z .-]+$/", $name)) {
        $error = "Only letters, period, and dash allowed.";
    } elseif (str_word_count($name) < 2) {
        $error = "Name must contain at least two words.";
    } else {
        $error = "✔ Valid name!";
    }
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?= $name ?>">
    <span style="color:red;"><?= $error ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>
     <br>

     <?php
$email = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $error = "Email cannot be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        $error = "✔ Valid email!";
    }
}
?>

<form method="post">
    Email: <input type="text" name="email" value="<?= $email ?>">
    <span style="color:red;"><?= $error ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>
    <br>



    <?php
$dd = $mm = $yyyy = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dd = $_POST["dd"];
    $mm = $_POST["mm"];
    $yyyy = $_POST["yyyy"];

    if (empty($dd) || empty($mm) || empty($yyyy)) {
        $error = "All fields are required.";
    } elseif ($dd < 1 || $dd > 31) {
        $error = "Day must be 1–31.";
    } elseif ($mm < 1 || $mm > 12) {
        $error = "Month must be 1–12.";
    } elseif ($yyyy < 1953 || $yyyy > 1998) {
        $error = "Year must be 1953–1998.";
    } else {
        $error = "✔ Valid DOB!";
    }
}
?>

<form method="post">
    dd: <input type="number" name="dd" value="<?= $dd ?>">
    mm: <input type="number" name="mm" value="<?= $mm ?>">
    yyyy: <input type="number" name="yyyy" value="<?= $yyyy ?>">
    <span style="color:red;"><?= $error ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>
     <br>

     <?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
        $error = "Select at least one option.";
    } else {
        $error = "✔ Selected: " . $_POST["gender"];
    }
}
?>

<form method="post">
    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male <br>
    <input type="radio" name="gender" value="Female"> Female <br>
    <input type="radio" name="gender" value="Other"> Other <br>
    <span style="color:red;"><?= $error ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>
   <br>


   <?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["skills"]) || count($_POST["skills"]) < 2) {
        $error = "Select at least two skills.";
    } else {
        $error = "✔ Selected: " . implode(", ", $_POST["skills"]);
    }
}
?>

<form method="post">
    Skills:<br>
    <input type="checkbox" name="skills[]" value="HTML"> HTML <br>
    <input type="checkbox" name="skills[]" value="CSS"> CSS <br>
    <input type="checkbox" name="skills[]" value="PHP"> PHP <br>
    <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript <br>
    <span style="color:red;"><?= $error ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>
   <br>

   <?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["dept"] == "") {
        $error = "Please select a department.";
    } else {
        $error = "✔ Selected: " . $_POST["dept"];
    }
}
?>

<form method="post">
    Department:
    <select name="dept">
        <option value="">-- Select --</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
    </select>

    <span style="color:red;"><?= $error ?></span>

    <br><br>
    <input type="submit" value="Submit">
</form>
