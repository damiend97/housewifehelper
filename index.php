<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Housewife Helper</title>
    <link rel="stylesheet" href="main.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio&family=Arizonia&family=Bad+Script&family=Montserrat:wght@200&family=Pacifico&family=Poiret+One&family=Syncopate&family=Tangerine&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="contact.php" id="cform">
    <nav>
        <ul>
            <div class="logo">Your Housewife Helper</div>
            <li>
                <a href="#home" class="navlink">home</a>
            </li>
            <li>
                <a href="#about" class="navlink">about</a>
            </li>
            <li>
                <a href="#services" class="navlink">services</a>
            </li>
            <li>
                <a href="#contact" class="navlink">contact</a>
            </li>
        </ul>
    </nav>
    <div class="landing" id="home">
        <div class="pngs">
        </div>
        <div class="cta-wrapper">
            <div class="cta">
                <div class="fixed-img">
                </div>
                <div class="cta-top">Northern Colorado household services fit for you!</div>
                <div class="cta-mid">Stop doing it all yourself! Let me help so you can enjoy life where it matters most.</div>
                <div class="cta-bot">
                    <div class="cta-but navlink"><a href="#services">Get a Quote</a></div>
                    <div class="cta-info navlink"><a href="#about">Learn more</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip">
        <div class="strip-content">
            <div class="strip-top">YOUR HOUSEWIFE HELPER</div>
            <div class="strip-mid">take it easy... call me.</div>
            <br>
            <div class="strip-bot">Heide Philpot | heide.philpot@gmail.com | Call or text (970) 556 -1041</div>
        </div>
    </div>
    <div class="about-wrapper" id="about">
        <div class="about">
            <div class="section-title">About</div>
            <div class="section-line"></div>
            <div class="shrink">
                <div class="about-section1">
                    <div class="about-name">
                        Hi, my name is Heide Philpot.
                    </div>
                    <div class="about-founder">
                        I am the Founder of “Your Housewife Helper.”
                    </div>
                    <div class="about-info">
                        Are you trying to juggle a career, a husband and kids and that is all
                        you have time for. Well, look no further...I am here to help. I provide
                        household services that fit your need!
                    </div>
                    <div class="how">
                        How it works
                    </div>
                    <div class="row">
                        <div class="ritem">
                            <div class="rhead">
                                Get a quote
                            </div>
                            <div class="rbody">
                                Tell us about you, your home, and your household needs.
                            </div>
                        </div>
                        <div class="ritem">
                            <div class="rhead">
                                Get in touch
                            </div>
                            <div class="rbody">
                                Once I receive your information I will get ahold of you and we will schedule your services.
                            </div>
                        </div>
                        <div class="ritem">
                            <div class="rhead">
                                Breathe, smile, relax
                            </div>
                            <div class="rbody">
                                Time to take the load off! Enjoy your home like you deserve to.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-wrapper" id="services">
        <div class="services">
            <div class="section-title2">Services</div> 
            <div class="section-line2"></div>
            <div class="chose-text">Let's get you started<br> <div>Which services will you need?</div></div>
            <div class="services-grid">
                <div class="grid-area" id="g1">
                    <div class="grid-title" id="gt1"><div class="grid-icon"></div><div>Light Housekeeping Services</div></div>
                    <div class="grid-items">
                        <div class="grid-item false" id="vaccuum"><input type="checkbox" name="vaccuum">Vaccuum</div>
                        <div class="grid-item false" id="counters"><input type="checkbox" name="counters">Wipe Counters</div>
                        <div class="grid-item false" id="dishes"><input type="checkbox" name="dishes">Dishes</div>
                        <div class="grid-item false" id="laundry"><input type="checkbox" name="laundry">Laundry</div>
                        <div class="grid-item false" id="linens"><input type="checkbox" name="linens">Change Linens</div>
                        <div class="grid-item false" id="fridge"><input type="checkbox" name="fridge">Clean Fridge</div>
                        <div class="grid-item false" id="dinner"><input type="checkbox" name="dinner">Meal Prepping</div>
                    </div>
                    
                </div>
                <div class="grid-area" id="g2">
                    <div class="grid-title"id="gt2"><div>Errand Services</div><div class="grid-icon"></div></div>
                    <div class="grid-items">
                        <div class="grid-item false" id="groceryShop"><input type="checkbox" name="groceryShop">Grocery Shopping</div>
                        <div class="grid-item false" id="groceryPickup"><input type="checkbox" name="groceryPickup">Grocery Pickup</div>
                        <div class="grid-item false" id="giftShop"><input type="checkbox" name="giftShop">Gift Shopping</div>
                        <div class="grid-item false" id="prePickup"><input type="checkbox" name="prePickup">Prescription Pickup</div>
                    </div>
                </div>
                <div class="grid-area" id="g3">
                    <div class="grid-title" id="gt3"><div class="grid-icon"></div><div>Organizing Services</div></div>
                    <div class="grid-items">
                        <div class="grid-item false" id="pantrys"><input type="checkbox" name="pantrys">Pantrys</div>
                        <div class="grid-item false" id="closets"><input type="checkbox" name="closets">Closets</div>
                        <div class="grid-item false" id="cupboards"><input type="checkbox" name="cupboards">Cupboards</div>
                        <div class="grid-item false" id="linenCloset"><input type="checkbox" name="linenCloset">Linen Closet</div>
                        <div class="grid-item false" id="coatCloset"><input type="checkbox" name="coatCloset">Coat Closet</div>
                    </div>
                </div>
                <div class="grid-area" id="g4">
                    <div class="grid-title" id="gt4"><div>Party Services (Host/Setup)</div><div class="grid-icon"></div></div>
                    <div class="grid-items">
                        <div class="grid-item false" id="birthday"><input type="checkbox" name="birthday">Birthday Parties</div>
                        <div class="grid-item false" id="christmas"><input type="checkbox" name="christmas">Christmas Parties</div>
                        <div class="grid-item false" id="anniversary"><input type="checkbox" name="anniversary">Anniversaries</div>
                        <div class="grid-item false" id="baby"><input type="checkbox" name="baby">Baby Showers</div>
                    </div>
                </div>
            </div>
            <div class="proceed">Let's get your contact info now... <div class="gobut"><a href="#cformDOM">Let's Go</a></div></div>
        </div>
    </div>
    <div class="contact-wrapper" id="contact">
        <div class="contact">
            <div class="section-title3">Contact</div>
            <div class="chose-text ctc">Get in touch</div>
            <div class="split" id="split">
                <div class="cinfo">
                    <div class="logo bk">YOUR HOUSEWIFE HELPER</div>
                    <div class="cname">Heide Philpot</div>
                    <div class="cemail">heide.philpot@gmail.com</div>
                    <div class="cphone">(970) 556 -1041</div>
                    <div class="csocial">
                        <a href="https://www.facebook.com/profile.php?id=100088015940714">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#333" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="cform" id="cformDOM" >
                    <div class="provide">Provide your info for a quote</div>
                    <div>
                        <label for="firstName">Name</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" name="phone">
                    </div>
                    <div class="full">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="full">
                        <label for="message">Notes</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <input type="submit" id="submitBut" value="Submit">
                </div>
            </div>
        </div>
    </div>
</form>
    <script>
        $(document).ready(() => {
            $('html, body').scrollTop(0);

            $('.navlink').click((link) => {
                $('html, body').animate({scrollTop: $('' + link.target.hash).offset().top - (($(window).height())) * .12 }, 'slow');
            });
            $('.proceed').click((link) => {
                $('html, body').animate({scrollTop: $('' + link.target.hash).offset().top - (($(window).height())) * .12 }, 'slow');
            });

            const buttons = document.getElementsByClassName('grid-item');

            Array.from(buttons).forEach((i) => {
                i.addEventListener("click", (e) => {
                if(i.classList.contains('true')) {
                    i.classList.remove('true');
                    i.classList.add('false');
                } else {
                    i.classList.remove('false');
                    i.classList.add('true');
                }
                });
            });

            const boxes = ["vaccuum", "counters", "dishes", "laundry", "linens", "fridge", "dinner", "groceryShop", "groceryPickup",
        "giftShop", "prePickup","pantrys","closets","cupboards","linenCloset","coatCloset","birthday","christmas","anniversary","baby"]

            boxes.forEach(element => {
                $("#" + element).click(() => {
                    var checkBox = $("input[name=" + element + "]");
                checkBox.prop("checked", !checkBox.prop("checked"));
                })
            });
        })
    </script>
</body>
</html>