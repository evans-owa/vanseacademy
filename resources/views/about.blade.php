@include('layouts.header')

                    <!--- #ABOUT -->
        <section class="about" id="about">
            <div class="container">

                <figure class="about-banner">
                    <img src="{{ asset('images/studentrmBG.png') }}" alt="student collage">

                </figure>

                <div class="about-content">

                    <p class="section-subtitle">About Us</p>

                    <h2 class="h2 section-title">THe leading academy platform For studetns.</h2>

                    <p class="about-text">
                        Over 14,000 Students are happy for us in more than 35 countries all over the This breadth of
                        global coverage,
                        combined with
                        specialist services
                    </p>

                    <ul class="about-list">

                        <li class="about-item">
                            <div class="about-item-icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>

                            <p class="about-item-text">Home reading</p>
                        </li>

                        <li class="about-item">
                            <div class="about-item-icon">
                                <ion-icon name="leaf-outline"></ion-icon>
                            </div>

                            <p class="about-item-text">Pure and Genuine content</p>
                        </li>

                        <li class="about-item">
                            <div class="about-item-icon">
                                <ion-icon name="wine-outline"></ion-icon>
                            </div>

                            <p class="about-item-text">Research at anytime</p>
                        </li>

                        <li class="about-item">
                            <div class="about-item-icon">
                                <ion-icon name="shield-checkmark-outline"></ion-icon>
                            </div>

                            <p class="about-item-text">Secure youe Future</p>
                        </li>

                    </ul>

                    <p class="callout">
                        "Together we can and we conquer we do
                        every togehter till end of times"
                    </p>

                    <a href="#service" class="btn">Our Services</a>

                </div>

            </div>
        </section>

@include('layouts.footer')
