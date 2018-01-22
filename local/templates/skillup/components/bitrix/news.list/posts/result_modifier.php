<?php
/**
 * Created by PhpStorm.
 * User: php1
 * Date: 22.01.18
 * Time: 21:14
 */

$aSize = [
    'width' => '400',
    'height' => '250',
];

$aSizeAvat = [
    'width' => '40',
    'height' => '40',
];

foreach ($arResult['ITEMS'] as &$aItem) {

    $aPicture = CFile::ResizeImageGet($aItem['DETAIL_PICTURE'], $aSize, BX_RESIZE_IMAGE_EXACT);

    //var_dump($aPicture); exit;

    $aItem['DETAIL_PICTURE']['SRC'] = $aPicture['src'];

    $aPictureAvatar = CFile::ResizeImageGet($aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE'], $aSizeAvat, BX_RESIZE_IMAGE_EXACT0);

    $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC'] = $aPictureAvatar['src'];
}



