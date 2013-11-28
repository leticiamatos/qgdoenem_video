<div class="general block_wpr video_like">
	<section class="block_cntt">
		<div  class="player_wpr">
			<div id="video">
			</div>
		</div>
		<footer>
			<a href="http://www.enem.com.br" target="_blank" alt="QG do Enem"></a>
			<a href="http://www.cers.com.br" target="_blank" alt="Cers - Complexo de Ensino Renato Saraiva"></a>
		</footer>
	</section>
</div>

<script src="script/jw6/jwplayer.js" type="text/javascript"></script>
<script type="text/javascript">jwplayer.key="Rf+04i9NkiWHUtD93d4ECBX/KFPYRc1pScFRjYaLymQ=";</script>
<script>

	var setupVar = {
		flashplayer: 'script/jw6/jwplayer.flash.swf',
		html5player: 'script/jw6/jwplayer.html5.js',
		height: 355,
		width: 640,
		primary: 'flash',
		skin: 'script/jw6/skins/beelden.xml',
		playlist: [{
			provider: 'http://players.edgesuite.net/flash/plugins/jw/v3.2/AkamaiAdvancedJWStreamProvider.swf',
			type: "mp4",
			file : "http://renatosaraiva-f.akamaihd.net/rsaraiva_1_16@37037"
		}]
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
			setupVar['playlist'] = [{
				provider: "video",
				type: "mp4",
				file: "http://rsaraiva_ios-i.akamaihd.net/hls/live/203931/cers16/playlist.m3u8"
			}];
		}
	}

	jwplayer("video").setup(setupVar);
</script>