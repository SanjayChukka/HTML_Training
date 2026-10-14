<?php
echo "<h1>Submitted Form Details</h1>";

echo "<h2>Personal Information</h2>";
echo "Name: ".$_POST["name"]."<br>";
echo "Email: ".$_POST["email"]."<br>";
echo "mobile: ".$_POST["mobile"]."<br>";
echo "Date of Birth: ".$_POST["dob"]."<br>";
echo "Gender: ".$_POST["gender"]."<br>";

echo "<h2>Qualification</h2>";
echo "Qualification: ".$_POST["qualifi"]."<br>";
echo "Other Qualification: ".$_POST["other"]."<br>";
echo "Year: ".$_POST["year"]."<br>";
echo "CGPA / Grade : ".$_POST["cgpa"]."<br>";

echo "<h2>Location Details</h2>";
echo "Country : ".$_POST["country"]."<br>";
echo "State : ".$_POST["state"]."<br>";
echo "Address : ".$_POST["address"]."<br>";
echo "PIN : ".$_POST["pin"]."<br>";

echo "<h2>Skills</h2>";

if(isset($_POST["html"])) echo "HTML<br>";
if(isset($_POST["css"])) echo "CSS<br>";
if(isset($_POST["js"])) echo "JavaScript<br>";
if(isset($_POST["php"])) echo "PHP<br>";
if(isset($_POST["py"])) echo "Python<br>";
if(isset($_POST["sql"])) echo "SQL<br>";
if(isset($_POST["git"])) echo "Git<br>";
if(isset($_POST["github"])) echo "GitHub<br>";

echo "<h2>Resume</h2>";

if(isset($_POST["resume"])){
    echo "File Name : ".$_FILES["resume"]["name"]."<br>";
    echo "File Type : ".$_FILES["resume"]["type"]."<br>";
    echo "File Size : ".$_FILES["resume"]["size"]."<br>";
}
?>