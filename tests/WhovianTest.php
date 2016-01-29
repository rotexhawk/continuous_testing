<?php

/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 1/29/16
 * Time: 1:07 PM
 */
require dirname(__DIR__) . '/Whovian.php';
class WhovianTest extends PHPUnit_Framework_TestCase
{
    public function testSetsDoctorWithConstructor(){
    $whovian = new Whovian("Yasin Yaqoobi");
    $this->assertAttributeEquals("Yasin Yaqoobi", 'favoriteDoctor', $whovian);
    }

    public function testSaysDoctorName(){
        $whovian = new Whovian("Yasin Yaqoobi");
        $this->assertEquals('The best doctor is Yasin Yaqoobi',$whovian->say());
    }

    public function testRespondToInAgreement(){
        $whovian = new Whovian("Yasin Yaqoobi");
        $opinon = 'Yasin Yaqoobi is the best doctor, period';
        $this->assertEquals('I agree!', $whovian->respondTo($opinon));
    }

    /**
     * @expectedException Exception
     */
    public function testRespondToInDisagreement(){
        $whovian = new Whovian('Yasin Yaqoobi');
        $opinion = 'No way. Math Smith was awesome';
        $whovian->respondTo($opinion);
    }

}