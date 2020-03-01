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
    
    if ($this->p1_score == 0 && $this->p2_score == 0) {
      return 'Love-All';
    }

    if ($this->p1_score == 0 && $this->p2_score == 1) {
      return 'Love-Fifteen';
    }

  }

}