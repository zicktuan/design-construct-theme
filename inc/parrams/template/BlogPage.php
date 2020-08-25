<?php

    class BlogPage extends PageTemplateAbstract
    {

        public function __construct($pageID)
        {
            parent::__construct($pageID);
        }

        public function getSettingTemplate(){
            global $myplugin;
//            $this->pageSettingId = $myplugin->tour()->settingTour->getListTourId();
        }

        public function loadTemplate()
        {
//            if ($this->pageSettingId == $this->pageID) {
//                get_template_part('templates/archive', 'tour');
//            }
        }
    }
