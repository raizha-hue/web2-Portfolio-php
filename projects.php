<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Raizha I. Ajul</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">🌙 Dark</button>
    </div>
    <h1>Raizha I. Ajul</h1>
    <h2>My Projects</h2>
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

    <section>
        <h2>My Projects</h2>

        <article>
            <h3>HanapGawa App</h3>
            <p>
                HanapGawa is a project that aims to help users find
                available services and workers.
            </p>
        </article>

        <article>
            <h3>GraBee App</h3>
            <p>
                GraBee is a food delivery application designed to
                connect customers, vendors, and riders.
            </p>
        </article>

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