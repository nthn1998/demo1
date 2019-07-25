<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 
 $(function(){
   //load nội dung trang web lần lượt
   TweenMax.staggerFrom($("._1block, ._2block"),0.3,{top: 50, opacity: 0},0.1)

   // Load thêm nội dung: ban đầu ẩn nội dung, khi click nút mơi cho hiện ra, 
   //sau đó cho hiển thị TweenMax
   $(".load_content").slideUp(0);

   $(".bt_load_more").click(function (e) { 
       $(".load_content").slideDown(500);
       TweenMax.staggerFrom($(".load_content ._1block, .load_content ._2block"),0.5,{left: 50, opacity: 0},0.3)
   });
})  

 
</script>
<!-- end Simple Custom CSS and JS -->
