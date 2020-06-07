<?php
    class FormSanitizer{
        
        
        // static we do not need instantiate class
        public static function sanitizeFormString($inputText)
        {
            $inputText=strip_tags($inputText);
            // replace spaces
            $inputText=str_replace(" ","",$inputText);
            $inputText=strtolower($inputText);
            // uppercase the first letter
            $inputText=ucfirst($inputText);
            return $inputText;
        
        }

        public static function sanitizeFormUsername($inputText)
        {
            $inputText=strip_tags($inputText);
            // replace spaces
            $inputText=str_replace(" ","",$inputText);
            return $inputText;
        
        }

        public static function sanitizeFormPassword($inputText)
        {
            $inputText=strip_tags($inputText);
            return $inputText;
        
        }

        public static function sanitizeFormEmail($inputText)
        {
            $inputText=strip_tags($inputText);
            // replace spaces
            $inputText=str_replace(" ","",$inputText);
            return $inputText;
        
        }

    }  

?>





