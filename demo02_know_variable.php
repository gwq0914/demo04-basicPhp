<?php
$x = 1;
$y = 2;
echo '$x:';
echo $x;
echo ' $y:';
echo $y;
echo ' $x+$y:';
echo $x+$y;
echo '变量的几个特点：
1.x = 5 将右边值5，赋值给左边的x
2.第二段x ＝ 8，最后x + y 的结果等于14，说明x在从上到下的运算（执行）中，可以被重新赋值。
我们在PHP中的变量也是如此。不过有几个特点：
1.必须要以$开始。如变量x必须要写成$x
2.变量的首字母不能以数字开始
3.变量的名字区分大小写
4.变量不要用特殊符号、中文，_不算特殊符号
5.变量命名要有意义（别写xxx，aaa，ccc这种 变量名）';
?>