<?php 
    function tachomind_enqueues(){


        //STYLES
        wp_register_style("fontawesome4", get_template_directory_uri()."/assets/fontawesome/css/all.min.css", array(), '5.15.3');
        wp_register_style("style", get_template_directory_uri()."/style.css", array(), '1.0.0');

       
        wp_enqueue_style('fontawesome4');
        wp_enqueue_style('style');
 


        //SCRIPTS
        wp_register_script("aboutjs", get_template_directory_uri().'/assets/js/about.js' , array('jquery'), '1.0.0', true);
        wp_register_script("mainjs", get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true);
        wp_register_script("seojs", get_template_directory_uri().'/assets/js/seo.js' , array('jquery'), '1.0.0', true);
        wp_register_script("digitaljs", get_template_directory_uri().'/assets/js/digital.js' , array('jquery'), '1.0.0', true);
        wp_register_script("ppcjs", get_template_directory_uri().'/assets/js/ppc.js' , array('jquery'), '1.0.0', true);
        wp_register_script("webdevjs", get_template_directory_uri().'/assets/js/web-dev.js' , array('jquery'), '1.0.0', true);

        wp_enqueue_script('aboutjs');
        wp_enqueue_script('mainjs');
        wp_enqueue_script('seojs');
        wp_enqueue_script('digitaljs');
        wp_enqueue_script('ppcjs');
        wp_enqueue_script('web-dev.js');
        


        //Ajax Script
      //To pass the url of the admin-ajax.php to the js file, which will be used for the ajax call
        wp_localize_script('ajax_script', 'adminData', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'home_url' => home_url()
        ));
        wp_enqueue_script('ajax_script');
        
        

    }
    add_action('wp_enqueue_scripts', 'tachomind_enqueues');
?>