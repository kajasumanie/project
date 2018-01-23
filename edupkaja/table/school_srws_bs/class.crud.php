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
				$id = $row['Zone'];
				include('dbconfig.php');
				$primTotM=$primTotF=$primTot=$primTotPClass=$secTotM=$secTotF=$secTot=$secTotPClass=$advTotM=$advTotF=$advTot=$advTotPClass=$TotM=$TotF=$Tot=$TotPClass=$SpeTot=$GTot=0;


				$result=mysqli_query($con,"SELECT * FROM schdata,studentpop,grpsubstudp WHERE Scid=stScid and Scid=SubScid and Station='School' and schdata.Zone='$id'");
				while($test = mysqli_fetch_array($result))
				{
				$count=1;
			$g6m=0;
			$g6f=0;
			$g6tot=0;
			$g7m=0;
			$g7f=0;
			$g7tot=0;
			$g8m=0;
			$g8f=0;
			$g8tot=0;
			$g9m=0;
			$g9f=0;
			$g9tot=0;
			$g10m=0;
			$g10f=0;
			$g10tot=0;
			$g11m=0;
			$g11f=0;
			$g11tot=0;
			$g11rm=0;
			$g11rf=0;
			$g11rtot=0;
			$secGTotM=0;
			$secGTotF=0;
			$secGTot=0;
			$g12sm=0;
			$g12sf=0;
			$g12stot=0;
			$g12mm=0;
			$g12mf=0;
			$g12mtot=0;
			$g12cm=0;
			$g12cf=0;
			$g12ctot=0;
			$g12am=0;
			$g12af=0;
			$g12atot=0;
			$g12tm=0;
			$g12tf=0;
			$g12ttot=0;
			$G12GTotM=0;
			$G12GTotF=0;
			$G12GTot=0;
			$g13sm=0;
			$g13sf=0;
			$g13stot=0;
			$g13mm=0;
			$g13mf=0;
			$g13mtot=0;
			$g13cm=0;
			$g13cf=0;
			$g13ctot=0;
			$g13cpcl=0;
			$g13am=0;
			$g13af=0;
			$g13atot=0;
			$g13tm=0;
			$g13tf=0;
			$g13ttot=0;
			$G13GTotM=0;
			$G13GTotF=0;
			$G13GTot=0;
			$g13rsm=0;
			$g13rsf=0;
			$g13rstot=0;
			$g13rmm=0;
			$g13rmf=0;
			$g13rmtot=0;
			$g13rcm=0;
			$g13rcf=0;
			$g13rctot=0;
			$g13ram=0;
			$g13raf=0;
			$g13ratot=0;
			$g13rtm=0;
			$g13rtf=0;
			$g13rttot=0;
			$G13RGTotM=0;
			$G13RGTotF=0;
			$G13RGTot=0;
			$m=0;
			$f=0;
			$t=0;
			
			
			$result=mysql_query("$sql Order By ZoneSort,Scid ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G6MEng']+$test['G6FEng']+$test['G7MEng']+$test['G7FEng']+$test['G8MEng']+$test['G8FEng']+$test['G9MEng']+$test['G9FEng']+$test['G10MEng']+$test['G10FEng']+$test['G11MEng']+$test['G11FEng']+$test['G11RMEng']+$test['G11RFEng']+$test['G12SMEng']+$test['G12SFEng']+$test['G12MMEng']+$test['G12MFEng']+$test['G12CMEng']+$test['G12CFEng']+$test['G12AMEng']+$test['G12AFEng']+$test['G12TMEng']+$test['G12TFEng']+$test['G13SMEng']+$test['G13SFEng']+$test['G13MMEng']+$test['G13MFEng']+$test['G13CMEng']+$test['G13CFEng']+$test['G13AMEng']+$test['G13AFEng']+$test['G13TMEng']+$test['G13TFEng']+$test['G13RSMEng']+$test['G13RSFEng']+$test['G13RMMEng']+$test['G13RMFEng']+$test['G13RCMEng']+$test['G13RCFEng']+$test['G13RAMEng']+$test['G13RAFEng']+$test['G13RTMEng']+$test['G13RTFEng'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Zone']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6MEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6FEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG6']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7MEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7FEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG7']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8MEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8FEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG8']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9MEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9FEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG9']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10MEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10FEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG10']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11MEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11FEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG11']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG11R']. "</font></td>";
				$secTotM=$test['G6MEng']+$test['G7MEng']+$test['G8MEng']+$test['G9MEng']+$test['G10MEng']+$test['G11MEng']+$test['G11RMEng'];
				$secTotF=$test['G6FEng']+$test['G7FEng']+$test['G8FEng']+$test['G9FEng']+$test['G10FEng']+$test['G11FEng']+$test['G11RFEng'];
				$secTot=$test['G6MEng']+$test['G7MEng']+$test['G8MEng']+$test['G9MEng']+$test['G10MEng']+$test['G11MEng']+$test['G11RMEng']+$test['G6FEng']+$test['G7FEng']+$test['G8FEng']+$test['G9FEng']+$test['G10FEng']+$test['G11FEng']+$test['G11RFEng'];
				echo"<td align='right'><font color='black'>". $secTotM. "</font></td>";
				echo"<td align='right'><font color='black'>". $secTotF. "</font></td>";
				echo"<td align='right'><font color='black'>". $secTot. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G12SMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12SFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG12S']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12MMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12MFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG12M']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12CMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12CFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG12C']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12AMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12AFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG12A']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG12T']. "</font></td>";
				$G12TotM=$test['G12SMEng']+$test['G12MMEng']+$test['G12CMEng']+$test['G12AMEng']+$test['G12TMEng'];
				$G12TotF=$test['G12SFEng']+$test['G12MFEng']+$test['G12CFEng']+$test['G12AFEng']+$test['G12TFEng'];
				$G12Tot=$test['G12SMEng']+$test['G12MMEng']+$test['G12CMEng']+$test['G12AMEng']+$test['G12TMEng']+$test['G12SFEng']+$test['G12MFEng']+$test['G12CFEng']+$test['G12AFEng']+$test['G12TFEng'];
				echo"<td align='right'><font color='black'>". $G12TotM. "</font></td>";
				echo"<td align='right'><font color='black'>". $G12TotF. "</font></td>";
				echo"<td align='right'><font color='black'>". $G12Tot. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13SMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13SFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13S']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13MMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13MFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13M']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13CMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13CFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13C']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13AMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13AFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13A']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13T']. "</font></td>";
				$G13TotM=$test['G13SMEng']+$test['G13MMEng']+$test['G13CMEng']+$test['G13AMEng']+$test['G13TMEng'];
				$G13TotF=$test['G13SFEng']+$test['G13MFEng']+$test['G13CFEng']+$test['G13AFEng']+$test['G13TFEng'];
				$G13Tot=$test['G13SMEng']+$test['G13MMEng']+$test['G13CMEng']+$test['G13AMEng']+$test['G13TMEng']+$test['G13SFEng']+$test['G13MFEng']+$test['G13CFEng']+$test['G13AFEng']+$test['G13TFEng'];
				echo"<td align='right'><font color='black'>". $G13TotM. "</font></td>";
				echo"<td align='right'><font color='black'>". $G13TotF. "</font></td>";
				echo"<td align='right'><font color='black'>". $G13Tot. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13RSMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RSFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13RS']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RMMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RMFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13RM']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RCMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RCFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13RC']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RAMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RAFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13RA']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTMEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTFEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['BilingG13RT']. "</font></td>";
				$G13RTotM=$test['G13RSMEng']+$test['G13RMMEng']+$test['G13RCMEng']+$test['G13RAMEng']+$test['G13RTMEng'];
				$G13RTotF=$test['G13RSFEng']+$test['G13RMFEng']+$test['G13RCFEng']+$test['G13RAFEng']+$test['G13RTFEng'];
				$G13RTot=$test['G13RSMEng']+$test['G13RMMEng']+$test['G13RCMEng']+$test['G13RAMEng']+$test['G13RTMEng']+$test['G13RSFEng']+$test['G13RMFEng']+$test['G13RCFEng']+$test['G13RAFEng']+$test['G13RTFEng'];
				echo"<td align='right'><font color='black'>". $G13RTotM. "</font></td>";
				echo"<td align='right'><font color='black'>". $G13RTotF. "</font></td>";
				echo"<td align='right'><font color='black'>". $G13RTot. "</font></td>";
				$TotM=$test['G6MEng']+$test['G7MEng']+$test['G8MEng']+$test['G9MEng']+$test['G10MEng']+$test['G11MEng']+$test['G11RMEng']+$test['G12SMEng']+$test['G12MMEng']+$test['G12CMEng']+$test['G12AMEng']+$test['G12TMEng']+$test['G13SMEng']+$test['G13MMEng']+$test['G13CMEng']+$test['G13AMEng']+$test['G13TMEng']+$test['G13RSMEng']+$test['G13RMMEng']+$test['G13RCMEng']+$test['G13RAMEng']+$test['G13RTMEng'];
				$TotF=$test['G6FEng']+$test['G7FEng']+$test['G8FEng']+$test['G9FEng']+$test['G10FEng']+$test['G11FEng']+$test['G11RFEng']+$test['G12SFEng']+$test['G12MFEng']+$test['G12CFEng']+$test['G12AFEng']+$test['G12TFEng']+$test['G13SFEng']+$test['G13MFEng']+$test['G13CFEng']+$test['G13AFEng']+$test['G13TFEng']+$test['G13RSFEng']+$test['G13RMFEng']+$test['G13RCFEng']+$test['G13RAFEng']+$test['G13RTFEng'];
				$Tot=$test['G6MEng']+$test['G7MEng']+$test['G8MEng']+$test['G9MEng']+$test['G10MEng']+$test['G11MEng']+$test['G11RMEng']+$test['G6FEng']+$test['G7FEng']+$test['G8FEng']+$test['G9FEng']+$test['G10FEng']+$test['G11FEng']+$test['G11RFEng']+$test['G12SMEng']+$test['G12MMEng']+$test['G12CMEng']+$test['G12AMEng']+$test['G12TMEng']+$test['G12SFEng']+$test['G12MFEng']+$test['G12CFEng']+$test['G12AFEng']+$test['G12TFEng']+$test['G13SMEng']+$test['G13MMEng']+$test['G13CMEng']+$test['G13AMEng']+$test['G13TMEng']+$test['G13SFEng']+$test['G13MFEng']+$test['G13CFEng']+$test['G13AFEng']+$test['G13TFEng']+$test['G13RSMEng']+$test['G13RMMEng']+$test['G13RCMEng']+$test['G13RAMEng']+$test['G13RTMEng']+$test['G13RSFEng']+$test['G13RMFEng']+$test['G13RCFEng']+$test['G13RAFEng']+$test['G13RTFEng'];
				echo"<td align='right'><font color='black'>". $TotM. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotF. "</font></td>";
				echo"<td align='right'><font color='black'>". $Tot. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g6m=$g6m+$test['G6MEng'];
				$g6f=$g6f+$test['G6FEng'];
				$g6tot=$g6tot+$test['BilingG6'];
				$g7m=$g7m+$test['G7MEng'];
				$g7f=$g7f+$test['G7FEng'];
				$g7tot=$g7tot+$test['BilingG7'];
				$g8m=$g8m+$test['G8MEng'];
				$g8f=$g8f+$test['G8FEng'];
				$g8tot=$g8tot+$test['BilingG8'];
				$g9m=$g9m+$test['G9MEng'];
				$g9f=$g9f+$test['G9FEng'];
				$g9tot=$g9tot+$test['BilingG9'];
				$g10m=$g10m+$test['G10MEng'];
				$g10f=$g10f+$test['G10FEng'];
				$g10tot=$g10tot+$test['BilingG10'];
				$g11m=$g11m+$test['G11MEng'];
				$g11f=$g11f+$test['G11FEng'];
				$g11tot=$g11tot+$test['BilingG11'];
				$g11rm=$g11rm+$test['G11RMEng'];
				$g11rf=$g11rf+$test['G11RFEng'];
				$g11rtot=$g11rtot+$test['BilingG11R'];
				$secGTotM=$secGTotM+$secTotM;
				$secGTotF=$secGTotF+$secTotF;
				$secGTot=$secGTot+$secTot;
				
				$g12sm=$g12sm+$test['G12SMEng'];
				$g12sf=$g12sf+$test['G12SFEng'];
				$g12stot=$g12stot+$test['BilingG12S'];
				$g12mm=$g12mm+$test['G12MMEng'];
				$g12mf=$g12mf+$test['G12MFEng'];
				$g12mtot=$g12mtot+$test['BilingG12M'];
				$g12cm=$g12cm+$test['G12CMEng'];
				$g12cf=$g12cf+$test['G12CFEng'];
				$g12ctot=$g12ctot+$test['BilingG12C'];
				$g12am=$g12am+$test['G12AMEng'];
				$g12af=$g12af+$test['G12AFEng'];
				$g12atot=$g12atot+$test['BilingG12A'];
				$g12tm=$g12tm+$test['G12TMEng'];
				$g12tf=$g12tf+$test['G12TFEng'];
				$g12ttot=$g12ttot+$test['BilingG12T'];
				$G12GTotM=$G12GTotM+$G12TotM;
				$G12GTotF=$G12GTotF+$G12TotF;
				$G12GTot=$G12GTot+$G12Tot;
				
				$g13sm=$g13sm+$test['G13SMEng'];
				$g13sf=$g13sf+$test['G13SFEng'];
				$g13stot=$g13stot+$test['BilingG13S'];
				$g13mm=$g13mm+$test['G13MMEng'];
				$g13mf=$g13mf+$test['G13MFEng'];
				$g13mtot=$g13mtot+$test['BilingG13M'];
				$g13cm=$g13cm+$test['G13CMEng'];
				$g13cf=$g13cf+$test['G13CFEng'];
				$g13ctot=$g13ctot+$test['BilingG13C'];
				$g13am=$g13am+$test['G13AMEng'];
				$g13af=$g13af+$test['G13AFEng'];
				$g13atot=$g13atot+$test['BilingG13A'];
				$g13tm=$g13tm+$test['G13TMEng'];
				$g13tf=$g13tf+$test['G13TFEng'];
				$g13ttot=$g13ttot+$test['BilingG13T'];
				$G13GTotM=$G13GTotM+$G13TotM;
				$G13GTotF=$G13GTotF+$G13TotF;
				$G13GTot=$G13GTot+$G13Tot;
				
				$g13rsm=$g13rsm+$test['G13RSMEng'];
				$g13rsf=$g13rsf+$test['G13RSFEng'];
				$g13rstot=$g13rstot+$test['BilingG13RS'];
				$g13rmm=$g13rmm+$test['G13RMMEng'];
				$g13rmf=$g13rmf+$test['G13RMFEng'];
				$g13rmtot=$g13rmtot+$test['BilingG13RM'];
				$g13rcm=$g13rcm+$test['G13RCMEng'];
				$g13rcf=$g13rcf+$test['G13RCFEng'];
				$g13rctot=$g13rctot+$test['BilingG13RC'];
				$g13ram=$g13ram+$test['G13RAMEng'];
				$g13raf=$g13raf+$test['G13RAFEng'];
				$g13ratot=$g13ratot+$test['BilingG13RA'];
				$g13rtm=$g13rtm+$test['G13RTMEng'];
				$g13rtf=$g13rtf+$test['G13RTFEng'];
				$g13rttot=$g13rttot+$test['BilingG13RT'];
				$G13RGTotM=$G13RGTotM+$G13RTotM;
				$G13RGTotF=$G13RGTotF+$G13RTotF;
				$G13RGTot=$G13RGTot+$G13RTot;
				
				
				$m=$m+$TotM;
				$f=$f+$TotF;
				$t=$t+$Tot;
				
				$count=$count+1;
				}
			}
			mysql_close($conn);
			
			?>
			<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
			
			<td colspan=5>Provincial Total</td>
			<td align="center"><strong><?php echo $g6m ?></strong></td>
			<td align="center"><strong><?php echo $g6f ?></strong></td>
			<td align="center"><strong><?php echo $g6tot ?></strong></td>
			<td align="center"><strong><?php echo $g7m ?></strong></td>
			<td align="center"><strong><?php echo $g7f ?></strong></td>
			<td align="center"><strong><?php echo $g7tot ?></strong></td>
			<td align="center"><strong><?php echo $g8m ?></strong></td>
			<td align="center"><strong><?php echo $g8f ?></strong></td>
			<td align="center"><strong><?php echo $g8tot ?></strong></td>
			<td align="center"><strong><?php echo $g9m ?></strong></td>
			<td align="center"><strong><?php echo $g9f ?></strong></td>
			<td align="center"><strong><?php echo $g9tot ?></strong></td>
			<td align="center"><strong><?php echo $g10m ?></strong></td>
			<td align="center"><strong><?php echo $g10f ?></strong></td>
			<td align="center"><strong><?php echo $g10tot ?></strong></td>
			<td align="center"><strong><?php echo $g11m ?></strong></td>
			<td align="center"><strong><?php echo $g11f ?></strong></td>
			<td align="center"><strong><?php echo $g11tot ?></strong></td>
			<td align="center"><strong><?php echo $g11rm ?></strong></td>
			<td align="center"><strong><?php echo $g11rf ?></strong></td>
			<td align="center"><strong><?php echo $g11rtot ?></strong></td>
			<td align="center"><strong><?php echo $secGTotM ?></strong></td>
			<td align="center"><strong><?php echo $secGTotF ?></strong></td>
			<td align="center"><strong><?php echo $secGTot ?></strong></td>
			
			<td align="center"><strong><?php echo $g12sm ?></strong></td>
			<td align="center"><strong><?php echo $g12sf ?></strong></td>
			<td align="center"><strong><?php echo $g12stot ?></strong></td>			
			<td align="center"><strong><?php echo $g12mm ?></strong></td>
			<td align="center"><strong><?php echo $g12mf ?></strong></td>
			<td align="center"><strong><?php echo $g12mtot ?></strong></td>			
			<td align="center"><strong><?php echo $g12cm ?></strong></td>
			<td align="center"><strong><?php echo $g12cf ?></strong></td>
			<td align="center"><strong><?php echo $g12ctot ?></strong></td>			
			<td align="center"><strong><?php echo $g12am ?></strong></td>
			<td align="center"><strong><?php echo $g12af ?></strong></td>
			<td align="center"><strong><?php echo $g12atot ?></strong></td>			
			<td align="center"><strong><?php echo $g12tm ?></strong></td>
			<td align="center"><strong><?php echo $g12tf ?></strong></td>
			<td align="center"><strong><?php echo $g12ttot ?></strong></td>
			<td align="center"><strong><?php echo $G12GTotM ?></strong></td>
			<td align="center"><strong><?php echo $G12GTotF ?></strong></td>
			<td align="center"><strong><?php echo $G12GTot ?></strong></td>
			
			<td align="center"><strong><?php echo $g13sm ?></strong></td>
			<td align="center"><strong><?php echo $g13sf ?></strong></td>
			<td align="center"><strong><?php echo $g13stot ?></strong></td>			
			<td align="center"><strong><?php echo $g13mm ?></strong></td>
			<td align="center"><strong><?php echo $g13mf ?></strong></td>
			<td align="center"><strong><?php echo $g13mtot ?></strong></td>			
			<td align="center"><strong><?php echo $g13cm ?></strong></td>
			<td align="center"><strong><?php echo $g13cf ?></strong></td>
			<td align="center"><strong><?php echo $g13ctot ?></strong></td>			
			<td align="center"><strong><?php echo $g13am ?></strong></td>
			<td align="center"><strong><?php echo $g13af ?></strong></td>
			<td align="center"><strong><?php echo $g13atot ?></strong></td>			
			<td align="center"><strong><?php echo $g13tm ?></strong></td>
			<td align="center"><strong><?php echo $g13tf ?></strong></td>
			<td align="center"><strong><?php echo $g13ttot ?></strong></td>
			<td align="center"><strong><?php echo $G13GTotM ?></strong></td>
			<td align="center"><strong><?php echo $G13GTotF ?></strong></td>
			<td align="center"><strong><?php echo $G13GTot ?></strong></td>
			
			<td align="center"><strong><?php echo $g13rsm ?></strong></td>
			<td align="center"><strong><?php echo $g13rsf ?></strong></td>
			<td align="center"><strong><?php echo $g13rstot ?></strong></td>			
			<td align="center"><strong><?php echo $g13rmm ?></strong></td>
			<td align="center"><strong><?php echo $g13rmf ?></strong></td>
			<td align="center"><strong><?php echo $g13rmtot ?></strong></td>			
			<td align="center"><strong><?php echo $g13rcm ?></strong></td>
			<td align="center"><strong><?php echo $g13rcf ?></strong></td>
			<td align="center"><strong><?php echo $g13rctot ?></strong></td>			
			<td align="center"><strong><?php echo $g13ram ?></strong></td>
			<td align="center"><strong><?php echo $g13raf ?></strong></td>
			<td align="center"><strong><?php echo $g13ratot ?></strong></td>			
			<td align="center"><strong><?php echo $g13rtm ?></strong></td>
			<td align="center"><strong><?php echo $g13rtf ?></strong></td>
			<td align="center"><strong><?php echo $g13rttot ?></strong></td>
			<td align="center"><strong><?php echo $G13RGTotM ?></strong></td>
			<td align="center"><strong><?php echo $G13RGTotF ?></strong></td>
			<td align="center"><strong><?php echo $G13RGTot ?></strong></td>
			
			
			<td align="center"><strong><?php echo $m ?></strong></td>
			<td align="center"><strong><?php echo $f ?></strong></td>
			<td align="center"><strong><?php echo $t ?></strong></td>
			<td>&nbsp;</td>

		<?php

	 }
 }
 }
		else
		{
						?>
            Nothing here...
						<?php
		}

	}

	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}

	public function paginglink($query,$records_per_page,$f1,$f2,$f3,$f4)
	{

		$self = $_SERVER['PHP_SELF'];

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		$total_no_of_records = $stmt->rowCount();

		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?table=result&page_no=1&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>First</a></li>";
				echo "<li><a href='".$self."?table=result&page_no=".$previous."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Previous</a></li>";
			}
			$more="";
			if($current_page > 3 && $current_page <= ($total_no_of_pages) )
					{
						echo "<li><a>".'...'."</a></li>";
					}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($total_no_of_pages <= 5) {
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
				}
				}
				else{
					if($current_page==1){
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=result&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i<6 && $i>1)
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}
					if($current_page==2){
						if($i == 1)
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=result&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i<6 && $i>2)
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}
					if($current_page==3){
						if($i < 3)
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=result&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i<6 && $i>3)
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}

					if($current_page > 3 && $current_page < ($total_no_of_pages-2) ){
						if($i < $current_page && $i >($current_page-3))
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=result&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i>$current_page && $i<($current_page+3))
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}
					if($current_page >= ($total_no_of_pages-2) ){
						if($i < $current_page && $i >($current_page-3))
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=result&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i>$current_page && $i<($current_page+3))
					{
						echo "<li><a href='".$self."?table=result&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}


					}

				}
			}
			echo $more;
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?table=result&page_no=".$next."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Next</a></li>";
				echo "<li><a href='".$self."?table=result&page_no=".$total_no_of_pages."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Last</a></li>";
			}
			?></ul><?php
		}
	}

	/* paging */

}
