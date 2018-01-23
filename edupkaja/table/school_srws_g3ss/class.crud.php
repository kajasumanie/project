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
				$g10ICT=0;
				$g10Agr=0;
				$g10Fish=0;
				$g10Des=0;
				$g10Art=0;
				$g10Home=0;
				$g10Helth=0;
				$g10Comm=0;
				$g10EleEng=0;
				$g10EleTam=0;
				$g10EleSin=0;
				$g103rdTot=0;
				$g11ICT=0;
				$g11Agr=0;
				$g11Fish=0;
				$g11Des=0;
				$g11Art=0;
				$g11Home=0;
				$g11Helth=0;
				$g11Comm=0;
				$g11EleEng=0;
				$g11EleTam=0;
				$g11EleSin=0;
				$g113rdTot=0;
				$g11RICT=0;
				$g11RAgr=0;
				$g11RFish=0;
				$g11RDes=0;
				$g11RArt=0;
				$g11RHome=0;
				$g11RHelth=0;
				$g11RComm=0;
				$g11REleEng=0;
				$g11REleTam=0;
				$g11REleSin=0;
				$g11R3rdTot=0;
				$ICT=0;
				$AgriFoodTec=0;
				$FisherFoodTec=0;
				$DesignTec=0;
				$ArtsCrafts=0;
				$HomeEco=0;
				$HelthPhyEdu=0;
				$CommuMedA=0;
				$EleWriShortEng=0;
				$EleWriShortTam=0;
				$EleWriShortSin=0;
				$thirdTot=0;
				
							
			$result=mysql_query("$sql Order By Zone ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G10ICT']+$test['G11ICT']+$test['G11RICT']+$test['G10AgriFoodTec']+$test['G11AgriFoodTec']+$test['G11RAgriFoodTec']+$test['G10FisherFoodTec']+$test['G11FisherFoodTec']+$test['G11RFisherFoodTec']+$test['G10DesignTec']+$test['G11DesignTec']+$test['G11RDesignTec']+$test['G10ArtsCrafts']+$test['G11ArtsCrafts']+$test['G11RArtsCrafts']+$test['G10HomeEco']+$test['G11HomeEco']+$test['G11RHomeEco']+$test['G10HelthPhyEdu']+$test['G11HelthPhyEdu']+$test['G11RHelthPhyEdu']+$test['G10CommuMedA']+$test['G11CommuMedA']+$test['G11RCommuMedA']+$test['G10EleWriShortEng']+$test['G11EleWriShortEng']+$test['G11REleWriShortEng']+$test['G10EleWriShortTam']+$test['G11EleWriShortTam']+$test['G11REleWriShortTam']+$test['G10EleWriShortSin']+$test['G11EleWriShortSin']+$test['G11REleWriShortSin']+$test['G103rdGroupTot']+$test['G113rdGroupTot']+$test['G11R3rdGroupTot'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
								
				echo"<td align='right'><font color='black'>". $test['G10ICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10AgriFoodTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10FisherFoodTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10DesignTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10ArtsCrafts']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10HomeEco']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10HelthPhyEdu']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10CommuMedA']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10EleWriShortEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10EleWriShortTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10EleWriShortSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G103rdGroupTot']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G11ICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11AgriFoodTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11FisherFoodTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11DesignTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11ArtsCrafts']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11HomeEco']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11HelthPhyEdu']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11CommuMedA']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11EleWriShortEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11EleWriShortTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11EleWriShortSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G113rdGroupTot']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G11RICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RAgriFoodTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RFisherFoodTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RDesignTec']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RArtsCrafts']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RHomeEco']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RHelthPhyEdu']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RCommuMedA']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11REleWriShortEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11REleWriShortTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11REleWriShortSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11R3rdGroupTot']. "</font></td>";
				
				$TotICT=$test['G10ICT']+$test['G11ICT']+$test['G11RICT'];
				$TotAgriFoodTec=$test['G10AgriFoodTec']+$test['G11AgriFoodTec']+$test['G11RAgriFoodTec'];
				$TotFisherFoodTec=$test['G10FisherFoodTec']+$test['G11FisherFoodTec']+$test['G11RFisherFoodTec'];
				$TotDesignTec=$test['G10DesignTec']+$test['G11DesignTec']+$test['G11RDesignTec'];
				$TotArtsCrafts=$test['G10ArtsCrafts']+$test['G11ArtsCrafts']+$test['G11RArtsCrafts'];
				$TotHomeEco=$test['G10HomeEco']+$test['G11HomeEco']+$test['G11RHomeEco'];
				$TotHelthPhyEdu=$test['G10HelthPhyEdu']+$test['G11HelthPhyEdu']+$test['G11RHelthPhyEdu'];
				$TotCommuMedA=$test['G10CommuMedA']+$test['G11CommuMedA']+$test['G11RCommuMedA'];
				$TotEleWriShortEng=$test['G10EleWriShortEng']+$test['G11EleWriShortEng']+$test['G11REleWriShortEng'];
				$TotEleWriShortTam=$test['G10EleWriShortTam']+$test['G11EleWriShortTam']+$test['G11REleWriShortTam'];
				$TotEleWriShortSin=$test['G10EleWriShortSin']+$test['G11EleWriShortSin']+$test['G11REleWriShortSin'];
				
				$Tot3rdTot=$test['G103rdGroupTot']+$test['G113rdGroupTot']+$test['G11R3rdGroupTot'];
				
				echo"<td align='right'><font color='black'>". $TotICT. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotAgriFoodTec. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotFisherFoodTec. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotDesignTec. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsCrafts. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotHomeEco. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotHelthPhyEdu. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotCommuMedA. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotEleWriShortEng. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotEleWriShortTam. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotEleWriShortSin. "</font></td>";
				echo"<td align='right'><font color='black'>". $Tot3rdTot. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g10ICT=$g10ICT+$test['G10ICT'];
				$g10Agr=$g10Agr+$test['G10AgriFoodTec'];
				$g10Fish=$g10Fish+$test['G10FisherFoodTec'];
				$g10Des=$g10Des+$test['G10DesignTec'];
				$g10Art=$g10Art+$test['G10ArtsCrafts'];
				$g10Home=$g10Home+$test['G10HomeEco'];
				$g10Helth=$g10Helth+$test['G10HelthPhyEdu'];
				$g10Comm=$g10Comm+$test['G10CommuMedA'];
				$g10EleEng=$g10EleEng+$test['G10EleWriShortEng'];
				$g10EleTam=$g10EleTam+$test['G10EleWriShortTam'];
				$g10EleSin=$g10EleSin+$test['G10EleWriShortSin'];
				$g103rdTot=$g103rdTot+$test['G103rdGroupTot'];
				
				$g11ICT=$g11ICT+$test['G11ICT'];
				$g11Agr=$g11Agr+$test['G11AgriFoodTec'];
				$g11Fish=$g11Fish+$test['G11FisherFoodTec'];
				$g11Des=$g11Des+$test['G11DesignTec'];
				$g11Art=$g11Art+$test['G11ArtsCrafts'];
				$g11Home=$g11Home+$test['G11HomeEco'];
				$g11Helth=$g11Helth+$test['G11HelthPhyEdu'];
				$g11Comm=$g11Comm+$test['G11CommuMedA'];
				$g11EleEng=$g11EleEng+$test['G11EleWriShortEng'];
				$g11EleTam=$g11EleTam+$test['G11EleWriShortTam'];
				$g11EleSin=$g11EleSin+$test['G11EleWriShortSin'];
				$g113rdTot=$g113rdTot+$test['G113rdGroupTot'];
				
				$g11RICT=$g11RICT+$test['G11RICT'];
				$g11RAgr=$g11RAgr+$test['G11RAgriFoodTec'];
				$g11RFish=$g11RFish+$test['G11RFisherFoodTec'];
				$g11RDes=$g11RDes+$test['G11RDesignTec'];
				$g11RArt=$g11RArt+$test['G11RArtsCrafts'];
				$g11RHome=$g11RHome+$test['G11RHomeEco'];
				$g11RHelth=$g11RHelth+$test['G11RHelthPhyEdu'];
				$g11RComm=$g11RComm+$test['G11RCommuMedA'];
				$g11REleEng=$g11REleEng+$test['G11REleWriShortEng'];
				$g11REleTam=$g11REleTam+$test['G11REleWriShortTam'];
				$g11REleSin=$g11REleSin+$test['G11REleWriShortSin'];
				$g11R3rdTot=$g11R3rdTot+$test['G11R3rdGroupTot'];
				
				$ICT=$ICT+$TotICT;
				$AgriFoodTec=$AgriFoodTec+$TotAgriFoodTec;
				$FisherFoodTec=$FisherFoodTec+$TotFisherFoodTec;
				$DesignTec=$DesignTec+$TotDesignTec;
				$ArtsCrafts=$ArtsCrafts+$TotArtsCrafts;
				$HomeEco=$HomeEco+$TotHomeEco;
				$HelthPhyEdu=$HelthPhyEdu+$TotHelthPhyEdu;
				$CommuMedA=$CommuMedA+$TotCommuMedA;
				$EleWriShortEng=$EleWriShortEng+$TotEleWriShortEng;
				$EleWriShortTam=$EleWriShortTam+$TotEleWriShortTam;
				$EleWriShortSin=$EleWriShortSin+$TotEleWriShortSin;
				$thirdTot=$thirdTot+$Tot3rdTot;
								
				$count=$count+1;
				}
			}
		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Provincial Total</td>
			
			<td align="center"><strong><?php echo $g10ICT ?></strong></td>
			<td align="center"><strong><?php echo $g10Agr ?></strong></td>
			<td align="center"><strong><?php echo $g10Fish ?></strong></td>
			<td align="center"><strong><?php echo $g10Des ?></strong></td>
			<td align="center"><strong><?php echo $g10Art ?></strong></td>
			<td align="center"><strong><?php echo $g10Home ?></strong></td>
			<td align="center"><strong><?php echo $g10Helth ?></strong></td>
			<td align="center"><strong><?php echo $g10Comm ?></strong></td>
			<td align="center"><strong><?php echo $g10EleEng ?></strong></td>
			<td align="center"><strong><?php echo $g10EleTam ?></strong></td>
			<td align="center"><strong><?php echo $g10EleSin ?></strong></td>
			<td align="center"><strong><?php echo $g103rdTot ?></strong></td>
			
			<td align="center"><strong><?php echo $g11ICT ?></strong></td>
			<td align="center"><strong><?php echo $g11Agr ?></strong></td>
			<td align="center"><strong><?php echo $g11Fish ?></strong></td>
			<td align="center"><strong><?php echo $g11Des ?></strong></td>
			<td align="center"><strong><?php echo $g11Art ?></strong></td>
			<td align="center"><strong><?php echo $g11Home ?></strong></td>
			<td align="center"><strong><?php echo $g11Helth ?></strong></td>
			<td align="center"><strong><?php echo $g11Comm ?></strong></td>
			<td align="center"><strong><?php echo $g11EleEng ?></strong></td>
			<td align="center"><strong><?php echo $g11EleTam ?></strong></td>
			<td align="center"><strong><?php echo $g11EleSin ?></strong></td>
			<td align="center"><strong><?php echo $g113rdTot ?></strong></td>
			
			<td align="center"><strong><?php echo $g11RICT ?></strong></td>
			<td align="center"><strong><?php echo $g11RAgr ?></strong></td>
			<td align="center"><strong><?php echo $g11RFish ?></strong></td>
			<td align="center"><strong><?php echo $g11RDes ?></strong></td>
			<td align="center"><strong><?php echo $g11RArt ?></strong></td>
			<td align="center"><strong><?php echo $g11RHome ?></strong></td>
			<td align="center"><strong><?php echo $g11RHelth ?></strong></td>
			<td align="center"><strong><?php echo $g11RComm ?></strong></td>
			<td align="center"><strong><?php echo $g11REleEng ?></strong></td>
			<td align="center"><strong><?php echo $g11REleTam ?></strong></td>
			<td align="center"><strong><?php echo $g11REleSin ?></strong></td>
			<td align="center"><strong><?php echo $g11R3rdTot ?></strong></td>
											
			<td align="center"><strong><?php echo $ICT ?></strong></td>
			<td align="center"><strong><?php echo $AgriFoodTec ?></strong></td>
			<td align="center"><strong><?php echo $FisherFoodTec ?></strong></td>
			<td align="center"><strong><?php echo $DesignTec ?></strong></td>
			<td align="center"><strong><?php echo $ArtsCrafts ?></strong></td>
			<td align="center"><strong><?php echo $HomeEco ?></strong></td>
			<td align="center"><strong><?php echo $HelthPhyEdu ?></strong></td>
			<td align="center"><strong><?php echo $CommuMedA ?></strong></td>
			<td align="center"><strong><?php echo $EleWriShortEng ?></strong></td>
			<td align="center"><strong><?php echo $EleWriShortTam ?></strong></td>
			<td align="center"><strong><?php echo $EleWriShortSin ?></strong></td>
			<td align="center"><strong><?php echo $thirdTot ?></strong></td>
			
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
				echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=1&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>First</a></li>";
				echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$previous."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Previous</a></li>";
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
					echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?table=school_srws_g3sst&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
				}
				}
				else{
					if($current_page==1){
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i<6 && $i>1)
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}
					if($current_page==2){
						if($i == 1)
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i<6 && $i>2)
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}
					if($current_page==3){
						if($i < 3)
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i<6 && $i>3)
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}

					if($current_page > 3 && $current_page < ($total_no_of_pages-2) ){
						if($i < $current_page && $i >($current_page-3))
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i>$current_page && $i<($current_page+3))
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					else
					{
						$more= "<li><a >".'...'."</a></li>";
					}

					}
					if($current_page >= ($total_no_of_pages-2) ){
						if($i < $current_page && $i >($current_page-3))
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}
					if($i==$current_page)
					{
					echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$current_page."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$current_page."</a></li>";

					}
					if($i>$current_page && $i<($current_page+3))
					{
						echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
					}


					}

				}
			}
			echo $more;
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$next."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Next</a></li>";
				echo "<li><a href='".$self."?table=school_srws_g3ss&page_no=".$total_no_of_pages."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Last</a></li>";
			}
			?></ul><?php
		}
	}

	/* paging */

}
