
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Countries</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="myScript.js"></script>

</head>
<body>
    <div class="container">
        <h2 class="text-center text-info">Countries And States</h2>

        <form >


            <div class="form-group">
                <label for="">Select Country</label>
                <select id="country" class="form-control btn btn-info">
                        
                </select>
            </div>

            <div class="form-group">
                <label for="">Select State</label>
                <select  id="state" class="form-control btn btn-info">
                        
                </select>
            </div>

            <div class="form-group">
                <label for="">Select City</label>
                <select  id="city" class="form-control btn btn-info" >
                        
                </select>
            </div>

            <button class="btn btn-info" >Submit</button>
    
        </form>




        

    </div>
</body>
</html>