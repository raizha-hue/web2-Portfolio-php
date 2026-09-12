<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites - Raizha I. Ajul</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">🌙 Dark</button>
    </div>
    <h1>Raizha I. Ajul</h1>
    <p>My Favorites</p>
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
        <h2>My Favorites</h2>

        <article>
            <h3>Movies</h3>
            <figure>
                <img src="images/movie.jpg" alt="Movie">
                <figcaption>I enjoy watching movies in my free time.</figcaption>
            </figure>
        </article>

        <article>
            <h3>Food</h3>
            <figure>
                <img src="images/food.jpg" alt="Favorite Food">
                <figcaption>Food is one of my favorite things to enjoy.</figcaption>
            </figure>
        </article>

        <article>
            <h3>Drinks</h3>
            <figure>
                <img src="images/coffee.jpg" alt="Coffee">
                <figcaption>My favorite drink is coffee.</figcaption>
            </figure>
        </article>

        <article>
            <h3>Color</h3>
            <figure>
                <img src="images/purple.jpg" alt="Purple Color">
                <figcaption>My favorite color is purple.</figcaption>
            </figure>
        </article>

        <article>
            <h3>Animals</h3>
            <figure>
                <img src="images/cat.jpg" alt="Cat">
                <figcaption>I love cute animals, especially cats.</figcaption>
            </figure>
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

