<?php
$cityid = $_POST["cityid"];
$city_innerjoin = "SELECT school.si_no,school.school_id,school.school_name,school.city_id,school.city_name,school.state,school.country,school.action,school.action1 FROM `city` inner join school on city.city_id = school.city_id where school.cityid = "1";";
$result_innerjoin = $conn->query($city_innerjoin);

?>
 // function myFilter(){
            //         document.getElementById("filter_info").classList.toggle("show");
            //   