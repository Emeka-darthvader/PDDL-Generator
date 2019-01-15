<?php require('dbconnect.php')?>
<?php
    if(isset($_POST['codeGenerate'])){
        $firstName = $_POST['firstName'];
        $randomValue = "PDDL-".rand();
        $createUSerCode = "INSERT INTO `userDetails`( `user_firstName`,`userCode`) VALUES ('$firstName','$randomValue')";

        if ($connect->query($createUSerCode) === TRUE) {
            //$pddlVariable = "http://localhost/pddlconverter/variables.php?name=$firstName&usercode=$randomValue";
            header('Location: http://localhost/pddlconverter/variables.php?name='.$firstName.'&usercode='.$randomValue.'');
        } else {
            
            //var_dump($connect->error);
            //exit();
            header('Location: http://localhost/pddlconverter/index.php');
        }
    }

?>