<?php

class Notification
{
    const OOP ="OOP is so funny to learn, but so hard";
}

trait Learn
{
    public function LearnOOP()
    {
        echo Notification :: OOP;
    }
}
class LearnToday
{
    use Learn;
}

$Learn = new LearnToday();
$Learn->LearnOOP();