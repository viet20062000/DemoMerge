<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<form>
<?php
echo "Name : ";
?>
<input type="text" name ="name"><br>
<?php
echo "School : ";
?>
<input type="text" name="school">
<br>
<input type="submit" onclick="myFunction" value="Submit">
</form>
<script>
function myFunction()
{
alert("Hello " +name);
}
</script>
</body>
</html>