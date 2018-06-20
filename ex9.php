<?php
    function getProduct($inputArr) {
        if (count($inputArr) < 2) {
            echo "Getting product requires at least 2 numbers";
        }
        $finalProduct = [];
        $product = 1;
        for ($i=0; $i < count($inputArr); $i++) { 
            $finalProduct[$i] = $product;
            $product *= $inputArr[$i];
        }
        $product = 1;
        for ($j=count($inputArr) - 1; $j >= 0; $j--) { 
            $finalProduct[$j] *= $product;
            $product *= $inputArr[$j];
        }
        return $finalProduct;
    }
    $inputArr = [2,4,10,5,7,12];
    foreach ($inputArr as $value) {
        echo $value . "-";
    }
    echo "<br>";
    $result = getProduct($inputArr);
    foreach ($result as $value) {
        echo $value . "-";
    }
?>