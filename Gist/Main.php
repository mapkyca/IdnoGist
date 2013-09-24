<?php

    namespace IdnoPlugins\Gist {
        class Main extends \Idno\Common\Plugin {
            function registerPages() {                
                \Idno\Core\site()->template()->extendTemplate('entity/content/embed','gist/embed');
            }
        }
    }
