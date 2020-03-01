<?php
namespace App;

class TennisGame
{

  public function getGameScore($p1_score, $p2_score)
  {
 
    if ($p1_score == $p2_score) {

      if ($p1_score >=4) {
        return 'Deuce';
      }

      return $this->getTextFromScore($p1_score) . '-All';
    }

    if ($p1_score >= 4 || $p2_score >= 4) {
      $tmp = abs($p1_score - $p2_score);
      $adv = $p1_score > $p2_score ? 'player1' : 'player2';
      if ($tmp == 1) {
        return 'Advantage ' . $adv;
      }
      if ($tmp >= 2) {
        return 'Win for ' . $adv;
      }
    }

    return $this->getTextFromScore($p1_score) . '-' . $this->getTextFromScore($p2_score);

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