<?php
echo '<h4> Status webserver 1 </h4>';
echo str_replace("\n","<BR>",file_get_contents('webserver1.txt'));
echo '-----<BR>';
echo '<h4> Status webserver 2 </h4>';
echo str_replace("\n","<BR>",file_get_contents('webserver2.txt'));
echo '-----<BR>';
echo '<h4> Status Data server </h4>';
echo str_replace("\n","<BR>",file_get_contents('dataserver.txt'));
echo '-----<BR>';
echo '<h4> Status SQL server </h4>';
echo str_replace("\n","<BR>",file_get_contents('sqlserver.txt'));
echo '<p> Contenct wordt elke 2 minuten geupdated </p>';
