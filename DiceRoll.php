<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dice Roll</title>
</head>
<body style="background-color: dodgerblue">
	<h1>Dice Roll Game</h1>
	<hr/>
	<?php
		// Global array variables
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives,", "sixes");
		function checkForDoubles($num1, $num2) {
			global $FaceNamesSingular;
			global $FaceNamesPlural;
			if($num1 == $num2) {
				echo "<p>The roll was double ", $FaceNamesPlural[$num1 - 1], ".</p>";
				return true;
			} else {
				echo "<p>The roll was a ", $FaceNamesSingular[$num1 - 1], " and a ", $FaceNamesSingular[$num2 - 1], ".</p>";
			}
		}	

		function displayScoreText($score) {
				switch($score) {
					case 2:
						echo "<p>You rolled Snake Eyes!</p>";
						break;
					case 3:
						echo "<p>You rolled a loose deuce!</p>";
						break;
					case 5:
						echo "<p>You rolled a fever five!</p>";
						break;
					case 7:
						echo "<p>You rolled a natural!</p>";
						break;
					case 9:
						echo "<p>You rolled a nina!</p>";
						break;
					case 11:
						echo "<p>You rolled a yo!</p>";
						break;
					case 12:
						echo "<p>You rolled boxcars!</p>";
						break;


				}
		}

		$Dice = array();
		$DoublesCount = 0;

	for($gameCount = 1; $gameCount <= 3; ++$gameCount) {
		$Dice[0] = rand(1, 6);
		$Dice[1] = rand(1, 6);
		$Total = $Dice[0] + $Dice[1];
		echo "<p>The total score for roll $gameCount was $Total</p>";
		$Doubles = checkForDoubles($Dice[0], $Dice[1]);
		if ($Doubles==true) {
			++$DoublesCount;
		}
		displayScoreText($Total);
	}

			?>

</body>
</html>