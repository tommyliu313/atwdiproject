
let element = document.getElementById(".accordion-button");

$(function(){
  $("#navbarDropdown").click(function(){
    $(".dropdown-menu").show();
  });
  $("#navbarDropdown").dbClick(function(){
    $(".dropdown-menu").hide();
  });
  $("element").dbclick(function(){
    if( element.ariaexpanded.val() == "true"){
      element.ariaexpanded.val() == "false";
      $(".accordion-collapse").removeClass("collapse show");
      $(".accordion-collapse").addClass("collapsed");
    }
    
  })
});
