
        (define (domain trafficsystem) 

        (:requirements :strips :typing) 

        (:types m n o p q )  

        (:predicates (hasPriority ?x) 

                     (canhavePriority ?x) ) 

        
        (:action givePriority 

         :parameters (?a - o  ?b - p ?c - q ?d - n  ?e - m ) 

         :precondition (and(hasPriority ?e) 

                        (not (hasPriority ?a)) 

                            (not (hasPriority ?b)) 

                            (not (hasPriority ?c)) 

                            (not (hasPriority ?d)) 

                             (canhavePriority ?a) 

                             (canhavePriority ?b) 

                             (canhavePriority ?c) 

                             (canhavePriority ?d) 

                             ) 

          :effect(and (hasPriority ?d)  

                    (not(hasPriority  ?e)) 

                    (not(hasPriority  ?a)) 

                    (not(hasPriority  ?b)) 

                    (not(hasPriority  ?c)) 

                    (canhavePriority ?a) 

                    (canhavePriority ?b) 

                    (canhavePriority ?c) 

                    (canhavePriority ?e) 

                    
                    ) 

         
         )) 
       
        