<?php
$month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
$year = date('Y');
$days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
	<h1>Calendrier</h1>

	<form action="index.php" method="POST">

	    <select name="month" id="select">
	        <?php 
	            foreach($month as $Month => $month) {
	            echo '<option value="' . $month .'">' . $month . '</option>'; 
	         	}
	        ?>
	    </select>

	    <select name="years" id="select">
	        <?php    
	            for ($year = $year+10; $year-2000; $year--) {
	             echo '<option value="' . $year . '">' . $year . '</option>'; 
	            }
	        ?>
	    </select>

	    <input type="submit" value="Choisir" id="select">

	</form>
	

	<table border="5" cellpadding="15" cellspacing="10">
		
		<tr>
			
	        <?php          
	        	foreach($days as $day) {
	        	    echo '<td>' . $day . '</td>'; 
	        	}
	        ?>
					
	    </tr>
	
   		<tr>
      		<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<td>1</td>
			<td>2</td>
   		</tr>

   		<tr>
			<td>3</td>
		   	<td>4</td>
			<td>5</td>
			<td>6</td>
			<td>7</td>
			<td>8</td>
			<td>9</td>
   		</tr>

   		<tr>
		   	<td>10</td>
			<td>11</td>
			<td>12</td>
			<td>13</td>
			<td>14</td>
			<td>15</td>
			<td>16</td> 
   		</tr>
				
		<tr>
			<td>17</td>
			<td>18</td>
			<td>19</td>
			<td>20</td>
			<td>21</td>
			<td>22</td>
			<td>23</td> 
		</tr>
		
		<tr>
			<td>24</td>
			<td>25</td>
			<td>26</td>
			<td>27</td>
			<td>28</td>
			<td>29</td>
			<td>30</td>
   		</tr>
		
		<tr>
			<td>31</td>
      		<th></th>
      		<th></th>
	  		<th></th>
      		<th></th>
      		<th></th>
	  		<th></th> 
   		</tr>

</table>






</body>
</html>


















	    