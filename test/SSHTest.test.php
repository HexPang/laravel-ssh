<?php
use hexpang\Services\SSHService;

class SSHTest extends \PHPUnit_Framework_TestCase {
  public function testInstance(){
    $service = new SSHService(0,0,0,0);
    $this->assertInstanceOf("\hexpang\Services\SSHService",$service);
  }
}

?>
