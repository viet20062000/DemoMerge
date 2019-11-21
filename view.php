<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php
echo "Name : ";
?>
<input type="text" id ="name"><br>
<?php
echo "School : ";
?>
<input type="text" id="school">
<br>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction()
{
if 

if(document.getElementById('name').value == ''||document.getElementById('school')=='')
{
alert('invalid input');
}
else
{
alert('welcome' + document.getElementById('name').value + 'from school' + document.getElementById('school').value);
}
}
</script>
</body>
</html>