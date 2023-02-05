<?php
$marks=10;

if($marks>=60){
echo(" the grade will be First Division");
}elseif($marks <=59  &&  $marks>=45){
echo(" the grade will be Second Division");
}elseif($marks <=44  &&  $marks >=33){
echo(" the grade will be Third Division");
}else{
echo(" the student will  Fail");
}