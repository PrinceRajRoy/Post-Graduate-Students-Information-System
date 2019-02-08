<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
	input {
            margin-right:30%;
	    border-radius:5px;
            width:250px;
        }
        select {
            margin-right:35%;
	    border-radius:5px;
	    width:250px;
        }
        button {
    	    margin-right:35%;
        }
	.fa-1x {
	font-size: 1.5rem;
	}
	.navbar-toggler.toggler-example {
	cursor: pointer;
	}
	.dark-blue-text {
	color: #0A38F5;
	}
	.dark-pink-text {
	color: #AC003A;
	}
	.dark-amber-text {
	color: #ff6f00;
	}
	.dark-teal-text {
	color: #004d40;
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
		<h2 style="text-align:center">Table View Section</h2></br></br>
    	 </div>
	 <div class="row" style="text-align:right;font-family:Montserrat;font-size:100%;">
        		<div class="col-md-10 col-md-offset-1">
				<div style="min-height:300px;background-color:#7f8c8d;padding-top:15%;border-radius:5px;">
					<form action = "" method = "POST">
                        		     <div class="form-group">
	    	    				<label for="tname">Select Table:&nbsp;&nbsp;</label>
						<select name ="tname" id="mySelect">
							<option value="STUDENT">STUDENT</option>
							<option value="PROGRAM">PROGRAMME</option>
							<option value="COURSE">COURSE</option>
							<option value="DEPARTMENT">DEPARTMENT</option>
							<option value="FACULTY">FACULTY</option>
							<option value="PROJECT">PROJECT</option>
							<option value="REGISTER">REGISTER</option>
							<option value="TEACHES">TEACHES</option>
						</select></br>
    		        		<button type="submit" name="getdata" class="btn btn-success">Submit</button>
                           		     </div>
					</form>
<div style="text-align:center">
<?php
    if(isset($_POST['getdata'])) {
        $tname = $_POST['tname'];

	echo '
                <script>
		    document.getElementById("mySelect").value = "'.$tname.'";
                    console.log("Inside Getattribute");
                </script>
            ';

        $con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
                <script>
                    console.log("Cannot connect : "'.$err.'");
                </script>
            ';
        } else {
            $query_str=oci_parse($con_str, "select * from $tname");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            }

	    if($tname == 'STUDENT'){
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
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'PROGRAM'){
		print('
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Program Name</th>
			  <th style="text-align:center;" scope="col">Duration</th>
			  <th style="text-align:center;" scope="col">Department Name</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'COURSE'){
		print('
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
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'DEPARTMENT'){
		print('
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Department Name</th>
			  <th style="text-align:center;" scope="col">Location</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'FACULTY'){
		print('
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
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'PROJECT'){
		print('
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Project Topic</th>
			  <th style="text-align:center;" scope="col">Faculty ID</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'REGISTER'){
		print('
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Roll No</th>
			  <th style="text-align:center;" scope="col">Course Code</th>
			  <th style="text-align:center;" scope="col">Grade</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  } else if($tname == 'TEACHES'){
		print('
		<table class="table table-striped table-dark table-condensed table-hover table-bordered"
		   <thread>
			<tr>
			  <th style="text-align:center;" scope="col">Sl No</th>
			  <th style="text-align:center;" scope="col">Faculty ID</th>
			  <th style="text-align:center;" scope="col">Course Code</th>
			</tr>
		   </thread>
		   <tbody>');
	  $j = 1;
          while($query_data=oci_fetch_array($query_str))
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

            }
	     print('</tbody
		</table>');
	  }
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

