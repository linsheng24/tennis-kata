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
    if ($this->p1_score == 4 && $this->p2_score == 4) {
      return 'Deuce';
    }

    if ($this->p1_score == 5 && $this->p2_score == 5) {
      return 'Deuce';
    }

    if ($this->p1_score == $this->p2_score) {
      return $this->getTextFromScore($this->p1_score) . '-All';
    }

    return $this->getTextFromScore($this->p1_score) . '-' . $this->getTextFromScore($this->p2_score);
    
  }

  private function getTextFromScore($score)
  {
    switch ($score) {
      case 0:
        $result = 'Love';
        break;
      case 1:
        $result = 'Fifteen';
        break;
      case 2:
        $result = 'Thirty';
        break;
      case 3:
        $result = 'Forty';
        break;
    }
    return $result;
  }

}