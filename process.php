<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
		//Check to see if score is set_error_handler
		if(!isset($_SESSION['score']) )			//session is a super global
		{
			$_SESSION['score'] = 0;
		}
		
		if($_POST )
		{
			$number = $_POST['number'];
			$selected_choice = $_POST['choice'];
			
			//echo $number.'<br>';
			//echo $selected_choice.'<br>';
			$next = $number+1;
			
			/*
			* Get total question
			*/
			$query = "SELECT * FROM `questions`";
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error);
			$total = $result->num_rows;
			

			
			/*
			* Get correct choice
			*/
			
			$query = "SELECT * FROM `choices`
					  WHERE question_number = $number AND is_correct = 1";
			
			
			//GET RESULT
			$result = $mysqli->query($query) or die($mysqli->error);
			//Get row
			$row = $result->fetch_assoc();
			
			//Set Correct choice
			$correct_choice = $row['id'];
			
			//Compare 
			if($correct_choice == $selected_choice)
			{
				//Answer is correct
				$_SESSION['score']++;
			}
			//Check if last question 
			if($number == $total)
			{
				header("Location: final.php");
				exit();
			}
			else
			{
				header("Location: question.php?n=".$next);
			}
				
			
		}
		



















