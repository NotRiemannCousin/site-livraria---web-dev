<?php
    class Publisher{
        public $name;

        public function __toString()
        {
            return '' . $this->name . '';
        }
    }
?>