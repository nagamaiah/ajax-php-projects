<!DOCTYPE html>
<html lang="en">
<head>
    <title>JS Practice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
       <br/>
        <div class="container">
        	<h4>Users Data</h4>
	        <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Name</th>
			      <th scope="col">Password</th>
			      <th scope="col">Gender</th>
			    </tr>
			  </thead>
			  <tbody id="user-data">
			    
			  </tbody>
			</table>
		<div>

        <hr><br>

        <div class="container">
        	<h4>User Form</h4>
        	<form id="user-form" onsubmit="formSubmit(event)">
            <div class="form-group">
                <label for="username">Username :</label>
                <input class="form-control" type="text" name="username" id="">
            </div>
            <div class="form-group">
                <label  for="password">Password :</label>
                <input class="form-control"  type="text" name="password" id="">
            </div>
            <div class="form-group">
                <label  for="gender">Gender :</label>
                <input class="" type="radio" name="yes_no" value="Male" checked>Male</input>
                <input class="" type="radio" name="yes_no" value="Female">Female</input>
            </div>
            <button class="btn btn-primary" type="submit">Send</button>
        </form>
        </div>

    </div>
    


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- <script src="js/fetch_api.js" type="text/javascript"></script> -->
    <script src="js/ajax_jquery.js" type="text/javascript"></script>



    
</body>
</html>