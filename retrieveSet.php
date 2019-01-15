<?php 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Current PDDL set</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('head.php')?>
    <style>
                    body {
            background-image: url("img/traffic4.jpg");
            background-color: #cccccc;
            
            background-repeat: no-repeat;
            background-size: cover;
            }
    
    </style>

</head>
<?php if(!empty($_GET['name'])) :?>
<?php $name = $_GET['name']; ?>
<?php $code = $_GET['usercode'];?>
<?php $time = $_GET['nextTime']; ?>
<?php $problemFile = $_GET['probfile'];?>
<?php $trafficFile = $_GET['traffile']; ?>

<body>

    <div class="container">
    <?php require('menu.php')?>
            
                <div class= 'row' style='margin-top:100px;background-color:white;padding: 50px;'>
                
                    <div class='row'>
                        <div class="col-md-6">
                            <h5>Hey <?php echo $name."!!!"?></h5> 
                        </div>
                        <div class="col-md-6">
                            <b>TIME TILL NEXT CHECK (GMT)<?php echo $time?><b>
                        </div>
                    </div>
                    <div class= 'row'>
                        <div class='row'>
                            <div  class="col-md-12">
                            <h6>Click the links below to download the trafficsystem.pddl and problem.pddl files</h6>
                             </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Last</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>trafficsystem.pddl</td>
                                <td><a href="/generatedFolders/trafficsystem.pddl">download</a></td>
                                </tr>

                                <tr>
                                <th scope="row">2</th>
                                <td>problem.pddl</td>
                                <td><a href="/generatedFolders/problem.pddl">download</a></td>
                                </tr>
                                
                            </tbody>
                            </table>
                    </div>
                    
                
            </div>

    </div>
    
</body>

<?php else: ?>
<body>
      
    <div class="container" >
            <div class="row" style="background-color:white;margin-top:50px">
               <div class="col-md-3">
                    <h1>Opps Something isn't right</h1>
               </div>
                <div class = "col-md-9">
                    <p> Click here to go <a href="">Go home</a><p>
                </div>
                
            </div>
    </div>  
</body>

<?php endif ?>
</html>