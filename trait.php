<?php

    trait Bg
    {
        public $style;

        function makeBg($color)
        {
            $this->style .= 'background: ' . $color . ';';
        }
    }

    trait Radius
    {
        public $style;

        function makeRadius($px)
        {
            $this->style .= 'border-radius' . $px . "px;";
        }

    }

    trait circle
    {
        public $style;

        function makeRadius()
        {
            $this->style .= "border-radius:50%;";
        }

    }

    trait Border
    {
        public $style;

        function makeBorder($border)
        {
            $this->style .= 'border: ' . $border . ';';
        }

    }

    trait size
    {
        public $style;

        function makeSize($w, $h)
        {
            $this->style .='width: ' . $w .'px;';
            $this->style .='height: ' . $h . 'px;';
        }

    }

    trait margin
    {
        public $style;

        function makeMargin($m){
            $this->style .='margin'.$m.';';
        }

    }

    class Square{
            use Border,Bg,size;

            public function  __construct()
            {
                $this->makeBg('red');
                $this->makeBorder('2px solid black');
                $this->makeSize(220,220);

                echo '<div style="'.$this->style. '"></div>';

            }

    }











