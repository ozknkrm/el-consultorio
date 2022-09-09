<?php

namespace Tests;


use App\Models\Coders;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   /* public function test_example(){
        $this->assertEquals(1, 1);
    }

    public function test_IfCreateNewCodersCheckIfGetIssueAndCoderWorkCorrectly(){
    
        $newCoder = new Coders(null, "CoderTest", "Comment for Issue");

        $resultCoderName = $newCoder->getCoder();
        $resultCoderIssue = $newCoder->getIssue();

        $this->assertEquals("CoderTest", $resultCoderName);
        $this->assertEquals("Comment for Issue", $resultCoderIssue);

        $newCoder2 = new Coders(null, "Carlos", "Java");

        $resultCoderName2 = $newCoder2->getCoder();
        $resultCoderIssue2 = $newCoder2->getIssue();

        $this->assertEquals("Carlos", $resultCoderName2);
        $this->assertEquals("Java", $resultCoderIssue2);
    }*/
    public function test_IfGetCoderWorkCorrectly(){
        $newCoder = new Coders(null, "kerim", "c++");

        $resultCoderName = $newCoder->getCoder();
        $resultCoderIssue = $newCoder->getIssue();

        $this->assertEquals("kerim", $resultCoderName);
        $this->assertEquals("c++", $resultCoderIssue);
    }
    public function test_IfGetIssueWorksCorrectly(){
        $newCoder = new Coders(null, "juan", "JS");

        $resultCoderIssue = $newCoder->getIssue();
        $resultCoderName = $newCoder->getCoder();

        $this->assertEquals("juan", $resultCoderName);
        $this->assertEquals("JS", $resultCoderIssue);
    }

    
    
}