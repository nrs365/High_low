<?php

//user inputs filename followed by range of numbers to choose from
$number = mt_rand($argv[1], $argv[2]);

//declaring a variable as an incremeter
$number_of_guesses = 0;

//ask the user to guess a number
fwrite(STDOUT, "Guess a number!\n");

do {
	$guess = fgets(STDIN);//inputs the guess from user
	$number_of_guesses++;//number of guesses increments by one each loop

	if ($number > $guess) { //if the number is greater than the guess, output higher
		fwrite(STDOUT, "Higher! Guess again!\n");
	} else if ($number < $guess) {//if the number is less than the guess, output lower
		fwrite(STDOUT, "Lower! Guess again!\n");
	}
} while ($number != $guess);//loop only while the number and the guess are not the same. then display comment and number of guesses
	fwrite(STDOUT, "Good Guess!  My number was {$number}! It took {$number_of_guesses} guesses for you to guess my number.\n");


exit(0);