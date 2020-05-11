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
          

          <h1> Descargar fotos y videos de Instagram </h1>
           <p class = "mt-3 mb-lg-5 mb-4">
              ¡Pega tu URL a continuación y descarga fotos y videos de Instagram!
           </p>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Pega tu URL aquí" aria-label="Pega tu URL aquí" aria-describedby="basic-addon2" name="url" id="url">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="enviar">Descargar</button>
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
      <h5 class="text-center alert alert-danger">Esta foto o video pertenece a un perfil privado. Para descargar, debe iniciar sesión en una cuenta que pueda acceder a este medio.</h5>

      <!-- Formulário de envio de informações para fotos privadas, Só aparece se for privada-->
      <div class="text-center" style="margin-top: 10px;">
             <form class="form-inline" action="" method="post">
              <div class="form-group mb-2">
                
                <input type="text" class="form-control" placeholder="tu_usuario o tu correo electrónico" name="login">
              </div>
              <div class="form-group mx-sm-3 mb-2">
               
                <input type="password" class="form-control" id="inputPassword2" placeholder="Contraseña" name="senha">
              </div>
              <input type="hidden" name="url" value="<?= $_POST['url'] ?>">
              <button type="submit" class="btn btn-primary mb-2">REGÍSTRATE</button>
            </form>
      </div>
<?php
    }

if(isset($url) && $url != ""){

echo  '<h4 class="text-center">Para descargar una foto o video de Instagram, haga clic en el botón a continuación</h4>';

 if ($type == 'image'){
  echo "<div class='text-center'>Este archivo es de tipo Imagen</div>";

  echo "<div class='text-center'><img src=".$url." style='max-width: 320px; display:block;text-align:center;margin:auto;'></div>";

  echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Descargar</a></div>';
 
 } else if ($type == 'video') {
  echo "<div class='text-center'>Este archivo es de tipo Video</div>";
    echo '<div class="text-center">';
    echo '<video width="320" height="240" controls="controls" autoplay="autoplay">';
    echo '<source src="'.$url.'" type="video/mp4">
            <object data="" width="320" height="240">
              <embed width="320" height="240" src="'.$url.'">
            </object>
          </video>';
    echo "</div>";

    echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Descargar</a></div>';


 }else if ($type == 'sidecar') {

    echo "<div class='text-center'>Este archivo es de tipo Slide</div>";

    foreach ($url as $value) {

      if ($value['tipo'] === 'image'){
        echo "<div class='text-center'>
              <img src='".$value['link']."' style='max-width: 320px; display:block;text-align:center;margin:auto;'>
              <a href='".$value['link']."' download='".$value['link']."' class='btn btn-primary' style='margin-top:10px;'>Descargar</a>
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

        echo '<div class="text-center" style="margin-top:10px;"><a href="'.$value['link'].'" download="'.$value['link'].'" class="btn btn-primary">Descargar</a></div>';
      }     
    }

 }
  else {
    echo  '<div style="margin:10px 0 10px 0;"><h4 class="text-center text-danger">Lo sentimos ..... Lamentablemente, el perfil es privado, debido a razones de política de privacidad, no fue posible descargar la foto o el video.</h4></div>';

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

<h2 style = "text-align: justify;"> ¿Qué es Instamim? </h2>

<p style = "text-align: justify;"> Instamim es un servicio web (sitio web) totalmente gratuito que le permite descargar fotos y videos de Instagram, sin necesidad de registrarse ni descargar ninguna aplicación. </ p >
<p style = "text-align: justify;">
Lo único que necesitará es obtener el enlace de los medios que desea descargar. </p>


<h2 style = "text-align: justify;"> ¿Puedo descargar tantas fotos de Instagram como quiera? </h2>
<p style = "text-align: justify;"> Sí, puede pasar el día descargando fotos y videos a través de Instamim. Instamim no limita la cantidad de uso del servicio. </p>

<h2 style = "text-align: justify;"> ¿Puedo descargar fotos de Instagram de quien quiera? </h2>
<p style = "text-align: justify;">
No, al igual que en Instagram, Instamim respeta el derecho de todos a la privacidad. Por lo tanto, en los perfiles privados de Instagram, no podrá descargar las fotos o los videos.
</p>

<h2 style = "text-align: justify;"> ¿Puedo descargar fotos de Instagram donde quiera? </h2>
<p style = "text-align: justify;"> Sí, puede usar Instamim donde quiera, siempre que lo desee. Simplemente tenga un dispositivo (teléfono celular, tableta, PC, televisión) conectado a Internet y obtenga el enlace a lo que desea descargar. </p>


<h2 style = "text-align: justify;"> Cómo descargar fotos y videos de Instagram en Android </h2>
<p style = "text-align: justify;"> Lo primero que debemos hacer es obtener el enlace a la foto que desea descargar en Instagram. En los teléfonos celulares con sistema operativo Android, el procedimiento es el siguiente: </p>
<p style = "text-align: justify;"> 1 - Abra <a href="https://www.instagram.com/"> Instagram </a> y elija la foto que desea descargar. < / p>
<p style = "text-align: justify;"> 2 - En los 3 puntos, en la parte superior derecha del nombre del perfil del propietario de la publicación, presione y elija "copiar enlace". </p>
<div class='text-center'>
	<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2189 size-full" />
</div>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Vídeos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2190 size-full" />
</div>

<p style="text-align: justify;">3 - Con el enlace copiado, ve a Instamim y pega en el cuadro de arriba y presiona "Descargar"</p>
	
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - 
Espera a que se cargue tu foto o video. Si todo va bien, simplemente haga clic en Descargar, justo debajo de la miniatura de los medios. Después de presionar Descargar, sus medios se almacenarán en su teléfono Android.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style = "text-align: justify;"> Por lo general, estas fotos descargadas de Internet están dentro de una carpeta llamada "download" en su dispositivo Android. </p>
<p style = "text-align: justify;"> Simplemente eche un vistazo allí para encontrar su foto y reutilícela como mejor le parezca. </p>






<h2 style = "text-align: justify; margin-top: 20px;"> Cómo descargar fotos y videos de Instagram en iPhone </h2>

<p style = "text-align: justify;"> Al igual que los teléfonos Android, para descargar fotos y videos de Instagram en el iPhone, simplemente copie su enlace de medios y úselo aquí en Instamim. </p>
<p style = "text-align: justify;"> Para obtener el enlace de la foto o video en el iPhone o iPad, haga lo siguiente: </p>
<p style = "text-align: justify;"> 1 - Haz clic en los 3 puntos en la parte superior derecha de la foto de perfil, del propietario de la publicación. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone.jpg" alt="Como baixar foto do Instagram no iPhone" width="238" height="417" class="wp-image-2211 size-full" />
</div>

<p style="text-align: justify;">2 - A continuación, copiemos la URL de la foto haciendo clic en "Copiar URL compartida".</p>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone-2.jpg" alt="Como Baixar fotos do Instagram no iPhone" width="230" height="417" class="aligncenter size-full wp-image-2212" />
</div>


3 - A partir de ahora funciona igual para teléfonos Android.
<p style = "text-align: justify;"> Con el enlace copiado, vamos a Instamim y pegamos el enlace copiado en el cuadro indicado. Luego simplemente presione "Descargar". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style = "text-align: justify;"> 4 - Esperemos a que se cargue la foto o el video, si todo va bien, simplemente haga clic en Descargar, justo debajo de la miniatura de medios. </p>
<p style = "text-align: justify;"> Después de presionar Descargar, su foto se almacenará en su iPhone o iPad. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style = "text-align: justify;"> Después de presionar Descargar, su foto irá a su carpeta de descargas. Solo eche un vistazo para encontrarlo. </p>

<h2 style = "text-align: justify; margin-top: 20px;"> Cómo descargar fotos y videos de Instagram desde una PC / computadora </h2>
<p style = "text-align: justify;"> Descargar fotos o videos de Instagram a través de una PC / computadora también es muy simple. El procedimiento es muy similar al de Android y iPhone. </p>

<p style = "text-align: justify;"> 1 - Abra Instagram en su PC y vea la foto que desea descargar. Luego haga clic en los 3 puntos en la esquina superior derecha del ícono del perfil del propietario de la foto. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-1.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2216" />
</div>

<p style="text-align: justify;">
2 - Ahora hagamos clic en "Copiar enlace".
</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-2.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2217" />
</div>

<p style = "text-align: justify;"> 3 - ¡Listo! Ya tenemos el enlace para poder guardar la foto. Ahora vamos a la página de Instamim. </p>
<p style = "text-align: justify;"> Pegaremos el enlace en el cuadro indicado. Para pegar el enlace, presione las teclas CRTL + V o haga clic con el botón derecho del mouse y haga clic en pegar. </p>
<p style = "text-align: justify;"> Después de pegar el enlace en el lugar indicado, simplemente haga clic en "Descargar". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-3.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2218" />
</div>

<p style="text-align: justify;">4 - Ahora esperemos a que su foto se cargue en miniatura y haga clic en el botón "Descargar" en la parte inferior de la miniatura.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-4.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2219" />
</div>

<p style = "text-align: justify;"> ¡Listo! ¡La descarga de la foto debe haber comenzado allí en su computadora! </p>
<p style = "text-align: justify;"> Al igual que en Android e iOS, su foto se descargará a su carpeta de descarga predeterminada. Simplemente eche un vistazo allí y disfrute de su foto ahora. </p>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>