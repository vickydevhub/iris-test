<?php

namespace Helper;

class Helper
{
    /**
     * The function iterates through each character in the column title string. 
     * It multiplies the existing column number by 26 (the number of letters in the English alphabet) and adds the corresponding value of the current character based on its ASCII code. 
     * The ASCII code of 'A' is 65, so subtracting it from the ASCII code of the current character gives the equivalent number. 
     * Finally, 1 is added to adjust the index since Excel column titles start from 'A' as 1.
     * @param mixed $columnLetter
     * @return int
     */
    public static function letterToNumber($columnLetter): int
    { 
        $columnNumber = 0;
        $length = strlen($columnLetter);

        for ($i = 0; $i < $length; $i++) {
            $char = $columnLetter[$i];
            $columnNumber = $columnNumber * 26 + (ord($char) - ord('A') + 1);
        }

        return $columnNumber;
    }

    /**
     * The function uses a loop to perform the conversion. 
     * It calculates the remainder of the column number divided by 26 (the number of letters in the English alphabet) to determine the corresponding letter. 
     * The remainder is then converted to its ASCII representation using chr(), and the letter is appended to the beginning of the column letter string. 
     * The column number is adjusted by subtracting the remainder and dividing by 26. This process continues until the column number becomes zero.
     * @param mixed $columnNumber
     * @return string
     */
    public static function numberToLetter($columnNumber): string
    {
        $columnNumber = intval($columnNumber);
        if ($columnNumber <= 0) return '';

        $columnLetter = '';
    
        while ($columnNumber > 0) {
            $remainder = ($columnNumber - 1) % 26;
            $columnLetter = chr(65 + $remainder) . $columnLetter;
            $columnNumber = floor(($columnNumber - $remainder) / 26);
        }
    
        return $columnLetter;
    }
}