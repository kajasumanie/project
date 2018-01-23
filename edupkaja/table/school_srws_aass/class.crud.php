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
			
				$g12ArtsEcon=0;
				$g12ArtsGeog=0;
				$g12ArtsIndHis=0;
				$g12ArtsEurHis=0;
				$g12ArtsModWorHis=0;
				$g12ArtsHomEco=0;
				$g12ArtsPolSci=0;
				$g12ArtsLog=0;
				$g12ArtsBusStatic=0;
				$g12ArtsAcco=0;
				$g12ArtsAgro=0;
				$g12ArtsMaths=0;
				$g12ArtsCiviTech=0;
				$g12ArtsMachTech=0;
				//$g12ArtsTot=0;
				$g12ArtsEEIT=0;
				$g12ArtsFoodTech=0;
				$g12ArtsAgroTech=0;
				$g12ArtsBioResTech=0;
				$g12ArtsCommMassMedia=0;
				$g12ArtsICT=0;
				$g12ArtsBudd=0;
				$g12ArtsBuddCivi=0;
				$g12ArtsChris=0;
				$g12ArtsChrisCivi=0;
				$g12ArtsHindu=0;
				$g12ArtsHinduCivi=0;
				$g12ArtsIslam=0;
				$g12ArtsIslamCivi=0;
				$g12ArtsArt=0;
				$g12ArtsDanBhar=0;
				$g12ArtsDanIndi=0;
				$g12ArtsCarMus=0;
				$g12ArtsOrilMus=0;
				$g12ArtsWesMus=0;
				$g12ArtsDraTheSin=0;
				$g12ArtsDraTheTam=0;
				$g12ArtsDraTheEng=0;
				$g12ArtsSinhala=0;
				$g12ArtsTamil=0;
				$g12ArtsEnglish=0;
				$g12ArtsArabic=0;
				$g12ArtsPali=0;
				$g12ArtsSanskrit=0;
				$g12ArtsTot=0;
				
				$g13ArtsEcon=0;
				$g13ArtsGeog=0;
				$g13ArtsIndHis=0;
				$g13ArtsEurHis=0;
				$g13ArtsModWorHis=0;
				$g13ArtsHomEco=0;
				$g13ArtsPolSci=0;
				$g13ArtsLog=0;
				$g13ArtsBusStatic=0;
				$g13ArtsAcco=0;
				$g13ArtsAgro=0;
				$g13ArtsMaths=0;
				$g13ArtsCiviTech=0;
				$g13ArtsMachTech=0;
				//$g13ArtsTot=0;
				$g13ArtsEEIT=0;
				$g13ArtsFoodTech=0;
				$g13ArtsAgroTech=0;
				$g13ArtsBioResTech=0;
				$g13ArtsCommMassMedia=0;
				$g13ArtsICT=0;
				$g13ArtsBudd=0;
				$g13ArtsBuddCivi=0;
				$g13ArtsChris=0;
				$g13ArtsChrisCivi=0;
				$g13ArtsHindu=0;
				$g13ArtsHinduCivi=0;
				$g13ArtsIslam=0;
				$g13ArtsIslamCivi=0;
				$g13ArtsArt=0;
				$g13ArtsDanBhar=0;
				$g13ArtsDanIndi=0;
				$g13ArtsCarMus=0;
				$g13ArtsOrilMus=0;
				$g13ArtsWesMus=0;
				$g13ArtsDraTheSin=0;
				$g13ArtsDraTheTam=0;
				$g13ArtsDraTheEng=0;
				$g13ArtsSinhala=0;
				$g13ArtsTamil=0;
				$g13ArtsEnglish=0;
				$g13ArtsArabic=0;
				$g13ArtsPali=0;
				$g13ArtsSanskrit=0;
				$g13ArtsTot=0;
				
				$g13RArtsEcon=0;
				$g13RArtsGeog=0;
				$g13RArtsIndHis=0;
				$g13RArtsEurHis=0;
				$g13RArtsModWorHis=0;
				$g13RArtsHomEco=0;
				$g13RArtsPolSci=0;
				$g13RArtsLog=0;
				$g13RArtsBusStatic=0;
				$g13RArtsAcco=0;
				$g13RArtsAgro=0;
				$g13RArtsMaths=0;
				$g13RArtsCiviTech=0;
				$g13RArtsMachTech=0;
				//$g13RArtsTot=0;
				$g13RArtsEEIT=0;
				$g13RArtsFoodTech=0;
				$g13RArtsAgroTech=0;
				$g13RArtsBioResTech=0;
				$g13RArtsCommMassMedia=0;
				$g13RArtsICT=0;
				$g13RArtsBudd=0;
				$g13RArtsBuddCivi=0;
				$g13RArtsChris=0;
				$g13RArtsChrisCivi=0;
				$g13RArtsHindu=0;
				$g13RArtsHinduCivi=0;
				$g13RArtsIslam=0;
				$g13RArtsIslamCivi=0;
				$g13RArtsArt=0;
				$g13RArtsDanBhar=0;
				$g13RArtsDanIndi=0;
				$g13RArtsCarMus=0;
				$g13RArtsOrilMus=0;
				$g13RArtsWesMus=0;
				$g13RArtsDraTheSin=0;
				$g13RArtsDraTheTam=0;
				$g13RArtsDraTheEng=0;
				$g13RArtsSinhala=0;
				$g13RArtsTamil=0;
				$g13RArtsEnglish=0;
				$g13RArtsArabic=0;
				$g13RArtsPali=0;
				$g13RArtsSanskrit=0;
				$g13RArtsTot=0;
				
				$g12ArtsEconE=0;
				$g12ArtsGeogE=0;
				$g12ArtsPoliE=0;
				$g12ArtsAccoE=0;
				$g12ArtsAgroE=0;
				$g12ArtsTotE=0;
				
				$g13ArtsEconE=0;
				$g13ArtsGeogE=0;
				$g13ArtsPoliE=0;
				$g13ArtsAccoE=0;
				$g13ArtsAgroE=0;
				$g13ArtsTotE=0;
				
				$g13RArtsEconE=0;
				$g13RArtsGeogE=0;
				$g13RArtsPoliE=0;
				$g13RArtsAccoE=0;
				$g13RArtsAgroE=0;
				$g13RArtsTotE=0;
				
				$ArtsEcon=0;
				$ArtsGeog=0;
				$ArtsIndHis=0;
				$ArtsEurHis=0;
				$ArtsModWorHis=0;
				$ArtsHomEco=0;
				$ArtsPolSci=0;
				$ArtsLog=0;
				$ArtsBusStatic=0;
				$ArtsAcco=0;
				$ArtsAgro=0;
				$ArtsMaths=0;
				$ArtsCiviTech=0;
				$ArtsMachTech=0;
				$ArtsEEIT=0;
				$ArtsFoodTech=0;
				$ArtsAgroTech=0;
				$ArtsBioResTech=0;
				$ArtsCommMassMedia=0;
				$ArtsICT=0;
				$ArtsBudd=0;
				$ArtsBuddCivi=0;
				$ArtsChris=0;
				$ArtsChrisCivi=0;
				$ArtsHindu=0;
				$ArtsHinduCivi=0;
				$ArtsIslam=0;
				$ArtsIslamCivi=0;
				$ArtsArt=0;
				$ArtsDanBhar=0;
				$ArtsDanIndi=0;
				$ArtsCarMus=0;
				$ArtsOrilMus=0;
				$ArtsWesMus=0;
				$ArtsDraTheSin=0;
				$ArtsDraTheTam=0;
				$ArtsDraTheEng=0;
				$ArtsSinhala=0;
				$ArtsTamil=0;
				$ArtsEnglish=0;
				$ArtsArabic=0;
				$ArtsPali=0;
				$ArtsSanskrit=0;
				$ArtsTot=0;
								
												
			$result=mysql_query("$sql Order By ZoneSort,Scid ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G12ArtsEconomics']+$test['G12ArtsGeography']+$test['G12ArtsIndianHistory']+$test['G12ArtsEuropeHistory']+$test['G12ArtsModernWorldHistory']+$test['G12ArtsHomeEconomics']+$test['G12ArtsPoliticalScience']+$test['G12ArtsLogic']+$test['G12ArtsBusinessStatistics']+$test['G12ArtsAccounting']+$test['G12ArtsAgroScience']+$test['G12ArtsMaths']+$test['G12ArtsCivilTech']+$test['G12ArtsMechanicalTech']+$test['G12ArtsEEIT']+$test['G12ArtsFoodTech']+$test['G12ArtsAgroTech']+$test['G12ArtsBioResourceTech']+$test['G12ArtsCommuniMassMedia']+$test['G12ArtsICT']+$test['G12ArtsBuddhism']+$test['G12ArtsBuddhistCivilization']+$test['G12ArtsChristianity']+$test['G12ArtsChristianCivilization']+$test['G12ArtsHinduism']+$test['G12ArtsHinduCivilization']+$test['G12ArtsIslam']+$test['G12ArtsIslamCivilization']+$test['G12ArtsArt']+$test['G12ArtsDancingBharatha']+$test['G12ArtsDancingIndigenous']+$test['G12ArtsCarnaticMusic']+$test['G12ArtsOrientalMusic']+$test['G12ArtsWesternMusic']+$test['G12ArtsDramaTheatreSinhala']+$test['G12ArtsDramaTheatreTamil']+$test['G12ArtsDramaTheatreEnglish']+$test['G12ArtsSinhala']+$test['G12ArtsTamil']+$test['G12ArtsEnglish']+$test['G12ArtsArabic']+$test['G12ArtsPali']+$test['G12ArtsSanskrit']+$test['G12ArtsTotal']+$test['G13ArtsEconomics']+$test['G13ArtsGeography']+$test['G13ArtsIndianHistory']+$test['G13ArtsEuropeHistory']+$test['G13ArtsModernWorldHistory']+$test['G13ArtsHomeEconomics']+$test['G13ArtsPoliticalScience']+$test['G13ArtsLogic']+$test['G13ArtsBusinessStatistics']+$test['G13ArtsAccounting']+$test['G13ArtsAgroScience']+$test['G13ArtsMaths']+$test['G13ArtsCivilTech']+$test['G13ArtsMechanicalTech']+$test['G13ArtsEEIT']+$test['G13ArtsFoodTech']+$test['G13ArtsAgroTech']+$test['G13ArtsBioResourceTech']+$test['G13ArtsCommuniMassMedia']+$test['G13ArtsICT']+$test['G13ArtsBuddhism']+$test['G13ArtsBuddhistCivilization']+$test['G13ArtsChristianity']+$test['G13ArtsChristianCivilization']+$test['G13ArtsHinduism']+$test['G13ArtsHinduCivilization']+$test['G13ArtsIslam']+$test['G13ArtsIslamCivilization']+$test['G13ArtsArt']+$test['G13ArtsDancingBharatha']+$test['G13ArtsDancingIndigenous']+$test['G13ArtsCarnaticMusic']+$test['G13ArtsOrientalMusic']+$test['G13ArtsWesternMusic']+$test['G13ArtsDramaTheatreSinhala']+$test['G13ArtsDramaTheatreTamil']+$test['G13ArtsDramaTheatreEnglish']+$test['G13ArtsSinhala']+$test['G13ArtsTamil']+$test['G13ArtsEnglish']+$test['G13ArtsArabic']+$test['G13ArtsPali']+$test['G13ArtsSanskrit']+$test['G13ArtsTotal']+$test['G13RArtsEconomics']+$test['G13RArtsGeography']+$test['G13RArtsIndianHistory']+$test['G13RArtsEuropeHistory']+$test['G13RArtsModernWorldHistory']+$test['G13RArtsHomeEconomics']+$test['G13RArtsPoliticalScience']+$test['G13RArtsLogic']+$test['G13RArtsBusinessStatistics']+$test['G13RArtsAccounting']+$test['G13RArtsAgroScience']+$test['G13RArtsMaths']+$test['G13RArtsCivilTech']+$test['G13RArtsMechanicalTech']+$test['G13RArtsEEIT']+$test['G13RArtsFoodTech']+$test['G13RArtsAgroTech']+$test['G13RArtsBioResourceTech']+$test['G13RArtsCommuniMassMedia']+$test['G13RArtsICT']+$test['G13RArtsBuddhism']+$test['G13RArtsBuddhistCivilization']+$test['G13RArtsChristianity']+$test['G13RArtsChristianCivilization']+$test['G13RArtsHinduism']+$test['G13RArtsHinduCivilization']+$test['G13RArtsIslam']+$test['G13RArtsIslamCivilization']+$test['G13RArtsArt']+$test['G13RArtsDancingBharatha']+$test['G13RArtsDancingIndigenous']+$test['G13RArtsCarnaticMusic']+$test['G13RArtsOrientalMusic']+$test['G13RArtsWesternMusic']+$test['G13RArtsDramaTheatreSinhala']+$test['G13RArtsDramaTheatreTamil']+$test['G13RArtsDramaTheatreEnglish']+$test['G13RArtsSinhala']+$test['G13RArtsTamil']+$test['G13RArtsEnglish']+$test['G13RArtsArabic']+$test['G13RArtsPali']+$test['G13RArtsSanskrit']+$test['G13RArtsTotal']+$test['G12ArtsEconomicsE']+$test['G12ArtsGeographyE']+$test['G12ArtsPoliticalScienceE']+$test['G12ArtsAccountingE']+$test['G12ArtsAgroScienceE']+$test['G12ArtsTotalE']+$test['G13ArtsEconomicsE']+$test['G13ArtsGeographyE']+$test['G13ArtsPoliticalScienceE']+$test['G13ArtsAccountingE']+$test['G13ArtsAgroScienceE']+$test['G13ArtsTotalE']+$test['G13RArtsEconomicsE']+$test['G13RArtsGeographyE']+$test['G13RArtsPoliticalScienceE']+$test['G13RArtsAccountingE']+$test['G13RArtsAgroScienceE']+$test['G13RArtsTotalE'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Division']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Zone']. "</font></td>";
								
				echo"<td align='right'><font color='black'>". $test['G12ArtsEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsIndianHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsEuropeHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsModernWorldHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsHomeEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsPoliticalScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsLogic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsBusinessStatistics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsAccounting']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsMaths']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsCivilTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsMechanicalTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsEEIT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsFoodTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsAgroTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsBioResourceTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsCommuniMassMedia']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsBuddhism']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsBuddhistCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsChristianity']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsChristianCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsHinduism']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsHinduCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsIslam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsIslamCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsDancingBharatha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsDancingIndigenous']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsCarnaticMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsOrientalMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsWesternMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsDramaTheatreSinhala']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsDramaTheatreTamil']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsDramaTheatreEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsSinhala']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsTamil']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsArabic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsPali']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsSanskrit']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G12ArtsTotal']. "</font></td>";
												
				echo"<td align='right'><font color='black'>". $test['G13ArtsEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsIndianHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsEuropeHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsModernWorldHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsHomeEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsPoliticalScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsLogic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsBusinessStatistics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsAccounting']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsMaths']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsCivilTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsMechanicalTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsEEIT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsFoodTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsAgroTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsBioResourceTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsCommuniMassMedia']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsBuddhism']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsBuddhistCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsChristianity']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsChristianCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsHinduism']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsHinduCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsIslam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsIslamCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsDancingBharatha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsDancingIndigenous']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsCarnaticMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsOrientalMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsWesternMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsDramaTheatreSinhala']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsDramaTheatreTamil']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsDramaTheatreEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsSinhala']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsTamil']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsArabic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsPali']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsSanskrit']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13ArtsTotal']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13RArtsEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsIndianHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsEuropeHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsModernWorldHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsHomeEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsPoliticalScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsLogic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsBusinessStatistics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsAccounting']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsMaths']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsCivilTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsMechanicalTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsEEIT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsFoodTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsAgroTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsBioResourceTech']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsCommuniMassMedia']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsICT']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsBuddhism']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsBuddhistCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsChristianity']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsChristianCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsHinduism']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsHinduCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsIslam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsIslamCivilization']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsDancingBharatha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsDancingIndigenous']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsCarnaticMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsOrientalMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsWesternMusic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsDramaTheatreSinhala']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsDramaTheatreTamil']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsDramaTheatreEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsSinhala']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsTamil']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsArabic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsPali']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsSanskrit']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13RArtsTotal']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G12ArtsEconomicsE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsGeographyE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsPoliticalScienceE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsAccountingE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ArtsAgroScienceE']. "</font></td>";
				
				//echo"<td align='right'><font color='black'>". $test['G12ArtsTotalE']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13ArtsEconomicsE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsGeographyE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsPoliticalScienceE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsAccountingE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ArtsAgroScienceE']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13ArtsTotalE']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13RArtsEconomicsE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsGeographyE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsPoliticalScienceE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsAccountingE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RArtsAgroScienceE']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13RArtsTotalE']. "</font></td>";
			
				$TotArtsEcon=$test['G12ArtsEconomics']+$test['G13ArtsEconomics']+$test['G13RArtsEconomics']+$test['G12ArtsEconomicsE']+$test['G13ArtsEconomicsE']+$test['G13RArtsEconomicsE'];
				$TotArtsGeog=$test['G12ArtsGeography']+$test['G13ArtsGeography']+$test['G13RArtsGeography']+$test['G12ArtsGeographyE']+$test['G13ArtsGeographyE']+$test['G13RArtsGeographyE'];
				$TotArtsIndHis=$test['G12ArtsIndianHistory']+$test['G13ArtsIndianHistory']+$test['G13RArtsIndianHistory'];
				$TotArtsEurHis=$test['G12ArtsEuropeHistory']+$test['G13ArtsEuropeHistory']+$test['G13RArtsEuropeHistory'];
				$TotArtsModWorHis=$test['G12ArtsModernWorldHistory']+$test['G13ArtsModernWorldHistory']+$test['G13RArtsModernWorldHistory'];
				$TotArtsHomEco=$test['G12ArtsHomeEconomics']+$test['G13ArtsHomeEconomics']+$test['G13RArtsHomeEconomics'];
				$TotArtsPolSci=$test['G12ArtsPoliticalScience']+$test['G13ArtsPoliticalScience']+$test['G13RArtsPoliticalScience']+$test['G12ArtsPoliticalScienceE']+$test['G13ArtsPoliticalScienceE']+$test['G13RArtsPoliticalScienceE'];
				$TotArtsLog=$test['G12ArtsLogic']+$test['G13ArtsLogic']+$test['G13RArtsLogic'];
				$TotArtsBusStatic=$test['G12ArtsBusinessStatistics']+$test['G13ArtsBusinessStatistics']+$test['G13RArtsBusinessStatistics'];
				$TotArtsAcco=$test['G12ArtsAccounting']+$test['G13ArtsAccounting']+$test['G13RArtsAccounting']+$test['G12ArtsAccountingE']+$test['G13ArtsAccountingE']+$test['G13RArtsAccountingE'];
				$TotArtsAgro=$test['G12ArtsAgroScience']+$test['G13ArtsAgroScience']+$test['G13RArtsAgroScience']+$test['G12ArtsAgroScienceE']+$test['G13ArtsAgroScienceE']+$test['G13RArtsAgroScienceE'];
				$TotArtsMaths=$test['G12ArtsMaths']+$test['G13ArtsMaths']+$test['G13RArtsMaths'];
				$TotArtsCiviTech=$test['G12ArtsCivilTech']+$test['G13ArtsCivilTech']+$test['G13RArtsCivilTech'];
				$TotArtsMachTech=$test['G12ArtsMechanicalTech']+$test['G13ArtsMechanicalTech']+$test['G13RArtsMechanicalTech'];
				$TotArtsEEIT=$test['G12ArtsEEIT']+$test['G13ArtsEEIT']+$test['G13RArtsEEIT'];
				$TotArtsFoodTech=$test['G12ArtsFoodTech']+$test['G13ArtsFoodTech']+$test['G13RArtsFoodTech'];
				$TotArtsAgroTech=$test['G12ArtsAgroTech']+$test['G13ArtsAgroTech']+$test['G13RArtsAgroTech'];
				$TotArtsBioResTech=$test['G12ArtsBioResourceTech']+$test['G13ArtsBioResourceTech']+$test['G13RArtsBioResourceTech'];
				$TotArtsCommMassMedia=$test['G12ArtsCommuniMassMedia']+$test['G13ArtsCommuniMassMedia']+$test['G13RArtsCommuniMassMedia'];
				$TotArtsICT=$test['G12ArtsICT']+$test['G13ArtsICT']+$test['G13RArtsICT'];
				$TotArtsBudd=$test['G12ArtsBuddhism']+$test['G13ArtsBuddhism']+$test['G13RArtsBuddhism'];
				$TotArtsBuddCivi=$test['G12ArtsBuddhistCivilization']+$test['G13ArtsBuddhistCivilization']+$test['G13RArtsBuddhistCivilization'];
				$TotArtsChris=$test['G12ArtsChristianity']+$test['G13ArtsChristianity']+$test['G13RArtsChristianity'];
				$TotArtsChrisCivi=$test['G12ArtsChristianCivilization']+$test['G13ArtsChristianCivilization']+$test['G13RArtsChristianCivilization'];
				$TotArtsHindu=$test['G12ArtsHinduism']+$test['G13ArtsHinduism']+$test['G13RArtsHinduism'];
				$TotArtsHinduCivi=$test['G12ArtsHinduCivilization']+$test['G13ArtsHinduCivilization']+$test['G13RArtsHinduCivilization'];
				$TotArtsIslam=$test['G12ArtsIslam']+$test['G13ArtsIslam']+$test['G13RArtsIslam'];
				$TotArtsIslamCivi=$test['G12ArtsIslamCivilization']+$test['G13ArtsIslamCivilization']+$test['G13RArtsIslamCivilization'];
				$TotArtsArt=$test['G12ArtsArt']+$test['G13ArtsArt']+$test['G13RArtsArt'];
				$TotArtsDanBhar=$test['G12ArtsDancingBharatha']+$test['G13ArtsDancingBharatha']+$test['G13RArtsDancingBharatha'];
				$TotArtsDanIndi=$test['G12ArtsDancingIndigenous']+$test['G13ArtsDancingIndigenous']+$test['G13RArtsDancingIndigenous'];
				$TotArtsCarMus=$test['G12ArtsCarnaticMusic']+$test['G13ArtsCarnaticMusic']+$test['G13RArtsCarnaticMusic'];
				$TotArtsOrilMus=$test['G12ArtsOrientalMusic']+$test['G13ArtsOrientalMusic']+$test['G13RArtsOrientalMusic'];
				$TotArtsWesMus=$test['G12ArtsWesternMusic']+$test['G13ArtsWesternMusic']+$test['G13RArtsWesternMusic'];
				$TotArtsDraTheSin=$test['G12ArtsDramaTheatreSinhala']+$test['G13ArtsDramaTheatreSinhala']+$test['G13RArtsDramaTheatreSinhala'];
				$TotArtsDraTheTam=$test['G12ArtsDramaTheatreTamil']+$test['G13ArtsDramaTheatreTamil']+$test['G13RArtsDramaTheatreTamil'];
				$TotArtsDraTheEng=$test['G12ArtsDramaTheatreEnglish']+$test['G13ArtsDramaTheatreEnglish']+$test['G13RArtsDramaTheatreEnglish'];
				$TotArtsSinhala=$test['G12ArtsSinhala']+$test['G13ArtsSinhala']+$test['G13RArtsSinhala'];
				$TotArtsTamil=$test['G12ArtsTamil']+$test['G13ArtsTamil']+$test['G13RArtsTamil'];
				$TotArtsEnglish=$test['G12ArtsEnglish']+$test['G13ArtsEnglish']+$test['G13RArtsEnglish'];
				$TotArtsArabic=$test['G12ArtsArabic']+$test['G13ArtsArabic']+$test['G13RArtsArabic'];
				$TotArtsPali=$test['G12ArtsPali']+$test['G13ArtsPali']+$test['G13RArtsPali'];
				$TotArtsSanskrit=$test['G12ArtsSanskrit']+$test['G13ArtsSanskrit']+$test['G13RArtsSanskrit'];
				$TotArtsTotal=$test['G12ArtsTotal']+$test['G13ArtsTotal']+$test['G13RArtsTotal']+$test['G12ArtsTotalE']+$test['G13ArtsTotalE']+$test['G13RArtsTotalE'];
								
				echo"<td align='right'><font color='black'>". $TotArtsEcon. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsGeog. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsIndHis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsEurHis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsModWorHis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsHomEco. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsPolSci. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsLog. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsBusStatic. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsAcco. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsAgro. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsMaths. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsCiviTech. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsMachTech. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsEEIT. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsFoodTech. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsAgroTech. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsBioResTech. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsCommMassMedia. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsICT. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsBudd. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsBuddCivi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsChris. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsChrisCivi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsHindu. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsHinduCivi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsIslam. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsIslamCivi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsArt. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsDanBhar. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsDanIndi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsCarMus. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsOrilMus. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsWesMus. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsDraTheSin. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsDraTheTam. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsDraTheEng. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsSinhala. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsTamil. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsEnglish. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsArabic. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsPali. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArtsSanskrit. "</font></td>";
				//echo"<td align='right'><font color='black'>". $TotArtsTotal. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g12ArtsEcon=$g12ArtsEcon+$test['G12ArtsEconomics'];
				$g12ArtsGeog=$g12ArtsGeog+$test['G12ArtsGeography'];
				$g12ArtsIndHis=$g12ArtsIndHis+$test['G12ArtsIndianHistory'];
				$g12ArtsEurHis=$g12ArtsEurHis+$test['G12ArtsEuropeHistory'];
				$g12ArtsModWorHis=$g12ArtsModWorHis+$test['G12ArtsModernWorldHistory'];
				$g12ArtsHomEco=$g12ArtsHomEco+$test['G12ArtsHomeEconomics'];
				$g12ArtsPolSci=$g12ArtsPolSci+$test['G12ArtsPoliticalScience'];
				$g12ArtsLog=$g12ArtsLog+$test['G12ArtsLogic'];
				$g12ArtsBusStatic=$g12ArtsBusStatic+$test['G12ArtsBusinessStatistics'];
				$g12ArtsAcco=$g12ArtsAcco+$test['G12ArtsAccounting'];
				$g12ArtsAgro=$g12ArtsAgro+$test['G12ArtsAgroScience'];
				$g12ArtsMaths=$g12ArtsMaths+$test['G12ArtsMaths'];
				$g12ArtsCiviTech=$g12ArtsCiviTech+$test['G12ArtsCivilTech'];
				$g12ArtsMachTech=$g12ArtsMachTech+$test['G12ArtsMechanicalTech'];
				//$g12ArtsTot=$g12ArtsTot+$test['G12ArtsTotal'];
				$g12ArtsEEIT=$g12ArtsEEIT+$test['G12ArtsEEIT'];
				$g12ArtsFoodTech=$g12ArtsFoodTech+$test['G12ArtsFoodTech'];
				$g12ArtsAgroTech=$g12ArtsAgroTech+$test['G12ArtsAgroTech'];
				$g12ArtsBioResTech=$g12ArtsBioResTech+$test['G12ArtsBioResourceTech'];
				$g12ArtsCommMassMedia=$g12ArtsCommMassMedia+$test['G12ArtsCommuniMassMedia'];
				$g12ArtsICT=$g12ArtsICT+$test['G12ArtsICT'];
				$g12ArtsBudd=$g12ArtsBudd+$test['G12ArtsBuddhism'];
				$g12ArtsBuddCivi=$g12ArtsBuddCivi+$test['G12ArtsBuddhistCivilization'];
				$g12ArtsChris=$g12ArtsChris+$test['G12ArtsChristianity'];
				$g12ArtsChrisCivi=$g12ArtsChrisCivi+$test['G12ArtsChristianCivilization'];
				$g12ArtsHindu=$g12ArtsHindu+$test['G12ArtsHinduism'];
				$g12ArtsHinduCivi=$g12ArtsHinduCivi+$test['G12ArtsHinduCivilization'];
				$g12ArtsIslam=$g12ArtsIslam+$test['G12ArtsIslam'];
				$g12ArtsIslamCivi=$g12ArtsIslamCivi+$test['G12ArtsIslamCivilization'];
				$g12ArtsArt=$g12ArtsArt+$test['G12ArtsArt'];
				$g12ArtsDanBhar=$g12ArtsDanBhar+$test['G12ArtsDancingBharatha'];
				$g12ArtsDanIndi=$g12ArtsDanIndi+$test['G12ArtsDancingIndigenous'];
				$g12ArtsCarMus=$g12ArtsCarMus+$test['G12ArtsCarnaticMusic'];
				$g12ArtsOrilMus=$g12ArtsOrilMus+$test['G12ArtsOrientalMusic'];
				$g12ArtsWesMus=$g12ArtsWesMus+$test['G12ArtsWesternMusic'];
				$g12ArtsDraTheSin=$g12ArtsDraTheSin+$test['G12ArtsDramaTheatreSinhala'];
				$g12ArtsDraTheTam=$g12ArtsDraTheTam+$test['G12ArtsDramaTheatreTamil'];
				$g12ArtsDraTheEng=$g12ArtsDraTheEng+$test['G12ArtsDramaTheatreEnglish'];
				$g12ArtsSinhala=$g12ArtsSinhala+$test['G12ArtsSinhala'];
				$g12ArtsTamil=$g12ArtsTamil+$test['G12ArtsTamil'];
				$g12ArtsEnglish=$g12ArtsEnglish+$test['G12ArtsEnglish'];
				$g12ArtsArabic=$g12ArtsArabic+$test['G12ArtsArabic'];
				$g12ArtsPali=$g12ArtsPali+$test['G12ArtsPali'];
				$g12ArtsSanskrit=$g12ArtsSanskrit+$test['G12ArtsSanskrit'];
				$g12ArtsTot=$g12ArtsTot+$test['G12ArtsTotal'];
								
				$g13ArtsEcon=$g13ArtsEcon+$test['G13ArtsEconomics'];
				$g13ArtsGeog=$g13ArtsGeog+$test['G13ArtsGeography'];
				$g13ArtsIndHis=$g13ArtsIndHis+$test['G13ArtsIndianHistory'];
				$g13ArtsEurHis=$g13ArtsEurHis+$test['G13ArtsEuropeHistory'];
				$g13ArtsModWorHis=$g13ArtsModWorHis+$test['G13ArtsModernWorldHistory'];
				$g13ArtsHomEco=$g13ArtsHomEco+$test['G13ArtsHomeEconomics'];
				$g13ArtsPolSci=$g13ArtsPolSci+$test['G13ArtsPoliticalScience'];
				$g13ArtsLog=$g13ArtsLog+$test['G13ArtsLogic'];
				$g13ArtsBusStatic=$g13ArtsBusStatic+$test['G13ArtsBusinessStatistics'];
				$g13ArtsAcco=$g13ArtsAcco+$test['G13ArtsAccounting'];
				$g13ArtsAgro=$g13ArtsAgro+$test['G13ArtsAgroScience'];
				$g13ArtsMaths=$g13ArtsMaths+$test['G13ArtsMaths'];
				$g13ArtsCiviTech=$g13ArtsCiviTech+$test['G13ArtsCivilTech'];
				$g13ArtsMachTech=$g13ArtsMachTech+$test['G13ArtsMechanicalTech'];
				//$g13ArtsTot=$g13ArtsTot+$test['G13ArtsTotal'];
				$g13ArtsEEIT=$g13ArtsEEIT+$test['G13ArtsEEIT'];
				$g13ArtsFoodTech=$g13ArtsFoodTech+$test['G13ArtsFoodTech'];
				$g13ArtsAgroTech=$g13ArtsAgroTech+$test['G13ArtsAgroTech'];
				$g13ArtsBioResTech=$g13ArtsBioResTech+$test['G13ArtsBioResourceTech'];
				$g13ArtsCommMassMedia=$g13ArtsCommMassMedia+$test['G13ArtsCommuniMassMedia'];
				$g13ArtsICT=$g13ArtsICT+$test['G13ArtsICT'];
				$g13ArtsBudd=$g13ArtsBudd+$test['G13ArtsBuddhism'];
				$g13ArtsBuddCivi=$g13ArtsBuddCivi+$test['G13ArtsBuddhistCivilization'];
				$g13ArtsChris=$g13ArtsChris+$test['G13ArtsChristianity'];
				$g13ArtsChrisCivi=$g13ArtsChrisCivi+$test['G13ArtsChristianCivilization'];
				$g13ArtsHindu=$g13ArtsHindu+$test['G13ArtsHinduism'];
				$g13ArtsHinduCivi=$g13ArtsHinduCivi+$test['G13ArtsHinduCivilization'];
				$g13ArtsIslam=$g13ArtsIslam+$test['G13ArtsIslam'];
				$g13ArtsIslamCivi=$g13ArtsIslamCivi+$test['G13ArtsIslamCivilization'];
				$g13ArtsArt=$g13ArtsArt+$test['G13ArtsArt'];
				$g13ArtsDanBhar=$g13ArtsDanBhar+$test['G13ArtsDancingBharatha'];
				$g13ArtsDanIndi=$g13ArtsDanIndi+$test['G13ArtsDancingIndigenous'];
				$g13ArtsCarMus=$g13ArtsCarMus+$test['G13ArtsCarnaticMusic'];
				$g13ArtsOrilMus=$g13ArtsOrilMus+$test['G13ArtsOrientalMusic'];
				$g13ArtsWesMus=$g13ArtsWesMus+$test['G13ArtsWesternMusic'];
				$g13ArtsDraTheSin=$g13ArtsDraTheSin+$test['G13ArtsDramaTheatreSinhala'];
				$g13ArtsDraTheTam=$g13ArtsDraTheTam+$test['G13ArtsDramaTheatreTamil'];
				$g13ArtsDraTheEng=$g13ArtsDraTheEng+$test['G13ArtsDramaTheatreEnglish'];
				$g13ArtsSinhala=$g13ArtsSinhala+$test['G13ArtsSinhala'];
				$g13ArtsTamil=$g13ArtsTamil+$test['G13ArtsTamil'];
				$g13ArtsEnglish=$g13ArtsEnglish+$test['G13ArtsEnglish'];
				$g13ArtsArabic=$g13ArtsArabic+$test['G13ArtsArabic'];
				$g13ArtsPali=$g13ArtsPali+$test['G13ArtsPali'];
				$g13ArtsSanskrit=$g13ArtsSanskrit+$test['G13ArtsSanskrit'];
				$g13ArtsTot=$g13ArtsTot+$test['G13ArtsTotal'];
				
				$g13RArtsEcon=$g13RArtsEcon+$test['G13RArtsEconomics'];
				$g13RArtsGeog=$g13RArtsGeog+$test['G13RArtsGeography'];
				$g13RArtsIndHis=$g13RArtsIndHis+$test['G13RArtsIndianHistory'];
				$g13RArtsEurHis=$g13RArtsEurHis+$test['G13RArtsEuropeHistory'];
				$g13RArtsModWorHis=$g13RArtsModWorHis+$test['G13RArtsModernWorldHistory'];
				$g13RArtsHomEco=$g13RArtsHomEco+$test['G13RArtsHomeEconomics'];
				$g13RArtsPolSci=$g13RArtsPolSci+$test['G13RArtsPoliticalScience'];
				$g13RArtsLog=$g13RArtsLog+$test['G13RArtsLogic'];
				$g13RArtsBusStatic=$g13RArtsBusStatic+$test['G13RArtsBusinessStatistics'];
				$g13RArtsAcco=$g13RArtsAcco+$test['G13RArtsAccounting'];
				$g13RArtsAgro=$g13RArtsAgro+$test['G13RArtsAgroScience'];
				$g13RArtsMaths=$g13RArtsMaths+$test['G13RArtsMaths'];
				$g13RArtsCiviTech=$g13RArtsCiviTech+$test['G13RArtsCivilTech'];
				$g13RArtsMachTech=$g13RArtsMachTech+$test['G13RArtsMechanicalTech'];
				//$g13RArtsTot=$g13RArtsTot+$test['G13RArtsTotal'];
				$g13RArtsEEIT=$g13RArtsEEIT+$test['G13RArtsEEIT'];
				$g13RArtsFoodTech=$g13RArtsFoodTech+$test['G13RArtsFoodTech'];
				$g13RArtsAgroTech=$g13RArtsAgroTech+$test['G13RArtsAgroTech'];
				$g13RArtsBioResTech=$g13RArtsBioResTech+$test['G13RArtsBioResourceTech'];
				$g13RArtsCommMassMedia=$g13RArtsCommMassMedia+$test['G13RArtsCommuniMassMedia'];
				$g13RArtsICT=$g13RArtsICT+$test['G13RArtsICT'];
				$g13RArtsBudd=$g13RArtsBudd+$test['G13RArtsBuddhism'];
				$g13RArtsBuddCivi=$g13RArtsBuddCivi+$test['G13RArtsBuddhistCivilization'];
				$g13RArtsChris=$g13RArtsChris+$test['G13RArtsChristianity'];
				$g13RArtsChrisCivi=$g13RArtsChrisCivi+$test['G13RArtsChristianCivilization'];
				$g13RArtsHindu=$g13RArtsHindu+$test['G13RArtsHinduism'];
				$g13RArtsHinduCivi=$g13RArtsHinduCivi+$test['G13RArtsHinduCivilization'];
				$g13RArtsIslam=$g13RArtsIslam+$test['G13RArtsIslam'];
				$g13RArtsIslamCivi=$g13RArtsIslamCivi+$test['G13RArtsIslamCivilization'];
				$g13RArtsArt=$g13RArtsArt+$test['G13RArtsArt'];
				$g13RArtsDanBhar=$g13RArtsDanBhar+$test['G13RArtsDancingBharatha'];
				$g13RArtsDanIndi=$g13RArtsDanIndi+$test['G13RArtsDancingIndigenous'];
				$g13RArtsCarMus=$g13RArtsCarMus+$test['G13RArtsCarnaticMusic'];
				$g13RArtsOrilMus=$g13RArtsOrilMus+$test['G13RArtsOrientalMusic'];
				$g13RArtsWesMus=$g13RArtsWesMus+$test['G13RArtsWesternMusic'];
				$g13RArtsDraTheSin=$g13RArtsDraTheSin+$test['G13RArtsDramaTheatreSinhala'];
				$g13RArtsDraTheTam=$g13RArtsDraTheTam+$test['G13RArtsDramaTheatreTamil'];
				$g13RArtsDraTheEng=$g13RArtsDraTheEng+$test['G13RArtsDramaTheatreEnglish'];
				$g13RArtsSinhala=$g13RArtsSinhala+$test['G13RArtsSinhala'];
				$g13RArtsTamil=$g13RArtsTamil+$test['G13RArtsTamil'];
				$g13RArtsEnglish=$g13RArtsEnglish+$test['G13RArtsEnglish'];
				$g13RArtsArabic=$g13RArtsArabic+$test['G13RArtsArabic'];
				$g13RArtsPali=$g13RArtsPali+$test['G13RArtsPali'];
				$g13RArtsSanskrit=$g13RArtsSanskrit+$test['G13RArtsSanskrit'];
				$g13RArtsTot=$g13RArtsTot+$test['G13RArtsTotal'];
				
				$g12ArtsEconE=$g12ArtsEconE+$test['G12ArtsEconomicsE'];
				$g12ArtsGeogE=$g12ArtsGeogE+$test['G12ArtsGeographyE'];
				$g12ArtsPoliE=$g12ArtsPoliE+$test['G12ArtsPoliticalScienceE'];
				$g12ArtsAccoE=$g12ArtsAccoE+$test['G12ArtsAccountingE'];
				$g12ArtsAgroE=$g12ArtsAgroE+$test['G12ArtsAgroScienceE'];
				$g12ArtsTotE=$g12ArtsTotE+$test['G12ArtsTotalE'];
				
				$g13ArtsEconE=$g13ArtsEconE+$test['G13ArtsEconomicsE'];
				$g13ArtsGeogE=$g13ArtsGeogE+$test['G13ArtsGeographyE'];
				$g13ArtsPoliE=$g13ArtsPoliE+$test['G13ArtsPoliticalScienceE'];
				$g1ArtsAccoE=$g13ArtsAccoE+$test['G13ArtsAccountingE'];
				$g13ArtsAgroE=$g13ArtsAgroE+$test['G13ArtsAgroScienceE'];
				$g13ArtsTotE=$g13ArtsTotE+$test['G13ArtsTotalE'];
				
				$g13RArtsEconE=$g13RArtsEconE+$test['G13RArtsEconomicsE'];
				$g13RArtsGeogE=$g13RArtsGeogE+$test['G13RArtsGeographyE'];
				$g13RArtsPoliE=$g13RArtsPoliE+$test['G13RArtsPoliticalScienceE'];
				$g13RArtsAccoE=$g13RArtsAccoE+$test['G13RArtsAccountingE'];
				$g13RArtsAgroE=$g13RArtsAgroE+$test['G13RArtsAgroScienceE'];
				$g13RArtsTotE=$g13RArtsTotE+$test['G13RArtsTotalE'];
											
				$ArtsEcon=$ArtsEcon+$TotArtsEcon;
				$ArtsGeog=$ArtsGeog+$TotArtsGeog;
				$ArtsIndHis=$ArtsIndHis+$TotArtsIndHis;
				$ArtsEurHis=$ArtsEurHis+$TotArtsEurHis;
				$ArtsModWorHis=$ArtsModWorHis+$TotArtsModWorHis;
				$ArtsHomEco=$ArtsHomEco+$TotArtsHomEco;
				$ArtsPolSci=$ArtsPolSci+$TotArtsPolSci;
				$ArtsLog=$ArtsLog+$TotArtsLog;
				$ArtsBusStatic=$ArtsBusStatic+$TotArtsBusStatic;
				$ArtsAcco=$ArtsAcco+$TotArtsAcco;
				$ArtsAgro=$ArtsAgro+$TotArtsAgro;
				$ArtsMaths=$ArtsMaths+$TotArtsMaths;
				$ArtsCiviTech=$ArtsCiviTech+$TotArtsCiviTech;
				$ArtsMachTech=$ArtsMachTech+$TotArtsMachTech;
				$ArtsEEIT=$ArtsEEIT+$TotArtsEEIT;
				$ArtsFoodTech=$ArtsFoodTech+$TotArtsFoodTech;
				$ArtsAgroTech=$ArtsAgroTech+$TotArtsAgroTech;
				$ArtsBioResTech=$ArtsBioResTech+$TotArtsBioResTech;
				$ArtsCommMassMedia=$ArtsCommMassMedia+$TotArtsCommMassMedia;
				$ArtsICT=$ArtsICT+$TotArtsICT;
				$ArtsBudd=$ArtsBudd+$TotArtsBudd;
				$ArtsBuddCivi=$ArtsBuddCivi+$TotArtsBuddCivi;
				$ArtsChris=$ArtsChris+$TotArtsChris;
				$ArtsChrisCivi=$ArtsChrisCivi+$TotArtsChrisCivi;
				$ArtsHindu=$ArtsHindu+$TotArtsHindu;
				$ArtsHinduCivi=$ArtsHinduCivi+$TotArtsHinduCivi;
				$ArtsIslam=$ArtsIslam+$TotArtsIslam;
				$ArtsIslamCivi=$ArtsIslamCivi+$TotArtsIslamCivi;
				$ArtsArt=$ArtsArt+$TotArtsArt;
				$ArtsDanBhar=$ArtsDanBhar+$TotArtsDanBhar;
				$ArtsDanIndi=$ArtsDanIndi+$TotArtsDanIndi;
				$ArtsCarMus=$ArtsCarMus+$TotArtsCarMus;
				$ArtsOrilMus=$ArtsOrilMus+$TotArtsOrilMus;
				$ArtsWesMus=$ArtsWesMus+$TotArtsWesMus;
				$ArtsDraTheSin=$ArtsDraTheSin+$TotArtsDraTheSin;
				$ArtsDraTheTam=$ArtsDraTheTam+$TotArtsDraTheTam;
				$ArtsDraTheEng=$ArtsDraTheEng+$TotArtsDraTheEng;
				$ArtsSinhala=$ArtsSinhala+$TotArtsSinhala;
				$ArtsTamil=$ArtsTamil+$TotArtsTamil;
				$ArtsEnglish=$ArtsEnglish+$TotArtsEnglish;
				$ArtsArabic=$ArtsArabic+$TotArtsArabic;
				$ArtsPali=$ArtsPali+$TotArtsPali;
				$ArtsSanskrit=$ArtsSanskrit+$TotArtsSanskrit;
				$ArtsTot=$ArtsTot+$TotArtsTotal;
				
								
				$count=$count+1;
				}
			}
			mysql_close($conn);
			
		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		
			<td colspan='6'>Provincial Total</td>
			
			<td align="center"><strong><?php echo $g12ArtsEcon ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsGeog ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsIndHis ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsEurHis ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsModWorHis ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsHomEco ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsPolSci ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsLog ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsBusStatic ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsAcco ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsAgro ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsMaths ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsCiviTech ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsMachTech ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsEEIT ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsFoodTech ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsAgroTech ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsBioResTech ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsCommMassMedia ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsICT ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsBudd ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsBuddCivi ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsChris ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsChrisCivi ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsHindu ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsHinduCivi ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsIslam ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsIslamCivi ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsArt ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsDanBhar ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsDanIndi ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsCarMus ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsOrilMus ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsWesMus ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsDraTheSin ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsDraTheTam ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsDraTheEng ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsSinhala ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsTamil ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsEnglish ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsArabic ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsPali ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsSanskrit ?></strong></td>
			<!--<td align="center"><strong><?php echo $g12ArtsTot ?></strong></td>-->
						
			<td align="center"><strong><?php echo $g13ArtsEcon ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsGeog ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsIndHis ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsEurHis ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsModWorHis ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsHomEco ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsPolSci ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsLog ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsBusStatic ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsAcco ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsAgro ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsMaths ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsCiviTech ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsMachTech ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsEEIT ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsFoodTech ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsAgroTech ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsBioResTech ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsCommMassMedia ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsICT ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsBudd ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsBuddCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsChris ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsChrisCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsHindu ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsHinduCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsIslam ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsIslamCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsArt ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsDanBhar ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsDanIndi ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsCarMus ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsOrilMus ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsWesMus ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsDraTheSin ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsDraTheTam ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsDraTheEng ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsSinhala ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsTamil ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsEnglish ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsArabic ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsPali ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsSanskrit ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13ArtsTot ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13RArtsEcon ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsGeog ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsIndHis ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsEurHis ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsModWorHis ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsHomEco ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsPolSci ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsLog ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsBusStatic ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsAcco ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsAgro ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsMaths ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsCiviTech ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsMachTech ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsEEIT ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsFoodTech ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsAgroTech ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsBioResTech ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsCommMassMedia ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsICT ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsBudd ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsBuddCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsChris ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsChrisCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsHindu ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsHinduCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsIslam ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsIslamCivi ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsArt ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsDanBhar ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsDanIndi ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsCarMus ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsOrilMus ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsWesMus ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsDraTheSin ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsDraTheTam ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsDraTheEng ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsSinhala ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsTamil ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsEnglish ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsArabic ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsPali ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsSanskrit ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13RArtsTot ?></strong></td>-->
							
			<td align="center"><strong><?php echo $g12ArtsEconE ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsGeogE ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsPoliE ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsAccoE ?></strong></td>
			<td align="center"><strong><?php echo $g12ArtsAgroE ?></strong></td>
			<!--<td align="center"><strong><?php echo $g12ArtsTotE ?></strong></td>-->
						
			<td align="center"><strong><?php echo $g13ArtsEconE ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsGeogE ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsPoliE ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsAccoE ?></strong></td>
			<td align="center"><strong><?php echo $g13ArtsAgroE ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13ArtsTotE ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13RArtsEconE ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsGeogE ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsPoliE ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsAccoE ?></strong></td>
			<td align="center"><strong><?php echo $g13RArtsAgroE ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13RArtsTotE ?></strong></td>-->
				
			<td align="center"><strong><?php echo $ArtsEcon ?></strong></td>
			<td align="center"><strong><?php echo $ArtsGeog ?></strong></td>
			<td align="center"><strong><?php echo $ArtsIndHis ?></strong></td>
			<td align="center"><strong><?php echo $ArtsEurHis ?></strong></td>
			<td align="center"><strong><?php echo $ArtsModWorHis ?></strong></td>
			<td align="center"><strong><?php echo $ArtsHomEco ?></strong></td>
			<td align="center"><strong><?php echo $ArtsPolSci ?></strong></td>
			<td align="center"><strong><?php echo $ArtsLog ?></strong></td>
			<td align="center"><strong><?php echo $ArtsBusStatic ?></strong></td>
			<td align="center"><strong><?php echo $ArtsAcco ?></strong></td>
			<td align="center"><strong><?php echo $ArtsAgro ?></strong></td>
			<td align="center"><strong><?php echo $ArtsMaths ?></strong></td>
			<td align="center"><strong><?php echo $ArtsCiviTech ?></strong></td>
			<td align="center"><strong><?php echo $ArtsMachTech ?></strong></td>
			<td align="center"><strong><?php echo $ArtsEEIT ?></strong></td>
			<td align="center"><strong><?php echo $ArtsFoodTech ?></strong></td>
			<td align="center"><strong><?php echo $ArtsAgroTech ?></strong></td>
			<td align="center"><strong><?php echo $ArtsBioResTech ?></strong></td>
			<td align="center"><strong><?php echo $ArtsCommMassMedia ?></strong></td>
			<td align="center"><strong><?php echo $ArtsICT ?></strong></td>
			<td align="center"><strong><?php echo $ArtsBudd ?></strong></td>
			<td align="center"><strong><?php echo $ArtsBuddCivi ?></strong></td>
			<td align="center"><strong><?php echo $ArtsChris ?></strong></td>
			<td align="center"><strong><?php echo $ArtsChrisCivi ?></strong></td>
			<td align="center"><strong><?php echo $ArtsHindu ?></strong></td>
			<td align="center"><strong><?php echo $ArtsHinduCivi ?></strong></td>
			<td align="center"><strong><?php echo $ArtsIslam ?></strong></td>
			<td align="center"><strong><?php echo $ArtsIslamCivi ?></strong></td>
			<td align="center"><strong><?php echo $ArtsArt ?></strong></td>
			<td align="center"><strong><?php echo $ArtsDanBhar ?></strong></td>
			<td align="center"><strong><?php echo $ArtsDanIndi ?></strong></td>
			<td align="center"><strong><?php echo $ArtsCarMus ?></strong></td>
			<td align="center"><strong><?php echo $ArtsOrilMus ?></strong></td>
			<td align="center"><strong><?php echo $ArtsWesMus ?></strong></td>
			<td align="center"><strong><?php echo $ArtsDraTheSin ?></strong></td>
			<td align="center"><strong><?php echo $ArtsDraTheTam ?></strong></td>
			<td align="center"><strong><?php echo $ArtsDraTheEng ?></strong></td>
			<td align="center"><strong><?php echo $ArtsSinhala ?></strong></td>
			<td align="center"><strong><?php echo $ArtsTamil ?></strong></td>
			<td align="center"><strong><?php echo $ArtsEnglish ?></strong></td>
			<td align="center"><strong><?php echo $ArtsArabic ?></strong></td>
			<td align="center"><strong><?php echo $ArtsPali ?></strong></td>
			<td align="center"><strong><?php echo $ArtsSanskrit ?></strong></td>
			
			<!--<td align="center"><strong><?php echo $ArtsTot ?></strong></td>-->
						
				
			
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
