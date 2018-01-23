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
				
			$sql1="SELECT Zone, count(Scid) as nos,sum(if(Category = 'National', 1, 0)) AS nat,sum(if(Category = 'Provincial', 1, 0)) AS prov,sum(if(Category = 'Private', 1, 0)) AS priv FROM  schdata WHERE Station =  'School' Group by Zone ORDER BY ZoneSort ASC";
			$sql2="SELECT Zone, count(Scid) as nos FROM  schdata WHERE Station =  'School' and Func='F' Group by Zone ORDER BY ZoneSort ASC";
			$sql3="SELECT Zone, sum(if(Type = '1AB', 1, 0)) AS 1ab,sum(if(Type = '1C', 1, 0)) AS 1c,sum(if(Type = 'II', 1, 0)) AS two,sum(if(Type = 'III', 1, 0)) AS three FROM  schdata WHERE Station =  'School' and Func='F' Group by Zone ORDER BY ZoneSort ASC";
			
			$result1=mysql_query($sql1);
			$result2=mysql_query($sql2);
			$result3=mysql_query($sql3);
			while($test1 = mysql_fetch_array($result1) and $test2 = mysql_fetch_array($result2) and $test3 = mysql_fetch_array($result3))
			{
				echo"<td><font color='black'>" .$test1['Zone']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test1['nat']."</font></td>";	$natsch=$natsch+$test1['nat'];
				echo"<td align='right'><font color='black'>" .$test1['prov']."</font></td>";$prosch=$prosch+$test1['prov'];
				echo"<td align='right'><font color='black'>" .$test1['priv']."</font></td>";$prisch=$prisch+$test1['priv'];
				echo"<td align='right'><font color='black'>" .$test1['nos']."</font></td>";	$schtot=$schtot+$test1['nos'];
				echo"<td align='right'><font color='black'>" .$test2['nos']."</font></td>"; $fschtot=$fschtot+$test2['nos'];
				echo"<td align='right'><font color='black'>" .$test3['1ab']."</font></td>"; $ab=$ab+$test3['1ab'];
				echo"<td align='right'><font color='black'>" .$test3['1c']."</font></td>"; $c=$c+$test3['1c'];
				echo"<td align='right'><font color='black'>" .$test3['two']."</font></td>"; $two=$two+$test3['two'];
				echo"<td align='right'><font color='black'>" .$test3['three']."</font></td>"; $three=$three+$test3['three'];
				echo "</tr>";
			
				echo "<tr><td>Province</td><td align='right'>".$natsch."</td><td align='right'>".$prosch."</td><td align='right'>".$prisch."</td><td align='right'>".$schtot."</td><td align='right'>".$fschtot."</td><td align='right'>".$ab."</td><td align='right'>".$c."</td><td align='right'>".$two."</td><td align='right'>".$three."</td></tr></table></fieldset>";		
			}
			}
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
