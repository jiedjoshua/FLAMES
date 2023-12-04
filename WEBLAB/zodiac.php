<?php
class zodiac{
   
    function getZodiacSign($bday1){
            $month = date('m', strtotime($bday1));
            $day = date('d', strtotime($bday1));
            // Make sure the provided day and month are valid
            if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
                return"Aries";
            } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
                return "Taurus";
            } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
                return "Gemini";
            } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
                return "Cancer";
            } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
                return "Leo";
            } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
                return "Virgo";
            } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
                return "Libra";
            } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
                return "Scorpio";
            } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
                return "Sagittarius";
            } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
                return "Capricorn";
            } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
                return "Aquarius";
            } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
                return "Pisces";
            } else {
                return "Invalid date";
            }
        
    }

    function getIcon($zodiac){
        switch($zodiac){
            case 'Aries':
                return "icons/aries.png";
                break;
            case 'Taurus':
                return "icons/taurus.png";
                break;
            case 'Gemini':
                return "icons/gemini.png";
                break;
            case 'Cancer':
                return "icons/cancer.png";
                break;
            case 'Leo':
                return "icons/leo.png";
                break;
            case 'Virgo':
                return "icons/virgo.png";
                break;
            case 'Libra':
                return "icons/libra.png";
                break;
            case 'Scorpio':
                return "icons/scorpio.png";
                break;
            case 'Sagittarius':
                return "icons/sagittarius.png";
                break;
            case 'Capricorn':
                return "icons/capricorn.png";
                break;
            case 'Aquarius':
                return "icons/aquarius.png";
                break;
            case 'Pisces':
                return "icons/pisces.png";
                break;
            default:
                return "Invalid date";
                break;
        }
    }

}








?>
