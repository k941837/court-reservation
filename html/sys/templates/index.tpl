{include file='header.tpl' title='Main Page'}
<main>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                {html_image file='images/tennis.jpg' width="100%" height="300px"}
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>柴島テニスコート</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                {html_image file='images/tennis.jpg' width="100%" height="300px"}
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
                {html_image file='images/tennis.jpg' width="100%" height="300px"}
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
                {html_image file='images/tennis.jpg' width="140" height="140" class="rounded-circle"}
                <h2>利用案内</h2>
                <p>ああああああああああああああああああ</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {html_image file='images/tennis.jpg' width="140" height="140" class="rounded-circle"}
                <h2>予約</h2>
                <p>いいいいいいいいいいいいいいいいいいいいいいいいい</p>
                <p><a class="btn btn-secondary" href="reserve.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                {html_image file='images/tennis.jpg' width="140" height="140" class="rounded-circle"}
                <h2>スクール</h2>
                <p>ううううううううううううううううううううううううううう</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">ええええええええ <span class="text-muted">えおえおえおえおえ</span></h2>
                <p class="lead">
                    ああああああああああああああああああああああああああああああああああkakaka
                </p>
                <p class="lead">
                    yyyyyyyyyyyyyyyyyyyyyyyyyy
                </p>
            </div>
            <div class="col-md-5">
                {html_image file='images/tennis.jpg' class="featurette-image img-fluid mx-auto" alt="tennis"}
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
                {html_image file='images/tennis.jpg' class="featurette-image img-fluid mx-auto" alt="tennis"}
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
                {html_image file='images/tennis.jpg' class="featurette-image img-fluid mx-auto" alt="tennis"}
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
</main>


{include file='footer.tpl'}