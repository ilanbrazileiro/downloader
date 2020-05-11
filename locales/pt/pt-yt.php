<?php include 'header.php';?>

<!-- index-block1 -->
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container py-lg-4">
      <div class="row align-items-center">
        <div class="col-lg-12">
 	
			<?php

          	///////// ERROS ////////////
            if (isset($erro) && $erro !='1'){
      
                echo '<h5 class="text-center alert alert-danger">'.$erro.'</h5>';
            }    

            if (isset($erro_login)){
      
                echo '<h5 class="text-center alert alert-danger">'.$erro_login.'</h5>';
            }    
            /////// FIM ERROS //////////
            ?>
          

          <h1>Baixar Vídeos do Youtube</h1>
          <p class="mt-3 mb-lg-5 mb-4">
             Cole a URL do vídeo do You Tube que deseja fazer o download!
          </p>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cole sua URL aqui" aria-label="Cole sua URL aqui" aria-describedby="basic-addon2" name="url" id="url">
              <select class="custom-select" name="opcao" style="max-width: 130px">
				
              	<option value="1" selected="selected">MP4 360p</option>
              	<option value="2">MP4 480p</option>
              	<option value="3">WEBM 480p</option>
              	<option value="4">WEBM 360p</option>
              	<option value="5">MP4 240p</option>
              	<option value="6">WEBM 240p</option>
              </select>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="enviar">Baixar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div class="container align-items-center">
  <div class="row">
    <div class="col col-lg-12">
<?php 
if(isset($url) && $url != ""){

	?>
 	<div class="text-center">
    		<video width="320" height="240" controls="controls" autoplay="autoplay">
    			<source src="<?= $url ?>" type="video/mp4">
            	<object data="" width="320" height="240">
              		<embed width="320" height="240" src="<?= $url ?>">
            	</object>
          </video>
    </div>

    <div class="text-center" style="margin-top:10px;"><a href="<?= $url ?>" download="<?= $url ?>" class="btn btn-primary" id="download">Download</a></div>


<?php } ?>
		</div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>