<?php

// game picks a random number between 1 and 100.
// - prompts user to guess the number
// - if user's guess is less than the number, it outputs "HIGHER"
// - if user's guess is more than the number, it outputs "LOWER"
// - if a user guesses the number, the game should declare "GOOD GUESS!"

$number = rand(1,100);



do {
	fwrite(STDOUT, "Guess a number!\n");

	$guess = fgets(STDIN);

	if ($number > $guess) {
		echo "Higher!\n";
		//fwrite(STDOUT, "Guess again: ");
	} else if ($number < $guess) {
		echo "Lower!\n";
		//fwrite(STDOUT, "Guess again ");
	} else if ($number == $guess) {
		echo "Good Guess!  My number was {$number}!\n";
	}
} while ($number != $guess);
	echo "Good guess! My number was {$number}\n";


exit(0);