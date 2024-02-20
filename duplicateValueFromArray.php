<?php
   function removeDuplicateValues($array){
        $result = [];

        for($i = 0; $i < count($array) ; $i++){
            $isDuplicate = false;
            for($j = 0 ; $j < count($result) ; $j++){
                if($array[$i] == $result[$j]){
                    $isDuplicate = true;
                }
            }
            if(!$isDuplicate){
                $result[] = $array[$i];
            }
        }

        echo json_encode($result);
   }


   echo removeDuplicateValues([1,2,4,2,5,1]);
?>