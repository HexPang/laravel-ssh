<?php
use hexpang\Client\SSH\SSHClient;

class SSHTest extends \PHPUnit_Framework_TestCase {
  public function testInstance(){
    $service = new SSHClient(0,0,0,0);
    $this->assertInstanceOf("\hexpang\Client\SSH\SSHClient",$service);
  }
}

?>
