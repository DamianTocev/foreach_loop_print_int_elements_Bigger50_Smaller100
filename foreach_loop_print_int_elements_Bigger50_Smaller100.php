<?php
$elements = ['Car',50, 100, 55, 16, 150, 'House', 'Table', 78, 35, '70'];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}
foreach($elements as $item) {

    if ((is_int($item))&&(50<$item)&&($item<100)){

        print "<p>".$item."</p>";

    }
}
?>