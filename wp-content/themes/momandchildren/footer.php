        <!-- chat box -->
        <div id="chat">
            <div class="chat_box"></div>
            <div class="chat_picker">
                <span class="chat_icon">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/chat/chat_pink.svg' ?>" alt="Chat">
                </span>
                <span class="text">
                    Chat
                </span>
                <span class="chat_arrow">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/chat/chat_arrow.svg' ?>" alt="Chat Arrow">
                </span>
            </div>
        </div>
        
        <footer class="footer">
            <div class="row">
                <div class="col-md-4">
                    <!-- logo section -->
                    <div class="footer_logo">
                        <h3>The Healthy Family</h3>
                        <div class="logo">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/logo/logo_2.svg' ?>" alt="Mom And Children">
                        </div>

                        <div class="social">
                            <a href="#" class="facebook" target="_blank">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/facebook.png' ?>" alt="Facebook">
                            </a>
                            <a href="#" class="instagram" target="_blank">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/instagram.svg' ?>" alt="Instagram">
                            </a>
                            <a href="#" class="youtube" target="_blank">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/youtube.png' ?>" alt="Youtube">
                            </a>
                        </div>

                        <div class="email">
                            <a href="mailto:info.momandchildren@gmail.com" target="_blank">info.momandchildren@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- copy rights and week by week -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="week_by_week_footer" href="">
                                <img class="img-responsive" src="<?php echo get_template_directory_uri().'/imgs/footer/week_by_week.svg' ?>" alt="Week By Week">
                                <p>WEEK BY WEEK</p>
                                <h2>Pregnancy Calendar</h2>
                            </a>
                            <div class="copy_rights">
                                © 2019 momandchildreN. All Rights Reserved.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="links">
                                <ul class="list-unstyled">
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>


                            <div class="contact">
                                <form action="/send-contact-message">
                                    <div class="row">
                                        <div class="col-md-6 clas1">
                                            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="col-md-6 clas2">
                                            <input type="text" name="name" placeholder="Your Name" class="name" required>
                                            <input type="email" name="email" placeholder="Your Email" class="email" required>
                                            <input type="submit" value="Send Message" class="submit" name="send_message">
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <div class="copy_rights_phone">
                                © 2019 momandchildreN. All Rights Reserved.
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</htm>