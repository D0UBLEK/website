<?php
if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && $_COOKIE['username'] == 'Michael' && $_COOKIE['password'] === str_replace(array("\n", "\r", " "), '', file_get_contents('creds.txt'))) {
  $size = array(
    "width" => 32,
    "height" => 32
  );

  $dir = "../blog/uploads/";

  if (isset($_FILES['upload']) && $_FILES['upload']['error'] === 0) {
      $check = getimagesize($_FILES["upload"]["tmp_name"]);

      $file_extension = pathinfo($_FILES["upload"]["name"], PATHINFO_EXTENSION);

      if (!file_exists($_FILES["upload"]["tmp_name"])) {
          $response = array(
              "type" => "error",
              "message" => "Choose image file to upload."
          );
      }
      else if ($file_extension !== "png") {
          $response = array(
              "type" => "error",
              "message" => "Upload valid images. Only PNG and JPEG are allowed."
          );
      }
      else if (($_FILES["upload"]["size"] > 2000000)) {
          $response = array(
              "type" => "error",
              "message" => "Image size exceeds 2MB"
          );
      }
      else if ($check['mime'] !== "image/png")
      {
        $response = array(
            "type" => "error",
            "message" => "Invalid mimetype"
        );
      }
      else {
          $target = imagecreatetruecolor($size['width'], $size['height']);

          imagecopyresampled($target, imagecreatefromstring(file_get_contents($_FILES["upload"]["tmp_name"])), 0, 0, 0, 0, $size['width'], $size['height'], $check[0], $check[1]);

          if (imagepng($target, $dir.basename($_FILES["upload"]["name"]))) {
              $response = array(
                  "type" => "success",
                  "message" => "Image uploaded successfully."
              );
          } else {
              $response = array(
                  "type" => "error",
                  "message" => "Problem in uploading image files."
              );
          }
      }
  }
  else {
    $response = array(
        "type" => "error",
        "message" => "No file provided."
    );
  }

  echo $response['type'].": ".$response['message'];
}
else {
  echo 'Invalid Credentials.';
}
?>
