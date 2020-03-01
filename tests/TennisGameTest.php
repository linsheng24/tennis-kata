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

  /**
   * @test
   */
  public function getGameScore_Give3vs2_ReturnFortyTirty()
  {
    //Arrange
    $p1_score = 3;
    $p2_score = 2;
    
    $expected = 'Forty-Thirty';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
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
    
    $expected = 'Fifteen-All';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
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
    
    $expected = 'Thirty-All';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
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
    
    $expected = 'Forty-All';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
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
    
    $expected = 'Deuce';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
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
    
    $expected = 'Deuce';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give3vs4_ReturnPlay2Adv()
  {
    //Arrange
    $p1_score = 3;
    $p2_score = 4;
    
    $expected = 'Advantage player2';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

    /**
   * @test
   */
  public function getGameScore_Give4vs5_ReturnPlay2Adv()
  {
    //Arrange
    $p1_score = 4;
    $p2_score = 5;
    
    $expected = 'Advantage player2';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give4vs3_ReturnPlay1Adv()
  {
    //Arrange
    $p1_score = 4;
    $p2_score = 3;

    $expected = 'Advantage player1';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

    /**
   * @test
   */
  public function getGameScore_Give5vs4_ReturnPlay1Adv()
  {
    //Arrange
    $p1_score = 5;
    $p2_score = 4;

    $expected = 'Advantage player1';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give4vs2_ReruenWinForPlayer1()
  {
    //Arrange
    $p1_score = 4;
    $p2_score = 2;
    
    $expected = 'Win for player1';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }

  /**
   * @test
   */
  public function getGameScore_Give5vs2_ReruenWinForPlayer1()
  {
    //Arrange
    $p1_score = 5;
    $p2_score = 2;
    
    $expected = 'Win for player1';
    //Act
    $actual = $this->game->getGameScore($p1_score, $p2_score);
    
    //Assert
    $this->assertEquals($expected, $actual);
  }
}
