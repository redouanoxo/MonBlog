<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE) {
    echo "Bonjour, " . $_SESSION['username'] . " Je vous souhaite la bienvenue sur ce modeste blog.";
    echo ' Tu veux <a href="index.php?action=logout">Se déconnecter?</a>';
} else {
    echo 'Je vous souhaite la bienvenue sur ce modeste blog. Tu veux<a href="login.php">
            <button class="login-btn">Se connecter</button>
        </a>?';
}
