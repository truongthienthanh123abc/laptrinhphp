<?php

//function xinchao($name="bạn gì ơi", $go="hỏi làm gì"){
    //echo "xin chao $name <hr>";
    //echo  "mày đi đâu đấy $go <hr>";
 //}

//xinchao("thiên thành");
//xinchao("khang việt");
//xinchao();
//xinchao(" tuệ tâm");
//xinchao("long","tao đi học");

//$i= 1;
//while($i<=10){
    //echo "xin chào các chế";
   // echo "<hr>";

   // $i++;

//}
//$i=1;
//do
//{ 
   // echo "xin chào em";
   // echo "<hr>";
   // $i++;
//} 
//while($i <= 10);
//for ($i=0; $i<10; $i++) {
   // echo  "$i -> xin chào các bạn đang học";
   // echo " <hr>";
//}

$vonglap=array("loại rượu"=>"rượu nho", "rượu táo mèo","rượu ba kích");
foreach($vonglap as $key => $value){
    echo $key."->". $value;
    echo "<hr>";

}


?>