<?php
$country = $_POST['country'] ?? '';

$cities = [];

if($country === "Nepal"){
    $cities = ["Kathmandu","Pokhara","Biratnagar","Lalitpur"];
} elseif($country === "India"){
    $cities = ["Delhi","Mumbai","Bangalore","Chennai"];
} elseif($country === "USA"){
    $cities = ["New York","Los Angeles","Chicago","Houston"];
}

$options = "<option value=''>-- Select City --</option>";

foreach($cities as $city){
    $options .= "<option value='$city'>$city</option>";
}

echo $options;
?>
