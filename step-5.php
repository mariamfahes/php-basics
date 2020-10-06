
<?php
 $course_name="Rust, the language of no bugs";
 $enrolled_students =20;
 $price=30;
 $on_discount= true; 
 if($on_discount){
    $on_discount="yes";
 } else {
 $on_discount="no";
 }
 echo " Course title: " . $course_name ."<br>" . "Enrolled Students: " . $enrolled_students ."<br>" . "Course price: " . $price . "$ USD <br>" . " Course on discount: " . $on_discount;

 

 
?>