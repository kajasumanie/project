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
				include('dbconfig.php');
				$categoryid=$_POST["categoryid"];

			$sql=("SELECT * FROM schdata,studentpop,grpsubstudp WHERE Scid=stScid and Scid=SubScid and Station='School'");
			$categoryid=$_POST["categoryid"];
			if($categoryid!="")
		{
			$sql=$sql."And Category='$categoryid'";
			$funcid=$_POST["funcid"];
			if($funcid!="")
		{
			$sql=$sql."And Func='$funcid'";
			$typeid=$_POST["typeid"];
			if($typeid!="")
			{
				$sql=$sql . " And Type='$typeid'";
			}
		}elseif($funcid=="")
		{
			$typeid=$_POST["typeid"];
			if($typeid!=""){
				$sql=$sql . " And Type='$typeid'";
			}
		}
		}elseif($categoryid=="")
		{
			$funcid=$_POST["funcid"];
			if($funcid!="")
		{
			$sql=$sql."And Func='$funcid'";
			$typeid=$_POST["typeid"];
			if($typeid!="")
			{
				$sql=$sql . " And Type='$typeid'";
			}
		}elseif($funcid=="")
		{
			$typeid=$_POST["typeid"];
			if($typeid!=""){
				$sql=$sql . " And Type='$typeid'";
			}
		}
		}


			$count=1;

				$primTotM=$primTotF=$primTot=$primTotPClass=$secTotM=$secTotF=$secTot=$secTotPClass=$advTotM=$advTotF=$advTot=$advTotPClass=$TotM=$TotF=$Tot=$TotPClass=$SpeTot=$GTot=0;

				$JafprimTotM=0;
				$JafprimTotF=0;
				$JafprimTot=0;
				$JafprimTotPClass=0;
				$JafsecTotM=0;
				$JafsecTotF=0;
				$JafsecTot=0;
				$JafsecTotPClass=0;
				$JafadvTotM=0;
				$JafadvTotF=0;
				$JafadvTot=0;
				$JafadvTotPClass=0;
				$JafTotM=0;
				$JafTotF=0;
				$JafTot=0;
				$JafTotPClass=0;
				$JafSpeTot=0;
				$JafGTot=0;


				$ValprimTotM=0;
				$ValprimTotF=0;
				$ValprimTot=0;
				$ValprimTotPClass=0;
				$ValsecTotM=0;
				$ValsecTotF=0;
				$ValsecTot=0;
				$ValsecTotPClass=0;
				$ValadvTotM=0;
				$ValadvTotF=0;
				$ValadvTot=0;
				$ValadvTotPClass=0;
				$ValTotM=0;
				$ValTotF=0;
				$ValTot=0;
				$ValTotPClass=0;
				$ValSpeTot=0;
				$ValGTot=0;

				$VadprimTotM=0;
				$VadprimTotF=0;
				$VadprimTot=0;
				$VadprimTotPClass=0;
				$VadsecTotM=0;
				$VadsecTotF=0;
				$VadsecTot=0;
				$VadsecTotPClass=0;
				$VadadvTotM=0;
				$VadadvTotF=0;
				$VadadvTot=0;
				$VadadvTotPClass=0;
				$VadTotM=0;
				$VadTotF=0;
				$VadTot=0;
				$VadTotPClass=0;
				$VadSpeTot=0;
				$VadGTot=0;

				$TheprimTotM=0;
				$TheprimTotF=0;
				$TheprimTot=0;
				$TheprimTotPClass=0;
				$ThesecTotM=0;
				$ThesecTotF=0;
				$ThesecTot=0;
				$ThesecTotPClass=0;
				$TheadvTotM=0;
				$TheadvTotF=0;
				$TheadvTot=0;
				$TheadvTotPClass=0;
				$TheTotM=0;
				$TheTotF=0;
				$TheTot=0;
				$TheTotPClass=0;
				$TheSpeTot=0;
				$TheGTot=0;

				$IslprimTotM=0;
				$IslprimTotF=0;
				$IslprimTot=0;
				$IslprimTotPClass=0;
				$IslsecTotM=0;
				$IslsecTotF=0;
				$IslsecTot=0;
				$IslsecTotPClass=0;
				$IsladvTotM=0;
				$IsladvTotF=0;
				$IsladvTot=0;
				$IsladvTotPClass=0;
				$IslTotM=0;
				$IslTotF=0;
				$IslTot=0;
				$IslTotPClass=0;
				$IslSpeTot=0;
				$IslGTot=0;

				$KilprimTotM=0;
				$KilprimTotF=0;
				$KilprimTot=0;
				$KilprimTotPClass=0;
				$KilsecTotM=0;
				$KilsecTotF=0;
				$KilsecTot=0;
				$KilsecTotPClass=0;
				$KiladvTotM=0;
				$KiladvTotF=0;
				$KiladvTot=0;
				$KiladvTotPClass=0;
				$KilTotM=0;
				$KilTotF=0;
				$KilTot=0;
				$KilTotPClass=0;
				$KilSpeTot=0;
				$KilGTot=0;

				$ManprimTotM=0;
				$ManprimTotF=0;
				$ManprimTot=0;
				$ManprimTotPClass=0;
				$MansecTotM=0;
				$MansecTotF=0;
				$MansecTot=0;
				$MansecTotPClass=0;
				$ManadvTotM=0;
				$ManadvTotF=0;
				$ManadvTot=0;
				$ManadvTotPClass=0;
				$ManTotM=0;
				$ManTotF=0;
				$ManTot=0;
				$ManTotPClass=0;
				$ManSpeTot=0;
				$ManGTot=0;

				$MadprimTotM=0;
				$MadprimTotF=0;
				$MadprimTot=0;
				$MadprimTotPClass=0;
				$MadsecTotM=0;
				$MadsecTotF=0;
				$MadsecTot=0;
				$MadsecTotPClass=0;
				$MadadvTotM=0;
				$MadadvTotF=0;
				$MadadvTot=0;
				$MadadvTotPClass=0;
				$MadTotM=0;
				$MadTotF=0;
				$MadTot=0;
				$MadTotPClass=0;
				$MadSpeTot=0;
				$MadGTot=0;

				$VaNprimTotM=0;
				$VaNprimTotF=0;
				$VaNprimTot=0;
				$VaNprimTotPClass=0;
				$VaNsecTotM=0;
				$VaNsecTotF=0;
				$VaNsecTot=0;
				$VaNsecTotPClass=0;
				$VaNadvTotM=0;
				$VaNadvTotF=0;
				$VaNadvTot=0;
				$VaNadvTotPClass=0;
				$VaNTotM=0;
				$VaNTotF=0;
				$VaNTot=0;
				$VaNTotPClass=0;
				$VaNSpeTot=0;
				$VaNGTot=0;

				$VaSprimTotM=0;
				$VaSprimTotF=0;
				$VaSprimTot=0;
				$VaSprimTotPClass=0;
				$VaSsecTotM=0;
				$VaSsecTotF=0;
				$VaSsecTot=0;
				$VaSsecTotPClass=0;
				$VaSadvTotM=0;
				$VaSadvTotF=0;
				$VaSadvTot=0;
				$VaSadvTotPClass=0;
				$VaSTotM=0;
				$VaSTotF=0;
				$VaSTot=0;
				$VaSTotPClass=0;
				$VaSSpeTot=0;
				$VaSGTot=0;

				$MulprimTotM=0;
				$MulprimTotF=0;
				$MulprimTot=0;
				$MulprimTotPClass=0;
				$MulsecTotM=0;
				$MulsecTotF=0;
				$MulsecTot=0;
				$MulsecTotPClass=0;
				$MuladvTotM=0;
				$MuladvTotF=0;
				$MuladvTot=0;
				$MuladvTotPClass=0;
				$MulTotM=0;
				$MulTotF=0;
				$MulTot=0;
				$MulTotPClass=0;
				$MulSpeTot=0;
				$MulGTot=0;

				$ThuprimTotM=0;
				$ThuprimTotF=0;
				$ThuprimTot=0;
				$ThuprimTotPClass=0;
				$ThusecTotM=0;
				$ThusecTotF=0;
				$ThusecTot=0;
				$ThusecTotPClass=0;
				$ThuadvTotM=0;
				$ThuadvTotF=0;
				$ThuadvTot=0;
				$ThuadvTotPClass=0;
				$ThuTotM=0;
				$ThuTotF=0;
				$ThuTot=0;
				$ThuTotPClass=0;
				$ThuSpeTot=0;
				$ThuGTot=0;


			$result=mysql_query("$sql and schdata.Zone='JAFFNA'");
			while($test = mysql_fetch_array($result))
			{
				$JafprimTotM=$JafprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$JafprimTotF=$JafprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$JafprimTot=$JafprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$JafprimTotPClass=$JafprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$JafsecTotM=$JafsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$JafsecTotF=$JafsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$JafsecTot=$JafsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$JafsecTotPClass=$JafsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$JafadvTotM=$JafadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$JafadvTotF=$JafadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$JafadvTot=$JafadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$JafadvTotPClass=$JafadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$JafTotM=$JafTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$JafTotF=$JafTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$JafTot=$JafTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$JafTotPClass=$JafTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$JafSpeTot=$JafSpeTot+$test['SpeInCentre'];
				$JafGTot=$JafGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];

			}

			$result=mysql_query("$sql and schdata.Zone='VALIKAMAM'");
			while($test = mysql_fetch_array($result))
				{
				$ValprimTotM=$ValprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$ValprimTotF=$ValprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$ValprimTot=$ValprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$ValprimTotPClass=$ValprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$ValsecTotM=$ValsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$ValsecTotF=$ValsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$ValsecTot=$ValsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$ValsecTotPClass=$ValsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$ValadvTotM=$ValadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$ValadvTotF=$ValadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$ValadvTot=$ValadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$ValadvTotPClass=$ValadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$ValTotM=$ValTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$ValTotF=$ValTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$ValTot=$ValTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$ValTotPClass=$ValTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$ValSpeTot=$ValSpeTot+$test['SpeInCentre'];
				$ValGTot=$ValGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];

				}

			$result=mysql_query("$sql and schdata.Zone='VADAMARACHCHI'");
			while($test = mysql_fetch_array($result))
				{
				$VadprimTotM=$VadprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$VadprimTotF=$VadprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$VadprimTot=$VadprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$VadprimTotPClass=$VadprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$VadsecTotM=$VadsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$VadsecTotF=$VadsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$VadsecTot=$VadsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$VadsecTotPClass=$VadsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$VadadvTotM=$VadadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$VadadvTotF=$VadadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$VadadvTot=$VadadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$VadadvTotPClass=$VadadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$VadTotM=$VadTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$VadTotF=$VadTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$VadTot=$VadTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$VadTotPClass=$VadTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$VadSpeTot=$VadSpeTot+$test['SpeInCentre'];
				$VadGTot=$VadGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];

				}
			$result=mysql_query("$sql and schdata.Zone='THENMARACHCHI'");
			while($test = mysql_fetch_array($result))
				{
				$TheprimTotM=$TheprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$TheprimTotF=$TheprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$TheprimTot=$TheprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$TheprimTotPClass=$TheprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$ThesecTotM=$ThesecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$ThesecTotF=$ThesecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$ThesecTot=$ThesecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$ThesecTotPClass=$ThesecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$TheadvTotM=$TheadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$TheadvTotF=$TheadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$TheadvTot=$TheadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$TheadvTotPClass=$TheadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$TheTotM=$TheTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$TheTotF=$TheTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$TheTot=$TheTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$TheTotPClass=$TheTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$TheSpeTot=$TheSpeTot+$test['SpeInCentre'];
				$TheGTot=$TheGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='ISLANDS'");
			while($test = mysql_fetch_array($result))
				{
				$IslprimTotM=$IslprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$IslprimTotF=$IslprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$IslprimTot=$IslprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$IslprimTotPClass=$IslprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$IslsecTotM=$IslsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$IslsecTotF=$IslsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$IslsecTot=$IslsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$IslsecTotPClass=$IslsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$IsladvTotM=$IsladvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$IsladvTotF=$IsladvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$IsladvTot=$IsladvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$IsladvTotPClass=$IsladvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$IslTotM=$IslTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$IslTotF=$IslTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$IslTot=$IslTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$IslTotPClass=$IslTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$IslSpeTot=$IslSpeTot+$test['SpeInCentre'];
				$IslGTot=$IslGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='KILINOCHCHI'");
			while($test = mysql_fetch_array($result))
				{
				$KilprimTotM=$KilprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$KilprimTotF=$KilprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$KilprimTot=$KilprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$KilprimTotPClass=$KilprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$KilsecTotM=$KilsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$KilsecTotF=$KilsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$KilsecTot=$KilsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$KilsecTotPClass=$KilsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$KiladvTotM=$KiladvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$KiladvTotF=$KiladvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$KiladvTot=$KiladvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$KiladvTotPClass=$KiladvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$KilTotM=$KilTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$KilTotF=$KilTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$KilTot=$KilTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$KilTotPClass=$KilTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$KilSpeTot=$KilSpeTot+$test['SpeInCentre'];
				$KilGTot=$KilGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];

				}
			$result=mysql_query("$sql and schdata.Zone='MANNAR'");
			while($test = mysql_fetch_array($result))
				{
				$ManprimTotM=$ManprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$ManprimTotF=$ManprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$ManprimTot=$ManprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$ManprimTotPClass=$ManprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$MansecTotM=$MansecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$MansecTotF=$MansecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$MansecTot=$MansecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$MansecTotPClass=$MansecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$ManadvTotM=$ManadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$ManadvTotF=$ManadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$ManadvTot=$ManadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$ManadvTotPClass=$ManadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$ManTotM=$ManTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$ManTotF=$ManTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$ManTot=$ManTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$ManTotPClass=$ManTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$ManSpeTot=$ManSpeTot+$test['SpeInCentre'];
				$ManGTot=$ManGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='MADHU'");
			while($test = mysql_fetch_array($result))
				{
				$MadprimTotM=$MadprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$MadprimTotF=$MadprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$MadprimTot=$MadprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$MadprimTotPClass=$MadprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$MadsecTotM=$MadsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$MadsecTotF=$MadsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$MadsecTot=$MadsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$MadsecTotPClass=$MadsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$MadadvTotM=$MadadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$MadadvTotF=$MadadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$MadadvTot=$MadadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$MadadvTotPClass=$MadadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$MadTotM=$MadTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$MadTotF=$MadTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$MadTot=$MadTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$MadTotPClass=$MadTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$MadSpeTot=$MadSpeTot+$test['SpeInCentre'];
				$MadGTot=$MadGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='VAVUNIYA NORTH'");
			while($test = mysql_fetch_array($result))
				{
				$VaNprimTotM=$VaNprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$VaNprimTotF=$VaNprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$VaNprimTot=$VaNprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$VaNprimTotPClass=$VaNprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$VaNsecTotM=$VaNsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$VaNsecTotF=$VaNsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$VaNsecTot=$VaNsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$VaNsecTotPClass=$VaNsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$VaNadvTotM=$VaNadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$VaNadvTotF=$VaNadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$VaNadvTot=$VaNadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$VaNadvTotPClass=$VaNadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$VaNTotM=$VaNTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$VaNTotF=$VaNTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$VaNTot=$VaNTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$VaNTotPClass=$VaNTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$VaNSpeTot=$VaNSpeTot+$test['SpeInCentre'];
				$VaNGTot=$VaNGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='VAVUNIYA SOUTH'");
			while($test = mysql_fetch_array($result))
				{
				$VaSprimTotM=$VaSprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$VaSprimTotF=$VaSprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$VaSprimTot=$VaSprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$VaSprimTotPClass=$VaSprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$VaSsecTotM=$VaSsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$VaSsecTotF=$VaSsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$VaSsecTot=$VaSsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$VaSsecTotPClass=$VaSsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$VaSadvTotM=$VaSadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$VaSadvTotF=$VaSadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$VaSadvTot=$VaSadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$VaSadvTotPClass=$VaSadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$VaSTotM=$VaSTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$VaSTotF=$VaSTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$VaSTot=$VaSTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$VaSTotPClass=$VaSTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$VaSSpeTot=$VaSSpeTot+$test['SpeInCentre'];
				$VaSGTot=$VaSGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='MULLAITIVU'");
			while($test = mysql_fetch_array($result))
				{
				$MulprimTotM=$MulprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$MulprimTotF=$MulprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$MulprimTot=$MulprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$MulprimTotPClass=$MulprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$MulsecTotM=$MulsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$MulsecTotF=$MulsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$MulsecTot=$MulsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$MulsecTotPClass=$MulsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$MuladvTotM=$MuladvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$MuladvTotF=$MuladvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$MuladvTot=$MuladvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$MuladvTotPClass=$MuladvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$MulTotM=$MulTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$MulTotF=$MulTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$MulTot=$MulTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$MulTotPClass=$MulTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$MulSpeTot=$MulSpeTot+$test['SpeInCentre'];
				$MulGTot=$MulGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql and schdata.Zone='THUNUKKAI'");
			while($test = mysql_fetch_array($result))
				{
				$ThuprimTotM=$ThuprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$ThuprimTotF=$ThuprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$ThuprimTot=$ThuprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$ThuprimTotPClass=$ThuprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$ThusecTotM=$ThusecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$ThusecTotF=$ThusecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$ThusecTot=$ThusecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$ThusecTotPClass=$ThusecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$ThuadvTotM=$ThuadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$ThuadvTotF=$ThuadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$ThuadvTot=$ThuadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$ThuadvTotPClass=$ThuadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$ThuTotM=$ThuTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$ThuTotF=$ThuTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$ThuTot=$ThuTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$ThuTotPClass=$ThuTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$ThuSpeTot=$ThuSpeTot+$test['SpeInCentre'];
				$ThuGTot=$ThuGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];


				}
			$result=mysql_query("$sql");
			while($test = mysql_fetch_array($result))
				{

				$primTotM=$primTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
				$primTotF=$primTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
				$primTot=$primTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
				$primTotPClass=$primTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

				$secTotM=$secTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
				$secTotF=$secTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
				$secTot=$secTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
				$secTotPClass=$secTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

				$advTotM=$advTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$advTotF=$advTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$advTot=$advTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$advTotPClass=$advTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$TotM=$TotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$TotF=$TotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$Tot=$Tot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$TotPClass=$TotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

				$SpeTot=$SpeTot+$test['SpeInCentre'];
				$GTot=$GTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];



				}
			?>



			<tr><td>Jaffna</td>
			<?php

			echo"<td align='right'><font color='black'>". $JafprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $JafsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $JafadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $JafTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $JafSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $JafGTot. "</font></td>";

			echo"</tr>";
			echo"<tr><td>Valikamam</td>";
			echo"<td align='right'><font color='black'>". $ValprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ValsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ValadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ValTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ValSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ValGTot. "</font></td>";

			echo"</tr>";
			echo"<tr><td>Vadamarachchi</td>";
			echo"<td align='right'><font color='black'>". $VadprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VadsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VadadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VadTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VadSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VadGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Thenmarachchi</td>";
			echo"<td align='right'><font color='black'>". $TheprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ThesecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThesecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThesecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThesecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $TheadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $TheTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $TheSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $TheGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Islands</td>";
			echo"<td align='right'><font color='black'>". $IslprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $IslsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $IsladvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $IsladvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $IsladvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $IsladvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $IslTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $IslSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $IslGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Kilinochchi</td>";
			echo"<td align='right'><font color='black'>". $KilprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $KilsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $KiladvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $KiladvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $KiladvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $KiladvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $KilTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $KilSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $KilGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Mannar</td>";
			echo"<td align='right'><font color='black'>". $ManprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MansecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MansecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MansecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MansecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ManadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ManTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ManSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ManGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Madhu</td>";
			echo"<td align='right'><font color='black'>". $MadprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MadsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MadadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MadTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MadSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MadGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Vavuniya North</td>";
			echo"<td align='right'><font color='black'>". $VaNprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaNsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaNadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaNTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaNSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaNGTot. "</font></td>";

			echo"</tr>";
			echo"<tr><td>Vavuniya South</td>";
			echo"<td align='right'><font color='black'>". $VaSprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaSsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaSadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaSTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $VaSSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $VaSGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Mullaitivu</td>";
			echo"<td align='right'><font color='black'>". $MulprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MulsecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulsecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulsecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulsecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MuladvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MuladvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MuladvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MuladvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MulTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $MulSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $MulGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Thunukkai</td>";
			echo"<td align='right'><font color='black'>". $ThuprimTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuprimTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuprimTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuprimTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ThusecTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThusecTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThusecTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThusecTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ThuadvTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuadvTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuadvTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuadvTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ThuTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $ThuSpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $ThuGTot. "</font></td>";
			echo"</tr>";
			echo"<tr><td>Province</td>";
			echo"<td align='right'><font color='black'>". $primTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $primTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $primTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $primTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $secTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $secTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $secTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $secTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $advTotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $advTotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $advTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $advTotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $TotM. "</font></td>";
			echo"<td align='right'><font color='black'>". $TotF. "</font></td>";
			echo"<td align='right'><font color='black'>". $Tot. "</font></td>";
			echo"<td align='right'><font color='black'>". $TotPClass. "</font></td>";

			echo"<td align='right'><font color='black'>". $SpeTot. "</font></td>";
			echo"<td align='right'><font color='black'>". $GTot. "</font></td>";
			echo"</tr>";
			?>
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
