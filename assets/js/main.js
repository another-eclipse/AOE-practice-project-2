

$(".af-submit-button").on("click", function(e) {
    $(".hide").hide(); 
    $("#" + $(this).data(".af-success")).show(); // or .toggle()
  });