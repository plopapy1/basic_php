<?php

namespace App;




require_once(__DIR__.'/../traits/notifiable.php');

use \Traits\Notifiable;

class Email
{
   use Notifiable;
}

?>