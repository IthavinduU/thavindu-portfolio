@extends('layouts.app')

@section('content')
<div id="content" class="content">
    <div class="content__wrapper">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typewriter-effect/2.18.0/core.js"></script>
</head>

        <!-- Intro Section Start -->
        <section id="home" class="main intro">

            <!-- Headline Start -->

            <div id="headline" class="headline d-flex align-items-start flex-column" data-speed="1">

                <p class="headline__subtitle animate-headline">

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor"
                            d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                    C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                    C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                    </svg>

                    <span>Introducing myself!</span>
                </p>
                <h1 class="headline__title animate-headline">I'm Thavindu Liyanage,<br>A Relentlessly curious tech
                    enthusiast, igniting innovation in the
                    ever-evolving digital landscape, one line of code at a time.</h1>
                    
                <div class="headline__btnholder d-flex flex-column flex-sm-row">
                    <a class="btn mobile-vertical btn-default btn-hover btn-hover-outline-mobile animate-headline"
                        href="LankeshHalangodaCV.pdf" download="LankeshHalangodaCV.pdf">
                        <span class="btn-caption">View Resume</span>
                        <i class="ph-bold ph-download-simple"></i>
                    </a>

                </div>
            </div>
            <!-- Headline End -->

            <!-- Scroll Button Start -->
            <div class="rotating-btn">
                <a href="#portfolio" class="rotating-btn__link slide-down">
                    <!-- SVG rotating text -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;"
                        xml:space="preserve" class="animate-rotation" data-value="360">
                        <defs>
                            <path id="textPath"
                                d="M110,59.5c0,27.6-22.4,50-50,50s-50-22.4-50-50s22.4-50,50-50S110,31.9,110,59.5z" />
                        </defs>
                        <g>
                            <use xlink:href="#textPath" fill="none"></use>
                            <text>
                                <!-- button text here!!! -->
                                <textPath xlink:href="#textPath">Scroll down for more information</textPath>
                            </text>
                        </g>
                    </svg>
                    <!-- arrow icon -->
                    <i class="ph-bold ph-arrow-down"></i>
                </a>
            </div>
            <!-- Scroll Button End -->

        </section>
        <!-- Intro Section End -->

        <!-- About Section Start -->
        <section id="about" class="inner about">
            <!-- Content Block - H2 Section Title Start -->
            <div class="content__block section-grid-title">
                <p class="h2__subtitle animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor"
                            d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                    C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                    C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                    </svg>
                    <span>About Me</span>
                </p>
                <h2 class="h2__title animate-in-up">Captivating Stories Birth Magnificient Designs</h2>
            </div>
            <!-- Content Block - H2 Section Title End -->

            <!-- Content Block - Achievements Start -->
            <div class="content__block grid-block">
                <div class="achievements d-flex flex-column flex-md-row align-items-md-stretch">
                    <!-- achievements single item -->
                    <div class="achievements__item d-flex flex-column grid-item animate-card-3">
                        <div class="achievements__card">
                            <p class="achievements__number">10+</p>
                            <p class="achievements__descr">Satisfied Clients</p>
                        </div>
                    </div>
                    <!-- achievements single item -->
                    <div class="achievements__item d-flex flex-column grid-item animate-card-3">
                        <div class="achievements__card">
                            <p class="achievements__number">4+</p>
                            <p class="achievements__descr">Years of experience</p>
                        </div>
                    </div>
                    <!-- achievements single item -->
                    <div class="achievements__item d-flex flex-column grid-item animate-card-3">
                        <div class="achievements__card">
                            <p class="achievements__number">20+</p>
                            <p class="achievements__descr">Completed Projects</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block - Achievements End -->

            <!-- Content Block - About Me Data Start -->
            <div class="content__block grid-block block-large">
                <div class="container-fluid p-0">
                    <div class="row g-0 justify-content-between">

                        <!-- About Me Description Start -->
                        <div class="col-12 col-xl-8 grid-item about-descr">
                            <p class="about-descr__text animate-in-up">
                                As a software professional, I bring a blend of creativity and technical expertise to
                                every project. With a background in software engineering, project management, and
                                full-stack development, I
                                excel in crafting efficient solutions to complex problems. My commitment to continuous
                                learning keeps me at the forefront of industry trends, ensuring that I deliver
                                high-quality results that exceed expectations.
                            </p>
                            <p class="about-descr__text animate-in-up">
                                Let's work together to turn your ideas into reality! Whether it's developing intuitive
                                user interfaces, optimizing backend systems for performance, or architecting scalable
                                solutions, I am driven by a relentless pursuit of excellence. My adaptability and strong
                                communication skills allow me to effectively collaborate with cross-functional teams,
                                ensuring seamless integration and delivery of high-quality products.
                            </p>
                            <div class="btn-group about-descr__btnholder animate-in-up">
                                <a class="btn mobile-vertical btn-default btn-hover btn-hover-accent"
                                    href="public\Thavindu Liyanage CV.pdf" download="Thavindu Liyanage CV.pdf">
                                    <span class="btn-caption">View Resume</span>
                                    <i class="ph-bold ph-download-simple"></i>
                                </a>
                            </div>
                        </div>
                        <!-- About Me Description End -->

                        <!-- About Me Information Start -->
                        <div class="col-12 col-xl-4 grid-item about-info">
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">Name</small>
                                    Thavindu Liyanage
                                </h6>
                            </div>
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">Phone</small>
                                    <a class="text-link-bold" href="tel:+94767740385">+94 77 969 1729</a>
                                </h6>
                            </div>
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">Email</small>
                                    <a class="text-link-bold"
                                        href="mailto:lankeshhalangoda@gmail.com?subject=Message%20from%20your%20site">thavindul@gmail.com</a>
                                </h6>
                            </div>
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">Location</small>
                                    Colombo, Sri Lanka
                                </h6>
                            </div>
                        </div>
                        <!-- About Me Information End -->

                    </div>
                </div>
            </div>
            <!-- Content Block - About Me Data End -->

            <!-- Content Block - Services Start -->
            <div class="content__block grid-block">
                <div class="container-fluid p-0">
                    <div class="row g-0 align-items-stretch cards">
                        <!-- services cards grid single item -->
                        <div class="col-12 col-md-6 cards__item grid-item animate-card-2">
                            <div class="cards__card d-flex flex-column">
                                <div class="cards__descr">
                                    <h4 class="cards__title animate-in-up">Web Development</h4>
                                    <div class="cards__tags d-flex flex-wrap animate-in-up">
                                        <span class="rounded-tag tag-outline">Frontend & Backend</span>
                                        <span class="rounded-tag tag-outline">Responsive Designs</span>
                                        <span class="rounded-tag tag-outline">Wordpress Sites</span>
                                    </div>
                                    <p class="small cards__text animate-in-up">Creating responsive, functional websites
                                        tailored to your needs, from front-end to back-end.</p>
                                </div>
                                <div class="cards__image d-flex animate-in-up">
                                    <img src="{{asset('img/services/web.svg')}}" alt="Service/Feature Image">
                                </div>
                            </div>
                        </div>
                        <!-- services grid cards single item -->
                        <div class="col-12 col-md-6 cards__item grid-item animate-card-2">
                            <div class="cards__card d-flex flex-column">
                                <div class="cards__descr">
                                    <h4 class="cards__title animate-in-up">Mobile App Development</h4>
                                    <div class="cards__tags d-flex flex-wrap animate-in-up">
                                        <span class="rounded-tag tag-outline">iOS & Android</span>
                                        <span class="rounded-tag tag-outline">Cross-Platform</span>
                                    </div>
                                    <p class="small cards__text animate-in-up">Building mobile apps for iOS and Android,
                                        ensuring seamless user experiences across platforms.</p>
                                </div>
                                <div class="cards__image d-flex">
                                    <img src="{{asset('img/services/mobile.svg')}}" alt="Service/Feature Image">
                                </div>
                            </div>
                        </div>
                        <!-- services grid cards single item -->
                        <div class="col-12 col-md-6 cards__item grid-item animate-card-2">
                            <div class="cards__card d-flex flex-column">
                                <div class="cards__descr">
                                    <h4 class="cards__title animate-in-up">UI/UX Design</h4>
                                    <div class="cards__tags d-flex flex-wrap animate-in-up">
                                        <span class="rounded-tag tag-outline">Wireframing & Prototyping</span>
                                        <span class="rounded-tag tag-outline">User Research</span>
                                    </div>
                                    <p class="small cards__text animate-in-up">Designing intuitive, user-friendly
                                        interfaces that enhance user experience and engagement.
                                    </p>
                                </div>
                                <div class="cards__image d-flex animate-in-up">
                                    <img src="{{asset('img/services/1200x900_s02.webp')}}" alt="Service/Feature Image">
                                </div>
                            </div>
                        </div>
                        <!-- services grid cards single item -->
                        <div class="col-12 col-md-6 cards__item grid-item animate-card-2">
                            <div class="cards__card d-flex flex-column">
                                <div class="cards__descr">
                                    <h4 class="cards__title animate-in-up">Article Writing</h4>
                                    <div class="cards__tags d-flex flex-wrap animate-in-up">
                                        <span class="rounded-tag tag-outline">Research Papers</span>
                                        <span class="rounded-tag tag-outline">Medium Articles & Blogs</span>
                                    </div>
                                    <p class="small cards__text animate-in-up">Delivering well-crafted articles that
                                        communicate your message effectively and resonate with your audience.
                                    </p>
                                </div>
                                <div class="cards__image d-flex animate-in-up">
                                    <img src="{{asset('img/services/1200x900_s02.webp')}}" alt="Service/Feature Image">
                                </div>
                            </div>
                        </div>
                        <!-- services grid cards single item -->
                        <div class="col-12 col-md-6 cards__item grid-item animate-card-2">
                            <div class="cards__card d-flex flex-column">
                                <div class="cards__descr">
                                    <h4 class="cards__title animate-in-up">Technical Consultation</h4>
                                    <div class="cards__tags d-flex flex-wrap animate-in-up">
                                        <span class="rounded-tag tag-outline">Social Media Consultation</span>
                                        <span class="rounded-tag tag-outline">SEO</span>
                                        <span class="rounded-tag tag-outline">Project Planning</span>
                                    </div>
                                    <p class="small cards__text animate-in-up">Offering expert IT advice to optimize
                                        your technology strategies and drive business growth.</p>
                                </div>
                                <div class="cards__image d-flex animate-in-up">
                                    <img src="{{asset('img/services/1200x900_s04.webp')}}" alt="Service/Feature Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block - Services End -->


        </section>
        <!-- About Section End -->

        <!-- Resume Section Start -->
        <section id="resume" class="inner resume">
            <!-- Content Block - H2 Section Title Start -->
            <div class="content__block block-large">
                <p class="h2__subtitle animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor"
                            d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                    C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                    C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                    </svg>
                    <span>Resume</span>
                </p>
                <h2 class="h2__title animate-in-up">Education and Work Experience</h2>
                <p class="h2__text animate-in-up">
                    Drawing from my academic journey and professional endeavors, I've cultivated a versatile skill set
                    in software engineering and design. I've pursued rigorous education in computer science and software
                    engineering while gaining practical experience through internships and positions at esteemed
                    companies. Below, you'll find a snapshot of my educational achievements and work history.
                </p>

            </div>
            <!-- Content Block - H2 Section Title End -->

            <!-- Content Block - Education Start -->
            <div class="content__block block-large">

                <!-- H3 Block Start -->
                <div class="section-h3">
                    <h3 class="h3__title animate-in-up extra-padding">Education</h3>
                </div>
                <!-- H3 Block End -->

                <!-- Education Lines Start -->
                <div class="container-fluid p-0 resume-lines">
                    <!-- education single item -->
                    <div class="row g-0 resume-lines__item animate-in-up">
                        <div class="col-12 col-md-2">
                            <span class="resume-lines__date animate-in-up">Jan 2022 – June 2025</span>
                        </div>
                        <div class="col-12 col-md-5">
                            <h5 class="resume-lines__title animate-in-up">B.Sc. (Hons) Computer Science </h5>
                            <p class="resume-lines__source animate-in-up">University of Westminster - United Kingdom
                            </p>
                        </div>
                        <div class="col-12 col-md-5">
                            <p class="small resume-lines__descr animate-in-up">During my degree at Westminster
                                University, I studied Mathematics for Computing, JavaScript, HTML, CSS, Java, OOP, UML,
                                Flutter, PHP (Laravel), and Tailwind CSS</p>
                        </div>
                    </div>
                    <!-- education single item -->
                    <div class="row g-0 resume-lines__item animate-in-up">
                        <div class="col-12 col-md-2">
                            <span class="resume-lines__date animate-in-up">Sept 2022 – Sept 2026</span>
                        </div>
                        <div class="col-12 col-md-5">
                            <h5 class="resume-lines__title animate-in-up">BSc. Physical Science (On Hold)</h5>
                            <p class="resume-lines__source animate-in-up">South Eastern University of Sri Lanka</p>
                        </div>
                        <div class="col-12 col-md-5">
                            <p class="small resume-lines__descr animate-in-up text-white">Merit</p>
                            <p class="small resume-lines__descr animate-in-up">Following BSc. Physical Science
                                specialized in Computer Science degree.Currently on hold due to work balance.</p>
                        </div>
                    </div>
                    <!-- education single item -->
                    <div class="row g-0 resume-lines__item animate-in-up">
                        <div class="col-12 col-md-2">
                            <span class="resume-lines__date animate-in-up">Jan 2007 – Aug 2020</span>
                        </div>
                        <div class="col-12 col-md-5">
                            <h5 class="resume-lines__title animate-in-up">G.C.E. Advanced Levels - Physical Science
                                Stream</h5>
                            <p class="resume-lines__source animate-in-up">Kingswood College Kandy</p>
                        </div>
                        <div class="col-12 col-md-5">

                            <p class="small resume-lines__descr animate-in-up">Completed GCE Advanced Levels in physical
                                science stream with 3 passes for Combined Mathematics, Phyics and Chemistry.</p>
                        </div>
                    </div>
                </div>
                <!-- Education Lines End -->


            </div>
            <!-- Content Block - Education End -->


            <!-- Content Block - Experience Start -->
            <div class="content__block block-large">

                <!-- H3 Block Start -->
                <div class="section-h3">
                    <h3 class="h3__title animate-in-up extra-padding">Work Experience</h3>
                </div>
                <!-- H3 Block End -->

                <!-- Experience Lines Start -->
                <div class="container-fluid p-0 resume-lines">
                    <!-- experience single item -->
                    <div class="row g-0 resume-lines__item animate-in-up">
                        <div class="col-12 col-md-2">
                            <span class="resume-lines__date animate-in-up">July 2023 – July 2024</span>
                        </div>
                        <div class="col-12 col-md-5">
                            <h5 class="resume-lines__title animate-in-up">Software Engineer - Intern</h5>
                            <p class="resume-lines__source animate-in-up">Vetstoria</p>
                        </div>
                        <div class="col-12 col-md-5">
                            <p class="small resume-lines__descr animate-in-up">Worked on the real-time appointment
                                booking system running on a PHP(Phalcon) back-end and Vue front-end.</p>
                        </div>
                    </div>
                    <!-- experience single item -->
                    <div class="row g-0 resume-lines__item animate-in-up">
                        <div class="col-12 col-md-2">
                            <span class="resume-lines__date animate-in-up">Feb 2024 – Present</span>
                        </div>
                        <div class="col-12 col-md-5">
                            <h5 class="resume-lines__title animate-in-up">Technical Writer</h5>
                            <p class="resume-lines__source animate-in-up">Medium.com</p>
                        </div>
                        <div class="col-12 col-md-5">
                            <p class="small resume-lines__descr animate-in-up">Contributing to the community with
                                knowledge I pursuit throughout my journey</p>
                        </div>
                    </div>
                    <!-- experience single item -->
                    <div class="row g-0 resume-lines__item animate-in-up">
                        <div class="col-12 col-md-2">
                            <span class="resume-lines__date animate-in-up">Nov 2020 – March 2021</span>
                        </div>
                        <div class="col-12 col-md-5">
                            <h5 class="resume-lines__title animate-in-up">IT Support Admin</h5>
                            <p class="resume-lines__source animate-in-up">IseeQ Solutions</p>
                        </div>
                        <div class="col-12 col-md-5">
                            <p class="small resume-lines__descr animate-in-up">Assisted in administration work and IT
                                support.</p>
                        </div>
                    </div>
                </div>
                <!-- Experience Lines End -->

            </div>
            <!-- Content Block - Experience End -->

        </section>
        <!-- Resume Section End -->


        <!-- Content Block - H2 Block Start -->
        <section id="skills" class="inner skills">
            <div class="content__block section-title">
                <p class="h2__subtitle animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor"
                            d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                        C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                        C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                    </svg>
                    <span>Skills</span>
                </p>
                <h2 class="h2__title animate-in-up">Tech Stack</h2>
            </div>
            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Frameworks & Libraries</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=123603&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">React</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=71257&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Angular</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=hUvxmdu7Rloj&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Laravel</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=rY6agKizO9eb&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Vue.js</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=nvrsJYs7j9Vb&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Nuxt.js</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=WNoJgbzDr3i2&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Express.js</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=hsPbhkOH4FMe&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Node.js</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=EzPCiQUqWWEa&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Bootstrap</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=4PiNHtUJVbLs&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Tailwind CSS</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=yWv6GQVz58uJ&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">jQuery</h6>
                        </div>
                    </div>

                </div>
                <!-- Tools List End -->
            </div>
            <!-- Content Block - Tools List End -->

            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Programming Languages</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=13679&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Java</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=45490&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">C#</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=108784&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">JavaScript</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=fAMVO_fuoOuC&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">PHP</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=1BC75jFEBED6&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">.Net Core</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=40669&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">C++</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=uJM6fQYqDaZK&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">TypeScript</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=13441&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Python</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=20909&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">HTML5</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=21278&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">CSS3</h6>
                        </div>
                    </div>
                </div>
                <!-- Tools List End -->
            </div>
            <!-- Content Block - Tools List End -->

            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Database Technologies</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=9nLaR5KFGjN0&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">MySQL</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=laYYF3dV0Iew&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">MSSQL</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=bosfpvRzNOG8&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">MongoDB</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=62452&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Firebase</h6>
                        </div>
                    </div>
                </div>
                <!-- Tools List End -->
            </div>
            <!-- Content Block - Tools List End -->

            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Version Control & Project Management</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">

                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=20906&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Git</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=34886&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">GitLab</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=x2g9nPCwQPOn&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">BitBucket</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=EREcg1COGLlB&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Trello</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=oROcPah5ues6&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Jira</h6>
                        </div>
                    </div>
                    <!-- Tools List End -->
                </div>
                <!-- Content Block - Tools List End -->
            </div>

            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Cloud Platforms</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=33039&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">AWS</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=81727&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Azure</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=20774&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Google Cloud Platform</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=LdUzF8b5sz2R&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Docker</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=cvzmaEA4kC0o&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Kubernetes</h6>
                        </div>
                    </div>
                    <!-- Tools List End -->
                </div>
                <!-- Content Block - Tools List End -->
            </div>

            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Content Management Systems</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=gjVkeGTRPkpG&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Kentico</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=13664&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">WordPress</h6>
                        </div>
                    </div>
                    <!-- Tools List End -->
                </div>
                <!-- Content Block - Tools List End -->
            </div>

            <!-- Content Block - H3 Block Start -->
            <div class="content__block">
                <div class="section-h3 section-h3-grid">
                    <h3 class="h3__title animate-in-up">Design Tools</h3>
                </div>
            </div>
            <!-- Content Block - H3 Block End -->
            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=zfHRZ6i1Wg0U&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Figma</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=4VVL78edhbW9&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Adobe Xd</h6>
                        </div>
                    </div>
                    <!-- tools simgle item -->
                    <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                        <div class="tools-cards__card">
                            <img class="tools-cards__icon animate-in-up"
                                src="https://img.icons8.com/?size=100&id=13631&format=png&color=000000"
                                alt="Tools Icon">
                            <h6 class="tools-cards__caption animate-in-up">Adobe Illustrator</h6>
                        </div>
                    </div>
                </div>
                <!-- Content Block - Tools List End -->
            </div>


        </section>

        <!-- Portfolio Section Start -->
        <section id="portfolio" class="inner inner-first portfolio">

            <!-- Content Block - H2 Section Title Start -->
            <div class="content__block section-grid-title">
                <p class="h2__subtitle animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor"
                            d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                    C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                    C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                    </svg>
                    <span>Portfolio</span>
                </p>
                <h2 class="h2__title animate-in-up">Featured Projects</h2>
            </div>
            <!-- Content Block - H2 Section Title End -->

            <!-- Content Block - Works Gallery Start -->
            <div class="content__block grid-block">
                <div class="container-fluid px-0 inner__gallery">
                    <div class="row gx-0 my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/slo.webp" data-image="img/works/slo.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/slo.webp')}}" class="gallery__image" itemprop="thumbnail"
                                    alt="Image description">
                            </a>
                            <figcaption class="gallery__descr" itemprop="caption description">
                                <h5>Isometric House</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">3D Render</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/janitor.webp" data-image="img/works/janitor.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/janitor.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr opposite" itemprop="caption description">
                                <h5 class="opposite">Dashboard Template</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag">UI Design</span>
                                    <span class="rounded-tag">Figma</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/bdo.webp" data-image="img/works/bdo.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/bdo.webp')}}" class="gallery__image" itemprop="thumbnail"
                                    alt="Image description">
                            </a>
                            <figcaption class="gallery__descr opposite" itemprop="caption description">
                                <h5 class="opposite">Notification Icon</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag">Illustrations</span>
                                    <span class="rounded-tag">3D Render</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/harrison.webp" data-image="img/works/harrison.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/harrison.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/brokersnapshot-ui.webp" data-image="img/works/brokersnapshot-ui.webp"
                                class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/brokersnapshot-ui.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/toymart.webp" data-image="img/works/toymart.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/toymart.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/math.webp" data-image="img/works/math.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/math.webp')}}" class="gallery__image" itemprop="thumbnail"
                                    alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/daisys.webp" data-image="img/works/daisys.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/daisys.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/slo-admin.webp" data-image="img/works/slo-admin.webp"
                                class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/slo-admin.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/sunrise.webp" data-image="img/works/sunrise.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/sunrise.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/yien.webp" data-image="img/works/yien.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/yien.webp')}}" class="gallery__image" itemprop="thumbnail"
                                    alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                        <!-- Works Gallery Single Item Start -->
                        <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                            itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="img/works/zenandsu.webp" data-image="img/works/zenandsu.webp" class="gallery__link"
                                itemprop="contentUrl" data-size="1400x1400">
                                <img src="{{asset('img/works/zenandsu.webp')}}" class="gallery__image"
                                    itemprop="thumbnail" alt="Image description">
                            </a>
                            <figcaption class="gallery__descr " itemprop="caption description">
                                <h5>Smart Penguin</h5>
                                <div class="card__tags d-flex flex-wrap">
                                    <span class="rounded-tag opposite">Illustrations</span>
                                    <span class="rounded-tag opposite">AI Experiment</span>
                                </div>
                                <p class="small">Mauris porttitor lobortis ligula, quis molestie lorem scelerisque eu.
                                    Morbi aliquam enim odio,
                                    a mollis ipsum tristique eu.
                                </p>
                            </figcaption>
                        </figure>
                        <!-- Works Gallery Single Item End -->

                    </div>
                </div>
            </div>
            <!-- Content Block - Works Gallery End -->

        </section>
        <!-- Portfolio Section End -->

        <!-- Contact Section Start -->
        <section id="contact" class="inner contact">

            <!-- Content Block - H2 Section Title Start -->
            <div class="content__block section-title">
                <p class="h2__subtitle  animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                        viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor"
                            d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                    C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                    C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                    </svg>
                    <span>Contact</span>
                </p>
                <h2 class="h2__title  animate-in-up">Let me hear what you got in mind!</h2>
            </div>
            <!-- Content Block - H2 Section Title End -->

            <!-- Content Block - Contact Form Start -->
            <div class="content__block grid-block block-grid-large">
                <div class="form-container">
                    <!-- Reply Messages Start -->
                    <div class="form__reply centered text-center">
                        <i class="ph-bold ph-smiley reply__icon"></i>
                        <p class="reply__title">Done!</p>
                        <span class="reply__text">Thanks for your message. I'll get back as soon as possible.</span>
                    </div>
                    <!-- Reply Messages End -->

                    <!-- Contact Form Start -->
                    <div class="content__block grid-block block-grid-large">
                        <div class="form-container">

                            <!-- Reply Messages Start -->
                            <div class="form__reply centered text-center" style="display: none;">
                                <i class="ph-bold ph-smiley reply__icon"></i>
                                <p class="reply__title">Done!</p>
                                <span class="reply__text">Thanks for your message. I'll get back as soon as
                                    possible.</span>
                            </div>
                            <!-- Reply Messages End -->

                            <!-- Contact Form Start -->
                            <form class="form contact-form" id="contact-form" action="{{ route('contact.send') }}"
                                method="post">
                                @csrf
                                <!-- Hidden Required Fields -->
                                <input type="hidden" name="project_name" value="Starter Template">
                                <input type="hidden" name="admin_email" value="support@mixdesign.club">
                                <input type="hidden" name="form_subject" value="Contact Form Message">
                                <!-- END Hidden Required Fields-->
                                <div class="container-fluid p-0">
                                    <div class="row gx-0">
                                        <div class="col-12 col-md-6 form__item animate-in-up">
                                            <input type="text" name="Name" placeholder="Name" required>
                                        </div>
                                        <div class="col-12 col-md-6 form__item animate-in-up">
                                            <input type="text" name="Company" placeholder="Subject">
                                        </div>
                                        <div class="col-12 col-md-6 form__item animate-in-up">
                                            <input type="email" name="E-mail" placeholder="Email Address*" required>
                                        </div>
                                        <div class="col-12 col-md-6 form__item animate-in-up">
                                            <input type="tel" name="Phone" placeholder="Phone Number">
                                        </div>
                                        <div class="col-12 form__item animate-in-up">
                                            <textarea name="Message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-12 form__item animate-in-up">
                                            <button class="btn btn-default btn-hover btn-hover-accent" type="submit">
                                                <span class="btn-caption">Send Message</span>
                                                <i class="ph-bold ph-paper-plane-tilt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                    </div>

                    <!-- Contact Form End -->
                </div>
            </div>

            <!-- Content Block - Contact Form End -->

            <!-- Content Block - Socials Cards Start -->
            <div class="content__block grid-block">
                <div class="socials-cards d-flex justify-content-start flex-wrap">
                    <!-- socials item -->
                    <div class="socials-cards__item d-flex grid-item-s animate-card-5">
                        <div class="socials-cards__card">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <a class="socials-cards__link" href="https://www.linkedin.com/in/lankeshhalangoda"
                                target="_blank"></a>
                        </div>
                    </div>
                    <!-- socials item -->
                    <div class="socials-cards__item d-flex grid-item-s animate-card-5">
                        <div class="socials-cards__card">
                            <i class="fa-brands fa-github"></i>
                            <a class="socials-cards__link" href="https://github.com/lankeshhalangoda"
                                target="_blank"></a>
                        </div>
                    </div>
                    <!-- socials item -->
                    <div class="socials-cards__item d-flex grid-item-s animate-card-5">
                        <div class="socials-cards__card">
                            <i class="fa-brands fa-stack-overflow"></i>
                            <a class="socials-cards__link"
                                href="https://stackoverflow.com/users/23758725/lankesh-halangoda" target="_blank"></a>
                        </div>
                    </div>
                    <!-- socials item -->
                    <div class="socials-cards__item d-flex grid-item-s animate-card-5">
                        <div class="socials-cards__card">
                            <i class="fa-brands fa-x-twitter"></i>
                            <a class="socials-cards__link" href="https://twitter.com/lankelk" target="_blank"></a>
                        </div>
                    </div>
                    <!-- socials item -->
                    <div class="socials-cards__item d-flex grid-item-s animate-card-5">
                        <div class="socials-cards__card">
                            <i class="fa-brands fa-facebook-f"></i>
                            <a class="socials-cards__link" href="https://www.facebook.com/reallankelk"
                                target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block - Socials Cards End -->

            <!-- Content Block - Teaser Start -->
            <div class="content__block">
                <div class="teaser">
                    <p class="teaser__text animate-in-up">If you'd like to have me on your team, let's connect! Feel
                        free to reach out, and we can discuss how I can add value to your projects.</p>
                    </p>
                </div>
            </div>
            <!-- Content Block - Teaser End -->


            <!-- Content Block - Contact Data Start -->
            <div class="content__block">
                <div class="container-fluid p-0 contact-lines animate-in-up">
                    <div class="row g-0 contact-lines__item">
                        <!-- data item -->
                        <div class="col-12 col-md-4 contact-lines__data">
                            <p class="contact-lines__title animate-in-up">Phone</p>
                            <p class="contact-lines__text animate-in-up">
                                <a class="text-link-bold" href="tel:+94779691729">+94 77 969 1729</a>
                            </p>
                        </div>
                        <!-- data item -->
                        <div class="col-12 col-md-4 contact-lines__data">
                            <p class="contact-lines__title animate-in-up">Email</p>
                            <p class="contact-lines__text animate-in-up">
                                <a class="text-link-bold"
                                    href="mailto:thavindul@gmail.com?subject=Message%20from%20your%20site">thavindul@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Block - Contact Data End -->



        </section>
        <!-- Contact Section End -->

    </div>
</div>
</div> <!-- Close the content__wrapper div -->
</div> <!-- Close the content div -->

<footer class="footer"
    style="background-color: #111; color: rgba(78, 78, 78, 0.5); padding: 10px 0; text-align: center; font-size: 0.2em;">
    <div class="footer__wrapper" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
        <div class="footer__content">
            <p style="margin-bottom: 0;">© {{ date('Y') }} Thavindu Liyanage. All Rights Reserved.</p>
        </div>
    </div>
</footer>
@endsection