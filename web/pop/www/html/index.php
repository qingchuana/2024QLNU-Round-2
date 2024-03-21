<?php
class Q {

    public static $Q1ngchua = false;
    public static $Yhuanhuan = false;
}
class L {
    public $p;

    public function flag()
    {
        ($this->p)();
    }
}
class N{

    public $n;
    public function __destruct()
    {

        Q::$Q1ngchua = true;
        echo $this->n;
    }
}
class U {
    public $o;
    public function __toString()
    {
        Q::$Yhuanhuan = true;
        $this->o->flag();
        return "其实。。。。,";
    }
}
class Xiaogou {
    public $isyou;
    public $flag;
    public function __invoke()
    {
        if (Q::$Q1ngchua) {

            ($this->isyou)($this->flag);
            echo "小狗竟是我自己呜呜呜";
        } else {
            echo "Yhuanhuan才是小狗";
        }
    }
}
if (isset($_GET['data'])) {
    highlight_file(__FILE__);
    unserialize(base64_decode($_GET['data']));
} else {
    highlight_file(__FILE__);
    echo "难道你是小狗嘛？？？";
}