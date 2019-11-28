<body>
	<h1>Create Product </h1>
	<form action="insertProduct.php" method="post">
		Name <input type="text" name="name" >
		<br>
		Price <input type="text" name="price">
		<br>
		<input type="submit" value="Insert">
	</form>

	<br>
	<form action ="deleteProduct.php" method ="post">
	ID : <input type ="text" name="id">
	<input type="submit" value="Delete">
	</form>
    </body>
    