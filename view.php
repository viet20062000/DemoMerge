<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php
echo "Name : ";
?>
<input type="text" name ="name"><br>
<?php
echo "School : ";
?>
<input type="text" name="school">
<br>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction()
{
alert(location.hostname);
}
</script>
</body>
</html>