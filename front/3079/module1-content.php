<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-module1">


    <div class="container">
        <div class="title">
            <h2>What Customer are Says</h2>
            <p>Please look through our testimonials to get a better understanding of our affordable services.</p>
        </div>
        <div class="carousel">
            <div class="slides">
                <div class="slide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hhp">
                                <div class="textbox">"Thank you so much for the great service! After dropping my
                                    iPhone
                                    in
                                    water I wasn't sure it would work correctly again. Fixit team fixed my iPhone
                                    the
                                    same
                                    day. I took it in and it's working like new again."</div>
                                <div class="hhp-image">
                                    <img src="./images/ava1.png" height="100px" width="100px" style="background: white; border-radius: 50%;">
                                    <div style="margin-left: 40px; margin-top: 20px;">
                                        <h4>Andy Storen, NY</h4>
                                        <p>iPhone Repair Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hhp">
                                <div class="textbox">"Thank you so much for the great service! After dropping my iPhone
                                    in water I wasn't sure it would work correctly again. Fixit team fixed my iPhone the
                                    same day. I took it in and it's working like new again."</div>
                                <div class="hhp-image">
                                    <img src="./images/ava2.png" height="100px" width="100px" style="background: white; border-radius: 50%;">
                                    <div style="margin-left: 40px; margin-top: 20px;">
                                        <h4>Andy Storen, NY</h4>
                                        <p>iPhone Repair Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hhp">
                                <div class="textbox">"Thank you so much for the great service! After dropping my
                                    iPhone
                                    in
                                    water I wasn't sure it would work correctly again. Fixit team fixed my iPhone
                                    the
                                    same
                                    day. I took it in and it's working like new again."</div>
                                <div class="hhp-image">
                                    <img src="./images/ava1.png" height="100px" width="100px" style="background: white; border-radius: 50%;">
                                    <div style="margin-left: 40px; margin-top: 20px;">
                                        <h4>Andy Storen, NY</h4>
                                        <p>iPhone Repair Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hhp">
                                <div class="textbox">"Thank you so much for the great service! After dropping my iPhone
                                    in water I wasn't sure it would work correctly again. Fixit team fixed my iPhone the
                                    same day. I took it in and it's working like new again."</div>
                                <div class="hhp-image">
                                    <img src="./images/ava2.png" height="100px" width="100px" style="background: white; border-radius: 50%;">
                                    <div style="margin-left: 40px; margin-top: 20px;">
                                        <h4>Andy Storen, NY</h4>
                                        <p>iPhone Repair Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hhp">
                                <div class="textbox">"Thank you so much for the great service! After dropping my
                                    iPhone
                                    in
                                    water I wasn't sure it would work correctly again. Fixit team fixed my iPhone
                                    the
                                    same
                                    day. I took it in and it's working like new again."</div>
                                <div class="hhp-image">
                                    <img src="./images/ava1.png" height="100px" width="100px" style="background: white; border-radius: 50%;">
                                    <div style="margin-left: 40px; margin-top: 20px;">
                                        <h4>Andy Storen, NY</h4>
                                        <p>iPhone Repair Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hhp">
                                <div class="textbox">"Thank you so much for the great service! After dropping my iPhone
                                    in water I wasn't sure it would work correctly again. Fixit team fixed my iPhone the
                                    same day. I took it in and it's working like new again."</div>
                                <div class="hhp-image">
                                    <img src="./images/ava2.png" height="100px" width="100px" style="background: white; border-radius: 50%;">
                                    <div style="margin-left: 40px; margin-top: 20px;">
                                        <h4>Andy Storen, NY</h4>
                                        <p>iPhone Repair Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <span class="indicator active" data-index="0"></span>
                <span class="indicator" data-index="1"></span>
                <span class="indicator" data-index="2"></span>
            </div>
        </div>
    </div>

</div>
<script src="./js/app.js"></script>