<?php

/*
 * All the PHP files the website uses as utilities 
 */
$php_deps = [
        "../navbar.php",
        "../header.php",
        "../footer.php"
];

/*
 * All the resource files (images, CSS, etc) to make the website usable
 * (i.e. make it look like it was made before 2000) 
 */
$res_deps = [
        "../css",
        "../fonts",
        "../js",
        "../img",
        "../webfonts",
        "../files",
        "../favicon.ico"
];

/*
 * Function that copies directories
 */
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                if( copy($src . '/' . $file,$dst . '/' . $file) )
                {
                    echo nl2br("Dependency: " . $src . '/' . $file . " copied successfully!\r\n");
                } 
            } 
        } 
    } 
    closedir($dir); 
} 

/*
 * Function to copy php file dependencies to the bin/folder so they can be
 * linked to the original php files for HTML generation 
 */
function copy_php_dependencies()
{
    global $php_deps;

    foreach($php_deps as $d)
    {
        if( copy($d, "./" . basename($d)) )
        {
            echo nl2br("Dependency: " . $d . " copied successfully!\r\n");
        }
    }
}

/*
 * Function that copies resources from the site to the build folder
 * mainly for previewing purposes 
 */
function copy_res_dependencies()
{
    global $res_deps;

    foreach($res_deps as $d)
    {
        if ( is_dir($d) ) { 
            recurse_copy($d, "../build/" . basename($d)); 
        }
        else if( copy($d, "../build/" . basename($d)) )
        {
            echo nl2br("Dependency: " . $d . " copied successfully!\r\n");
        }
    }
}

/*
 * Given a php file, convert it to an HTML static page
 */
function build_html_single_file($file, $filename)
{
    ob_start();
    require_once($file);
    $code_string = ob_get_clean();

    //Replace all the *.php references with *.html
    $code_string = str_replace(".php", ".html", $code_string);

    file_put_contents('../build/'.$filename.'.html', $code_string);

    echo nl2br("****************" . $filename . "******************\r\n");
}

/*
 * Main Function 
 */
function build_site()
{
    //Create build directory if it doesn't exist
    $path = pathinfo($s2);
    if (!file_exists("../build")) {
        mkdir("../build", 0777, true);
    }   

    //Copy over dependencies first
    //copy_php_dependencies();
    copy_res_dependencies();

    global $php_deps;

    $files = [];
    $names = [];
    foreach(glob("../*.php") as $f)
    {
        if(!in_array($f, $php_deps))
        {
            $files[] = $f;
            $names[] = basename($f, ".php");
        }
    }

    for($i = 0; $i < count($files); $i++)
    {
        build_html_single_file($files[$i], $names[$i]);
    }

    echo nl2br("Done!\r\n");
}

/*
 * This actually gets called first.
 * Calls the main function to build the site to static pages
 */
build_site();

?>

