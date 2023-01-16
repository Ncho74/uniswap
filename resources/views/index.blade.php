<!doctype html>
<html translate="no">
<head>
	<meta charset="utf-8" />
	<title>Uniswap</title>
	<meta name="description" content="Swap or provide liquidity on the Uniswap Protocol" />
	<link rel="shortcut icon" type="image/png" href="./favicon.png" />
	<link rel="apple-touch-icon" sizes="192x192" href={{asset("./static/images/192x192_App_Icon.png")}} />
	<link rel="apple-touch-icon" sizes="512x512" href={{asset("./static/images/512x512_App_Icon.png")}} />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
	<meta name="theme-color" content="#FC72FF" />
	<meta http-equiv="Content-Security-Policy"
		content="script-src 'self' https://www.google-analytics.com https://www.googletagmanager.com 'unsafe-inline'" />
	<link rel="manifest" href="./manifest.json" />
	<link rel="preconnect" href="https://www.google-analytics.com/" />
	<link rel="preload" href={{asset("./fonts/Inter-roman.var.woff2")}} as="font" type="font/woff2" crossorigin />
	<link rel="stylesheet" href={{asset("./static/css/6.a7029b23.chunk.css")}}>
	<link rel="stylesheet" href={{asset("./static/css/13.60e158cf.chunk.css")}}>
	<link rel="stylesheet" href={{asset("./static/css/14.5f1041f9.chunk.css")}}>
	<style>
		* {
			font-family: Inter, sans-serif;
			box-sizing: border-box
		}

		@font-face {
			font-family: 'Inter custom';
			font-weight: 100 900;
			font-style: normal;
			font-display: block;
			font-named-instance: Regular;
			src: url(fonts/Inter-roman.var.woff2) format('woff2 supports variations(gvar)'),
				url(fonts/Inter-roman.var.woff2) format('woff2-variations'),
				url(fonts/Inter-roman.var.woff2) format('woff2')
		}

		@supports (font-variation-settings:normal) {
			* {
				font-family: 'Inter custom', sans-serif
			}
		}

		body,
		html {
			margin: 0;
			padding: 0
		}

		button {
			user-select: none
		}

		html {
			font-size: 16px;
			font-variant: none;
			font-smooth: always;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			-webkit-tap-highlight-color: transparent
		}

		#background-radial-gradient {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			pointer-events: none;
			width: 200vw;
			height: 200vh;
			transform: translate(-50vw, -100vh);
			z-index: -1
		}

		#root,
		body,
		html {
			min-height: 100%
		}

		@media (prefers-color-scheme:dark) {
			html {
				background: linear-gradient(180deg, #202738 0, #070816 100%)
			}
		}

		@media (prefers-color-scheme:light) {
			html {
				background: radial-gradient(100% 100% at 50% 0, rgba(255, 184, 226, .51) 0, rgba(255, 255, 255, 0) 100%), #fff
			}
		}
	</style>
	<link href={{asset("./static/css/6.a7029b23.chunk.css")}} rel="stylesheet">


</head>

<body>
	<div id="root"> 
	</div>
	<div id="background-radial-gradient"></div>
	<script src={{asset("./static/js/6.e6a622b9.chunk.js")}}></script>
	<script src={{asset("./static/js/main.545425c4.chunk.js")}}></script>
	<script src={{asset("./static/js/0.6c81c521.chunk.js")}}></script>
	<script src={{asset("./static/js/3.05fe01a6.chunk.js")}}></script>
	<script src={{asset("./static/js/7.524a174d.chunk.js")}}></script>
	<script src={{asset("./static/js/6.e6a622b9.chunk.js")}}></script>
	 <script src={{asset("./static/js/root.js")}}></script>
	 <script>
		var input=document.querySelector(".token-amount-input").value;
		alert(input);



		
	 </script>

</body>

</html>