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

				$Jafele=0;
				$JafeleD=0;
				$Jafgen=0;
				$JafgenR=0;
				$Jafwas=0;
				$Jafdrink=0;
				$Jafcolab=0;
				$Jafint=0;
				$JafintD=0;
				$Jafsclab=0;
				$Jafmroom=0;
				$Jafaglab=0;
				$Jafagroom=0;
				$Jafauroom=0;
				$Jafcouroom=0;
				$JafspEroom=0;
				$JafspEunit=0;
				$Jafashall=0;
				$Jafactroom=0;
				$Jafhomroom=0;
				$Jafsiroom=0;
				$Jafstoroom=0;
				$Jaflib=0;
				$Jaflibt1=0;
				$Jaflibt2=0;
				$Jaflibt3=0;
				$Jafstaroom=0;
				$Jafkit=0;
				$Jafcan=0;
				$Jafplay=0;
				$Jafdent=0;
				$Jafban=0;
				$Jafmtlb=0;
				$Jafmtlb1=0;
				$Jafmtlb2=0;
				$Jafmtf=0;

				$Totele=0;
				$ToteleD=0;
				$Totgen=0;
				$TotgenR=0;
				$Totwas=0;
				$Totdrink=0;
				$Totcolab=0;
				$Totint=0;
				$TotintD=0;
				$Totsclab=0;
				$Totmroom=0;
				$Totaglab=0;
				$Totagroom=0;
				$Totauroom=0;
				$Totcouroom=0;
				$TotspEroom=0;
				$TotspEunit=0;
				$Totashall=0;
				$Totactroom=0;
				$Tothomroom=0;
				$Totsiroom=0;
				$Totstoroom=0;
				$Totlib=0;
				$Totlibt1=0;
				$Totlibt2=0;
				$Totlibt3=0;
				$Totstaroom=0;
				$Totkit=0;
				$Totcan=0;
				$Totplay=0;
				$Totdent=0;
				$Totban=0;
				$Totmtlb1=0;
				$Totmtlb2=0;
				$Totmtlb=0;
				$Totmtf=0;


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



			}
			?>




		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
			<?php

			echo"<td class='tg-c9p5' align='right'><font color='black'>". $id. "</font></td>";
			echo"<td class='tg-c9p5' align='right'><font color='black'>". $Jafele. "</font></td>";
			echo"<td class='tg-c9p5' align='right'><font color='black'>". $JafeleD/2 . "</font></td>";
			echo"<td align='right'><font color='black'>". $Jafgen. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $JafgenR/3 . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafwas. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafdrink. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafcolab . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafint. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $JafintD/2 . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafsclab. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafmroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafaglab . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafagroom/4 . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafauroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafcouroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $JafspEroom . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $JafspEunit. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafashall. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafactroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafhomroom . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafsiroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafstoroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jaflib. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jaflibt1 . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jaflibt2. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jaflibt3. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafstaroom. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafkit . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafcan. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafplay . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafdent. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafban. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafmtlb1 . "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafmtlb2. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafmtlb. "</font></td>";
			echo"<td class='tg-31u2' align='right'><font color='black'>". $Jafmtf. "</font></td>";
			echo"</tr>";
			?>

		 <style>
		 .highlight { background-color: #8888FF }
		 </style>


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
