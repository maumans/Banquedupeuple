$(document).ready(function(){

    $("#myTable").addClass("rounded");
  

    $("#ap").click(function(){
    
        $("#ap").animate({top:"-=20px",fontSize: "-=2px"}, "slow");
        $("#in").toggle();
        $("#in").focus();
      
     
    });

    $("#in").focusout(function(){
      $("#ap").animate({top:"+=20px",fontSize: "+=2px"}, "slow");
      $("#in").toggle();
     
    });


  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) != -1)
    });
  });



  
  $("#tac").hide();
  $("#ic").focus(function(){
    $("#ic").on("keyup", function() {
      if($("#ic").val()!="")
      {
        $("#tac").show();
        var value = $(this).val().toLowerCase();
        $("#tc tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) != -1)
        });
      }
      else
      {
        $("#tac").hide();
      }
      
    });
  });

 

});
