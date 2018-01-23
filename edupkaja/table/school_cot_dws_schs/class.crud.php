<?php

class crud
{
	private $db;

	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}

	/* paging */

	public function dataview($query)
	{

		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$number=1;
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				
			$sql0="SELECT Division, sum(TeaTot) as aptea FROM  schdata,approved WHERE Scid=apScid and Station =  'School' and Category='Provincial' Group by Division ORDER BY ZoneSort, Division ASC";
			$sql1="SELECT Division, count(NICno) as nos, sum(if(Gender = 'Male', 1, 0)) AS male,sum(if(Gender = 'Female', 1, 0)) AS female FROM  schdata, stafftb WHERE Scid=SchID and (Service='SLTS' or Service='TeacherAssist.') and Station =  'School' and Category='Provincial' Group by Division ORDER BY ZoneSort, Division ASC";
			$sql2="SELECT Division, sum(TechTotA) as nos FROM  schdata, cadretb WHERE Scid=avScid and Station =  'School' and Category='Provincial' Group by Division ORDER BY ZoneSort, Division ASC";
			$sql3="SELECT Division, sum(MaleTotal) as mnos,sum(FemaleTotal) as fnos, sum(stTotal) as nos FROM  schdata, studentpop WHERE Scid=stScid and Station =  'School' and Category='Provincial' Group by Division ORDER BY ZoneSort, Division ASC";
			$result0=mysql_query($sql0);
			$result1=mysql_query($sql1);
			$result2=mysql_query($sql2);
			$result3=mysql_query($sql3);
			while($test0 = mysql_fetch_array($result0) and $test1 = mysql_fetch_array($result1) and $test2 = mysql_fetch_array($result2) and $test3 = mysql_fetch_array($result3))
			{
				
				echo"<td><font color='black'>" .$test1['Division']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test0['aptea']."</font></td>";$dap=$dap+$test0['aptea'];
				echo"<td align='right'><font color='black'>" .$test1['male']."</font></td>";$dmale=$dmale+$test1['male'];
				echo"<td align='right'><font color='black'>" .$test1['female']."</font></td>";$dfemale=$dfemale+$test1['female'];
				echo"<td align='right'><font color='black'>" .$test1['nos']."</font></td>";$ddtea=$ddtea+$test1['nos'];
				echo"<td align='right'><font color='black'>" .$test2['nos']."</font></td>";$dctea=$dctea+$test2['nos'];
				echo"<td align='right'><font color='black'>" .$test3['mnos']."</font></td>";$dmst=$dmst+$test3['mnos'];
				echo"<td align='right'><font color='black'>" .$test3['fnos']."</font></td>";$dfst=$dfst+$test3['fnos'];
				echo"<td align='right'><font color='black'>" .$test3['nos']."</font></td>";$dst=$dst+$test3['nos'];
				echo "<td align='right'>".round($dst/$ddtea)."</td>";				
				echo "</tr>";
			}
				echo "<tr><td>Province</td><td align='right'>".$dap."</td><td align='right'>".$dmale."</td><td align='right'>".$dfemale."</td><td align='right'>".$ddtea."</td><td align='right'>".$dctea."</td><td align='right'>".$dmst."</td><td align='right'>".$dfst."</td><td align='right'>".$dst."</td><td align='right'>".round($dst/$ddtea)."</td></tr></table></fieldset>";
			?>
			
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		
			</tr>
			
		<?php

	 }
 
		else
		{
						?>
            Nothing here...
						<?php
		}

	}

	

	/* paging */

}
