$(document).ready(function() {
				$('#fixTable').tableHeadFixer({"head" : false, "right" : 1});
				$("#fixTable").tableHeadFixer({"head" : false, "left" : 2}); 
				$("#fixTable").tableHeadFixer({"left" : 2, "right" : 1});
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
                $.post("table/table/hasil.php",
                    {id:$(this).attr("data-id")},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
	