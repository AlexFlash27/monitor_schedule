<?php
function getDirContents($dir, $relativePath = false)
{
    $fileList = array();
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isDir()) continue;
        $path = $file->getPathname();
        if ($relativePath) {
            $path = str_replace($dir, '', $path);
            $path = ltrim($path, '/\\');
        }
        $fileList[] = $path;
    }
    return $fileList;
}

$scanned_directory = scandir('img/math/'); //ПОЛУЧАЕМ МАССИВ ПОДПАПОК В КОРНЕВОЙ ПАПКЕ math
$key = array_search(date("d.m"), $scanned_directory); //ПОЛУЧАЕМ НОМЕР ЭЛЕМЕНТА МАССИВА (ПОДПАПКИ) СООТВЕТСТВУЮЩЕГО ТЕКУЩЕЙ ДАТЕ

echo json_encode(getDirContents('img/math/' . $scanned_directory[$key] . '/'));

