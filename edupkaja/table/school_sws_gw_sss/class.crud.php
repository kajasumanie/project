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
			$g12sm=0;
			$g12sf=0;
			$g12stot=0;
			$g12spcl=0;
			$g12mm=0;
			$g12mf=0;
			$g12mtot=0;
			$g12mpcl=0;
			$g12cm=0;
			$g12cf=0;
			$g12ctot=0;
			$g12cpcl=0;
			$g12am=0;
			$g12af=0;
			$g12atot=0;
			$g12apcl=0;
			$g12tm=0;
			$g12tf=0;
			$g12ttot=0;
			$g12tpcl=0;
			$g13sm=0;
			$g13sf=0;
			$g13stot=0;
			$g13spcl=0;
			$g13mm=0;
			$g13mf=0;
			$g13mtot=0;
			$g13mpcl=0;
			$g13cm=0;
			$g13cf=0;
			$g13ctot=0;
			$g13cpcl=0;
			$g13am=0;
			$g13af=0;
			$g13atot=0;
			$g13apcl=0;
			$g13tm=0;
			$g13tf=0;
			$g13ttot=0;
			$g13tpcl=0;
			$g13rsm=0;
			$g13rsf=0;
			$g13rstot=0;
			$g13rspcl=0;
			$g13rmm=0;
			$g13rmf=0;
			$g13rmtot=0;
			$g13rmpcl=0;
			$g13rcm=0;
			$g13rcf=0;
			$g13rctot=0;
			$g13rcpcl=0;
			$g13ram=0;
			$g13raf=0;
			$g13ratot=0;
			$g13rapcl=0;
			$g13rtm=0;
			$g13rtf=0;
			$g13rttot=0;
			$g13rtpcl=0;
			$m=0;
			$f=0;
			$t=0;
			$pcl=0;

			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				$id = $row['Zone'];
				include('dbconfig.php');

				if(($row['G12SM']+$row['G12SF']+$row['G12MM']+$row['G12CM']+$row['G12CF']+$row['G12AM']+$row['G12AF']+$row['G12TM']+$row['G12TF']+$row['G13SM']+$row['G13SF']+$row['G13MM']+$row['G13MF']+$row['G13CM']+$row['G13CF']+$row['G13AM']+$row['G13AF']+$row['G13TM']+$row['G13TF']+$row['G13SRM']+$row['G13SRF']+$row['G13MRM']+$row['G13MRF']+$row['G13CRM']+$row['G13CRF']+$row['G13ARM']+$row['G13ARF']+$row['G13TRM']+$row['G13TRF'])!= 0)
				{

		 ?>
		 <style>
		 .highlight { background-color: #8888FF }
		 </style>
		<tr   ondblclick="open_win_editar(<?php echo $id; ?>)"  onMouseover="this.bgColor='#EEEEEE'"onMouseout="this.bgColor='#FFFFFF'"  style='cursor: pointer;'>
			<td class='tg-c9p5'><?php echo $number++; ?></td>
			<td class='tg-c9p5'><?php echo $row['CenID'] ?></td>
			<td class='tg-c9p5'><?php echo $row['Scid'] ?></td>
			<td class='tg-31u2'><?php echo $row['SchoolName'] ?></td>
			<td class='tg-31u2'><?php echo $row['Division'] ?></td>
			<td class='tg-31u2'><?php echo $row['Zone'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12SM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12SF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12STot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12SPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12MM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12MF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12MTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12MPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12CM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12CF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12CTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12CPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12AM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12AF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12ATot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12APClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12TM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12TF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12TTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G12TPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13SM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13SF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13STot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13SPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13AM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13AF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13ATot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TPClass'] ?></td>

			<td class='tg-31u2'><?php echo $row['G13SRM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13SRF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13SRTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13SRPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MRM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MRF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MRTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13MRPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CRM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CRF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CRTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13CRPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13ARM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13ARF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13ARTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13ARPClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TRM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TRF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TRTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G13TRPClass'] ?></td>

			$TotM=$row['G12SM']+$row['G12MM']+$row['G12CM']+$row['G9M']+$row['G10M']+$row['G11M']+$row['G11RM'];
			$TotF=$row['G6F']+$row['G7F']+$row['G8F']+$row['G9F']+$row['G10F']+$row['G11F']+$row['G11RF'];
			$Tot=$row['G6Tot']+$row['G7Tot']+$row['G8Tot']+$row['G9Tot']+$row['G10Tot']+$row['G11Tot']+$row['G11RTot'];
			$TotPClass=$row['G6PClass']+$row['G7PClass']+$row['G8PClass']+$row['G9PClass']+$row['G10PClass']+$row['G11PClass']+$row['G11RPClass'];

			<td class='tg-31u2'><?php echo $TotM ?></td>
			<td class='tg-31u2'><?php echo $TotF ?></td>
			<td class='tg-31u2'><?php echo $Tot ?></td>
			<td class='tg-31u2'><?php echo $TotPClass ?></td>
			<td class='tg-31u2'><?php echo $row['edited'] ?></td>


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
