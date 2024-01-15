<!---header--->

@include('layouts.header')


<main>
    <article>

        <!--- #HERO-->

        <section class="hero" id="home">
            <div class="container">

                <div class="hero-content">

                    <p class="hero-subtitle">
                        <ion-icon name="school"></ion-icon>

                        <span>Education & Ujanja is the key</span>
                    </p>

                    <h2 class="h1 hero-title">Get into your Dream Job Secured</h2>

                    <p class="hero-text">
                        Your passion and career is a our focus, get the best simplified outlined courses and notes to
                        help you prepare for examination
                    </p>

                    <button class="btn">Make Course Outline Enquiry</button>

                </div>

                <figure class="hero-banner">
                    <img src="{{ asset('images/kidprimary1.png') }}" alt="image here" class="w-100">
                </figure>

            </div>
        </section>





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


        <!--- #SERVICE -->
        <section class="service" id="service">
            <div class="container">

                <p class="section-subtitle">Our Courses </p>

                <h2 class="h2 section-title">Our Main Courses</h2>

                <ul class="service-list">

                    <li>
                        <div class="service-card">

                            <div class="card-icon">
                                <img src="{{asset('')}}" alt="Service icon">
                            </div>

                            <h3 class="h3 card-title">
                                <a href="#">Univerty Notes and courses</a>
                            </h3>

                            <p class="card-text">
                                over 1 million+ student Roam and search the internet for the
                                best and simplified notes for smooth studies and want to upskill their grade
                            </p>

                            <a href="#" class="card-link">
                                <span>Get to Knowledge</span>

                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>

                        </div>
                    </li>

                    <li>
                        <div class="service-card">

                            <div class="card-icon">
                                <img src="{{asset('')}}" alt="Service icon">
                            </div>

                            <h3 class="h3 card-title">
                                <a href="#">High  and  Secondary School </a>
                            </h3>

                            <p class="card-text">
                                over 1 million+ student Roam and search the internet for the
                                best and simplified notes for smooth studies and want to upskill their grade
                            </p>

                            <a href="#" class="card-link">
                                <span>Get to Knowledge</span>

                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>

                        </div>
                    </li>

                    <li>
                        <div class="service-card">

                            <div class="card-icon">
                                <img src="{{asset('')}}" alt="Service icon">
                            </div>

                            <h3 class="h3 card-title">
                                <a href="#">Purchase notes and courses</a>
                            </h3>

                            <p class="card-text">
                                Course that is well tailered to prepare for job
                                opportunity for the current ever changing technology
                                Courses are arrange industry wise for the all student and upskiller
                            </p>

                            <a href="#" class="card-link">
                                <span>Get to Knowledge</span>

                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>

                        </div>
                    </li>

                </ul>

            </div>
        </section>





        <!---#Tutorials-->

        <section class="property" id="property">
            <div class="container">

                <p class="section-subtitle">Tutorials</p>

                <h2 class="h2 section-title">To be Updated Tutorials</h2>

                <ul class="property-list has-scrollbar">

                    <li>
                        <div class="property-card">

                            <figure class="card-banner">

                                <a href="#">
                                    <img src="./assets/images/property-1.jpg" alt="New added courses Nice View"
                                        class="w-100">
                                </a>

                                <div class="card-badge green">Newbies part </div>

                                <div class="banner-actions">

                                    <button class="banner-actions-btn">
                                        <ion-icon name="location"></ion-icon>

                                        <address>Boostrap </address>
                                    </button>

                                    <button class="banner-actions-btn">
                                        <ion-icon name="film"></ion-icon>

                                        <span>16</span>
                                    </button>

                                </div>

                            </figure>

                            <div class="card-content">

                                <div class="card-price">
                                    <strong>ksh 0</strong>/Month
                                </div>

                                <h3 class="h3 card-title">
                                    <a href="#">coures</a>
                                </h3>

                                <p class="card-text">
                                    Newly added free tutorial for future use
                                </p>

                                <ul class="card-list">

                                    <li class="card-item">
                                        <strong>2</strong>

                                        <ion-icon name="bed-outline"></ion-icon>

                                        <span>Pdfs</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>10</strong>

                                        <ion-icon name="man-outline"></ion-icon>

                                        <span>Sessions</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>3</strong>

                                        <ion-icon name="square-outline"></ion-icon>

                                        <span>Hrs/each</span>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-footer">

                                <div class="card-author">

                                    <figure class="author-avatar">
                                        <img src="./assets/images/author.jpg" alt="Evans Odhiambo" class="w-100">
                                    </figure>

                                    <div>
                                        <p class="author-name">
                                            <a href="#">Evans Odhiambo</a>
                                        </p>

                                        <p class="author-title">Editor</p>
                                    </div>

                                </div>

                                <div class="card-footer-actions">

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="resize-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="property-card">

                            <figure class="card-banner">

                                <a href="#">
                                    <img src="./assets/images/property-2.jpg" alt="Updated" class="w-100">
                                </a>

                                <div class="card-badge orange">Intermediate course</div>

                                <div class="banner-actions">

                                    <button class="banner-actions-btn">
                                        <ion-icon name="location"></ion-icon>

                                        <address>HTMl 5</address>
                                    </button>

                                    <button class="banner-actions-btn">
                                        <ion-icon name="film"></ion-icon>

                                        <span>12</span>
                                    </button>

                                </div>

                            </figure>

                            <div class="card-content">

                                <div class="card-price">
                                    <strong>ksh 200</strong>/ Months
                                </div>

                                <h3 class="h3 card-title">
                                    <a href="#">Web Development</a>
                                </h3>

                                <p class="card-text">
                                    Gain with Odhiambo the best tutorial of all times
                                </p>

                                <ul class="card-list">

                                    <li class="card-item">
                                        <strong>3</strong>

                                        <ion-icon name="bed-outline"></ion-icon>

                                        <span>Pdfs</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>9</strong>

                                        <ion-icon name="man-outline"></ion-icon>

                                        <span>sessions</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>1.5</strong>

                                        <ion-icon name="square-outline"></ion-icon>

                                        <span>Hrs</span>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-footer">

                                <div class="card-author">

                                    <figure class="author-avatar">
                                        <img src="./assets/images/author.jpg" alt="Evans Odhiambo" class="w-100">
                                    </figure>

                                    <div>
                                        <p class="author-name">
                                            <a href="#">Evans Odhiambo</a>
                                        </p>

                                        <p class="author-title">Editor</p>
                                    </div>

                                </div>

                                <div class="card-footer-actions">

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="resize-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="property-card">

                            <figure class="card-banner">

                                <a href="#">
                                    <img src="./assets/images/property-3.jpg" alt="Comfortable Apartment"
                                        class="w-100">
                                </a>

                                <div class="card-badge green">Tutor</div>

                                <div class="banner-actions">

                                    <button class="banner-actions-btn">
                                        <ion-icon name="location"></ion-icon>

                                        <address>DevOps</address>
                                    </button>
                                    <button class="banner-actions-btn">
                                        <ion-icon name="film"></ion-icon>

                                        <span>4</span>
                                    </button>

                                </div>

                            </figure>

                            <div class="card-content">

                                <div class="card-price">
                                    <strong>Ksh 300 </strong>/Month
                                </div>

                                <h3 class="h3 card-title">
                                    <a href="#">Into the Security Arena</a>
                                </h3>

                                <p class="card-text">
                                    To more fruitfull education fill free to engage in the session for more learning
                                </p>

                                <ul class="card-list">

                                    <li class="card-item">
                                        <strong>2</strong>

                                        <ion-icon name="bed-outline"></ion-icon>

                                        <span>Pdfs</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>16</strong>

                                        <ion-icon name="man-outline"></ion-icon>

                                        <span>Sessions</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>1.2</strong>

                                        <ion-icon name="square-outline"></ion-icon>

                                        <span>Hrs/each </span>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-footer">

                                <div class="card-author">

                                    <figure class="author-avatar">
                                        <img src="./assets/images/author.jpg" alt="Evans Odhiambo" class="w-100">
                                    </figure>

                                    <div>
                                        <p class="author-name">
                                            <a href="#">Evans Odhiambo</a>
                                        </p>

                                        <p class="author-title">Editor</p>
                                    </div>

                                </div>

                                <div class="card-footer-actions">

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="resize-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="property-card">

                            <figure class="card-banner">

                                <a href="#">
                                    <img src="./assets/images/property-4.png" alt="Luxury villa in Rego Park"
                                        class="w-100">
                                </a>

                                <div class="card-badge green"></div>

                                <div class="banner-actions">

                                    <button class="banner-actions-btn">
                                        <ion-icon name="location"></ion-icon>

                                        <address>Server</address>
                                    </button>

                                   <!--<button class="banner-actions-btn">
                                        <ion-icon name="camera"></ion-icon>

                                        <span>4</span>
                                    </button>-->

                                    <button class="banner-actions-btn">
                                        <ion-icon name="film"></ion-icon>

                                        <span>12</span>
                                    </button>

                                </div>

                            </figure>

                            <div class="card-content">

                                <div class="card-price">
                                    <strong>Ksh 200</strong>/Month
                                </div>

                                <h3 class="h3 card-title">
                                    <a href="#">Web Security and Data security</a>
                                </h3>

                                <p class="card-text">
                                    Crach course for web security
                                </p>

                                <ul class="card-list">

                                    <li class="card-item">
                                        <strong>3</strong>

                                        <ion-icon name="bed-outline"></ion-icon>

                                        <span>Pdfs</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>5</strong>

                                        <ion-icon name="man-outline"></ion-icon>

                                        <span>Sessions</span>
                                    </li>

                                    <li class="card-item">
                                        <strong>2</strong>

                                        <ion-icon name="square-outline"></ion-icon>

                                        <span>Hrs/each</span>
                                    </li>

                                </ul>

                            </div>

                            <div class="card-footer">

                                <div class="card-author">

                                    <figure class="author-avatar">
                                        <img src="./assets/images/author.jpg" alt="Evans Odhiambo" class="w-100">
                                    </figure>

                                    <div>
                                        <p class="author-name">
                                            <a href="#">Evans Odhiambo</a>
                                        </p>

                                        <p class="author-title">Editor</p>
                                    </div>

                                </div>

                                <div class="card-footer-actions">

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="resize-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button>

                                    <button class="card-footer-actions-btn">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </button>

                                </div>

                            </div>

                        </div>
                    </li>

                </ul>

            </div>
        </section>


        <!---#certification-->

        <section class="features">
            <div class="container">

                <p class="section-subtitle">My short Certification</p>

                <h2 class="h2 section-title">Certification</h2>

                <ul class="features-list">

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="certificaation"></ion-icon>
                            </div>

                            <h3 class="card-title">HTML</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="website"></ion-icon>
                            </div>

                            <h3 class="card-title">Ethical hacking</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="shield-checkmark-outline"></ion-icon>
                            </div>

                            <h3 class="card-title">Web Security</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="fitness-outline"></ion-icon>
                            </div>

                            <h3 class="card-title">Machine Learing</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="library-outline"></ion-icon>
                            </div>

                            <h3 class="card-title">Network Architecture</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="bed-outline"></ion-icon>
                            </div>

                            <h3 class="card-title">Rest APIs</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>

                            <h3 class="card-title">CCNA</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#" class="features-card">

                            <div class="card-icon">
                                <ion-icon name="football-outline"></ion-icon>
                            </div>

                            <h3 class="card-title">Infrastructure Security</h3>

                            <div class="card-btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>

                        </a>
                    </li>

                </ul>

            </div>
        </section>



        <!--#BLOG-->

        <section class="blog" id="blog">
            <div class="container">

                <p class="section-subtitle">Updates </p>

                <h2 class="h2 section-title">Technology News </h2>

                <ul class="blog-list has-scrollbar">

                    <li>
                        <div class="blog-card">

                            <figure class="card-banner">
                                <img src="./assets/images/blog-1.png" alt="Phone & Its products"
                                    class="w-100">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-content-top">

                                    <ul class="card-meta-list">

                                        <li>
                                            <a href="#" class="card-meta-link">
                                                <ion-icon name="person"></ion-icon>

                                                <span>by: Editor</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="card-meta-link">
                                                <ion-icon name="pricetags"></ion-icon>

                                                <span>Hardwares</span>
                                            </a>
                                        </li>

                                    </ul>

                                    <h3 class="h3 blog-title">
                                        <a href="#">The best Gaming Driver For the Nvidia Company</a>
                                    </h3>

                                </div>

                                <div class="blog-content-bottom">
                                    <div class="publish-date">
                                        <ion-icon name="calendar"></ion-icon>

                                        <time datetime="2022-27-04">Jan 2, 2024</time>
                                    </div>

                                    <a href="#" class="read-more-btn">Read More</a>
                                </div>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="blog-card">

                            <figure class="card-banner">
                                <img src="./assets/images/blog-2.jpg" alt="Software updates"
                                    class="w-100">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-content-top">

                                    <ul class="card-meta-list">

                                        <li>
                                            <a href="#" class="card-meta-link">
                                                <ion-icon name="person"></ion-icon>

                                                <span>by: Editor</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="card-meta-link">
                                                <ion-icon name="pricetags"></ion-icon>

                                                <span>Sofware</span>
                                            </a>
                                        </li>

                                    </ul>

                                    <h3 class="h3 blog-title">
                                        <a href="#">Hyper OS for Xaomi</a>
                                    </h3>

                                </div>

                                <div class="blog-content-bottom">
                                    <div class="publish-date">
                                        <ion-icon name="calendar"></ion-icon>

                                        <time datetime="2022-27-04">Ded 26, 2023</time>
                                    </div>

                                    <a href="#" class="read-more-btn">Read More</a>
                                </div>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="blog-card">

                            <figure class="card-banner">
                                <img src="./assets/images/blog-3.jpg"
                                    alt="Schoolary Ways" class="w-100">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-content-top">

                                    <ul class="card-meta-list">

                                        <li>
                                            <a href="#" class="card-meta-link">
                                                <ion-icon name="person"></ion-icon>

                                                <span>by: Editor</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="card-meta-link">
                                                <ion-icon name="pricetags"></ion-icon>

                                                <span>Drivers</span>
                                            </a>
                                        </li>

                                    </ul>

                                    <h3 class="h3 blog-title">
                                        <a href="#">Laptop and Desktop Pc Drivers </a>
                                    </h3>

                                </div>

                                <div class="blog-content-bottom">
                                    <div class="publish-date">
                                        <ion-icon name="calendar"></ion-icon>

                                        <time datetime="2022-27-04">Dec 28, 2023</time>
                                    </div>

                                    <a href="#" class="read-more-btn">Read More</a>
                                </div>

                            </div>

                        </div>
                    </li>

                </ul>

            </div>
        </section>





        <!--motivational Quotes-->

        <section class="cta">
            <div class="container">

                <div class="cta-card">
                    <div class="card-content">
                        <h2 class="h2 card-title">Vanse Academy shines brighter</h2>

                        <p class="card-text">We search for your stars</p>
                    </div>

                    <button class="btn cta-btn">
                        <span> <a href="services" class="footer">COURESES</a> </span>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>

            </div>
        </section>

    </article>
</main>


<!----footer---->
@include('layouts.footer')
