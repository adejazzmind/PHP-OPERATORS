<?php
$acctbal = 1000000;
$available = 50000;
$withamt = 40000;
$calc = $available-$withamt;
if ($withamt <= $available){
    echo "You may proceed with your withdrawal.
    Your remaining available balance will be ".$calc."NGN.";
}
else if ($withamt > $available){
    echo "You have Insufficient Funds.";
}
?>
