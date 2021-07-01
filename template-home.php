<?php 
/* Template Name: Home page
*/
get_header(); ?>

        </div>
		</div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1536882240095-0379873feb4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1051&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1483794344563-d27a8d18014e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1592296429945-93008c7e5a59?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container">
            <div class="row justify-content-center text-center py-5">
                <div class="col-lg-6 col-md-10">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_content(); ?></h2>
                    
                
                <div class="col-sm-12 col-md-10 col-lg-6 justify-content-evenly p-0 mx-auto ps-lg-5">
                     <button type="button"  
                      class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscrie-te acum</button>
                     <a href="/contact/" class="btn btn-outline-secondary"> Cere detalii</button> 
                     </a>
                     
                </div>
                </div>
            </div> 
</div>
            


    <div class="caracteristici bg-secondary">
        <div class="container py-5">
          <div class="row d-flex-wrap text-center">

                <div class="col-sm-12 col-md-4">
                    <div class="picture1">
                    <img src=<?php the_field('imagine_coloana_1'); ?>  >
                      <h4><?php the_field('primavara'); ?></h4>
                      <p><?php the_field('content'); ?></p> 
                      </div>  
                 </div>
                 

                <div class="col-sm-6 col-md-4">
                    <div class="picture2">
                    <img src=<?php the_field('imagine_coloana_2'); ?>  >
                      <h4><?php the_field('primavara_copy'); ?></h4>
                      <p><?php the_field('content_copy'); ?></p> 
                    </div>  
                </div>
                
    
                <div class="col-sm-6 col-md-4">
                    <div class="picture3">
                    <img src=<?php the_field('imagine_coloana_3'); ?>  >
                      <h4><?php the_field('primavara_copy2'); ?></h4>
                      <p><?php the_field('content_copy2'); ?></p> 
                        </div>
                </div>

            </div>

        </div>
    
    </div>

        <?php

          $col1= 2562;
          $col2= 47663;
          $col3= 58112;
          $col4= $col1+$col2+$col3;
          $nr_modul= 0;
          $fraza= "Participanți la modulul ";
          $col1 = number_format($col1,0, ',', '.');
          $col2 = number_format($col2,0, ',', '.');
          $col3 = number_format($col3,0, ',', '.');
          $col4 = number_format($col4,0, ',', '.');
          $col5 = $col1+$col2+$col3;

          if ($col4 >= 50.000){ 
            $col5 = "<strong>$col4</strong>";
          }else {
            $col5 = $col4;
          } 
          ?>

     <div class="container">

     <div class="row text-center d-flex">


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5">
        <h3> 
        <?php print $primul_numar = get_field('participanti_la_modulul_1'); ?>
         <br>
        <?php print $fraza . ++$nr_modul; ?>
        </h3>
       </div>


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5">
        <h3> 
        <?php print $primul_numar = get_field('participanti_la_modulul_2'); ?> 
         <br>
        <?php print $fraza . ++$nr_modul; ?>
        </h3>
       </div>   


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5">
        <h3> 
        <?php print $primul_numar = get_field('participanti_la_modulul_3'); ?>
         <br>
        <?php print $fraza . ++$nr_modul; ?>
        </h3>   
       </div>   


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5">
        <h3> 
        <?php  print $col5; ?>
         <br>
        Total participanți
        </h3>
       </div>   

     </div>

    </div>

		</div><!-- #main -->
	</section><!-- #primary -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">      
        <h5 class="modal-title" id="exampleModalLabel">Inscrie-te acum!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo do_shortcode('[contact-form-7 id="290" title="Newsletter"]'); ?>
        ...
      </div>
      </div>
    </div>
  </div>
</div>

<?php

get_footer();
