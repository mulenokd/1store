<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;

?>

<div class="bx_profile">
	<?
	ShowError($arResult["strProfileError"]);

	if ($arResult['DATA_SAVED'] == 'Y')
	{
		ShowNote(Loc::getMessage('PROFILE_DATA_SAVED'));
	}

	?>
	<form method="post" name="form1" action="<?=$APPLICATION->GetCurUri()?>" enctype="multipart/form-data" role="form">
		<?=$arResult["BX_SESSION_CHECK"]?>
		<input type="hidden" name="lang" value="<?=LANG?>" />
		<input type="hidden" name="ID" value="<?=$arResult["ID"]?>" />
		<input type="hidden" name="LOGIN" value="<?=$arResult["arUser"]["LOGIN"]?>" />
		<div class="main-profile-block-shown" id="user_div_reg">
			<?
			if (!in_array(LANGUAGE_ID,array('ru', 'ua')))
			{
				?>
				<div class="form-group">
					<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-title"><?=Loc::getMessage('main_profile_title')?></label>
					<div class="col-sm-12">
						<input class="form-control" type="text" name="TITLE" maxlength="50" id="main-profile-title" value="<?=$arResult["arUser"]["TITLE"]?>" />
					</div>
				</div>
				<?
			}
			?>
			<div class="form-group">
				<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-name"><?=Loc::getMessage('NAME')?></label>
				<div class="col-sm-12">
					<input class="form-control" type="text" name="NAME" maxlength="50" id="main-profile-name" value="<?=$arResult["arUser"]["NAME"]?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-last-name"><?=Loc::getMessage('LAST_NAME')?></label>
				<div class="col-sm-12">
					<input class="form-control" type="text" name="LAST_NAME" maxlength="50" id="main-profile-last-name" value="<?=$arResult["arUser"]["LAST_NAME"]?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-email"><?=Loc::getMessage('EMAIL')?></label>
				<div class="col-sm-12">
					<input class="form-control" type="text" name="EMAIL" maxlength="50" id="main-profile-email" value="<?=$arResult["arUser"]["EMAIL"]?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-email"><?=Loc::getMessage('PERSONAL_PHONE')?></label>
				<div class="col-sm-12">
					<input class="form-control phone" type="text" name="PERSONAL_PHONE" maxlength="50" id="main-profile-email" value="<?=$arResult["arUser"]["PERSONAL_PHONE"]?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-email"><?=Loc::getMessage('WORK_PHONE')?></label>
				<div class="col-sm-12">
					<input class="form-control phone" type="text" name="WORK_PHONE" maxlength="50" id="main-profile-email" value="<?=$arResult["arUser"]["WORK_PHONE"]?>" />
				</div>
			</div>
			<?
			if ($arResult['CAN_EDIT_PASSWORD'])
			{
				?>
				<div class="form-group">
					<p class="main-profile-form-password-annotation col-sm-9 col-sm-offset-3 small">
						<?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
					</p>
				</div>
				<div class="form-group">
					<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-password"><?=Loc::getMessage('NEW_PASSWORD_REQ')?></label>
					<div class="col-sm-12">
						<input class=" form-control bx-auth-input main-profile-password" type="password" name="NEW_PASSWORD" maxlength="50" id="main-profile-password" value="" autocomplete="off"/>
					</div>
				</div>
				<div class="form-group">
					<label class="main-profile-form-label main-profile-password col-sm-12 col-md-3 text-md-right" for="main-profile-password-confirm">
						<?=Loc::getMessage('NEW_PASSWORD_CONFIRM')?>
					</label>
					<div class="col-sm-12">
						<input class="form-control" type="password" name="NEW_PASSWORD_CONFIRM" maxlength="50" value="" id="main-profile-password-confirm" autocomplete="off" />
					</div>
				</div>
				<?
			}
			?>
		</div>
		<p class="main-profile-form-buttons-block col-sm-9 col-md-offset-3">
			<input type="submit" name="save" class="b-btn b-green-btn main-profile-submit not-ajax" value="<?=(($arResult["ID"]>0) ? Loc::getMessage("MAIN_SAVE") : Loc::getMessage("MAIN_ADD"))?>">
			&nbsp;
			<input type="submit" class="b-btn b-brown-btn"  name="reset" value="<?echo GetMessage("MAIN_RESET")?>">
		</p>
	</form>
	<div class="col-sm-12 main-profile-social-block">
		<?
		if ($arResult["SOCSERV_ENABLED"])
		{
			$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
				"SHOW_PROFILES" => "Y",
				"ALLOW_DELETE" => "Y"
			),
				false
			);
		}
		?>
	</div>
	<div class="clearfix"></div>
</div>