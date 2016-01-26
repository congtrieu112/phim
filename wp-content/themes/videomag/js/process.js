jQuery.noConflict();
(function( $ ) {
  $(function() {
        var height_slide = $("#top-home").height();
        $(".carousel-inner").css('max-height', height_slide)
        $(window).resize(function () {
            var height_slide = $("#top-home").height();
            $(".carousel-inner").css('max-height', height_slide)
        });
      
      
      $(".load-more").on("click",function(e){
          e.preventDefault();
          $(".process.col-md-12").css("display","block");
          var url = $(this).attr('href');
          var nonce_field = $(this).data("nonce");
          var team_id = $(this).data("id");
          var view = (team_id) ? team_id : 0; 
          var views = $("#load-more-"+view);
          var curent = this.id ;
          var page = parseInt($("#"+curent).attr("data-page")) + 1;
          var data = {page:page,data_nonce:nonce_field,team_id:team_id,action:"load_more"};
          $.post(url,data,function(e){
              $("#"+curent).attr("data-page", page  );
              views.append(e);
              $(".process.col-md-12").css("display","none");
              
          });
         return false;
      });
      if(SINGLE_VIDEO){
          $(".video-light").allofthelights();
      }
      
      
        
        
     
        
  });
   NProgress.start();
  $(window).bind("load", function() { 
    NProgress.done();
    $('.fadess').removeClass('out');
    $('.fadess').removeClass('fadess');  
//    setTimeout(function() { NProgress.done();jQuery('.fadess').removeClass('out'); jQuery('.fadess').removeClass('fadess');}, 2000);  

});
   
})(jQuery);




    
