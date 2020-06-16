<?php

$uri = "$_SERVER[REQUEST_URI]";

$getParamPos = strpos($uri, '?');

if ($getParamPos != null) $path = substr($uri, 0, $getParamPos);
else $path = $uri;

?>
<select onchange="location = this.value;">
    <option value=<?= $path ?>>Default</option>
    <option value=<?= $path . "?lang=english" ?>>English</option>
    <option value=<?= $path . "?lang=hungarian" ?>>Hungarian</option>
</select>