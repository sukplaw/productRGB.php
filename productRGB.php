<!DOCTYPE html>
<html>
<body>
<?php
    $products = 
    array(  array("001","พิซซ่าญี่ปุ่นซีฟู้ด","399฿","pizza/p1.png"),
            array("002","สไปซี่ ซุปเปอร์ซีฟู้ด","419฿","p2.png"),
            array("003","ซีฟู้ดเดอลุกซ์","419฿","p3.jpg"),
            array("004","ต้มยำกุ้ง","419฿","p4.jpg"),
            array("005","แฮมและปูอัด","319฿","p5.jpg"),
            array("006","ดับเบิ้ลชีสพิซซ่า","299฿","p6.jpg"),
            array("007","ดับเบิ้ลเป๊ปเปอโรนี","299฿","p7.jpg"),
            array("008","ปีกไก่บาบีคิว","149฿","p8.png"),
            array("009","ขนมปังกระเทียม","89฿","p9.png"),
            array("010","ชิกเก้น นักเก็ตส์","79฿","p10.png"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>img</th>
    </tr>
    ';

    for($i=0;$i<10;$i++){
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        echo "<tr>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][0]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][1]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][2]."</td>
        <td ><img src=".$products[$i][3]." width='230' height='298.5' /></td>
        </tr>";  
    }
   
    echo '</table>';
?>

</body>
</html>