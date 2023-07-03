<?php

namespace Lopezsoft\VerificationDigit;
class VerificationDigit
{
    public static function getDigit(int $Number = 0): int
    {
        $vector = array();
        if ($Number > 0) {
            $SValue = strval($Number);
            $Accumulator = 0;
            $vector[1] = 3;
            $vector[2] = 7;
            $vector[3] = 13;
            $vector[4] = 17;
            $vector[5] = 19;
            $vector[6] = 23;
            $vector[7] = 29;
            $vector[8] = 37;
            $vector[9] = 41;
            $vector[10] = 43;
            $vector[11] = 47;
            $vector[12] = 53;
            $vector[13] = 59;
            $vector[14] = 67;
            $vector[15] = 71;
            $NValue = strlen($SValue);
            for ($i = 0; $i < $NValue; $i++) {
                $Num = substr($SValue, $i, 1);
                $Accumulator += intval($Num) * $vector[$NValue - $i];
            }

            $Residue = $Accumulator % 11;

            $result = ($Residue > 1) ? 11 - $Residue : $Residue;
        } else {
            $result = -1;
        }

        return $result;
    }
}
