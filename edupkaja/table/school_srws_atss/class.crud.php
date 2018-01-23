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
				$count=1;
				$g12TechEngi=0;
				$g12TechBioS=0;
				$g12TechScie=0;
				$g12TechnICT=0;
				$g12TechnArt=0;
				$g12TechBuis=0;
				$g12TechAgro=0;
				$g12TechnAcco=0;
				$g12TechnEcon=0;
				$g12TechHomeEco=0;
				$g12TechGeog=0;
				$g12TechEngl=0;
				$g12TechCommuMed=0;
				$g12TechTot=0;
				$g13TechEngi=0;
				$g13TechBioS=0;
				$g13TechScie=0;
				$g13TechnICT=0;
				$g13TechnArt=0;
				$g13TechBuis=0;
				$g13TechAgro=0;
				$g13TechnAcco=0;
				$g13TechnEcon=0;
				$g13TechHomeEco=0;
				$g13TechGeog=0;
				$g13TechEngl=0;
				$g13TechCommuMed=0;
				$g13TechTot=0;
				$g13RTechEngi=0;
				$g13RTechBioS=0;
				$g13RTechScie=0;
				$g13RTechnICT=0;
				$g13RTechnArt=0;
				$g13RTechBuis=0;
				$g13RTechAgro=0;
				$g13RTechnAcco=0;
				$g13RTechnEcon=0;
				$g13RTechHomeEco=0;
				$g13RTechGeog=0;
				$g13RTechEngl=0;
				$g13RTechCommuMed=0;
				$g13RTechTot=0;
				$TechEngi=0;
				$TechBioS=0;
				$TechScie=0;
				$TechnICT=0;
				$TechnArt=0;
				$TechBuis=0;
				$TechAgro=0;
				$TechAcco=0;
				$TechEcon=0;
				$TechHomeEco=0;
				$TechGeog=0;
				$TechEngl=0;
				$TechCommuMed=0;
				$TechTot=0;
												
			$result=mysql_query("$sql Order By ZoneSort,Division ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G12TechEngineering']+$test['G12TechBioSystem']+$test['G12TechScienceTechnology']+$test['G12TechICT']+$test['G12TechArt']+$test['G12TechBuisnessStudies']+$test['G12TechAgroScience']+$test['G12TechAccounts']+$test['G12TechEconomics']+$test['G12TechHomeEconomics']+$test['G12TechGeography']+$test['G12TechEnglish']+$test['G12TechCommuMediaStudies']+$test['G12TechTotal']+$test['G13TechEngineering']+$test['G13TechBioSystem']+$test['G13TechScienceTechnology']+$test['G13TechICT']+$test['G13TechArt']+$test['G13TechBuisnessStudies']+$test['G13TechAgroScience']+$test['G13TechAccounts']+$test['G13TechEconomics']+$test['G13TechHomeEconomics']+$test['G13TechGeography']+$test['G13TechEnglish']+$test['G13TechCommuMediaStudies']+$test['G13TechTotal']+$test['G13RTechEngineering']+$test['G13RTechBioSystem']+$test['G13RTechScienceTechnology']+$test['G13RTechICT']+$test['G13RTechArt']+$test['G13RTechBuisnessStudies']+$test['G13RTechAgroScience']+$test['G13RTechAccounts']+$test['G13RTechEconomics']+$test['G13RTechHomeEconomics']+$test['G13RTechGeography']+$test['G13RTechEnglish']+$test['G13RTechCommuMediaStudies']+$test['G13RTechTotal'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Division']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Zone']. "</font></td>";
								
				echo"<td align='right'><font color='black'>". $test['G12TechEngineering']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechBioSystem']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechScienceTechnology']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechBuisnessStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechAccounts']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechHomeEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12TechCommuMediaStudies']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G12TechTotal']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13TechEngineering']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechBioSystem']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechScienceTechnology']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechBuisnessStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechAccounts']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechHomeEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13TechCommuMediaStudies']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13TechTotal']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13RTechEngineering']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechBioSystem']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechScienceTechnology']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechBuisnessStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechAccounts']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechHomeEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RTechCommuMediaStudies']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13RTechTotal']. "</font></td>";
				
			
				$TotTechEngi=$test['G12TechEngineering']+$test['G13TechEngineering']+$test['G13RTechEngineering'];
				$TotTechBioS=$test['G12TechBioSystem']+$test['G13TechBioSystem']+$test['G13RTechBioSystem'];
				$TotTechScie=$test['G12TechScienceTechnology']+$test['G13TechScienceTechnology']+$test['G13RTechScienceTechnology'];
				$TotTechICT=$test['G12TechICT']+$test['G13TechICT']+$test['G13RTechICT'];
				$TotTechArt=$test['G12TechArt']+$test['G13TechArt']+$test['G13RTechArt'];
				$TotTechBuis=$test['G12TechBuisnessStudies']+$test['G13TechBuisnessStudies']+$test['G13RTechBuisnessStudies'];
				$TotTechAgro=$test['G12TechAgroScience']+$test['G13TechAgroScience']+$test['G13RTechAgroScience'];
				$TotTechAcco=$test['G12TechAccounts']+$test['G13TechAccounts']+$test['G13RTechAccounts'];
				$TotTechEcon=$test['G12TechEconomics']+$test['G13TechEconomics']+$test['G13RTechEconomics'];
				$TotTechHomeEco=$test['G12TechHomeEconomics']+$test['G13TechHomeEconomics']+$test['G13RTechHomeEconomics'];
				$TotTechGeog=$test['G12TechGeography']+$test['G13TechGeography']+$test['G13RTechGeography'];
				$TotTechEngl=$test['G12TechEnglish']+$test['G13TechEnglish']+$test['G13RTechEnglish'];
				$TotTechCommuMed=$test['G12TechCommuMediaStudies']+$test['G13TechCommuMediaStudies']+$test['G13RTechCommuMediaStudies'];
				$TotTechTotal=$test['G12TechTotal']+$test['G13TechTotal']+$test['G13RTechTotal'];
								
				echo"<td align='right'><font color='black'>". $TotTechEngi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechBioS. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechScie. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechICT. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechArt. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechBuis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechAgro. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechAcco. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechEcon. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechHomeEco. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechGeog. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechEngl. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTechCommuMed. "</font></td>";
				//echo"<td align='right'><font color='black'>". $TotTechTotal. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g12TechEngi=$g12TechEngi+$test['G12TechEngineering'];
				$g12TechBioS=$g12TechBioS+$test['G12TechBioSystem'];
				$g12TechScie=$g12TechScie+$test['G12TechScienceTechnology'];
				$g12TechnICT=$g12TechnICT+$test['G12TechICT'];
				$g12TechnArt=$g12TechnArt+$test['G12TechArt'];
				$g12TechBuis=$g12TechBuis+$test['G12TechBuisnessStudies'];
				$g12TechAgro=$g12TechAgro+$test['G12TechAgroScience'];
				$g12TechnAcco=$g12TechnAcco+$test['G12TechAccounts'];
				$g12TechnEcon=$g12TechnEcon+$test['G12TechEconomics'];
				$g12TechHomeEco=$g12TechHomeEco+$test['G12TechHomeEconomics'];
				$g12TechGeog=$g12TechGeog+$test['G12TechGeography'];
				$g12TechEngl=$g12TechEngl+$test['G12TechEnglish'];
				$g12TechCommuMed=$g12TechCommuMed+$test['G12TechCommuMediaStudies'];
				$g12TechTot=$g12TechTot+$test['G12TechTotal'];
								
				$g13TechEngi=$g13TechEngi+$test['G13TechEngineering'];
				$g13TechBioS=$g13TechBioS+$test['G13TechBioSystem'];
				$g13TechScie=$g13TechScie+$test['G13TechScienceTechnology'];
				$g13TechnICT=$g13TechnICT+$test['G13TechICT'];
				$g13TechnArt=$g13TechnArt+$test['G13TechArt'];
				$g13TechBuis=$g13TechBuis+$test['G13TechBuisnessStudies'];
				$g13TechAgro=$g13TechAgro+$test['G13TechAgroScience'];
				$g13TechnAcco=$g13TechnAcco+$test['G13TechAccounts'];
				$g13TechnEcon=$g13TechnEcon+$test['G13TechEconomics'];
				$g13TechHomeEco=$g13TechHomeEco+$test['G13TechHomeEconomics'];
				$g13TechGeog=$g13TechGeog+$test['G13TechGeography'];
				$g13TechEngl=$g13TechEngl+$test['G13TechEnglish'];
				$g13TechCommuMed=$g13TechCommuMed+$test['G13TechCommuMediaStudies'];
				$g13TechTot=$g13TechTot+$test['G13TechTotal'];
				
				$g13RTechEngi=$g13RTechEngi+$test['G13RTechEngineering'];
				$g13RTechBioS=$g13RTechBioS+$test['G13RTechBioSystem'];
				$g13RTechScie=$g13RTechScie+$test['G13RTechScienceTechnology'];
				$g13RTechnICT=$g13RTechnICT+$test['G13RTechICT'];
				$g13RTechnArt=$g13RTechnArt+$test['G13RTechArt'];
				$g13RTechBuis=$g13RTechBuis+$test['G13RTechBuisnessStudies'];
				$g13RTechAgro=$g13RTechAgro+$test['G13RTechAgroScience'];
				$g13RTechnAcco=$g13RTechnAcco+$test['G13RTechAccounts'];
				$g13RTechnEcon=$g13RTechnEcon+$test['G13RTechEconomics'];
				$g13RTechHomeEco=$g13RTechHomeEco+$test['G13RTechHomeEconomics'];
				$g13RTechGeog=$g13RTechGeog+$test['G13RTechGeography'];
				$g13RTechEngl=$g13RTechEngl+$test['G13RTechEnglish'];
				$g13RTechCommuMed=$g13RTechCommuMed+$test['G13RTechCommuMediaStudies'];
				$g13RTechTot=$g13RTechTot+$test['G13RTechTotal'];
											
				$TechEngi=$TechEngi+$TotTechEngi;
				$TechBioS=$TechBioS+$TotTechBioS;
				$TechScie=$TechScie+$TotTechScie;
				$TechnICT=$TechnICT+$TotTechICT;
				$TechnArt=$TechnArt+$TotTechArt;
				$TechBuis=$TechBuis+$TotTechBuis;
				$TechAgro=$TechAgro+$TotTechAgro;
				$TechAcco=$TechAcco+$TotTechAcco;
				$TechEcon=$TechEcon+$TotTechEcon;
				$TechHomeEco=$TechHomeEco+$TotTechHomeEco;
				$TechGeog=$TechGeog+$TotTechGeog;
				$TechEngl=$TechEngl+$TotTechEngl;
				$TechCommuMed=$TechCommuMed+$TotTechCommuMed;
				$TechTot=$TechTot+$TotTechTotal;
				
								
				$count=$count+1;
				}
			}

		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
			
			<td colspan='6'>Provincial Total</td>
			
			<td align="center"><strong><?php echo $g12TechEngi ?></strong></td>
			<td align="center"><strong><?php echo $g12TechBioS ?></strong></td>
			<td align="center"><strong><?php echo $g12TechScie ?></strong></td>
			<td align="center"><strong><?php echo $g12TechnICT ?></strong></td>
			<td align="center"><strong><?php echo $g12TechnArt ?></strong></td>
			<td align="center"><strong><?php echo $g12TechBuis ?></strong></td>
			<td align="center"><strong><?php echo $g12TechAgro ?></strong></td>
			<td align="center"><strong><?php echo $g12TechnAcco ?></strong></td>
			<td align="center"><strong><?php echo $g12TechnEcon ?></strong></td>
			<td align="center"><strong><?php echo $g12TechHomeEco ?></strong></td>
			<td align="center"><strong><?php echo $g12TechGeog ?></strong></td>
			<td align="center"><strong><?php echo $g12TechEngl ?></strong></td>
			<td align="center"><strong><?php echo $g12TechCommuMed ?></strong></td>
			<!--<td align="center"><strong><?php echo $g12TechTot ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13TechEngi ?></strong></td>
			<td align="center"><strong><?php echo $g13TechBioS ?></strong></td>
			<td align="center"><strong><?php echo $g13TechScie ?></strong></td>
			<td align="center"><strong><?php echo $g13TechnICT ?></strong></td>
			<td align="center"><strong><?php echo $g13TechnArt ?></strong></td>
			<td align="center"><strong><?php echo $g13TechBuis ?></strong></td>
			<td align="center"><strong><?php echo $g13TechAgro ?></strong></td>
			<td align="center"><strong><?php echo $g13TechnAcco ?></strong></td>
			<td align="center"><strong><?php echo $g13TechnEcon ?></strong></td>
			<td align="center"><strong><?php echo $g13TechHomeEco ?></strong></td>
			<td align="center"><strong><?php echo $g13TechGeog ?></strong></td>
			<td align="center"><strong><?php echo $g13TechEngl ?></strong></td>
			<td align="center"><strong><?php echo $g13TechCommuMed ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13TechTot ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13RTechEngi ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechBioS ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechScie ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechnICT ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechnArt ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechBuis ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechAgro ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechnAcco ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechnEcon ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechHomeEco ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechGeog ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechEngl ?></strong></td>
			<td align="center"><strong><?php echo $g13RTechCommuMed ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13RTechTot ?></strong></td>-->
																					
			<td align="center"><strong><?php echo $TechEngi ?></strong></td>
			<td align="center"><strong><?php echo $TechBioS ?></strong></td>
			<td align="center"><strong><?php echo $TechScie ?></strong></td>
			<td align="center"><strong><?php echo $TechnICT ?></strong></td>
			<td align="center"><strong><?php echo $TechnArt ?></strong></td>
			<td align="center"><strong><?php echo $TechBuis ?></strong></td>
			<td align="center"><strong><?php echo $TechAgro ?></strong></td>
			<td align="center"><strong><?php echo $TechAcco ?></strong></td>
			<td align="center"><strong><?php echo $TechEcon ?></strong></td>
			<td align="center"><strong><?php echo $TechHomeEco ?></strong></td>
			<td align="center"><strong><?php echo $TechGeog ?></strong></td>
			<td align="center"><strong><?php echo $TechEngl ?></strong></td>
			<td align="center"><strong><?php echo $TechCommuMed ?></strong></td>
			<!--<td align="center"><strong><?php echo $TechTot ?></strong></td>-->
			
			
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
