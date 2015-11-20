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
?>
<div class="slide slide-roundabout bg1">
	<div class="containit ornament-right">
		<?if (!empty($arResult)):?>
		<div class="roundaboutshadow">

			<h1 class="mb4">You can have a Bigger single  Roundabout here.</h1>
			<p class="mb20">Amazingly this IS compatible with all modern and current Browsers.</p>
			<!-- roundabout images targets, prettyphoto opens on click of the middle item -->

			<script type="text/javascript" charset="utf-8">
				function roundaboutimage1(){  $.prettyPhoto.open('_include/images/showcase/showcase1.jpg', 'title', 'Some Brilliant Project'); }
				function roundaboutimage2(){  $.prettyPhoto.open('_include/images/showcase/showcase2.jpg', 'title', 'Another One'); }
				function roundaboutimage3(){  $.prettyPhoto.open('_include/images/showcase/showcase3.jpg', 'title', 'This is Insane'); }
				function roundaboutimage4(){  $.prettyPhoto.open('_include/images/showcase/showcase4.jpg', 'title', 'Another Comment'); }
				function roundaboutimage5(){  $.prettyPhoto.open('_include/images/showcase/showcase5.jpg', 'title', 'This roundabout Rules'); }
				function roundaboutimage6(){  $.prettyPhoto.open('_include/images/showcase/showcase6.jpg', 'title', 'Awsome Commment'); }
				function roundaboutimage7(){  $.prettyPhoto.open('_include/images/showcase/showcase7.jpg', 'title', 'And Another One'); }
			</script>
			<!-- the actual roundabout -->
			<ul id="roundabout">
			<?foreach($arResult['ROWS'][0] as $key => $arItem):?>

				<li id="roundaboutimage<?=$key;?>"><a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="" /></a></li>
			<?endforeach;?>
			</ul>
			<div id="filler"><!--  --></div>
		</div>
		<!-- start the roundabout with descriptions -->

		<script type="text/javascript">
			//<![CDATA[
			// what happens on focus and on blur
			$('#roundabout li').focus(function() {
				Cufon.replace('#roundaboutdescription, #roundaboutlinkone,  #roundaboutlinktwo', { hover: true, textShadow: '1px 1px 0 #ffffff', fontFamily: 'Museo' });
			}).blur(function() {
				$('#roundaboutlinkone').fadeOut(200);
				$('#roundaboutlinktwo').fadeOut(200);
				$('#roundaboutdescription').fadeOut(200);
			});

			$(document).ready(function() {
				var interval;
				$('#roundabout')
					.roundabout({
						shape: 'lazySusan',
						easing: 'swing',
						minOpacity: 1, // 1 fully visible, 0 invisible
						minScale: 0.5, // tiny!
						duration: 400,
						btnNext: '#roundaboutnext',
						btnPrev: '#roundaboutprevious',
						clickToFocus: true
					});
			});
			function startAutoPlay() {
				return setInterval(function() {
					$('#roundabout').roundabout_animateToNextChild();
				}, 3000);
			}
			//]]>
		</script>
		<?endif;?>
	</div>

</div>