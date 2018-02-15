<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 15/02/18
 * Time: 09:11
 */

/*include '../classes/domain/Measure.php';*/

include 'autoload.inc.php';

use domain\Measure;

use PHPUnit\Framework\TestCase;

class MeasureTest extends TestCase
{
    public function testMeasure() {
        
        $measure = new Measure("18", "19");
        
        $this->assertEquals("18", $measure->temperature);
        $this->assertEquals("19", $measure->humidite);
        
    }
}
