<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
	input {
            margin-right:35%;
	    border-radius:5px;
            width:250px;
        }
        button {
    	    margin-right:35%;
        }
</style>
</head>
<body>
    <div class="container-fluid">
	 <div class="row">
		<div style="height:12%;background-color:#4285f4;padding:0.3% 0;">
			<h1 style='text-align:center;color:white;font-family:Montserrat;'>Post Graduate Students Information System For TU</h1>
			<a href="/~prince_csb16" style="position:fixed;right:3%;top:4%;color:black;font-size:140%;text-decoration:none;">HOME</a>
   	        </div>
	 </div>
	 <div class="row">
		<h2 style="text-align:center">Student Search Section</h2></br></br>
    	 </div>
	 <div class="row" style="text-align:right;font-family:Montserrat;font-size:100%;">
        	<div class="col-md-10 col-md-offset-1">
			<div style="min-height:300px;background-color:#7f8c8d;padding-top:15%;border-radius:5px;">
				<form action = "" method = "POST">
                       		     <div class="form-group">
	    	  				<label for="roll_no">Enter Student Roll No: &nbsp;&nbsp;</label>
						<input type = "text" name ="roll_no" placeholder="Student Roll No"></br>
    	    		        		<button type="submit" name="getdata" class="btn btn-success">Submit</button>
				     </div>
				</form>
<div style="text-align:center">
<?php
    if(isset($_POST['getdata'])) {
        $roll_no = $_POST['roll_no'];
        $con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           $err = oci_error();
           echo '
                <script>
                    console.log("Cannot connect : "'.$err.'");
                </script>
            ';
        } else {
            $query_str=oci_parse($con_str, "select fname, lname, student.roll_no, joining_date, address, student.pname, student.dname, prtopic, course.title, register.grade from student, register, course where student.roll_no = '$roll_no' and student.roll_no = register.roll_no and register.ccode = course.ccode");
            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            }
	   
	 
	 if(count($query_data=oci_fetch_array($query_str))!=1){
           print('
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
			  <th style="text-align:center;" scope="col">Course Title</th>
			  <th style="text-align:center;" scope="col">Grade</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          do
          {
            print('	<tr>
			  <th scope="row"style="text-align:center;">'.$j.'</th>');
                for($i = 0; $i < 10; $i++) {
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
</div>
	       			</div>
			</div>
 	 </div>
    </div>

</body>
</html>
