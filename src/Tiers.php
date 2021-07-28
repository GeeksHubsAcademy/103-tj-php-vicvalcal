<?php
namespace Tiers;

class Tiers
{
    public function apply($input)
    {
    	$output = "";

    	for ($i = 1; $i <= $input; $i++) {
    		$asterisks = str_repeat("*", $i);
    		$row = str_pad($asterisks, $input, " ", STR_PAD_LEFT) . "\n";

    		$output .= $row;
    	}

        return $output;
    }
}
