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
		include('dbconfig.php');

		$find=mysqli_query($con,"show tables from emisdb");
	 while($table=mysqli_fetch_array($find))
	 {
		$tab_name=$table[0];

		$year=substr($tab_name, -4);
	 if(substr($tab_name, 0,8)=='olresult' && strlen($tab_name)==12 && is_numeric($year)){
		 $olyear[]= $tab_name;
	 }
	 if(substr($tab_name, 0,9)=='alresults' && strlen($tab_name)==13 && is_numeric($year)){
		 $alyear[]= $tab_name;

	 }
	 if(substr($tab_name, 0,6)=='gvexam' && strlen($tab_name)==10 && is_numeric($year)){
		 $gvyear[]= $tab_name;

	 }
	 }

		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$number=1;
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				$id = $row['Zone'];
		 ?>
		<tr   ondblclick="open_win_editar('<?php echo $row["Zone"]; ?>')"  style='cursor: pointer;'>
		<td class='tg-c9p5'><?php echo $number++; ?></td>
		<td class='tg-c9p5'><?php echo $row["Zone"] ?></td>

		<?php

	 foreach ($gvyear as $gvtable)
	 {
		// echo $gvtable;
		$sat=mysqli_query($con,"SELECT * FROM schdata,$gvtable where Scid=SchoolID and ((TotalMarks IS NOT NULL) and TotalMarks<>'999') and  SchoolID < 1500000 and schdata.Zone='$id'");
		$satnos=mysqli_num_rows($sat);
		$u70=mysqli_query($con,"SELECT * FROM schdata,$gvtable where Scid=SchoolID and TotalMarks>=70 and TotalMarks<=200 and SchoolID < 1500000 and schdata.Zone='$id'");
		$u70nos=mysqli_num_rows($u70);
		?>
		<td class='tg-31u2'><?php echo $satnos; ?></td>
		<td class='tg-31u2'><?php echo $u70nos; ?></td>
		<td class='tg-31u2'><?php if($u70nos>0){ echo round(($u70nos/$satnos)*100,2); } else{ echo '-';}  ?></td>
		<?php
	 	}
		foreach ($olyear as $oltable)
	 	{
		$sat=  mysqli_query($con,"SELECT * FROM schdata,$oltable where Scid=SchID and AttemptNo ='1' and sat6='1' and Station='School' and schdata.Zone='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,$oltable where Scid=SchID and AttemptNo ='1' and al='1' and SchID < 1500000 and schdata.Zone='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<td class='tg-31u2'><?php echo $satcou; ?></td>
		<td class='tg-31u2'><?php echo $u70cou; ?></td>
		<td class='tg-31u2'><?php if($satcou>0){ echo round(($u70cou/$satcou)*100,2); } else{ echo '-';}  ?></td>
		<?php
	 	}
		foreach ($olyear as $oltable)
		{
		$sat=  mysqli_query($con,"SELECT * FROM schdata,olresult2013 where Scid=SchID and AttemptNo ='1' and sat5='1' and Station='School' and schdata.Zone='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,olresult2013 where Scid=SchID and AttemptNo ='1' and (cpass>=3 and spass>=5 and (FirstLangRe='A' or FirstLangRe='B' or FirstLangRe='C' or FirstLangRe='S' )) and Station='School' and schdata.Zone='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<td class='tg-31u2'><?php echo $satcou; ?></td>
		<td class='tg-31u2'><?php echo $u70cou; ?></td>
		<td class='tg-31u2'><?php if($satcou>0){ echo round(($u70cou/$satcou)*100,2); } else{ echo '-';}  ?></td>
		<?php
		}
		foreach ($alyear as $altable)
 	 	{
		$sat=  mysqli_query($con,"SELECT * FROM schdata,ALResults2014 where Scid=SchID and Attempt ='1' and (Subj1Re='A' or Subj1Re='B' or Subj1Re='C' or Subj1Re='S' or Subj1Re='F' or Subj1Re='X' or Subj1Re='N' or Subj2Re='A' or Subj2Re='B' or Subj2Re='C' or Subj2Re='S' or Subj2Re='F' or Subj2Re='X' or Subj2Re='N' or Subj3Re='A' or Subj3Re='B' or Subj3Re='C' or Subj3Re='S' or Subj3Re='F' or Subj3Re='X' or Subj3Re='N') and SchID < 1500000 and schdata.Zone='$id'");
		$satcou=mysqli_num_rows($sat);
		$u70=  mysqli_query($con,"SELECT * FROM schdata,ALResults2014 where Scid=SchID and Attempt='1' and QualifiedforUni='Y' and SchID < 1500000 and schdata.Zone='$id'") ;
		$u70cou=mysqli_num_rows($u70);
		?>
		<td class='tg-31u2'><?php echo $satcou; ?></td>
		<td class='tg-31u2'><?php echo $u70cou; ?></td>
		<td class='tg-31u2'><?php if($satcou>0){ echo round(($u70cou/$satcou)*100,2); } else{ echo '-';}  ?></td>
		<?php
	 }

	 $lastolyear= end($olyear);
	 $sat6m=mysqli_query($con,"SELECT * FROM schdata,$lastolyear where Scid=SchID and AttemptNo ='1' and Gender='M' and sat6='1' and Station='School' and schdata.Zone='$id'");
	 $sat6nosm=mysqli_num_rows($sat6m);
	 $sat6f=mysqli_query($con,"SELECT * FROM schdata,$lastolyear where Scid=SchID and AttemptNo ='1' and Gender='F' and sat6='1' and Station='School' and schdata.Zone='$id'");
	 $sat6nosf=mysqli_num_rows($sat6f);
	 $sat6=mysqli_query($con,"SELECT * FROM schdata,$lastolyear where Scid=SchID and AttemptNo ='1' and sat6='1' and Station='School' and schdata.Zone='$id'");
	 $sat6nos=mysqli_num_rows($sat6);

	 $ol6AllWm=mysqli_query($con,"SELECT * FROM schdata,$lastolyear where Scid=SchID and AttemptNo ='1' and Gender='M' and sat6='1' and satsubject=wpass and Station='School' and schdata.Zone='$id'");
	 $ol6AllWmnosm=mysqli_num_rows($ol6AllWm);
	 $ol6AllWf=mysqli_query($con,"SELECT * FROM schdata,$lastolyear where Scid=SchID and AttemptNo ='1' and Gender='F' and sat6='1' and satsubject=wpass and Station='School' and schdata.Zone='$id'");
	 $ol6AllWmnosf=mysqli_num_rows($ol6AllWf);
	 $ol6AllW=mysqli_query($con,"SELECT * FROM schdata,$lastolyear where Scid=SchID and AttemptNo ='1' and sat6='1' and satsubject=wpass and Station='School' and schdata.Zone='$id'");
	 $ol6AllWmnos=mysqli_num_rows($ol6AllW);
		 ?>
		 <td class='tg-31u2'><?php echo $ol6AllWmnosm; ?></td>
		 <td class='tg-31u2'><?php echo $ol6AllWmnosf; ?></td>
		 <td class='tg-31u2'><?php echo $ol6AllWmnos; ?></td>
		 <td class='tg-31u2'><?php if($satcou>0){ echo round(($ol6AllWmnosm/$sat6nosm)*100,2); } else{ echo '-';}  ?></td>
		 <td class='tg-31u2'><?php if($satcou>0){ echo round(($ol6AllWmnosf/$sat6nosf)*100,2); } else{ echo '-';}  ?></td>
		 <td class='tg-31u2'><?php if($satcou>0){ echo round(($ol6AllWmnos/$sat6nos)*100,2);   } else{ echo '-';}  ?></td>
		</tr>
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
				echo "<li><a href='".$self."?table=result-zws&page_no=1&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>First</a></li>";
				echo "<li><a href='".$self."?table=result-zws&page_no=".$previous."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?table=result-zws&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?table=result-zws&page_no=".$i."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?table=result-zws&page_no=".$next."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Next</a></li>";
				echo "<li><a href='".$self."?table=result-zws&page_no=".$total_no_of_pages."&f1=".$f1."&f2=".$f2."&f3=".$f3."&f4=".$f4."'>Last</a></li>";
			}
			?></ul><?php
		}
	}

	/* paging */

}
