$(function(){
  $("#navbarDropdown").click(function(){
    $(".dropdown-menu").show();
  });
  $("#navbarDropdown").dbClick(function(){
    $(".dropdown-menu").hide();
  });
});
