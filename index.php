

        <?php include 'C:\Users\admin\Desktop\Proiect site\includes\header.php';?>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
              <div style="background-image: url(https://images.unsplash.com/photo-1483366774565-c783b9f70e2c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80);"> </div>
            </div>
             <div class="carousel-item">
               <div style="background-image: url(https://images.unsplash.com/photo-1520764816423-52375cbff016?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=967&q=80);"> </div>
            </div>
              <div class="carousel-item">
               <div style="background-image: url(https://images.unsplash.com/photo-1485627941502-d2e6429a8af0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80);"> </div>
            </div>
         </div> 
      </div>

    

                      
        <div class="container">
            <div class="row d-flex text-center justify-content-center ps-lg-5">
                <div class="col-sm-12 col-md-10 col-lg-6 mx-auto p-2 ps-lg-5">
                    <h1>Arta de a cauta informatii in Google!</h1>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-6 mx-auto p-2 ps-lg-4">
                    <h2>Curs revolutionar</h2>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-6 mx-auto ps-lg-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-6 justify-content-evenly p-3 mx-auto ps-lg-5">
                     <button type="button" class="btn btn-primary">Inscrie-te acum</button>
                
                     <button type="button" class="btn btn-outline-secondary">Cere detalii</button>
                </div>
                 
            </div>

        </div>
            

    <div class="caracteristici bg-secondary">
        <div class="container py-5">
          <div class="row d-flex-wrap text-center">

             <div class="col-sm-12 col-md-4">
                <div class="picture1">
                    <img src="pictures\1.png"> 
                    <h4>Primavara</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            

                <div class="col-sm-6 col-md-4">
                    <div class="picture2">
                        <img src="pictures\1.png">  
                        <h4>Primavara</h4>
                        <p>Lorem ipsum dolor sit amet</p> 
                        </div>  
                </div>
                
    
                <div class="col-sm-6 col-md-4">
                    <div class="picture3">
                        <img src="pictures\1.png">
                        <h4>Primavara</h4>
                        <p>Lorem ipsum dolor sit amet</p>
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

     <div class="row text-center d-flex justify-content-around">


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5 justify-content-around">
        <h3> 
          <?php print $col1; ?>
         <br>
        <?php print $fraza . ++$nr_modul; ?>
        </h3>
       </div>


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5 justify-content-around">
        <h3> 
        <?php print $col2; ?> 
         <br>
         <?php print $fraza . ++$nr_modul; ?>
        </h3>
       </div>   


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5 justify-content-around">
        <h3> 
        <?php print $col3; ?>
         <br>
         <?php print $fraza . ++$nr_modul; ?>
        </h3>   
       </div>   


       <div class="col-sm-6 col-md-6 col-lg-3 p-1 mt-5 mb-5 justify-content-around">
        <h3> 
        <?php  print $col5; ?>
        
         <br>
        Total participanți
        </h3>
       </div>   



     </div>


    </div>



    <?php include 'C:\Users\admin\Desktop\Proiect site\includes\footer.php';?>