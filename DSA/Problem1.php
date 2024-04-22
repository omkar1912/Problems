<?php
    //Title -: TWO SUM

    // Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

    // You may assume that each input would have exactly one solution, and you may not use the same element twice.
    
    // You can return the answer in any order.
    
     
    
    // Example 1:
    
    // Input: nums = [2,7,11,15], target = 9
    // Output: [0,1]
    // Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
    // Example 2:
    
    // Input: nums = [3,2,4], target = 6
    // Output: [1,2]
    // Example 3:
    
    // Input: nums = [3,3], target = 6
    // Output: [0,1]
     
    
    // Constraints:
    
    // 2 <= nums.length <= 104
    // -109 <= nums[i] <= 109
    // -109 <= target <= 109
    // Only one valid answer exists.

    function twoSum($nums,$target){
        // $result = [];
        // for($i = 0 ; $i < count($arr) - 1; $i++){
        //     if(($arr[$i] + $arr[$i + 1] ) == $target){
        //         array_push($result,$i,$i+1);
        //         break;
        //     }
        // }
        // echo json_encode($result);

        echo "<br/>";

        $hashTable = [];
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (isset($hashTable[$complement])) {
                echo json_encode( [$hashTable[$complement], $i]);
            }
            $hashTable[$nums[$i]] = $i;
        }
        //echo json_encode([]); // No pair found
    }

    echo(twoSum([2,7,11,15],9));

?>