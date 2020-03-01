<?php
namespace App;

class TennisGame
{
  private $p1_score = 0;
  private $p2_score = 0;

  public function setScores($p1_score, $p2_score)
  {
    $this->p1_score = $p1_score;
    $this->p2_score = $p2_score;
  }

  public function getGameScore()
  {

    if ($this->p1_score == $this->p2_score && $this->p1_score >= 4) {
      return 'Deuce';
    }

    if ($this->p1_score == $this->p2_score) {
      return $this->getTextFromScore($this->p1_score) . '-All';
    }

    if ($this->p1_score >=4 || $this->p2_score>=4) {
      $win = $this->p1_score > $this->p2_score ? 'player1' : 'player2';
      if (abs($this->p1_score - $this->p2_score) >= 2) {
        return 'Win for ' . $win;
      }
      
      return 'Advantage ' . $win;
      
    }

    return $this->getTextFromScore($this->p1_score) . '-' . $this->getTextFromScore($this->p2_score);
    
  }

  private function getTextFromScore($score)
  {

    $text = ['Love', 'Fifteen', 'Thirty', 'Forty'];
    return $text[$score];
    
  }

}