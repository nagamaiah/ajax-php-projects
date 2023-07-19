<?php

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','ajax_pro');

    global $connection;
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(!$connection){
        die('Database connection failed'.mysqli_error($connection));
    }



?>

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
        <h2 class="text-center text-primary">Get Data from Database</h2>

        <form>

        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="" id="">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="" id="">
        </div>

    

        <div class="form-group">

        <label for="">Select Degree</label>
            <select name="" id="" class="form-control" onchange="myFun(this.value)";>
                <option value="">Select any one</option>
                    <?php
                        $query = "SELECT * FROM degree";
                        $selelct_degree = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($selelct_degree)){
                            $degree = $row['degrees'];
                            $degree_id = $row['m_id'];
                            echo "<option value='$degree_id'>$degree</option>";
                        }
                    ?>
            </select>
        </div>

        <div class="form-group">

            <label for="">Classes</label>
            <select  id="dataget" class="form-control">
                    
            </select>
        </div>
        <button class="btn btn-primary" id="">Submit</button>
 
        </form>




        <script>

            function myFun(datavalue){
                $.ajax({
                    url: 'class.php',
                    type: 'POST',
                    data: {datapost : datavalue},

                    success: function(result){
                        $('#dataget').html(result);
                    }
                });
            }
        
        
        </script>

    </div>
</body>
</html>