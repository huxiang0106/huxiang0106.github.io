<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
    <base href="http://www.biaobaishike.com/biaobai_aixinjishi/" />
	
	<title>爱心计时表白网页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
@font-face {
	font-family: digit;
	src: url("digital-7_mono.ttf") format("truetype");
}
</style>
	<link href="css/default.css" tppabs="css/default.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js" tppabs="./js/jquery.js"></script>
	<script type="text/javascript" src="js/garden.js" tppabs="./js/garden.js"></script>
	<script type="text/javascript" src="js/functions.js" tppabs="./js/functions.js"></script>
	<body>
<div id="mainDiv">
<div id="content">
      <div id="code"> <span class="comments">亲爱的宝贝：</span><br />
    <span class="space"><span class="comments"></span></span><br />
    <span class="space"/><span class="comments">只有在你的微笑里，我才有呼吸，还贪恋着你的风情，诱惑着你的神秘，埋葬了我的爱情，脉脉之情如一溪春水，快刀难斩断，随着天各一方的时间越来越长，我的思念也越来越深，我很想找一个万籁俱寂的深夜或一个阳光明媚的早晨，把许多心底的惆怅、寂寞向你倾诉。某某，我们的故事是最感人，最真实的，早安，我永恒的爱人，虽然我尚未起床，但思想已经飞到你的身边来了，不管今世也好来世也好，我所要的只有你。我要与你同坐在有着月光的草坪上，一起遥望着繁星点缀的夜空，讲述那人间古老的爱情神话。人生不止，寂寞不已。寂寞人生爱无休，寂寞是爱永远的主题。</span><br />
    <span class="space"/><span class="comments">某某，在这没有月的漆黑的夜里，我独自坐在窗前写着这封信，希望睡前可以吻你；希望睡时可以抱着你；希望醒来可以看到你，有你的日子，一切都是那么美好，风和日丽，鲜花遍地；没你的日子，白昼是那么的黯淡，黑夜是那么的漫长。你的话已经锁在我的记忆里了，那钥匙你就替我保管一辈子吧。</span><br />
    <span class="space"/><span class="comments">某某，保留一个最浪漫的故事，给你一声祝福，一个kiss，爱你直到永远！某某，理解我吗？我不是弱智，但我会傻傻的爱你到永远。某某，我只想和你白头到老，美轮美奂的你编织着神话，创造着奇迹，只因让我遇到你。接受我，好吗？</span><br /><br />
    <span class="space"/><span class="comments">　　　　　　　　　　　　　　　　　　　　　　　　--某某某</span><br />
  </div>
      <div id="loveHeart">
    <canvas id="garden"></canvas>
    <div id="words">
          <div id="messages"> 这是我们认识的第
        <div id="elapseClock"></div>
      </div>
          <div id="loveu"> 永远爱你，一辈子，不分离！<br/>
        <div class="signature">  -最爱你的人</div>
      </div>
        </div>
  </div>
      <div class="bg1">

    </div>
<script type="text/javascript">
		var offsetX = $("#loveHeart").width() / 2;
		var offsetY = $("#loveHeart").height() / 2 - 55;
		var together = new Date();
		together.setFullYear(2017,01,01);
		together.setHours(0);
		together.setMinutes(0);
		together.setSeconds(0);
		together.setMilliseconds(0);
		
		if (!document.createElement('canvas').getContext) {
			var msg = document.createElement("div");
			msg.id = "errorMsg";
			msg.innerHTML = "提醒您：您的浏览器版本过旧^_^<br/>"+
				"推荐使用 <a href='http://dlsw.br.baidu.com/ditui/zujian/bdBrowserSetup-5956-ftn_1000061134.exe' target='_blank'>百度浏览器<br/>请先升级您的浏览器，效果很炫哦~~"; 
			document.body.appendChild(msg);
			$("#code").css("display", "none")
			$("#copyright").css("position", "absolute");
			$("#copyright").css("bottom", "10px");
		    document.execCommand("stop");
		} else {
			setTimeout(function () {
				adjustWordsPosition();
				startHeartAnimation();
			}, 5000);

			timeElapse(together);
			setInterval(function () {
				timeElapse(together);
			}, 500);

			adjustCodePosition();
			$("#code").typewriter();
		}
	</script>
<audio id="main_audio" autoplay="autoplay" preload="auto" loop>
	<source src="http://m128.xiami.net/260/1260/2100350206/1776156051_1493963551486.mp3?auth_key=1521428400-0-0-4cf2674094719655767db9fa1672439c" type="audio/mpeg" />
<embed id="main_audio_ie8" hidden="true" autostart="true" height="0" width=0 loop="true" src="" autoplay="autoplay"/>
</audio>
<div style="display:none"><script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?3568997ab3a480640571c3fd2c7a949b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</div></body>
</html>