<div class="u-page-root"><div class="u-content-layout u-sheet">
          <?php $sidebar_html = theme_sidebar(array(
            'id' => 'primary',
            'template' => <<<WIDGET_TEMPLATE
                <div class="u-block u-block-c6ad-2 u-indent-30">
      <div class="u-block-container u-clearfix">
        <h5 class="u-block-c6ad-3 u-block-header u-text">{block_header}</h5>
        <div class="u-block-c6ad-4 u-block-content u-text">{block_content}</div>
      </div>
    </div>
WIDGET_TEMPLATE
        )); ?> <aside class="u-block-c6ad-1 u-indent-40 u-sidebar">
    <?php if ($sidebar_html) { echo stylingDefaultControls($sidebar_html); } else { ?> <div class="u-block u-block-c6ad-2 u-indent-30">
      <div class="u-block-container u-clearfix">
        <h5 class="u-block-c6ad-3 u-block-header u-text"> Block header </h5>
        <div class="u-block-c6ad-4 u-block-content u-text"> Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. </div>
      </div>
    </div> <?php } ?>
    
    
    <style data-mode="XL"> .u-block-c6ad-1 {flex-basis: auto; width: 250px}
.u-block-c6ad-3 {font-size: 1.125rem; line-height: 2}
.u-block-c6ad-4 {font-size: 0.875rem; line-height: 2}
.u-block-c6ad-6 {font-size: 1.125rem; line-height: 2}
.u-block-c6ad-7 {font-size: 0.875rem; line-height: 2}
.u-block-c6ad-9 {font-size: 1.125rem; line-height: 2}
.u-block-c6ad-10 {font-size: 0.875rem; line-height: 2} </style>
    <style data-mode="LG"></style>
    <style data-mode="MD"></style>
    <style data-mode="SM"></style>
    <style data-mode="XS"></style>
  </aside>
          <div class="u-content">
             