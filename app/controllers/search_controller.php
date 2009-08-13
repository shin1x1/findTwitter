<?php
class SearchController extends AppController {
  public $uses = array('Twitter');
  public $helpers = array('Twitter');

  /**
   * @cakeAction
   */
  public function index() {
    $this->paginate['conditions'] = array(
      'q' => Set::extract('url.q', $this->params),
      'lang' => Set::extract('url.lang', $this->params),
    );

    if (empty($this->paginate['conditions']['lang']) && defined('TWITTER_LANG')) {
      $this->paginate['conditions']['lang'] = TWITTER_LANG;
    }

    if ($this->paginate['conditions']['q']) {
      $data = $this->paginate($this->Twitter);
    } else {
      $data = array();
    }

    $this->set('data', $data);
    $this->set('q', Set::extract('q', $this->params['url']));
    $this->set('title', 'findTwitter');
  }
}
