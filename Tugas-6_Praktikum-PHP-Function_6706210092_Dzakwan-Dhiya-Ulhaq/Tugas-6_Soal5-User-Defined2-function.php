<!DOCTYPE HTML>
<html>
    <body>
<?php 


echo "<b>Hint (Temuan hasil pendalaman Abdul): :</b><br><br>";
function is_prime($number){
    if($number == 1){
        return false;
    }
    if($number == 2){
        return true;
    }
    $x = sqrt($number);
    $x = floor($x);

    for($i = 2; $i <= $x; ++$i){
        if($number % $i == 0){
            break;
        }
    }
    if($x == $i - 1){
        return true;
    }
    else{
        return false;
    }
}

function cekPrima2($a, $b){
    
        $jumlah2 = 0;
        for($i = $a; $i <= $b; $i++){
            if(is_prime($i)){
                echo $i.', ';
                $jumlah2++;
            }
        
        
    }
    echo '<br>jumlah bilangan prima ' .$jumlah2.'<br>';
}
cekPrima2(0, 100);
?>
</body>
</html>