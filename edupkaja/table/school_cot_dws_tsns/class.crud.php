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
				
			$nsql0="SELECT Division, sum(TeaTot) as aptea FROM  schdata,approved WHERE Scid=apScid and Station =  'School' and Category='National' Group by Division ORDER BY ZoneSort, Division ASC";
			$nsql1="SELECT Division, count(NICno) as nos, sum(if(Gender = 'Male', 1, 0)) AS male,sum(if(Gender = 'Female', 1, 0)) AS female FROM  schdata, stafftb WHERE Scid=SchID and (Service='SLTS' or Service='TeacherAssist.') and Station =  'School' and Category='National' Group by Division ORDER BY ZoneSort, Division ASC";
			$nsql2="SELECT Division, sum(TechTotA) as nos FROM  schdata, cadretb WHERE Scid=avScid and Station =  'School' and Category='National' Group by Division ORDER BY ZoneSort, Division ASC";
			$nsql3="SELECT Division,sum(MaleTotal) as mnos,sum(FemaleTotal) as fnos, sum(stTotal) as nos FROM  schdata, studentpop WHERE Scid=stScid and Station =  'School' and Category='National' Group by Division ORDER BY ZoneSort, Division ASC";
			$nresult0=mysql_query($nsql0);
			$nresult1=mysql_query($nsql1);
			$nresult2=mysql_query($nsql2);
			$nresult3=mysql_query($nsql3);
			while($ntest0 = mysql_fetch_array($nresult0) and $ntest1 = mysql_fetch_array($nresult1) and $ntest2 = mysql_fetch_array($nresult2) and $ntest3 = mysql_fetch_array($nresult3))
			{
				
				echo"<td><font color='black'>" .$ntest1['Division']."</font></td>";
				echo"<td align='right'><font color='black'>" .$ntest0['aptea']."</font></td>";$dnap=$dnap+$ntest0['aptea'];
				echo"<td align='right'><font color='black'>" .$ntest1['male']."</font></td>";$dnmale=$dnmale+$ntest1['male'];
				echo"<td align='right'><font color='black'>" .$ntest1['female']."</font></td>";$dnfemale=$dnfemale+$ntest1['female'];
				echo"<td align='right'><font color='black'>" .$ntest1['nos']."</font></td>";$dndtea=$dndtea+$ntest1['nos'];
				echo"<td align='right'><font color='black'>" .$ntest2['nos']."</font></td>";$dnctea=$dnctea+$ntest2['nos'];
				echo"<td align='right'><font color='black'>" .$ntest3['mnos']."</font></td>";$dnmst=$dnmst+$ntest3['mnos'];
				echo"<td align='right'><font color='black'>" .$ntest3['fnos']."</font></td>";$dnfst=$dnfst+$ntest3['fnos'];
				echo"<td align='right'><font color='black'>" .$ntest3['nos']."</font></td>";$dnst=$dnst+$ntest3['nos'];
				echo "<td align='right'>".round($dnst/$dndtea)."</td>";					
				echo "</tr>";
			}
				echo "<tr><td>Province</td><td align='right'>".$dnap."</td><td align='right'>".$dnmale."</td><td align='right'>".$dnfemale."</td><td align='right'>".$dndtea."</td><td align='right'>".$nctea."</td><td align='right'>".$dnmst."</td><td align='right'>".$dnfst."</td><td align='right'>".$dnst."</td><td align='right'>".round($dnst/$dndtea)."</td></tr></table></fieldset>";
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
