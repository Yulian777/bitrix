<?php

/* @var CBitrixComponentTemplate $this */

$this->addExternalCss('');
$this->addExternalJs('');
?>
<? if (count($arResult['ITEMS']) > 0): ?>
    <div>
        <? foreach ($arResult['ITEMS'] as $aItems): ?>

            <?= $aItems['PROPERTIES']['AUTHOR']['VALUE']; ?>
            <?= $aItems['PROPERTIES']['DATA_PUBLIC']['VALUE'];?>
            <img src="<?= $aItems['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC'];?>">

            <img src="<?= $aItems['DETAIL_PICTURE']['SRC'];?>">

            <?= $aItems['PROPERTIES']['LIKES']['VALUE']; ?>
            <?= $aItems['PROPERTIES']['COMMENT']['VALUE']; ?>

            <? foreach ($aItems['PROPERTIES']['TAGS']['VALUE'] as $aValue): ?>
                <?= $aValue; ?>
            <? endforeach; ?>

        <? endforeach; ?>


    </div>
<? endif; ?>
