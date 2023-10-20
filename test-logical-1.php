<?php

function max_profit(array $stock_prices) {
    
    $length = count($stock_prices);
    $max_profit = -1;

    for ($i=0; $i < $length; $i++) { 
        
        for ($j=$i+1; $j < $length; $j++) { 
            
            $profit = $stock_prices[$j] - $stock_prices[$i];
            echo "Profit: ".$profit."\n";

            if ($profit > 0 && $profit > $max_profit) {
                $max_profit = $profit;
            }
        }
    }

    return $max_profit;
}

$stock_prices = [5, 3, 2, 1, 2, 5, 7, 13, 6, 8];
echo "Max Profit: ".max_profit($stock_prices);
echo "\n";