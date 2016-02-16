<?php
/**
 * @file
 * Template file.
 *
 * @param $enabled  true or false.
 * @param $link  link href.
 * @param $target  link target.
 * @param $class  array of classes to apply to anchor tag.
 * @param $align  left or right.
 * @param $top  distance from the top; include unit.
 * @param $image  image href.
 * @param $alt  image alt text.
 * @param $deny  paths to hide.
 * @param $allow  paths to show.
 * // Computed from image.
 * @param $height  image height in pixels.
 * @param $width  image width in pixels.
 */
?>
<?php if ($enabled): ?>
<div id='feedback_simple'>
<!--
  <a
    href='<?php print $link ?>'
    target='<?php print $target ?>'
    class='feedback_simple-<?php print $align ?> <?php print implode(' ', $class) ?>'
    style='top: <?php print $top ?>; height: 187px; width: 48px;'>
      <img
        alt='<?php print $alt ?>'
        src='/sites/all/modules/feedback_simple/asklibrary-btn-blue.png'
      />
  </a>
-->

  <a
    href='<?php print $link ?>'
    target='<?php print $target ?>'
    class='side-tab-feedback_simple'
    style='top: 32%;'>
	    ASK LIBRARIAN
  </a>
</div>
<?php endif;
