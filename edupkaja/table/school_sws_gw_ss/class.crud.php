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
				$g6m=0;
				$g6f=0;
				$g6tot=0;
				$g6pclass=0;
				$g7m=0;
				$g7f=0;
				$g7tot=0;
				$g7pclass=0;
				$g8m=0;
				$g8f=0;
				$g8tot=0;
				$g8pclass=0;
				$g9m=0;
				$g9f=0;
				$g9tot=0;
				$g9pclass=0;
				$g10m=0;
				$g10f=0;
				$g10tot=0;
				$g10pclass=0;
				$g11m=0;
				$g11f=0;
				$g11tot=0;
				$g11pclass=0;
				$g11rm=0;
				$g11rf=0;
				$g11rtot=0;
				$g11rpclass=0;
				$m=0;
				$f=0;
				$t=0;
				$pcl=0;

				if(($row['G6M']+$row['G6F']+$row['G7M']+$row['G7F']+$row['G8M']+$row['G8F']+$row['G9M']+$row['G9F']+$row['G10M']+$row['G10F']+$row['G11F']+$row['G11F']+$row['G11RF']+$row['G11RF'])!= 0)
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
			<td class='tg-31u2'><?php echo $row['G6M'] ?></td>
			<td class='tg-31u2'><?php echo $row['G6F'] ?></td>
			<td class='tg-31u2'><?php echo $row['G6Tot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G6PClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G7M'] ?></td>
			<td class='tg-31u2'><?php echo $row['G7F'] ?></td>
			<td class='tg-31u2'><?php echo $row['G7Tot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G7PClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G8M'] ?></td>
			<td class='tg-31u2'><?php echo $row['G8F'] ?></td>
			<td class='tg-31u2'><?php echo $row['G8Tot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G8PClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G9M'] ?></td>
			<td class='tg-31u2'><?php echo $row['G9F'] ?></td>
			<td class='tg-31u2'><?php echo $row['G9Tot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G9PClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G10M'] ?></td>
			<td class='tg-31u2'><?php echo $row['G10F'] ?></td>
			<td class='tg-31u2'><?php echo $row['G10Tot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G10PClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11M'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11F'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11Tot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11PClass'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11RM'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11RF'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11RTot'] ?></td>
			<td class='tg-31u2'><?php echo $row['G11RPClass'] ?></td>

			$TotM=$row['G6M']+$row['G7M']+$row['G8M']+$row['G9M']+$row['G10M']+$row['G11M']+$row['G11RM'];
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
