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

				$JafTotICT=0;
				$JafTotAgriFoodTec=0;
				$JafTotFisherFoodTec=0;
				$JafTotDesignTec=0;
				$JafTotArtsCrafts=0;
				$JafTotHomeEco=0;
				$JafTotHelthPhyEdu=0;
				$JafTotCommuMedA=0;
				$JafTotEleWriShortEng=0;
				$JafTotEleWriShortTam=0;
				$JafTotEleWriShortSin=0;
				$JafTot3rdGroupTot=0;


				$result=mysqli_query($con,"SELECT * FROM schdata,studentpop,grpsubstudp WHERE Scid=stScid and Scid=SubScid and Station='School' and schdata.Zone='$id'");
				while($test = mysqli_fetch_array($result))
				{

				$JafTotICT=$JafTotICT+$test['G10ICT']+$test['G11ICT']+$test['G11RICT'];
				$JafTotAgriFoodTec=$JafTotAgriFoodTec+$test['G10AgriFoodTec']+$test['G11AgriFoodTec']+$test['G11RAgriFoodTec'];
				$JafTotFisherFoodTec=$JafTotFisherFoodTec+$test['G10FisherFoodTec']+$test['G11FisherFoodTec']+$test['G11RFisherFoodTec'];
				$JafTotDesignTec=$JafTotDesignTec+$test['G10DesignTec']+$test['G11DesignTec']+$test['G11RDesignTec'];
				$JafTotArtsCrafts=$JafTotArtsCrafts+$test['G10ArtsCrafts']+$test['G11ArtsCrafts']+$test['G11RArtsCrafts'];
				$JafTotHomeEco=$JafTotHomeEco+$test['G10HomeEco']+$test['G11HomeEco']+$test['G11RHomeEco'];
				$JafTotHelthPhyEdu=$JafTotHelthPhyEdu+$test['G10HelthPhyEdu']+$test['G11HelthPhyEdu']+$test['G11RHelthPhyEdu'];
				$JafTotCommuMedA=$JafTotCommuMedA+$test['G10CommuMedA']+$test['G11CommuMedA']+$test['G11RCommuMedA'];
				$JafTotEleWriShortEng=$JafTotEleWriShortEng+$test['G10EleWriShortEng']+$test['G11EleWriShortEng']+$test['G11REleWriShortEng'];
				$JafTotEleWriShortTam=$JafTotEleWriShortTam+$test['G10EleWriShortTam']+$test['G11EleWriShortTam']+$test['G11REleWriShortTam'];
				$JafTotEleWriShortSin=$JafTotEleWriShortSin+$test['G10EleWriShortSin']+$test['G11EleWriShortSin']+$test['G11REleWriShortSin'];
				$JafTot3rdGroupTot=$JafTot3rdGroupTot+$test['G103rdGroupTot']+$test['G113rdGroupTot']+$test['G11R3rdGroupTot'];
}

		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar('<?php echo $id; ?>')"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
		<td class='tg-c9p5'><?php echo $number++; ?></td>
		<td class='tg-c9p5'><?php echo $id ?></td>
		<td class='tg-c9p5'><?php echo $JafTotICT ?></td>
		<td class='tg-31u2'><?php echo $JafTotAgriFoodTec ?></td>
		<td class='tg-31u2'><?php echo $JafTotFisherFoodTec ?></td>
		<td class='tg-31u2'><?php echo $JafTotDesignTec ?></td>
		<td class='tg-31u2'><?php echo $JafTotArtsCrafts ?></td>
		<td class='tg-31u2'><?php echo $JafTotHomeEco ?></td>
		<td class='tg-31u2'><?php echo $JafTotHelthPhyEdu ?></td>
		<td class='tg-31u2'><?php echo $JafTotCommuMedA ?></td>
		<td class='tg-31u2'><?php echo $JafTotEleWriShortEng ?></td>
		<td class='tg-31u2'><?php echo $JafTotEleWriShortTam ?></td>
		<td class='tg-31u2'><?php echo $JafTotEleWriShortSin ?></td>
		<td class='tg-31u2'><?php echo $JafTot3rdGroupTot ?></td>
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
