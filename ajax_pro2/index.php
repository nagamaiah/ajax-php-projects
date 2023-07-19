
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Pro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h2 class="text-center text-primary">Insert Data </h2>

        <form id="myform" action="insertphp.php" method="post" >

        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" >
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" >
        </div>

        <input class="btn btn-primary" type="submit" name="submit" id="submit" value="submit" >


 
        </form>




        <script>

           $(document).ready(function(){

                var form = $('#myform');
                $('#submit').click(function(){
                    $.ajax({
                        url : form.attr('action'),
                        type : 'post',
                        data : $("#myform input").serialize(),
                        
                        success : function(data){
                            console.log(data);
                        }

                    });
                });

                
           });
        
        
        </script>

    </div>
</body>
</html>