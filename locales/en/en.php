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
          
          <h1>Download photos and videos from Instagram</h1>
          <p class="mt-3 mb-lg-5 mb-4">
             Paste your URL below and download photos and videos from Instagram! 
          </p>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cole sua URL aqui" aria-label="Cole sua URL aqui" aria-describedby="basic-addon2" name="url" id="url">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="enviar">Download</button>
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

    //Caso a foto for privada, da opção de enviar o login
    if (isset($erro) && $erro =='1'){
      ?>
      <h5 class="text-center alert alert-danger">This photo or video belongs to a private profile. To download you need to log in to an account and follow it!</h5>

      <!-- Formulário de envio de informações para fotos privadas, Só aparece se for privada-->
      <div class="text-center" style="margin-top: 10px;">
             <form class="form-inline" action="" method="post">
              <div class="form-group mb-2">
                
                <input type="text" class="form-control" placeholder="seu_usuario ou seu e-mail" name="login">
              </div>
              <div class="form-group mx-sm-3 mb-2">
               
                <input type="password" class="form-control" id="inputPassword2" placeholder="Senha" name="senha">
              </div>
              <input type="hidden" name="url" value="<?= $_POST['url'] ?>">
              <button type="submit" class="btn btn-primary mb-2">Login</button>
            </form>
      </div>
<?php
    }

if(isset($url) && $url != ""){

echo  '<h4 class="text-center">To Download Instagram photo or video, click the button below</h4>';

 if ($type == 'image'){
  echo "<div class='text-center'>This file is of type Image</div>";

  echo "<div class='text-center'><img src=".$url." style='max-width: 320px; display:block;text-align:center;margin:auto;'></div>";

  echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Download</a></div>';
 
 } else if ($type == 'video') {
  echo "<div class='text-center'>This file is of type Video</div>";
    echo '<div class="text-center">';
    echo '<video width="320" height="240" controls="controls" autoplay="autoplay">';
    echo '<source src="'.$url.'" type="video/mp4">
            <object data="" width="320" height="240">
              <embed width="320" height="240" src="'.$url.'">
            </object>
          </video>';
    echo "</div>";

    echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Download</a></div>';


 }else if ($type == 'sidecar') {

    echo "<div class='text-center'>This file of type Slide</div>";

    foreach ($url as $value) {

      if ($value['tipo'] === 'image'){
        echo "<div class='text-center'>
              <img src='".$value['link']."' style='max-width: 320px; display:block;text-align:center;margin:auto;'>
              <a href='".$value['link']."' download='".$value['link']."' class='btn btn-primary' style='margin-top:10px;'>Download</a>
              </div>";
      } elseif ($value['tipo'] === 'video') {
        echo '<div class="text-center">';
        echo '<video width="320" height="240" controls="controls" autoplay="autoplay">';
        echo '<source src="'.$value['link'].'" type="video/mp4">
                <object data="" width="320" height="240">
                  <embed width="320" height="240" src="'.$value['link'].'">
                </object>
              </video>';
        echo "</div>";

        echo '<div class="text-center" style="margin-top:10px;"><a href="'.$value['link'].'" download="'.$value['link'].'" class="btn btn-primary">Download</a></div>';
      }     
    }

 }
  else {
    echo  '<div style="margin:10px 0 10px 0;"><h4 class="text-center text-danger">Sorry..... Unfortunately the profile is private, due to privacy policy reasons, it was not possible to download the photo or video!</h4></div>';

 } 

 unset($_POST['url']);

}
?>

	  </div>
  </div>

</div>


<!-- index-block1 -->
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container py-lg-4">
      <div class="row align-items-center">
        <div class="col-lg-12 text-center">

<h2 style="text-align: justify;">What is Instamim?</h2>

<p style="text-align: justify;">Instamim is a totally free web service (website) that allows you to download photos and videos from Instagram, without the need for any registration or downloading any application.</p>
<p style="text-align: justify;">
The only thing you will need is to get the link for the media you want to download.</p>


<h2 style="text-align: justify;">Can I download as many Instagram photos as I want?</h2>
<p style="text-align: justify;">Yes, you can spend the day downloading photos and videos through Instamim. Instamim does not limit the amount of use of the service.</p>

<h2 style="text-align: justify;">Can I download Instagram photos of whoever I want?</h2>
No, just like on Instagram, Instamim respects everyone's right to privacy. Therefore, on private Instagram profiles, you will not be able to download the photos or videos

<h2 style="text-align: justify;">Can I download Instagram photos wherever I want?</h2>
<p style="text-align: justify;">Yes, you can use Instamim wherever you want, as long as you want. Just have a device (cell phone, tablet, PC, television) connected to the internet and get the link to what you want to download.</p>


<h2 style="text-align: justify;">How to Download Instagram Photos and Videos on Android</h2>
<p style="text-align: justify;">The first thing we should do is get the link to the photo you want to download on Instagram. In cell phones with Android operating system the procedure is as follows:</p>
<p style="text-align: justify;">1 - Open the <a href="https://www.instagram.com/">Instagram</a> and choose the photo you would like to download.</p>
<p style="text-align: justify;">2 - At the 3 dots, at the top right of the post owner's profile name, press and choose "copy link".</p>
<div class='text-center'>
	<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2189 size-full" />
</div>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Vídeos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2190 size-full" />
</div>

<p style="text-align: justify;">3 - With the link copied, you come to Instamim and paste in the box above and press "Download"</p>
	
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Wait for your photo or video to upload. If everything goes well, then just click Download, just below the media thumbnail. After pressing Download, your media will be stored on your Android phone.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style="text-align: justify;">Usually these photos downloaded from the internet are inside a folder called "download" on your Android device.</p>
<p style="text-align: justify;">
Just take a look there to find your photo and reuse it as you see fit.</p>






<h2 style="text-align: justify;margin-top: 20px;">How to Download Instagram Photos and Videos to iPhone</h2>

<p style="text-align: justify;">Much like Android phones, to download photos and Instagram videos on iPhone, just copy the link of your media and use it here on Instamim.</p>
<p style="text-align: justify;">To get the link of the photo or video on iPhone, or iPad do the following:</p>
<p style="text-align: justify;">1 - Click the 3 dots at the top right of the post owner's profile photo.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone.jpg" alt="Como baixar foto do Instagram no iPhone" width="238" height="417" class="wp-image-2211 size-full" />
</div>

<p style="text-align: justify;">2 - Next we will copy the URL of the photo by pressing "Copy share URL".</p>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone-2.jpg" alt="Como Baixar fotos do Instagram no iPhone" width="230" height="417" class="aligncenter size-full wp-image-2212" />
</div>


3 - From now on it works the same for Android phones.
<p style="text-align: justify;">With the link copied, we go to Instamim and paste the link copied in the indicated box. Then just hit "Download".</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Vamos aguardar a foto ou vídeo ser carregada, se tudo correr bem, basta clicar em Download, logo abaixo da miniatura da mídia.</p>
<p style="text-align: justify;">After pressing Download, your photo will be stored on your iPhone or iPad.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style="text-align: justify;">After pressing Download your photo will go to your download folder. Just take a look around to find it.</p>

<h2 style="text-align: justify;margin-top: 20px;">How to Download Instagram Photos and Videos from PC / Computer</h2>
<p style="text-align: justify;">To download photos or videos from Instagram via PC / Computer is very simple too. The procedure is very similar to Android and iPhone. </p>

<p style = "text-align: justify;"> 1 - Open Instagram on your PC and view the photo you would like to download. Then click on the 3 dots on the top right of the photo owner profile icon.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-1.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2216" />
</div>

<p style="text-align: justify;">
2 - Now let's click on "Copy link".
</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-2.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2217" />
</div>

<p style = "text-align: justify;"> 3 - Ready! We already have the link to be able to save the photo. Now let's go to the Instamim page. </p>
<p style = "text-align: justify;"> We will paste the link in the indicated box. To paste the link, press the CRTL + V keys, or click the right mouse button and click paste. </p>
<p style = "text-align: justify;"> After pasting the link in the indicated place, just click "Download". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-3.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2218" />
</div>

<p style="text-align: justify;">4 - Now let's wait for your photo to load in thumbnail, and click on the "Download" button at the bottom of the thumbnail.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-4.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2219" />
</div>

<p style = "text-align: justify;"> Done! The photo download must have started there on your computer! </p>
<p style = "text-align: justify;"> Just like on Android and iOS, your photo will be downloaded to your default download folder. Just take a look there and enjoy your photo now. </p>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>