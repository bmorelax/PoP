<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/
 
class PoP_SimpleProcessorAutomatedEmailsBase extends PoP_ProcessorAutomatedEmailsBase {

    public function get_emails() {
        
        // If there are no recipients, no need to create the content
        if ($recipients = $this->get_recipients()) {
            
            // Emails is an array of arrays, each of which has the following format:
            $item = array(
                'recipients' => $recipients,
                'subject' => $this->get_subject(),
                'content' => $this->get_content(),
            );
            return array($item);
        }
        return array();
    }

    // protected function get_pagesection_settingsid() {
        
    //     return null;
    // }

    // protected function get_block_template() {
        
    //     $page_id = GD_TemplateManager_Utils::get_hierarchy_page_id();
    //     global $gd_template_settingsmanager;
    //     return $gd_template_settingsmanager->get_page_block($page_id);
    // }
    
    protected function get_recipients() {
        
        return array();
    }

    protected function get_subject() {
        
        return '';
    }
    
    // protected function get_content() {

    //     return PoP_ServerSideRendering_Factory::get_instance()->render_block($this->get_pagesection_settingsid(), $this->get_block_template());
    // }
}
