<?php
// Parsing this spreadsheet: https://spreadsheets.google.com/pub?key=0Ah0xU81penP1dFNLWk5YMW41dkcwa1JNQXk3YUJoOXc&hl=en&output=html
$url = 'https://spreadsheets.google.com/feeds/list/1CLtpAMqbLEajRPJZl33DWx4n-Lp0-_RQe0Qt_Fj_J9g/od6/public/values?alt=json';
$file= file_get_contents($url);
$json = json_decode($file);
$rows = $json->{'feed'}->{'entry'};
$count = count($rows);
$folio_id[] = "";
$prescription[] = "";
$progress_report[] = "";
$comment[] ="";
$nextvisit[] ="";
$i = 0;
foreach($rows as $row) {
  //echo '<p>';
  $folio_id[$i] = $row->{'gsx$folioid'}->{'$t'};
  $prescription[$i] = $row->{'gsx$prescription'}->{'$t'};
  $progress_report[$i] = $row->{'gsx$progressreport'}->{'$t'};
  $comment[$i] = $row->{'gsx$comments'}->{'$t'};
  $nextvisit[$i] = $row->{'gsx$nextvisit'}->{'$t'};
  echo  $folio_id[$i].'<br> '.$prescription[$i].' <br>'.$comment[$i].' <br>'.$nextvisit[$i].'<br>';
  //echo '</p>';
  $i++;
}