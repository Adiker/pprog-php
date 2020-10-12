
<?php
  $text = <<<T
    zsk - Zespół
    Szkół
    Komunikacji<br>
  T;

  echo $text;
  echo nl2br($text);

  $name = "JanUSz";

  echo strtolower($name);
  echo '<br>';
  echo strtoupper($name);

  $name = "jaNUSz koWalskI";
  echo '<br>';
  echo ucfirst($name);

  echo '<br>';
  echo ucwords($name);

  $name = <<<T
  janusz
  T;
  echo '<br>';
  echo ucfirst($name);

  $lorem = <<<LOREM
  Lorem ipsum dolor sit amet, consectetur
  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident,
  sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;
echo '<br>';
echo $lorem;
echo wordwrap($lorem, 40, '<br>');

$dragon = <<< CASTLE
I thought love was Only true in fairy tales Meant for someone else But not for me Love was out to get me That's the way it seems Disappointment haunted All my dreams And then I saw her face Now I'm a believer Not a trace Of doubt in my mind I'm in love I'm a believer I couldn't leave her If I tried I thought love was More or less a given thing But the more I gave the less I got, oh yeah What's the use in trying All you get is pain When I wanted sunshine I got rain And then I saw her face Now I'm a believer Not a trace Of doubt in my mind I'm in love I'm a believer I couldn't leave her If I tried What's the use in trying All you get is pain When I wanted sunshine I got rain And then I saw her face Now I'm a believer Not a trace Of doubt in my mind I'm in love I'm a believer I couldn't leave her If I tried Then I saw her face Now I'm a believer Not a trace Of doubt in my mind Now I'm a believer Yeah, yeah, yeah Yeah, yeah, yeah I'm a believer I'm a believer I'm a believer
CASTLE;

echo '<br>';
echo $dragon;
echo wordwrap($dragon, 40, '<hr>');

ob_clean();

//usuwanie białyh znaków
$name = "Łukasz";
$name1 = "  Łukasz ";

echo strlen($name);
echo mb_strlen($name);

echo mb_strlen($name1);
echo mb_strlen(ltrim($name1));
echo mb_strlen(rtrim($name1));
echo mb_strlen(trim($name1));

//przeszukiwanie ciagów znaków
$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = strstr($address, 'tel');
echo $search, '<br>';

$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = stristr($address, 'Tel');
echo $search, '<br>';

//substr
$name = "Janusz";
echo substr($name, 3); //usz
echo substr($name, 3, 2); //us

echo substr(strstr('zsk@gmail.com','@'), 1); //gmail.com

//przetwarzanie ciagów znaków
$replace = str_replace("%imię%", "Janusz", "Masz na imię: %imię%");

$login = "bączek";
$censure = array('ą','ę','ś','ć','ż','ź','ć','ł','ń');
$replace = array('a','e','s','c','z','z','c','l','n');

$correctLogin = str_replace($censure, $replace, $login);

echo <<<LOGIN
  Login: $login<br>
  Login po zamianie: $correctLogin<br>
LOGIN;
 ?>
