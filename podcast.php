<?php include "plantilla/head.php";?>

  <body id="top" class="bgded imgFirts">
    <!-- Incluyendo navegador -->
    <?php include "plantilla/navbar.php"; ?>
      <div style="margin-top:100px;"></div>
      <div class="contentDivPodcast" >
        <div class="col-md-12 row">
          <div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-capitulos-tab" data-toggle="pill" href="#v-pills-capitulos" role="tab" aria-controls="v-pills-capitulos" aria-selected="true">Capítulos</a>
            <a class="nav-link" id="v-pills-mirco_podcast-tab" data-toggle="pill" href="#v-pills-mirco_podcast" role="tab" aria-controls="v-pills-mirco_podcast" aria-selected="false">Micro-Podcast</a>
            <a class="nav-link" id="v-pills-entrevistas-tab" data-toggle="pill" href="#v-pills-entrevistas" role="tab" aria-controls="v-pills-entrevistas" aria-selected="false">Entrevistas</a>
          </div>
          
          <div class="tab-content col-md-10" id="v-pills-tabContent" style="background-image: url(images/img-project/FondoAzul.png);max-height: 650px;overflow: auto;">
            <div class="tab-pane fade show active" id="v-pills-capitulos" role="tabpanel" aria-labelledby="v-pills-capitulos-tab">


              <div class="row">
                
                <div class="col-md-12">

                  <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <audio src="audio.ogg" controls autoplay loop style="width:100%">
                      <p>Tu navegador no implementa el elemento audio</p>
                      </audio>
                    </div>
                  </div>
                </div>  
              </div>
<br>
              <div class="row">
                
                <div class="col-md-12">

                  <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <audio src="audio.ogg" controls autoplay loop>
                      <p>Tu navegador no implementa el elemento audio</p>
                      </audio>
                    </div>
                  </div>
                </div>  
              </div>
<br>
              <div class="row">
                
                <div class="col-md-12">

                  <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <audio src="audio.ogg" controls autoplay loop>
                      <p>Tu navegador no implementa el elemento audio</p>
                      </audio>
                    </div>
                  </div>
                </div>  
              </div>
<br>
              <div class="row">
                
                <div class="col-md-12">

                  <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <audio src="audio.ogg" controls autoplay loop>
                      <p>Tu navegador no implementa el elemento audio</p>
                      </audio>
                    </div>
                  </div>
                </div>  
              </div>
<br>
              <div class="row">
                
                <div class="col-md-12">

                  <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <audio src="audio.ogg" controls autoplay loop>
                      <p>Tu navegador no implementa el elemento audio</p>
                      </audio>
                    </div>
                  </div>
                </div>  
              </div>

    




            </div>
            <div class="tab-pane fade" id="v-pills-mirco_podcast" role="tabpanel" aria-labelledby="v-pills-mirco_podcast-tab">...</div>
            <div class="tab-pane fade" id="v-pills-entrevistas" role="tabpanel" aria-labelledby="v-pills-entrevistas-tab">...</div>
          </div>
        </div>
      </div>
      <div style="margin-top:100px;"></div>
      <div style="margin-top:100px;"></div>
      <div style="margin-top:100px;"></div>
      <div style="margin-top:100px;"></div>
    <?php require_once 'plantilla/footer.php'; ?>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <?php include 'plantilla/script.php' ?>
    <script type="text/javascript" src="js/podcast.js"></script>
  </body>
</html>