<?php
namespace Test;

use App\TennisGame;
use PHPUnit\Framework\TestCase;

class TennisGameTest extends TestCase
{

  protected function setUp():void
  {
    parent::setUp();
    $this->game = new TennisGame();
  }

  protected function tearDown():void
  {
    parent::tearDown();
    $this->game = null;
  }

  /**
   * @test
   */
  public function getGameScore_Give0vs0_ReturnLoveAll()
  {
    //Arrange
    $expected = 'Love-All';
    
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

 
}
