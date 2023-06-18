<html>
<head>
<style>
  table, th, td {
  width: 20%;
  border: 1px solid white;
  padding:1px;
  border-collapse: collapse;
 
}
th, td {
  background-color: #96D4D4;
  text-align: left;
 
 }

table, td:first-child {
    text-align: right;
    Padding-left: 30px;
}

body
{
background-color:grey;
color:maroon;

}

</style>
</head>
<body>
<div>	
<!-- ********** -->

<hr size=3 color=maroon width=75%>
<body bgcolor=gray>
<font color=brown size=4>
	<center> <h1><u>GENERATIONS</u></h1>	
	<i>Enter the following information</i>
	</center><br>
<form action="Generations_Results-2.php" method="post">
<center><TABLE BORDER="3">
  <TR>
    <TD>Name:</TD>
    <TD>
      <input type="text" name="name1" size="20">
    </TD>
  </TR>
  <TR>
    
  <TD>Year:</TD>

  <!-- Challenge  -->
    <TD><input type="date" id="year" name="dob" min="1901-01-01" max="2021-12-31" size="20"></TD>
 <!-- Challenge  -->

  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Click Here To Submit" NAME="sub"></P>
</FORM>
</center>
<!-- **********-->

</div></body></html>