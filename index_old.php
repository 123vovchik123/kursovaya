<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/index.php");
$APPLICATION->SetTitle(GetMessage("CP_WELCOME"));
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>