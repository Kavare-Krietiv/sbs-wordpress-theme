<?php get_header(); ?>

<!--<div class="container-fluid">-->
<!--    <h5>-->
<!--        --><?php //the_title(); ?>
<!--    </h5>-->
<!---->
<!--    --><?php
//    if(have_posts()):while(have_posts()):the_post();
//        ?>
<!---->
<!--        --><?php //the_content(); ?>
<!---->
<!--    --><?php //endwhile; endif ?>
<!---->
<!--</div>-->

<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri();?>/assests/slider/HomePage_Image1.png" width="100%" height="570" alt="New York">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assests/slider/HomePage_Image2.png" width="100%" height="570" alt="New York">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assests/slider/HomePage_Image3.png" width="100%" height="570" alt="New York">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assests/slider/HomePage_Slider.png" width="100%" height="570" alt="Los Angeles">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
<!--</div>-->

<div class="about-content">

    <br/>
    <h4 style="color: #0553A0;font-weight: bold;text-align: center;">ABOUT US</h4>

    <img src="<?php echo get_template_directory_uri();?>/assests/SBS_GroupPhoto.png" style="padding-top: 50px" alt="group photo" class="img-fluid"
         width="100%">
    <div class="container-fluid" style="padding-top: 50px;padding-bottom: 50px">
        <div class="row">
            <div class="col">
                <p class="about-text">
                    We are Shungwaya Broadcasting Services abreviated to
                    “SBS” which is a Regional Media House licensed to serve
                    throughout the Coast Region and began broadcasting on
                    Frequency 94.4 FM Kilifi on the 27th August 2018 from its
                    transmitters in Mambrui and Jaribuni covering all the six
                    coastal counties: Kilifi, Mombasa, Kwale, Taita - Taveta,
                    Lamu and Tana River.
                </p>
                <p class="about-text">
                    Our mission has remained the same for almost 3 years,
                    acting in the public interest, serving all audiences through
                </p>
            </div>
            <div class="col">
                <p class="about-text">
                    the provision of impartial, high-quality and distinctive
                    output and services which inform, educate and entertain.
                    The public purposes outline the values we hold when
                    striving to achieve our mission to inform, educate and
                    entertain and they provide a clear framework through
                    which we are held to account.
                </p>
                <ul class="about-text">
                    <li>To provide impartial news and information to help
                        people to understand and engage with the world
                        around them.
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="about-text">
                    <li>To provide impartial news and information to help
                        people to understand and engage with the world
                        around them.
                    </li>
                    <li>To support learning for people of all ages.</li>
                    <li>To show the most creative, highest quality and
                        distinctive output and services.
                    </li>
                    <li>To reflect, represent and serve the diverse
                        communities of this nation and, in doing so, support
                        the creative economy across the the nation and
                        beyond.
                    </li>
                    <li>To reflect kenya, its culture and values to the world.</li>
                </ul>
            </div>
            <div class="col">
                <p class="about-text">Nowhere is this more obvious than in the quality of our
                    output. Audiences in their thousands have been gripped
                    by hourly news, live and recorded talk shows, hit music
                    across all genres, from features, weather updates to
                    analysis such as environmental, health, socio- economic
                    education and dramatic change that are affecting the
                    community on daily basis. Meanwhile, our SBS news
                    teams have kept audiences up to date on every twist and
                    turn of our Nation’s development, based on a tireless
                    commitment to impartiality, fact-checking, and in-depth...<br/>
                    <a href="about.html" class="ml-auto about-text" style="font-weight: bold">READ MORE <i
                                class="far fa-play-circle"></i></a>
                </p>
            </div>
        </div>

    </div>
</div>

<div class="about-news">
    <div class="container-fluid">
        <div class="row about-news-title">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h6 style="color: #0553A0;font-weight: bold">LISTEN</h6>
                <hr style="background-color: #0553A0;height: 5px"/>
                <div class="row offset-md-1">
                    <div class="col">
                        <a href="#anaza-siku" data-toggle="collapse">Anza Siku na Mungu</a>
                        <div id="anaza-siku" class="collapse row">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1CwizC-Ff2O4CSIusfTCWYWM3BgMHFkiY/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#kilingeni" data-toggle="collapse">Kilingeni</a>
                        <div id="kilingeni" class="collapse">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1y9UI7Acto2uDIX8uevBhuJx1JEcxBqCj/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#planet-muziki" data-toggle="collapse">Planet Muziki</a>
                        <div id="planet-muziki" class="collapse">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1gA66-mwpXsQ0wvC_f6DPm4CZAdO41k7k/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="row offset-md-1">
                    <div class="col">
                        <a href="#reggae-connect" data-toggle="collapse">Reggae Connect</a>
                        <div id="reggae-connect" class="collapse">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1PS9Td-2wXu0UD6Q7vCyiPycew7lf5j9K/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#safe-drive" data-toggle="collapse">Safe Drive Show</a>
                        <div id="safe-drive" class="collapse">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1GnV5oOO0g6b7WmD7X9UAtgiDAZESUlu5/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#salamu-zako" data-toggle="collapse">Salamu Zako</a>
                        <div id="salamu-zako" class="collapse">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1h6PGj0N0vWWFa1kbzV9jcfvbxEBmNQQU/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="row offset-md-1">
                    <div class="col">
                        <a href="#rhumba-nite" data-toggle="collapse">SBS Rhumba Nite</a>
                        <div id="rhumba-nite" class="collapse">
                            <iframe
                                    frameborder="0"
                                    width="400"
                                    height="50"
                                    src="https://drive.google.com/file/d/1j_q-G8t5Ndq-Qs8MskvTY7LBoJi9Bqu8/preview?usp=sharing">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-testimonials">
    <div class="container">
        <div id="myTestimonials" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!--                <ol class="carousel-indicators">-->
            <!--                    <li data-target="#myTestimonials" data-slide-to="0" class="active"></li>-->
            <!--                    <li data-target="#myTestimonials" data-slide-to="1"></li>-->
            <!--                    <li data-target="#myTestimonials" data-slide-to="2"></li>-->
            <!--                </ol>-->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col">
                            <img src="<?php echo get_template_directory_uri();?>/assests/Testimonial-1.png" class="img-fluid" width="400" alt="testimonial">
                        </div>
                        <div class="col">
                            <p style="text-align: center;font-size: 13px">WHAT DO YOU SAY ABOUT US?</p>
                            <h4 style="text-align: center;color: #0553A0"><b>TESTIMONIALS</b></h4>
                            <p style="text-align: center;font-size: 14px">
                                Kama Mkereketwa na Shabiki mkuu wa SBS Radio, ningependa kuwapongeza SBS
                                kwa kutuletea Radio hii inayo tujuza mambo lukuki, inayotufunza na kutuburudisha
                                pasi kipimo mbali na kutiliwaza na midundo kemekem na kochokocho. Vipindi vyao
                                havina mfano, watangazaji wao mahiri na wanajua hadi inakera. Asante SBS Radio.
                            </p>
                            <p style="text-align: center;font-size: 14px"><b>ISSAH MWANGOME</b></p>
                            <p style="text-align: center;font-size: 13px">SBS RADIO DIE-HARD FAN</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <!--            <a class="left carousel-control" href="#myTestimonials" data-slide="prev">-->
            <!--                <span class="glyphicon glyphicon-chevron-left"></span>-->
            <!--                <span class="sr-only">Previous</span>-->
            <!--            </a>-->
            <!--            <a class="right carousel-control" href="#myTestimonials" data-slide="next">-->
            <!--                <span class="glyphicon glyphicon-chevron-right"></span>-->
            <!--                <span class="sr-only">Next</span>-->
            <!--            </a>-->
        </div>
    </div>
</div>

<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-2" style="margin-left: 220px">
                <!--                    <p style="color: #E3E3E2;font-size: 13px;margin-top: 50px;">Please send us your comment or-->
                <!--                        queries</p>-->
                <!--                    <h4 style="color: #ffffff"><b>CONTACT FORM</b></h4>-->
                <!--                    <p style="color: #E3E3E2;font-size: 13px">-->
                <!--                        We know you have something great and we’d love to get involved. So make the right-->
                <!--                        decision and use us, you wont be sorry. If you don’t use us we will be sad, but we will still-->
                <!--                        love you. So go ahead and contact our SBS Creative Department.<br/>-->
                <!--                        SBS Creative, a department set up recently provides an integrated service available to all-->
                <!--                        advertisers, advertising agencies and promotions companies alike, forming a strategic-->
                <!--                        arm of SBS’s commercial production and promotions division. The Department will-->
                <!--                        consistently manage to keep up with high quality commercials and the best on-air-->
                <!--                        promotions for the biggest brands in Kenya. The department intends to be innovative,-->
                <!--                        competent and able to give your brand that extra edge needed to make an impact in the-->
                <!--                        market. If you would like to know more about our competitive rates, our account-->
                <!--                        managers will be your perfect guides.-->
                <!--                    </p>-->
                <!--                    <div class="row social-media">-->
                <!--                        &lt;!&ndash;                    <a href="#" class="social-media-icon"><i class="fab fa-twitter"></i></a>&ndash;&gt;-->
                <!--                        <a href="#" class="social-media-icon"><img src="assests/social/Twitter.png" width="30"-->
                <!--                                                                   height="30"></a>-->
                <!--                        <a href="#" class="social-media-icon"><img src="assests/social/Linkedin.png" width="30"-->
                <!--                                                                   height="30"></a>-->
                <!--                        <a href="#" class="social-media-icon"><img src="assests/social/Facebook.png" width="30"-->
                <!--                                                                   height="30"></a>-->
                <!--                        <a href="#" class="social-media-icon"><img src="assests/social/Instagram.png" width="30"-->
                <!--                                                                   height="30"></a>-->
                <!--                        &lt;!&ndash;                    <a href="#" class="social-media-icon"><i class="fab fa-facebook-f"></i></a>&ndash;&gt;-->
                <!--                        &lt;!&ndash;                    <a href="#" class="social-media-icon"><i class="fab fa-linkedin-in"></i></a>&ndash;&gt;-->
                <!--                        &lt;!&ndash;                    <a href="#" class="social-media-icon"><i class="fab fa-instagram"></i></a>&ndash;&gt;-->
                <!--                    </div>-->
                <form style="margin-top: 250px">
                    <div class="form-group">
                        <input type="text" name="fName" class="form-control" placeholder="Fullname" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="uEmail" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                                <textarea name="fName" class="form-control" placeholder="Your message"
                                          required></textarea>
                    </div>
                    <div class="form-group" style="padding-bottom: 50px">
                        <button type="submit" name="submit" class="btn btn-sm btn-danger">SUBMIT</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>
