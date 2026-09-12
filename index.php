
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizha I. Ajul - Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">Dark</button>
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
            <p class="welcome">WELCOME TO MY PORTFOLIO</p>

            <h2>Hello, I'm Raizha!</h2>

            <p>
                I am a 4th year BSIT student who is interested in
                technology and learning new skills.
            </p>
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

