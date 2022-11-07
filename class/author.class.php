
<?php
    class Author{
        public $name;

        public function __toString()
        {
            return '' . $this->name . '';
        }
    }
?>