<?php
    class staticMethod
    {
        public static function staticFunc()
        {
            echo "ini adalah static function method";
        }
    }
    staticMethod :: staticFunc();
    echo "<br>";

    class staticMethod2
    {
        public static $oop  = "ini adalah metode satatik metode 2";
        public static function staticFunc2()
        {
            echo self :: $oop;
        }
    }
    staticMethod2 ::staticFunc2();