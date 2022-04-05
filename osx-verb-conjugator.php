<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="https://fonts.googleapis.com/css?family=Assistant:300&subset=all" rel="stylesheet">
	</head>
	<body>
		<?php
			//TODO: Include a list of verbal prefixes and handle them so as to render their influence null when replacing characters in string
			
			$infinitive = 'rīdan'; //Class 1 strong verb
			
			for($i = strlen($infinitive)-2; $i < strlen($infinitive); $i++){
				if($infinitive[$i] == 'a' || $infinitive[$i] == 'n'){
					$infinitive[$i] = ' ';
                    			$infinitive = trim($infinitive);
				}
			}
			
			echo '<h1>Present indicative</h1>';
            		echo '<p>';
			echo 'ik '."<span style=background-color:lightgreen;>$infinitive".'-u</span><br>';
            		echo 'thū '."<span style=background-color:lightgreen;>$infinitive".'-is</span><br>';
            		echo 'hē/it/siu '."<span style=background-color:lightgreen;>$infinitive".'-id</span><br>';
			echo 'wī/gī/sia '."<span style=background-color:lightgreen;>$infinitive".'-ad</span><br>';
            		echo '</p>';            
			
			$infinitive = str_replace('ī', 'ē', $infinitive);
			
			echo '<h1>Past indicative</h1>';
            		echo '<p>';
			echo 'ik '."<span style=background-color:lightgreen;>$infinitive".'</span><br>';
			$infinitive = str_replace('ē', 'i', $infinitive);
            		echo 'thū '."<span style=background-color:lightgreen;>$infinitive".'-i</span><br>';
			$infinitive = str_replace('i', 'ē', $infinitive);
            		echo 'hē/it/siu '."<span style=background-color:lightgreen;>$infinitive".'</span><br>';
			$infinitive = str_replace('ē', 'i', $infinitive);			
			echo 'wī/gī/sia '."<span style=background-color:lightgreen;>$infinitive".'-un</span><br>';
            		echo '</p>';   
			
			$infinitive = str_replace('i', 'ī', $infinitive);			
			
			echo '<h1>Present subjunctive</h1>';
            		echo '<p>';
			echo 'ik '."<span style=background-color:lightgreen;>$infinitive".'-e</span><br>';
            		echo 'thū '."<span style=background-color:lightgreen;>$infinitive".'-es</span><br>';
            		echo 'hē/it/siu '."<span style=background-color:lightgreen;>$infinitive".'-e</span><br>';
			echo 'wī/gī/sia '."<span style=background-color:lightgreen;>$infinitive".'-en</span><br>';
            		echo '</p>'; 
			
			$infinitive = str_replace('ī', 'i', $infinitive);
		?>
	</body>
</html>
