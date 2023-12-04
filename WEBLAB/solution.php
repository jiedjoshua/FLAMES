<?php
class solution{
   

    function computeFlames($name1, $name2){
        $name1 = strtolower($name1);
        $name2 = strtolower($name2);

        $name1 = str_replace(' ', '', $name1);
        $name2 = str_replace(' ', '', $name2);

        $flames1 = str_split($name1);
        $flames2 = str_split($name2);

        $result1=array_intersect($flames1,$flames2); 
        $result2=array_intersect($flames2,$flames1);

        $result = count($result1) + count($result2);
        $result = $result % 6;

        switch($result){

        case 0:
            return "Soulmates";
            break;

        case 1:
            return "Friends";
            break;

        case 2:
            return "Lovers";
            break;
        case 3:
            return "Anger";
            break;
        case 4:
            return "Married";
            break;
        case 5:
            return "Engaged";
            break;
    
        default:
        echo "ERROR";
        break;

        }
    }

    function computePercentage($compatibility){
        

        switch($compatibility){

        case 'Soulmates':
            return "100%";
            break;

        case 'Friends':
            return "60%";
            break;

        case 'Lovers':
            return "80%";
            break;
        case 'Anger':
            return "10%";
            break;
        case 'Married':
            return "98%";
            break;
        case 'Engaged':
            return "93%";
            break;
    
        default:
        echo "ERROR";
        break;

        }

    }
    
}


?>