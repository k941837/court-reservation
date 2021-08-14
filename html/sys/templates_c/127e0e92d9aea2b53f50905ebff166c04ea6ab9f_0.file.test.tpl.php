<?php
/* Smarty version 3.1.39, created on 2021-08-07 23:47:24
  from '/var/www/html/sys/templates/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610e9cfcdb3328_13652891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127e0e92d9aea2b53f50905ebff166c04ea6ab9f' => 
    array (
      0 => '/var/www/html/sys/templates/test.tpl',
      1 => 1628347643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_610e9cfcdb3328_13652891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/usr/local/lib/smarty-master/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Main Page'), 0, false);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','width'=>"100%",'height'=>"30%"),$_smarty_tpl);?>

            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                        gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','width'=>"100%",'height'=>"30%"),$_smarty_tpl);?>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                        gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','width'=>"100%",'height'=>"30%"),$_smarty_tpl);?>

            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                        gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','width'=>"140",'height'=>"140",'class'=>"rounded-circle"),$_smarty_tpl);?>

            <h2>利用案内</h2>
            <p>ああああああああああああああああああ</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','width'=>"140",'height'=>"140",'class'=>"rounded-circle"),$_smarty_tpl);?>

            <h2>予約</h2>
            <p>いいいいいいいいいいいいいいいいいいいいいいいいい</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','width'=>"140",'height'=>"140",'class'=>"rounded-circle"),$_smarty_tpl);?>

            <h2>スクール</h2>
            <p>ううううううううううううううううううううううううううう</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">ええええええええ <span class="text-muted">おおおおおお</span></h2>
            <p class="lead">
                ああああああああああああああああああああああああああああああああああ
            </p>
        </div>
        <div class="col-md-5">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','class'=>"featurette-image img-fluid mx-auto",'alt'=>"tennis"),$_smarty_tpl);?>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">かかかかかかか<span class="text-muted">ききききき</span></h2>
            <p class="lead">
                あああああああああああああああああああああああああああああああああ
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','class'=>"featurette-image img-fluid mx-auto",'alt'=>"tennis"),$_smarty_tpl);?>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">くくくくくくく<span class="text-muted">あああああああああ</span></h2>
            <p class="lead">
                あああああああああああああああああああああああ
            </p>
        </div>
        <div class="col-md-5">
            <?php echo smarty_function_html_image(array('file'=>'images/tennis.jpg','class'=>"featurette-image img-fluid mx-auto",'alt'=>"tennis"),$_smarty_tpl);?>

        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
