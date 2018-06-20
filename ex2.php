<!-- // Q: Missing Drone! => find the ID only appear one time. -->

<?php

    function findUniqueDeliveryId($deliveryIds) {
        $uId = 0;
        foreach ($deliveryIds as $Id) {
            $uId ^= $Id;
        }
        return $uId;
    }
    $deliveryIds = [1,2,3,4,5,3,4,2,1];
    echo findUniqueDeliveryId($deliveryIds);
?>