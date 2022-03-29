<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"SHOW_MODE" => Array(
		"NAME" => GetMessage("SHOW_MODE"),
		"TYPE" => "LIST",
		"DEFAULT" => "one",
		"VALUES" => array(
			"one" => GetMessage("SHOW_MODE_ONE"),
			"two" => GetMessage("SHOW_MODE_TWO"),
		)
	),
	"SHOW_BUTTON" => Array(
		"NAME" => GetMessage("SHOW_BUTTON"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
);
?>
