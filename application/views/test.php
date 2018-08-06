<?php
$x = "Hello world!";
$x = "asif";
var_dump($x); echo '</br>';
print_r($x);

echo '</br>';

echo strlen('Asif Kibria');
echo '</br>';

echo str_word_count("asif kibria Limon");
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?=base_url()?>assets/PgwSlider-master/pgwslider.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
</head>
<body>

<ul class="pgwSlider">
    <li><img src="<?=base_url()?>assets/img/8.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars"></li>
    <li><img src="<?=base_url()?>assets/img/3.jpg" alt="Montréal, QC, Canada" data-large-src="<?=base_url()?>assets/img/3.jpg"></li>
    <li>
        <img src="<?=base_url()?>assets/img/1.jpg">
        <span>Shanghai, China</span>
    </li>
    <li>
        <a href="http://www.nyc.gov" target="_blank">
            <img src="<?=base_url()?>assets/img/3.jpg">
            <span>New York, NY, USA</span>
        </a>
    </li>
</ul>




<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/PgwSlider-master/pgwslider.js"></script>
<script src="http://zeptojs.com/zepto.js"></script>

<script>
    $(document).ready(function() {
        $('.pgwSlider').pgwSlider();
    });
</script>
</body>
</html>