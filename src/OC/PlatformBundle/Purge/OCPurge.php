<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 12/05/2018
 * Time: 21:14
 */

namespace OC\PlatformBundle\Purge;


use DateTime;

class OCPurge
{
    public function dateToPurge($daysParams)
    {
        $dayAtMidnight = new DateTime(date('Y-m-d 00:00:01', strtotime("+" . -$daysParams . " days")));
        return $dayAtMidnight;
    }
}