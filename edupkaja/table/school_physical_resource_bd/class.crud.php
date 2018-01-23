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
			$ele=0;
			$eleD=0;
			$gen=0;
			$genR=0;
			$was=0;
			$drink=0;
			$colab=0;
			$int=0;
			$intD=0;
			$sclab=0;
			$mroom=0;
			$aglab=0;
			$agroom=0;
			$auroom=0;
			$couroom=0;
			$spEroom=0;
			$spEunit=0;
			$ashall=0;
			$actroom=0;
			$homroom=0;
			$siroom=0;
			$storoom=0;
			$lib=0;
			$libt1=0;
			$libt2=0;
			$libt3=0;
			$staroom=0;
			$kit=0;
			$can=0;
			$play=0;
			$dent=0;
			$ban=0;
			$mtlb=0;
			$mtlb1=0;
			$mtlb2=0;
			$mtf=0;
			
			$result=mysql_query("$sql Order By ZoneSort ASC");			
			while($test = mysql_fetch_array($result))
			{
				echo "<tr>";
				
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Division']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Zone']. "</font></td>";
				
				if($test['electricity']=='1'){
				$ele=$ele+$test['electricity'];
				}
				if($test['electricity']=='2'){
				$eleD=$eleD+$test['electricity'];
				}
				if($test['electricity']=='1'){ $test['electricity']="Available";}else {if($test['electricity']=='2'){$test['electricity']="Disconnected";}else {if($test['electricity']=='0') {
				$test['electricity']="No";}else { $test['electricity']="";}}}
				echo"<td colspan=2 align='right'><font color='black'>". $test['electricity']. "</font></td>";
				
				if($test['generator']=='1'){
				$gen=$gen+$test['generator'];
				}
				if($test['generator']=='3'){
				$genR=$genR+$test['generator'];
				}
				if($test['generator']=='1'){ $test['generator']="Available";}else {if($test['generator']=='3'){$test['generator']="Repair";}else {if($test['generator']=='0') {
				$test['generator']="No";}else { $test['generator']="";}}}
				echo"<td colspan=2 align='right'><font color='black'>". $test['generator']. "</font></td>";
				
				$was=$was+$test['washwater'];
				if($test['washwater']=='1'){ $test['washwater']="Available";}else {if($test['washwater']=='0') {
					$test['washwater']="No";}else { $test['washwater']="";}}
				echo"<td align='right'><font color='black'>". $test['washwater']. "</font></td>";
				
				$drink=$drink+$test['drinkwater'];
				if($test['drinkwater']=='1'){ $test['drinkwater']="Available";}else {if($test['drinkwater']=='0') {
					$test['drinkwater']="No";}else { $test['drinkwater']="";}}
				echo"<td align='right'><font color='black'>". $test['drinkwater']. "</font></td>";
				
				$colab=$colab+$test['comlab'];
				if($test['comlab']=='1'){ $test['comlab']="Available";}else {if($test['comlab']=='0') {
					$test['comlab']="No";}else { $test['comlab']="";}}
				echo"<td align='right'><font color='black'>". $test['comlab']. "</font></td>";
				
				if($test['intfacility']=='1'){
				$int=$int+$test['intfacility'];
				}
				if($test['intfacility']=='2'){
				$intD=$intD+$test['intfacility'];
				}
				if($test['intfacility']=='1'){ $test['intfacility']="Available";}else {if($test['intfacility']=='2'){$test['intfacility']="Disconnected";}else {if($test['intfacility']=='0') {
				$test['intfacility']="No";}else { $test['intfacility']="";}}}
				echo"<td colspan=2 align='right'><font color='black'>". $test['intfacility']. "</font></td>";
								
				echo"<td align='right'><font color='black'>". $test['type_int']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['IntServProvider']. "</font></td>";
				
				$sclab=$sclab+$test['scilab'];
				if($test['scilab']=='1'){ $test['scilab']="Available";}else {if($test['scilab']=='0') {
					$test['scilab']="No";}else { $test['scilab']="";}}
				echo"<td align='right'><font color='black'>". $test['scilab']. "</font></td>";
				
				$mroom=$mroom+$test['mathsroom'];
				if($test['mathsroom']=='1'){ $test['mathsroom']="Available";}else {if($test['mathsroom']=='0') {
					$test['mathsroom']="No";}else { $test['mathsroom']="";}}
				echo"<td align='right'><font color='black'>". $test['mathsroom']. "</font></td>";
				
				
				if($test['agrlab']=='1'){
				$aglab=$aglab+$test['agrlab'];
				}
				if($test['agrlab']=='4'){
				$agroom=$agroom+$test['agrlab'];
				}
				if($test['agrlab']=='1'){ $test['agrlab']="Available";}else {if($test['agrlab']=='4'){$test['agrlab']="Room";}else {if($test['agrlab']=='0') {
				$test['agrlab']="No";}else { $test['agrlab']="";}}}
				echo"<td colspan=2 align='right'><font color='black'>". $test['agrlab']. "</font></td>";
				
				$auroom=$auroom+$test['audioroom'];
				if($test['audioroom']=='1'){ $test['audioroom']="Available";}else {if($test['audioroom']=='0') {
					$test['audioroom']="No";}else { $test['audioroom']="";}}
				echo"<td align='right'><font color='black'>". $test['audioroom']. "</font></td>";
				
				$couroom=$couroom+$test['councelroom'];
				if($test['councelroom']=='1'){ $test['councelroom']="Available";}else {if($test['councelroom']=='0') {
					$test['councelroom']="No";}else { $test['councelroom']="";}}
				echo"<td align='right'><font color='black'>". $test['councelroom']. "</font></td>";
				
				$spEroom=$spEroom+$test['speEduroom'];
				if($test['speEduroom']=='1'){ $test['speEduroom']="Available";}else {if($test['speEduroom']=='0') {
					$test['speEduroom']="No";}else { $test['speEduroom']="";}}
				echo"<td align='right'><font color='black'>". $test['speEduroom']. "</font></td>";
				
				$spEunit=$spEunit+$test['SpeEduUnit'];
				if($test['SpeEduUnit']=='1'){ $test['SpeEduUnit']="Available";}else {if($test['SpeEduUnit']=='0') {
					$test['SpeEduUnit']="No";}else { $test['SpeEduUnit']="";}}
				echo"<td align='right'><font color='black'>". $test['SpeEduUnit']. "</font></td>";
				
				$ashall=$ashall+$test['AssemblyHall'];
				if($test['AssemblyHall']=='1'){ $test['AssemblyHall']="Available";}else {if($test['AssemblyHall']=='0') {
					$test['AssemblyHall']="No";}else { $test['AssemblyHall']="";}}
				echo"<td align='right'><font color='black'>". $test['AssemblyHall']. "</font></td>";
				
				$actroom=$actroom+$test['activityroom'];
				if($test['activityroom']=='1'){ $test['activityroom']="Available";}else {if($test['activityroom']=='0') {
					$test['activityroom']="No";}else { $test['activityroom']="";}}
				echo"<td align='right'><font color='black'>". $test['activityroom']. "</font></td>";
				
				$homroom=$homroom+$test['homesciroom'];
				if($test['homesciroom']=='1'){ $test['homesciroom']="Available";}else {if($test['homesciroom']=='0') {
					$test['homesciroom']="No";}else { $test['homesciroom']="";}}
				echo"<td align='right'><font color='black'>". $test['homesciroom']. "</font></td>";
				
				$siroom=$siroom+$test['sickroom'];
				if($test['sickroom']=='1'){ $test['sickroom']="Available";}else {if($test['sickroom']=='0') {
					$test['sickroom']="No";}else { $test['sickroom']="";}}
				echo"<td align='right'><font color='black'>". $test['sickroom']. "</font></td>";
				
				$storoom=$storoom+$test['storeroom'];
				if($test['storeroom']=='1'){ $test['storeroom']="Available";}else {if($test['storeroom']=='0') {
					$test['storeroom']="No";}else { $test['storeroom']="";}}
				echo"<td align='right'><font color='black'>". $test['storeroom']. "</font></td>";
				
				$lib=$lib+$test['library'];
				if($test['library']=='1'){ $test['library']="Available";}else {if($test['library']=='0') {
					$test['library']="No";}else { $test['library']="";}}
				echo"<td align='right'><font color='black'>". $test['library']. "</font></td>";
				
				
				echo"<td colspan=3 align='right'><font color='black'>". $test['libtype']. "</font></td>";
				if($test['libtype']=='Type 1'){
				$libt1=$libt1+1;
				}
				if($test['libtype']=='Type 2'){
				$libt2=$libt2+1;
				}
				if($test['libtype']=='Type 3'){
				$libt3=$libt3+1;
				}
				
				$staroom=$staroom+$test['staffroom'];
				if($test['staffroom']=='1'){ $test['staffroom']="Available";}else {if($test['staffroom']=='0') {
					$test['staffroom']="No";}else { $test['staffroom']="";}}
				echo"<td align='right'><font color='black'>". $test['staffroom']. "</font></td>";
				
				$kit=$kit+$test['kitchen'];
				if($test['kitchen']=='1'){ $test['kitchen']="Available";}else {if($test['kitchen']=='0') {
					$test['kitchen']="No";}else { $test['kitchen']="";}}
				echo"<td align='right'><font color='black'>". $test['kitchen']. "</font></td>";
				
				$can=$can+$test['canteen'];
				if($test['canteen']=='1'){ $test['canteen']="Available";}else {if($test['canteen']=='0') {
					$test['canteen']="No";}else { $test['canteen']="";}}
				echo"<td align='right'><font color='black'>". $test['canteen']. "</font></td>";
				
				$play=$play+$test['playground'];
				if($test['playground']=='1'){ $test['playground']="Available";}else {if($test['playground']=='0') {
					$test['playground']="No";}else { $test['playground']="";}}
				echo"<td align='right'><font color='black'>". $test['playground']. "</font></td>";
				
				$dent=$dent+$test['dental'];
				if($test['dental']=='1'){ $test['dental']="Available";}else {if($test['dental']=='0') {
					$test['dental']="No";}else { $test['dental']="";}}
				echo"<td align='right'><font color='black'>". $test['dental']. "</font></td>";
				
				$ban=$ban+$test['bank'];
				if($test['bank']=='1'){ $test['bank']="Available";}else {if($test['bank']=='0') {
					$test['bank']="No";}else { $test['bank']="";}}
				echo"<td align='right'><font color='black'>". $test['bank']. "</font></td>";
				
				if($test['MTlab']=='TypeI'){
				$mtlb1=$mtlb1+1;
				}
				if($test['MTlab']=='TypeII'){
				$mtlb2=$mtlb2+1;
				}	
				if($test['MTlab']=='TypeI' or $test['MTlab']=='TypeII'){
				$mtlb=$mtlb+1;
				}				
								
				echo"<td colspan=3 align='right'><font color='black'>". $test['MTlab']. "</font></td>";
				
				
					
				
				$mtf=$mtf+$test['MTfaculty'];
				if($test['MTfaculty']=='1'){ $test['MTfaculty']="Available";}else {if($test['MTfaculty']=='0') {
					$test['MTfaculty']="No";}else { $test['MTfaculty']="";}}
				echo"<td align='right'><font color='black'>". $test['MTfaculty']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['boundary']. "</font></td>";
				
				
				//$TotM=$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];					
				//$TotF=$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				//$Tot=$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				//$TotPClass=$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];
				//echo"<td align='right'><font color='black'>". $TotM. "</font></td>";
				//echo"<td align='right'><font color='black'>". $TotF. "</font></td>";
				//echo"<td align='right'><font color='black'>". $Tot. "</font></td>";
				//echo"<td align='right'><font color='black'>". $TotPClass. "</font></td>";
				echo "</tr>";
				//$ele=$ele+$test['electricity'];
				//$g1f=$g1f+$test['G1F'];
				//$g1tot=$g1tot+$test['G1Tot'];
				//$g1pclass=$g1pclass+$test['G1PClass'];
				//$g2m=$g2m+$test['G2M'];
				//$g2f=$g2f+$test['G2F'];
				//$g2tot=$g2tot+$test['G2Tot'];
				//$g2pclass=$g2pclass+$test['G2PClass'];
				//$g3m=$g3m+$test['G3M'];
				//$g3f=$g3f+$test['G3F'];
				//$g3tot=$g3tot+$test['G3Tot'];
				//$g3pclass=$g3pclass+$test['G3PClass'];
				//$g4m=$g4m+$test['G4M'];
				//$g4f=$g4f+$test['G4F'];
				//$g4tot=$g4tot+$test['G4Tot'];
				//$g4pclass=$g4pclass+$test['G4PClass'];
				//$g5m=$g5m+$test['G5M'];
				//$g5f=$g5f+$test['G5F'];
				//$g5tot=$g5tot+$test['G5Tot'];
				//$g5pclass=$g5pclass+$test['G5PClass'];
				//$m=$m+$TotM;
				//$f=$f+$TotF;
				//$t=$t+$Tot;
				//$pcl=$pcl+$TotPClass;
				$count=$count+1;
				
				
			}
			mysql_close($conn);
			
			?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Provincial Total</td>
			<td align="center"><strong><?php echo $g10Bus ?></strong></td>
			<td align="center"><strong><?php echo $g10Geo ?></strong></td>
			<td align="center"><strong><?php echo $g10Citi ?></strong></td>
			<td align="center"><strong><?php echo $g10Entre ?></strong></td>
			<td align="center"><strong><?php echo $g102ndLanSin ?></strong></td>
			<td align="center"><strong><?php echo $g102ndLanTam ?></strong></td>
			<td align="center"><strong><?php echo $g10San ?></strong></td>
			<td align="center"><strong><?php echo $g10Ara ?></strong></td>
			<td align="center"><strong><?php echo $g101stTot ?></strong></td>
			<td align="center"><strong><?php echo $g11Bus ?></strong></td>
			<td align="center"><strong><?php echo $g11Geo ?></strong></td>
			<td align="center"><strong><?php echo $g11Citi ?></strong></td>
			<td align="center"><strong><?php echo $g11Entre ?></strong></td>
			<td align="center"><strong><?php echo $g112ndLanSin ?></strong></td>
			<td align="center"><strong><?php echo $g112ndLanTam ?></strong></td>
			<td align="center"><strong><?php echo $g11San ?></strong></td>
			<td align="center"><strong><?php echo $g11Ara ?></strong></td>
			<td align="center"><strong><?php echo $g111stTot ?></strong></td>
			<td align="center"><strong><?php echo $g11RBus ?></strong></td>
			<td align="center"><strong><?php echo $g11RGeo ?></strong></td>
			<td align="center"><strong><?php echo $g11RCiti ?></strong></td>
			<td align="center"><strong><?php echo $g11REntre ?></strong></td>
			<td align="center"><strong><?php echo $g11R2ndLanSin ?></strong></td>
			<td align="center"><strong><?php echo $g11R2ndLanTam ?></strong></td>
			<td align="center"><strong><?php echo $g11RSan ?></strong></td>
			<td align="center"><strong><?php echo $g11RAra ?></strong></td>
			<td align="center"><strong><?php echo $g11R1stTot ?></strong></td>
											
			<td align="center"><strong><?php echo $Bus ?></strong></td>
			<td align="center"><strong><?php echo $Geo ?></strong></td>
			<td align="center"><strong><?php echo $Citi ?></strong></td>
			<td align="center"><strong><?php echo $Entre ?></strong></td>
			<td align="center"><strong><?php echo $SecondLanSin ?></strong></td>
			<td align="center"><strong><?php echo $SecondLanTam ?></strong></td>
			<td align="center"><strong><?php echo $San ?></strong></td>
			<td align="center"><strong><?php echo $Ara ?></strong></td>
			<td align="center"><strong><?php echo $FirstTot ?></strong></td>
			</tr>
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
