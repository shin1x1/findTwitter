  <div class="post">
    <h3><?php echo $html->link($v['Author']['name'], $v['Author']['uri']); ?></h3>
    <p>
      <?php echo $html->link($html->image($v['Link']['href'], array('width' => 48, 'hegiht' => 48, 'class' => 'img1')), $v['Author']['uri'], array('escape' => false)); ?>
      <?php echo $v['content']['value']; ?>
    </p>
    <p class="file">
      <small>
      Posted at <?php echo h($twitter->getUpdated($v)); ?> | 
      <?php echo $html->link('permlink', $twitter->getPermlink($v)); ?> | 
      <?php echo $v['source']; ?>
      </small>
    </p>
  </div>

