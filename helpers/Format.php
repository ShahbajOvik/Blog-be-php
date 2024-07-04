<?php
class Format
{
    public function formatDate($date)
    {
        return date('F j,Y, g:i A');
    }

    public function textshorten($text, $limit=100)
    {
         $text = $text."";
         $text = substr($text,0,$limit);
         $text = substr($text,0,strrpos($text,' '));
         $text = $text.".......";
         return $text;
    }
}


?>