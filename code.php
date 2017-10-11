<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
<title>ILRSection1</title>
<head>


<body background="http://www.clker.com/cliparts/4/6/a/b/14303682411286369994orange%20peach%20pink%20dark%20light%20combination%20plus%20radiant%20mixed%
20gradient%20wallpaper%20blur%20background%20android.jpg" onload="typeof google==='object'&amp;
&amp;google.aft&amp;&amp;google.aft(this)" style="margin-top: 0px;" width="1000" height="1000"></body>
<form  method="post" action="code.php">
<input type="hidden" name="submitted1" value="true" />
<style>
body{
	
   background: url("redBG.jpg)  /* fallback for old browsers */

}
#labelz
{
	font-weight: bold;
	font-size: 15px;
	width: 100%;
}

.container input 
{
    width: 100%;
    clear: both;
}
label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​

</style>

<h3> <center><u>La Roche College
<br> Department of Chemistry
<br> Course Assessment Form<center></u></h3>


</head> 
<body>


<label>Course:</label>
<form action="code.php" method="post">
    <select name= "coursecode" onchange = 'this.form.submit()'>
    <option value="Select a Course">Select a Course</option> 
  <?php 
  include('codeconnect.php');
  while($row = mysqli_fetch_array($resultdrop)):;?>
  <option value = "<?php echo $row[0];?>"><?php echo $row[0];?>
  </option>
  <?php endwhile;?>
    </select>
    <noscript><input type="submit" value="Submit"></noscript>
    </form> 

<?php
 
if(isset($_POST["submitted1"])){
   
include('codeconnect.php');

$coursecode = $_POST["coursecode"];
$CourseTitle = 'CourseTitle';
$query = "SELECT * FROM Course WHERE '$coursecode' = $CourseTitle";  
$result = mysqli_query($dbcon, $query) or die(" error: $query");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo "<h4> Instructor:";
	echo "<input type='text' id='Instructor' value={$row['Instructor']}>";

	echo "<h4> Course Title:";
	echo "<input type='text' id='CourseTitle' value={$row['CourseTitle']}>";
	
	echo "<h4> CourseCode:";
	echo "<input type='text' id='Instructor' value={$row['CourseCode']}>";
	
	echo "<h4> Semester:";
	echo "<input type='text' id='Semester' value={$row['Semester']}>";
	

}
}

?> 

<?php
    
    if (isset($_POST['submitted2'])){
        
    include('codeconnect.php');
        
    $SLOID = $_POST['SLOID'];
    $KnowledgeBs = $_POST['KnowledgeBs'];
    $LabSkill = $_POST['LabSkill'];
    $Practice = $_POST['Practice'];
    $SocietalConn = $_POST['SocietalConn'];
    $Capstone = $_POST['Capstone'];
    $sqlinsert = "INSERT INTO SLOs (SLOID, KnowledgeBs, LabSkill, Practice, SocietalConn, Capstone) VALUES ('$SLOID', '$KnowledgeBs', '$LabSkill', '$Practice', '$SocietalConn', '$Capstone')";
     
        if(!mysqli_query($dbcon,$sqlinsert)){
            die('error inserting');
        }
    }
    ?>
    <form action="code.php" method="post">
    <input type="hidden" name="submitted2" value="true" />
    <fieldset>
    <legend>Student Learning Outcomes (SLOs) achieved (Please type Yes or No):</legend>
        <div><label>SLOID: <input type = text name = "SLOID" /></label></div><br>
        <div><label;>Knowledge Base: <input type = text name = "KnowledgeBs" /></label></div><br>
        <div><label>Lab Skills: <input type = text name = "LabSkill" /></label></div><br>
        <div><label>Practice: <input type = text name = "Practice" /></label></div><br>
        <div><label>Societal Connections: <input type = text name = "SocietalConn" /></div></label><br>
        <div><label>Capstone: <input type = text name = "Capstone" /></label></div><br>
    </fieldset>
    
    <iframe name="votar" style="display:none;"></iframe>
<form action="code.php" method="post" target="votar">
    <input type="submit" value="Update" />
    <input type="hidden" name="ad_id" value="2">            
</form>

    
</body>

