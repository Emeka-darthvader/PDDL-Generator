(define (problem pb10) 

        (:domain trafficsystem) 

        (:objects C -  m  

                 A   -  n 

                 D  -  o 

                 B      -  p 

                 N       -  q) 

        (:init (hasPriority C) (not(hasPriority A)) 

                                    (not(hasPriority D)) 

                                    (not(hasPriority B)) 

                                    (not(hasPriority N )) 

                                    (canhavePriority C) 

                                    (canhavePriority A) 

                                    (canhavePriority D) 

                                    (canhavePriority B) 

                                    (canhavePriority N) 


                                    
                                    ) 

        (:goal (and (hasPriority A) (not(hasPriority C)) 

                (not(hasPriority D)) (not(hasPriority B)) 

                (not(hasPriority N)) 

        
        ))
        )
        
        