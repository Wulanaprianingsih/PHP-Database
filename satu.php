<head>
	<title></title>
	<style type= "text/css" media= "screen">
		table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
		input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
	</style>
</head>
<body>
	<div style= "border:0; padding:10px; width: 760px; height: auto;"> </div>
	<form action= "action-input-data.php" method= "POST" name: "form-input-data">
	<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr height="46">
		<td width="10%"></td>
		<td width="25%"></td>
		<td width="65%"><font color= "orange" size= "2">Form Input Data Siswa </font></td>
	</tr>
	<tr height= "46">
		<td></td>
		<td>id</td>
		<td><input type="text" name= "id" size = "50" maxlength="30"/></td>
	</tr>
	<tr height= "46">
		<td></td>
		<td>username</td>
		<td><input type="text" name= "username" size = "50" maxlength="30"/></td>
	</tr>
	<tr height= "46">
		<td></td>
		<td>password</td>
		<td><input type="text" name= "password" size = "50" maxlength="30"/></td>
	</tr>
  	<tr height= "46">
		<td></td>
		<td>level</td>
		<td><input type="text" name= "level" size = "50" maxlength="30"/></td>
	</tr>
	<tr height= "46">
		<td></td>
		<td>fullname</td>
		<td><input type="text" name= "fullname" size = "50" maxlength="30"/></td>
	</tr>
	<tr height= "46">
		<td></td>
		<td></td>
		<td><input type="submit" name= "submit" value = "submit">
			<input type="cancel" name= "cancel" value = "cancel">
		</td>
	</tr>
</table>
</form>
</body>