@extends('layout.master')
@section('css')
    <style>
        .about-area{padding:100px 0px;}
        .team-section {
            background-color: #2d2f36;
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: 0;
            padding: 20px;
        }

        .card-img-top {
            border-radius: 5px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 15px;
            color: #333;
        }

        .card-subtitle {
            font-size: 1rem;
            color: #b08e7a;
        }

        .card-text {
            font-size: 0.875rem;
            color: #666;
        }

        .social-icons a {
            color: #333;
            font-size: 1.25rem;
            margin-right: 10px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #b08e7a;
        }
    </style>
@stop
@section('body')
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                        <div class="about-img">
                            <img src="https://live.themewild.com/motex/assets/img/about/01.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                        <h2 class="site-title">
                            About Us
                        </h2>
                        </div>
                        <p class="about-text">
                            Since inception, JSV Hyundai has established its reputation as one of the leading authorized dealers in Uttar Pradesh rendering the world class facilities and state-of-the-art services to its prestigious customers. With well trained sales & service team, we always aim to stand on the expectations of the customers providing them every key detail related to their dream car. Our team of executives ensures to provide a delightful experience to the customers and enhance their satisfaction in all spheres.
                        </p>
                        <p>With our top-notch professionalism, we are setting a new benchmark in providing right assistance to our esteemed customers. Be it choosing right model, color or car accessories, our experienced sales team helps you in taking right call on buying your dream car keeping in mind your need, requirement and budget.</p>
                        <p>For us, just selling cars is not the only goal but bringing a smile on the face of our customers while buying their dream car is also our top priority.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="team-section py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-member">
                        <img src="https://images03.nicepage.com/c461c07a441a5d220e8feb1a/b79f3a0ce9e85dbfb16d69fe/OTSOUE0g.jpg" class="card-img-top" alt="Jeffrey Brown">
                        <div class="card-body">
                            <h5 class="card-title">JKr. Saundarya Prakash</h5>
                            <p class="card-subtitle mb-2 text-muted">GM - Sales</p>
                            <p class="card-text">JSV Hyundai – Gomti Nagar, Lucknow</p>
                            <ul>
                                <li><a href="">sales@jsvhyundai.com</a></li>
                                <li><a href="">+91 7897766999</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-member">
                        <img src="https://images03.nicepage.com/c461c07a441a5d220e8feb1a/998f8a67538c545fa1d95e2e/11.jpg" class="card-img-top" alt="Alex Greenfield">
                        <div class="card-body">
                            <h5 class="card-title">Ms. Jaweria Ansari</h5>
                            <p class="card-subtitle mb-2 text-muted">Manager - Customer Care</p>
                            <p class="card-text">JSV Hyundai – Gomti Nagar,       Lucknow</p>
                            <ul>
                                <li><a href="">care@jsvhyundai.com</a></li>
                                <li><a href="">+91 7897770024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-member">
                        <img src="https://images03.nicepage.com/c461c07a441a5d220e8feb1a/998f8a67538c545fa1d95e2e/11.jpg" class="card-img-top" alt="Linda Larson">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Brijesh Sharma</h5>
                            <p class="card-subtitle mb-2 text-muted">Sales Manager</p>
                            <p class="card-text">JSV Hyundai – Gomti Nagar, Lucknow</p>
                            <ul>
                                <li><a href="">care@jsvhyundai.com</a></li>
                                <li><a href="">+91 7897770024</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-member">
                        <img src="https://images03.nicepage.com/c461c07a441a5d220e8feb1a/998f8a67538c545fa1d95e2e/11.jpg" class="card-img-top" alt="Ann Richmond">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Ratnakar Shukla</h5>
                            <p class="card-subtitle mb-2 text-muted">Sales Manager</p>
                            <p class="card-text">JSV Hyundai – Engineering Collage Chauraha</p>
                            <ul>
                                <li><a href="">jsvhyundai@gmail.com</a></li>
                                <li><a href="">+91 7897770013</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card team-member">
                        <img src="https://images03.nicepage.com/c461c07a441a5d220e8feb1a/998f8a67538c545fa1d95e2e/11.jpg" class="card-img-top" alt="Ann Richmond">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Saurabh Srivastava</h5>
                            <p class="card-subtitle mb-2 text-muted">GM - Service</p>
                            <p class="card-text">JSV Hyundai Service Center- Gomti Nagar, Lucknow</p>
                            <ul>
                                <li><a href="">gmservice.jsvhyundai@gmail.com</a></li>
                                <li><a href="">+91 7897770022</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop