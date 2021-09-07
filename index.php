<?php get_header(); ?>
<div class="home">
    <div id="image-dark-version-home" class="bg-img img">

<?php while(have_posts()) : the_post() ?>

      <h1><?php the_title(); ?></h1>
      <h2><?php the_field("titel_2") ?></h2>
      <h3><?php the_field("titel_3") ?></h3>
      


    </div>
    <div class="container Multimediedesigner first-mode">
      <div class="webmock">
        <img class="first-img" src=" <?php the_field("profile_photo") ?>" width="100%" height="auto">
      </div>
      <div class="txt h1 h2 first-txt" > 
            <h3>Hvad betyder det helt præcist?</h3>
            <h1>Multimediedesigner</h1>
            <p>Som en Multimediedesigner er jeg i stand til at komme ind på 
              alle niveauer af digital design, heriblandt webløsninger
              <strong>digitale brugeroplevelser (UX)</strong>, indholdsproduktion til digitale medier <strong>(content creation),</strong>
              <strong>frontend webudvikling</strong> samt <strong>ideudvikling og projektmanagement.</strong> 
            </p>
          <div id="uix" class="container">
              <div class="ui-ux ui">
                  <div><img src=" <?php echo get_template_directory_uri() ?>/images/monitor.svg" width="100px" height="auto"></div>
                  <div><h2>User Interface (UI)</h2></div>
                  <div class="ui-x-txt">
                      <p>Skærme, websider, og visuelle ellementer som knapper og 
                      ikoner, som skaber <strong>interaktion</strong> mellem bruger og et produkt eller 
                      service befinder sig under <strong>UI kategorien.</strong>
                      </p>
                  </div>
              </div>
              <div class="ui-ux ux">
                  <div><img src=" <?php echo get_template_directory_uri() ?>/images/ux.svg" width="80px" height="auto"></div>
                  <div><h2>User Experience (UX)</h2></div>
                  <div class="ui-x-txt">
                          <p>At opfylde <strong>brugerens behov</strong>, er det vigtigste inden for 
                          <strong>UX verdenen</strong>. Kort sagt er det nødvendigt at skabe <strong>positive oplevelser</strong> for brugerne 
                          der holder dem <strong>loyal</strong> over for et produkt eller virksomheden.
                          </p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php get_footer(); ?>