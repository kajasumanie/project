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
		 ?>
		<tr href='#myModal' class='edit-record' data-id='<?php echo $row["Scid"] ?>'  style='cursor: pointer;'>
		<td class='tg-c9p5'><?php echo $number++; ?></td>
		<td class='tg-c9p5'><?php echo $row["CenID"] ?></td>
		<td class='tg-c9p5'><?php echo $row["Scid"] ?></td>
		<td class='tg-31u2'><?php echo $row["SchoolName"] ?></td>
		<td class='tg-31u2'><?php echo $row["SchoolAddress"] ?></td>
		<td class='tg-31u2'><?php echo $row["Telephone"] ?></td>
		<td class='tg-31u2'><?php echo $row["Email"] ?></td>
		<td class='tg-31u2'><?php echo $row["Zone"] ?></td>
		<td class='tg-31u2'><?php echo $row["Division"] ?></td>
		<td class='tg-31u2'><?php echo $row["Category"] ?></td>
		<td class='tg-31u2'><?php echo $row["Func"] ?></td>
		<td class='tg-31u2'><?php echo $row["Span"] ;?></td>
		<td class='tg-31u2'><?php echo $row["Type"] ?></td>
		<td class='tg-31u2'><?php echo $row["Medium"] ?></td>
		<td class='tg-31u2'><?php echo $row["Race"] ?></td>
		<td class='tg-31u2'><?php echo $row["SexType"] ?></td>
		<td class='tg-31u2'><?php echo $row["GSDivision"] ?></td>
		</tr>
		<?php
		}
		}
		else
		{
			?>
            <tr>
            <td class='tg-31u2' colspan='14'>Nothing here...</td>
            </tr>
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
	
	public function paginglink($query,$records_per_page,$f1,$f2,$f3)
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
				echo "<li><a href='".$self."?table=school&page_no=1&f1=".$f1."&f2=".$f2."&f3=".$f3."'>First</a></li>";
				echo "<li><a href='".$self."?table=school&page_no=".$previous."&f1=".$f1."&f2=".$f2."&f3=".$f3."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?table=school&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?table=school&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?table=school&page_no=".$next."&f1=".$f1."&f2=".$f2."&f3=".$f3."'>Next</a></li>";
				echo "<li><a href='".$self."?table=school&page_no=".$total_no_of_pages."&f1=".$f1."&f2=".$f2."&f3=".$f3."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
}
