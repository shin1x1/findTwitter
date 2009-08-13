<div id="search" class="search">
  <?php echo $form->create(false, array('action' => 'index', 'type' => 'get')); ?>
  $Model->findTwitter(
  <input type="text" name="q" value="<?php echo h($q); ?>" class="input_q" size="12" />
  <?php echo $form->submit(__('search', true), array('div' => false)); ?>
  );
  <?php echo $form->end(null); ?>
</div>

<?php if (!empty($data['Feed']['Entry'])): ?>

<div class="autopagerize_page_element">
<?php if (array_key_exists(0, $data['Feed']['Entry'])): ?>
  <?php foreach ($data['Feed']['Entry'] as $v): ?>
    <?php echo $this->element('entry', compact('v')); ?>
  <?php endforeach; ?>
<?php else: ?>
    <?php echo $this->element('entry', array('v' => $data['Feed']['Entry'])); ?>
<?php endif; ?>
</div>

<div class="pager">
<?php echo $paginator->prev('<< '.__('prev', true), array('url' => array('controller' => 'search', 'action' => 'index', '?' => array('q' => $q)), 'rel' => 'prev', 'class' => 'prev'));?>&nbsp;
<?php echo $paginator->next(__('next', true).' >>', array('url' => array('controller' => 'search', 'action' => 'index', '?' => array('q' => $q)), 'rel' => 'next', 'class' => 'next'));?>&nbsp;
</div>

<?php endif; ?>
