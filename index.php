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
            <div class="chose-text">Let's get you started<br> <div><u>Click</u> on the services you will need below</div></div>
            <div class="services-grid">
                <div class="grid-area" id="g1">
                    <div class="grid-title" id="gt1"><div class="grid-icon"></div><div>Light Housekeeping Services</div></div>
                    <div class="grid-items">
                        <div class="grid-item false" id="dinner"><input type="checkbox" name="dinner">Meal Prepping</div>
                        <div class="grid-item false" id="vaccuum"><input type="checkbox" name="vaccuum">Vaccuum</div>
                        <div class="grid-item false" id="counters"><input type="checkbox" name="counters">Wipe Counters</div>
                        <div class="grid-item false" id="dishes"><input type="checkbox" name="dishes">Dishes</div>
                        <div class="grid-item false" id="laundry"><input type="checkbox" name="laundry">Laundry</div>
                        <div class="grid-item false" id="linens"><input type="checkbox" name="linens">Change Linens</div>
                        <div class="grid-item false" id="fridge"><input type="checkbox" name="fridge">Clean Fridge</div> 
                    </div>
                    
                </div>
                <div class="grid-area" id="g2">
                    <div class="grid-title" id="gt2"><div>Errand Services</div><div class="grid-icon"></div></div>
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
                    <div class="csocial">
                        <a href="https://www.instagram.com/your_housewife_helper/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
                        </a>
                    </div>
                    <div class="csocial">
                        <a href="https://www.google.com/search?q=yourhousewifehelper#lrd=0x876ea97bbf7784dd:0x2d7050c99a9df872,1,,,,">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
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

            // Array.from(buttons).forEach((i) => {
            //     i.addEventListener("click", (e) => {
            //         if (e.target instanceof HTMLInputElement) {
            //             console.log('input found');
            //         }
            //         else {
            //             console.log("button found")
            //             if(i.classList.contains('true')) {
            //                 i.classList.remove('true');
            //                 i.classList.add('false');
            //             } else {
            //                 i.classList.remove('false');
            //                 i.classList.add('true');
            //             }
            //         }
            //         console.log(e);
            //     });
            // });

            const boxes = ["vaccuum", "counters", "dishes", "laundry", "linens", "fridge", "dinner", "groceryShop", "groceryPickup",
        "giftShop", "prePickup","pantrys","closets","cupboards","linenCloset","coatCloset","birthday","christmas","anniversary","baby"]

            boxes.forEach(element => {
                $("#" + element).click((e) => {
                    if (e.target instanceof HTMLInputElement) {
                        // console.log("input found.");
                    }
                    else {
                        var checkBox = $("input[name=" + element + "]");
                        checkBox.prop("checked", !checkBox.prop("checked"));
                    }
                    
                })
            });
        })
    </script>
</body>
</html>