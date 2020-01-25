<?php
echo '<h4> Status webservers </h4>';
echo str_replace("\n","<BR>",file_get_contents('webservers.txt'));
echo '-----<BR>';
echo '<h4> Status Data server </h4>';
echo str_replace("\n","<BR>",file_get_contents('dataserver.txt'));
echo '-----<BR>';
echo '<h4> Status Backup server </h4>';
echo str_replace("\n","<BR>",file_get_contents('backupserver.txt'));
echo '-----<BR>';
echo '<h4> Status SQL server </h4>';
echo str_replace("\n","<BR>",file_get_contents('sqlserver.txt'));
echo '-----<BR>';
echo '<p> Status wordt elke 2 minuten geupdated </p>';
