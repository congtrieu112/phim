<?php

/*
  Template Name: dowload file
 */
if (isset($_GET['id']) && is_user_logged_in()) {
  $episode = 0;
  if (isset($_GET['tap'])) {
    $episode = $_GET['tap'];
  }
  $quaty = 360;
  if (isset($_GET['quaty'])) {
    $quaty = $_GET['quaty'];
  }
  $post = get_post($_GET['id']);
  $tap = '';
  if ($episode) {
    $episode++;
    $tap = ' tap ' . $episode;
  }

  $link_drive = get_field('link_video', $_GET['id']);
  $link_drive = explode("\r\n", $link_drive);
  $url = strip_tags($link_drive[$episode]);

  $url = drive_direct_dowload($url, $quaty);

  header('Content-type: video/mp4');
  header('Content-Disposition: attachment; filename="' . $post->post_title . $tap . '.mp4"');
  readfile($url);
}