$(document).ready(function(){

//Initializing arrays with city names
var Grade_5_Results = [
    {display: "Grade 5 Results 2016", value: "Grade_5_Results_2016" }, 
    {display: "Grade 5 Results 2015", value: "Grade_5_Results_2015" },
	{display: "Grade 5 Results 2014", value: "Grade_5_Results_2014" }];
	
	var GCE_O_L_RESULTS = [
    {display: "GCE O/L Results 2016 1st", value: "GCE_O_L_Results_2016_1st" },
	{display: "GCE O/L Results 2016 2nd", value: "GCE_O_L_Results_2016_2nd" },
	{display: "GCE O/L Results 2015", value: "GCE_O_L_Results_2015" },
	{display: "GCE O/L Results 2014", value: "GCE_O_L_Results_2014" }];
	
var GCE_A_L_RESULTS = [
    {display: "GCE A/L Results 2016 1st", value: "GCE_A/L_Results_2016_1st" },
	{display: "GCE A/L Results 2016 2nd", value: "GCE_A/L_Results_2016_2nd" },
	{display: "GCE A/L Results 2015", value: "GCE_A/L_Results_2015" },
	{display: "GCE A/L Results 2014", value: "GCE_A/L_Results_2014" }];
    


//var Grade_Wise_Student_Population1 = [
   // {display: "Students Summary", value: "Students_Summary" }];

//var Subject_Religion_Wise_Student_Population1 = [
   // {display: "Group3 Subjects Students", value: "Group3_Subjects_Students" }];

	
//var Grade_Wise_Student_Population2 = [
   // {display: "Students Summary", value: "Students_Summary" }];

//var Grade_Wise_Student_Population3 = [
  //  {display: "Primary Students", value: "Primary_Students" },
	//{display: "Secondary Junior Students", value: "Secondary_Junior_Students" },
	//{display: "Secondary Senior Students", value: "Secondary_Senior_Students" },	
	//{display: "Students Summary", value: "Students_Summary" },
   // {display: "Students Grade Wise Total", value: "Students_Grade_Wise_Total" }];


/* var Subject_Religion_Wise_Student_Population3 = [
    {display: "Religion Wise Students", value: "Religion_Wise_Students" },
	{display: "Bilingual Students", value: "Bilingual_Students" },
	{display: "Group1 Subjects Students", value: "Group1_Subjects_Students" },	
	{display: "Group2 Subjects Students", value: "Group2_Subjects_Students" },
    {display: "Group3 Subjects Students", value: "Group3_Subjects_Students" },
	{display: "AL Science Stream Students", value: "AL_Science_Stream_Students" },
	{display: "AL Technical Stream Students", value: "AL_Technical_Stream_Students" },
	{display: "AL Commerce Stream Students", value: "AL_Commerce_Stream_Students" },
	{display: "AL Arts Stream Students", value: "AL_Arts_Stream_Students" }]; */


//Function executes on change of first select option field 
$("#select1").change(function(){

var select = $("#select1 option:selected").val();

switch(select){
case "Grade_5_Results":
	select2(Grade_5_Results);
break;

case "GCE_O_L_RESULTS":
	select2(GCE_O_L_RESULTS);
break;

case "GCE_A_L_RESULTS":
	select2(GCE_A_L_RESULTS);
break;

default:
	$("#select2").empty();
	$("#select2").append("<option value=''>--Select--</option>");
break;
}
});

$("#select2").change(function(){

var select = $("#select2 option:selected").val();

switch(select){
case "Grade_5_Results_2016":
	select3(Grade_5_Results_2016);
break;

case "Grade_5_Results_2015":
	select3(Grade_5_Results_2015);
break;

case "Grade_5_Results_2014":
	select3(Grade_5_Results_2014);
break;

case "GCE_O_L_Results_2016_1st":
	select3(GCE_O_L_Results_2016_1st);
break;
case "GCE_O_L_Results_2016_2nd":
	select3(GCE_O_L_Results_2016_2nd);
break;

case "GCE_O_L_Results_2015":
	select3(GCE_O_L_Results_2015);
break;
case "GCE_O_L_Results_2014":
	select3(GCE_O_L_Results_2014);
break;

default:
	$("#select3").empty();
	$("#select3").append("<option value=''>--Select--</option>");
break;
}
});

$("#select3").change(function(){

var select = $("#select3 option:selected").val();
if(!select=="")
{
	document.getElementById("next_btn1").style.display="block";
	
}

}); 

//Function To List out Cities in Second Select tags
function select2(arr){
	$("#select2").empty();//To reset cities
	$("#select2").append("<option value=''>--Select--</option>");
	$(arr).each(function(i){//to list cities
		$("#select2").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>")
	});
}

function select3(arr){
	$("#select3").empty();//To reset cities
	$("#select3").append("<option value=''>--Select--</option>");
	$(arr).each(function(i){//to list cities
		$("#select3").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>")
	});
}


});