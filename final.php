
<?php session_start(); ?>
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
            	<h2>You're Done</h2>
                	<p>Congrats! You have completedthe test.</p>
                    <p>Final Score: <?php echo $_SESSION['score']; ?></p>
                    <a href="question.php?n=1" class="start">Take Again.</a>
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
