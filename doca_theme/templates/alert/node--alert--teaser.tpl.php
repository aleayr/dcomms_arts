<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div
  class="alert-list__item alert <?php print !empty($alert_priority) ? strtolower(trim('alert-priority-' . $alert_priority)) : ''; ?>">
  <div class="alert-list__icon">
    <svg version="1.1" id="alert" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
         y="0px" viewBox="0 0 44.8 27.9" preserveAspectRatio="xMidYMid meet" enable-background="new 0 0 44.8 27.9"
         xml:space="preserve"><g>
        <path d="M39.9,22.8C39.9,22.8,39.9,22.8,39.9,22.8c0-0.1,0-0.2,0-0.2V1c0-0.5-0.4-1-1-1H6.1c-0.5,0-1,0.4-1,1v21.7
		c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1l0,0L39.9,22.8L39.9,22.8z M38.1,21.2H7V2h31.1V21.2z"/>
        <path d="M39.7,23.6H4.8l-4,1.8c-1.4,0.5-1.1,2.4,0.6,2.4h42.3c0.7,0,1.9-1.7,0-2.5L39.7,23.6z"/>
        <path d="M27.4,18.9c0.4,0.4,1,0.5,1.5,0.5c0.5,0,1.1-0.3,1.4-0.7c0.8-0.9,0.7-2.2-0.2-2.9c0,0-7.5-4.9-7.5-4.9
		c0.5-2.1,0.1-3.7-1.2-4.8c-1.2-1.1-2.9-1.4-4.4-0.9l2.7,2.4l-0.5,2.5L16.8,11l-2.7-2.4c-0.3,1.5,0.2,3.2,1.4,4.3
		c1.3,1.2,3.8,0.8,5.4,0.2c0,0,0,0,0,0L27.4,18.9z"/>
      </g></svg>
    <span class="alert-list__icon__name">Alert Service</span>
  </div>

  <div class="<?php print (!empty($alert_priority)) ? "alert-wrapper" : ""; ?>">
    <?php if (!empty($alert_priority)): ?>
      <div class="alert-priority <?php print strtolower(trim('alert-priority-' . $alert_priority)); ?>">
        <?php print t('Alert Priority !priority', array('!priority' => $alert_priority)); ?>
      </div>
    <?php endif; ?>
    <?php print render($content['field_alert_date']); ?>
  </div>
  <h3 class="alert-list__title"><a
      href="<?php print $node_url; ?>"><?php print doca_theme_trim(render($title), 50); ?></a></h3>

  <?php print render($content['body']); ?>

  <?php print doca_theme_read_more_link($node_url, $read_more_text, $external_source); ?>
</div>
