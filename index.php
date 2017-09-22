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
 <center>
   <div class="logo1">
  <img src="img/linha.png" alt="" class="img-responsive">
  </div>
</center>
<!-- CAROUSEL -->


 <!-- Carousel -->


 <div class="row-fluid">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
       <div class="item active">
         <img src="img/capa1.jpeg" width="1870px" height="980px">
         <div class="carousel-caption"> -->
           <!-- <h3>Shaite</h3> -->
         </div>
       </div>
       <div class="item">
         <img src="img/capa2.jpeg" width="1870px" height="980px">
         <div class="carousel-caption"> -->
           <!-- <h3>Second Text</h3>  -->
         </div>
       </div>
       <div class="item">
         <img src="img/capa3.jpeg" width="1870px" height="980px">
         <div class="carousel-caption"> -->
           <!-- <h3>Third Text</h3> -->
         </div>
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
 </div>
<!-- FIMATUALIZAÇÕES -->
<div class="att">
<div class="container">
<div class="row">
  <h2> Últimas Atualizações</h2>
    <div class='col-xs-12'>
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

<!--
<div>
 <center>
 <h4 id="seta"><img src="img/seeta.png" alt="" class="img-rounded"> 29 Andares e Alguns Zumbis </h4>
 </center>
</div>

<div>
 <center>
 <h4 id="seta"><img src="img/seeta.png" alt="..." class="img-rounded"> 29 Andares e Alguns Zumbis </h4>
 </center>
</div> -->

<!-- FIM LISTA ATT -->

<center>
  <div class="logo1">
  <img src="img/fiquepordentro.jpg" alt="" class="img-responsive">
  </div>
 </center>


<?php include ("partials/footer.php"); ?>
</div> <!-- row -->
</div><!-- container -->
</body>
</html>
