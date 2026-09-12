<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Raizha I. Ajul</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">🌙 Dark</button>
    </div>
    <h1>Raizha I. Ajul</h1>
    <h2>My Skills</h2>
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
   
    <article>
        <h3>Singing</h3>
        <p>I enjoy singing during my free time and expressing myself through music.</p>
    </article>

    <article>
        <h3>Drawing</h3>
        <p>I enjoy creating simple drawings and exploring my creativity.</p>
    </article>

    <article>
        <h3>Communication</h3>
        <p>I am continuously improving my communication skills through school and group activities.</p>
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