<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
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
	"SHOW_MODE" => Array(
		"NAME" => GetMessage("SHOW_MODE"),
		"TYPE" => "LIST",
		"DEFAULT" => "one",
		"VALUES" => array(
			"one" => GetMessage("SHOW_MODE_ONE"),
			"two" => GetMessage("SHOW_MODE_TWO"),
		),
		"REFRESH" => "Y"
	),

);

if ($arCurrentValues["SHOW_MODE"] == "one" || !$arCurrentValues["SHOW_MODE"])
{
	$arTemplateParameters["WIDTH"] = array(
		"NAME" => GetMessage("WIDTH"),
		"TYPE" => "STRING",
		"DEFAULT" => "300px",
	);

	$arTemplateParameters["MARGIN"] = array(
		"NAME" => GetMessage("MARGIN"),
		"TYPE" => "STRING",
		"DEFAULT" => "10px",
	);
}
?>
