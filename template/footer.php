<footer>
  <div class="container">
        <hr/>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-9">
                      <h3>Shop Bán Tranh</h3>
                      <p><strong>Address</strong>: Ngõ xã đàn 2, phường nam đồng, quận Đống Đa, Hà Nội</p>
                      <p><strong>Tel</strong>: 0989279582</p>
                      <p><strong>Copyright &copy; 2014 by Code team VN-K56 </p>
                </div>
                <div class="col-md-3 text-right">
                  <a href="#"><img src="asset/img/common/backtotop.png" width="40" class="overimg" alt="back to top"></a>
                </div>
            </div>
        </footer>
    </div>
</footer>


<script type="text/javascript" src="asset/js/jquery-1.11.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/base.js"></script>
<script src="asset/js/flux.min.js" type="text/javascript" ></script>
<script type="text/javascript">
   $(document).ready(function () {
       $('.theme').click(function () {
           $('.theme-list').toggleClass('hidden-xs');
           $('.theme b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
           });
           $('.material').click(function () {
           $('.material-list').toggleClass('hidden-xs');
           $('.material b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
           });
             $('.provider').click(function () {
           $('.provider-list').toggleClass('hidden-xs');
           $('.provider b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
       });


          if(!flux.browser.supportsTransitions)
          alert("Flux Slider requires a browser that supports CSS3 transitions");
          
        window.f = new flux.slider('#slider', {
          pagination: false,
          autoplay :true,
          controls: true,
        });
   }
   );
</script>
</body>
</html>