<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);



$countdown = 0; // счётчик числа выводимых новостей





?>



<?php foreach($arResult["ITEMS"] as $item): 
$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>




<? if($item["DETAIL_PICTURE"]): ?>



<div id="<?=$this->GetEditAreaId($item['ID']);?>" class="certificates__item">
    <a class="certificates__link" href="<?=$item["DETAIL_PICTURE"]["SRC"]?>" data-lightbox="roadtrip">
        <div class="certificates__block" style="background-image: url(<?=CFile::GetPath($photo)?>);">
        </div>
    </a>
</div>








<? endif;?>


<?php foreach($item["PROPERTIES"]["PHOTO_CONTAINER"]['VALUE'] as $photo): ?>

<? if($countdown < $arParams["~NEWS_COUNT"]):?>

<div  class="certificates__item">
    <a class="certificates__link" href="<?=CFile::GetPath($photo)?>" data-lightbox="roadtrip">
        <div class="certificates__block" style="background-image: url(<?=CFile::GetPath($photo)?>);">
        </div>
    </a>
</div>





<?	$countdown++;?>

<? endif;?>

<?php  endforeach; ?>


<?php  endforeach; ?>