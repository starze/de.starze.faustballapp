<?php
//jsonp hack:
echo $_REQUEST['callback'] . "(";
$clubs = file('clubs.json');

foreach($clubs AS $club)
{
    echo $club;
}

echo ")";
?>