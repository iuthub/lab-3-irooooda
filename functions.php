<?php
function size($size)
{
    if ($size >= 1048576)
    {
        return number_format($size / 1048576, 2) . 'MB';
    }
    elseif ($size >= 1024)
    {
        return number_format($size / 1024, 2) . 'KB';
    }
    elseif ($size > 1)
    {
        return $size . 'Bytes';
    }
}

?>
<?php
function ordinarylist($get)
{
    foreach (glob ("songs/*.mp3") AS $mp3)
    {
        $song = basename($mp3);
        $size = filesize($mp3);
        ?>
        <li class="mp3item">
        <?php echo "<a href =$mp3>  $song </a>".size($size) ;

    }
    foreach (glob ("songs/*.txt") AS $txt)
    {
        $sizetxt = filesize($txt);
        $playlist = basename($txt);
        ?>
<li class="playlistitem">
    <?php echo "<a href = $txt >  $playlist </a>".size($sizetxt);

    }
}

?>
        </li>
<?php
function playlistt($playlist, $get)
{
    $playlist = file("songs/".$playlist, FILE_IGNORE_NEW_LINES);

    {

        foreach (glob ("songs/*.txt") AS $txt)
        {
            $size = filesize($txt);

            ?>
<li class="playlistitem">
    <?php echo "<a href = $playlist >  $playlist </a>".size($size);


    }
    }


}


    ?>
</li>
