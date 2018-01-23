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
			$count=1;
			$ele=0;
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
			
			$result=mysqli_query($con,"SELECT * FROM schdata,phybasic WHERE Scid=school_id and Station='School' and schdata.Zone='$id'");
				while($test = mysqli_fetch_array($result))
				{
					if($test['electricity']=='1'){
				$Jafele=$Jafele+$test['electricity'];
				}
				if($test['electricity']=='2'){
				$JafeleD=$JafeleD+$test['electricity'];
				}

				if($test['generator']=='1'){
				$Jafgen=$Jafgen+$test['generator'];
				}
				if($test['generator']=='3'){
				$JafgenR=$JafgenR+$test['generator'];
				}

				$Jafwas=$Jafwas+$test['washwater'];

				$Jafdrink=$Jafdrink+$test['drinkwater'];

				$Jafcolab=$Jafcolab+$test['comlab'];

				if($test['intfacility']=='1'){
				$Jafint=$Jafint+$test['intfacility'];
				}
				if($test['intfacility']=='2'){
				$JafintD=$JafintD+$test['intfacility'];
				}

				$Jafsclab=$Jafsclab+$test['scilab'];

				$Jafmroom=$Jafmroom+$test['mathsroom'];

				if($test['agrlab']=='1'){
				$Jafaglab=$Jafaglab+$test['agrlab'];
				}
				if($test['agrlab']=='4'){
				$Jafagroom=$Jafagroom+$test['agrlab'];
				}

				$Jafauroom=$Jafauroom+$test['audioroom'];

				$Jafcouroom=$Jafcouroom+$test['councelroom'];

				$JafspEroom=$JafspEroom+$test['speEduroom'];

				$JafspEunit=$JafspEunit+$test['SpeEduUnit'];

				$Jafashall=$Jafashall+$test['AssemblyHall'];

				$Jafactroom=$Jafactroom+$test['activityroom'];

				$Jafhomroom=$Jafhomroom+$test['homesciroom'];

				$Jafsiroom=$Jafsiroom+$test['sickroom'];

				$Jafstoroom=$Jafstoroom+$test['storeroom'];

				$Jaflib=$Jaflib+$test['library'];

				if($test['libtype']=='Type 1'){
				$Jaflibt1=$Jaflibt1+1;
				}
				if($test['libtype']=='Type 2'){
				$Jaflibt2=$Jaflibt2+1;
				}
				if($test['libtype']=='Type 3'){
				$Jaflibt3=$Jaflibt3+1;
				}

				$Jafstaroom=$Jafstaroom+$test['staffroom'];

				$Jafkit=$Jafkit+$test['kitchen'];

				$Jafcan=$Jafcan+$test['canteen'];

				$Jafplay=$Jafplay+$test['playground'];

				$Jafdent=$Jafdent+$test['dental'];

				$Jafban=$Jafban+$test['bank'];


				if($test['MTlab']=='TypeI'){
				$Jafmtlb1=$Jafmtlb1+1;
				}
				if($test['MTlab']=='TypeII'){
				$Jafmtlb2=$Jafmtlb2+1;
				}
				if($test['MTlab']=='TypeI' or $test['MTlab']=='TypeII'){
				$Jafmtlb=$Jafmtlb+1;
				}

				$Jafmtf=$Jafmtf+$test['MTfaculty'];

				$Totele=$Jafele+$Totele;
				$ToteleD=$JafeleD+$ToteleD;
				$Totgen=$Jafgen+$Totgen;
				$TotgenR=$JafgenR+$TotgenR;
				$Totwas=$Jafwas+$Totwas;
				$Totdrink=$Jafdrink+$Totdrink;
				$Totcolab=$Jafcolab+$Totcolab;
				$Totint=$Jafint+$Totint;
				$TotintD=$JafintD+$TotintD;
				$Totsclab=$Jafsclab+$Totsclab;
				$Totmroom=$Jafmroom+$Totmroom;
				$Totaglab=$Jafaglab+$Totaglab;
				$Totagroom=$Jafagroom+$Totagroom;
				$Totauroom=$Jafauroom+$Totauroom;
				$Totcouroom=$Jafcouroom+$Totcouroom;
				$TotspEroom=$JafspEroom+$TotspEroom;
				$TotspEunit=$JafspEunit+$TotspEunit;
				$Totashall=$Jafashall+$Totashall;
				$Totactroom=$Jafactroom+$Totactroom;
				$Tothomroom=$Jafhomroom+$Tothomroom;
				$Totsiroom=$Jafsiroom+$Totsiroom;
				$Totstoroom=$Jafstoroom+$Totstoroom;
				$Totlib=$Jaflib+$Totlib;
				$Totlibt1=$Jaflibt1+$Totlibt1;
				$Totlibt2=$Jaflibt2+$Totlibt2;
				$Totlibt3=$Jaflibt3+$Totlibt3;
				$Totstaroom=$Jafstaroom+$Totstaroom;
				$Totkit=$Jafkit+$Totkit;
				$Totcan=$Jafcan+$Totcan;
				$Totplay=$Jafplay+$Totplay;
				$Totdent=$Jafdent+$Totdent;
				$Totban=$Jafban+$Totban;
				$Totmtlb1=$Jafmtlb1+$Totmtlb1;
				$Totmtlb2=$Jafmtlb2+$Totmtlb2;
				$Totmtlb=$Jafmtlb+$Totmtlb;
				$Totmtf=$Jafmtf+$Totmtf;
				echo "<tr>";
				}
			?>
<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
			<?php

				echo"<td align='right'><font color='black'>" .$count."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['CenID']."</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Scid']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['SchoolName']. "</font></td>";
				echo"<td align='right'><font color='black'>" .$test['Type']."</font></td>";
				echo"<td align='left'><font color='black'>". $test['Func']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Category']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Division']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Zone']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['MaleTotal']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['FemaleTotal']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['stTotal']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['TeaTot']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['PrinTot']. "</font></td>";
				echo"<td align='left'><font color='black'>". $test['Total']. "</font></td>";
				
				echo"<td align='right'><font color='black'>". $test['stuToiMale']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['stuToiFemale']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['stuUrinalMale']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['TeaToiMale']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['TeaToiFemale']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['TeaUrinalMale']. "</font></td>";
				echo"<td align='right'><font color='black'>". $test['ToiCommon']. "</font></td>";
				
				echo "</tr>";
			?>
				
		 <style>
		 .highlight { background-color: #8888FF }
		 
		<?php

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
