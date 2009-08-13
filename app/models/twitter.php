<?php
App::import('Core', 'HttpSocket');
App::import('Core', 'Xml');

class Twitter extends AppModel {
  const API_SEARCH = 'http://search.twitter.com/search.atom';
  const PAGE_LIMIT = 20;

  /** LANG */
  const LANG_JA = 'ja';

  /**
   * @var string 
   */
  protected $lang = null;

  public $useTable = false;

  /**
   * paginateCount
   *
   * @param  mixed $conditions
   * @param  integer $recursive
   * @param  array $extract
   * @return integer
   */
  public function paginateCount($conditions, $recursive, $extra) {
    // dummy
    return PHP_INT_MAX;
  }

  /**
   * paginate
   *
   * @param  mixed $conditions
   * @param  mixed $fields
   * @param  mixed $order
   * @param  integer $limit
   * @param  integer $page
   * @param  integer $recursive
   * @param  array $extract
   * @return array
   */
  public function paginate($conditions, $fields, $order, $limit, $page, $recursive, $extra) {
    $HttpSocket = new HttpSocket();
    $query = array(
              'q' => Set::extract('q', $conditions),
              'page' => $page,
              'rpp' => $limit,
              'lang' => Set::extract('lang', $conditions),
             );

    $ret = $HttpSocket->get(self::API_SEARCH, $query);

    if ($ret) {
      $Xml = new Xml($ret);
      return $Xml->toArray();
    }

    return array();
  }
}
