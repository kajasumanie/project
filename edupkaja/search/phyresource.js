$(document).ready(function(){

//Initializing arrays with city names
var Zone_Wise_Summary = [
    {display: "Basic Details", value: "Basic_Details" }
    ];
  
var School_Wise_Summary = [
    {display: "Basic Details", value: "Basic_Details" }, 
    {display: "Water/Electricity/Sanitation Details", value: "Water_Electricity_Sanitation_Details" },
	{display: "Science Lab Details", value: "Science_Lab_Details" }];


//Function executes on change of first select option field 
$("#select1").change(function(){

var select = $("#select1 option:selected").val();

switch(select){
case "Zone_Wise_Summary":
	select2(Zone_Wise_Summary);
break;

case "School_Wise_Summary":
	select2(School_Wise_Summary);
	show_provi();
break;

default:
	$("#select2").empty();
	$("#select2").append("<option value=''>--Select--</option>");
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
	$("#select2").append("<option value=''>--Select--</option>");
	$(arr).each(function(i){//to list cities
		$("#select2").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>")
	});
}


function show_provi(){
	
	document.getElementById("provi").style.display="block";
};

}); 