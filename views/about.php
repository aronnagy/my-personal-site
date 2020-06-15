<?php

require 'partials/head.php';
require 'partials/sidenav.php';
require 'views/partials/languageSelect.php';

require 'core/db/Connection.php';
require 'functions/loadLanguageModule.php';

if (isset($_GET["lang"])) $lang = htmlspecialchars($_GET["lang"]);
else $lang = 'english';

?>
<div class="center">
    <h2><?= loadLanguageModule($lang, 'intro_heading', $db) ?></h2>
    <p><?= loadLanguageModule($lang, 'intro', $db) ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2><?= loadLanguageModule($lang, 'places_heading', $db) ?></h2>
    <p><?= loadLanguageModule($lang, 'places', $db) ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2><?= loadLanguageModule($lang, 'studies_heading', $db) ?></h2>
    <p><?= loadLanguageModule($lang, 'studies', $db) ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2><?= loadLanguageModule($lang, 'languages_heading', $db) ?></h2>
    <p><?= loadLanguageModule($lang, 'languages', $db) ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <p><?= loadLanguageModule($lang, 'contact', $db) ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>
</div>

<?php require 'partials/footer.php'; ?>