<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
	input {
            margin-right:30%;
	    border-radius:5px;
            width:200px;
        }
        select {
            margin-right:30%;
	    border-radius:5px;
	    width:200px;
        }
        button {
    	    margin-right:30%;
        }
</style>
</head>

<body>
    <div class="container-fluid">
	 <div class="row">
		<div style="height:12%;background-color:#4285f4;padding:0.3% 0;">
			<h1 style='text-align:center;color:white;font-family:Montserrat;'>Post Graduate Students Information System</h1>
			<a href="/your_user_link" style="position:fixed;right:3%;top:4%;color:black;font-size:140%;text-decoration:none;">HOME</a>
   	        </div>
	 </div>
    	 <div class="row">
		<h2 style="text-align:center">Table Search Section</h2></br></br>
    	 </div>
    	 <div class="row" style="text-align:right;font-family:Montserrat;font-size:100%;">
                <div class="col-md-6 col-md-offset-3">
			<div style="min-height:300px;background-color:#7f8c8d;padding-top:15%;border-radius:5px;">
				<form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="tname">Select Table:&nbsp;&nbsp;</label>
					<select name ="tname" id="mySelect" style="">
						<option value="STUDENT">STUDENT</option>
						<option value="PROGRAM">PROGRAMME</option>
						<option value="COURSE">COURSE</option>
						<option value="DEPARTMENT">DEPARTMENT</option>
						<option value="FACULTY">FACULTY</option>
						<option value="PROJECT">PROJECT</option>
						<option value="REGISTER">REGISTER</option>
						<option value="TEACHES">TEACHES</option>
					</select></br>
    	    		        	<button type="submit" name="getattributes" class="btn btn-success">Submit</button>
                                     </div>
    				</form>
<?php 
    if(isset($_POST['getattributes'])) {
	$tname = $_POST['tname'];
     	echo '
                <script>
		    document.getElementById("mySelect").value = "'.$tname.'";
                    console.log("Inside Getattribute");
                </script>
            ';
                
         
            if ($tname == 'STUDENT')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect1" onchange="changeIt()">
						<option value="fname">First Name</option>
						<option value="lname">Last Name</option>
						<option value="roll_no">Roll No</option>
						<option value="joining_date">Joining Date</option>
						<option value="address">Address</option>
						<option value="pname">Program Name</option>
						<option value="dname">Department Name</option>
						<option value="prtopic">Project Topic</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue" id="inputtext"></br>
    	    		        	<button type="submit" name="student_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'PROGRAM')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="pname">Program Name</option>
						<option value="duration">Duration</option>
						<option value="dname">Department Name</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="program_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'COURSE')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="ccode">Course Code</option>
						<option value="title">Title</option>
						<option value="lecture">Lecture</option>
						<option value="practical">Practical</option>
						<option value="theory">Theory</option>
						<option value="course_type">Course Type</option>
						<option value="dname">Department Name</option>
						<option value="pname">Program Name</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="course_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'DEPARTMENT')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="dname">Department Name</option>
						<option value="location">Location</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="department_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'FACULTY')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="post">Post</option>
						<option value="name">Name</option>
						<option value="fid">Faculty ID</option>
						<option value="dname">Department Name</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="faculty_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'PROJECT')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="topic">Project Topic</option>
						<option value="fid">Faculty ID</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="project_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'REGISTER')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="grade">Grade</option>
						<option value="roll_no">Roll No</option>
						<option value="ccode">Course Code</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="register_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
            else if ($tname == 'TEACHES')
            {
                    print('
		    <form action = "" method = "POST">
                                     <div class="form-group">
		    	    		<label for="aname">Select Attribute To Search For:&nbsp;&nbsp;</label>
					<select name ="aname" id="mySelect">
						<option value="fid">Faculty ID</option>
						<option value="ccode">Course Code</option>
					</select></br>
	    				<label for="avalue">Value: &nbsp;&nbsp;</label>
		   			<input type = "text" name ="avalue"></br>
    	    		        	<button type="submit" name="teaches_submit" class="btn btn-success">Submit</button>
                                     </div>
    		    </form>
                    '); 
         }
    
     } else if(isset($_POST["student_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
	if($aname == 'joining_date')
            $query_str=oci_parse($con_str,"select * from student where $aname = TO_DATE('$avalue','yyyy-mm-dd')");
	else
	    $query_str=oci_parse($con_str,"select * from student where $aname = '$avalue'");
            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">First Name</th>
			  <th style="text-align:center;" scope="col">Last Name</th>
			  <th style="text-align:center;" scope="col">Roll No</th>
			  <th style="text-align:center;" scope="col">Joining Date</th>
			  <th style="text-align:center;" scope="col">Address</th>
			  <th style="text-align:center;" scope="col">Program Name</th>
			  <th style="text-align:center;" scope="col">Department</th>
			  <th style="text-align:center;" scope="col">Project Topic</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 8; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            } while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>
		</div>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } else if(isset($_POST["program_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from program where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Program Name</th>
			  <th style="text-align:center;" scope="col">Duration</th>
			  <th style="text-align:center;" scope="col">Department Name</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 3; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
 
         } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
     }
    }   else if(isset($_POST["course_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from course where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Course Code</th>
			  <th style="text-align:center;" scope="col">Title</th>
			  <th style="text-align:center;" scope="col">Lecture</th>
			  <th style="text-align:center;" scope="col">Practical</th>
			  <th style="text-align:center;" scope="col">Theory</th>
			  <th style="text-align:center;" scope="col">Course Type</th>
			  <th style="text-align:center;" scope="col">Department Name</th>
			  <th style="text-align:center;" scope="col">Program Name</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 8; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } else if(isset($_POST["department_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from department where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Department Name</th>
			  <th style="text-align:center;" scope="col">Location</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 2; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } else if(isset($_POST["faculty_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from faculty where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Post</th>
			  <th style="text-align:center;" scope="col">Name</th>
			  <th style="text-align:center;" scope="col">Faculty ID</th>
			  <th style="text-align:center;" scope="col">Department Name</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 4; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } else if(isset($_POST["project_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from project where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Project Topic</th>
			  <th style="text-align:center;" scope="col">Faculty ID</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 2; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } else if(isset($_POST["register_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from register where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Grade</th>
			  <th style="text-align:center;" scope="col">Roll No</th>
			  <th style="text-align:center;" scope="col">Course Code</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 3; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } else if(isset($_POST["teaches_submit"])) {
        $aname = $_POST['aname'];
        $avalue = $_POST['avalue'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str,"select * from teaches where $aname = '$avalue'");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else if(count($query_data=oci_fetch_array($query_str))!=1){
		
	      print('
		<div style="text-align:center;">
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Faculty ID</th>
			  <th style="text-align:center;" scope="col">Course Code</th>
			</tr>
		   </thread>
		   <tbody>
		</div>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 2; $i++) {
		  if($query_data[$i] == "")
			$query_data[$i] = "NULL";
                   print("<td>$query_data[$i]</td>");
                	
                }
		 print('</tr>');
		 $j++;

            }while($query_data=oci_fetch_array($query_str));
	     print('</tbody
		</table>');
	  } else
		print('<div style="text-align:center;color:red;">No Rows Selected</div>');
 
         }
     } 
?>

<script>

function changeIt(){

var selected = document.getElementById("mySelect1").value;
var inputt = document.getElementById("inputtext");
console.log(selected);
if(selected == "joining_date")
	inputt.type = "date";
else
	inputt.type = "text";

}

</script>
			</div>
		</div>
         </div>
    </div>
</body>
</html>


