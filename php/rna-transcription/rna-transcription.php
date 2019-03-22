<?php

function transcribe(string $nucleotide) : string {
		switch ($nucleotide) {
			case 'G':
				return 'C';
			case 'C':
				return 'G';
			case 'T':
				return 'A';
			case 'A':
				return 'U';
			default:
				return $nucleotide;
		}
}

function toRna(string $dna) : string {
	$rna  = array_map("transcribe", str_split($dna));
	 return implode('', $rna);
}