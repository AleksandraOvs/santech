<?php
//template part for Feedback (carbon fields)
?>
<!-- <div class="fixed-container"> -->
    <div class="fb-slider__inner">
        <h2>Честные отзывы о наших товарах</h2>
        

<div class="slider-fdb__controls">

<!-- <div class="fb-slider__button-prev">
    <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.16871 11.5806L11.7122 0.750385C12.0576 0.395753 12.6169 0.396349 12.9618 0.75222C13.3064 1.10804 13.3055 1.68445 12.96 2.03936L3.0441 12.225L12.9603 22.4106C13.3058 22.7656 13.3067 23.3416 12.9621 23.6975C12.7892 23.8759 12.5628 23.9651 12.3363 23.9651C12.1104 23.9651 11.8848 23.8765 11.7122 23.6993L1.16871 12.8693C1.00233 12.6988 0.90897 12.4668 0.90897 12.225C0.90897 11.9832 1.0026 11.7515 1.16871 11.5806Z" fill="#4b322a"/>
    </svg>
</div> -->

<div class="swiper-pagination"></div>

<!-- <div class="fb-slider__button-next">
    <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.8313 12.4194L2.28784 23.2496C1.94239 23.6042 1.38311 23.6037 1.03825 23.2478C0.693647 22.892 0.694538 22.3155 1.04003 21.9606L10.9559 11.775L1.03967 1.58939C0.694225 1.23443 0.693335 0.658388 1.03789 0.302519C1.21077 0.124125 1.43725 0.0349273 1.66373 0.0349273C1.88963 0.0349273 2.11522 0.123529 2.28779 0.300686L12.8313 11.1307C12.9977 11.3012 13.091 11.5332 13.091 11.775C13.091 12.0168 12.9974 12.2485 12.8313 12.4194Z" fill="#4b322a"/>
    </svg>
</div> -->
</div>
    <?php if ($fb_items = carbon_get_theme_option('crb_feedback')){
        ?>
       <div class="swiper slider-feedback">
      
       <!-- Additional required wrapper -->
       <div class="swiper-wrapper">
      
    <?php foreach ($fb_items as $fb_item){
        ?>
        <div class="swiper-slide feedback-slide">
            <div class="feedback-slide__inner">
               
                <div class="feedback-slide__inner__head">
                    <h4 class="feedback-slide__inner__name">
                    <?php echo $fb_item['crb_fb_name'] ?>
                    </h4>
                </div>
                

                <div class="feedback-slide__inner__text">
                    <?php echo $fb_item['crb_fb_text'] ?>
                </div>

            </div>

        </div>
        <?php
    }
    ?>
</div>

</div>








    <?php
}
    ?>
    
    
<!-- </div> -->
