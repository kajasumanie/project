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
				
$sql0="SELECT Zone, sum(TeaTot) as aptea FROM  schdata,approved WHERE Scid=apScid and Station =  'School' and Category='National' Group by Zone ORDER BY ZoneSort ASC";
			$nsql1="SELECT schdata.Zone, count(NICno) as nos, sum(if(Gender = 'Male', 1, 0)) AS male,sum(if(Gender = 'Female', 1, 0)) AS female FROM  schdata, stafftb WHERE Scid=SchID and (Service='SLTS' or Service='TeacherAssist.') and Station =  'School' and Category='National' Group by Zone ORDER BY ZoneSort ASC";
			$nsql2="SELECT schdata.Zone, sum(TechTotA) as nos FROM  schdata, cadretb WHERE Scid=avScid and Station =  'School' and Category='National' Group by Zone ORDER BY ZoneSort ASC";
			$nsql3="SELECT schdata.Zone,sum(MaleTotal) as mnos,sum(FemaleTotal) as fnos, sum(stTotal) as nos FROM  schdata, studentpop WHERE Scid=stScid and Station =  'School' and Category='National' Group by Zone ORDER BY ZoneSort ASC";
			$result0=mysql_query($sql0);
			$nresult1=mysql_query($nsql1);
			$nresult2=mysql_query($nsql2);
			$nresult3=mysql_query($nsql3);
			while($test0 = mysql_fetch_array($result0) and $ntest1 = mysql_fetch_array($nresult1) and $ntest2 = mysql_fetch_array($nresult2) and $ntest3 = mysql_fetch_array($nresult3))
			{
				
				echo"<td><font color='black'>" .$ntest1['Zone']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test0['aptea']."</font></td>";$nap=$nap+$test0['aptea'];
				echo"<td align='right'><font color='black'>" .$ntest1['male']."</font></td>";$nmale=$nmale+$ntest1['male'];
				echo"<td align='right'><font color='black'>" .$ntest1['female']."</font></td>";$nfemale=$nfemale+$ntest1['female'];
				echo"<td align='right'><font color='black'>" .$ntest1['nos']."</font></td>";$ndtea=$ndtea+$ntest1['nos'];
				echo"<td align='right'><font color='black'>" .$ntest2['nos']."</font></td>";$nctea=$nctea+$ntest2['nos'];
				echo"<td align='right'><font color='black'>" .$ntest3['mnos']."</font></td>";$nmst=$nmst+$ntest3['mnos'];
				echo"<td align='right'><font color='black'>" .$ntest3['fnos']."</font></td>";$nfst=$nfst+$ntest3['fnos'];
				echo"<td align='right'><font color='black'>" .$ntest3['nos']."</font></td>";$nst=$nst+$ntest3['nos'];
				echo "<td align='right'>".round($nst/$ndtea)."</td>";					
				echo "</tr>";
			}
				echo "<tr><td>Province</td><td align='right'>".$nap."</td><td align='right'>".$nmale."</td><td align='right'>".$nfemale."</td><td align='right'>".$ndtea."</td><td align='right'>".$nctea."</td><td align='right'>".$nmst."</td><td align='right'>".$nfst."</td><td align='right'>".$nst."</td><td align='right'>".round($nst/$ndtea)."</td></tr></table></fieldset>";
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
