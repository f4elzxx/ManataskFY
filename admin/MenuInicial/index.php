<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Menu | Manataskfy</title>

  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />

  <style>
    @import 'https://unpkg.com/open-props' layer(design.system);
    @import 'https://unpkg.com/open-props/normalize.dark.min.css'
    layer(base.normalize);

    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&display=swap');

    @layer base.override-normalize {
      :root {
        view-transition-name: none;
        font-family: 'Oswald', sans-serif;

        --font-size-0: 0.875rem;
        --radius-3: 8px;

        --surface-1: oklch(0 0 0);
        --surface-2: oklch(0.19 0 0);
        --surface-3: oklch(0.24 0 0 / 0.1);
        --surface-4: oklch(0.45 0 0);
        --text-1: oklch(1 0 0);
        --text-2: oklch(0.51 0 0);
        --brand-1: #2DA9E3;
        --brand-2: oklch(0.78 0.11 84.63);

        --container: 1600px;
        --nav-block-size: 6.2rem;


        --gap: var(--size-8);
      }

      .centro {
        display: flex;
        width: 100%;
        justify-content: center;
      }

      li {
        padding: 0;
        color: #ffffff;
      }

      a {
        margin: 0;
        max-inline-size: unset;
      }

      h1,
      h2,
      h3 {
        font-family: 'Bebas Neue', sans-serif;
        font-weight: normal;
        color: aliceblue;
      }
    }

    @layer containers {
      .Navbar {
        position: sticky;
        inset-block-start: 0;
        z-index: var(--layer-3);
        background-color: var(--surface-1);
        block-size: var(--nav-block-size);

        .container {
          display: flex;
          margin-inline: auto;
          max-inline-size: var(--container);
          align-items: center;
          justify-content: space-between;
          padding-inline: var(--size-3);
        }

        @media (width > 768px) {
          #openMenuBtn {
            display: none;
          }
        }

        .menu {
          list-style: none;
          display: flex;
          background-color: var(--surface-1);

          >header {
            display: flex;
            justify-content: space-between;
            inline-size: 100%;
            padding-inline: var(--size-3);
            border-bottom: var(--border-size-2) solid var(--text-1);
          }

          @media (width < 768px) {
            flex-direction: column;
            align-items: start;
            position: fixed;
            inset-block: 0;
            inset-inline-end: 0;
            inline-size: 100%;
            gap: var(--size-7);

            display: none;

            &.open {
              display: flex;
            }
          }

          @media (width >=768px) {
            gap: var(--gap);

            >header {
              display: none;
            }
          }
        }
      }

      main {
        display: grid;
        margin-inline: auto;
      }

      section .container {
        max-inline-size: 1200px;
        padding-inline: var(--size-3);
        padding-block: var(--size-12);
        display: grid;
        gap: var(--gap);
        place-content: center;
        margin-inline: auto;
        padding-inline: var(--size-3);
      }

      .hero {
        display: grid;
        align-items: center;

        >* {
          grid-area: 1/1;
        }

        & h1 {
          text-align: center;
          font-family: 'Bebas Neue', sans-serif;
          font-weight: normal;
          font-size: 7rem;
          text-transform: uppercase;
        }

        & p {
          max-inline-size: 25ch;
          font-size: var(--font-size-4);
          color: var(--surface-1);
          text-align: center;
          display: none;
        }

        .visual {
          background: var(--gradient-8);

          block-size: calc(100dvh - var(--nav-block-size));
          overflow: hidden;

          & img {
            object-fit: cover;
            inline-size: 100%;
            block-size: 100%;
          }
        }

        :is(picture, img) {
          inline-size: 100%;
          block-size: 100%;
        }

        .content {
          display: grid;
          place-items: center;
        }

        @media (width < 768px) {
          .content {
            gap: var(--size-3);
          }

          & h1 {
            font-size: var(--font-size-8);
            max-inline-size: var(--size-content-1);
            line-height: var(--font-lineheight-0);
          }
        }
      }

      .fold {
        display: grid;
        justify-content: center;
        padding: var(--size-10);

        & p {
          text-align: center;
          font-size: var(--font-size-7);
          max-inline-size: var(--size-content-2);

          @media (width < 768px) {
            font-size: var(--font-size-fluid-3);
          }
        }
      }

      .schedule {
        & h2 {
          font-size: var(--font-size-7);
          color: var(--brand-1);
          text-transform: uppercase;
        }

        & table {
          border: 3px solid var(--surface-1);
          inline-size: 100%;
        }

        .table-wrapper {
          display: grid;
          justify-items: center;
          gap: calc(var(--gap) / 2);
        }

        & tr:hover td {
          color: var(--brand-1);
          background-color: white;
        }

        @media (width > 768px) {
          .container {
            grid-template-columns: 1fr 1fr;
            gap: var(--size-10);
          }
        }
      }

      .showcase {
        display: grid;
        overflow: hidden;
        background-color: var(--surface-1);

        >* {
          grid-area: 1/1;
        }

        >video {
          display: block;
          inline-size: 100%;
        }

        >img {
          z-index: 1;
        }
      }

      .cards {
        @media (width > 768px) {
          .container {
            grid-template-columns: 1fr 1fr 1fr;
          }
        }
      }

      .about {
        background-color: var(--surface-1);
        padding-inline: var(--size-3);

        display: grid;
        grid-template-rows: 1fr auto;
        justify-content: center;
        min-block-size: 100dvh;
        padding-block-end: var(--size-8);
        place-content: center;
        text-align: center;

        #target-word {
          font-size: var(--font-size-8);
          align-self: center;
        }

        & footer {
          & p {
            color: var(--text-2);
            text-wrap: balance;
          }
        }
        .footer-content {
          max-width: 800px;
          margin: auto;
          text-align: center;
           color: var(--text-2);
        }
      }
    }

    @layer components {
      .Card {
        display: grid;
        background-color: var(--surface-1);
        color: var(--text-1);
        gap: calc(var(--gap) / 2);
        align-content: start;

        text-decoration: none;
        transition: background-color 0.2s var(--ease-2);
        padding: var(--size-8);
        border-radius: var(--radius-3);

        & h2 {
          font-size: var(--font-size-5);
        }

        & ul {
          padding: var(--size-3);
        }

        & i {
          font-size: var(--font-size-5);

          /* VisBug ♥ */
          margin-inline-start: var(--size-00);
        }

        & li {
          text-wrap: balance;
        }

        &:hover {
          background-color: #487B8C;
        }
      }

      .Button,
      .LinkButton {
        display: inline-flex;
        text-transform: uppercase;
        font-weight: 700;
        text-decoration: none;

        color: var(--text-1);
        padding: calc(var(--size-2) + var(--border-size-1)) calc(var(--size-2) + var(--border-size-2));

        padding: calc(var(--size-2) + var(--border-size-1)) calc(var(--size-4) + var(--border-size-2));

        font-size: 1.25rem;
        min-inline-size: 13ch;
        transition: 0.2s ease;
        background-color: var(--surface-2);
        border: 1px solid var(--surface-2);

        &.Primary {
          border-color: var(--brand-1);
          background-color: var(--brand-1);

          &:hover {
            border-color: var(--text-1);
            background-color: var(--text-1);
            color: var(--brand-1);
          }
        }

        &.secondary {
          border-color: var(--text-1);
          background-color: var(--text-1);
          color: var(--brand-1);

          &:hover {
            border-color: var(--brand-1);
            background-color: var(--brand-1);
            color: var(--text-1);
          }
        }
      }

      .NavLink {
        color: var(--text-1);
        font-size: var(--font-size-3);
        font-weight: var(--font-weight-5);
        text-decoration-color: currentColor;
        text-decoration-thickness: var(--border-size-2);
        text-underline-offset: 0.5ex;
        text-decoration: none;
        transition: color 200ms ease;

        /* &:hover {
      text-decoration: underline;
    } */

        &:hover {
          color: var(--brand-1);
        }

        &:target {
          color: var(--brand-1);
        }

        @media (width < 768px) {
          font-size: var(--font-size-5);
          padding-inline: var(--size-4);
        }
      }

      .Logo {
        font-family: 'Bebas Neue', sans-serif;
        font-weight: var(--font-weight-9);

        font-size: 4.5rem;
        font-size: calc(var(--font-size-8) + var(--font-size-1));
      }

      .NavButton {
        padding: var(--size-2);
        background-color: var(--surface-1);

        >i {
          font-size: var(--font-size-6);
        }
      }
    }

    @media (prefers-reduced-motion: no-preference) {
      @layer animation.scroll-driven {
        .showcase {
          view-timeline: --showcase;

          >img {
            animation: fade-overlay linear both;
            animation-timeline: --showcase;
            animation-range: 20% 40%;
            transform-origin: top center;
          }
        }

        .schedule {
          animation: to-white linear both;
          animation-timeline: view();
          animation-range-start: 4%;
          animation-range-end: 10%;
        }

        .cards {
          animation: to-brand linear both;
          animation-timeline: view();
          animation-range-start: 4%;
          animation-range-end: 16%;
        }

        .about {
          background-color: #1D8CB7;
          animation: to-black linear both;
          animation-timeline: view();
          animation-range-start: 4%;
          animation-range-end: 16%;
        }

        .about2 {
          background-color: #1D8CB7;
          animation: to-black linear both;
          animation-timeline: view();
          animation-range-start: 4%;
          animation-range-end: 16%;
        }

        @keyframes fade-overlay {
          to {
            scale: 3.5;
            opacity: 0;
          }
        }

        /* Avoiding custom properties to ensure the animation remains on the compositor for optimal performance. */
        @keyframes to-brand {
          to {
            background-color: #2DA9E3;
          }
        }

        @keyframes to-white {
          to {
            background-color: white;
          }
        }

        @keyframes to-black {
          to {
            background-color: black;
          }
        }
      }

      @layer animation.reveal {
        .subject {
          /* opacity: 0; */
        }

        .reveal-up {
          animation: fade-in 660ms ease forwards,
            slide-up 1000ms cubic-bezier(0, 0, 0.1, 1) forwards;
        }

        .reveal-down {
          animation: fade-in 660ms ease forwards,
            slide-down 1000ms cubic-bezier(0, 0, 0.1, 1) forwards;
        }

        @keyframes fade-in {
          to {
            opacity: 1;
          }
        }

        @keyframes slide-up {
          from {
            transform: translateY(-100px);
          }
        }

        @keyframes slide-down {
          from {
            transform: translateY(100px);
          }
        }
      }

      @layer animation.navbar {
        .Navbar {
          transition: transform 0.4s var(--ease-2);

          [scroll-direction='down'] & {
            transform: translateY(-200%);
          }
        }
      }

      @layer animation.scroll-driven.active-link {
        body {
          timeline-scope: --home, --schedules, --plans, --about;
        }

        #home {
          view-timeline-name: --home;
        }

        #schedules {
          view-timeline-name: --schedules;
        }

        #plans {
          view-timeline-name: --plans;
        }

        #about {
          view-timeline-name: --about;
        }

        #about2 {
          view-timeline-name: --about;
        }

        .NavLink[href='#'] {
          animation-timeline: --home;
        }

        .NavLink[href='#schedules'] {
          animation-timeline: --schedules;
        }

        .NavLink[href='#plans'] {
          animation-timeline: --plans;
        }

        .NavLink[href='#about'] {
          animation-timeline: --about;
        }

        .NavLink {
          animation: highlight linear both;
        }

        @keyframes highlight {

          0%,
          100% {
            color: white;
          }

          30%,
          70% {
            color: #2DA9E3;
          }
        }
      }

      @layer animation.navbar.sm-screen {
        body:has(.menu.open) {
          overflow-y: hidden;
        }

        @media (prefers-reduced-motion: no-preference) {
          @media (width < 768px) {
            .menu {
              view-transition-name: menu;
            }

            ::view-transition-old(menu) {
              animation: var(--animation-slide-out-right);
            }

            ::view-transition-new(menu) {
              animation: var(--animation-slide-in-left);
            }
          }
        }
      }
    }

    @supports not (animation-timeline: scroll()) {
      .schedule {
        background-color: white;
      }

      .cards {
        background-color: var(--brand-1);
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .schedule {
        background-color: white;
      }

      .showcase {
        animation: to-white linear both;
          animation-timeline: view();
          animation-range-start: 4%;
          animation-range-end: 10%;
      }

      .cards {
        background-color: var(--brand-1);
      }
    }
    .about .footer-content a {
  color: #0C4560; /* Cor do texto normal */
  text-decoration: none; /* Removendo sublinhado padrão */
}
 
.about .footer-content a:hover {
  color: #2DA9E3; /* Cor ao passar o mouse */
}
  </style>
</head>

<body>
  <nav class="Navbar">
    <div class="container">
      <div class="Logo">ManataskFY</div>

      <div id="menu" class="menu">
        <header class="inline">
          <div class="Logo">vigor.</div>
          <button id="closeMenuBtn" title="Close Menu" aria-label="Close Menu" class="NavButton">
            <i class="ri-close-line"></i>
          </button>
        </header>

        <a href="#" class="NavLink">Inicio</a>
        <a href="#schedules" class="NavLink">Gerenciador</a>
        <a href="#about" class="NavLink">Slogan</a>
      </div>

      <button id="openMenuBtn" title="Open Menu" aria-label="Open Menu" class="NavButton">
        <i class="ri-menu-line"></i>
      </button>
    </div>
  </nav>
  <main>
    <section id="home">
      <div class="hero">
        <div class="visual">
          <picture>
            <source srcset="
                 https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/images/hero.webp
                " type="image/avif" media="(width > 1024px)" />
            <source srcset="
                  https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/images/hero-mobile.avif
                " type="image/avif" />
            <source srcset="
                  https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/images/hero.webp
                " media="(width > 1024px)" type="image/webp" />
            <img
              src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/images/hero-mobile.webp"
              alt="fitness" />
          </picture>
        </div>

        <div class="content">
          <h1>Bem vindo ao MANATASKFY</h1>
          <div class="wrapper">
            <a href="../TelaPrincipal/static/login.php" class="LinkButton Primary"> Entrar/cadastrar </a>
          </div>
        </div>
      </div>

      <div id="discover" class="fold">
        <div class="subject">
          <p>


            A cada amanhecer, surge uma nova página em branco esperando para ser preenchida com suas conquistas.
            <span style="color: var(--brand-1)">Abrace a organização, sinta a progressão e transforme seus sonhos em
              realidade,</span>
              um passo de cada vez, com um gerenciamento de tarefas eficaz.
          </p>
        </div>
      </div>
    </section>

    <section id="schedules" class="schedule">
      <div class="subject">
        <div class="container">
          <div class="table-wrapper">
            <h2>Exemplo</h2>
            <h2>Horário semanal</h2>
            <table>
              <tr>
                <th>Dia</th>
                <th>Exercício agendado</th>
                <th>Tempo</th>
              </tr>
              <tr>
                <td>Segunda-feira</td>
                <td>Correndo</td>
                <td>7:00 AM</td>
              </tr>
              <tr>
                <td>Terça-feira</td>
                <td>Natação</td>
                <td>7:00 AM</td>
              </tr>
              <tr>
                <td>Quarta-feira</td>
                <td>Ciclismo</td>
                <td>6:30 AM</td>
              </tr>
              <tr>
                <td>Quinta-feira</td>
                <td>Yoga</td>
                <td>6:00 AM</td>
              </tr>
              <tr>
                <td>Sexta-feira</td>
                <td>Treinamento com pesos</td>
                <td>8:00 AM</td>
              </tr>
            </table>
          </div>
          <div class="table-wrapper">
            <h2>Exemplo</h2>
            <h2>Últimas 5 anotações</h2>
            <table>
              <tr>
                <th>anotação</th>
                <th>tempo de atividade</th>
              </tr>
              <tr>
                <td>Correr</td>
                <td>30 min</td>
              </tr>
              <tr>
                <td>Natação</td>
                <td>45 min</td>
              </tr>
              <tr>
                <td>Ciclismo</td>
                <td>60 min</td>
              </tr>
              <tr>
                <td>Yoga</td>
                <td>40 min</td>
              </tr>
              <tr>
                <td>Treinamento com pesos</td>
                <td>50 min</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="showcase">
        <video autoplay loop muted
          poster="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/images/poster.webp"
          role="none">
          <source
            src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/demo.mp4"
            type="video/mp4" />
        </video>
        <img
          src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/landing-page-with-scroll-driven/assets/"
          alt="ManataskFY" />
      </div>
    </section>

    <section id="plans" class="cards">
      <div class="subject">
        <div class="container">
          <a href="#" class="Card">
            <i class="ri-trophy-line"></i>
            <div>
              <h2>Tenha suas metas</h2>
              <ul>
                <li>Anote cada metas conosco</li>
                <li>Atividade de suporte 24h</li>
                <li>Compartilhe com amigos</li>
              </ul>
            </div>
          </a>
          <a href="#" class="Card">
            <i class="ri-flag-2-line"></i>
            <div>
              <h2>Desafios</h2>
              <ul>
                <li>Conclua as metas com desafios</li>
                <li>Siga as metas e ganhe brindes</li>
                <li>Swim 20km in a Month</li>
              </ul>
            </div>
          </a>
          <a href="#" class="Card">
            <i class="ri-team-line"></i>
            <div>
              <h2>Metas com amigos</h2>
              <ul>
                <li>Desafie amigos a bater metas</li>
                <li>Dispute o primeiro lugar em metas e receba promoções</li>
                <li>Faça combo familia com seus amigos e receba ofertas e promoções</li>
              </ul>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <div id="target-word">"Transforme planos em realidade, um passo de cada vez, com nosso<br>
        gerenciador de tarefas ao seu alcance!"</div>
      <footer class="centro">
      <div class="footer-content">
      <p>Participantes do projeto:</p>
      <a href="https://www.instagram.com/guhss.4/">Gustavo Henrique</a><br>
      <a href="https://www.instagram.com/f4elz_/">Rafael Rezende</a><br>
      <a href="https://www.instagram.com/ju___.kim/">Júlia Rosa</a><br>
      <a href="https://www.instagram.com/__caua012/">Cauã Murilo</a><br>
      <a href="https://www.instagram.com/_.lucas012/">Lucas Araujo</a><br>
    </div>
      </footer>
    </section>
  </main>

</body>