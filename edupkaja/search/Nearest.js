$(document).ready(function(){

//Initializing arrays with city names
var Zone_Wise = [
    {display: "Schools", value: "Schools" }, 
    {display: "Teachers and Students in Provincial Schools", value: "Teachers_and_Students_in_Provincial_Schools" },
	{display: "Teachers and Students in National Schools", value: "Teachers_and_Students_in_National_Schools" }];
    
    
var Division_Wise = [
    {display: "Schools", value: "Schools" }, 
    {display: "Teachers and Students in Provincial Schools", value: "Teachers_and_Students_in_Provincial_Schools" },
	{display: "Teachers and Students in National Schools", value: "Teachers_and_Students_in_National_Schools" }];


//Function executes on change of first select option field 
$("#select1").change(function(){

var select = $("#select1 option:selected").val();

switch(select){
case "Zone_Wise":
	select2(Zone_Wise);
break;

case "Division_Wise":
	select2(Division_Wise);
break;


default:
	$("#select2").empty();
	$("#select2").append("<option value=''>--Select--</option>");
break;
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


});