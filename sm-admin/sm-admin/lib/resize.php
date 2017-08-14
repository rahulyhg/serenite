<?php
// Function for resizing jpg, gif, or png image files
function ak_img_resize($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
  if($w_orig > 900 || $h_orig > 700)
  {
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio;
    } else {
           $h = $w / $scale_ratio;
    }
    $imgg = "";
    $ext = strtolower($ext);
    if ($ext == "gif"){ 
      $imgg = imagecreatefromgif($target);
    } else if($ext =="png"){ 
      $imgg = imagecreatefrompng($target);
    } else { 
      $imgg = imagecreatefromjpeg($target);
    }
    $tci = imagecreatetruecolor($w, $h);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $imgg, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    imagejpeg($tci, $newcopy, 100);
}
else
{
    $imgg = "";
    $ext = strtolower($ext);
    if ($ext == "gif"){ 
      $imgg = imagecreatefromgif($target);
    } else if($ext =="png"){ 
      $imgg = imagecreatefrompng($target);
    } else { 
      $imgg = imagecreatefromjpeg($target);
    }
    $tci = imagecreatetruecolor($w_orig, $h_orig);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $imgg, 0, 0, 0, 0, $w_orig, $h_orig, $w_orig, $h_orig);
    imagejpeg($tci, $newcopy, 100);
}
}
?>
