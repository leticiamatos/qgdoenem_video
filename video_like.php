<div class="general block_wpr video_like">
	<section class="block_cntt">
		<header>
			<a href="http://www.enem.com.br" target="_blank"><img src="img/linha01.png" /></a>
		</header>
		<div  class="player_wpr">
			<div id="video">
			</div>
		</div>
		<footer>
			<a href="http://www.enem.com.br" target="_blank" alt="QG do Enem" class="link_qg"><img src="img/logo-qg.png" /></a>
			<a href="http://www.cers.com.br" target="_blank" alt="Cers - Complexo de Ensino Renato Saraiva" class="link_cers"><img src="img/logo-cers.png" /></a>
		</footer>
	</section>

	<div class="fb-comments" data-href="http://www.enem.com.br#qgaovivo" data-numposts="10" data-width="800"></div>
</div>

<script src="script/jquery-1.9.1.js" type="text/javascript"></script>
<script src="script/jw6/jwplayer.js" type="text/javascript"></script>
<script type="text/javascript">jwplayer.key="Rf+04i9NkiWHUtD93d4ECBX/KFPYRc1pScFRjYaLymQ=";</script>
<script>

	var setupVar = {
		autostart: true,
		flashplayer: 'script/jw6/jwplayer.flash.swf',
		html5player: 'script/jw6/jwplayer.html5.js',
		height: 355,
		width: 640,
		primary: 'flash',
		skin: 'script/jw6/skins/beelden.xml',
		file : "http://cers100hls-lh.akamaihd.net/i/qg_16_1@192459/master.m3u8",
		provider: 'http://players.edgesuite.net/flash/plugins/jw/v3.3/AkamaiAdvancedJWStreamProvider.swf'
	};

	/***********************************************************************************/
	var version = '0,0,0,0';
	try {
		try {
			var axo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.6');
			try { axo.AllowScriptAccess = 'always'; }
			catch(e) { version = '6,0,0'; }
		} catch(e) {}
		version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version').replace(/D+/g, ',').match(/^,?(.+),?$/)[1];
	} catch(e) {
		try {
			if(navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
				version = (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]).description.replace(/D+/g, ",").match(/^,?(.+),?$/)[1];
			}
		} catch(e) {}
	}
	if(version == '0,0,0,0') {
		// "Your browser has not installed Adobe Flash";
		if(typeof(document.createElement('video').canPlayType) != undefined) {
			// "Your browser includes support for HTML5 video";
			//setupVar['provider'] = "video";
			//setupVar['file'] = "http://cers100hls-lh.akamaihd.net/i/qg_16@192459/master.m3u8";
			setupVar['provider'] = 'video';
		}
	}

	jwplayer("video").setup(setupVar);
</script>
