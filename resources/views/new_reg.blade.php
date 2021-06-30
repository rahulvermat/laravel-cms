@include('header')


<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<!--<link rel="stylesheet" type="text/css" href="styles.css">-->

<style>

	.main{
 	padding: 40px;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 18px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 max-width: 500px;
	height: 800px;
    padding: 10px 10px;
	background:#d9d9d9;
	    color: black;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}
	
	
	label{font-size:18px;}
	
	.sub-btn{
	    color:black;
	    width:325px;
		height:35px;
	
		clear:both;
	}
	
	.last{text-align:center !important;
	    clear:both;
	}
	
		body{
	    margin:0;
	    padding:0;
	    clear:both;
	    background-color:#f5f5f5 !important;
	}

</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
    function signupvalidation(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm_pasword = document.getElementById('confirm_pasword').value;
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    	
        var valid=true;

        if(name == ""){
            valid = false;
            document.getElementById('name_error').innerHTML = "required.";
        }

        // if(email == ""){
        //     valid = false;
        //     document.getElementById('email_error').innerHTML = "required.";
        // } else {
        //     if(!emailRegex.test(email)){
        //         valid = false;
        //         document.getElementById('email_error').innerHTML = "invalid.";
        //     }
        // }

        if(email == ""){
            valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        }

        if(phone == ""){
            valid = false;
            document.getElementById('phone_error').innerHTML = "required.";
        }

        if(dob == ""){
            valid = false;
            document.getElementById('dob_error').innerHTML = "required.";
        }

        if(password == "" ){
            valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        if(confirm_pasword == "" ){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "required.";
        }

        if(password != confirm_pasword){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
        }

        return valid;
    }
    </script>
</head>
<body>
    <div class="container-fluid">
        
        	<div class="main">
				<div class="main-center">
    <h3><strong>User Registeration</strong></h3>
        <?php
        if (! empty($response)) {
            ?>
        <div id="response" class="<?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
        <?php
        }
        ?>
        <form action="create" method="POST"
            onsubmit="return signupvalidation()">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                <label>First Name</label>
                <span id="name_error"></span>
               <div class="input-group">
                    <input type="text" class="form-control" name="name"
                        id="name" placeholder="Enter your name">
</div>
                </div>
                </div>
                 </div>
            
  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
                <label>Last Name</label>
                <div class="input-group">
                <span id="email_error"></span>
             <div class="input-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter your Last Name">
                    </div>
                    </div>
                    </div>
                 </div>
                 </div>

                 <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
                <label>Phone Number</label>
                <div class="input-group">
                <span id="email_error"></span>
             <div class="input-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your Phone Number">
                    </div>
                    </div>
                    </div>
                 </div>
                 </div>

                 
                 <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
                <label>Date of Birth</label>
                <div class="input-group">
                <span id="email_error"></span>
             <div class="input-group">
                    <input type="date" name="dob" id="dob" class="form-control">
                    </div>
                    </div>
                    </div>
                 </div>
                 </div>

                 
  <div class="row">
      <div class="col-sm-12">
            <div class="form-group">
                <label>Password</label>
                
                <span id="password_error"></span>
                <div class="input-group">
                    <input type="Password" name="password" id="password" class="form-control" placeholder="Enter your password">
                    
                  </div>
                    </div>
                    </div>
                    </div>
                    
  <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
            <label>Confirm Password</label>
            <span id="confirm_password_error"></span>
           
            <input type="password" name="confirm_pasword" id="confirm_pasword" class="form-control" placeholder="Re-enter password">
                   
                    </div>
                    </div>
</div>
<input type="hidden" name="user_id" value="{{session('id')}}">
  <div class="row">
      <div class="col-sm-12">
            <div class="form-group">
                <label>Role</label><span
                    ></span>
                <div>
                    <select name="role" id="" required class="form-control" >
					<option value="">Select Role</option>
					<option value="Teacher">Teacher</option>
					<option value="Student">Student</option>
					
					</select>
</div>
                    </div>
                </div>
            </div>

             <div class="row">
                  <div class="col-sm-12 last">
            <div align="center">
            <button type="submit" name="submit" class="btn btn-primary sub-btn">Sign Up</button>
             </div>
            </div>

        
    
    </div>



    </form>
    </div>
   </div>
    </div>
</body>
</html>
