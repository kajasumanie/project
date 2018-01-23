$(document).ready(function() {
				$('#fixTable').tableHeadFixer({"head" : false, "right" : 0});
				$("#fixTable").tableHeadFixer({"head" : false, "left" : 3}); 
				$("#fixTable").tableHeadFixer({"left" : 3, "right" : 0});
			});
			
				
    //<![CDATA[
      $(document).ready(function() {
        $("#filter").multifilter()
      })
    //]]>

	
	$(function(){
            $(document).on("dblclick",".edit-record",function(e){
                e.preventDefault();
                $("#myModal").modal("show");
                $.post("table/school/hasil.php",
                    {id:$(this).attr("data-id")},
                    function(html){
                        $(".viewpage").html(html);
                    }   
                );
            });
        });
	