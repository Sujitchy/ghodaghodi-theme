<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GHODAGHODI</title>
  <?php get_template_part('template-parts/header/site', 'meta'); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
    <?php get_header(); ?>


  <!-- Hero Section -->
  <section class="hero">
    <div class="overlay"></div>
    <div class="hero-text">
      <h1>Ghodaghodi Lake</h1>
    </div>
    <div class="dots">
      <span></span><span class="active"></span><span></span>
    </div>
    
    
  </section>

  <!---------------- Message Section --------------->
<section class="message-section" >
    <h2 class="message-heading">MESSAGE FROM THE CHAIRPERSON</h2>
    <div class="message-content">
      <img src=" <?php bloginfo('template_directory'); ?>/assets/images/chairmanperson.jpg" alt="Chairperson" class="message-img">
      <div class="message-text">
        <p>प्राकृतिक स्रोतहरु सबैको साझा सम्पदा हुन् | हामी प्राकृतिक स्रोतले भरिपुर्ण हुदापनि एक आपसको हेर्ने दुरदृष्टिको अभाबले सुदुरपचिमको मूलद्वार मानिने कैलाली जिल्लाको घोडाघोडी नगरपालिकामा रहेको रामसरमा सुचिकृत धार्मिक संस्कृतिक तथा जैविक विशेषता रहेको रामसारमा सुचिकृत धार्मिक संस्कृतक तथा जैविक विशेषता रहेको घोडाघोडी ताल प्राकृतिक स्रोतमा आत्मनिर्भर रहेको प्राणी तथा जनजीविकामा आउने द्वोंदहरु आपसी समझदारी विधिबाट बाच्ने अधिकारको सुनिस्चित लागि सरोकारवाला सरकारी तथा गैरसरकारी संघ संस्था सामाजिक सभचिन्तकहरुमा साझा प्राकृतिक सम्पदा भित्रका जैविक विविधता संरक्ष न गरी स्वदेशी तथा बिदेशी पर्यटकहरुलाई प्रवेश गाराउन बृहत सोच राख्नुको साथै यस क्षेत्रलाई सामाजिक, आर्थिक, भौतिक विकाशका लागि सहयोग, सल्लाह सुझाब दिन घोडाघोडी क्षेत्र संरक्षण तथा जनजागरण मंच  नेपाल अपेक्षा गर्दछ |<br>
       <!-- <a href="layouts/massage.html">पुरा पढ्नुहोस्</a><br> -->
        <strong>- ( हेम बहादुर बम )<br> अध्यक्ष <br> घोडाघोडी क्षेत्र संगठन तथा जनजागरण मंच नेपाल <br> घो.न.पा.-१ सुखद, कैलाली</strong>
        </p>
      </div>
    </div>
  </section>

  <!-- Our Partners Marquee Section -->
    <section class="partners-section" style="margin:40px 0;">
      <h2 style="text-align:center;color:var(--primary-color);font-size:2rem;margin-bottom:1rem;">Our Partners</h2>
      <marquee behavior="scroll" direction="left" scrollamount="7" style="background:#f4f4f4;padding:1rem 0;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/usaid.jpg" alt="Partner 1" style="height:60px;margin:0 40px;vertical-align:middle;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/wwf.jpg" alt="Partner 2" style="height:60px;margin:0 40px;vertical-align:middle;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/care.jpg" alt="Partner 3" style="height:60px;margin:0 40px;vertical-align:middle;">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/partner4.png" alt="Partner 4" style="height:60px;margin:0 40px;vertical-align:middle;"> -->

        <img src="<?php bloginfo('template_directory'); ?>/assets/images/usaid.jpg" alt="Partner 1" style="height:60px;margin:0 40px;vertical-align:middle;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/wwf.jpg" alt="Partner 2" style="height:60px;margin:0 40px;vertical-align:middle;">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/care.jpg" alt="Partner 3" style="height:60px;margin:0 40px;vertical-align:middle;">
        <!-- Add more partner logos as needed -->
      </marquee>
    </section>
<!------------ News & Events --------------->
<div class="news-events">
  <h2 >News & Events</h2>
  <ul>
    <li><a  href="#">Ghodaghodi Lake is also a natural habitat</a></li>
    <li><a  href="#">Helping farmers around Ghodagodi Lake Area</a></li>
    <li><a  href="#">Conservation of Crocodiles of Ghodadhodi Lake</a></li>
    <li><a  href="#">Natural Habitat of Different Birds, Plants, Animals</a></li>
  </ul>
</div>

<!--------Gallery------------>
<section  class="gallery">
  <h2 style="text-align:center;color:var(--primary-color);font-size:2rem;margin-bottom:1rem;">Gallery</h2>
  <div class="gallery-grid">
    <div class="gallery-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tample.jpeg" alt="Gallery Image 1">
    </div>
    <div class="gallery-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/tower.jpeg" alt="Gallery Image 2">
    </div>
    <div class="gallery-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/boat.jpeg" alt="Gallery Image 3">
    </div>
    <!-- <div class="gallery-item">
      <img src="assets/images/ghodaghodi-lake.jpeg" alt="Gallery Image 4">
    </div> -->
  </div>
</section>


<?php get_footer(); ?>

</body>
</html>
