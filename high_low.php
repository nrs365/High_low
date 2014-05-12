<?php

// game picks a random number between 1 and 100.
// - prompts user to guess the number
// - if user's guess is less than the number, it outputs "HIGHER"
// - if user's guess is more than the number, it outputs "LOWER"
// - if a user guesses the number, the game should declare "GOOD GUESS!"

$number = mt_rand(1,100);
$number_of_guesses = 0;

fwrite(STDOUT, "Guess a number!\n");

do {
	$guess = fgets(STDIN);
	$number_of_guesses++;
	
	if ($number > $guess) {
		fwrite(STDOUT, "Higher! Guess again!\n");
	} else if ($number < $guess) {
		fwrite(STDOUT, "Lower! Guess again!\n");
	}
} while ($number != $guess);
	fwrite(STDOUT, "Good Guess!  My number was {$number}! It took {$number_of_guesses} guesses for you to guess my number.\n");


exit(0);