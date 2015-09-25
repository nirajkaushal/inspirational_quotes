<?php

elgg_register_event_handler('init', 'system', 'inspirationalquote_init'); 

function inspirationalquote_init() {        
    elgg_register_widget_type('inspirationalquotes', 'Inspirational Quote', 'The "Inspirational Quote" widget');
}
       
?>
