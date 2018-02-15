<?php
/**
 * Created by PhpStorm.
 * User: mathieu
 * Date: 15/02/18
 * Time: 09:42
 */

include 'autoload.inc.php';


use dao\MeasureDao;
use domain\Measure;

use PHPUnit\Framework\TestCase;



class MeasureDaoTest extends TestCase
{

    private $measureDao;

    protected function setUp() {
        parent::setUp();

        $config = include '../includes/config.inc.php';

        $this->measureDao = new MeasureDao($config);
    }

    protected function tearDown() {

        /*$this->measureDao->close();*/

        $this->measureDao = null;

        parent::tearDown();
    }

    public function testCreateMeasure()
    {
        $measure = new Measure(17, 18);

        $id = $this->measureDao->createMeasure($measure);

        $newMeasure = $this->measureDao->readMeasureById($id);

        $this->assertEquals("18", $newMeasure->temperature);
        $this->assertEquals("19", $newMeasure->humidite);
    }

    /*public function testReadMeasureById()
    {

        $measure = $this->measureDao->readMeasureById(12);

        $this->assertEquals("96", $measure->temperature);
        $this->assertEquals("99", $measure->humidite);
    }*/

    /*public function testUpdateMeasure()
    {
        $measure = new Measure(22, 22);

        $id = $this->measureDao->createMeasure($measure);

        $newMeasure = $this->measureDao->readMeasureById($id);

        $newMeasure->temperature = 21;
        $newMeasure->humidite = 21;

        $this->measureDao->updateMeasure($id, $newMeasure);

        $updatedUser = $this->measureDao->readMeasureById($id);

        $this->assertEquals(21, $updatedUser->temperature);
        $this->assertEquals(21, $updatedUser->humidite);


    }*/

    /*public function testDeleteMeasureByDateTime()
    {

    }*/
}
