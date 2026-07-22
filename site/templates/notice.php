<?php snippet('header') ?>
<style>
    @media only screen { 
        #QR { display: none; }
    }
    @media only print { 
        img, img#QR { display: block; }
    }
</style>
<main id="notice">
  <div id="content" class="anim--fadein">
      <section class="notice notice__active notice__isolated">
          <div class="notice--meta">
                <div class="notice--timing"><?= $page->timing()->text() ?></div>
                <div class="notice--location"><?= $page->location()->text() ?></div>
          </div>
          <div class="notice--title">
              <h2><?= $page->title() ?></h2>
          </div>
          <div class="notice--body">
              <?= $page->text()->kt() ?>
           <img src="" id="QR">
             <script>
                  jQuery(document).ready(function(){ callQR(); }); function callQR(){ var url=document.URL; url=encodeURI(url); var fullUrl="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=="+url; jQuery("#QR").attr("src",fullUrl); }
            </script>

          </div>
          <div class="notice--tools">
                <a>
                    <button class="notice--button button--print">
                        <?php snippet('svg/svg-print') ?>
                    </button>
                </a>
          </div>
          <div class="notice--hidden">
              risd.gd/notices
          </div>
      </section>
  </div>
</main>


<?php snippet('footer') ?>