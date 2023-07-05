<?php
   $stringRawData=file_get_contents('./database/data.json');
   header('Content-Type: applications/json');
   echo json_encode ($stringRawData);



?>