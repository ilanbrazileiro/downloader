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
          
         <h1> Scarica foto e video da Instagram </h1>
           <p class = "mt-3 mb-lg-5 mb-4">
              Incolla il tuo URL qui sotto e scarica foto e video da Instagram!
           </P>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Incolla qui il tuo URL" aria-label="Incolla qui il tuo URL" aria-describedby="basic-addon2" name="url" id="url">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="enviar">Scaricare</button>
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
      <h5 class="text-center alert alert-danger">Questa foto o video appartiene a un profilo privato. Per scaricare è necessario accedere a un account che può accedere a questo supporto!</h5>

      <!-- Formulário de envio de informações para fotos privadas, Só aparece se for privada-->
      <div class="text-center" style="margin-top: 10px;">
             <form class="form-inline" action="" method="post">
              <div class="form-group mb-2">
                
                <input type="text" class="form-control" placeholder="tuo_utente o la tua email" name="login">
              </div>
              <div class="form-group mx-sm-3 mb-2">
               
                <input type="password" class="form-control" id="inputPassword2" placeholder="password" name="senha">
              </div>
              <input type="hidden" name="url" value="<?= $_POST['url'] ?>">
              <button type="submit" class="btn btn-primary mb-2">ISCRIVITI</button>
            </form>
      </div>
<?php
    }

if(isset($url) && $url != ""){

echo  '<h4 class="text-center">Per scaricare foto o video di Instagram, fai clic sul pulsante in basso</h4>';

 if ($type == 'image'){
  echo "<div class='text-center'>Questo file è di tipo Immagine</div>";

  echo "<div class='text-center'><img src=".$url." style='max-width: 320px; display:block;text-align:center;margin:auto;'></div>";

  echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">scaricare</a></div>';
 
 } else if ($type == 'video') {
  echo "<div class='text-center'>Questo file è di tipo Video</div>";
    echo '<div class="text-center">';
    echo '<video width="320" height="240" controls="controls" autoplay="autoplay">';
    echo '<source src="'.$url.'" type="video/mp4">
            <object data="" width="320" height="240">
              <embed width="320" height="240" src="'.$url.'">
            </object>
          </video>';
    echo "</div>";

    echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">scaricare</a></div>';


 }else if ($type == 'sidecar') {

    echo "<div class='text-center'>Questo file è di tipo Slide</div>";

    foreach ($url as $value) {

      if ($value['tipo'] === 'image'){
        echo "<div class='text-center'>
              <img src='".$value['link']."' style='max-width: 320px; display:block;text-align:center;margin:auto;'>
              <a href='".$value['link']."' download='".$value['link']."' class='btn btn-primary' style='margin-top:10px;'>scaricare</a>
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

        echo '<div class="text-center" style="margin-top:10px;"><a href="'.$value['link'].'" download="'.$value['link'].'" class="btn btn-primary">scaricare</a></div>';
      }     
    }

 }
  else {
    echo  '<div style="margin:10px 0 10px 0;"><h4 class="text-center text-danger">Siamo spiacenti ..... Purtroppo il profilo è privato, a causa della politica sulla privacy, non è stato possibile scaricare la foto o il video!</h4></div>';

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

<h2 style = "text-align: justify;"> Che cos'è Instamim? </h2>

<p style = "text-align: justify;"> Instamim è un servizio web (sito Web) totalmente gratuito che ti consente di scaricare foto e video da Instagram, senza la necessità di alcuna registrazione o download di alcuna applicazione. </ p >
<p style = "text-align: justify;">
L'unica cosa di cui avrai bisogno è ottenere il link per il file multimediale che desideri scaricare. </p>


<h2 style = "text-align: justify;"> Posso scaricare tutte le foto di Instagram che voglio? </h2>
<p style = "text-align: justify;"> Sì, puoi passare la giornata a scaricare foto e video tramite Instamim. Instamim non limita la quantità di utilizzo del servizio. </p>

<h2 style = "text-align: justify;"> Posso scaricare foto da Instagram di chi voglio? </h2>
No, proprio come su Instagram, Instamim rispetta il diritto alla privacy di tutti. Pertanto, sui profili Instagram privati, non sarai in grado di scaricare foto o video

<h2 style = "text-align: justify;"> Posso scaricare le foto di Instagram dove voglio? </h2>
<p style = "text-align: justify;"> Sì, puoi usare Instamim dove vuoi, per tutto il tempo che desideri. Basta avere un dispositivo (cellulare, tablet, PC, televisione) collegato a Internet e ottenere il collegamento a ciò che si desidera scaricare. </p>


<h2 style = "text-align: justify;"> Come scaricare foto e video di Instagram su Android </h2>
<p style = "text-align: justify;"> La prima cosa che dovremmo fare è ottenere il link alla foto che vuoi scaricare su Instagram. Nei telefoni cellulari con sistema operativo Android la procedura è la seguente: </p>
<p style = "text-align: justify;"> 1 - Apri <a href="https://www.instagram.com/"> Instagram </a> e scegli la foto che desideri scaricare. < / p>
<p style = "text-align: justify;"> 2 - Nei 3 punti, in alto a destra del nome del profilo del proprietario del post, premi e scegli "copia collegamento". </p>

<div class='text-center'>
	<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2189 size-full" />
</div>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Vídeos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2190 size-full" />
</div>

<p style="text-align: justify;">3 - Con il collegamento copiato, vieni su Instamim e incolla la casella sopra e premi "Download"</p>
	
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Attendi il caricamento della tua foto o video. Se tutto va bene, fai clic su Download, appena sotto la miniatura del file multimediale. Dopo aver premuto Download, i file multimediali verranno archiviati sul tuo telefono Android.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style = "text-align: justify;"> Di solito queste foto scaricate da Internet si trovano in una cartella chiamata "download" sul tuo dispositivo Android. </p>
<p style = "text-align: justify;"> Basta dare un'occhiata lì per trovare la tua foto e riutilizzarla come ritieni opportuno. </p>






<h2 style = "text-align: justify; margin-top: 20px;"> Come scaricare foto e video di Instagram su iPhone </h2>

<p style = "text-align: justify;"> Proprio come i telefoni Android, per scaricare foto e video di Instagram su iPhone, basta copiare il collegamento multimediale e utilizzarlo qui su Instamim. </p>
<p style = "text-align: justify;"> Per ottenere il collegamento della foto o del video su iPhone o iPad, procedi come segue: </p>
<p style = "text-align: justify;"> 1 - Fai clic sui 3 punti in alto a destra della foto del profilo, del proprietario del post. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone.jpg" alt="Como baixar foto do Instagram no iPhone" width="238" height="417" class="wp-image-2211 size-full" />
</div>

<p style="text-align: justify;">2 -Successivamente copieremo l'URL della foto premendo "Copia URL di condivisione".</p>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone-2.jpg" alt="Como Baixar fotos do Instagram no iPhone" width="230" height="417" class="aligncenter size-full wp-image-2212" />
</div>


3 - D'ora in poi funziona lo stesso per i telefoni Android.
<p style = "text-align: justify;"> Con il link copiato, andiamo su Instamim e incolliamo il link copiato nella casella indicata. Quindi premi "Download". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style = "text-align: justify;"> 4 - Aspettiamo che la foto o il video vengano caricati, se tutto va bene, fai clic su Download, appena sotto l'anteprima multimediale. </p>
<p style = "text-align: justify;"> Dopo aver premuto Download, la tua foto verrà memorizzata sul tuo iPhone o iPad. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style = "text-align: justify;"> Dopo aver premuto Download, la foto passerà alla cartella di download. Dai un'occhiata in giro per trovarlo. </p>

<h2 style = "text-align: justify; margin-top: 20px;"> Come scaricare foto e video di Instagram da PC / Computer </h2>
<p style = "text-align: justify;"> Anche scaricare foto o video di Instagram tramite PC / Computer è molto semplice. La procedura è molto simile ad Android e iPhone. </p>

<p style = "text-align: justify;"> 1 - Apri Instagram sul tuo PC e visualizza la foto che desideri scaricare. Quindi fai clic sui 3 punti in alto a destra dell'icona del profilo del proprietario della foto. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-1.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2216" />
</div>

<p style="text-align: justify;">
2 - Ora facciamo clic su "Copia collegamento".
</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-2.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2217" />
</div>

<p style = "text-align: justify;"> 3 - Pronto! Abbiamo già il link per poter salvare la foto. Ora andiamo alla pagina Instamim. </p>
<p style = "text-align: justify;"> Incolleremo il collegamento nella casella indicata. Per incollare il collegamento, premere i tasti CRTL + V oppure fare clic con il tasto destro del mouse e fare clic su Incolla. </p>
<p style = "text-align: justify;"> Dopo aver incollato il link nella posizione indicata, fai clic su "Download". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-3.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2218" />
</div>

<p style = "text-align: justify;"> 4 - Ora aspettiamo che la tua foto venga caricata nell'anteprima e fai clic sul pulsante "Download" nella parte inferiore dell'anteprima. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-4.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2219" />
</div>

<p style = "text-align: justify;"> Fatto! Il download della foto deve essere iniziato lì sul tuo computer! </p>
<p style = "text-align: justify;"> Proprio come su Android e iOS, la tua foto verrà scaricata nella cartella di download predefinita. Dai un'occhiata lì e goditi la tua foto ora. </p>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>