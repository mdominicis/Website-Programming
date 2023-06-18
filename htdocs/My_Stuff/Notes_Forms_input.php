<html>
<head>

	<title>Form Input Notes</title>
	<style type="text/css">
		body{ color:purple; font-size:20pt; }
		input{color:blue; font-size: 20pt; background-color:pink}
	</style>
	
</head>
<body>

<h1> Enter your info please:</h1>

<!-- Form method POST: - Submissions are hidden 
	 Form method GET: - Submissions are visible
	 Form action: where the results are sent
	 {if no action is specified, sent to "self - same page" 
-->
<form method=post action="Notes_Forms_output.php" target=_blank>
Enter Name: <input type="text" name="name" size=30><br>
Enter Age: <input type="number" name="age"><br>
Birthday: <input type="date" name="bday"><br>
Favorite food: <input type="text" name="food" size=25><br>

<input type="submit">
</form>



</body>
</html>
