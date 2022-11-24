<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adriana Beatriz</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/acordeon.css">
    <link rel="stylesheet" href="/assets/css/languages.css">
    <link rel="stylesheet" href="/assets/css/portfolio.css">
    <link rel="stylesheet" href="/assets/css/skills.css">
    <link rel="stylesheet" href="/assets/css/education.css">
</head>

<body class="body">

    <main class="main">
        <header class="header">

            <img src="assets/img/footo.png" alt="foto de Adriana" class="photo">

            <h1 class="title">
                Olá, eu sou Adriana Beatriz
            </h1>

            <div class="information">
                <p class="job">
                    <a href="https://www.linkedin.com/in/adrianabeatriz3/" target="_blank">Front-end Developer</a>
                </p>
                <p class="location">Pernambuco - Brasil</p>
                <P class="phone">
                    <a href="https://wa.me/5581995323044">(81) 9 9532-3044</a>
                </P>
                <p class="email">
                    <a href="malito:adrianabeatriiz900@gmail.com">adrianabeatriiz900@gmail.com</a>
                </p>
            </div>

        </header>

        <section class="acordeon">
            <button class="trigger" type="button">
                <h2>Educação</h2>
            </button>

            <div class="content">
                <ul class="education">

                    <li>
                        <h3 class="title">Formação Acadêmica</h3>
                    </li>

                    <li>
                        <p>Sistemas de Informação - Universidade Federal Rural de Pernambuco</p>
                        <p class="period">Out 2022 - Out 2026</p>
                    </li>

                    <li>
                        <h3 class="title">Cursos Extracurriculares em Desenvolvimento de Sistemas</h3>
                    </li>

                    <li>
                        <p>Bootcamp Orange Tech + | Front-end | Digital Innovation One - </br> JavaScript, HTML, CSS, TypeScript e React. </p>
                        <p class="period">2022</p>
                    </li>

                    <li>
                        <p>HTML, CSS e JavaScript - Alura
                        <p>
                        <p class="period">2022</p>
                    </li>

                </ul>
            </div>
        </section>

        <section class="acordeon">

            <button class="trigger" type="button">
                <h2>Projetos</h2>
            </button>

            <div class="content">
                <ul class="portfolio">
                    <li>
                        <span class="title github">Rede Social</span>
                        <a href="https://github.com/driica/redeSocial"
                            target="_blank">https://github.com/driica/redeSocial</a>
                    </li>
                    <li>
                        <span class="title github">Fast Food</span>
                        <a href="https://github.com/driica/fastfood"
                            target="_blank">https://github.com/driica/fastfood</a>
                    </li>
                    <li>
                        <span class="title github">Pizza</span>
                        <a href="https://github.com/driica/pizza"
                            target="_blank">https://github.com/driica/pizza</a>
                    </li>
                    <li>
                        <span class="title github">E-commerce</span>
                        <a href="https://github.com/driica/Ecommerce"
                            target="_blank">https://github.com/driica/Ecommerce</a>
                    </li>

                </ul>
            </div>

        </section>

        <section class="acordeon">
            <button class="trigger" type="button">
                <h2>Skills</h2>
            </button>

            <div class="content">
                <div class="skills">
                    <section class="tools">
                        <h3>Habilidades Profissionais:</h3>
                        <ul>
                            <li>
                                <img src="./assets/img/icons/languages/html5icon.svg" alt="html5" title="html5">
                            </li>
                            <li>
                                <img src="./assets/img/icons/languages/css3icon.svg" alt="css3" title="css3">
                            </li>
                            <li>
                                <img src="./assets/img/icons/languages/jsicon.svg" alt="js" title="js">
                            </li>
                            <li>
                                <img src="./assets/img/icons/languages/reacticon.svg" alt="react" title="react">
                            </li>
                            <li>
                                <img src="./assets/img/icons/languages/githubicon.svg" alt="github" title="github">
                            </li>
                            <li>
                                <img src="./assets/img/icons/languages/styled-components.svg" alt="Styled components"
                                    title="Styled components">
                            </li>
                            <li>
                                <img src="./assets/img/icons/languages/java.svg" alt="Java"
                                    title="Java">
                            </li>
                        </ul>
                    </section>
                </div>
        </section>


        <section class="acordeon">

            <button class="trigger" type="button">
                <h2>Idiomas</h2>
            </button>

            <div class="content">
                <ul class="languages">
                    <li>Inglês - Intermediário</li>
                </ul>
            </div>
        </section>

    </main>

</body>

<script src="/assets/js/acordeon.js"></script>

</html>