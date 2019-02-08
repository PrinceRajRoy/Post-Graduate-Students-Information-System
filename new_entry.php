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
			<h1 style='text-align:center;color:white;font-family:Montserrat;'>Post Graduate Students Information System For TU</h1>
			<a href="/~prince_csb16" style="position:fixed;right:3%;top:4%;color:black;font-size:140%;text-decoration:none;">HOME</a>
   	        </div>
	 </div>
    	 <div class="row">
		<h2 style="text-align:center">Table Entry Section</h2></br></br>
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
		        <label for="fname">First Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="fname" placeholder="First Name"></br>
			
			<label for="lname">Last Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="lname" placeholder="Last Name"></br>
    	    	        
			<label for="roll_no">Roll No: &nbsp;&nbsp;</label>
		        <input type = "text" name ="roll_no" placeholder="Roll No"></br>
    	    	        
			<label for="joining_date">Joining Date: &nbsp;&nbsp;</label>
		        <input type = "date" name ="joining_date"" placeholder="Joining Date"></br>
    	    	        
			<label for="address">Address: &nbsp;&nbsp;</label>
		        <input type = "text" name ="address" placeholder="Address"></br>
    	    	        
			<label for="pname">Programme Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="pname" placeholder="Programme Name"></br>

    	    	        <label for="dname">Department Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="dname" placeholder="Department Name"></br>
                    	
			<label for="prtopic">Project Topic: &nbsp;&nbsp;</label>
		        <input type = "text" name ="prtopic" placeholder="Project Topic"></br>
    	    	            	    	        
			<button type="submit" name="student_submit" class="btn btn-success">Submit</button>
                      </div></br>
    		    </form>'); 
         }
            else if ($tname == 'PROGRAM')
            {
                    print('
                    <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="pname">Program Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="pname" placeholder="Program Name"></br>
			
			<label for="duration">Duration: &nbsp;&nbsp;</label>
		        <input type = "number" name ="duration" placeholder="Duration"></br>
			
			<label for="dname">Department Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="dname" placeholder="Department Name"></br>
			
                    	<button type="submit" name="program_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
            else if ($tname == 'COURSE')
            {
                    print('
                    <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="ccode">Course Code: &nbsp;&nbsp;</label>
		        <input type = "text" name ="ccode" placeholder="Course Code"></br>
                    	
			<label for="title">Title: &nbsp;&nbsp;</label>
		        <input type = "text" name ="title" placeholder="Title"></br>
                    	
			<label for="lecture">Lecture: &nbsp;&nbsp;</label>
		        <input type = "number" name ="lecture" placeholder="Lecture"></br>
                    	
			<label for="practical">Practical: &nbsp;&nbsp;</label>
		        <input type = "number" name ="practical" placeholder="Practical"></br>
                    	
			<label for="theory">Theory: &nbsp;&nbsp;</label>
		        <input type = "number" name ="theory" placeholder="Theory"></br>
                    	
			<label for="course_type">Course Type: &nbsp;&nbsp;</label>
					<select name ="course_type">
						<option value="Core">Core</option>
						<option value="Elective">Elective</option>
					</select></br>

			<label for="dname">Department Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="dname" placeholder="Department Name"></br>
                    	
			<label for="pname">Programme Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="pname" placeholder="Programme Name"></br>
                        
			<button type="submit" name="course_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
            else if ($tname == 'DEPARTMENT')
            {
                    print('
                    <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="dname">Department Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="dname" placeholder="Department Name"></br>
			
                    	<label for="location">Location: &nbsp;&nbsp;</label>
		        <input type = "text" name ="location" placeholder="Location"></br>
			
                    	<button type="submit" name="department_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
            else if ($tname == 'FACULTY')
            {
                    print('
                    <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="post">Post: &nbsp;&nbsp;</label>
		        <input type = "text" name ="post" placeholder="Post"></br>

                    	<label for="name">Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="name" placeholder="Name"></br>

                    	<label for="fid">Faculty ID: &nbsp;&nbsp;</label>
		        <input type = "text" name ="fid" placeholder="Faculty ID"></br>

                    	<label for="dname">Department Name: &nbsp;&nbsp;</label>
		        <input type = "text" name ="dname" placeholder="Department Name"></br>

                    	<button type="submit" name="faculty_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
            else if ($tname == 'PROJECT')
            {
                    print('
                    <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="topic">Topic: &nbsp;&nbsp;</label>
		        <input type = "text" name ="topic" placeholder="Topic"></br>

                    	<label for="fid">Faculty ID: &nbsp;&nbsp;</label>
		        <input type = "text" name ="fid" placeholder="Faculty ID"></br>

                    	<button type="submit" name="project_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
            else if ($tname == 'REGISTER')
            {
                    print('
                     <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="grade">Grade: &nbsp;&nbsp;</label>
		        <input type = "text" name ="grade" placeholder="Grade"></br>

                    	<label for="roll_no">Roll No: &nbsp;&nbsp;</label>
		        <input type = "text" name ="roll_no" placeholder="Roll No"></br>

                    	<label for="ccode">Course Code: &nbsp;&nbsp;</label>
		        <input type = "text" name ="ccode" placeholder="Course Code"></br>

                    	<button type="submit" name="register_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
            else if ($tname == 'TEACHES')
            {
                    print('
                    <form action = "" method = "POST">
                      <div class="form-group">
		        <label for="fid">Faculty ID: &nbsp;&nbsp;</label>
		        <input type = "text" name ="fid" placeholder="Faculty ID"></br>

                    	<label for="ccode">Course Code: &nbsp;&nbsp;</label>
		        <input type = "text" name ="ccode" placeholder="Course Code"></br>

                    	<button type="submit" name="teaches_submit" class="btn btn-success">Submit</button>
                      </div></br>
                    </form>'); 
         }
    
     } else if(isset($_POST["department_submit"])) {
        $dname = $_POST['dname'];
        $location = $_POST['location'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into department(dname, location) values('$dname', '$location')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

         }
     } else if(isset($_POST["student_submit"])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $roll_no = $_POST['roll_no'];
        $joining_date = $_POST['joining_date'];
        $address = $_POST['address'];
        $pname = $_POST['pname'];
        $dname = $_POST['dname'];
        $prtopic = $_POST['prtopic'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {

            $query_str=oci_parse($con_str, "insert into student(fname, lname, roll_no, joining_date, address, pname, dname, prtopic) values('$fname', '$lname', '$roll_no', To_Date('$joining_date','yyyy-mm-dd'), '$address', '$pname', '$dname', '$prtopic')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }
            
         }
     } else if(isset($_POST["program_submit"])) {
        $pname = $_POST['pname'];
        $duration = $_POST['duration'];
        $dname = $_POST['dname'];
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
            $query_str=oci_parse($con_str, "insert into program(pname, duration, dname) values('$pname', '$duration', '$dname')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } else if(isset($_POST["course_submit"])) {
        $ccode = $_POST['ccode'];
        $title = $_POST['title'];
        $lecture = $_POST['lecture'];
        $practical = $_POST['practical'];
        $theory = $_POST['theory'];
        $course_type = $_POST['course_type'];
        $dname = $_POST['dname'];
        $pname = $_POST['pname'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into course(ccode, title, lecture, practical, theory, course_type, dname, pname) values('$ccode', '$title', '$lecture', '$practical', '$theory', '$course_type', '$dname', '$pname')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } else if(isset($_POST["department_submit"])) {
        $dname = $_POST['dname'];
        $location = $_POST['location'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into department(dname, location) values('$dname', '$location')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } else if(isset($_POST["faculty_submit"])) {
        $post = $_POST['post'];
        $name = $_POST['name'];
        $fid = $_POST['fid'];
        $dname = $_POST['dname'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into faculty(post, name, fid, dname) values('$post', '$name', '$fid', '$dname')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } else if(isset($_POST["project_submit"])) {
        $topic = $_POST['topic'];
        $fid = $_POST['fid'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into project(topic, fid) values('$topic', '$fid')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } else if(isset($_POST["register_submit"])) {
        $grade = $_POST['grade'];
        $roll_no = $_POST['roll_no'];
        $ccode = $_POST['ccode'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into register(grade, roll_no, ccode) values('$grade', '$roll_no', '$ccode')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } else if(isset($_POST["teaches_submit"])) {
        $fid = $_POST['fid'];
        $ccode = $_POST['ccode'];
    	$con_str = oci_connect("your_id", "your_password", "database_url");
        if (!$con_str)
        {
           echo '
         		<script>
         			console.log("Cannot connect : "'.$err.'");
         		</script>
         	';
        } else {
            $query_str=oci_parse($con_str, "insert into teaches(fid, ccode) values('$fid', '$ccode')");

            if(!oci_execute($query_str))
            {
		$err = oci_error($query_str)["message"];
	           print('<div style="text-align:center;color:red;">"'.$err.'"</div>');
                   exit;
            } else {
                print('<div style="text-align:center;color:green;">Table Updated Successfully</div>');
            }

            
         }
     } 
?>
			</div>
		</div>
         </div>
    </div>
</body>
</html>


