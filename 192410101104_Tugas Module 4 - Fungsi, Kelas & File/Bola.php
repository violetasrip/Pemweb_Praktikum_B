<?php 
    class Bola{
        private $diameter;
        private $volume;
        private $r;
        private $luas;
        private $phi = 3.14;


        public function setR ($option) {
            $this->r = $option;
        }

        public function getR(){
            return $this->r;
        }

        public function getLuas(){
            $luas = 0;
            $this->luas= 4* 3.14* $this->r* $this->r;
            return $this->luas;
        }


        public function getVolume(){
            $volume = 0;
            $this->volume= 4/3* 3.14* $this->r* $this->r* $this->r;
            return $this->volume;
        }

    }
?>