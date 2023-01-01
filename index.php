<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/main.css">
    <title>LUBIKU</title>
</head>
<body>
    <section id="landing">
        <nav>
            <ul id="main-navigation">
                <li><a href="#whoami">$ whoami</a></li>
                <li><a href="#projects">$ projects</a></li>
                <li><a href="./blog/blog.html">$ blog</a></li>
                <li><a href="#contact">$ contact</a></li>
            </ul>
            <ul>
                <li><a href="#" onclick="" id="dark">dark</a></li>
                <li><a href="#" onclick="" id="light">light</a></li>
            </ul>
        </nav>

        <header>
            <h1><span id="lower-heading">poweredby</span>lubiku<span id="heading-dot">.</span></h1>
        </header>
        <div class="landing-footer">
            <p id="year">\\2023</p>
            <a href="#whoami"><img src="./assets/images/continue.png" alt="continue arrow"></a>
            <p id="version">v1.1</p>
        </div>
    </section>

    <section id="whoami">
        <h2>$ whoami</h2>
        <main>
            <img src="./assets/images/PROFILE.png" alt="picture of lubiku - author of the project">
            <div class="whoami-content">
                <p id="lines">\\\\\\</p>
                <p id="description"><span class="bolder">luboslav motosicky</span> also known as "<span class="bolder">lubiku</span>", student of <span class="bolder">software engineering & information technologies</span>, working as <span class="bolder">junior it security expert</span> currently located in <span class="bolder">prague</span> - czech republic, with level of age 21, involved in <span class="bolder">programming</span>, <span class="bolder">scripting</span>,  <span class="bolder">cybersecurity</span>, <span class="bolder">ethical hacking</span>, <span class="bolder">multimedia production</span> & more...</p>
                <div class="socials">
                    <a href=""><img src="./assets/socials/twitter.svg" alt="lubiku social media link twitter"></a>
                    <a href=""><img src="./assets/socials/github.svg" alt="lubiku social media link github"></a>
                    <a href=""><img src="./assets/socials/linkedin.svg" alt="lubiku social media link linkedin"></a>
                    <a href=""><img src="./assets/socials/codewars.svg" alt="lubiku social media link codewars"></a>
                    <a href=""><img src="./assets/socials/instagram.svg" alt="lubiku social media link instagram"></a>
                    <a href=""><img src="./assets/socials/twitch.svg" alt="lubiku social media link twitch.svg"></a>
                    <a href=""><img src="./assets/socials/youtube.svg" alt="lubiku social media link youtube.svg"></a>
                    <a href=""><img src="./assets/socials/soundcloud.svg" alt="lubiku social media link soundcloud"></a>
                </div>
                <a id="discover-more" href="./cv/cv.html">discover more</a>
            </div>
        </main>
    </section>

    <section id="projects">
        <h2>$ projects</h2>

        <ul>
            <li><a href=""><span>[01]</span> - poweredbylubiku</a></li>
            <li><a href=""><span>[02]</span> - cvutness <span>{school project}</span></a></li>
            <li><a href=""><span>[03]</span> - </a></li>
        </ul>
    </section>

    <!-- === CONTACT === -->
    <section id="contact">
        <h2>$ contact</h2>
        <form action="">
            <div class="row">
                <p>
                    <label for="">name</label>
                    <input type="text" value="" required>
                </p>
                <p>
                    <label for="">email</label>
                    <input type="email" value="" required>
                </p>
            </div>
            <p id="subject">
                <label for="">subject</label>
                <input type="text" value="" required>
            </p>
            <p id="message">
                <label for="">message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </p>
            <p id="submit-p">
                <button type="submit" id="submit">submit</button>
            </p>
        </form>
    </section>

    <script src="./scripts/script.js"></script>
</body>
</html>