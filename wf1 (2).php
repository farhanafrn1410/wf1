<!--
All eode is under the GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007.
-->
<!DOCTYPE html>
<html>
<head>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    
    
    
    <?php 
include ("connect.php");
$a="select * from idcode";
$b=mysql_query ($a);
?> 

<?php 
include ("connect.php");
$aa="select * from staff";
$bb=mysql_query ($aa);
?> 


<!--date and week funtion-->
<?php
/*
$previous_week = strtotime("-1 week +1 day");

$start_week = strtotime("last sunday midnight",$previous_week);
$end_week = strtotime("next saturday",$start_week);

$start_week = date("Y-m-d",$start_week);
$end_week = date("Y-m-d",$end_week);

echo $start_week.' '.$end_week ; */

if(isset($_REQUEST['emp_no'])){
$emp_no=$_REQUEST['emp_no'];

$d="SELECT * FROM MIC 
 WHERE emp_no='$emp_no' and date BETWEEN CURDATE()-INTERVAL 1 WEEK AND CURDATE()";
$d2=mysql_query($d);
$d3=mysql_fetch_array($d2);
echo $d3['loan_dis_year'];
}
?>

<!--end-->


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> PDBF</title>
<style>
body{
margin:auto;
background-color:#EAEAEA;
}
h1
{ font-size:30px;
color:#003399;
text-align:center;
font-family:"Times New Roman", Times, serif;
font-weight:700;
}
h2
{
text-align:center;
 color:#CC3333;
font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
font-size:28px;
}

t1
{

}
  @font-face
        {
            font-family: myUniFont;
            src: url(./SolaimanLipi_22-02-2012.ttf);
        }
t2{
    width: 30px;
    height: 10px;
    background-color: yellow;
    box-shadow: 10px 10px 5px #888888;
}



input[type='text'], input[type='password'], input[type='date']
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #CCC;
padding: 8px;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}

input[type='text']:hover, input[type='password']:hover
{
width: 200px;
height: 29px;
border-radius: 5px;
border: 1px solid #aaa;
padding: 8px;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}

input[type='submit']
{
width: 150px;
height: 34px;
border: 2px solid white;
background-color:#CCC;
}
input[type='submit']:hover
{
width: 150px;
height: 34px;
border: 2px solid white;
background-color:#000080;
color:#fff;
}

select
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #CCC;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}
select: hover
{
width: 200px;
height: 29px;
border-radius: 3px;
border: 1px solid #CCC;
font-weight: 200;
font-size: 15px;
font-family: Verdana;
box-shadow: 1px 1px 5px #CCC;
}


</style>

    
    
    
    
    
    
    
    
<!-- Import Bootstrap from CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--Extra Theme-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!--Import jQuary from CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Extra CSS -->
<style>
.text-right {
  float: right;
}
body {
  background: #16a085;
}
</style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PDBF || WF1 Online Form </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="wf1.php">Home</a></li>
      <li><a href="report.php">Report</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-primary"> 
	     <div class="panel-heading"></div>
<form name="f1" id="myform" action="wf1.php" method="post" enctype="multipart/form-data">
  <p>&nbsp;</p>
  <table width="95%" border="0" align="center">
  <tr>
    <td width="12%" ><p>কার্যালয় কোড: </p>
      </td>
    <td width="26%" ><select name="branch_code" id="branch_code" required>
	 <option value="" selected>Select Branch</option>
		<?php 
		
		while($row=mysql_fetch_array($b))
		{
		?>
		 
		<option value ="<?php echo $row['branch_code'];?>">
		<?php echo  $row['branch_code']; ?>
		
		</option>
		<?php
		}
		?>
		</select>
					</td>
      
      
    <td width="11%" >কার্যালয়ের নাম</td>
    <td width="20%" ><input type="text"  name="branch_name" id="branch_name" disabled></td>
    <td width="11%" >অঞ্চল: </td>
    <td width="20%" ><input type="text"  name="region_name" id="region_name" disabled></td>
    </tr>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
    $("#branch_code").change(function(){
          
    var branch_code = $("#branch_code").val();
   
       
        $.post("pdbf2_check.php",
        {
          branch_code:branch_code
          
        },
        function(data){
             var branch_code = JSON.parse(data)
            if(branch_code[0])
            {
           
            console.log(branch_code);
            $("#branch_name").val(branch_code.branch_name);
            $("#region_name").val(branch_code.region_name);
            
            }
            else
            {
                $("#branch_name").val('');
            $("#region_name").val('');
           
            }
            
        });
    });
});
</script>
    
    
    
    
    
    
  <tr>
     
    <td >কর্মীর আইডি :</td>
    <td><select name="emp_no" id="emp_no" required>
        <option value="" selected>Select Employee Code</option>
		<?php while($row=mysql_fetch_array($bb))
		{
		?>
		<option value ="<?php echo $row['emp_no'];?>">
		<?php echo  $row['emp_no']; ?>
		
		</option>
		<?php
		}
		?>
		</select></td>
        
        
    <td><span style="float:left;">কর্মীর নাম:</span></td>
    <td><input type="text" name="emp_name" id="emp_name" disabled ></td>
    <td>পদবী:</td>
    <td><input type="text"  name="designation" id="designation" disabled></td>
    </tr>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
    $("#emp_no").change(function(){
          
    var emp_no = $("#emp_no").val();
   
       
        $.post("pdbf3_check.php",
        {
          emp_no:emp_no
          
        },
        function(data){
             var emp_no = JSON.parse(data)
            if(emp_no[0])
            {
           
            console.log(branch_code);
            $("#emp_name").val(emp_no.emp_name);
            $("#designation").val(emp_no.designation);
            
            }
            else
            {
                $("#emp_name").val('');
            $("#designation").val('');
           
            }
            
        });
    });
});
</script>
    

    
    
  <tr>
    <td height="33">তারিখ: </td>
    <td><input type="date"  name="date" id="date" require/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  </tr><tr> <td colspan="3"><br></td> </tr>
  </tr><tr> <td colspan="4"><br></td> </tr>
  <tr>
    <td>৩. সপ্তাহের শুরুতে খেলাপী ঋণ</td>
    <td><input type="text"name="arrears_beg_week"  id="arrears_beg_week" class="form-control" required>    </td>
    <td>৪. চলতি সপ্তাহে ঋণ বিতরণ </td>
    <td><input name="loan_dis_week" type="text" id="loan_dis_week" class="form-control" required>    </td>
    <td>৫. চলতি ঋণ আদায়যোগ্য </td>
    <td><input type="text" name="rec_current_loan" id="rec_current_loan" class="form-control"required>    </td>
    </tr>
  <tr>
    <td>৬. চলতি ঋণ আদায়যোগ্য থেকে আদায় :</td>
    <td><input type="text"  name="earning_rec_amount" id="earning_rec_amount" class="form-control"required/></td>
    <td>৭. মোট ঋণ আদায় :</td>
    <td><input type="text" class="form-control" name="total_rec_loan" id="total_rec_loan" required/>    </td>
    <td>৮. চলতি ঋণ আদায়ের হার  (৫/৪ X ১০০)</td>
    <td><input type="text" name="current_bor_rate" id="current_bor_rate" class="form-control" disabled/></td>
    </tr>
    
    
    
    <script>
$(function() {
    $("#rec_current_loan, #loan_dis_week").on("keydown keyup", sum);
	function sum() {
	
	  $("#current_bor_rate").val(Number($("#rec_current_loan").val()) / Number($("#loan_dis_week").val())*100);
	
	
	
	}
});
</script>
    
    
    
    
    
    
    
    
  <tr>
    <td>৯. জিএসএস (গত সপ্তাহ) :</td>
    <td><input type="text"  name="last_week_gss" id="last_week_gss" class="form-control" required/>    </td>
    <td>১০. জিএসএস (চলতি সপ্তাহ) :</td>
    <td><input type="text"  name="this_week_gss" id="this_week_gss" class="form-control" required/>    </td>
    <td>১১. এসএসএস (গত সপ্তাহ) </td>
    <td><input type="text"  name="last_week_sss" id="last_week_sss" class="form-control" required/>    </td>
    </tr>
  <tr>
    <td>১২. এসএসএস (চলতি সপ্তাহ) :</td>
    <td><input type="text"  name="this_week_sss" id="this_week_sss" class="form-control" required/>    </td>
    <td>১৩. মেয়াদী সঞ্চয় স্থিতি </td>
    <td><input type="text" name="term_deposit_status" id="term_deposit_status" class="form-control" required/>    </td>
    <td>১৪. সপ্তাহান্তে (মাঠে পাওনা ঋণের পরিমাণ) </td>
    <td><input type="text" name="loan_amount_field" id="loan_amount_field" required/>    </td>
    </tr>
  <tr>
    <td height="40"> ১৫. সপ্তাহান্তে কিস্তি খেলাপী (টাকা) </td>
    <td><input type="text"  name="ins_arrears_amount" id="ins_arrears_amount" class="form-control" required/>
        </span></td>
    <td>১৬. সপ্তাহান্তে কিস্তি খেলাপী (সংখ্যা)</td>
    <td><input type="text" name="ins_arrears_number" id="ins_arrears_number" class="form-control" required/>    </td>
    <td>১৭. সপ্তাহান্তে মেয়াদ খেলাপী (টাকা) </td>
    <td><input type="text"  name="odi_amount" id="odi_amount" class="form-control" required/>    </td>
    </tr>
  <tr>
    <td>১৮. সপ্তাহান্তে মেয়াদ খেলাপী (সংখ্যা) </td>
    <td><input type="text"  name="odi_number" id="odi_number" class="form-control"/>    </td>
    <td>১৯.  মোট খেলাপী (১৫+১৭)</td>
    <td><input type="text"  class="form-control" name="total_arrears" id="total_arrears"disabled/>    </td>

    
    
    <script>
$(function() {
    $("#ins_arrears_amount, #odi_amount").on("keydown keyup", sum);
	function sum() {
	$("#total_arrears").val(Number($("#ins_arrears_amount").val()) + Number($("#odi_amount").val()));
	
	}
});
</script>
    
    
    
    
    <td>২০.  চলতি বছরে মোট ঋণ বিতরণ (৪ + গত সপ্তাহের ২০)</td>
    <td><input type="text" name="loan_dis_year" id="loan_dis_year" class="form-control" disabled//></td>
    </tr>
  <tr>
    <td>২১.  চলতি বছরে মোট ঋণ আদায়যোগ্য  (২২+১৯)</td>
    <td><input type="text"  class="form-control" name="total_rec_loan_year" id="total_rec_loan_year" disabled/>    </td>
    <td>২২. চলতি বছরে মোট ঋণ আদায়</td>
    <td><input type="text" s name="total_loan_rev_year" id="total_loan_rev_year" class="form-control" required/>    </td>
    
    
    <script>
$(function() {
    $("#total_arrears, #total_loan_rev_year").on("keydown keyup", sum);
	function sum() {
	$("#total_rec_loan_year").val(Number($("#total_arrears").val()) + Number($("#total_loan_rev_year").val()));
	
	}
});
</script>
    
    
    <td>২৩. বার্ষিক আদায়ের হার (২০/২১ X ১০০) </td>
    <td><input type="text" " name="annual_col_rate" id="annual_col_rate" class="form-control"disabled/>    </td>
    </tr>
  
 
  
  <script>
$(function() {
    $("#loan_dis_year, #total_rec_loan_year").on("keydown keyup", sum);
	function sum() {
	
	  $("#annual_col_rate").val(Number($("#loan_dis_year").val()) / Number($("#total_rec_loan_year").val())*100);
	
	
	
	}
});
</script>


   
    <?php 

$branch_code=$_REQUEST['branch_code'];
$branch_name=$_REQUEST['branch_name'];
$region_name=$_REQUEST['region_name'];
$date=$_REQUEST['date'];
$week=$_REQUEST['week'];
$emp_no=$_REQUEST['emp_no'];
$emp_name=$_REQUEST['emp_name'];
$arrears_beg_week=$_REQUEST['arrears_beg_week'];
$loan_dis_week=$_REQUEST['loan_dis_week'];

//Date value addition 
//$add=$d3['loan_dis_year']+$loan_dis_week;

$rec_current_loan=$_REQUEST['rec_current_loan'];
$earning_rec_amount=$_REQUEST['earning_rec_amount'];
$total_rec_loan=$_REQUEST['total_rec_loan'];
//$current_bor_rate=$_REQUEST['current_bor_rate'];

//////////// column 8 calculation 
$current_bor_rate=(($rec_current_loan/$loan_dis_week)*100);
/////end of column 8 calculation 



$last_week_gss=$_REQUEST['last_week_gss'];
$this_week_gss=$_REQUEST['this_week_gss'];
$last_week_sss=$_REQUEST['last_week_sss'];
$this_week_sss=$_REQUEST['this_week_sss'];
$term_deposit_status=$_REQUEST['term_deposit_status'];
$loan_amount_field=$_REQUEST['loan_amount_field'];
$ins_arrears_amount=$_REQUEST['ins_arrears_amount'];
$ins_arrears_number=$_REQUEST['ins_arrears_number'];
$odi_amount=$_REQUEST['odi_amount'];
$odi_number=$_REQUEST['odi_number'];

$total_arrears=$ins_arrears_amount+$odi_amount;

//$loan_dis_year=$d3['loan_dis_year']+$loan_dis_week;

$total_loan_rev_year=$_REQUEST['total_loan_rev_year'];



$results11=mysql_query("SELECT loan_dis_year FROM `mic` WHERE date = (SELECT MAX(date) FROM mic where emp_no= '$emp_no')");
while($row = mysql_fetch_array($results11))
{

$asd=$row['loan_dis_year'] ; 
}

$loan_dis_year=$asd+$loan_dis_week;

////////column 23 & 21 calculation
$total_rec_loan_year=$total_arrears+$total_loan_rev_year;
$annual_col_rate= (($total_rec_loan_year/$loan_dis_year)*100);
////////end of column 23 & 21 calculation

$a="insert into mic(branch_code,branch_name,region_name,date,week,emp_no,emp_name,arrears_beg_week,loan_dis_week,rec_current_loan,earning_rec_amount,total_rec_loan,current_bor_rate,last_week_gss,this_week_gss,last_week_sss,this_week_sss,term_deposit_status,loan_amount_field,ins_arrears_amount,ins_arrears_number,odi_amount,odi_number,total_arrears,loan_dis_year,total_loan_rev_year,total_rec_loan_year,annual_col_rate) values ('$branch_code','$branch_name','$region_name','$date','$week','$emp_no','$emp_name','$arrears_beg_week','$loan_dis_week','$rec_current_loan','$earning_rec_amount','$total_rec_loan','$current_bor_rate','$last_week_gss','$this_week_gss','$last_week_sss','$this_week_sss','$term_deposit_status','$loan_amount_field','$ins_arrears_amount','$ins_arrears_number','$odi_amount','$odi_number','$total_arrears','$loan_dis_year','$total_loan_rev_year','$total_rec_loan_year','$annual_col_rate')";

mysql_query($a);



?>
      <?php
  //Showing Adding Value
  /*echo $loan_dis_year; */
  ?>
</tr><tr> <td colspan="3"><br></td> </tr>
<tr>
    <td colspan="6" align="center">
      <input name="submit" type="submit" id="submit" value="submit">
   </td>
    
    </tr>
</table>
<br>
               <table border="0" width="1090">
		
     <tr>
         	 
          </tr>
  </table>
												<br>
</form>
</td></tr>
</table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
    $("#date").change(function(){
          var d = $("#date").val();
    var b_code = $("#branch_code").val();
    var e_no = $("#emp_no").val();
       
        $.post("wf1_check.php",
        {
          date:d,
          b_code: b_code,
          e_no: e_no
        },
        function(data){
             var d = JSON.parse(data)
            if(d[0])
            {
           
            console.log(d);
            $("#annual_col_rate").val(d.annual_col_rate);
            $("#arrears_beg_week").val(d.arrears_beg_week);
            $("#current_bor_rate").val(d.current_bor_rate);
            $("#earning_rec_amount").val(d.earning_rec_amount);
            $("#ins_arrears_amount").val(d.ins_arrears_amount);
            $("#ins_arrears_number").val(d.ins_arrears_number);
            $("#last_week_gss").val(d.last_week_gss);
            $("#last_week_sss").val(d.last_week_sss);
            $("#loan_amount_field").val(d.loan_amount_field);
            $("#loan_dis_week").val(d.loan_dis_week);
            $("#loan_dis_year").val(d.loan_dis_year);
            $("#odi_amount").val(d.odi_amount);
            $("#odi_number").val(d.odi_number);
            $("#rec_current_loan").val(d.rec_current_loan);
            $("#term_deposit_status").val(d.term_deposit_status);
            $("#this_week_gss").val(d.this_week_gss);
            $("#this_week_sss").val(d.this_week_sss);
            $("#total_arrears").val(d.total_arrears);
            $("#total_loan_rev_year").val(d.total_loan_rev_year);
            $("#total_rec_loan").val(d.total_rec_loan);
            $("#total_rec_loan_year").val(d.total_rec_loan_year);
            $('#myform').attr('action', 'wf1_update.php?id='+d[0]);
            $("#submit").val('Update');
            }
            else
            {
                $("#annual_col_rate").val('');
            $("#arrears_beg_week").val('');
            $("#current_bor_rate").val('');
            $("#earning_rec_amount").val('');
            $("#ins_arrears_amount").val('');
            $("#ins_arrears_number").val('');
            $("#last_week_gss").val('');
            $("#last_week_sss").val('');
            $("#loan_amount_field").val('');
            $("#loan_dis_week").val('');
            $("#loan_dis_year").val('');
            $("#odi_amount").val('');
            $("#odi_number").val('');
            $("#rec_current_loan").val('');
            $("#term_deposit_status").val('');
            $("#this_week_gss").val('');
            $("#this_week_sss").val('');
            $("#total_arrears").val('');
            $("#total_loan_rev_year").val('');
            $("#total_rec_loan").val('');
            $("#total_rec_loan_year").val('');
             $('#myform').attr('action', 'wf1.php');
             $("#submit").val('Submit');
            }
            
        });
    });
});
</script>
		 </div>
      </div>
    </div>
	<!--<div class="col-md-3">
	  <div class="panel panel-primary"> 
	   
	</div>
  </div>-->
<!-- Copyright & Credits bar-->
<div class="panel panel-primary">
<div class="panel-heading">Copyright &copy; <a href="#"><font color="black"></font></a> 2016, All Rights Reserved.<span class="text-right">PDBF IT Dept.<font color="black"></font></a></span></div>
</div>
</div>
</body>
</html>
