<?php

class Bob{

	private function isQuestion($sentence){
		return preg_match('/^.+\?$/', trim($sentence));
	}

	private function isYelling($sentence){
		return preg_match('/^[^a-zA-Z]*([A-Z]\s*[^a-zA-Z]*)+[^a-zA-Z]*!?$/', $sentence);
	}

	private function isYellingWithQuestion($sentence){
		return preg_match('/^[A-Z\s*]+\?$/', $sentence);
	}

	private function isNotTalking($sentence){
		return strlen(trim($sentence)) === 0;
	}
	public function respondTo($text){
		
		if($this->isNotTalking($text)){
			return 'Fine. Be that way!';
		}

		if($this->isYellingWithQuestion($text)){
			return 'Calm down, I know what I\'m doing!';
		}

		if($this->isYelling($text)){
			return "Whoa, chill out!";
		}

		if($this->isQuestion($text)){
			return 'Sure.';
		}

		return 'Whatever.';
	}
}