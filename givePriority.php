<?php require('dbconnect.php')?>
<?php 
    if(isset($_POST['variablePriority'])){

        $firstName= $_POST['firstName'];
        $code = $_POST['code'];
        $currentState = $_POST['Current'];
        $newState = $_POST['NewGroup'];
        $newTime = date("Y-m-d H:i:s", strtotime('+2 hours'));
        $Traffile = "trafficsystem.pddl";
        $Probfile = "problemfile.pddl";
        // ed db bc ca ad  dd bb cc aa 
        // $curr
        // $new
        // $oth1
        // $oth2
        // $oth3
        if( $currentState == "N" && $newState == "D"){

            $curr = "N";
            $new  = "D";
            $oth1 = "C";
            $oth2 = "B";
            $oth3 = "A";
        }
        if( $currentState == "D" && $newState == "B"){

            $curr = "D";
            $new = "B";
            $oth1 = "A";
            $oth2 = "C";
            $oth3= "N";

        }
        if( $currentState == "B" && $newState  == "C"){

            $curr = "B";
            $new = "C";
            $oth1 = "A";
            $oth2 = "D";
            $oth3 = "N";

        }
        if( $currentState == "C" && $newState  =="A"){

            $curr = "C";
            $new = "A";
            $oth1 = "D";
            $oth2 = "B";
            $oth3 = "N";
            

        }
        if( $currentState == "A" && $newState  =="D"){

            $curr = "A";
            $new= "D";
            $oth1 = "C";
            $oth2 = "B";
            $oth3 = "N";
            

        }
        if( $currentState == "D" && $newState == "D"){

            $curr = "D";
            $new = "D";
            $oth1 = "B";
            $oth2 = "C";
            $oth3 = "A";
            

        }
        if( $currentState == "B" && $newState == "B"){

            $curr = "B";
            $new = "B";
            $oth1 = "A";
            $oth2 = "C";
            $oth3 = "D";
            

        }
        if( $currentState == "C" && $newState == "C"){

            $curr = "C";
            $new = "C";
            $oth1 = "A";
            $oth2 = "B";
            $oth3 = "D";
            

        }
        if( $currentState == "A" && $newState  =="A"){

            $curr = "A";
            $new = "A";
            $oth1 = "B";
            $oth2 = "C";
            $oth3 = "D";
            

        }


        $problemDomText= "(define (problem pb10) \r\n
        (:domain trafficsystem) \r\n
        (:objects ".$curr." -  m  \r\n
                 ".$new."   -  n \r\n
                 ".$oth1."  -  o \r\n
                 ".$oth2."      -  p \r\n
                 ".$oth3."       -  q) \r\n
        (:init (hasPriority ".$curr.") (not(hasPriority ". $new .")) \r\n
                                    (not(hasPriority ".$oth1.")) \r\n
                                    (not(hasPriority ".$oth2.")) \r\n
                                    (not(hasPriority ".$oth3." )) \r\n
                                    (canhavePriority ".$curr.") \r\n
                                    (canhavePriority ".$new.") \r\n
                                    (canhavePriority ".$oth1.") \r\n
                                    (canhavePriority ".$oth2.") \r\n
                                    (canhavePriority ".$oth3.") \r\n

                                    
                                    ) \r\n
        (:goal (and (hasPriority ".$new.") (not(hasPriority ".$curr.")) \r\n
                (not(hasPriority ".$oth1.")) (not(hasPriority ".$oth2.")) \r\n
                (not(hasPriority ".$oth3.")) \r\n
        
        ))
        )
        
        ";

        $trafficSystemPDDLText = "
        (define (domain trafficsystem) \r\n
        (:requirements :strips :typing) \r\n
        (:types m n o p q )  \r\n
        (:predicates (hasPriority ?x) \r\n
                     (canhavePriority ?x) ) \r\n
        
        (:action givePriority \r\n
         :parameters (?a - o  ?b - p ?c - q ?d - n  ?e - m ) \r\n
         :precondition (and(hasPriority ?e) \r\n
                        (not (hasPriority ?a)) \r\n
                            (not (hasPriority ?b)) \r\n
                            (not (hasPriority ?c)) \r\n
                            (not (hasPriority ?d)) \r\n
                             (canhavePriority ?a) \r\n
                             (canhavePriority ?b) \r\n
                             (canhavePriority ?c) \r\n
                             (canhavePriority ?d) \r\n
                             ) \r\n
          :effect(and (hasPriority ?d)  \r\n
                    (not(hasPriority  ?e)) \r\n
                    (not(hasPriority  ?a)) \r\n
                    (not(hasPriority  ?b)) \r\n
                    (not(hasPriority  ?c)) \r\n
                    (canhavePriority ?a) \r\n
                    (canhavePriority ?b) \r\n
                    (canhavePriority ?c) \r\n
                    (canhavePriority ?e) \r\n
                    
                    ) \r\n
         
         )) \r\n       
        ";


        $trafficFile = fopen("generatedFolders/trafficsystem.pddl", "w");
        echo fwrite($trafficFile, $trafficSystemPDDLText);
        fclose($trafficFile);

        $problemFile = fopen("generatedFolders/problem.pddl", "w");
        echo fwrite($problemFile, $problemDomText);
        fclose($problemFile);
        $enterDetails=" UPDATE `userDetails` SET `problemName`= '".$Probfile."',`Next Time`= '".$newTime."' ,`trafficName`= '".$Traffile."' WHERE `userCode`= '".$code."'";
        
        if ($connect->query($enterDetails) === TRUE) {
            
            header('Location: http://localhost/pddlconverter/retrieveSet.php?name='.$firstName.'&usercode='.$code.'&nextTime='.$newTime.'&traffile='.$Traffile.'&probfile='.$Probfile.'');
        } else {
            
            var_dump($connect->error);
            echo "Press Back on Browser and Try again ";
            exit();
            header('Location: http://localhost/pddlconverter/index.php');
        }

    }

?>