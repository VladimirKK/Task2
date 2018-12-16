






 <?php
// $array = ["Ursus arctos", "Sciurus", "Dipodidae", "Machairodontinae", "Panthera tigris", "Leporidae", "Alces alces", "Talpidae", "Cervidae", "Castor fiber", "Canis lupus"];

//$d = array_fill_keys($array, 'evrazia');
// print_r($d);
?>


<?php

$array = array(
      'evrazya' => array('Ursus arctos', 'Sciurus', 'Dipodidae', 'Machairodontinae'),
      'africa' => ['Hippopotamus amphibius', 'Giraffa camelopardalis', 'Panthera leo', 'Hippotigris', 'Canis aureus'],
    );
          print_r($array);
      echo '<br>';
    echo count($array, COUNT_RECURSIVE);

$arr1 = ['Ursus arctos', 'Dipodidae opog'];
           str_shuffle(implode(",", $arr1));
    $shuffled = str_shuffle($comma_separated);
    echo ($chuffled);
?>
