<?php
$file_name = $_FILES['upfile']['name'];
$tmp_path = $_FILES['upfile']['tmp_name'];

// 保存先のパスを設定
$upload_path = './upload/';

if (is_uploaded_file($tmp_path)) {
    if (move_uploaded_file($tmp_path, $upload_path . $file_name)) {
        chmod($upload_path . $file_name, 0644);

        echo "ok";
    } else {
        echo "Error:アップロードに失敗しました。";
    }
} else {
    echo "Error:画像が見つかりません。";
}
