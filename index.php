<?php
$listToSort = array(3,4,42,1,2);
print_r ($listToSort);

for ($iLoop = 0; $iLoop<count($listToSort)-1; $iLoop++)
{
    for ($jLoop = 0; $jLoop<count($listToSort)-$iLoop-1; $jLoop++)
    {
        if ($listToSort[$jLoop] > $listToSort[$jLoop+1] ) {
            $varTemp = $listToSort[$jLoop+1];
            $listToSort[$jLoop+1] = $listToSort[$jLoop];
            $listToSort[$jLoop] = $varTemp;
        }
    }
}
echo "\n";
printf(" bubble sorted : ");
echo "\n";
print_r ($listToSort);
mail("Moi", "test", "dockerfile à optimiser", "From: Desperate Dev");
?>