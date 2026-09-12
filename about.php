
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Raizha I. Ajul</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">🌙 Dark</button>
    </div>
    <h1>Raizha I. Ajul</h1>
    <p>BSIT Student</p>
</header>

<nav>
    <a href="index.php">Home</a> |
    <a href="about.php">About</a> |
    <a href="education.php">Education</a> |
    <a href="skills.php">Skills</a> |
    <a href="projects.php">Projects</a> |
    <a href="favorites.php">Favorites</a> |
    <a href="contact.php">Contact</a>
</nav>

<main>

    <section class="hero">

        <img src="images/profile.png" alt="Raizha I. Ajul" width="250">



<div>

    <p class="welcome">ABOUT ME</p>

    <article>
        <h2>Get to Know Me</h2>

        <p>
            Hello! My name is Raizha I. Ajul. I am a 4th year
            BSIT student who is interested in technology and
            learning new skills.
        </p>

        <p>
            I enjoy exploring web development, database management,
            and other areas of information technology.
        </p>

        <p>
            Outside of academics, I enjoy singing, drawing,
            and watching movies.
        </p>
    </article>

    <article>
        <h2>My Goal</h2>

        <p>
            My goal is to continue improving my technical and
            creative skills and become a knowledgeable and
            responsible IT professional.
        </p>
    </article>

    <article>
    <h2>My Family</h2>

        <p>
            I come from a family of ten siblings. I am the seventh child
            in our family. We are four boys and six girls.
        </p>

        <p>
            Growing up in a big family has taught me the importance of
            understanding, cooperation, and caring for one another.
       </p>
    </article>

</div>


    </section>

</main>



<footer>
    <p>&copy; 2026 Raizha I. Ajul</p>
</footer>

<script>
    const body = document.body;
    const toggleButtons = document.querySelectorAll('.theme-toggle');

    const applyTheme = (theme) => {
        body.setAttribute('data-theme', theme);
        toggleButtons.forEach((button) => {
            const isDark = theme === 'dark';
            button.textContent = isDark ? '☀️ Light' : '🌙 Dark';
            button.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
        });
    };

    const savedTheme = localStorage.getItem('theme');
    const preferredTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    applyTheme(savedTheme || preferredTheme);

    toggleButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const currentTheme = body.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            localStorage.setItem('theme', currentTheme);
            applyTheme(currentTheme);
        });
    });
</script>

</body>
</html>

