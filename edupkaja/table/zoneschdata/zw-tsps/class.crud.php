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
		
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
		 ?>
		<tr href='#' class='edit-record' data-id='<?php echo $row["Zone"] ?>'  style='cursor: pointer;'>
		<td class='tg-mmbw'>wd</td>
		<td class='tg-c9p5'><?php echo $row["Zone"] ?></td>
		<td class='tg-31u2'><?php echo $row["Male5"] ?></td>
		<td class='tg-31u2'><?php echo $row["Female5"] ?></td>
		<td class='tg-31u2'><?php echo $row["Total5"] ?></td>
		<td class='tg-31u2'><?php echo $row["Parallel_Class5"] ?></td>
		<td class='tg-31u2'><?php echo $row["Male11"] ?></td>
		<td class='tg-31u2'><?php echo $row["Female11"] ?></td>
		<td class='tg-31u2'><?php echo $row["Total11"] ?></td>
		<td class='tg-31u2'><?php echo $row["Parallel_Class11"] ?></td>
		<td class='tg-31u2'><?php echo $row["Male13"] ?></td>
		<td class='tg-31u2'><?php echo $row["Female13"] ?></td>
		<td class='tg-31u2'><?php echo $row["Total13"] ?></td>
		<td class='tg-31u2'><?php echo $row["Parallel_Class13"] ?></td>
		<td class='tg-31u2'><?php echo $row["MaleT"] ?></td>
		<td class='tg-31u2'><?php echo $row["FemaleT"] ?></td>
		<td class='tg-31u2'><?php echo $row["TotalT"] ?></td>
		<td class='tg-31u2'><?php echo $row["Parallel_ClassT"] ?></td>
		<td class='tg-31u2'><?php echo $row["InCentre"] ?></td>
		<td class='tg-52we'><?php echo $row["Total"] ?></td>
		</tr>
		<?php
		}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
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
	
	public function paginglink($query,$records_per_page)
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
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */
	
}
