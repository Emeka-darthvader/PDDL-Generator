<?php 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Emeka's PDDL generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('head.php')?>
    <style>
        body {
            background-image: url("img/traffic0.jpg");
            background-color: #cccccc;
            
            background-repeat: no-repeat;
            background-size: cover;
            }
    </style>

</head>
<body>
    <div class="container">
        <?php require('menu.php')?>
        <div class="row" >
            <div class="col-md-3">
               
            </div>
            <div class="col-md-9" >
                <div id="homeNav">
                    <div class= "row" style="background-color:white" >
                    <div  class= "col-md-6">
                            <div>
                                <h1>Hey There!!!</h1>
                                <h2>Welcome to my PDDL generator</h2>
                                <p>This application is originally created for my Masters  Assessment on PDDL</p>
                            </div>
                        </div>                    
                        <div class= "col-md-6" >
                            <div id = "homeForm">
                                <form action="powerHouse.php" method="post" >
                                    <div class="form-group"> 
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName"  placeholder="Enter First Name" required>
                                        <small id="firstName" class="form-text text-muted">We'll need it to generate your id for your PDDL operations</small>
                                    </div>
                                    
                                    <button type="submit" name="codeGenerate" class="btn btn-primary"> Enter the software !!!</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>
    </div>
   
</body>
</html>