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
    $this->game->setScores($p1_score, $p1_score);

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
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Love-Fifteen';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
  
  /**
   * @test
   */
  public function getGameScore_Give2vs1_ReturnThirtyFifteen()
  {
    //Arrange
    $p1_score = 2;
    $p2_score = 1;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Thirty-Fifteen';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give2vs3_ReturnThirtyForty()
  {
    //Arrange
    $p1_score = 2;
    $p2_score = 3;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Thirty-Forty';
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
    $this->game->setScores($p1_score, $p2_score);

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
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Thirty-All';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give3vs3_ReturnFortyAll()
  {
    //Arrange
    $p1_score = 3;
    $p2_score = 3;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Forty-All';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give4vs4_ReturnDeuce()
  {
    //Arrange
    $p1_score = 4;
    $p2_score = 4;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Deuce';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give5vs5_ReturnDeuce()
  {
    //Arrange
    $p1_score = 5;
    $p2_score = 5;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Deuce';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

    /**
   * @test
   */
  public function getGameScore_Give4vs3_ReturnAdvPlayer1()
  {
    //Arrange
    $p1_score = 4;
    $p2_score = 3;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Advantage player1';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give5vs4_ReturnAdvPlayer1()
  {
    //Arrange
    $p1_score = 5;
    $p2_score = 4;
    $this->game->setScores($p1_score, $p2_score);

    $expected = 'Advantage player1';
    //Act
    $actual = $this->game->getGameScore();
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

}

