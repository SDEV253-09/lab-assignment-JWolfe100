<?php
    $domainInfo = "Text: <b>domain name is: </b> Domain: <b>sdev253.net</b>";
    preg_match_all ("/<b>(.*)<\/b>/U", $domainInfo, $pat_array);
    print $pat_array[0][0]."".$pat_array[0][1]."\n";
?>