<?php

    class FORMAT{
        public function GET_TIME($date){
            return date('g:i a', strtotime($date));
            //    a - Lowercase am or pm
            //    A - Uppercase AM or PM
            //    B - Swatch Internet time (000 to 999)
            //    g - 12-hour format of an hour (1 to 12)
            //    G - 24-hour format of an hour (0 to 23)
            //    h - 12-hour format of an hour (01 to 12)
            //    H - 24-hour format of an hour (00 to 23)
            //    i - Minutes with leading zeros (00 to 59)
        }
        public function GET_DAY($date){
            return date('D', strtotime($date));       
                 // D - A textual representation of a day (three letters)
                 // l (lowercase 'L') - A full textual representation of a day
        }
        public function GET_DAY_FULL($date){
            return date('l', strtotime($date));       
                 // D - A textual representation of a day (three letters)
                 // l (lowercase 'L') - A full textual representation of a day
        }
        public function GET_DATE($date){
            return date('d', strtotime($date));
              //  d - The day of the month (from 01 to 31)  
              //  j - The day of the month without leading zeros (1 to 31) 
        }
        public function GET_MONTH($date){
            return date('M', strtotime($date));
            //  F - A full textual representation of a month (January through December)
            //  m - A numeric representation of a month (from 01 to 12)
            //  M - A short textual representation of a month (three letters)
            //  n - A numeric representation of a month, without leading zeros (1 to 12)
        }
        public function GET_YEAR($date){
            return date('Y', strtotime($date));
            // Y - A four digit representation of a year
            // y - A two digit representation of a year
        }
        public function GET_MONTH_YEAR($date){
            return date('M, Y', strtotime($date));
            // Y - A four digit representation of a year
            // y - A two digit representation of a year
        }
        public function BD_Date_Style($date){
            return date('d, M, Y', strtotime($date));
            // Y - A four digit representation of a year
            // y - A two digit representation of a year
        }
        public function contentLimit($text, $limit = 300){
            $text =$text . "";
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text . "....";
            return $text;
        }





        
    }