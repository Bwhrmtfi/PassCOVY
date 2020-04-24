<?php

const FILE_PATH = '../../uploads/';

function upfile($file, $fileName) {
    // Upload file
    $newName = $fileName;
    $uploadPath = FILE_PATH . $newName;
    move_uploaded_file($file['tmp_name'], $uploadPath);
}
