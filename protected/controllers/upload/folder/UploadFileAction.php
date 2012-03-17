<?php
    class UploadFileAction extends CAction {
        public function run() {
            if (!empty($_FILES)) {
                $tempFile = $_FILES['Filedata']['tmp_name'];
                $targetPath = $_SERVER['DOCUMENT_ROOT'] . '/images/gallery/';
                $album = $_GET['newFileName'];

                $ext = substr($_FILES['Filedata']['name'], -3);
                $folder = $album;
                $folderPath = $targetPath . $folder;
                $newFileName = $folder . '.' . $ext;
                $targetFile =  str_replace('//','/',$targetPath) . $newFileName;
                mkdir(str_replace('//','/',$folderPath), 0755, true);
                move_uploaded_file($tempFile,$targetFile);
            }
            echo '1';
        }
    }
