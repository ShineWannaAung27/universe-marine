<section>
    <div class="text-center">
        <div class="image-container ">
            <img src="assets/images/background.png" alt="Background" class="img-fluid">
            <div class="text-overlay d-flex justify-content-between container ">
                <p style="font-size: 40px;color: #1B378C;margin-bottom: 0px;font-weight: 400;" class="align-self-end underline-container d-flex align-items-center text-uppercase custom-heading">
                    <?php echo $title; ?>
                </p>
                <div class="d-flex justify-content-center align-items-center">
                    <p style="color: #8C8C8C;font-weight: 400;font-size: 16px;" class="mb-0 breadcrumb-mobile-hide">
                        Home
                    </p>
                    <img src="assets/images/breadcrumb.png" class="mx-3 <?php echo (!empty($subtitle) ? 'breadcrumb-mobile-hide' : ''); ?>" style="width: 16px;height: 16px;" alt="">
                    <p style="color: #404040;font-weight: 400;font-size: 16px;" class="mb-0 <?php echo (!empty($subtitle) ? 'breadcrumb-mobile-hide' : ''); ?>">
                        <?php echo $title; ?>
                    </p>

                    <?php if (!empty($subtitle)) : ?>
                        <img src="assets/images/breadcrumb.png" class="mx-3 breadcrumb-mobile-hide" style="width: 16px;height: 16px;" alt="">
                        <p style="color: #404040;font-weight: 400;font-size: 16px;" class="mb-0">
                            <?php echo $subtitle; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>