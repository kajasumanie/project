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
				
				$g10Bus=0;
				$g10Geo=0;
				$g10Citi=0;
				$g10Entre=0;
				$g102ndLanSin=0;
				$g102ndLanTam=0;
				$g10San=0;
				$g10Ara=0;
				$g101stTot=0;
				$g11Bus=0;
				$g11Geo=0;
				$g11Citi=0;
				$g11Entre=0;
				$g112ndLanSin=0;
				$g112ndLanTam=0;
				$g11San=0;
				$g11Ara=0;
				$g111stTot=0;
				$g11RBus=0;
				$g11RGeo=0;
				$g11RCiti=0;
				$g11REntre=0;
				$g11R2ndLanSin=0;
				$g11R2ndLanTam=0;
				$g11RSan=0;
				$g11RAra=0;
				$g11R1stTot=0;
				$Bus=0;
				$Geo=0;
				$Citi=0;
				$Entre=0;
				$SecondLanSin=0;
				$SecondLanTam=0;
				$San=0;
				$Ara=0;
				$FirstTot=0;

									
			$result=mysql_query("$sql Order By Zone ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G10BusAccStu']+$test['G11BusAccStu']+$test['G11RBusAccStu']+$test['G10Geo']+$test['G11Geo']+$test['G11RGeo']+$test['G10CitiEduGov']+$test['G11CitiEduGov']+$test['G11RCitiEduGov']+$test['G10EntreStudies']+$test['G11EntreStudies']+$test['G11REntreStudies']+$test['G102ndLangSin']+$test['G112ndLangSin']+$test['G11R2ndLangSin']+$test['G102ndLangTam']+$test['G112ndLangTam']+$test['G11R2ndLangTam']+$test['G10Sanskrit']+$test['G11Sanskrit']+$test['G11RSanskrit']+$test['G10Arabic']+$test['G11Arabic']+$test['G11RArabic']+$test['G101stGroupTot']+$test['G111stGroupTot']+$test['G11R1stGroupTot'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10BusAccStu']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10Geo']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10CitiEduGov']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10EntreStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G102ndLangSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G102ndLangTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10Sanskrit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10Arabic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G101stGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11BusAccStu']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11Geo']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11CitiEduGov']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11EntreStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G112ndLangSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G112ndLangTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11Sanskrit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11Arabic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G111stGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RBusAccStu']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RGeo']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RCitiEduGov']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11REntreStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11R2ndLangSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11R2ndLangTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RSanskrit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RArabic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11R1stGroupTot']. "</font></td>";
				
				$TotBus=$test['G10BusAccStu']+$test['G11BusAccStu']+$test['G11RBusAccStu'];
				$TotGeo=$test['G10Geo']+$test['G11Geo']+$test['G11RGeo'];
				$TotCiti=$test['G10CitiEduGov']+$test['G11CitiEduGov']+$test['G11RCitiEduGov'];
				$TotEntre=$test['G10EntreStudies']+$test['G11EntreStudies']+$test['G11REntreStudies'];
				$Tot2ndLanSin=$test['G102ndLangSin']+$test['G112ndLangSin']+$test['G11R2ndLangSin'];
				$Tot2ndLanTam=$test['G102ndLangTam']+$test['G112ndLangTam']+$test['G11R2ndLangTam'];
				$TotSan=$test['G10Sanskrit']+$test['G11Sanskrit']+$test['G11RSanskrit'];
				$TotAra=$test['G10Arabic']+$test['G11Arabic']+$test['G11RArabic'];
				$Tot1stTot=$test['G101stGroupTot']+$test['G111stGroupTot']+$test['G11R1stGroupTot'];
				
				echo"<td align='right'><font color='black'>". $TotBus. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotGeo. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotCiti. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotEntre. "</font></td>";
				echo"<td align='right'><font color='black'>". $Tot2ndLanSin. "</font></td>";
				echo"<td align='right'><font color='black'>". $Tot2ndLanTam. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotSan. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotAra. "</font></td>";
				echo"<td align='right'><font color='black'>". $Tot1stTot. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g10Bus=$g10Bus+$test['G10BusAccStu'];
				$g10Geo=$g10Geo+$test['G10Geo'];
				$g10Citi=$g10Citi+$test['G10CitiEduGov'];
				$g10Entre=$g10Entre+$test['G10EntreStudies'];
				$g102ndLanSin=$g102ndLanSin+$test['G102ndLangSin'];
				$g102ndLanTam=$g102ndLanTam+$test['G102ndLangTam'];
				$g10San=$g10San+$test['G10Sanskrit'];
				$g10Ara=$g10Ara+$test['G10Arabic'];
				$g101stTot=$g101stTot+$test['G101stGroupTot'];
				$g11Bus=$g11Bus+$test['G11BusAccStu'];
				$g11Geo=$g11Geo+$test['G11Geo'];
				$g11Citi=$g11Citi+$test['G11CitiEduGov'];
				$g11Entre=$g11Entre+$test['G11EntreStudies'];
				$g112ndLanSin=$g112ndLanSin+$test['G112ndLangSin'];
				$g112ndLanTam=$g112ndLanTam+$test['G112ndLangTam'];
				$g11San=$g11San+$test['G11Sanskrit'];
				$g11Ara=$g11Ara+$test['G11Arabic'];
				$g111stTot=$g111stTot+$test['G111stGroupTot'];
				$g11RBus=$g11RBus+$test['G11RBusAccStu'];
				$g11RGeo=$g11RGeo+$test['G11RGeo'];
				$g11RCiti=$g11RCiti+$test['G11RCitiEduGov'];
				$g11REntre=$g11REntre+$test['G11REntreStudies'];
				$g11R2ndLanSin=$g11R2ndLanSin+$test['G11R2ndLangSin'];
				$g11R2ndLanTam=$g11R2ndLanTam+$test['G11R2ndLangTam'];
				$g11RSan=$g11RSan+$test['G11RSanskrit'];
				$g11RAra=$g11RAra+$test['G11RArabic'];
				$g11R1stTot=$g11R1stTot+$test['G11R1stGroupTot'];
								
				$Bus=$Bus+$TotBus;
				$Geo=$Geo+$TotGeo;
				$Citi=$Citi+$TotCiti;
				$Entre=$Entre+$TotEntre;
				$SecondLanSin=$SecondLanSin+$Tot2ndLanSin;
				$SecondLanTam=$SecondLanTam+$Tot2ndLanTam;
				$San=$San+$TotSan;
				$Ara=$Ara+$TotAra;
				$FirstTot=$FirstTot+$Tot1stTot;
												
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
