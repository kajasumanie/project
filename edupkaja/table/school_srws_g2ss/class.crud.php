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
				$g6MuO=0;
				$g6MuW=0;
				$g6MuC=0;
				$g6Art=0;
				$g6DanO=0;
				$g6DanB=0;
				$g6EngLit=0;
				$g6TamLit=0;
				$g6SinLit=0;
				$g6AraLit=0;
				$g6DraEng=0;
				$g6DraTam=0;
				$g6DraSin=0;
				$g62ndTot=0;
				$g7MuO=0;
				$g7MuW=0;
				$g7MuC=0;
				$g7Art=0;
				$g7DanO=0;
				$g7DanB=0;
				$g7EngLit=0;
				$g7TamLit=0;
				$g7SinLit=0;
				$g7AraLit=0;
				$g7DraEng=0;
				$g7DraTam=0;
				$g7DraSin=0;
				$g72ndTot=0;
				$g8MuO=0;
				$g8MuW=0;
				$g8MuC=0;
				$g8Art=0;
				$g8DanO=0;
				$g8DanB=0;
				$g8EngLit=0;
				$g8TamLit=0;
				$g8SinLit=0;
				$g8AraLit=0;
				$g8DraEng=0;
				$g8DraTam=0;
				$g8DraSin=0;
				$g82ndTot=0;
				$g9MuO=0;
				$g9MuW=0;
				$g9MuC=0;
				$g9Art=0;
				$g9DanO=0;
				$g9DanB=0;
				$g9EngLit=0;
				$g9TamLit=0;
				$g9SinLit=0;
				$g9AraLit=0;
				$g9DraEng=0;
				$g9DraTam=0;
				$g9DraSin=0;
				$g92ndTot=0;
				$g10MuO=0;
				$g10MuW=0;
				$g10MuC=0;
				$g10Art=0;
				$g10DanO=0;
				$g10DanB=0;
				$g10EngLit=0;
				$g10TamLit=0;
				$g10SinLit=0;
				$g10AraLit=0;
				$g10DraEng=0;
				$g10DraTam=0;
				$g10DraSin=0;
				$g102ndTot=0;
				$g11MuO=0;
				$g11MuW=0;
				$g11MuC=0;
				$g11Art=0;
				$g11DanO=0;
				$g11DanB=0;
				$g11EngLit=0;
				$g11TamLit=0;
				$g11SinLit=0;
				$g11AraLit=0;
				$g11DraEng=0;
				$g11DraTam=0;
				$g11DraSin=0;
				$g112ndTot=0;
				$g11RMuO=0;
				$g11RMuW=0;
				$g11RMuC=0;
				$g11RArt=0;
				$g11RDanO=0;
				$g11RDanB=0;
				$g11REngLit=0;
				$g11RTamLit=0;
				$g11RSinLit=0;
				$g11RAraLit=0;
				$g11RDraEng=0;
				$g11RDraTam=0;
				$g11RDraSin=0;
				$g11R2ndTot=0;
				$MusO=0;
				$MusW=0;
				$MusC=0;
				$Art=0;
				$DanO=0;
				$DanB=0;
				$EngL=0;
				$TamL=0;
				$SinL=0;
				$AreL=0;
				$DraE=0;
				$DraT=0;
				$DraS=0;
				$secondTot=0;
			
			$result=mysql_query("$sql Order By Zone ASC");				
			while($test = mysql_fetch_array($result))
			{
				
				
				if(($test['G6MusicOri']+$test['G7MusicOri']+$test['G8MusicOri']+$test['G9MusicOri']+$test['G10MusicOri']+$test['G11MusicOri']+$test['G11RMusicOri']+$test['G6MusicWest']+$test['G7MusicWest']+$test['G8MusicWest']+$test['G9MusicWest']+$test['G10MusicWest']+$test['G11MusicWest']+$test['G11RMusicWest']+$test['G6MusicCarn']+$test['G7MusicCarn']+$test['G8MusicCarn']+$test['G9MusicCarn']+$test['G10MusicCarn']+$test['G11MusicCarn']+$test['G11RMusicCarn']+$test['G6Art']+$test['G7Art']+$test['G8Art']+$test['G9Art']+$test['G10Art']+$test['G11Art']+$test['G11RArt']+$test['G6DancOri']+$test['G7DancOri']+$test['G8DancOri']+$test['G9DancOri']+$test['G10DancOri']+$test['G11DancOri']+$test['G11RDancOri']+$test['G6DancBha']+$test['G7DancBha']+$test['G8DancBha']+$test['G9DancBha']+$test['G10DancBha']+$test['G11DancBha']+$test['G11RDancBha']+$test['G6EngLit']+$test['G7EngLit']+$test['G8EngLit']+$test['G9EngLit']+$test['G10EngLit']+$test['G11EngLit']+$test['G11REngLit']+$test['G6TamilLit']+$test['G7TamilLit']+$test['G8TamilLit']+$test['G9TamilLit']+$test['G10TamilLit']+$test['G11TamilLit']+$test['G11RTamilLit']+$test['G6SinhalaLit']+$test['G7SinhalaLit']+$test['G8SinhalaLit']+$test['G9SinhalaLit']+$test['G10SinhalaLit']+$test['G11SinhalaLit']+$test['G11RSinhalaLit']+$test['G6ArabicLit']+$test['G7ArabicLit']+$test['G8ArabicLit']+$test['G9ArabicLit']+$test['G10ArabicLit']+$test['G11ArabicLit']+$test['G11RArabicLit']+$test['G6DramaEng']+$test['G7DramaEng']+$test['G8DramaEng']+$test['G9DramaEng']+$test['G10DramaEng']+$test['G11DramaEng']+$test['G11RDramaEng']+$test['G6DramaTam']+$test['G7DramaTam']+$test['G8DramaTam']+$test['G9DramaTam']+$test['G10DramaTam']+$test['G11DramaTam']+$test['G11RDramaTam']+$test['G6DramaSin']+$test['G7DramaSin']+$test['G8DramaSin']+$test['G9DramaSin']+$test['G10DramaSin']+$test['G11DramaSin']+$test['G11RDramaSin']+$test['G62ndGroupTot']+$test['G72ndGroupTot']+$test['G82ndGroupTot']+$test['G92ndGroupTot']+$test['G102ndGroupTot']+$test['G112ndGroupTot']+$test['G11R2ndGroupTot'])!= 0){
				echo "<tr>";
				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6MusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6MusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6MusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6Art']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6DancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6DancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6EngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6TamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6SinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6ArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6DramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6DramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G6DramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G62ndGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7MusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7MusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7MusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7Art']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7DancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7DancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7EngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7TamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7SinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7ArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7DramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7DramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G7DramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G72ndGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8MusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8MusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8MusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8Art']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8DancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8DancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8EngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8TamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8SinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8ArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8DramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8DramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G8DramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G82ndGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9MusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9MusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9MusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9Art']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9DancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9DancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9EngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9TamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9SinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9ArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9DramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9DramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G9DramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G92ndGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10MusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10MusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10MusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10Art']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10DancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10DancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10EngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10TamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10SinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10ArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10DramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10DramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G10DramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G102ndGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11MusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11MusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11MusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11Art']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11DancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11DancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11EngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11TamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11SinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11ArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11DramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11DramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11DramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G112ndGroupTot']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RMusicOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RMusicWest']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RMusicCarn']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RArt']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RDancOri']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RDancBha']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11REngLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RTamilLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RSinhalaLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RArabicLit']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RDramaEng']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RDramaTam']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11RDramaSin']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['G11R2ndGroupTot']. "</font></td>";
				$TotMusO=$test['G6MusicOri']+$test['G7MusicOri']+$test['G8MusicOri']+$test['G9MusicOri']+$test['G10MusicOri']+$test['G11MusicOri']+$test['G11RMusicOri'];
				$TotMusW=$test['G6MusicWest']+$test['G7MusicWest']+$test['G8MusicWest']+$test['G9MusicWest']+$test['G10MusicWest']+$test['G11MusicWest']+$test['G11RMusicWest'];
				$TotMusC=$test['G6MusicCarn']+$test['G7MusicCarn']+$test['G8MusicCarn']+$test['G9MusicCarn']+$test['G10MusicCarn']+$test['G11MusicCarn']+$test['G11RMusicCarn'];
				$TotArt=$test['G6Art']+$test['G7Art']+$test['G8Art']+$test['G9Art']+$test['G10Art']+$test['G11Art']+$test['G11RArt'];
				$TotDanO=$test['G6DancOri']+$test['G7DancOri']+$test['G8DancOri']+$test['G9DancOri']+$test['G10DancOri']+$test['G11DancOri']+$test['G11RDancOri'];
				$TotDanB=$test['G6DancBha']+$test['G7DancBha']+$test['G8DancBha']+$test['G9DancBha']+$test['G10DancBha']+$test['G11DancBha']+$test['G11RDancBha'];
				$TotEngL=$test['G6EngLit']+$test['G7EngLit']+$test['G8EngLit']+$test['G9EngLit']+$test['G10EngLit']+$test['G11EngLit']+$test['G11REngLit'];
				$TotTamL=$test['G6TamilLit']+$test['G7TamilLit']+$test['G8TamilLit']+$test['G9TamilLit']+$test['G10TamilLit']+$test['G11TamilLit']+$test['G11RTamilLit'];
				$TotSinL=$test['G6SinhalaLit']+$test['G7SinhalaLit']+$test['G8SinhalaLit']+$test['G9SinhalaLit']+$test['G10SinhalaLit']+$test['G11SinhalaLit']+$test['G11RSinhalaLit'];
				$TotAreL=$test['G6ArabicLit']+$test['G7ArabicLit']+$test['G8ArabicLit']+$test['G9ArabicLit']+$test['G10ArabicLit']+$test['G11ArabicLit']+$test['G11RArabicLit'];
				$TotDraE=$test['G6DramaEng']+$test['G7DramaEng']+$test['G8DramaEng']+$test['G9DramaEng']+$test['G10DramaEng']+$test['G11DramaEng']+$test['G11RDramaEng'];
				$TotDraT=$test['G6DramaTam']+$test['G7DramaTam']+$test['G8DramaTam']+$test['G9DramaTam']+$test['G10DramaTam']+$test['G11DramaTam']+$test['G11RDramaTam'];
				$TotDraS=$test['G6DramaSin']+$test['G7DramaSin']+$test['G8DramaSin']+$test['G9DramaSin']+$test['G10DramaSin']+$test['G11DramaSin']+$test['G11RDramaSin'];
				$Tot2ndTot=$test['G62ndGroupTot']+$test['G72ndGroupTot']+$test['G82ndGroupTot']+$test['G92ndGroupTot']+$test['G102ndGroupTot']+$test['G112ndGroupTot']+$test['G11R2ndGroupTot'];
				echo"<td align='right'><font color='black'>". $TotMusO. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotMusW. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotMusC. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotArt. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotDanO. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotDanB. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotEngL. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotTamL. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotSinL. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotAreL. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotDraE. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotDraT. "</font></td>";
				echo"<td align='right'><font color='black'>". $TotDraS. "</font></td>";
				echo"<td align='right'><font color='black'>". $Tot2ndTot. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['edited']. "</font></td>";
				echo "</tr>";
				
				$g6MuO=$g6MuO+$test['G6MusicOri'];
				$g6MuW=$g6MuW+$test['G6MusicWest'];
				$g6MuC=$g6MuC+$test['G6MusicCarn'];
				$g6Art=$g6Art+$test['G6Art'];
				$g6DanO=$g6DanO+$test['G6DancOri'];
				$g6DanB=$g6DanB+$test['G6DancBha'];
				$g6EngLit=$g6EngLit+$test['G6EngLit'];
				$g6TamLit=$g6TamLit+$test['G6TamilLit'];
				$g6SinLit=$g6SinLit+$test['G6SinhalaLit'];
				$g6AraLit=$g6AraLit+$test['G6ArabicLit'];
				$g6DraEng=$g6DraEng+$test['G6DramaEng'];
				$g6DraTam=$g6DraTam+$test['G6DramaTam'];
				$g6DraSin=$g6DraSin+$test['G6DramaSin'];
				$g62ndTot=$g62ndTot+$test['G62ndGroupTot'];
				$g7MuO=$g7MuO+$test['G7MusicOri'];
				$g7MuW=$g7MuW+$test['G7MusicWest'];
				$g7MuC=$g7MuC+$test['G7MusicCarn'];
				$g7Art=$g7Art+$test['G7Art'];
				$g7DanO=$g7DanO+$test['G7DancOri'];
				$g7DanB=$g7DanB+$test['G7DancBha'];
				$g7EngLit=$g7EngLit+$test['G7EngLit'];
				$g7TamLit=$g7TamLit+$test['G7TamilLit'];
				$g7SinLit=$g7SinLit+$test['G7SinhalaLit'];
				$g7AraLit=$g7AraLit+$test['G7ArabicLit'];
				$g7DraEng=$g7DraEng+$test['G7DramaEng'];
				$g7DraTam=$g7DraTam+$test['G7DramaTam'];
				$g7DraSin=$g7DraSin+$test['G7DramaSin'];
				$g72ndTot=$g72ndTot+$test['G72ndGroupTot'];
				$g8MuO=$g8MuO+$test['G8MusicOri'];
				$g8MuW=$g8MuW+$test['G8MusicWest'];
				$g8MuC=$g8MuC+$test['G8MusicCarn'];
				$g8Art=$g8Art+$test['G8Art'];
				$g8DanO=$g8DanO+$test['G8DancOri'];
				$g8DanB=$g8DanB+$test['G8DancBha'];
				$g8EngLit=$g8EngLit+$test['G8EngLit'];
				$g8TamLit=$g8TamLit+$test['G8TamilLit'];
				$g8SinLit=$g8SinLit+$test['G8SinhalaLit'];
				$g8AraLit=$g8AraLit+$test['G8ArabicLit'];
				$g8DraEng=$g8DraEng+$test['G8DramaEng'];
				$g8DraTam=$g8DraTam+$test['G8DramaTam'];
				$g8DraSin=$g8DraSin+$test['G8DramaSin'];
				$g82ndTot=$g82ndTot+$test['G82ndGroupTot'];
				$g9MuO=$g9MuO+$test['G9MusicOri'];
				$g9MuW=$g9MuW+$test['G9MusicWest'];
				$g9MuC=$g9MuC+$test['G9MusicCarn'];
				$g9Art=$g9Art+$test['G9Art'];
				$g9DanO=$g9DanO+$test['G9DancOri'];
				$g9DanB=$g9DanB+$test['G9DancBha'];
				$g9EngLit=$g9EngLit+$test['G9EngLit'];
				$g9TamLit=$g9TamLit+$test['G9TamilLit'];
				$g9SinLit=$g9SinLit+$test['G9SinhalaLit'];
				$g9AraLit=$g9AraLit+$test['G9ArabicLit'];
				$g9DraEng=$g9DraEng+$test['G9DramaEng'];
				$g9DraTam=$g9DraTam+$test['G9DramaTam'];
				$g9DraSin=$g9DraSin+$test['G9DramaSin'];
				$g92ndTot=$g92ndTot+$test['G92ndGroupTot'];
				$g10MuO=$g10MuO+$test['G10MusicOri'];
				$g10MuW=$g10MuW+$test['G10MusicWest'];
				$g10MuC=$g10MuC+$test['G10MusicCarn'];
				$g10Art=$g10Art+$test['G10Art'];
				$g10DanO=$g10DanO+$test['G10DancOri'];
				$g10DanB=$g10DanB+$test['G10DancBha'];
				$g10EngLit=$g10EngLit+$test['G10EngLit'];
				$g10TamLit=$g10TamLit+$test['G10TamilLit'];
				$g10SinLit=$g10SinLit+$test['G10SinhalaLit'];
				$g10AraLit=$g10AraLit+$test['G10ArabicLit'];
				$g10DraEng=$g10DraEng+$test['G10DramaEng'];
				$g10DraTam=$g10DraTam+$test['G10DramaTam'];
				$g10DraSin=$g10DraSin+$test['G10DramaSin'];
				$g102ndTot=$g102ndTot+$test['G102ndGroupTot'];
				$g11MuO=$g11MuO+$test['G11MusicOri'];
				$g11MuW=$g11MuW+$test['G11MusicWest'];
				$g11MuC=$g11MuC+$test['G11MusicCarn'];
				$g11Art=$g11Art+$test['G11Art'];
				$g11DanO=$g11DanO+$test['G11DancOri'];
				$g11DanB=$g11DanB+$test['G11DancBha'];
				$g11EngLit=$g11EngLit+$test['G11EngLit'];
				$g11TamLit=$g11TamLit+$test['G11TamilLit'];
				$g11SinLit=$g11SinLit+$test['G11SinhalaLit'];
				$g11AraLit=$g11AraLit+$test['G11ArabicLit'];
				$g11DraEng=$g11DraEng+$test['G11DramaEng'];
				$g11DraTam=$g11DraTam+$test['G11DramaTam'];
				$g11DraSin=$g11DraSin+$test['G11DramaSin'];
				$g112ndTot=$g112ndTot+$test['G112ndGroupTot'];
				$g11RMuO=$g11RMuO+$test['G11RMusicOri'];
				$g11RMuW=$g11RMuW+$test['G11RMusicWest'];
				$g11RMuC=$g11RMuC+$test['G11RMusicCarn'];
				$g11RArt=$g11RArt+$test['G11RArt'];
				$g11RDanO=$g11RDanO+$test['G11RDancOri'];
				$g11RDanB=$g11RDanB+$test['G11RDancBha'];
				$g11REngLit=$g11REngLit+$test['G11REngLit'];
				$g11RTamLit=$g11RTamLit+$test['G11RTamilLit'];
				$g11RSinLit=$g11RSinLit+$test['G11RSinhalaLit'];
				$g11RAraLit=$g11RAraLit+$test['G11RArabicLit'];
				$g11RDraEng=$g11RDraEng+$test['G11RDramaEng'];
				$g11RDraTam=$g11RDraTam+$test['G11RDramaTam'];
				$g11RDraSin=$g11RDraSin+$test['G11RDramaSin'];
				$g11R2ndTot=$g11R2ndTot+$test['G11R2ndGroupTot'];
				
				$MusO=$MusO+$TotMusO;
				$MusW=$MusW+$TotMusW;
				$MusC=$MusC+$TotMusC;
				$Art=$Art+$TotArt;
				$DanO=$DanO+$TotDanO;
				$DanB=$DanB+$TotDanB;
				$EngL=$EngL+$TotEngL;
				$TamL=$TamL+$TotTamL;
				$SinL=$SinL+$TotSinL;
				$AreL=$AreL+$TotAreL;
				$DraE=$DraE+$TotDraE;
				$DraT=$DraT+$TotDraT;
				$DraS=$DraS+$TotDraS;
				$secondTot=$secondTot+$Tot2ndTot;
								
				$count=$count+1;
				}
			}
		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Provincial Total</td>
			<td align="center"><strong><?php echo $g6MuO ?></strong></td>
			<td align="center"><strong><?php echo $g6MuW ?></strong></td>
			<td align="center"><strong><?php echo $g6MuC ?></strong></td>
			<td align="center"><strong><?php echo $g6Art ?></strong></td>
			<td align="center"><strong><?php echo $g6DanO ?></strong></td>
			<td align="center"><strong><?php echo $g6DanB ?></strong></td>
			<td align="center"><strong><?php echo $g6EngLit ?></strong></td>
			<td align="center"><strong><?php echo $g6TamLit ?></strong></td>
			<td align="center"><strong><?php echo $g6SinLit ?></strong></td>
			<td align="center"><strong><?php echo $g6AraLit ?></strong></td>
			<td align="center"><strong><?php echo $g6DraEng ?></strong></td>
			<td align="center"><strong><?php echo $g6DraTam ?></strong></td>
			<td align="center"><strong><?php echo $g6DraSin ?></strong></td>
			<td align="center"><strong><?php echo $g62ndTot ?></strong></td>
			<td align="center"><strong><?php echo $g7MuO ?></strong></td>
			<td align="center"><strong><?php echo $g7MuW ?></strong></td>
			<td align="center"><strong><?php echo $g7MuC ?></strong></td>
			<td align="center"><strong><?php echo $g7Art ?></strong></td>
			<td align="center"><strong><?php echo $g7DanO ?></strong></td>
			<td align="center"><strong><?php echo $g7DanB ?></strong></td>
			<td align="center"><strong><?php echo $g7EngLit ?></strong></td>
			<td align="center"><strong><?php echo $g7TamLit ?></strong></td>
			<td align="center"><strong><?php echo $g7SinLit ?></strong></td>
			<td align="center"><strong><?php echo $g7AraLit ?></strong></td>
			<td align="center"><strong><?php echo $g7DraEng ?></strong></td>
			<td align="center"><strong><?php echo $g7DraTam ?></strong></td>
			<td align="center"><strong><?php echo $g7DraSin ?></strong></td>
			<td align="center"><strong><?php echo $g72ndTot ?></strong></td>
			<td align="center"><strong><?php echo $g8MuO ?></strong></td>
			<td align="center"><strong><?php echo $g8MuW ?></strong></td>
			<td align="center"><strong><?php echo $g8MuC ?></strong></td>
			<td align="center"><strong><?php echo $g8Art ?></strong></td>
			<td align="center"><strong><?php echo $g8DanO ?></strong></td>
			<td align="center"><strong><?php echo $g8DanB ?></strong></td>
			<td align="center"><strong><?php echo $g8EngLit ?></strong></td>
			<td align="center"><strong><?php echo $g8TamLit ?></strong></td>
			<td align="center"><strong><?php echo $g8SinLit ?></strong></td>
			<td align="center"><strong><?php echo $g8AraLit ?></strong></td>
			<td align="center"><strong><?php echo $g8DraEng ?></strong></td>
			<td align="center"><strong><?php echo $g8DraTam ?></strong></td>
			<td align="center"><strong><?php echo $g8DraSin ?></strong></td>
			<td align="center"><strong><?php echo $g82ndTot ?></strong></td>
			<td align="center"><strong><?php echo $g9MuO ?></strong></td>
			<td align="center"><strong><?php echo $g9MuW ?></strong></td>
			<td align="center"><strong><?php echo $g9MuC ?></strong></td>
			<td align="center"><strong><?php echo $g9Art ?></strong></td>
			<td align="center"><strong><?php echo $g9DanO ?></strong></td>
			<td align="center"><strong><?php echo $g9DanB ?></strong></td>
			<td align="center"><strong><?php echo $g9EngLit ?></strong></td>
			<td align="center"><strong><?php echo $g9TamLit ?></strong></td>
			<td align="center"><strong><?php echo $g9SinLit ?></strong></td>
			<td align="center"><strong><?php echo $g9AraLit ?></strong></td>
			<td align="center"><strong><?php echo $g9DraEng ?></strong></td>
			<td align="center"><strong><?php echo $g9DraTam ?></strong></td>
			<td align="center"><strong><?php echo $g9DraSin ?></strong></td>
			<td align="center"><strong><?php echo $g92ndTot ?></strong></td>
			<td align="center"><strong><?php echo $g10MuO ?></strong></td>
			<td align="center"><strong><?php echo $g10MuW ?></strong></td>
			<td align="center"><strong><?php echo $g10MuC ?></strong></td>
			<td align="center"><strong><?php echo $g10Art ?></strong></td>
			<td align="center"><strong><?php echo $g10DanO ?></strong></td>
			<td align="center"><strong><?php echo $g10DanB ?></strong></td>
			<td align="center"><strong><?php echo $g10EngLit ?></strong></td>
			<td align="center"><strong><?php echo $g10TamLit ?></strong></td>
			<td align="center"><strong><?php echo $g10SinLit ?></strong></td>
			<td align="center"><strong><?php echo $g10AraLit ?></strong></td>
			<td align="center"><strong><?php echo $g10DraEng ?></strong></td>
			<td align="center"><strong><?php echo $g10DraTam ?></strong></td>
			<td align="center"><strong><?php echo $g10DraSin ?></strong></td>
			<td align="center"><strong><?php echo $g102ndTot ?></strong></td>
			<td align="center"><strong><?php echo $g11MuO ?></strong></td>
			<td align="center"><strong><?php echo $g11MuW ?></strong></td>
			<td align="center"><strong><?php echo $g11MuC ?></strong></td>
			<td align="center"><strong><?php echo $g11Art ?></strong></td>
			<td align="center"><strong><?php echo $g11DanO ?></strong></td>
			<td align="center"><strong><?php echo $g11DanB ?></strong></td>
			<td align="center"><strong><?php echo $g11EngLit ?></strong></td>
			<td align="center"><strong><?php echo $g11TamLit ?></strong></td>
			<td align="center"><strong><?php echo $g11SinLit ?></strong></td>
			<td align="center"><strong><?php echo $g11AraLit ?></strong></td>
			<td align="center"><strong><?php echo $g11DraEng ?></strong></td>
			<td align="center"><strong><?php echo $g11DraTam ?></strong></td>
			<td align="center"><strong><?php echo $g11DraSin ?></strong></td>
			<td align="center"><strong><?php echo $g112ndTot ?></strong></td>
			<td align="center"><strong><?php echo $g11RMuO ?></strong></td>
			<td align="center"><strong><?php echo $g11RMuW ?></strong></td>
			<td align="center"><strong><?php echo $g11RMuC ?></strong></td>
			<td align="center"><strong><?php echo $g11RArt ?></strong></td>
			<td align="center"><strong><?php echo $g11RDanO ?></strong></td>
			<td align="center"><strong><?php echo $g11RDanB ?></strong></td>
			<td align="center"><strong><?php echo $g11REngLit ?></strong></td>
			<td align="center"><strong><?php echo $g11RTamLit ?></strong></td>
			<td align="center"><strong><?php echo $g11RSinLit ?></strong></td>
			<td align="center"><strong><?php echo $g11RAraLit ?></strong></td>
			<td align="center"><strong><?php echo $g11RDraEng ?></strong></td>
			<td align="center"><strong><?php echo $g11RDraTam ?></strong></td>
			<td align="center"><strong><?php echo $g11RDraSin ?></strong></td>
			<td align="center"><strong><?php echo $g11R2ndTot ?></strong></td>
								
			<td align="center"><strong><?php echo $MusO ?></strong></td>
			<td align="center"><strong><?php echo $MusW ?></strong></td>
			<td align="center"><strong><?php echo $MusC ?></strong></td>
			<td align="center"><strong><?php echo $Art ?></strong></td>
			<td align="center"><strong><?php echo $DanO ?></strong></td>
			<td align="center"><strong><?php echo $DanB ?></strong></td>
			<td align="center"><strong><?php echo $EngL ?></strong></td>
			<td align="center"><strong><?php echo $TamL ?></strong></td>
			<td align="center"><strong><?php echo $SinL ?></strong></td>
			<td align="center"><strong><?php echo $AreL ?></strong></td>
			<td align="center"><strong><?php echo $DraE ?></strong></td>
			<td align="center"><strong><?php echo $DraT ?></strong></td>
			<td align="center"><strong><?php echo $DraS ?></strong></td>
			<td align="center"><strong><?php echo $secondTot ?></strong></td>
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
