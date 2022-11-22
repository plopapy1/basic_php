<?php

/**
 * to send notification to peoples devices
 */
trait Notifiable
{
    public function notify($message)
    {
           echo $message;
    }
}

class SMS
{
    use Notifiable;
}

class Email
{
    use Notifiable;
}

class pushNotification
{
    use Notifiable;
}

$sms = new SMS();

$sms -> notify("we are doing a promo dial *8164828# to stand a chance to win a car.");
echo "<br>";


$email = new Email();

$email -> notify("we are doing a promo dial .");
echo "<br>";


$pushNotification = new pushNotification();

$pushNotification -> notify("we  chance to win a car.");
echo "<br>";

?>