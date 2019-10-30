<div class="week_by_week text-center">
    <h4>WEEK BY WEEK</h4>
    <h1>Pergenancy Calendar</h1>
    <span class="green">
        Sign up
    </span>
    <span class="blue">
        for the web's most entertaining
    </span>
    <span class="green">
        (while informative)
    </span>
    <span class="blue">weekly newsletter on your pregnancy!</span>
    <span class="green block">Enter Expected Due Date</span>

    <div class="row">
        <div class="col-md-3">
            <div class="icon"></div>
        </div>

        <div class="col-md-9">
            <!-- form -->
            <form action="/page/subscribe-news-letters-pergenancy" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="date">
                            <input type="number" id="month" name="MM" placeholder="MM" required>
                            <input type="number" id="day"   name="DD" placeholder="DD" required>
                            <input type="number" id="year"  name="YYYY" placeholder="YYYY" required>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="email">
                            <input type="email" id="email" name="email" placeholder="Your Email" required>
                        </div>

                        <button>
                            <img src="<?php echo get_template_directory_uri().'/imgs/heart.svg' ?>" alt="heart" />
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4"></div>
        <div class="col-md-8">
            <div class="health text-left">
                <span class="blue">Your family's </span> <span class="green">health</span> 
                <span class="blue">is important to us</span>
            </div>
        </div>

    </div>



</div>