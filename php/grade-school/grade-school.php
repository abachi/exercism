<?php

class School{

	private $roster = [];

	public function add($name, $grade) : void {
		$this->roster[$grade][] = $name; 
	}

	public function grade($grade) : array {
		return ($this->roster[$grade]) ? $this->roster[$grade] : [];
	}

	public function studentsByGradeAlphabetical() : array {
		$students = [];
		asort($this->roster);
		foreach ($this->roster as $grade => $names) {
			sort($names);
			$students[$grade] = $names;
		}
		return $students;
	}

}