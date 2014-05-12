<?php

// game picks a random number between 1 and 100.
// - prompts user to guess the number
// - if user's guess is less than the number, it outputs "HIGHER"
// - if user's guess is more than the number, it outputs "LOWER"
// - if a user guesses the number, the game should declare "GOOD GUESS!"

$number = mt_rand(1,100);
$number_of_guesses = 1;

fwrite(STDOUT, "Guess a number!\n");

	

do {
	$guess = fgets(STDIN);
	if ($number > $guess) {
		echo "Higher!\n";
		$number_of_guesses++;
		fwrite(STDOUT, "Guess again: ");
	} else if ($number < $guess) {
		echo "Lower!\n";
		$number_of_guesses++;
		fwrite(STDOUT, "Guess again ");
	}
} while ($number != $guess);
	echo "Good Guess!  My number was {$number}! It took {$number_of_guesses} guesses for you to guess my number.\n";


exit(0);