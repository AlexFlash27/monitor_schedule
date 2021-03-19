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

$scanned_directory = scandir('img'); //ПОЛУЧАЕМ МАССИВ ПОДПАПОК В КОРНЕВОЙ ПАПКЕ img
$key = array_search(date("d.m"), $scanned_directory); //ПОЛУЧАЕМ НОМЕР ЭЛЕМЕНТА МАССИВА (ПОДПАПКИ) СООТВЕТСТВУЮЩЕГО ТЕКУЩЕЙ ДАТЕ

echo json_encode(getDirContents('img/' . $scanned_directory[$key] . '/'));   
