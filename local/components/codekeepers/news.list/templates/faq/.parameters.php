<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"COLUMNS" => Array(
		"NAME" => GetMessage("COLUMNS"),
		"TYPE" => "LIST",
		"DEFAULT" => "one",
		"VALUES" => array(
			"one" => GetMessage("COLUMNS_ONE"),
			"oneVideo" => GetMessage("COLUMNS_ONE_VIDEO"),
			"two" => GetMessage("COLUMNS_TWO"),
		)
	),
	"IMAGE" => Array(
		"NAME" => GetMessage("IMAGE"),
		"TYPE" => "FILE",
		"DEFAULT" => "",
		"FD_TARGET" => "F",
		"FD_EXT" => "jpg, gif, bmp, png, jpeg, webp",
		"FD_UPLOAD" => true,
		"FD_USE_MEDIALIB" => true,
		"FD_MEDIALIB_TYPES" => Array('image')
	),
	"VIDEO_URL" => Array(
		"NAME" => GetMessage("VIDEO_URL"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"NAME" => Array(
		"NAME" => GetMessage("NAME"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"TITLE" => Array(
		"NAME" => GetMessage("TITLE"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
	"SUBTITLE" => Array(
		"NAME" => GetMessage("SUBTITLE"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	),
);
?>
