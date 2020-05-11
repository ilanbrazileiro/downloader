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
          


          <!-- Código Google-->
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Instamim-grafico-responsivo -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-9534278678450684"
               data-ad-slot="2011026729"
               data-ad-format="auto"
               data-full-width-responsive="true"></ins>
          <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
          </script>




          <h1>Baixar fotos e Vídeos do Instagram</h1>
          <p class="mt-3 mb-lg-5 mb-4">
             Cole sua URL abaixo e faça o download de fotos e vídeos do Instagram! 
          </p>

          <form action="" method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cole sua URL aqui" aria-label="Cole sua URL aqui" aria-describedby="basic-addon2" name="url" id="url">
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

    //Caso a foto for privada, da opção de enviar o login
    if (isset($erro) && $erro =='1'){
      ?>
      <h5 class="text-center alert alert-danger">Esta foto ou vídeo pertence a um perfil privado. Para Baixar você precisa logar em uma conta que possa acessar essa mídia!</h5>

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
              <button type="submit" class="btn btn-primary mb-2">Entrar</button>
            </form>
      </div>
<?php
    }

if(isset($url) && $url != ""){

echo  '<h4 class="text-center">Para Baixar foto ou vídeo do Instagram, clique no botão abaixo</h4>';

 if ($type == 'image'){
  echo "<div class='text-center'>Este arquivo é do tipo Imagem</div>";

  echo "<div class='text-center'><img src=".$url." style='max-width: 320px; display:block;text-align:center;margin:auto;'></div>";

  echo '<div class="text-center" style="margin-top:10px;"><a href="'.$url.'" download="'.$url.'" class="btn btn-primary">Download</a></div>';
 
 } else if ($type == 'video') {
  echo "<div class='text-center'>Este arquivo é do tipo Vídeo</div>";
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

    echo "<div class='text-center'>Este arquivo é do tipo Slide</div>";

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
    echo  '<div style="margin:10px 0 10px 0;"><h4 class="text-center text-danger">Desculpe..... Infelizmente o perfil é privado, por motivos de política de privacidade, não foi possível baixar a foto ou vídeo!</h4></div>';

 } 

 unset($_POST['url']);

}
?>

		<!-- Anuncio Google - In Artigo -->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block; text-align:center;"
		     data-ad-layout="in-article"
		     data-ad-format="fluid"
		     data-ad-client="ca-pub-9534278678450684"
		     data-ad-slot="7761653645"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>

		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Instamim-links-responsivo -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-9534278678450684"
		     data-ad-slot="7121196259"
		     data-ad-format="link"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>

    </div>
  </div>

</div>


<!-- index-block1 -->
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container py-lg-4">
      <div class="row align-items-center">
        <div class="col-lg-12 text-center">

<h2 style="text-align: justify;">O que é o Instamim?</h2>

<p style="text-align: justify;">O Instamim é um serviço web (site na internet) totalmente grátis que permite você baixar fotos e vídeos do Instagram, sem a necessidade de nenhum cadastro ou baixar qualquer aplicativo.</p>
<p style="text-align: justify;">
A única coisa que você vai precisar é pegar o link da mídia que pretende fazer o download.</p>


<h2 style="text-align: justify;">Posso baixar quantas fotos do Instagram eu quiser?</h2>
<p style="text-align: justify;">Sim, você pode passar o dia baixando fotos e vídeos pelo Instamim. O Instamim não limita a quantidade de utilização do serviço.</p>

<h2 style="text-align: justify;">Posso baixar fotos do Instagram de quem eu quiser?</h2>
Não, assim como no Instagram, o Instamim respeita o direito de privacidade de todos. Sendo assim, em perfis privados do Instagram, você não conseguirá baixar as fotos ou vídeos

<h2 style="text-align: justify;">Posso baixar de onde quiser as fotos do Instagram?</h2>
<p style="text-align: justify;">Sim, você pode utilizar o Instamim de onde quiser, o tempo que quiser. Basta ter um dispositivo (celular, tablet, PC, televisão) conectado a internet e obter o link do que deseja fazer download.</p>


<h2 style="text-align: justify;">Como Baixar Fotos e Vídeos do Instagram no Android</h2>
<p style="text-align: justify;">A primeira coisa que devemos fazer é pegar o link da foto que você quer baixar no Instagram. Em celulares com sistema operacional Android o procedimento é assim:</p>
<p style="text-align: justify;">1 - Abra o <a href="https://www.instagram.com/">Instagram</a> e escolha a foto que gostaria de fazer download.</p>
<p style="text-align: justify;">2 - Nos 3 pontos, na parte superior a direita do nome do perfil do dono da postagem, aperte e escolha "copiar link".</p>
<div class='text-center'>
	<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2189 size-full" />
</div>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Vídeos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2190 size-full" />
</div>

<p style="text-align: justify;">3 - Com o link copiado, você vem até o Instamim e cola no box acima e aperte em "Baixar"</p>
	
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Aguarde sua foto ou vídeo ser carregado. Se tudo correr bem, em seguida basta clicar em Download, logo abaixo da miniatura da mídia. Depois de apertar em Download, sua mídia será armazenada no seu celular com Android.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style="text-align: justify;">Geralmente essas fotos baixadas da internet ficam dentro de uma pasta chamada "download" no seu dispositivo Android.</p>
<p style="text-align: justify;">Basta dar uma procurada lá para achar a sua foto e por reutilizá-la como bem entender.</p>






<h2 style="text-align: justify;margin-top: 20px;">Como Baixar Fotos e Vídeos do Instagram no iPhone</h2>

<p style="text-align: justify;">Bem parecido com os celulares Android, para baixar fotos e Vídeos do Instagram no iPhone, basta copiar o link da sua mídia e utilizá-la aqui no Instamim.</p>
<p style="text-align: justify;">Para obter o link da foto ou vídeo no iPhone, ou iPad faça o seguinte:</p>
<p style="text-align: justify;">1 - Clique nos 3 pontos na parte superior a direita da foto do perfil, do proprietário da postagem.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone.jpg" alt="Como baixar foto do Instagram no iPhone" width="238" height="417" class="wp-image-2211 size-full" />
</div>

<p style="text-align: justify;">2 - Em seguida vamos copiar a URL da foto apertando em "Copiar URL de compartilhamento".</p>
<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/iphone-2.jpg" alt="Como Baixar fotos do Instagram no iPhone" width="230" height="417" class="aligncenter size-full wp-image-2212" />
</div>


3 - Daqui para frente funciona igual para os celulares Android.
<p style="text-align: justify;">Com o link copiado, vamos até o Instamim e colamos o link copiado no box indicado. Depois é só apertar em "Baixar".</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-fotos-instagram1.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2191 size-full" />
</div>

<p style="text-align: justify;">4 - Vamos aguardar a foto ou vídeo ser carregada, se tudo correr bem, basta clicar em Download, logo abaixo da miniatura da mídia.</p>
<p style="text-align: justify;">Depois de apertar em Download, sua foto será armazenada no seu iPhone ou iPad.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/Baixar-Videos-instagram.jpg" alt="Como Baixar fotos do Instagram no Android" width="250" height="500" class="aligncenter wp-image-2192 size-full" />
</div>

<p style="text-align: justify;">Depois de apertar em Download sua foto vai para a sua pasta de download. Basta dar uma procurada por lá para achá-la.</p>

<h2 style="text-align: justify;margin-top: 20px;">Como Baixar Fotos e Vídeos do Instagram pelo PC/Computador</h2>
<p style="text-align: justify;">Para baixar fotos ou vídeos do Instagram pelo PC/Computador é bem simples também. O procedimento é bem parecido com o Android e do iPhone.</p>

<p style="text-align: justify;">1 - Abra o Instagram pelo PC e visualize a foto que gostaria de fazer download. Em seguida clique nos 3 pontos no lado direito superior do ícone de perfil do proprietário  da foto.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-1.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2216" />
</div>

<p style="text-align: justify;">
2 - Agora vamos clicar em "Copiar link".
</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-2.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2217" />
</div>

<p style="text-align: justify;">3 - Pronto! Já temos o link para poder salvar a foto. Agora vamos até a página do Instamim.</p>
<p style="text-align: justify;">Vamos colar o link no box indicado. Para colar o link aperte as teclas CRTL+V, ou clique com o botão direto do mouse e clique em colar.</p>
<p style="text-align: justify;">Depois de colar o link no lugar indicado, basta clicar em "Baixar".</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-3.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2218" />
</div>

<p style="text-align: justify;">4 - Agora vamos esperar sua foto carregar em miniatura, e clicar no botão "Download", na parte de baixo da miniatura.</p>

<div class='text-center'>
<img src="https://imm-tecnologia.com.br/wp-content/uploads/2020/04/pc-4.jpg" alt="Como baixar fotos do Instagram no PC" width="500" height="402" class="aligncenter size-full wp-image-2219" />
</div>

<p style="text-align: justify;">Pronto! O download da foto já deve ter se iniciado aí no seu computador!</p>
<p style="text-align: justify;">Assim como no Android e no iOS, a sua foto vai ser baixada para a sua pasta padrão de download. Só dar uma procurada lá e aproveitar a sua foto agora.</p>

        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>