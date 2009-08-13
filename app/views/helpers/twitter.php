<?php
class TwitterHelper extends AppHelper {
  /**
   * getPermlink
   *
   * @param  array $entry
   * @return string
   */
  public function getPermlink($entry) {
    $tmp = explode(" ", Set::extract('Author.name', $entry));
    $screenName = $tmp[0];

    if (preg_match("/([0-9]+)$/D", Set::extract('id', $entry), $m)) {
      return sprintf("http://twitter.com/%s/status/%s", $screenName, $m[1]);
    }
  }

  /**
   * getUpdated
   *
   * @param  array $entry
   * @param  string $format
   * @return string
   */
  public function getUpdated($entry, $format = 'Y/m/d H:i:s') {
    $time = strtotime(Set::extract('updated', $entry));
    return date($format, $time);
  }
}
