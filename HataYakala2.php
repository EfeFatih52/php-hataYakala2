<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
 <?php
 function tablo($satir, $sutun) {    
   try{        
      if((is_numeric($satir) && is_numeric($sutun))) //değerler sayı ise
        {
           echo "<table style='border: solid 5px blue'>";
           for($i=0; $i<$satir; $i++) {
              echo "<tr>";
              for($j=0; $j<$sutun; $j++){
                echo "<td style='border: solid 5px black'>".$i.",".$j."</td>";
                 }
                echo "</tr>";
               }
           echo "</table>";
        }
        else{
        throw new Exception("<i style='color:White; background-color:gray'>
          Lütfen satır ve sütun bilgisi için sadece sayı giriniz.</i>"); 
        }                           
    }catch(Exception $e) {
 echo  $e->getMessage(); 
      }
 }
 tablo(2,6);   
tablo("dort","beş");
 ?>
</body>
</html>