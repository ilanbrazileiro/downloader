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
          

          <h1> Laden Sie Fotos und Videos von Instagram herunter </h1>
           <p class = "mt-3 mb-lg-5 mb-4">
              Fügen Sie Ihre URL unten ein und laden Sie Fotos und Videos von Instagram herunter!
           </p>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Fügen Sie hier Ihre URL ein" aria-label="Fügen Sie hier Ihre URL ein" aria-describedby="basic-addon2" name="url" id="url">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="enviar">Herunterladen</button>
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
      <h5 class="text-center alert alert-danger">Dieses Foto oder Video gehört zu einem privaten Profil. Zum Herunterladen müssen Sie sich bei einem Konto anmelden, das auf diese Medien zugreifen kann!</h5>

      <!-- Formulário de envio de informações para fotos privadas, Só aparece se for privada-->
      <div class="text-center" style="margin-top: 10px;">
             <form class="form-inline" action="" method="post">
              <div class="form-group mb-2">
                
                <input type="text" class="form-control" placeholder="Ihr_Benutzer oder Ihre E-Mail" name="login">
              </div>
              <div class="form-group mx-sm-3 mb-2">
               
                <input type="password" class="form-control" id="inputPassword2" placeholder="Passwort" name="senha">
              </div>
              <input type="hidden" name="url" value="<?= $_POST['url'] ?>">
              <button type="submit" class="btn btn-primary mb-2">Entrar</button>
            </form>
      </div>
<?php
    }

if(isset($url) && $url != ""){

echo  '<h4 class="text-center">Klicken Sie auf die Schaltfläche unten, um ein Instagram-Foto oder -Video herunterzuladen</h4>';

 if ($type == 'image'){
  echo "<div class='text-center'>Diese Datei ist vom Typ Bild</div>";

  echo "<div class='text-center'><img src=".$url." style='max-width: 320px; display:block;text-align:center;margin:auto;'></div>";

  echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Herunterladen</a></div>';
 
 } else if ($type == 'video') {
  echo "<div class='text-center'>Diese Datei ist vom Typ Video</div>";
    echo '<div class="text-center">';
    echo '<video width="320" height="240" controls="controls" autoplay="autoplay">';
    echo '<source src="'.$url.'" type="video/mp4">
            <object data="" width="320" height="240">
              <embed width="320" height="240" src="'.$url.'">
            </object>
          </video>';
    echo "</div>";

    echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Herunterladen</a></div>';


 }else if ($type == 'sidecar') {

    echo "<div class='text-center'>Diese Datei ist vom Typ Folie</div>";

    foreach ($url as $value) {

      if ($value['tipo'] === 'image'){
        echo "<div class='text-center'>
              <img src='".$value['link']."' style='max-width: 320px; display:block;text-align:center;margin:auto;'>
              <a href='".$value['link']."' download='".$value['link']."' class='btn btn-primary' style='margin-top:10px;'>Herunterladen</a>
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

        echo '<div class="text-center" style="margin-top:10px;"><a href="'.$value['link'].'" download="'.$value['link'].'" class="btn btn-primary">Herunterladen</a></div>';
      }     
    }

 }
  else {
    echo  '<div style="margin:10px 0 10px 0;"><h4 class="text-center text-danger">Entschuldigung ..... Leider ist das Profil privat. Aus Datenschutzgründen war es nicht möglich, das Foto oder Video herunterzuladen!</h4></div>';

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

<h2 style="text-align: justify;"> Was ist Instamim? </h2>

<p style="text-align: justify;"> Instamim ist ein völlig kostenloser Webdienst (Website), mit dem Sie Fotos und Videos von Instagram herunterladen können, ohne sich registrieren oder eine Anwendung herunterladen zu müssen. </p>
<p style="text-align: justify;">
Sie müssen lediglich den Link für die Medien abrufen, die Sie herunterladen möchten. </P>


<h2 style="text-align: justify;"> Kann ich so viele Instagram-Fotos herunterladen, wie ich möchte? </h2>
<p style="text-align: justify;"> Ja, Sie können den Tag damit verbringen, Fotos und Videos über Instamim herunterzuladen. Instamim beschränkt die Nutzungsmenge des Dienstes nicht. </P>

<h2 style="text-align: justify;"> Kann ich Fotos von Instagram herunterladen, von wem auch immer ich möchte? </h2>
<p style="text-align: justify;">
Nein, genau wie bei Instagram respektiert Instamim das Recht aller auf Privatsphäre. Daher können Sie auf privaten Instagram-Profilen die Fotos oder Videos nicht herunterladen
</p>

<h2 style="text-align: justify;"> Kann ich Fotos von Instagram herunterladen, wo immer ich möchte? </h2>
<p style="text-align: justify;"> Ja, Sie können Instamim verwenden, wo immer Sie möchten, so lange Sie möchten. Lassen Sie einfach ein Gerät (Handy, Tablet, PC, Fernseher) mit dem Internet verbinden und erhalten Sie den Link zu dem, was Sie herunterladen möchten. </P>


<h2 style="text-align: justify;"> Herunterladen von Instagram-Fotos und -Videos auf Android </h2>
<p style="text-align: justify;"> Als erstes sollten wir den Link zu dem Foto erhalten, das Sie auf Instagram herunterladen möchten. Bei Mobiltelefonen mit Android-Betriebssystem ist die Vorgehensweise wie folgt: </p>
<p style="text-align: justify;"> 1 - Öffnen Sie <a href="https://www.instagram.com/"> Instagram </a> und wählen Sie das Foto aus, das Sie herunterladen möchten. </p>
<p style="text-align: justify;"> 2 - Drücken Sie in den 3 Punkten oben rechts im Profilnamen des Postbesitzers auf "Link kopieren" und wählen Sie "Link kopieren". </p>
<div class='text-center'>
	<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2189 size-full" />
</div>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Vídeos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2190 size-full" />
</div>

<p style="text-align: justify;">3 - Wenn der Link kopiert ist, gelangen Sie zu Instamim, fügen ihn in das Feld oben ein und klicken auf "Download".</p>
	
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Warten Sie, bis Ihr Foto oder Video hochgeladen ist. Wenn alles gut geht, klicken Sie einfach unter der Miniaturansicht des Mediums auf Herunterladen. Nach dem Drücken von Download werden Ihre Medien auf Ihrem Android-Handy gespeichert.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style="text-align: justify;"> Normalerweise befinden sich diese aus dem Internet heruntergeladenen Fotos in einem Ordner namens "download" auf Ihrem Android-Gerät. </p>
<p style="text-align: justify;"> Schauen Sie einfach dort nach, um Ihr Foto zu finden, und verwenden Sie es nach Belieben wieder. </p>






<h2 style="text-align: justify;"> Herunterladen von Instagram-Fotos und -Videos auf das iPhone </h2>

<p style="text-align: justify;"> Um Instagram-Fotos und -Videos auf das iPhone herunterzuladen, kopieren Sie ähnlich wie bei Android-Handys einfach Ihren Medienlink und verwenden Sie ihn hier auf Instamim. </p>
<p style="text-align: justify;"> Gehen Sie wie folgt vor, um den Link des Fotos oder Videos auf dem iPhone oder iPad zu erhalten: </p>
<p style="text-align: justify;"> 1 - Klicken Sie auf die 3 Punkte oben rechts auf dem Profilfoto des Postbesitzers. </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone.jpg" alt="Como baixar foto do Instagram no iPhone" width="238" height="417" class="wp-image-2211 size-full" />
</div>

<p style="text-align: justify;">2 - Als nächstes kopieren wir die URL des Fotos, indem wir auf "Freigabe-URL kopieren" klicken.</p>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone-2.jpg" alt="Como Baixar fotos do Instagram no iPhone" width="230" height="417" class="aligncenter size-full wp-image-2212" />
</div>


3 - Von nun an funktioniert es genauso für Android-Handys.
<p style="text-align: justify;">Nachdem der Link kopiert wurde, gehen wir zu Instamim und fügen den kopierten Link in das angegebene Feld ein. Dann klicken Sie einfach auf "Download".</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Wir warten auf das Hochladen des Fotos oder Videos. Wenn alles gut geht, klicken Sie einfach unter der Miniaturansicht des Mediums auf Download. </P>
<p style="text-align: justify;"> Nach dem Drücken von Download wird Ihr Foto auf Ihrem iPhone oder iPad gespeichert.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style="text-align: justify;"> Nach dem Drücken von Download wird Ihr Foto in Ihren Download-Ordner verschoben. Schauen Sie sich einfach um, um es zu finden. </P>

<h2 style="text-align: justify;"> Herunterladen von Instagram-Fotos und -Videos von PC / Computer </h2>
<p style = "text-align: rechtfertigen;"> Das Herunterladen von Instagram-Fotos oder -Videos über PC / Computer ist ebenfalls sehr einfach. Das Verfahren ist Android und iPhone sehr ähnlich. </P>

<p style="text-align: justify;"> 1 - Öffnen Sie Instagram auf Ihrem PC und zeigen Sie das Foto an, das Sie herunterladen möchten. Klicken Sie dann auf die 3 Punkte oben rechts im Profilsymbol des Fotoinhabers. </P>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-1.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2216" />
</div>

<p style="text-align: justify;">
2 - Klicken wir nun auf "Link kopieren".
</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-2.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2217" />
</div>

<p style="text-align: justify;"> 3 - Fertig! Wir haben bereits den Link, um das Foto speichern zu können. Gehen wir jetzt zur Instamim-Seite. </P>
<p style="text-align: justify;"> Wir fügen den Link in das angegebene Feld ein. Um den Link einzufügen, drücken Sie die Tastenkombination STRG + V oder klicken Sie mit der rechten Maustaste und klicken Sie auf Einfügen. </P>
<p style="text-align: justify;"> Nachdem Sie den Link an der angegebenen Stelle eingefügt haben, klicken Sie einfach auf "Download". </p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-3.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2218" />
</div>

<p style="text-align: justify;">4 - Warten wir nun, bis Ihr Foto in der Miniaturansicht geladen ist, und klicken Sie auf die Schaltfläche "Herunterladen" unten in der Miniaturansicht.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-4.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2219" />
</div>

<p style="text-align: justify;">Fertig! Der Foto-Download muss dort auf Ihrem Computer gestartet sein! </P>
<p style="text-align: justify;"> Genau wie bei Android und iOS wird Ihr Foto in Ihren Standard-Download-Ordner heruntergeladen. Schauen Sie einfach dort hin und genießen Sie jetzt Ihr Foto.</p>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>