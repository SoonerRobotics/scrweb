<?php

$deps = [
        "../feature.php",
        "../social.php",
        "../navbar.php",
        "../scr-header.php",
        "../newsletter.php",
        "../footer.php"
];

function copy_dependencies()
{
    global $deps;

    foreach($deps as $d)
    {
        if( copy($d, "./".basename($d)) )
        {
            echo "Dependency: " . $d . " copied successfully!<br>";
        }
    }
}

function build_html_single_file($file, $filename)
{
    ob_start();
    require_once($file);
    $code_string = ob_get_clean();

    //Replace all the *.php references with *.html
    $code_string = str_replace(".php", ".html", $code_string);

    file_put_contents('../html_output/'.$filename.'.html', $code_string);

    echo "****************" . $filename . "******************<br>";
}


function build_site()
{
    //Copy over dependencies first
    copy_dependencies();

    global $deps;

    $files = [];
    $names = [];
    foreach(glob("../*.php") as $f)
    {
        if(!in_array($f, $deps))
        {
            $files[] = $f;
            $names[] = basename($f, ".php");
        }
    }

    for($i = 0; $i < count($files); $i++)
    {
        build_html_single_file($files[$i], $names[$i]);
    }

    echo "Done!";
}

build_site();

?>

