<?php
function name(){
    $my_name="AKANDINDA BENSON";
    return $my_name;
}
function my_age($c_year,$birth_year){
    $dob=01/05/2000;
    $age=$c_year-$birth_year;
    return $age;
}
function my_address(){
    $address="Mbarara-Kakoba";
    return $address;
}

print("welcome ".name()." to ".my_address());
print("<br> You are ".my_age(2024,2000)." years old");



?>