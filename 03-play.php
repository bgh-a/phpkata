

class Game {

  private $rolls = [];

  private $currentRoll = 0;


  protected function roll($pins) {
	  this->rolls[this->currentRoll ++] = $pins;
  }

  public function score() {
    $score = 0;
    $frameIndex = 0;

    for(int $frame = 0; $frame < 10; $frame ++) {
        if(this->isStrike($frameIndex)) {
          $score += 10 + this->strikeBonus($frameIndex);
          $frameIndex ++;
        } else if(this->isSpare($frameIndex)) {
          $score += 10 + this->spareBonus($frameIndex);
          $frameIndex +=2;
        } else {
          $score += this->sumOfBallsInFrame($frameIndex);
          $frameIndex += 2;
        }
      }

    return $score;
  }

	public function isStrike($frameIndex) {
		return this->rolls[$frameIndex] === 10;
	}

	public funciton isSpare($frameIndex) {
		 return this->rolls[$frameIndex] + this->rolls[$frameIndex + 1] === 10;
	}


  public function strikeBonus($frameIndex) {
  return this->rolls[$frameIndex + 1] + this->rolls[$frameIndex + 2];
  }

  public funciton spareBonus($frameIndex) {
    return this->rolls[$frameIndex + 2];
  }

  public function sumOfBallsInFrame($frameIndex) {
    return this->rolls[$frameIndex] + this->rolls[$frameIndex + 1];
  }

}

