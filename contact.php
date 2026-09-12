<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Raizha I. Ajul</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">🌙 Dark</button>
    </div>
    <h1>Raizha I. Ajul</h1>
    <h2>Contact Me</h2>
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
        <h2>Contact Me</h2>

        <p>If you would like to get in touch with me, you can reach me through the following:</p>

        <article>
            <h3>Email</h3>
            <p>raizhaajul111@gmail.com</p>
        </article>

        <article>
            <h3>Phone</h3>
            <p>09455394903</p>
        </article>

        <article>
            <h3>Facebook</h3>
            <p>Raizha Ibno Ajul</p>
        </article>

        <article>
            <h3>Location</h3>
            <p>Bongao, Tawi-Tawi, Philippines</p>
        </article>

        <p>Thank you for visiting my portfolio!</p>

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