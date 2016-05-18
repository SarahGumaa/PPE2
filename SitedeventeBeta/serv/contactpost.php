<div>
<p>ADFGHJKL</p>
<?php

$message=$_POST['userMsg'];
$headers='From: sarahgumaa55@gmail.com';
$result = mail('sarahgumaa55@gmail.com', 'Formulaire de contact', $message, $headers );
if($result != true) {
    echo 'non';
}
    else {'oui';
         }
?>
</div>