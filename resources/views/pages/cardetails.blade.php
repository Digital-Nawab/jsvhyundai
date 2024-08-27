@extends('layout.master')
@section('css')
<style>
    .car-details{padding: 50px 0px;}
    .details-nav {
        margin: 30px 0 40px;
    }
    .details-nav ul {
        display: flex;
        flex-wrap: wrap;
    }
    .details-nav ul li {
        display: inline-block;
        line-height: 30px;
        margin-right: 10px;
    }
    .details-nav ul li a {
        border: 1px solid #e3e3e3;
        color: #999;
        display: block;
        margin-bottom: 10px;
        padding: 7px 15px;
        transition: all .3s ease-in-out;
        text-decoration: none;
    }
    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 16.66%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }
    .car-details-sidebar .details-block ul li {
        border-bottom: 1px solid #e3e3e3;
        display: block;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }
    .car-details-sidebar .details-block ul li i {
        color: #363636;
        padding-right: 15px;
    }
    .car-details-sidebar .details-block ul li span {
        display: inline-block;
        width: 150px;
    }
</style>
@stop
@section('body')
    <section class="slider-section">
        <img src="{{ asset('assets/images/sliders/creta.webp') }}" class="d-block w-100" alt="...">
    </section>
    <section class="car-details car-details-two section-ptb" style="position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="car-title">
                        <h3>Acura Rsx</h3>
                        <p class="car-description">Temporibus possimus quasi beatae, You will begin to realize why, consectetur adipisicing elit. aspernatur nemo maiores.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="details-nav">
                        <ul class="list-unstyled">
                            <li><a href="/react/car-dealer/car-details-02/1"> Request More Info</a></li>
                            <li><a href="/react/car-dealer/car-details-02/1"> Schedule Test Drive</a></li>
                            <li><a href="/react/car-dealer/car-details-02/1"> Make an Offer</a></li>
                            <li><a href="/react/car-dealer/car-details-02/1"> Email to a Friend</a></li>
                            <li><a href="/react/car-dealer/car-details-02/1"> Trade-In Appraisal</a></li>
                            <li><a href="/react/car-dealer/car-details-02/1"> Print this page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/01.ee783a757b5ce1762cc5.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/02.c3fb1b2a517498e0db06.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/03.4ed9128bacb5e451c513.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/04.61f741d81a7e63ee3175.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/05.1e42e153f56cb56a58e5.webp" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/05.1e42e153f56cb56a58e5.webp" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/01.ee783a757b5ce1762cc5.webp" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/02.c3fb1b2a517498e0db06.webp" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                         