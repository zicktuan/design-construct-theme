<?php

    class PageTemplateInit
    {
        static $getInstance = null;

        public static function getInstance()
        {
            if (!(self::$getInstance instanceof self)) {
                self::$getInstance = new self();
            }
            return self::$getInstance;
        }

        public function incModule() {
            $listHandleTemplate = [
                "PageTemplateAbstract.php",
                "BlogPage.php",
            ];

            foreach ($listHandleTemplate as $value) {
                include get_template_directory() . '/inc/parrams/template/' . $value;
            }
        }

        /**
         * Handle init page for theme
         *
         * @param integer $pageID
         * @return void
         */

        public function Init($pageID) {
            $this->incModule();

            $pageSet[] = new BlogPage($pageID);

            $argsPages = [];

            foreach ( $pageSet as $objectTpl ) {
                $argsPages[] = $objectTpl->pageSettingId;
                print_r($objectTpl);
                if ( $pageID == $objectTpl->pageSettingId ) {
                    echo 31312;die;
                }
            }
        }
    }