<style>
    
</style>

<?php

//vanilla code
/*
foreach (getSites() as $site) {
    echo $site . "<br>";
    foreach (getModules($site) as $module) {
        echo "-----" . $module[0] . "<br>";
        foreach (getEntries('english',$module[0]) as $entry) {
            echo $entry[0] . "<br>";
        }
    }
}
*/

require('functions/getSites.php');
require('functions/getModules.php');
require('functions/getEntries.php');
require('views/partials/languageSelect.php');

if($_GET['lang'] == null)
{
    $lang = 'english';
} else $lang = $_GET['lang'];

?>

<?php foreach (getSites() as $site): ?>
    <table>
    <?=$site?>
    <?php foreach (getModules($site) as $module): ?>
    <?php foreach(getEntries($lang,$module[0]) as $entry): ?>
    <tr>
        <th><?=$module[0]?></th>
        <th>
            <form>
                <input type="text" value="<?=$entry[0]?>">
            </form>
        </th>
    </tr>
    <?php endforeach; ?>
    <?php endforeach; ?>
</table>
<?php endforeach; ?>