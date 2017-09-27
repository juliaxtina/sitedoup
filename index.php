<!DOCTYPE html>
<html lang="pt-br">

<?php include ("partials/head.php"); ?>
<script type="javascript">
$(document).ready(function() {
  $('#myCarousel').carousel({
    interval: 10000
  })
  $('#media').carousel({
  pause: true,
  interval: false,
});
});
</script>
<body>
	<?php include ("partials/header.php"); ?>
	<!-- LINHA ATUALIZAÇÕES-->
<div class="container-fluid">
    <div class="row">

   <div class="logo1">
     <h1 class="att-blog"> Últimas do Blog </h1>
  </div>

 <!-- Carousel -->

 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

       <!-- Indicators -->
       <ol class="left carousel-indicators">
       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner">
           <div class="item active">
             <img src="img/capa1.jpeg" width="1870px" height="980px" class="img-responsive">
           </div>

           <div class="item">
             <img src="img/capa2.jpeg" width="1870px" height="980px">
         </div>

           <div class="item">
             <img src="img/capa3.jpeg" width="1870px" height="980px">
            </div>
       </div>

       <!-- Controls -->
       <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
       </a>

       <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
       </a>

   </div>

<!-- FIMATUALIZAÇÕES -->
<div class="container">
  <div class="row">
<div class="att">
  <div class="textarea">
  <h2> Últimas Atualizações</h2>
  <p style="text-align: center;">Aenean eu bibendum ligula. Donec pellentesque nunc odio, nec pharetra neque bibendum vel. Etiam rhoncus condimentum ante. Fusce sit amet nisi in turpis imperdiet tincidunt et vel sapien. In eget nulla neque. Curabitur vitae lectus et tortor fermentum malesuada rhoncus quis augue. Curabitur egestas rhoncus sem non lacinia. Curabitur efficitur porttitor dui quis fermentum. </p>
  </div>
    <div class='col-xs-12'>
      <div class="coluna">
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-2">
                <a class="" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>

            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

    <div class="container-fluid">
      <div class="row">

    <div class="att2">
      <div class="textarea">
    <h2> Confira nosso canal do Youtube </h2>
      </div>
      <center>
         <iframe target="_blank" width="560" height="315" src="https://www.youtube.com/embed/9XdkFtPTExs" frameborder="0" allowfullscreen></iframe>
      </center>
      </div>
      </div>
      </div>

<!-- FIM LISTA ATT -->

<?php include ("partials/footer.php"); ?>

</div>
</div>
</body>
</html>
