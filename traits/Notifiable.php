<?php

namespace Traits;

trait Notifiable
{
    public function notify($message)
    {
        ECHO $message . '<br>';
    }
}


?>