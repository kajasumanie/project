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
			$primm=0;
			$primf=0;
			$primt=0;
			$primpcl=0;
			$secm=0;
			$secf=0;
			$sect=0;
			$secpcl=0;
			$advm=0;
			$advf=0;
			$advt=0;
			$advpcl=0;
			$Tm=0;
			$Tf=0;
			$Tt=0;
			$Tpcl=0;
			$spetot=0;
			$TGTot=0;

			while($test=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				$id = $test['Scid'];
				include('dbconfig.php');

				$TotM=$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
				$TotF=$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
				$Tot=$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
				$TotPClass=$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
			<td class='tg-c9p5'><?php echo $number++; ?></td>
			<td class='tg-c9p5'><?php echo $test['CenID'] ?></td>
			<td class='tg-c9p5'><?php echo $test['Scid'] ?></td>
			<td class='tg-31u2'><?php echo $test['SchoolName'] ?></td>
			<td class='tg-31u2'><?php echo $test['Division'] ?></td>
			<td class='tg-31u2'><?php echo $test['Zone'] ?></td>
			<td class='tg-31u2'><?php echo $test['Race'] ?></td>
			<td class='tg-31u2'><?php echo $test['Type'] ?></td>
			<td class='tg-31u2'><?php echo $TotM ?></td>
			<td class='tg-31u2'><?php echo $TotF ?></td>
			<td class='tg-31u2'><?php echo $Tot ?></td>
			<td class='tg-31u2'><?php echo $TotPClass ?></td>
			<td class='tg-31u2'><?php echo $test['SpeInCentre'] ?></td>
			<td class='tg-31u2'><?php echo $GTot ?></td>


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
