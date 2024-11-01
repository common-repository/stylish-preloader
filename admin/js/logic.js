jQuery(document).ready(function(){
  jQuery(".loader_preview1").click(function(){
   jQuery(".pop_loader").show();
   setTimeout(function() { jQuery(".pop_loader").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview2").click(function(){
   jQuery(".pop_loader2").show();
   setTimeout(function() { jQuery(".pop_loader2").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview3").click(function(){
   jQuery(".pop_loader3").show();
   setTimeout(function() { jQuery(".pop_loader3").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview4").click(function(){
   jQuery(".pop_loader4").show();
   setTimeout(function() { jQuery(".pop_loader4").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview5").click(function(){
   jQuery(".pop_loader5").show();
   setTimeout(function() { jQuery(".pop_loader5").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview6").click(function(){
   jQuery(".pop_loader6").show();
   setTimeout(function() { jQuery(".pop_loader6").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview7").click(function(){
   jQuery(".pop_loader7").show();
   setTimeout(function() { jQuery(".pop_loader7").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview8").click(function(){
   jQuery(".pop_loader8").show();
   setTimeout(function() { jQuery(".pop_loader8").fadeOut("slow"); }, 3000);
 });
jQuery(".loader_preview9").click(function(){
   jQuery(".pop_loader9").show();
   setTimeout(function() { jQuery(".pop_loader9").fadeOut("slow"); }, 3000);
 });
jQuery(".open").on("click", function() {
  jQuery(".popup-overlay, .popup-content").addClass("active");
});
//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
jQuery(".close, .popup-overlay").on("click", function() {
  jQuery(".popup-overlay, .popup-content").removeClass("active");
});
/*================================ Install plugin select preloader ==================*/
jQuery(".install_btn1").click(function(){
	var value = jQuery("input[name=preloader_select]:checked").val();
alert("Your selected preloader Installed; " + value);
/*================================AJAX CALL=========================*/
   jQuery.ajax({
    type: "POST",
    url: ajaxurl, 
    data: { action: 'loaderUpdateSetting' , value:value }
  }).done(function( msg ) {
  
});
     });
});