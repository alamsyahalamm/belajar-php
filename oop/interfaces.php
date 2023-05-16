<?php

class Notification
{
    const webdev = "belajar webdelopment.";
}

interface study
{
    public function personalStudy();
}
class school implements study
{
    public function personalStudy()
    {
        echo Notification :: webdev;
    }
}
$school = new school ();
$school->personalStudy();