<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$title = $atts['title'];
$subtitle = $atts['subtitle'];
$image = $atts['image']['url'];
?>

<section class="banner-simple full-width-section" style="background-image: url('<?php echo $image ?>')">
    <div class="container">
        <h2 class="title"><?php echo $title ?></h2>
        <p class="subtitle"><?php echo $subtitle ?></p>
    </div>
</section>