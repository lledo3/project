<!DOCTYPE HTML>
<html lang = "en">
<head>
  
  <title>Project 1</title>
  <meta charset = "UTF-8" />
</head>
<body>
<?php
    include 'excel_reader2.php';
    $Excel = new Spreadsheet_Excel_Reader();
?>
    <h3>Sheet 1:</h3><br/>
    <table border="1">
        <?php
        $Excel->read('Report_1.xls');
         $x=1;
        while($x<=$Excel->sheets[0]['numRows']) { // reading row by row 
          echo "\t<tr>\n";
          $y=1;
          while($y<=$Excel->sheets[0]['numCols']) {// reading column by column 
            $cell = isset($Excel->sheets[0]['cells'][$x][$y]) ? $Excel->sheets[0]['cells'][$x][$y] : '';
            echo "\t\t<td>$cell</td>\n";  // get each cells values
            $y++;
          }  
          echo "\t</tr>\n";
          $x++;
        }
        ?>
    </table>
  
</body>
</html>




