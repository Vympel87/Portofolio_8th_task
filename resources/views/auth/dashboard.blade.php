<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet">
    <title>Pertemuan 8</title>
  </head>
  <body>
    <header class="header container">
      <nav>
        <ul class="header__menu">
          <li>
            <a class="header__link" href="#about">About</a>
          </li>
          <li>
            <a class="header__link" href="#work">Work</a>
          </li>
          <li>
            <a class="header__link" href="#contact">Contact</a>
          </li>
          <li class="header__line"></li>
          <li>
            <button id="theme-toggle" class="header__sun">
              <svg xmlns="http://www.w3.org/2000/svg" 
              viewBox="0 0 24 24" fill="currentColor" 
              >
                <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 
                0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 
                0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 
                0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 
                0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 
                0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 
                0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 
                0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 
                0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 
                0 00-1.061 1.06l1.59 1.591z" />
              </svg>              
            </button>
          </li>
          <li>
            <a class="header__resume btn" 
            href="https://www.canva.com/design/DAFwpKuTNgE/McDJju0BcTEorXMs-u666g/edit?utm_content=DAFwpKuTNgE&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
            >Resume</a>
          </li>
          <li>
            <a class="header__resume btn" 
            href="{{route('logout')}}" class="nav-link"><span data-hover="Log Out">Log Out</span></a>
          </li>
        </ul>
        <button class="header__bars">
          <svg xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 
            0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 
            0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 
            0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
          
        </button>
      </nav>
    </header>

    <!-- Mobile Navigation -->
    <div class="mobile-nav">
      <nav>
        <ul class="mobile-nav__menu">
          <li>
            <a class="mobile-nav__link" href="#about">About</a>
          </li>
          <li>
            <a class="mobile-nav__link" href="#work">Work</a>
          </li>
          <li>
            <a class="mobile-nav__link" href="#contact">Contact</a>
          </li>
          <li class="mobile-nav__link-line"></li>
          <li>
            <button
              id="theme-toggle"
              aria-label="theme-toggle btn"
              id="theme-toggle"
              class="mobile-nav__sun"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"
                />
              </svg>
            </button>
          </li>
          <li>
            <a class="mobile-nav__btn btn" href="https://www.canva.com/design/DAFwpKuTNgE/McDJju0BcTEorXMs-u666g/edit?utm_content=DAFwpKuTNgE&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
            >Resume</a>
          </li>
          <li>
            <a class="header__resume btn" 
            href="{{route('logout')}}" class="nav-link"><span data-hover="Log Out">Log Out</span></a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- End of mobile navigation -->

    <main>
      <section class="hero container">
        <img class="hero__img" src="/foto_awal.jpg" alt="Profile picture">
        <h2 class="hero__subtitle">Hi, I'm Rafa 👋 </h2>
        <h1 class="hero__title">SOFTWARE ENGINEERING <br> COLLEGE STUDENT.</h1>
        <p class="hero__description">A passionate <strong> Fullstack-jamstack </strong> 
           web developer and <strong> UI/UX </strong> enthusiast.</p>
           <a
           class="contact__btn btn"
           href="mailto:yudhistirarafazakyba@mail.ugm.ac.id"
           target="_blank"
           >React Out</a
         >
      </section>
      <section id="about" class="about container section">
        <div class="about__content">
          <h2 class="about__title">About</h2>
          <p class="about__description">
            Hello there! i'm Rafa, a <strong> 
            college student of software engineering, </strong> 
            in University of Gadjah Madha. I wake up in the morning, pray and prepare for a class.
          </p>
          <p class="about__description">
            Also i usually hang out with some friends if it's really free. 
            I wake up in the morning, prepare for a class, if i bored i practice by code 
            to improve my personal hardskills.
          </p>
          <p class="about__description">
            I recently joined with a <strong> 
              student association </strong> 
              in my department, 
            it helps me in improving my softskills
          </p>
          <hr class="about__hr">
          <h3 class="about__subtitle">Technologies</h3>
          <div class="about__ul-container">
            <ul class="about__ul">
              <li class="about__list">Javascript</li>
              <li class="about__list">HTML</li>
              <li class="about__list">CSS</li>
              <li class="about__list">Laravel</li>
              <li class="about__list">Tailwind</li>
              <li class="about__list">Bootstrap</li>
              <li class="about__list">PHP</li>
            </ul>
            <ul class="about__ul">
              <li class="about__list">Python</li>
              <li class="about__list">Matplotlib</li>
              <li class="about__list">Numpy</li>
              <li class="about__list">Java</li>
              <li class="about__list">Kotlin</li>
              <li class="about__list">C#</li>
              <li class="about__list">MySQL</li>
            </ul>
          </div>
        </div>

        <div class="about__img-wrapper">
          <img class="about__img lazy loading" 
          src="https://via.placeholder.com/390x591"
          data-src="/profil2.jpg" 
          alt="Profile picture">
        </div>

      </section>
      <section id="work" class="featured container section">
        <h3 class="featured__subtitle">Project</h3>
        <div class="featured__wrapper">
          <h2 class="featured__title">Fandom Project</h2>
          <a
            aria-label="link featured projects"
            class="featured__link"
            href="https://github.com/Vympel87/Project-PPW-1.git"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"
              />
            </svg>
          </a>
        </div>
        <p class="featured__description">
          I made this for my first web practicum final project. 
          I also made it responsive by adding JavaScript and PHP for database and user needs
        </p>
        <div class="featured__info-container">
          <div>
            <h3 class="featured__label">Tech stack</h3>
            <ul class="featured__tech-stack">
              <li class="featured__info">HTML</li>
              <li class="featured__info">CSS</li>
              <li class="featured__info">Javascript</li>
              <li class="featured__info">Bootstrap</li>
              <li class="featured__info">PHP</li>
            </ul>
          </div>
          <div>
            <h3 class="featured__label">type</h3>
            <p class="featured__info">Fullstack</p>
          </div>
          <div>
            <h3 class="featured__label">Timeline</h3>
            <p class="featured__info">April 2023 - present</p>
          </div>
        </div>
        <div class="featured__img-container">
          <div class="featured__img-wrapper">
            <img
              class="lazy loading"
              src="https://via.placeholder.com/1920x968"
              data-src="/web1.png"
              alt="pertama"
            />
          </div>
          <div class="featured__img-wrapper">
            <img
              class="lazy loading"
              src="https://via.placeholder.com/1920x968"
              data-src="/web2.png"
              alt="Kedua"
            />
          </div>
          <div class="featured__img-wrapper">
            <img
              class="lazy loading"
              src="https://via.placeholder.com/1920x968"
              data-src="/web3.png"
              alt="Ketiga"
            />
          </div>
          <div class="featured__img-wrapper">
            <img
              class="lazy loading"
              src="https://via.placeholder.com/1920x968"
              data-src="/web4.png"
              alt="Keempat"
            />
          </div>
        </div>
      </section>

      <section class="featured container section">
        <h3 class="featured__subtitle">Design</h3>
        <div class="featured__wrapper">
          <h2 class="featured__title">application design</h2>
          <a
            aria-label="link featured projects"
            class="featured__link"
            href="https://www.figma.com/file/RuwmcIb7YQjBidHx9ID7Er/Portofolio-Hipster?type=design&node-id=0%3A1&mode=design&t=ggtORSMCqYV4OMso-1"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"
              />
            </svg>
          </a>
        </div>
        <p class="featured__description">
          This is a collection of designs from mock-up to prototype level 
          for several web and Android application development needs.
        </p>
        <div class="featured__info-container">
          <div>
            <h3 class="featured__label">Tech stack</h3>
            <ul class="featured__tech-stack">
              <li class="featured__info">Figma</li>
            </ul>
          </div>
          <div>
            <h3 class="featured__label">type</h3>
            <p class="featured__info">UI/UX</p>
          </div>
          <div>
            <h3 class="featured__label">Timeline</h3>
            <p class="featured__info">March 2023 - present</p>
          </div>
        </div>
        <div class="featured__img-container">
          <div class="featured__img-wrapper">
            <img
              class="lazy loading"
              src="https://via.placeholder.com/1920x968"
              data-src="/desain1.png"
              alt="Kelima"
            />
          </div>
      </section>

      <section id="contact" class="contact container section">
        <h2 class="contact__title">Get In Contact</h2>
        <p class="contact__description">
          You can see me in other social media, such as  <a href="https://www.linkedin.com/in/yudhistira-rafazaky-bandono-109ba3249/"> LinkedIn </a> and 
          <a href="https://www.instagram.com/punthadw/"> Instagram </a> 
          or maybe if you want to see more of my work you can visit my <a href="https://github.com/Vympel87"> GitHub. </a> 
          so feel free to reach out and I will get back to you as soon as possible.
        </p>
        <a
          class="contact__btn btn"
          href="mailto:yudhistirarafazakyba@mail.ugm.ac.id"
          target="_blank"
          >React Out</a
        >
      </section>
    </main>
    <footer class="footer container section">
      <h3 class="footer__title">~ Yudhistira Rafazaky Bandono ~</h3>
    </footer>
    <script type="module" src="./src/main.js"></script>
  </body>
</html>
