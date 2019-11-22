<?php
/**
 * @var Concrete\Package\QuickTabs\Block\QuickTabs\Controller $controller
 * @var Concrete\Core\Form\Service\Form $form
 * @var string $openclose
 * @var string $semantic
 * @var string $tabTitle
 */

defined('C5_EXECUTE') or die('Access Denied.');

?>
<div class="form-group">
    <?php echo $form->label('openclose', t('Is this the Opening or Closing Block?')); ?>
    <?php echo $form->select('openclose', array('' => '', 'open' => t('Open'), 'close' => t('Close')), $openclose, array('required' => 'required')); ?>
</div>

<div class="form-group<?php echo $openclose === 'close' ? ' hide' : '' ?>">
    <?php echo $form->label('tabTitle', t('Tab Title')); ?>
    <?php echo $form->text('tabTitle', $tabTitle); ?>
</div>

<div class="form-group<?php echo $openclose === 'close' ? ' hide' : '' ?>">
    <?php echo $form->label('semantic', t('Semantic Tag for the Tab Title')); ?>
    <?php echo $form->select('semantic', array('h2' => 'H2', 'h3' => 'H3', 'H4' => 'H4', 'p' => 'Paragraph', 'span' => 'Span'), $semantic); ?>
</div>

<script>
$(document).ready(function() {
    $('#openclose')
        .on('change', function() {
            $('#tabTitle,#semantic').closest('.form-group').toggleClass('hide', this.value === 'close');
        })
        .trigger('change')
    ;
});
</script>