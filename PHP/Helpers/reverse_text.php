<?php

// Fungsi Membalik Text/String
// Menggunakan PHP
function reverseText($text)
{
  $result = "";
  for($i=(strlen($text)-1);$i>=0;$i--)
  {
    $result .= substr($text, $i, 1);
  }
  return $result;
}

$text = "wwww.linkedin.com";

echo reverseText($text);

// Input: wwww.linkedin.com
// Output: moc.nideknil.wwww