<?php
// funkcje date
echo 'rok - miesiąc - dzień: ', date('Y-m-d'), '<br>';
echo date('d-m-Y'), '<br>'; //16-11-2020
echo date('j M Y'), '<br>'; //16 Nov 2020
echo date('G:i:s'), '<br>'; //10:51:26
echo date('h:i:s'), '<br>'; //10:51:26
echo date('h:i:sa'), '<br>'; //10:52:02am
echo date('d-m-Y h:i:s'), '<br>'; //16-11-2020 10:52:33
echo date('w'), '<br>'; //1-poniedziałek 0-niedziela
$date = getdate();
$months = ['styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień'];
$daysofweek = ['niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota'];
echo $date['mday']." ".$months[$date['mon']-1]." ".$date['year'].", ".date('h:i:s')." | ".$daysofweek[$date['wday']], "<br>";
// funkcja getdate
$date = getdate();
print_r($date);
$yearDay = $date['yday'];
echo "Dzień roku: $yearDay";

// wyświetl datę w formacie: 16 listopada 2020, 10:59:10 | poniedziałek

 ?>
