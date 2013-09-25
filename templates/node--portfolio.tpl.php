<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>><div class="node-inner">       

  <div class="node-content-wrapper">            
    
    <div class="node-info">
   
		<?php if (isset($content['field_image'])): ?>
          <?php print render($content['field_image']); ?>
        <?php endif; ?>    
       
        <?php print render($title_prefix); ?>
            
        <?php if (!$page): ?>
          <h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
    
        <?php if ($page): ?>
          <h1 class="title"<?php print $title_attributes; ?>><?php print $title; ?></h1>
        <?php endif; ?>
           
      <?php print render($title_suffix); ?>   
      
      <?php if ($display_submitted): ?>
        <div class="submitted">
            <span class="date"><?php print $date; ?></span>
            <?php print $name; ?>
        </div>
      <?php endif; ?>    
    
    </div>   
    
    <div class="project-info">    
    
	  <?php if (isset($content['field_client'])): ?>
        <?php print render($content['field_client']); ?>
      <?php endif; ?>
      <?php if (isset($content['field_date'])): ?>
        <?php print render($content['field_date']); ?>
      <?php endif; ?>    
      <?php if (isset($content['field_project_link'])): ?>
        <?php print render($content['field_project_link']); ?>
      <?php endif; ?> 
    
    </div>       
        
    <div class="content"<?php print $content_attributes; ?>>
  
	  <?php
      // We hide the comments and links now so that we can render them later.
	  hide($content['field_image']);
      hide($content['comments']);
      hide($content['links']);
	  hide($content['field_tags']);
	  hide($content['field_client']);
      hide($content['field_date']);
	  hide($content['field_project_link']);
      print render($content);
      ?>
    </div>
    
	<?php if (!empty($content['links'])): ?>  
    <nav class="links"><div class="links-inner clearfix">
            <?php print render($content['links']); ?>
    </div></nav>  
    <?php endif; ?>           
    
	<?php if (!empty($content['field_tags']) && !$teaser): ?>  
    <nav class="taxonomy"><div class="taxonomy-inner clearfix">
            <?php print render($content['field_tags']); ?>
    </div></nav>  
    <?php endif; ?>        
    
  </div>

</div></article>

<?php print render($content['comments']); ?> 