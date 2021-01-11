<<<<<<< HEAD
<?php
$link = $_GET["to"];
switch ($link) {
    case "looping":
        $file = "looping-conditional.md";
        break;
    case "string":
        $file = "string.md";
        break;
    case "array-manipul":
        $file = "array-manipulation.md";
        break;
    case "array-req":
        $file = "array-request.md";
        break;
    case "read":
        $file = "read-markdown.md";
        break;
    default:
        header("location: ../index.php");
        break;
}

include_once "parsedown/parsedown.php";
$contents = file_get_contents($file);
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
=======
<?php
$link = $_GET["to"];
switch ($link) {
    case "looping":
        $file = "looping-conditional.md";
        break;
    case "string":
        $file = "string.md";
        break;
    case "array-manipul":
        $file = "array-manipulation.md";
        break;
    case "array-req":
        $file = "array-request.md";
        break;
    case "read":
        $file = "read-markdown.md";
        break;
    default:
        header("location: ../index.php");
        break;
}

include_once "parsedown/parsedown.php";
$contents = file_get_contents($file);
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
>>>>>>> 33b981d5c79213919084d5a10168e970ed4a2203
?>