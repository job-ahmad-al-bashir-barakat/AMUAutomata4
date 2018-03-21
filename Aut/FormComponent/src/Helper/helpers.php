<?php

if(! function_exists('formClassHelper'))
{
    function formClassHelper($class) {

        $replacement = '';
        $labelClass  = '';
        $contClass   = '';
        $inputClass  = '';

        if(preg_match_all('/\b(?<![\S])(c:[\w\d-]+)(?![\S])\b/',$class,$results,PREG_PATTERN_ORDER)) {
            foreach ($results as $index => $result)
            {
                if ($index == 0)
                    foreach ($result as $item)
                    {
                        $replacement = "$replacement|$item";
                        $item = preg_replace('/\b(?<![\S])(c:)\b/','',$item);
                        $contClass = "$contClass $item";
                    }
            }
        }

        if(preg_match_all('/\b(?<![\S])(l:[\w\d-]+)(?![\S])\b/',$class,$results,PREG_PATTERN_ORDER)) {
            foreach ($results as $index => $result)
            {
                if ($index == 0)
                    foreach ($result as $item)
                    {
                        $replacement = "$replacement|$item";
                        $item = preg_replace('/\b(?<![\S])(l:)\b/','',$item);
                        $labelClass = "$labelClass $item";
                    }
            }
        }

        if(preg_match_all('/\b(?<![\S])(i:[\w\d-]+)(?![\S])\b/',$class,$results,PREG_PATTERN_ORDER)) {
            foreach ($results as $index => $result)
            {
                if ($index == 0)
                    foreach ($result as $item)
                    {
                        $replacement = "$replacement|$item";
                        $item = preg_replace('/\b(?<![\S])(i:)\b/','',$item);
                        $inputClass = "$inputClass $item";
                    }
            }
        }

        // remove class dialog from string
        $replacement = "group{$replacement}";

        // just class table
        $class = preg_replace("/\b(?<![\S])($replacement)(?![\S])\b/",'',$class);

        return ['contClass' => trim($contClass),'labelClass' => trim($labelClass),'inputClass' => trim($inputClass) ,'class' => trim($class)];
    }
}

if(! function_exists('shortIfElse'))
{
    function shortIfElse($condition ,$if ,$else)
    {
        return $condition ? $if : $else;
    }
}

if(! function_exists('convertArrayToString'))
{
    /**
     * @param string|array $input
     * @param string $additional_string
     * @return string
     */
    function convertArrayToString($input , $additional_string = '')
    {
        $result = '';

        if(is_array($input))
        {
            foreach ($input as $index => $item)
                if(is_numeric($index))
                    $result .= "{$item} ";
                else
                    $result .= "{$index}={$item} ";

            return "$result $additional_string";
        }
        else
            return "$input $additional_string";
    }
}

if(! function_exists('removeSpaces'))
{
    function removeSpaces($html)
    {
        return preg_replace('/\s+/', ' ', $html);
    }
}
