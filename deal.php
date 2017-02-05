<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/6
 * Time: 21:49
 */

  $imgList = "" ;
  $str = "";
  $strCounts = "";

for($j=0;$j<count($imgList);$j++){

    $str .= '<li style="display: table-cell; vertical-align: middle; max-width: 768px;">';
    $str .= '<a href="#"><img style="max-width:100vw;max-height:80vw;margin:auto;" src="'+photoPath+imgList[j]+'"></a>';
    $str .= '</li>';

    $strCounts += '<li></li>';
}