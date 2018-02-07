<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//Set question number number
	$number = (int)$_GET['n'];
	
	/*
	*	Get the question 
	*/
	
	$query = "SELECT * FROM `questions`
				WHERE question_number = $number";
	/*
	* Get total question
	*/
	$query = "SELECT * FROM `questions`";
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error);
	$total = $result->num_rows;
			
				
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error);
	
	$question = $result->fetch_assoc();				//we get the required output in associative array
	
	/*
	*	Get Choices 
	*/
	
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
				
	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error);
	
	//$question = $result->fetch_assoc();				//we get the required output in associative array
	
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Qizzer</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>

<body>
	<header>
    	<div class="container">
        	<h1>
            	PHP Quizzer
            </h1>
        </div>
        <main>
        	<div class="container">
            	<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total ;?> </div>
                <p class="question">
                	<?php echo $question['text']; ?>
                </p>
                <form method="post" action="process.php">
                	<ul class="choices">
                    	<?php while($row = $choices->fetch_assoc()): ?>
                    	<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /> <?php echo $row['text']; ?></li>
                        <?php endwhile ; ?>
                    </ul>
                    <input type="submit" value="submit" />
                    <input type="hidden" name="number" value="<?php echo $number;?>" />
                </form>
                
                
                
                
            </div>
        </main>
        <footer>
        	<div class="continer">
           	 	Copyright &copy; 2018, PHP Quizzer 
            	
            </div>
        </footer>
    
    </header>

</body>
</html>
