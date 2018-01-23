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
		$count=1;
		$g1m=0;
		$g1f=0;
		$g1tot=0;
		$g1pclass=0;
		$g2m=0;
		$g2f=0;
		$g2tot=0;
		$g2pclass=0;
		$g3m=0;
		$g3f=0;
		$g3tot=0;
		$g3pclass=0;
		$g4m=0;
		$g4f=0;
		$g4tot=0;
		$g4pclass=0;
		$g5m=0;
		$g5f=0;
		$g5tot=0;
		$g5pclass=0;
		$m=0;
		$f=0;
		$t=0;
		$pcl=0;
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{


				if(($row['G1M']+$row['G1F']+$row['G2M']+$row['G2F']+$row['G3M']+$row['G3F']+$row['G4M']+$row['G4F']+$row['G5M']+$row['G5F'])!= 0){

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
		<td class='tg-31u2'><?php echo $row['Race'] ?></td>
		<td class='tg-31u2'><?php echo $row['Type'] ?></td>
		<td class='tg-31u2'><?php echo $row['G1M'] ?></td>
		<td class='tg-31u2'><?php echo $row['G1F'] ?></td>
		<td class='tg-31u2'><?php echo $row['G1Tot'] ?></td>
		<td class='tg-31u2'><?php echo $row['G1PClass'] ?></td>
		<td class='tg-31u2'><?php echo $row['G2M'] ?></td>
		<td class='tg-31u2'><?php echo $row['G2F'] ?></td>
		<td class='tg-31u2'><?php echo $row['G2Tot'] ?></td>
		<td class='tg-31u2'><?php echo $row['G2PClass'] ?></td>
		<td class='tg-31u2'><?php echo $row['G3M'] ?></td>
		<td class='tg-31u2'><?php echo $row['G3F'] ?></td>
		<td class='tg-31u2'><?php echo $row['G3Tot'] ?></td>
		<td class='tg-31u2'><?php echo $row['G3PClass'] ?></td>
		<td class='tg-31u2'><?php echo $row['G4M'] ?></td>
		<td class='tg-31u2'><?php echo $row['G4F'] ?></td>
		<td class='tg-31u2'><?php echo $row['G4Tot'] ?></td>
		<td class='tg-31u2'><?php echo $row['G4PClass'] ?></td>
		<td class='tg-31u2'><?php echo $row['G5M'] ?></td>
		<td class='tg-31u2'><?php echo $row['G5F'] ?></td>
		<td class='tg-31u2'><?php echo $row['G5Tot'] ?></td>
		<td class='tg-31u2'><?php echo $row['G5PClass'] ?></td>

		$TotM=$row['G1M']+$row['G2M']+$row['G3M']+$row['G4M']+$row['G5M'];
		$TotF=$row['G1F']+$row['G2F']+$row['G3F']+$row['G4F']+$row['G5F'];
		$Tot=$row['G1Tot']+$row['G2Tot']+$row['G3Tot']+$row['G4Tot']+$row['G5Tot'];
		$TotPClass=$row['G1PClass']+$row['G2PClass']+$row['G3PClass']+$row['G4PClass']+$row['G5PClass'];

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
