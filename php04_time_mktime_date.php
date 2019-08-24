<?php

$time = time();
echo '現在のタイムスタンプは'.$time."です。";

$earthquake_day = mktime(14, 46, 0, 3, 11, 2011);
echo '東日本大震災が起きた2011/3/11 14:46のタイムスタンプは'.$earthquake_day.'です。';

echo date('Y/m/d', $time);
echo date('Y/m/d', $earthquake_day);