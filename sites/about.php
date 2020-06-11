<?php 

include('modules/header.php'); 
require_once('modules/navbar.php');
require_once('functions/loadLanguageModule.php');

$lang = 'hungarian';

?>
<div class="center">
    <h2>Hi Guys!</h2>
    <p><?=loadLanguageModule($lang,'intro', $db)?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2>A few words about me</h2>
    <p><?=loadLanguageModule($lang,'places', $db)?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2>Studies</h2>
    <p><?=loadLanguageModule($lang,'studies', $db)?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <h2>Languages</h2>
    <p><?=loadLanguageModule($lang,'languages', $db)?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>

    <p><?=loadLanguageModule($lang,'contact', $db)?></p>
    <p><a href="/aronnagy/?site=main">katt ide</a></p>
</div>

<?php include('modules/footer.php');