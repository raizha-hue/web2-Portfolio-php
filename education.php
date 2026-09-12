<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education - Raizha I. Ajul</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Toggle dark mode">🌙 Dark</button>
    </div>
    <h1>Raizha I. Ajul</h1>
    <h2>Education</h2>
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
        <h2>My Educational Background</h2>

        <table border="1">
            <tr>
                <th>Level</th>
                <th>School</th>
                <th>Program</th>
            </tr>

            <tr>
                <td>College</td>
                <td>Mindanao State University - Tawi-Tawi College of Technology and Oceanography</td>
                <td>Bachelor of Science in Information Technology</td>
            </tr>

            <tr>
                <td>Senior High School</td>
                <td>Winzelle International College - Zamboanga City</td>
                <td>Home Economics</td>
            </tr>

            <tr>
                <td>Elementary School</td>
                <td>John Spirig Sr. Memorial Elementary School</td>
                <td>Zamboanga City</td>
            </tr>


        </table>

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