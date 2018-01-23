<link rel="stylesheet" type="text/css" href="../../assets/table-style/css/table-style.css" />

<?php

include('../../dbconfig.php');
$id= $_GET['id'];

?>
<a  onclick="open_win_editar('<?php echo $id; ?>')">view graph </a>

<script language="javascript">
      function open_win_editar(targetID) {
          window.open ("hasil.php?id=" + targetID, "MsgWindow","Editar notícia", "location=1, status=1, scrollbars=1, width=800, height=200");
       }

  </script>

<?php

$primTotM=$primTotF=$primTot=$primTotPClass=$secTotM=$secTotF=$secTot=$secTotPClass=$advTotM=$advTotF=$advTot=$advTotPClass=$TotM=$TotF=$Tot=$TotPClass=$SpeTot=$GTot=0;

$JafprimTotM=0;
$JafprimTotF=0;
$JafprimTot=0;
$JafprimTotPClass=0;
$JafsecTotM=0;
$JafsecTotF=0;
$JafsecTot=0;
$JafsecTotPClass=0;
$JafadvTotM=0;
$JafadvTotF=0;
$JafadvTot=0;
$JafadvTotPClass=0;
$JafTotM=0;
$JafTotF=0;
$JafTot=0;
$JafTotPClass=0;
$JafSpeTot=0;
$JafGTot=0;


$result=mysqli_query($con,"SELECT * FROM schdata,studentpop,grpsubstudp WHERE Scid=stScid and Scid=SubScid and Station='School' and schdata.Zone='$id'");
while($test = mysqli_fetch_array($result))
{

$JafprimTotM=$JafprimTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M'];
$JafprimTotF=$JafprimTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F'];
$JafprimTot=$JafprimTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot'];
$JafprimTotPClass=$JafprimTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass'];

$JafsecTotM=$JafsecTotM+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM'];
$JafsecTotF=$JafsecTotF+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF'];
$JafsecTot=$JafsecTot+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot'];
$JafsecTotPClass=$JafsecTotPClass+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass'];

$JafadvTotM=$JafadvTotM+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
$JafadvTotF=$JafadvTotF+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
$JafadvTot=$JafadvTot+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
$JafadvTotPClass=$JafadvTotPClass+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

$JafTotM=$JafTotM+$test['G1M']+$test['G2M']+$test['G3M']+$test['G4M']+$test['G5M']+$test['G6M']+$test['G7M']+$test['G8M']+$test['G9M']+$test['G10M']+$test['G11M']+$test['G11RM']+$test['G12SM']+$test['G12MM']+$test['G12CM']+$test['G12AM']+$test['G12TM']+$test['G13SM']+$test['G13MM']+$test['G13CM']+$test['G13AM']+$test['G13TM']+$test['G13SRM']+$test['G13MRM']+$test['G13CRM']+$test['G13ARM']+$test['G13TRM'];
$JafTotF=$JafTotF+$test['G1F']+$test['G2F']+$test['G3F']+$test['G4F']+$test['G5F']+$test['G6F']+$test['G7F']+$test['G8F']+$test['G9F']+$test['G10F']+$test['G11F']+$test['G11RF']+$test['G12SF']+$test['G12MF']+$test['G12CF']+$test['G12AF']+$test['G12TF']+$test['G13SF']+$test['G13MF']+$test['G13CF']+$test['G13AF']+$test['G13TF']+$test['G13SRF']+$test['G13MRF']+$test['G13CRF']+$test['G13ARF']+$test['G13TRF'];
$JafTot=$JafTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot'];
$JafTotPClass=$JafTotPClass+$test['G1PClass']+$test['G2PClass']+$test['G3PClass']+$test['G4PClass']+$test['G5PClass']+$test['G6PClass']+$test['G7PClass']+$test['G8PClass']+$test['G9PClass']+$test['G10PClass']+$test['G11PClass']+$test['G11RPClass']+$test['G12SPClass']+$test['G12MPClass']+$test['G12CPClass']+$test['G12APClass']+$test['G12TPClass']+$test['G13SPClass']+$test['G13MPClass']+$test['G13CPClass']+$test['G13APClass']+$test['G13TPClass']+$test['G13SRPClass']+$test['G13MRPClass']+
$test['G13CRPClass']+$test['G13ARPClass']+$test['G13TRPClass'];

$JafSpeTot=$JafSpeTot+$test['SpeInCentre'];
$JafGTot=$JafGTot+$test['G1Tot']+$test['G2Tot']+$test['G3Tot']+$test['G4Tot']+$test['G5Tot']+$test['G6Tot']+$test['G7Tot']+$test['G8Tot']+$test['G9Tot']+$test['G10Tot']+$test['G11Tot']+$test['G11RTot']+$test['G12STot']+$test['G12MTot']+$test['G12CTot']+$test['G12ATot']+$test['G12TTot']+$test['G13STot']+$test['G13MTot']+$test['G13CTot']+$test['G13ATot']+$test['G13TTot']+$test['G13SRTot']+$test['G13MRTot']+$test['G13CRTot']+$test['G13ARTot']+$test['G13TRTot']+$test['SpeInCentre'];

}
?>
<style>
.highlight { background-color: #8888FF }
</style>
<div id="wrapper" class="align:center">
  <table  class="tg">
<tr >
  <th class="tg-mxzp" align='center' colspan="2" >Zone</th>
  		<td class='tg-c9p5' ><?php echo $id ?></td>
  </tr>
  <tr>
	<th class="tg-mxzp" align='center' rowspan=4 >Grade 1-5</th>
  <th class="tg-mxzp" align='center'>Male</th>
			<td class='tg-31u2'><?php echo $JafprimTotM ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Female</th>
  		<td class='tg-31u2'><?php echo $JafprimTotF ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Total</th>
  		<td class='tg-31u2'><?php echo $JafprimTot ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Parallel Class</th>
  		<td class='tg-31u2'><?php echo $JafprimTotPClass ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center' rowspan=4 >Grade 6-11</th>
      <th class="tg-mxzp" align='center'>Male</th>
  		<td class='tg-31u2'><?php echo $JafsecTotM ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Female</th>
  		<td class='tg-31u2'><?php echo $JafsecTotF ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Total</th>
  		<td class='tg-31u2'><?php echo $JafsecTot ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Parallel Class</th>
  		<td class='tg-31u2'><?php echo $JafsecTotPClass ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center' rowspan=4 >Grade 12-13</th>
      <th class="tg-mxzp" align='center'>Male</th>

  		<td class='tg-31u2'><?php echo $JafadvTotM ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Female</th>
  		<td class='tg-31u2'><?php echo $JafadvTotF ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Total</th>
  		<td class='tg-31u2'><?php echo $JafadvTot ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Parallel Class</th>
  		<td class='tg-31u2'><?php echo $JafadvTotPClass ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center' rowspan=4 >Total</th>
      <th class="tg-mxzp" align='center'>Male</th>
  		<td class='tg-31u2'><?php echo $JafTotM ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Female</th>
  		<td class='tg-31u2'><?php echo $JafTotF ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Total</th>
  		<td class='tg-31u2'><?php echo $JafTot ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'>Parallel Class</th>
  		<td class='tg-31u2'><?php echo $JafTotPClass ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center'colspan="2" >Spe. Edu. InCentre</th>
  		<td class='tg-31u2'><?php echo $JafSpeTot ?></td>
    </tr>
    <tr>
      <th class="tg-mxzp" align='center' colspan="2" >Grand Total</th>
  		<td class='tg-31u2'><?php echo $JafGTot ?></td>
</tr>
</table>
</div>
