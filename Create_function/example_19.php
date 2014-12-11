<?php
$list1 = "4444, 5555, 6666";
$list2 = "4444, 5555, 7777";

// combine both lists with unique values only
$list3 = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));

echo $list3;
?>