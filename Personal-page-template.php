<?php
/*
Template Name: Personal URL Page Template
*/
?>
<div>
  <main class="main" role="main">
    <div class="container wide-container">
        <main class="page-content page-personal" role="main">
          <section class="personal-top-section">
            <div class="images-personal">
              <?php $img = get_field('personal_logo',$post->ID);?>
              <img class="img-responsive" src="<?php echo $img;?>" alt="Guaranteed PPC logo" >
            </div>

            <div class="personal-wrap">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                  <h1><?php the_title(); ?></h1>
                  <!-- <h1>Andrew Goldstein's Proposal</h1>-->

                  <?php endwhile;?>
                <?php endif; ?>
            </div>
          </section>
        </main>
      </div>
	
        <?php 
		$personal_bt_before_value = get_field('personal_bt_before_value',$post->ID);
		if(!$personal_bt_before_value)
			$personal_bt_before_value="40";
		$personal_bt_after_value = get_field('personal_bt_after_value',$post->ID);
		if(!$personal_bt_after_value)
			$personal_bt_after_value="-20";

		$personal_bt_before_title = get_field('personal_bt_before_title',$post->ID);
		if(!$personal_bt_before_title)
			$personal_bt_before_title="Costs Per Lead Before";
		$personal_bt_after_title = get_field('personal_bt_after_title',$post->ID);
		if(!$personal_bt_after_title)
			$personal_bt_after_title="Costs Per Lead After";

		$personal_ad_title = get_field('personal_ad_title',$post->ID);
		if(!$personal_ad_title)
			$personal_ad_title="Who's Getting All Your Money?";

		$personal_ad_img_a = get_field('personal_ad_img',$post->ID);
		$personal_ad_img=$personal_ad_img_a['url'];
		if(!$personal_ad_img)
			$personal_ad_img="/wp-content/uploads/2016/06/personal-ad-img.png";

	?>
	
	<div class="personal-cost-ba-section">
	 <div class="container">
		<div class="personal-ad-button-div">
			<div class="personal-cost-button-div">
				<button type="submit" disabled class="btn btn-success pcost personal-bt-before"><?php echo $personal_bt_before_value;?></button>
				<p class="personal-p"><?php echo $personal_bt_before_title;?></p>
			</div>
			<div class="personal-cost-button-div">
				<button type="submit" disabled class="btn btn-success pcost personal-bt-after"><?php echo $personal_bt_after_value;?></button>
				<p class="personal-p"><?php echo $personal_bt_after_title;?></p>
			</div>
		</div>
		<div class="personal-ad-content-div">
			<h3 class="personal-ad-title"><?php echo $personal_ad_title;?></h3>
			<div class="personal-ad-content">
				<!--h3 class="personal-ad-title">Commercial Financing - Check if you pre-qualify online</h3>
				<div class="personal-ad-fax">
					<p class="personal-ad-mark">Ad</p>
					<a class="personal-ad-link">www.fundingcircle.com/Get_Quote</a>
					<p class="personal-ad-tel">(855)572-9292</p>
				</div>
				<p class="personal-ad-intro">150% sales required. No startups.
				No Prepayment Perhaps Rules at Low at 5.45%. Apply in under 10 minutes.
				This is the ad.
				</p-->
				<img class="img-responsive personal-ad-screenshot" src="<?php echo $personal_ad_img; ?>"></img>
			</div>
		</div>
	 </div>
	</div>

        <div class="personal-info" id="personal">
          <div class="container">

            <?php $personal_content_title = get_field('personal_content_title',$post->ID); ?>
            <h2 class="personal-content-title"><?php echo $personal_content_title; ?></h2>

            <div class="personal-youtube">
              <?php $personal_youtube = get_field('personal_youtube_url',$post->ID); ?>
              <iframe class="personal-youtube-iframe" src="<?php echo $personal_youtube;?>" allowfullscreen frameborder="0"></iframe>
            </div>

            <div class="personal-content">
              <div class="personal-button-div">
              <?php $personal_p1 = get_field('personal_p-1',$post->ID); ?>
              <?php $personal_help = get_field('personal_help_button',$post->ID); ?>
              <?php $personal_help_link = get_field('personal_help_button_link',$post->ID);
 		 if (!$personal_help_link)
			$personal_help_link="#";
		?>
               <p class="personal-p"><?php echo $personal_p1;?></p>
               <form action="<?php echo $personal_help_link;?>">
			<input type="submit" class="btn btn-success btn-block personal-help-me" value="<?php echo $personal_help;?>"></input>
	        </form>
              </div>

              <div class="personal-button-div">
              <?php $personal_p2 = get_field('personal_p-2',$post->ID); ?>
              <?php $personal_see = get_field('personal_see_button',$post->ID);?>
              <?php $personal_see_link = get_field('personal_see_button_link',$post->ID);
 		 if (!$personal_see_link)
			$personal_see_link="http://guaranteedppc.com/#how-it-work";
		?>
               <p class="personal-p"><?php echo $personal_p2;?></p>
               <form action="<?php echo $personal_see_link;?>">
		<input type="submit" class="btn btn-success btn-block personal-see" value="<?php echo $personal_see;?>"></input>
	       </form>
              </div>
            </div>
          
          </div>
        </div>

  </main>

</div>