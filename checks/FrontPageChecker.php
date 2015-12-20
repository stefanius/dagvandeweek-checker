<?php

class FrontPageChecker extends Stefanius\WebChecker\Checker\WebCheck
{
    public function checkFrontPage()
    {
        $this->visit('http://dagvandeweek.nl')
            ->see('Elke dag van de week')
            ->seeLink('Home')
            ->seeLink('DagVanDeWeek.nl')
            ->seeLink('Historisch Jaaroverzicht')
            ->seeLink('Kalender Overzicht')
            ->seeLink('Nieuws');
    }
}