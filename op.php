<?php
    interface bar {
        public function setVazn($vazn);

    }
    interface turbo{
        public function setNitro($nitro);

    }

    class kamion implements bar {
       public function setVazn($vazn)
       {
           // TODO: Implement setVazn() method.
       }
    }

    class motor implements turbo {
        public function setNitro($nitro)
        {
            // TODO: Implement setNitro() method.
        }
    }

    $kavir = new motor();
    $kavir->setNitro(30);
