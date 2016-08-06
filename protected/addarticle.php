<!DOCTYPE html>
<?php
require("../database/dbconnection.php");
session_start();	

if(isset($_POST['submit']))
{

	$filecnt=$_POST['filecnt'];
	$type = $_POST['type'];
	$heading = $_POST['heading'];
	$author = $_POST['author'];
	$text = $_POST['text'];
	$authorfblink = $_POST['authorfblink'];
	
	$text= str_replace ('“', '"', $text);
	$text= str_replace ('”', '"', $text);
	$text= str_replace ('‘', '\'', $text);
	$text= str_replace ('’', '\'', $text);
	
$heading= str_replace ('“', '"', $heading);
$heading= str_replace ('”', '"', $heading);
$heading= str_replace ('‘', '\'', $heading);
$heading= str_replace ('’', '\'', $heading);
	
$type = trim($type);
$heading = trim($heading);
$author = trim($author);
$text = mysqli_real_escape_string($connection,$text);
$heading = mysqli_real_escape_string($connection,$heading);
$authorfblink = mysqli_real_escape_string($connection,$authorfblink);
	
$qr="INSERT INTO writeup (`type`,`heading`,`author`,`text`,`authorfblink`,`fileupload`) VALUES('$type' , '$heading' , '$author' , '$text' , '$authorfblink','$filecnt')";
if($connection->query($qr) === TRUE) 
{		
	echo 'successfully registered ';
}
else
{
	echo mysqli_error();
}		







		$sql="SELECT MAX(id) as whatt from writeup";
        $strSQL = mysqli_query($connection,$sql);
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
			$myid = $Results['whatt'];
		}
		else
		{
            ?>
			<script>alert("Error Occured \n");</script>
			<?php
			unset($_POST['submit']);
		//	header('Location: index.php');
		}


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 9000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$target_file = $target_dir . $myid.".png";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
else{

?>

<html>




<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="addart" enctype="multipart/form-data">
	
	<label>Type like Article Story Line - See categories in main site [Remember to keep 1st letter capital] &nbsp </label><br>
		
			<div id="id01"></div>
		
		
	<br><br>
	<label>Any Heading &nbsp </label><br>
	<input  type="text" name="heading" placeholder="Heading" required><br><br>
	<br>
	<label>Posted by -  Name [Remember to keep 1st letter capital eg Ganesh Sawhney and not gaNesH sAwhney] &nbsp </label><br>
	<input  type="text" name="author" placeholder="Author Name" required><br><br>
	<br>
	<textarea  rows="25" cols="200" name="text" value="" placeholder="Content of post" required></textarea>
	<br><br>
	<label>Auther Facebook Link [Remember - FULL with HTTPS//www.face....] &nbsp </label><br>
	<input  type="text" name="authorfblink" placeholder="Auther Fb Link - FULL with HTTPS...." required><br><br>

	<label >Do you want to upload image: </label> 
    <select name="filecnt" form="addart">
		<option value="no">No</option>
		<option value="yes">Yes</option>
		</select>
		<br><br>

	<label >Add Only 1 image:<b> <7MB </b></label> 
    <input type="file" name="fileToUpload" id="fileToUpload"><br><u><u><u><b>Kindly Compress your image at</u></u></u> <a target="_Blank" href="https://compressor.io">LINK</a></b><br><br>
	<br>
	<input type="submit" name="submit">
  
</form>
</body>






<script src="../categories.txt"></script>

<script>myFunction(myArray);

function myFunction(arr) {
    var out = '<select name="type" form="addart">';
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<option value="' + arr[i].display + '">' + 
        arr[i].display + '</option> ';
    }
    out+='</select>'
    var idwe=document.getElementById("id01");
    idwe.innerHTML = out;
}
</script>


	<script src="../googletrack/analyticstracking.js"></script>
</html>

<?php
}
?>