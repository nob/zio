<?php
function translate_view()
{
    $CI =& get_instance();

    //Get array of texts and messages for the specific language. 
    $ctlr_name = $CI->router->fetch_class();
    $user_lang = ''; //todo 
    $texts = $CI->lang->load($ctlr_name, $user_lang, TRUE);

    //Get current output HTML.
    $output = $CI->output->get_output();
    
    foreach ($texts as $code => $text) 
    {
        $replace = ($CI->config->item('translating_mode') === TRUE) ? $code : $text; 
        $output = str_replace("%%$code%%", $replace, $output);
    }

    $output = preg_replace('/%%(.+)%%/', '!!! $1: CODE NOT FOUND !!!', $output);

    echo $output;
} 
?>
