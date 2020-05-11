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
  
          <h1> Téléchargez des photos et des vidéos sur Instagram </h1>
           <p class = "mt-3 mb-lg-5 mb-4">
              Collez votre URL ci-dessous et téléchargez des photos et des vidéos sur Instagram!
           </p>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Collez votre URL ici" aria-label="Collez votre URL ici" aria-describedby="basic-addon2" name="url" id="url">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="enviar">Téléchargez</button>
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
      <h5 class="text-center alert alert-danger">Cette photo ou vidéo appartient à un profil privé. Pour télécharger, vous devez vous connecter à un compte qui peut accéder à ce média!</h5>

      <!-- Formulário de envio de informações para fotos privadas, Só aparece se for privada-->
      <div class="text-center" style="margin-top: 10px;">
             <form class="form-inline" action="" method="post">
              <div class="form-group mb-2">
                
                <input type="text" class="form-control" placeholder="votre_utilisateur ou votre e-mail" name="login">
              </div>
              <div class="form-group mx-sm-3 mb-2">
               
                <input type="password" class="form-control" id="inputPassword2" placeholder="Mot de passe" name="senha">
              </div>
              <input type="hidden" name="url" value="<?= $_POST['url'] ?>">
              <button type="submit" class="btn btn-primary mb-2">INSCRIVEZ-VOUS</button>
            </form>
      </div>
<?php
    }

if(isset($url) && $url != ""){

echo  '<h4 class="text-center">Pour télécharger une photo ou une vidéo Instagram, cliquez sur le bouton ci-dessous</h4>';

 if ($type == 'image'){
  echo "<div class='text-center'>Este arquivo é do tipo Imagem</div>";

  echo "<div class='text-center'><img src=".$url." style='max-width: 320px; display:block;text-align:center;margin:auto;'></div>";

  echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Téléchargez</a></div>';
 
 } else if ($type == 'video') {
  echo "<div class='text-center'>Ce fichier est de type Video</div>";
    echo '<div class="text-center">';
    echo '<video width="320" height="240" controls="controls" autoplay="autoplay">';
    echo '<source src="'.$url.'" type="video/mp4">
            <object data="" width="320" height="240">
              <embed width="320" height="240" src="'.$url.'">
            </object>
          </video>';
    echo "</div>";

    echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Téléchargez</a></div>';


 }else if ($type == 'sidecar') {

    echo "<div class='text-center'>Ce fichier est de type Slide</div>";

    foreach ($url as $value) {

      if ($value['tipo'] === 'image'){
        echo "<div class='text-center'>
              <img src='".$value['link']."' style='max-width: 320px; display:block;text-align:center;margin:auto;'>
              <a href='".$value['link']."' download='".$value['link']."' class='btn btn-primary' style='margin-top:10px;'>Téléchargez</a>
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

        echo '<div class="text-center" style="margin-top:10px;"><a href="'.$value['link'].'" download="'.$value['link'].'" class="btn btn-primary">Téléchargez</a></div>';
      }     
    }

 }
  else {
    echo  '<div style="margin:10px 0 10px 0;"><h4 class="text-center text-danger">Désolé ..... Malheureusement, le profil est privé, pour des raisons de politique de confidentialité, il n\'a pas été possible de télécharger la photo ou la vidéo!</h4></div>';

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

<h2 style = "text-align: justify;"> Qu'est-ce que Instamim? </h2>

<p style = "text-align: justify;"> Instamim est un service Web (site Web) totalement gratuit qui vous permet de télécharger des photos et des vidéos depuis Instagram, sans avoir besoin de vous inscrire ou de télécharger une application. </ p >
<p style = "text-align: justify;">
La seule chose dont vous aurez besoin est d'obtenir le lien vers le média que vous souhaitez télécharger. </p>


<h2 style = "text-align: justify;"> Puis-je télécharger autant de photos Instagram que je veux? </h2>
<p style = "text-align: justify;"> Oui, vous pouvez passer la journée à télécharger des photos et des vidéos via Instamim. Instamim ne limite pas la quantité d'utilisation du service. </p>

<h2 style = "text-align: justify;"> Puis-je télécharger des photos d'Instagram de qui je veux? </h2>
Non, tout comme sur Instagram, Instamim respecte le droit de chacun à la vie privée. Par conséquent, sur les profils Instagram privés, vous ne pourrez pas télécharger les photos ou les vidéos

<h2 style = "text-align: justify;"> Puis-je télécharger des photos Instagram où je veux? </h2>
<p style = "text-align: justify;"> Oui, vous pouvez utiliser Instamim où vous voulez, aussi longtemps que vous le souhaitez. Il vous suffit de connecter un appareil (téléphone portable, tablette, PC, télévision) à Internet et d'obtenir le lien vers ce que vous souhaitez télécharger. </p>


<h2 style = "text-align: justify;"> Comment télécharger des photos et des vidéos Instagram sur Android </h2>
<p style = "text-align: justify;"> La première chose à faire est d'obtenir le lien vers la photo que vous souhaitez télécharger sur Instagram. Dans les téléphones portables avec le système d'exploitation Android, la procédure est la suivante: </p>
<p style = "text-align: justify;"> 1 - Ouvrez <a href="https://www.instagram.com/"> Instagram </a> et choisissez la photo que vous souhaitez télécharger. < / p>
<p style = "text-align: justify;"> 2 - Dans les 3 points, en haut à droite du nom du profil du propriétaire du message, appuyez sur et choisissez "copier le lien". </p>
<div class='text-center'>
	<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2189 size-full" />
</div>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Vídeos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2190 size-full" />
</div>

<p style="text-align: justify;">3 - Avec le lien copié, vous arrivez sur Instamim et collez dans la case ci-dessus et appuyez sur "Télécharger"</p>
	
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Attendez le téléchargement de votre photo ou vidéo. Si tout se passe bien, cliquez simplement sur Télécharger, juste en dessous de la miniature du média. Après avoir appuyé sur Télécharger, vos fichiers multimédias seront stockés sur votre téléphone Android.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style = "text-align: justify;"> Habituellement, ces photos téléchargées sur Internet se trouvent dans un dossier appelé "télécharger" sur votre appareil Android. </p>
<p style = "text-align: justify;"> Jetez-y un coup d'œil pour trouver votre photo et réutilisez-la comme bon vous semble. </p>






<h2 style = "text-align: justify; margin-top: 20px;"> Comment télécharger des photos et des vidéos Instagram sur iPhone </h2>

<p style = "text-align: justify;"> Tout comme les téléphones Android, pour télécharger des photos et des vidéos Instagram sur iPhone, copiez simplement le lien vers vos médias et utilisez-le ici sur Instamim. </p>
<p style = "text-align: justify;"> Pour obtenir le lien de la photo ou de la vidéo sur l'iPhone ou l'iPad, procédez comme suit: </p>
<p style = "text-align: justify;"> 1 - Cliquez sur les 3 points en haut à droite de la photo de profil, du propriétaire du message. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone.jpg" alt="Como baixar foto do Instagram no iPhone" width="238" height="417" class="wp-image-2211 size-full" />
</div>

<p style="text-align: justify;">2 - Ensuite, nous allons copier l'URL de la photo en appuyant sur "Copier l'URL de partage".</p>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone-2.jpg" alt="Como Baixar fotos do Instagram no iPhone" width="230" height="417" class="aligncenter size-full wp-image-2212" />
</div>


3 - Désormais, cela fonctionne de la même manière pour les téléphones Android.
<p style = "text-align: justify;"> Avec le lien copié, nous allons sur Instamim et collons le lien copié dans la case indiquée. Cliquez ensuite sur "Télécharger". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style = "text-align: justify;"> 4 - Attendons que la photo ou la vidéo soit téléchargée, si tout se passe bien, cliquez simplement sur Télécharger, juste en dessous de la vignette du média. </p>
<p style = "text-align: justify;"> Après avoir appuyé sur Télécharger, votre photo sera stockée sur votre iPhone ou iPad. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style = "text-align: justify;"> Après avoir appuyé sur Télécharger, votre photo ira dans votre dossier de téléchargement. Jetez un coup d'œil pour le trouver. </p>

<h2 style = "text-align: justify; margin-top: 20px;"> Comment télécharger des photos et vidéos Instagram depuis un PC / ordinateur </h2>
<p style = "text-align: justify;"> Pour télécharger des photos ou des vidéos Instagram via un PC / ordinateur est également très simple. La procédure est très similaire à Android et iPhone. </p>

<p style = "text-align: justify;"> 1 - Ouvrez Instagram sur votre PC et affichez la photo que vous souhaitez télécharger. Cliquez ensuite sur les 3 points en haut à droite de l'icône de profil du propriétaire de la photo. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-1.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2216" />
</div>

<p style="text-align: justify;">
2 - Maintenant, cliquons sur "Copier le lien".
</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-2.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2217" />
</div>

<p style = "text-align: justify;"> 3 - Prêt! Nous avons déjà le lien pour pouvoir enregistrer la photo. Passons maintenant à la page Instamim. </p>
<p style = "text-align: justify;"> Nous allons coller le lien dans la case indiquée. Pour coller le lien, appuyez sur les touches CRTL + V, ou cliquez avec le bouton droit de la souris et cliquez sur coller. </p>
<p style = "text-align: justify;"> Après avoir collé le lien à l'endroit indiqué, cliquez simplement sur "Télécharger". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-3.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2218" />
</div>

<p style="text-align: justify;">4 - Attendons maintenant que votre photo se charge dans la vignette, et cliquez sur le bouton "Télécharger" en bas de la vignette.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-4.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2219" />
</div>

<p style = "text-align: justify;"> Terminé! Le téléchargement de photos doit avoir commencé sur votre ordinateur! </p>
<p style = "text-align: justify;"> Tout comme sur Android et iOS, votre photo sera téléchargée dans votre dossier de téléchargement par défaut. Jetez-y un œil et profitez de votre photo maintenant. </p>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>