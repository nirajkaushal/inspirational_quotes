<?php

elgg_register_event_handler('init', 'system', 'inspirationalquote_init'); 

function inspirationalquote_init() {        
    elgg_register_widget_type('inspirational_quotes', 'Inspirational Quote', 'The "Inspirational Quote" widget');
}
       
?>
