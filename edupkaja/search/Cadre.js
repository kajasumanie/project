$(document).ready(function(){

//Initializing arrays with city names
var Zone_Wise_Cadre = [
    {display: "Teacher Cadre Summary", value: "Teacher_Cadre_Summary" }, 
    {display: "Teacher Cadre Summary With Zone", value: "Tearcher_Cadre_Summary_With_Zone" },
    {display: "Tea.Cadre Subject Wise", value: "Tea.Cadre_Subject_Wise" },
    {display: "Tea.Cadre SubjectWise With Zone", value: "Tea.Cadre_SubjectWise_With_Zone" }];
    
    
var School_Wise_Cadre = [
    {display: "Principal Cadre", value: "Principal_Cadre" }, 
    {display: "Subject Wise Teacher Cadre", value: "Subject_Wise_Teacher_Cadre" }];


 
//Function executes on change of first select option field 
$("#select1").change(function(){

var select = $("#select1 option:selected").val();

switch(select){
case "Zone_Wise_Cadre":
	select2(Zone_Wise_Cadre);
break;


case "School_Wise_Cadre":
	select2(School_Wise_Cadre);
	//show_provi();
break;

default:
	$("#select2").empty();
	//$("#select2").append("<option value=''>--Select--</option>");
break;
}
});

$("#select2").change(function(){

var select = $("#select2 option:selected").val();
if(!select=="")
{
	document.getElementById("next_btn1").style.display="block";
	
}

});


//Function To List out Cities in Second Select tags
function select2(arr){
	$("#select2").empty();//To reset cities
	//$("#select2").append("<option value=''>--Select--</option>");
	$(arr).each(function(i){//to list cities
		$("#select2").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>")
	});
}



/* function show_provi(){
	
	document.getElementById("provi").style.display="block";
}; */

});