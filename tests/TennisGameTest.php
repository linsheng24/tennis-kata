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
    $p1_score = 0;
    $p2_score = 0;
    
    $expected = 'Love-All';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give1vs0_ReturnFifteenLove()
  {
    //Arrange
    $p1_score = 1;
    $p2_score = 0;
    
    $expected = 'Fifteen-Love';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give1vs2_ReturnFifteenTirty()
  {
    //Arrange
    $p1_score = 1;
    $p2_score = 2;
    
    $expected = 'Fifteen-Thirty';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
  
}
