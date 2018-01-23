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
				
			$sql0="SELECT Zone, sum(TeaTot) as aptea FROM  schdata,approved WHERE Scid=apScid and Station =  'School' and Category='Provincial' Group by Zone ORDER BY ZoneSort ASC";
			$sql1="SELECT schdata.Zone, count(NICno) as nos, sum(if(Gender = 'Male', 1, 0)) AS male,sum(if(Gender = 'Female', 1, 0)) AS female FROM  schdata, stafftb WHERE Scid=SchID and (Service='SLTS' or Service='TeacherAssist.') and Station =  'School' and Category='Provincial' Group by Zone ORDER BY ZoneSort ASC";
			$sql2="SELECT schdata.Zone, sum(TechTotA) as nos FROM  schdata, cadretb WHERE Scid=avScid and Station =  'School' and Category='Provincial' Group by Zone ORDER BY ZoneSort ASC";
			$sql3="SELECT schdata.Zone,sum(MaleTotal) as mnos,sum(FemaleTotal) as fnos, sum(stTotal) as nos FROM  schdata, studentpop WHERE Scid=stScid and Station =  'School' and Category='Provincial' Group by Zone ORDER BY ZoneSort ASC";
			$result0=mysql_query($sql0);
			$result1=mysql_query($sql1);
			$result2=mysql_query($sql2);
			$result3=mysql_query($sql3);
			while($test0 = mysql_fetch_array($result0) and $test1 = mysql_fetch_array($result1) and $test2 = mysql_fetch_array($result2) and $test3 = mysql_fetch_array($result3))
			{
				
				echo"<td><font color='black'>" .$test1['Zone']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test0['aptea']."</font></td>";$ap=$ap+$test0['aptea'];
				echo"<td align='right'><font color='black'>" .$test1['male']."</font></td>";$male=$male+$test1['male'];
				echo"<td align='right'><font color='black'>" .$test1['female']."</font></td>";$female=$female+$test1['female'];
				echo"<td align='right'><font color='black'>" .$test1['nos']."</font></td>";$dtea=$dtea+$test1['nos'];
				echo"<td align='right'><font color='black'>" .$test2['nos']."</font></td>";$ctea=$ctea+$test2['nos'];
				echo"<td align='right'><font color='black'>" .$test3['mnos']."</font></td>";$mst=$mst+$test3['mnos'];
				echo"<td align='right'><font color='black'>" .$test3['fnos']."</font></td>";$fst=$fst+$test3['fnos'];
				echo"<td align='right'><font color='black'>" .$test3['nos']."</font></td>";$st=$st+$test3['nos'];
				echo "<td align='right'>".round($st/$dtea)."</td>";				
				echo "</tr>";
			}
				echo "<tr><td>Province</td><td align='right'>".$ap."</td><td align='right'>".$male."</td><td align='right'>".$female."</td><td align='right'>".$dtea."</td><td align='right'>".$ctea."</td><td align='right'>".$mst."</td><td align='right'>".$fst."</td><td align='right'>".$st."</td><td align='right'>".round($st/$dtea)."</td></tr></table></fieldset>";
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
