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

  /**
   * @test
   */
  public function getGameScore_Give0vs1_ReturnLoveFifteen()
  {
    //Arrange
    $p1_score = 0;
    $p2_score = 1;
    $this->game->set_scores($p1_score, $p2_score);

    $expected = 'Love-Fifteen';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give1vs2_ReturnFifteenThirty()
  {
    //Arrange
    $p1_score = 1;
    $p2_score = 2;
    $this->game->set_scores($p1_score, $p2_score);

    $expected = 'Fifteen-Thirty';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give3vs2_ReturnFortyThirty()
  {
    //Arrange
    $p1_score = 3;
    $p2_score = 2;
    $this->game->set_scores($p1_score, $p2_score);

    $expected = 'Forty-Thirty';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give1vs1_ReturnFifteenAll()
  {
    //Arrange
    $p1_score = 1;
    $p2_score = 1;
    $this->game->set_scores($p1_score, $p2_score);

    $expected = 'Fifteen-All';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give2vs2_ReturnThirtyAll()
  {
    //Arrange
    $p1_score = 2;
    $p2_score = 2;
    $this->game->set_scores($p1_score, $p2_score);

    $expected = 'Thirty-All';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
}
