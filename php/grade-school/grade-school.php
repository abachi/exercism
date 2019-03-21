<?php

class School{

	private $roster = [];

	public function add($name, $grade){
		return $this->roster[$grade][] = $name; 
	}

	public function grade($g){
		return $this->roster[$g];
	}

	public function studentsByGradeAlphabetical(){
		$students = [];
		asort($this->roster);
		foreach ($this->roster as $grade => $names) {
			sort($names);
			$students[$grade] = $names;
		}
		return $students;
	}

}