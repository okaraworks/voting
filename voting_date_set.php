<?php

require 'core.php';
require 'dbconnect.php';

	if(isset($_POST['start_day']) && isset($_POST['start_month']) && isset($_POST['start_year']) && isset($_POST['start_hour']) && isset($_POST[
	'start_minute']) && isset( $_POST['start_second']) && isset($_POST['end_day']) && isset($_POST['end_month']) && isset($_POST[
	'end_year']) && isset($_POST['end_hour']) && isset($_POST['end_minute']) && isset($_POST['end_second'])) {
	
		$start_day = $_POST['start_day'];
		$start_month = $_POST['start_month'];
		$start_year = $_POST['start_year'];
		$start_hour = $_POST['start_hour'];
		$start_minute = $_POST['start_minute'];
		$start_second = $_POST['start_second'];
		$end_day = $_POST['end_day'];
		$end_month = $_POST['end_month'];
		$end_year = $_POST['end_year'];
		$end_hour = $_POST['end_hour'];
		$end_minute = $_POST['end_minute'];
		$end_second = $_POST['end_second'];
		
		if(!empty($start_day) && !empty($start_month) && !empty($start_year) && !empty($start_hour) && !empty($start_minute) && !empty($start_second) && !empty($end_day) && !empty($end_month) && !empty($end_year) && !empty($end_hour) && !empty($end_minute) && !
		empty($end_second)) {
		
			if(strlen($start_month)>10 && strlen($end_month)>10) {
			
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Please adhere to the maximum length of fields!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php		

				} else {
				    $query = "UPDATE voting_date_and_time SET start_day ='$start_day', start_month = '$start_month', start_year = '$start_year', start_hour = '$start_hour', start_minute = '$start_minute', start_second = '$start_second', end_day = '$end_day', end_month = '$end_month', end_year = '$end_year', end_hour = '$end_hour', end_minute = '$end_minute', end_second = '$end_second' ";
				    $query_run = mysql_query($query);	

        			if($query_run){					
					
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Voting date and time have been set.")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
					
					} else {	
					
			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("Sorry, voting date and time could not be set at this time. Please try again.")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						

					
			  }
			
		}   
	
	} else{

			?>		
				<html>
				<head>
				<title>Untitled Document</title>
				</head>
				<body onLoad="confirmation()">
				
				<script type="text/javascript">
				<!--
				function confirmation() {
				var answer = alert("All fields are required!")
				 }
				 //-->
				 </script> 
				</body>
				</html>		
			<?php						
	}
  }
?>

<html>
<head>
<title>MMUSO ELECTIONS 2014</title>
<link href="webstyle.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="divLine"></div>
<div id="divWrap">
<div id="content">
<div id="divLine"></div>
<div id="divTable">
<table width="90%" border="0">
<tr>
<td width="90%">

<form action = "voting_date_set.php" method = "POST">
<center><h1>VOTING DAY AND TIME</h1>
<h4>

<div id="date_set1">

<table width="40%" border="0">
<tr>
<td width="40%">Day: <br><select name="start_day" >
                        <option>1</option>
                        <option>2</option>
						<option>3</option>
                        <option>4</option>
						<option>5</option>
                        <option>6</option>
						<option>7</option>
                        <option>8</option>
						<option>9</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
						<option>25</option>
                        <option>26</option>
						<option>27</option>
                        <option>28</option>
						<option>29</option>
						<option>30</option>
                        <option>31</option>
						
               </select>
			   </td>
</tr>
<tr>
<td width="40%">Month: <br><select name="start_month" >
                        <option>January</option>
                        <option>February</option>
						<option>March</option>
                        <option>April</option>
						<option>May</option>
                        <option>June</option>
						<option>July</option>
                        <option>August</option>
						<option>September</option>
                        <option>October</option>
						<option>November</option>
                        <option>December</option>
						
               </select>
			   </td>
</tr>
<tr>
<td width="40%">Year:  <br><select name="start_year" >
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
						<option>2014</option>
						<option>2015</option>
                        <option>2016</option>
						<option>2017</option>

               </select>
</td>
</tr>
<tr>
<td width="40%">Hour: <br><select name="start_hour" >
                        <option>00</option>
                        <option>01</option>
                        <option>02</option>
						<option>03</option>
                        <option>04</option>
						<option>05</option>
                        <option>06</option>
						<option>07</option>
                        <option>08</option>
						<option>09</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
                       
               </select>
			   </td>
</tr>
<tr>
<td width="40%">Minute: <br><select name="start_minute" >
                        <option>00</option>
                        <option>01</option>
                        <option>02</option>
						<option>03</option>
                        <option>04</option>
						<option>05</option>
                        <option>06</option>
						<option>07</option>
                        <option>08</option>
						<option>09</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
						<option>28</option>
                        <option>29</option>
						<option>30</option>
                        <option>31</option>
						<option>32</option>
                        <option>33</option>
						<option>34</option>
                        <option>35</option>
						<option>36</option>
                        <option>37</option>
						<option>38</option>
                        <option>39</option>
						<option>40</option>
                        <option>41</option>
						<option>42</option>
                        <option>43</option>
						<option>44</option>
                        <option>45</option>
						<option>46</option>
                        <option>47</option>
						<option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
						<option>53</option>
                        <option>54</option>
						<option>55</option>
                        <option>56</option>
						<option>57</option>
                        <option>58</option>
						<option>59</option>
                        <option>60</option>

               </select>
</td>
</tr>
<tr>
<td width="40%">Second: <br><select name="start_second">
                        <option>00</option>
                        <option>01</option>
                        <option>02</option>
						<option>03</option>
                        <option>04</option>
						<option>05</option>
                        <option>06</option>
						<option>07</option>
                        <option>08</option>
						<option>09</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
						<option>28</option>
                        <option>29</option>
						<option>30</option>
                        <option>31</option>
						<option>32</option>
                        <option>33</option>
						<option>34</option>
                        <option>35</option>
						<option>36</option>
                        <option>37</option>
						<option>38</option>
                        <option>39</option>
						<option>40</option>
                        <option>41</option>
						<option>42</option>
                        <option>43</option>
						<option>44</option>
                        <option>45</option>
						<option>46</option>
                        <option>47</option>
						<option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
						<option>53</option>
                        <option>54</option>
						<option>55</option>
                        <option>56</option>
						<option>57</option>
                        <option>58</option>
						<option>59</option>
                        <option>60</option>
                     </select>
</td>
</tr>
</table>

</div>


<div id="date_set2">

<table width="40%" border="0">
<tr>
<td width="40%">Day: <br><select name="end_day" >
                        <option>1</option>
                        <option>2</option>
						<option>3</option>
                        <option>4</option>
						<option>5</option>
                        <option>6</option>
						<option>7</option>
                        <option>8</option>
						<option>9</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
						<option>25</option>
                        <option>26</option>
						<option>27</option>
                        <option>28</option>
						<option>29</option>
						<option>30</option>
                        <option>31</option>
						
               </select>
			   </td>
</tr>
<tr>
<td width="40%">Month: <br><select name="end_month" >
                        <option>January</option>
                        <option>February</option>
						<option>March</option>
                        <option>April</option>
						<option>May</option>
                        <option>June</option>
						<option>July</option>
                        <option>August</option>
						<option>September</option>
                        <option>October</option>
						<option>November</option>
                        <option>December</option>
						
               </select>
			   </td>
</tr>
<tr>
<td width="40%">Year:  <br><select name="end_year" >
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
						<option>2014</option>
						<option>2015</option>
                        <option>2016</option>
						<option>2017</option>

               </select>
</td>
</tr>
<tr>
<td width="40%">Hour: <br><select name="end_hour" >
                        <option>00</option>
                        <option>01</option>
                        <option>02</option>
						<option>03</option>
                        <option>04</option>
						<option>05</option>
                        <option>06</option>
						<option>07</option>
                        <option>08</option>
						<option>09</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
                       
               </select>
			   </td>
</tr>
<tr>
<td width="40%">Minute: <br><select name="end_minute" >
                        <option>00</option>
                        <option>01</option>
                        <option>02</option>
						<option>03</option>
                        <option>04</option>
						<option>05</option>
                        <option>06</option>
						<option>07</option>
                        <option>08</option>
						<option>09</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
						<option>28</option>
                        <option>29</option>
						<option>30</option>
                        <option>31</option>
						<option>32</option>
                        <option>33</option>
						<option>34</option>
                        <option>35</option>
						<option>36</option>
                        <option>37</option>
						<option>38</option>
                        <option>39</option>
						<option>40</option>
                        <option>41</option>
						<option>42</option>
                        <option>43</option>
						<option>44</option>
                        <option>45</option>
						<option>46</option>
                        <option>47</option>
						<option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
						<option>53</option>
                        <option>54</option>
						<option>55</option>
                        <option>56</option>
						<option>57</option>
                        <option>58</option>
						<option>59</option>
                        <option>60</option>

               </select>
</td>
</tr>
<tr>
<td width="40%">Second: <br><select name="end_second">
                        <option>00</option>
                        <option>01</option>
                        <option>02</option>
						<option>03</option>
                        <option>04</option>
						<option>05</option>
                        <option>06</option>
						<option>07</option>
                        <option>08</option>
						<option>09</option>
                        <option>10</option>
						<option>11</option>
                        <option>12</option>
						<option>13</option>
                        <option>14</option>
						<option>15</option>
                        <option>16</option>
						<option>17</option>
                        <option>18</option>
						<option>19</option>
                        <option>20</option>
						<option>21</option>
                        <option>22</option>
						<option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
						<option>28</option>
                        <option>29</option>
						<option>30</option>
                        <option>31</option>
						<option>32</option>
                        <option>33</option>
						<option>34</option>
                        <option>35</option>
						<option>36</option>
                        <option>37</option>
						<option>38</option>
                        <option>39</option>
						<option>40</option>
                        <option>41</option>
						<option>42</option>
                        <option>43</option>
						<option>44</option>
                        <option>45</option>
						<option>46</option>
                        <option>47</option>
						<option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
						<option>53</option>
                        <option>54</option>
						<option>55</option>
                        <option>56</option>
						<option>57</option>
                        <option>58</option>
						<option>59</option>
                        <option>60</option>
                     </select>
</td>
</tr>
</table>
</div>

<p><br><br><input type = "submit" value="SET">
</h4>
</form>

</div>
<div id="divLine"></div>
</td>
</tr>
</table>
</div>
</div>
</body>
</html>





