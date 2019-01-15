<?php 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enter PDDL values</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('head.php')?>
    <style>
                body {
            background-image: url("img/traffic2.jpg");
            background-color: #cccccc;
            
            background-repeat: no-repeat;
            background-size: cover;
            }
    </style>

</head>
<?php if(!empty($_GET['name'])) :?>
<?php $name = $_GET['name']; ?>
<?php $code = $_GET['usercode'];?>
<body>

        
    <div class="container">
        <?php require('menu.php')?>
        <div class = "row" style="background-color:white; margin-top:50px"> 
            
            <div class = 'col-md-12'>
                
                <div class= 'row'>
                    <div class= 'col-md-4'>
                        <H2></H2>
                        <p>Hello <b><?php echo $name.'!!'; ?> </b></p>
                        <p>We take it that you have checked the decision tree and know which of the states is the
                            initial state (with current priority) and new state for priority (New State for priority)
                        </p>
                        <p>Kindly follow these instructions : 
                            <ol>
                                <li>Select the current state with prority on the left section called 'Current State with Priority'</li>
                                <li>If it is the first iteration (i.e all states A,B,C,D have not been assigned priority),
                                    select the null state  'N' 
                                </li>
                                <li>Select the new state you want to give dominance on the right section called 'Assign New Priority' </li>
                                <li>In the Next Page, a <b>timer</b> will be generated which will inform   you when next to check the 
                                    priority again from the decision tree.
                                </li>
                                <li>
                                    Also, in the next page you can download the PDDL file to use in the online editor
                                </li>
                                
                            </ol>
                        </p>
                    </div>
                    <div class= 'col-md-4'> 
                            <div id = "variableForm1">
                                <form action="givePriority.php" method="post" >
                                    <h3> Current State with Priority</h3>
                                    <div class="form-group"> 
                                    <label for="Current">Example select</label>
                                    <select class="form-control" id="Current" Name="Current">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="N">N</option>
                                    </select>
                                    </div>
                                    <input type='hidden' name='firstName' value=<?php echo "'".$name."'"?>/>
                                    <input type='hidden' name='code' value=<?php echo "'". $code."'"?>/>
                                    
                                    
                            </div>
                    </div>
                    <div class= 'col-md-4'>
                            <div id = "variableForm2">
                                
                                <h3>Assign New Priority</h3>
                                    <div class="form-group"> 
                                        <label for="NewGroup">Example select</label>
                                            <select class="form-control" id="NewGroup" name="NewGroup">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="N">N</option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" name="variablePriority" class="btn btn-primary"> Generate the PDDL!!!</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</body>

<?php else:?>
<body>
    <div class="container">
        <?php require('menu.php')?>
        <div class = "row" style='background-color:white'>

        <div class = 'col-md-3'></div>
            <div class = 'col-md-6'>
                <h4>Hey There</h4>
                <p>
                    Kindly Go to <a href="#">homepage</a> and create a firstname or select <a href="#">'check Existing PDDL'</a> to continue
                </p>
            </div>
            <div class = 'col-md-3'></div>
        </div>
    </div>

</body>
<?php endif?>

</html>