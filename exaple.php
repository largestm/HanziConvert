<?php

use service\HanziConvert;
/**
 * php 中文简体、中文繁体相互转换
 */

 echo "繁体转简体：";
 $str = '錦瑟無端五十弦，一弦一柱思華年。莊生曉夢迷蝴蝶，望帝春心托杜鵑。滄海月明珠有淚，藍田日暖玉生煙。此情可待成追憶，只是當時已惘然。';
 echo HanziConvert::convert($str);

 echo "\n\r";

// 简体转繁体
echo "简体转繁体：";
$str = '锦瑟无端五十弦，一弦一柱思华年。庄生晓梦迷蝴蝶，望帝春心托杜鹃。沧海月明珠有泪，蓝田日暖玉生烟。此情可待成追忆，只是当时已惘然。';
echo HanziConvert::convert($str, 1);
