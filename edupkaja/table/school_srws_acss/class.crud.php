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
				$g12ComBusiStu=0;
				$g12ComAcco=0;
				$g12ComEcon=0;
				$g12ComBusiSta=0;
				$g12ComGeog=0;
				$g12ComPoli=0;
				$g12ComIndiHis=0;
				$g12ComEuroHis=0;
				$g12ComModeHis=0;
				$g12ComLogi=0;
				$g12ComEngl=0;
				$g12ComAgro=0;
				$g12ComCombai=0;
				$g12CommICT=0;
				$g12ComTot=0;
								
				$g13ComBusiStu=0;
				$g13ComAcco=0;
				$g13ComEcon=0;
				$g13ComBusiSta=0;
				$g13ComGeog=0;
				$g13ComPoli=0;
				$g13ComIndiHis=0;
				$g13ComEuroHis=0;
				$g13ComModeHis=0;
				$g13ComLogi=0;
				$g13ComEngl=0;
				$g13ComAgro=0;
				$g13ComCombai=0;
				$g13CommICT=0;
				$g13ComTot=0;
				
				$g13RComBusiStu=0;
				$g13RComAcco=0;
				$g13RComEcon=0;
				$g13RComBusiSta=0;
				$g13RComGeog=0;
				$g13RComPoli=0;
				$g13RComIndiHis=0;
				$g13RComEuroHis=0;
				$g13RComModeHis=0;
				$g13RComLogi=0;
				$g13RComEngl=0;
				$g13RComAgro=0;
				$g13RComCombai=0;
				$g13RCommICT=0;
				$g13RComTot=0;
				
				$g12ComBusiStuE=0;
				$g12ComAccoE=0;
				$g12ComEconE=0;
				$g12ComGeogE=0;
				$g12ComPoliE=0;
				$g12ComAgroE=0;
				$g12ComTotE=0;
				
				$g13ComBusiStuE=0;
				$g13ComAccoE=0;
				$g13ComEconE=0;
				$g13ComGeogE=0;
				$g13ComPoliE=0;
				$g13ComAgroE=0;
				$g13ComTotE=0;
				
				$g13RComBusiStuE=0;
				$g13RComAccoE=0;
				$g13RComEconE=0;
				$g13RComGeogE=0;
				$g13RComPoliE=0;
				$g13RComAgroE=0;
				$g13RComTotE=0;
											
				$ComBusiStu=0;
				$ComAcco=0;
				$ComEcon=0;
				$ComBusiSta=0;
				$ComGeog=0;
				$ComPoli=0;
				$ComIndiHis=0;
				$ComEuroHis=0;
				$ComModeHis=0;
				$ComLogi=0;
				$ComEngl=0;
				$ComAgro=0;
				$ComCombai=0;
				$CommICT=0;
				$ComTot=0;
												
			$result=mysql_query("$sql Order By ZoneSort,Division ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G12ComBusinessStudies']+$test['G12ComAccounting']+$test['G12ComEconomics']+$test['G12ComBusinessStatistics']+$test['G12ComGeography']+$test['G12ComPoliticalScience']+$test['G12ComIndianHistory']+$test['G12ComEuropeHistory']+$test['G12ComModernWorldHistory']+$test['G12ComLogic']+$test['G12ComEnglish']+$test['G12ComAgroScience']+$test['G12ComCombainedmaths']+$test['G12ComICT']+$test['G12ComTotal']+$test['G13ComBusinessStudies']+$test['G13ComAccounting']+$test['G13ComEconomics']+$test['G13ComBusinessStatistics']+$test['G13ComGeography']+$test['G13ComPoliticalScience']+$test['G13ComIndianHistory']+$test['G13ComEuropeHistory']+$test['G13ComModernWorldHistory']+$test['G13ComLogic']+$test['G13ComEnglish']+$test['G13ComAgroScience']+$test['G13ComCombainedmaths']+$test['G13ComICT']+$test['G13ComTotal']+$test['G13RComBusinessStudies']+$test['G13RComAccounting']+$test['G13RComEconomics']+$test['G13RComBusinessStatistics']+$test['G13RComGeography']+$test['G13RComPoliticalScience']+$test['G13RComIndianHistory']+$test['G13RComEuropeHistory']+$test['G13RComModernWorldHistory']+$test['G13RComLogic']+$test['G13RComEnglish']+$test['G13RComAgroScience']+$test['G13RComCombainedmaths']+$test['G13RComICT']+$test['G13RComTotal']+$test['G12ComBusinessStudiesE']+$test['G12ComAccountingE']+$test['G12ComEconomicsE']+$test['G12ComGeographyE']+$test['G12ComPoliticalScienceE']+$test['G12ComAgroScienceE']+$test['G12ComTotalE']+$test['G13ComBusinessStudiesE']+$test['G13ComAccountingE']+$test['G13ComEconomicsE']+$test['G13ComGeographyE']+$test['G13ComPoliticalScienceE']+$test['G13ComAgroScienceE']+$test['G13ComTotalE']+$test['G13RComBusinessStudiesE']+$test['G13RComAccountingE']+$test['G13RComEconomicsE']+$test['G13RComGeographyE']+$test['G13RComPoliticalScienceE']+$test['G13RComAgroScienceE']+$test['G13RComTotalE'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Division']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Zone']. "</font></td>";
								
				echo"<td align='right'><font color='black'>". $test['G12ComBusinessStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComAccounting']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComBusinessStatistics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComPoliticalScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComIndianHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComEuropeHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComModernWorldHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComLogic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComCombainedmaths']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComICT']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G12ComTotal']. "</font></td>";
				
								
				echo"<td align='right'><font color='black'>". $test['G13ComBusinessStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComAccounting']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComBusinessStatistics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComPoliticalScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComIndianHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComEuropeHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComModernWorldHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComLogic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComCombainedmaths']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComICT']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13ComTotal']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13RComBusinessStudies']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComAccounting']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComEconomics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComBusinessStatistics']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComGeography']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComPoliticalScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComIndianHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComEuropeHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComModernWorldHistory']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComLogic']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComEnglish']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComAgroScience']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComCombainedmaths']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComICT']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13RComTotal']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G12ComBusinessStudiesE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComAccountingE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComEconomicsE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComGeographyE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComPoliticalScienceE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G12ComAgroScienceE']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G12ComTotalE']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13ComBusinessStudiesE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComAccountingE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComEconomicsE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComGeographyE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComPoliticalScienceE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13ComAgroScienceE']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13ComTotalE']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['G13RComBusinessStudiesE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComAccountingE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComEconomicsE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComGeographyE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComPoliticalScienceE']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G13RComAgroScienceE']. "</font></td>";
				//echo"<td align='right'><font color='black'>". $test['G13RComTotalE']. "</font></td>";
			
				$TotComBusiStu=$test['G12ComBusinessStudies']+$test['G13ComBusinessStudies']+$test['G13RComBusinessStudies']+$test['G12ComBusinessStudiesE']+$test['G13ComBusinessStudiesE']+$test['G13RComBusinessStudiesE'];
				$TotComAcco=$test['G12ComAccounting']+$test['G13ComAccounting']+$test['G13RComAccounting']+$test['G12ComAccountingE']+$test['G13ComAccountingE']+$test['G13RComAccountingE'];
				$TotComEcon=$test['G12ComEconomics']+$test['G13ComEconomics']+$test['G13RComEconomics']+$test['G12ComEconomicsE']+$test['G13ComEconomicsE']+$test['G13RComEconomicsE'];
				$TotComBusiSta=$test['G12ComBusinessStatistics']+$test['G13ComBusinessStatistics']+$test['G13RComBusinessStatistics'];
				$TotComGeog=$test['G12ComGeography']+$test['G13ComGeography']+$test['G13RComGeography']+$test['G12ComGeographyE']+$test['G13ComGeographyE']+$test['G13RComGeographyE'];
				$TotComPoli=$test['G12ComPoliticalScience']+$test['G13ComPoliticalScience']+$test['G13RComPoliticalScience']+$test['G12ComPoliticalScienceE']+$test['G13ComPoliticalScienceE']+$test['G13RComPoliticalScienceE'];
				$TotComIndiHis=$test['G12ComIndianHistory']+$test['G13ComIndianHistory']+$test['G13RComIndianHistory'];
				$TotComEuroHis=$test['G12ComEuropeHistory']+$test['G13ComEuropeHistory']+$test['G13RComEuropeHistory'];
				$TotComModeHis=$test['G12ComModernWorldHistory']+$test['G13ComModernWorldHistory']+$test['G13RComModernWorldHistory'];
				$TotComLogi=$test['G12ComLogic']+$test['G13ComLogic']+$test['G13RComLogic'];
				$TotComEngl=$test['G12ComEnglish']+$test['G13ComEnglish']+$test['G13RComEnglish'];
				$TotComAgro=$test['G12ComAgroScience']+$test['G13ComAgroScience']+$test['G13RComAgroScience']+$test['G12ComAgroScienceE']+$test['G13ComAgroScienceE']+$test['G13RComAgroScienceE'];
				$TotComCombai=$test['G12ComCombainedmaths']+$test['G13ComCombainedmaths']+$test['G13RComCombainedmaths'];
				$TotCommICT=$test['G12ComICT']+$test['G13ComICT']+$test['G13RComICT'];
				$TotComTotal=$test['G12ComTotal']+$test['G13ComTotal']+$test['G13RComTotal']+$test['G12ComTotalE']+$test['G13ComTotalE']+$test['G13RComTotalE'];
								
				echo"<td align='right'><font color='black'>". $TotComBusiStu. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComAcco. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComEcon. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComBusiSta. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComGeog. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComPoli. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComIndiHis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComEuroHis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComModeHis. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComLogi. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComEngl. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComAgro. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotComCombai. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotCommICT. "</font></td>";
				//echo"<td align='right'><font color='black'>". $TotComTotal. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g12ComBusiStu=$g12ComBusiStu+$test['G12ComBusinessStudies'];
				$g12ComAcco=$g12ComAcco+$test['G12ComAccounting'];
				$g12ComEcon=$g12ComEcon+$test['G12ComEconomics'];
				$g12ComBusiSta=$g12ComBusiSta+$test['G12ComBusinessStatistics'];
				$g12ComGeog=$g12ComGeog+$test['G12ComGeography'];
				$g12ComPoli=$g12ComPoli+$test['G12ComPoliticalScience'];
				$g12ComIndiHis=$g12ComIndiHis+$test['G12ComIndianHistory'];
				$g12ComEuroHis=$g12ComEuroHis+$test['G12ComEuropeHistory'];
				$g12ComModeHis=$g12ComModeHis+$test['G12ComModernWorldHistory'];
				$g12ComLogi=$g12ComLogi+$test['G12ComLogic'];
				$g12ComEngl=$g12ComEngl+$test['G12ComEnglish'];
				$g12ComAgro=$g12ComAgro+$test['G12ComAgroScience'];
				$g12ComCombai=$g12ComCombai+$test['G12ComCombainedmaths'];
				$g12CommICT=$g12CommICT+$test['G12ComICT'];
				$g12ComTot=$g12ComTot+$test['G12ComTotal'];
								
				$g13ComBusiStu=$g13ComBusiStu+$test['G13ComBusinessStudies'];
				$g13ComAcco=$g13ComAcco+$test['G13ComAccounting'];
				$g13ComEcon=$g13ComEcon+$test['G13ComEconomics'];
				$g13ComBusiSta=$g13ComBusiSta+$test['G13ComBusinessStatistics'];
				$g13ComGeog=$g13ComGeog+$test['G13ComGeography'];
				$g13ComPoli=$g13ComPoli+$test['G13ComPoliticalScience'];
				$g13ComIndiHis=$g13ComIndiHis+$test['G13ComIndianHistory'];
				$g13ComEuroHis=$g13ComEuroHis+$test['G13ComEuropeHistory'];
				$g13ComModeHis=$g13ComModeHis+$test['G13ComModernWorldHistory'];
				$g13ComLogi=$g13ComLogi+$test['G13ComLogic'];
				$g13ComEngl=$g13ComEngl+$test['G13ComEnglish'];
				$g13ComAgro=$g13ComAgro+$test['G13ComAgroScience'];
				$g13ComCombai=$g13ComCombai+$test['G13ComCombainedmaths'];
				$g13CommICT=$g13CommICT+$test['G13ComICT'];
				$g13ComTot=$g13ComTot+$test['G13ComTotal'];
				
				$g13RComBusiStu=$g13RComBusiStu+$test['G13RComBusinessStudies'];
				$g13RComAcco=$g13RComAcco+$test['G13RComAccounting'];
				$g13RComEcon=$g13RComEcon+$test['G13RComEconomics'];
				$g13RComBusiSta=$g13RComBusiSta+$test['G13RComBusinessStatistics'];
				$g13RComGeog=$g13RComGeog+$test['G13RComGeography'];
				$g13RComPoli=$g13RComPoli+$test['G13RComPoliticalScience'];
				$g13RComIndiHis=$g13RComIndiHis+$test['G13RComIndianHistory'];
				$g13RComEuroHis=$g13RComEuroHis+$test['G13RComEuropeHistory'];
				$g13RComModeHis=$g13RComModeHis+$test['G13RComModernWorldHistory'];
				$g13RComLogi=$g13RComLogi+$test['G13RComLogic'];
				$g13RComEngl=$g13RComEngl+$test['G13RComEnglish'];
				$g13RComAgro=$g13RComAgro+$test['G13RComAgroScience'];
				$g13RComCombai=$g13RComCombai+$test['G13RComCombainedmaths'];
				$g13RCommICT=$g13RCommICT+$test['G13RComICT'];
				$g13RComTot=$g13RComTot+$test['G13RComTotal'];
				
				$g12ComBusiStuE=$g12ComBusiStuE+$test['G12ComBusinessStudiesE'];
				$g12ComAccoE=$g12ComAccoE+$test['G12ComAccountingE'];
				$g12ComEconE=$g12ComEconE+$test['G12ComEconomicsE'];
				$g12ComGeogE=$g12ComGeogE+$test['G12ComGeographyE'];
				$g12ComPoliE=$g12ComPoliE+$test['G12ComPoliticalScienceE'];
				$g12ComAgroE=$g12ComAgroE+$test['G12ComAgroScienceE'];
				$g12ComTotE=$g12ComTotE+$test['G12ComTotalE'];
				
				$g13ComBusiStuE=$g13ComBusiStuE+$test['G13ComBusinessStudiesE'];
				$g13ComAccoE=$g13ComAccoE+$test['G13ComAccountingE'];
				$g13ComEconE=$g13ComEconE+$test['G13ComEconomicsE'];
				$g13ComGeogE=$g13ComGeogE+$test['G13ComGeographyE'];
				$g13ComPoliE=$g13ComPoliE+$test['G13ComPoliticalScienceE'];
				$g13ComAgroE=$g13ComAgroE+$test['G13ComAgroScienceE'];
				$g13ComTotE=$g13ComTotE+$test['G13ComTotalE'];
				
				$g13RComBusiStuE=$g13RComBusiStuE+$test['G13RComBusinessStudiesE'];
				$g13RComAccoE=$g13RComAccoE+$test['G13RComAccountingE'];
				$g13RComEconE=$g13RComEconE+$test['G13RComEconomicsE'];
				$g13RComGeogE=$g13RComGeogE+$test['G13RComGeographyE'];
				$g13RComPoliE=$g13RComPoliE+$test['G13RComPoliticalScienceE'];
				$g13RComAgroE=$g13RComAgroE+$test['G13RComAgroScienceE'];
				$g13RComTotE=$g13RComTotE+$test['G13RComTotalE'];
											
				$ComBusiStu=$ComBusiStu+$TotComBusiStu;
				$ComAcco=$ComAcco+$TotComAcco;
				$ComEcon=$ComEcon+$TotComEcon;
				$ComBusiSta=$ComBusiSta+$TotComBusiSta;
				$ComGeog=$ComGeog+$TotComGeog;
				$ComPoli=$ComPoli+$TotComPoli;
				$ComIndiHis=$ComIndiHis+$TotComIndiHis;
				$ComEuroHis=$ComEuroHis+$TotComEuroHis;
				$ComModeHis=$ComModeHis+$TotComModeHis;
				$ComLogi=$ComLogi+$TotComLogi;
				$ComEngl=$ComEngl+$TotComEngl;
				$ComAgro=$ComAgro+$TotComAgro;
				$ComCombai=$ComCombai+$TotComCombai;
				$CommICT=$CommICT+$TotCommICT;
				$ComTot=$ComTot+$TotComTotal;
				
								
				$count=$count+1;
				}
			}
		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		
			
			<td colspan='6'>Provincial Total</td>
			
			<td align="center"><strong><?php echo $g12ComBusiStu ?></strong></td>
			<td align="center"><strong><?php echo $g12ComAcco ?></strong></td>
			<td align="center"><strong><?php echo $g12ComEcon ?></strong></td>
			<td align="center"><strong><?php echo $g12ComBusiSta ?></strong></td>
			<td align="center"><strong><?php echo $g12ComGeog ?></strong></td>
			<td align="center"><strong><?php echo $g12ComPoli ?></strong></td>
			<td align="center"><strong><?php echo $g12ComIndiHis ?></strong></td>
			<td align="center"><strong><?php echo $g12ComEuroHis ?></strong></td>
			<td align="center"><strong><?php echo $g12ComModeHis ?></strong></td>
			<td align="center"><strong><?php echo $g12ComLogi ?></strong></td>
			<td align="center"><strong><?php echo $g12ComEngl ?></strong></td>
			<td align="center"><strong><?php echo $g12ComAgro ?></strong></td>
			<td align="center"><strong><?php echo $g12ComCombai ?></strong></td>
			<td align="center"><strong><?php echo $g12CommICT ?></strong></td>
			<!--<td align="center"><strong><?php echo $g12ComTot ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13ComBusiStu ?></strong></td>
			<td align="center"><strong><?php echo $g13ComAcco ?></strong></td>
			<td align="center"><strong><?php echo $g13ComEcon ?></strong></td>
			<td align="center"><strong><?php echo $g13ComBusiSta ?></strong></td>
			<td align="center"><strong><?php echo $g13ComGeog ?></strong></td>
			<td align="center"><strong><?php echo $g13ComPoli ?></strong></td>
			<td align="center"><strong><?php echo $g13ComIndiHis ?></strong></td>
			<td align="center"><strong><?php echo $g13ComEuroHis ?></strong></td>
			<td align="center"><strong><?php echo $g13ComModeHis ?></strong></td>
			<td align="center"><strong><?php echo $g13ComLogi ?></strong></td>
			<td align="center"><strong><?php echo $g13ComEngl ?></strong></td>
			<td align="center"><strong><?php echo $g13ComAgro ?></strong></td>
			<td align="center"><strong><?php echo $g13ComCombai ?></strong></td>
			<td align="center"><strong><?php echo $g13CommICT ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13ComTot ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13RComBusiStu ?></strong></td>
			<td align="center"><strong><?php echo $g13RComAcco ?></strong></td>
			<td align="center"><strong><?php echo $g13RComEcon ?></strong></td>
			<td align="center"><strong><?php echo $g13RComBusiSta ?></strong></td>
			<td align="center"><strong><?php echo $g13RComGeog ?></strong></td>
			<td align="center"><strong><?php echo $g13RComPoli ?></strong></td>
			<td align="center"><strong><?php echo $g13RComIndiHis ?></strong></td>
			<td align="center"><strong><?php echo $g13RComEuroHis ?></strong></td>
			<td align="center"><strong><?php echo $g13RComModeHis ?></strong></td>
			<td align="center"><strong><?php echo $g13RComLogi ?></strong></td>
			<td align="center"><strong><?php echo $g13RComEngl ?></strong></td>
			<td align="center"><strong><?php echo $g13RComAgro ?></strong></td>
			<td align="center"><strong><?php echo $g13RComCombai ?></strong></td>
			<td align="center"><strong><?php echo $g13RCommICT ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13RComTot ?></strong></td>-->
							
			<td align="center"><strong><?php echo $g12ComBusiStuE ?></strong></td>
			<td align="center"><strong><?php echo $g12ComAccoE ?></strong></td>
			<td align="center"><strong><?php echo $g12ComEconE ?></strong></td>
			<td align="center"><strong><?php echo $g12ComGeogE ?></strong></td>
			<td align="center"><strong><?php echo $g12ComPoliE ?></strong></td>
			<td align="center"><strong><?php echo $g12ComAgroE ?></strong></td>
			<!--<td align="center"><strong><?php echo $g12ComTotE ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13ComBusiStuE ?></strong></td>
			<td align="center"><strong><?php echo $g13ComAccoE ?></strong></td>
			<td align="center"><strong><?php echo $g13ComEconE ?></strong></td>
			<td align="center"><strong><?php echo $g13ComGeogE ?></strong></td>
			<td align="center"><strong><?php echo $g13ComPoliE ?></strong></td>
			<td align="center"><strong><?php echo $g13ComAgroE ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13ComTotE ?></strong></td>-->
			
			<td align="center"><strong><?php echo $g13RComBusiStuE ?></strong></td>
			<td align="center"><strong><?php echo $g13RComAccoE ?></strong></td>
			<td align="center"><strong><?php echo $g13RComEconE ?></strong></td>
			<td align="center"><strong><?php echo $g13RComGeogE ?></strong></td>
			<td align="center"><strong><?php echo $g13RComPoliE ?></strong></td>
			<td align="center"><strong><?php echo $g13RComAgroE ?></strong></td>
			<!--<td align="center"><strong><?php echo $g13RComTotE ?></strong></td>-->
				
			<td align="center"><strong><?php echo $ComBusiStu ?></strong></td>
			<td align="center"><strong><?php echo $ComAcco ?></strong></td>
			<td align="center"><strong><?php echo $ComEcon ?></strong></td>
			<td align="center"><strong><?php echo $ComBusiSta ?></strong></td>
			<td align="center"><strong><?php echo $ComGeog ?></strong></td>
			<td align="center"><strong><?php echo $ComPoli ?></strong></td>
			<td align="center"><strong><?php echo $ComIndiHis ?></strong></td>
			<td align="center"><strong><?php echo $ComEuroHis ?></strong></td>
			<td align="center"><strong><?php echo $ComModeHis ?></strong></td>
			<td align="center"><strong><?php echo $ComLogi ?></strong></td>
			<td align="center"><strong><?php echo $ComEngl ?></strong></td>
			<td align="center"><strong><?php echo $ComAgro ?></strong></td>
			<td align="center"><strong><?php echo $ComCombai ?></strong></td>
			<td align="center"><strong><?php echo $CommICT ?></strong></td>
			<!--<td align="center"><strong><?php echo $ComTot ?></strong></td>-->
			
			
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
