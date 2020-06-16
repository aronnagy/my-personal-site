<?php

require 'partials/head.php';
require 'partials/sidenav.php';
require 'views/partials/languageSelect.php';

require 'functions/loadLanguageModule.php';

if (isset($_GET["lang"])) $lang = htmlspecialchars($_GET["lang"]);
else $lang = 'english';

?>
<div class="left">
    <h2><?= loadLanguageModule($lang, 'intro_heading') ?></h2>
    <p><?= loadLanguageModule($lang, 'intro') ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2><?= loadLanguageModule($lang, 'places_heading') ?></h2>
    <p><?= loadLanguageModule($lang, 'places') ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2><?= loadLanguageModule($lang, 'studies_heading') ?></h2>
    <p><?= loadLanguageModule($lang, 'studies') ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2><?= loadLanguageModule($lang, 'languages_heading') ?></h2>
    <p><?= loadLanguageModule($lang, 'languages') ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <p><?= loadLanguageModule($lang, 'contact') ?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>
</div>

<?php require 'partials/footer.php'; ?>