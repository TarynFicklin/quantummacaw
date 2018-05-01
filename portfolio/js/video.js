 $(document).ready(function(){
   function changevideo(url)
   {$('#main-video video source').attr('src', url);
    $("#main-video video")[0].load();}
 });
