<script src="scrips/photo-gallery.js"></script>
<?php 
$title = "Portfolio";
//include_once("layout_files/header.php");?>
        
        <div id="portfolio" class="container-fluid text-center">
             <br>
            <h2>OUR GALLERY</h2>
        
        <br>
        <ul class="row">
            <li class="col-sm-4 col-sm-4 col-sm-4">
                <img class="img-responsive" src="images/data_rec.jpg" alt="data recovery">
            </li>
            <li class="col-sm-4 col-sm-4 col-sm-4">
                <img class="img-responsive" src="images/electrical.jpg" alt="Electrical Repairs">
            </li>
            <li class="col-sm-4 col-sm-4 col-sm-4">
                <img class="img-responsive" src="images/driver.jpg" alt="Drivers" width="275" height="183">
            </li>
            <li class="col-sm-4 col-sm-4 col-sm-4">
                <img class="img-responsive" src="images/installation.jpg" alt="Install">
            </li>
            <li class="col-sm-4 col-sm-4 col-sm-4">
                <img class="img-responsive" src="images/laptop.jpg" alt="Laptop">
            </li>
            <li class="col-sm-4 col-sm-4 col-sm-4">
                <img class="img-responsive" src="images/patches.jpg" alt="Updates and Patches">
            </li>
          
          </ul>             
    <!-- /container -->
        
        <h2>What our customers say</h2>
          <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <h4>"Steve Rhoden is the best. He disassembled and cleaned my laptop then reassembled it like that!"<br><span style="font-style:normal;">Carolyn Hayles, Board Member, Columbus Business Solutions Ltd.</span></h4>
              </div>
              <div class="item">
                <h4>"One word... AWESOME!!"<br><span style="font-style:normal;">Wanda Rhodd, Principal, Childrens Center</span></h4>
              </div>
              <div class="item">
                <h4>"They gets it done"<br><span style="font-style:normal;">Ursula Williams, Manager- Operations, Magna Motors</span></h4>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
</div>
    
     
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
      
  <?php //include_once("layout_files/footer.php");?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>