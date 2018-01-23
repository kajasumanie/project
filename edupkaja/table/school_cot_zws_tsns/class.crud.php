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
				
			
			$sql1="SELECT Division, count(Scid) as nos,sum(if(Category = 'National', 1, 0)) AS nat,sum(if(Category = 'Provincial', 1, 0)) AS prov,sum(if(Category = 'Private', 1, 0)) AS priv FROM  schdata WHERE Station =  'School' Group by Division ORDER BY ZoneSort, Division ASC";
			$sql2="SELECT Division, count(Scid) as nos FROM  schdata WHERE Station =  'School' and Func='F' Group by Division ORDER BY ZoneSort, Division ASC";
			$sql3="SELECT Division, sum(if(Type = '1AB', 1, 0)) AS 1ab,sum(if(Type = '1C', 1, 0)) AS 1c,sum(if(Type = 'II', 1, 0)) AS two,sum(if(Type = 'III', 1, 0)) AS three FROM  schdata WHERE Station =  'School' and Func='F' Group by Division ORDER BY ZoneSort, Division ASC";
			
			$result1=mysql_query($sql1);
			$result2=mysql_query($sql2);
			$result3=mysql_query($sql3);
			while($test1 = mysql_fetch_array($result1) and $test2 = mysql_fetch_array($result2) and $test3 = mysql_fetch_array($result3))
			{
				
				echo"<td><font color='black'>" .$test1['Division']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test1['nat']."</font></td>";	$dnatsch=$dnatsch+$test1['nat'];
				echo"<td align='right'><font color='black'>" .$test1['prov']."</font></td>";$dprosch=$dprosch+$test1['prov'];
				echo"<td align='right'><font color='black'>" .$test1['priv']."</font></td>";$dprisch=$dprisch+$test1['priv'];
				echo"<td align='right'><font color='black'>" .$test1['nos']."</font></td>";	$dschtot=$dschtot+$test1['nos'];
				echo"<td align='right'><font color='black'>" .$test2['nos']."</font></td>"; $dfschtot=$dfschtot+$test2['nos'];
				echo"<td align='right'><font color='black'>" .$test3['1ab']."</font></td>"; $dab=$dab+$test3['1ab'];
				echo"<td align='right'><font color='black'>" .$test3['1c']."</font></td>"; $dc=$dc+$test3['1c'];
				echo"<td align='right'><font color='black'>" .$test3['two']."</font></td>"; $dtwo=$dtwo+$test3['two'];
				echo"<td align='right'><font color='black'>" .$test3['three']."</font></td>"; $dthree=$dthree+$test3['three'];
				echo "</tr>";
			}
				echo "<tr><td>Province</td><td align='right'>".$dnatsch."</td><td align='right'>".$dprosch."</td><td align='right'>".$dprisch."</td><td align='right'>".$dschtot."</td><td align='right'>".$dfschtot."</td><td align='right'>".$dab."</td><td align='right'>".$dc."</td><td align='right'>".$dtwo."</td><td align='right'>".$dthree."</td></tr></table></fieldset>";		
			?>
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
