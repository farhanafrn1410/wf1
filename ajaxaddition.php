<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>



<form name="form">
<table>
<tr>
<td>Num 1:</td>
<td><input type="text" name="num1" id="num1" /></td>
</tr>
<tr>
<td>Num 2:</td>
<td><input type="text" name="num2" id="num2" /></td>
</tr>
<tr>
<td>Sum:</td>
<td><input type="text" name="sum" id="sum" readonly /></td>
</tr>
<tr>
<td>Subtract:</td>
<td><input type="text" name="subt" id="subt" readonly /></td>
</tr>
</table>
</form>

<script>
$(function() {
    $("#num1, #num2").on("keydown keyup", sum);
	function sum() {
	$("#sum").val(Number($("#num1").val()) + Number($("#num2").val()));

 //$("#sum").val(Number($("#num1").val()) / Number($("#num2").val())*100);

	$("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
	}
});
</script>
</html>