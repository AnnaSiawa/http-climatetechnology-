<?php

/**
 * Template Name: products
 */
?>

<?php get_header(); ?>

<div class="content">

	<?= Component::render('arrow'); ?>

<!--	<div class="products-screen homepage-screen scroll-top">-->
<!--		<div class="products-screen__row ">-->
<!---->
<!--			<div class="inner">-->
<!--				<div class="title-block">-->
<!--					<h2 class="container">-->
<!--						<span class="scroll-title">Фильтр товаров</span>-->
<!--						<span>-->
<!--							<svg height="16.933332443237305" id="svg8" version="1.1"-->
<!--								 viewBox="0 0 16.933333 16.933333" width="16.933332443237305"-->
<!--								 xmlns="http://www.w3.org/2000/svg"-->
<!--								 xmlns:cc="http://creativecommons.org/ns#"-->
<!--								 xmlns:dc="http://purl.org/dc/elements/1.1/"-->
<!--								 xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"-->
<!--								 xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"-->
<!--								 xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"-->
<!--								 xmlns:svg="http://www.w3.org/2000/svg"><defs-->
<!--									id="defs2"></defs><g id="layer2"><path-->
<!--										d="m 1.32292,5.656503 c 0,1.612345 2.53565,4.916525 5.55625,5.191415 l 0.26458,5.291666 2.64583,-1.5875 0.26459,-3.704166 c 3.01885,-0.27489 5.55625,-3.57907 5.55625,-5.191415 h -0.0207 C 15.369634,6.4908037 12.247187,7.142749 8.46665,7.143751 4.6839123,7.1434157 1.5580966,6.4912887 1.33788,5.656503 Z"-->
<!--										id="path8386"-->
<!--										style="opacity: 1; fill: rgb(226, 231, 250); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-1"></path><path-->
<!--										d="m 15.08125,5.656503 c 0,1.612345 -2.5374,4.916525 -5.55625,5.191415 l -0.26458,3.704166 -2.13217,1.278992 0.0155,0.308508 2.64583,-1.5875 0.26459,-3.704166 c 3.01885,-0.27489 5.55625,-3.57907 5.55625,-5.191415 z"-->
<!--										id="path8390"-->
<!--										style="opacity: 1; fill: rgb(196, 210, 240); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-2"></path><path-->
<!--										d="m 12.31335,4.233889 c 2.054072,0.2901613 3.297051,0.7918272 3.29705,1.330689 v 0 c 0,0.8721581 -3.198366,1.5791819 -7.14375,1.579182 -3.9453841,-1e-7 -7.1437498,-0.7070239 -7.14375,-1.579182 1.4e-6,-0.5388641 1.2429924,-1.0405317 3.29708,-1.330692"-->
<!--										id="path8393"-->
<!--										style="opacity: 1; fill: rgb(226, 231, 250); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-3"></path><path-->
<!--										d="m 5.29167,5.027084 c -0.29316,0 -0.52917,0.236014 -0.52917,0.529167 v 1.322917 0.03307 c 1.1156386,0.1506395 2.3968795,0.2307172 3.70417,0.231511 1.3075092,-9.496e-4 2.588762,-0.081207 3.70416,-0.232027 V 6.879162 5.556245 c 0,-0.293153 -0.23601,-0.529167 -0.52916,-0.529167 z"-->
<!--										id="path8400"-->
<!--										style="display: inline; opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-4"></path><path-->
<!--										d="M 12.17083,6.382557 C 11.055432,6.5333772 9.7741792,6.6136344 8.46667,6.614584 7.1593799,6.6137905 5.878139,6.5337132 4.7625,6.383074 v 0.496094 0.03307 c 1.1156386,0.1506395 2.3968795,0.2307172 3.70417,0.231511 1.3075092,-9.496e-4 2.588762,-0.081207 3.70416,-0.232027 v -0.03256 z"-->
<!--										id="path8413"-->
<!--										style="opacity: 1; fill: rgb(145, 184, 251); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-5"></path><path-->
<!--										d="M 4.61987,4.233851 C 2.5658645,4.5240135 1.3229301,5.025669 1.32292,5.564519 1.3227953,6.4366966 4.5211976,7.1437509 8.46667,7.143751 8.5287088,7.1433963 8.5907241,7.1428629 8.6527,7.142151 5.121212,7.1257098 2.2964694,6.4884491 2.29392,5.707613 2.2942014,5.2177233 3.424303,4.7616696 5.29167,4.497868 h 6.99544 c 1.867363,0.2638021 2.997461,0.7198557 2.99774,1.209745 5.3e-5,0.2885097 -0.393055,0.5703321 -1.12809,0.808736 0.940381,-0.2738525 1.450774,-0.6080657 1.45366,-0.95188 -1.2e-5,-0.5388504 -1.242951,-1.040506 -3.29696,-1.330668 z"-->
<!--										id="path8397"-->
<!--										style="opacity: 1; fill: rgb(196, 210, 240); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-6"></path><path-->
<!--										d="m 16.139585,1.4552169 c 0,0.3653132 -0.296145,0.6614582 -0.661458,0.6614584 -0.365314,3e-7 -0.661459,-0.2961448 -0.661459,-0.6614584 0,-0.3653136 0.296145,-0.66145874 0.661459,-0.66145839 0.365313,2e-7 0.661458,0.29614519 0.661458,0.66145839 z"-->
<!--										id="circle8382"-->
<!--										style="opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1;"-->
<!--										class="filter-svg-elem-7"></path><path-->
<!--										d="m -2.6458285,2.9104285 c 0,0.2922507 -0.236916,0.5291667 -0.5291667,0.5291667 -0.2922507,0 -0.5291666,-0.236916 -0.5291666,-0.5291667 0,-0.2922506 0.236916,-0.5291666 0.5291666,-0.5291666 0.2922507,0 0.5291667,0.2369159 0.5291667,0.5291666 z"-->
<!--										id="circle8384"-->
<!--										style="opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1;"-->
<!--										transform="scale(-1,1)" class="filter-svg-elem-8"></path><path-->
<!--										d="m 14.287506,2.9104285 c 0,0.2922508 -0.236916,0.5291669 -0.529167,0.5291667 -0.292251,2e-7 -0.529167,-0.2369159 -0.529167,-0.5291667 0,-0.2922508 0.236916,-0.5291668 0.529167,-0.5291666 0.292251,-2e-7 0.529167,0.2369158 0.529167,0.5291666 z"-->
<!--										id="circle8378"-->
<!--										style="opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1;"-->
<!--										class="filter-svg-elem-9"></path><path-->
<!--										d="m -0.79374933,1.4552169 c 2e-8,0.3653134 -0.29614497,0.6614584 -0.66145837,0.6614584 -0.3653134,0 -0.6614584,-0.296145 -0.6614584,-0.6614584 0,-0.3653134 0.296145,-0.66145841 0.6614584,-0.66145839 0.3653134,0 0.66145838,0.29614499 0.66145837,0.66145839 z"-->
<!--										id="circle8380"-->
<!--										style="opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1;"-->
<!--										transform="scale(-1,1)" class="filter-svg-elem-10"></path><path-->
<!--										d="m 5.2916558,0.7937637 h 6.3500002 c 0.293158,0 0.529166,0.2360082 0.529166,0.5291665 v 1.0583334 c 0,0.2931582 -0.236008,0.5291664 -0.529166,0.5291664 H 5.2916558 c -0.2931582,0 -0.5291665,-0.2360082 -0.5291665,-0.5291664 V 1.3229302 c 0,-0.2931583 0.2360083,-0.5291665 0.5291665,-0.5291665 z"-->
<!--										id="rect8418"-->
<!--										style="display: inline; opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-11"></path><path-->
<!--										d="m 11.64167,0.793751 v 1.058333 c 0,0.293153 -0.23602,0.529167 -0.52917,0.529167 h -6.35 c 0,0.293153 0.23601,0.529167 0.52917,0.529167 h 6.35 c 0.29315,0 0.52916,-0.236014 0.52916,-0.529167 V 1.322918 c 0,-0.293153 -0.23601,-0.529167 -0.52916,-0.529167 z"-->
<!--										id="path8427"-->
<!--										style="display: inline; opacity: 1; fill: rgb(145, 184, 251); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-12"></path><path-->
<!--										d="m 5.2916459,2.9104362 h 6.3500201 c 0.293152,0 0.529156,0.2360038 0.529156,0.5291566 v 1.0583433 c 0,0.2931527 -0.236004,0.5291566 -0.529156,0.5291566 H 5.2916459 c -0.2931527,0 -0.5291566,-0.2360039 -0.5291566,-0.5291566 V 3.4395928 c 0,-0.2931528 0.2360039,-0.5291566 0.5291566,-0.5291566 z"-->
<!--										id="rect8420"-->
<!--										style="display: inline; opacity: 1; fill: rgb(168, 197, 247); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-13"></path><path-->
<!--										d="m 11.64167,2.910418 v 1.058333 c 0,0.293153 -0.23602,0.529167 -0.52917,0.529167 h -6.35 c 0,0.293152 0.23601,0.529166 0.52917,0.529166 h 6.35 c 0.29315,0 0.52916,-0.236014 0.52916,-0.529166 V 3.439584 c 0,-0.293152 -0.23601,-0.529166 -0.52916,-0.529166 z"-->
<!--										id="rect8424"-->
<!--										style="display: inline; opacity: 1; fill: rgb(145, 184, 251); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-14"></path><path-->
<!--										d="M 12.17083,6.879168 V 5.556251 c 0,-0.293153 -0.23601,-0.529167 -0.52916,-0.529167 H 11.1125 c 0.29315,0 0.52917,0.236014 0.52917,0.529167 v 1.322917 z"-->
<!--										id="path8410"-->
<!--										style="display: inline; opacity: 1; fill: rgb(145, 184, 251); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										class="filter-svg-elem-15"></path><path-->
<!--										d="M 20 3 C 18.892 3 18 3.8920001 18 5 L 18 9 C 18 10.108 18.892 11 20 11 L 22 11 C 20.892 11 20 10.108 20 9 L 20 5 C 20 3.8920001 20.892 3 22 3 L 20 3 z "-->
<!--										id="path851"-->
<!--										style="display: inline; opacity: 1; fill: rgb(248, 248, 248); fill-opacity: 1; stroke: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										transform="scale(0.26458333)" class="filter-svg-elem-16"></path><path-->
<!--										d="M 20 11 C 18.892021 11 18 11.892021 18 13 L 18 17 C 18 18.107979 18.892021 19 20 19 L 22 19 C 20.892021 19 20 18.107979 20 17 L 20 13 C 20 11.892021 20.892021 11 22 11 L 20 11 z "-->
<!--										id="path854"-->
<!--										style="display: inline; opacity: 1; fill: rgb(248, 248, 248); fill-opacity: 1; stroke: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										transform="scale(0.26458333)" class="filter-svg-elem-17"></path><path-->
<!--										d="m 20,26 v -5 c 0,-1.10798 0.891994,-2 2,-2 h -2 c -1.108006,0 -2,0.89202 -2,2 v 5 z"-->
<!--										id="path857"-->
<!--										style="display: inline; opacity: 1; fill: rgb(248, 248, 248); fill-opacity: 1; stroke: none; stroke-width: 2; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										transform="scale(0.26458333)" class="filter-svg-elem-18"></path><path-->
<!--										d="M 5.5 3 C 4.1192879 3 3 4.1192879 3 5.5 C 2.9999999 6.8807121 4.1192879 8 5.5 8 C 5.8564016 8 6.1931906 7.9215122 6.5 7.7871094 C 5.6182193 7.400831 5 6.5243105 5 5.5 C 5 4.4756895 5.6182193 3.599169 6.5 3.2128906 C 6.1931906 3.0784878 5.8564016 3 5.5 3 z "-->
<!--										id="path862"-->
<!--										style="opacity: 1; fill: rgb(248, 248, 248); fill-opacity: 1; stroke: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1;"-->
<!--										transform="scale(0.26458333)" class="filter-svg-elem-19"></path><path-->
<!--										d="m 15.478127,0.79374999 c -0.365314,0 -0.661459,0.29614491 -0.661459,0.66145831 0,0.3653134 0.296145,0.6614583 0.661459,0.6614583 0.0943,0 0.183406,-0.020766 0.264583,-0.056327 -0.233304,-0.1022028 -0.396875,-0.3341155 -0.396875,-0.605131 0,-0.2710155 0.163571,-0.50292818 0.396875,-0.60513101 -0.08118,-0.0355607 -0.170285,-0.0563273 -0.264583,-0.0563276 z"-->
<!--										id="path865"-->
<!--										style="opacity: 1; fill: rgb(248, 248, 248); fill-opacity: 1; stroke: none; stroke-width: 0.529167; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1;"-->
<!--										class="filter-svg-elem-20"></path><path-->
<!--										d="M 5,21.378906 C 5,27.472809 14.583559,39.961046 26,41 L 27,61 28.941406,59.833984 28,41 C 17.745095,40.066751 8.9940843,29.908387 7.3144531,23.431641 6.0520827,22.797681 5.2491534,22.108674 5.0566406,21.378906 Z"-->
<!--										id="path869"-->
<!--										style="opacity: 1; fill: rgb(248, 248, 248); fill-opacity: 1; stroke: none; stroke-width: 2; stroke-linecap: butt; stroke-linejoin: round; stroke-miterlimit: 4;"-->
<!--										transform="scale(0.26458333)" class="filter-svg-elem-21"></path><path-->
<!--										d="m 1.4552067,0.52916666 c -0.50830005,0 -0.92604005,0.4177066 -0.92604005,0.92598814 0,0.5082715 0.41774,0.9254681 0.92604005,0.9254681 0.50831,0 0.92553,-0.4171966 0.92553,-0.9254681 0,-0.50828154 -0.41722,-0.92598814 -0.92553,-0.92598814 z m 3.83594,0 c -0.4351599,0 -0.7932301,0.35804991 -0.7932301,0.79318564 v 1.0582706 c 0,0.2033086 0.0806,0.3882682 0.2082602,0.5296604 -0.1277401,0.140952 -0.2082602,0.3257216 -0.2082602,0.5291303 v 0.5467093 c -0.9999599,0.1456519 -1.8123899,0.338461 -2.3962399,0.5740978 -0.30045,0.1212534 -0.54166,0.2515661 -0.7245,0.4082171 -0.18284,0.1566412 -0.31833,0.3593699 -0.31833,0.5957966 -5.134e-4,-0.00192 0,0.091994 0,0.091994 0,0.944817 0.67451,2.1828876 1.71824,3.2786864 0.9897399,1.0391116 2.3466499,1.9353622 3.8462799,2.1491002 l 0.2552801,5.067626 c 0.009,0.19995 0.22885,0.317462 0.40049,0.214448 l 2.6468698,-1.58741 c 0.0738,-0.0449 0.1211195,-0.123034 0.1266095,-0.209279 l 0.25063,-3.483835 c 1.50058,-0.212688 2.86215,-1.1105986 3.85299,-2.1506501 1.04395,-1.0957787 1.71876,-2.3337694 1.71876,-3.2786864 0,0 4e-6,-0.09199 0,-0.091994 0,-0.2364267 -0.13549,-0.4391554 -0.31832,-0.5957966 -0.18284,-0.1566511 -0.42406,-0.2869638 -0.72451,-0.4082172 -0.58353,-0.2355067 -1.39742,-0.427956 -2.39675,-0.5735779 V 3.4394136 c 0,-0.2034087 -0.08,-0.3881783 -0.20774,-0.5291303 0.12762,-0.1413922 0.20774,-0.3263518 0.20774,-0.5296604 V 1.3223523 c 0,-0.43513573 -0.35756,-0.79318564 -0.79272,-0.79318564 z m 10.1874893,0 c -0.5083,0 -0.92604,0.4177066 -0.92604,0.92598814 0,0.5082715 0.41774,0.9254681 0.92604,0.9254681 0.50831,0 0.92553,-0.4171966 0.92553,-0.9254681 0,-0.50828154 -0.41722,-0.92598814 -0.92553,-0.92598814 z M 1.4552067,1.058817 c 0.22232,0 0.39636,0.1740303 0.39636,0.3963378 0,0.2223075 -0.17404,0.3963377 -0.39636,0.3963377 -0.22232,0 -0.39636,-0.1740302 -0.39636,-0.3963377 0,-0.2223075 0.17404,-0.3963378 0.39636,-0.3963378 z m 3.83594,0 H 6.6150965 V 2.6462281 H 5.2911467 c -0.1511501,0 -0.2635501,-0.1144536 -0.2635501,-0.2656052 V 1.3223523 c 0,-0.1511516 0.1124,-0.2635353 0.2635501,-0.2635353 z m 1.8536398,0 h 4.4979095 c 0.15116,0 0.26355,0.1123837 0.26355,0.2635353 v 1.0582706 c 0,0.1511516 -0.11239,0.2656052 -0.26355,0.2656052 H 7.1447865 Z m 8.3338495,0 c 0.22233,0 0.39636,0.1740303 0.39636,0.3963378 0,0.2223075 -0.17403,0.3963377 -0.39636,0.3963377 -0.22232,0 -0.39635,-0.1740302 -0.39635,-0.3963377 0,-0.2223075 0.17403,-0.3963378 0.39635,-0.3963378 z M 5.8208367,1.5874373 c -0.1461302,0 -0.2645899,0.1184534 -0.2645899,0.2645652 0,0.1461218 0.1184597,0.2645752 0.2645899,0.2645752 0.1461198,0 0.2645799,-0.1184534 0.2645799,-0.2645752 0,-0.1461118 -0.1184601,-0.2645652 -0.2645799,-0.2645652 z m 2.11666,5.212e-4 c -0.14532,5.609e-4 -0.2629799,0.1182234 -0.2635501,0.2635352 -5.821e-4,0.1461119 0.11743,0.2650252 0.2635501,0.2655952 h 3.1760393 c 0.14612,-5.689e-4 0.26412,-0.1194833 0.26355,-0.2655952 -5.82e-4,-0.1453118 -0.11823,-0.2629752 -0.26355,-0.2635352 z M 3.1760366,2.1170889 c -0.4352499,0 -0.7952999,0.35746 -0.7952999,0.7926756 0,0.4352156 0.36005,0.7952555 0.7952999,0.7952555 0.4352401,0 0.7927102,-0.3600399 0.7927102,-0.7952555 0,-0.4352156 -0.3574701,-0.7926756 -0.7927102,-0.7926756 z m 10.5817794,0 c -0.43524,0 -0.79272,0.35746 -0.79272,0.7926756 0,0.4352156 0.35748,0.7952555 0.79272,0.7952555 0.43524,0 0.79478,-0.3600399 0.79478,-0.7952555 0,-0.4352156 -0.35954,-0.7926756 -0.79478,-0.7926756 z M 3.1760366,2.6462293 c 0.1492602,0 0.2635501,0.1142836 0.2635501,0.2635352 0,0.1492516 -0.1142899,0.266115 -0.2635501,0.266115 -0.1492599,0 -0.2661399,-0.1168634 -0.2661399,-0.266115 0,-0.1492516 0.11688,-0.2635352 0.2661399,-0.2635352 z m 10.5817794,0 c 0.14926,0 0.26561,0.1142836 0.26562,0.2635352 -10e-6,0.1492516 -0.11636,0.266115 -0.26562,0.266115 -0.14926,0 -0.26355,-0.1168634 -0.26355,-0.266115 0,-0.1492516 0.11429,-0.2635352 0.26355,-0.2635352 z M 5.2911467,3.1758782 H 6.6150965 V 4.7612296 H 5.2911467 c -0.1511501,0 -0.2635501,-0.1123938 -0.2635501,-0.2635354 V 3.4394136 c 0,-0.1511416 0.1124,-0.2635354 0.2635501,-0.2635354 z m 1.8536398,0 h 4.4979095 c 0.15115,0 0.26355,0.1123938 0.26355,0.2635354 v 1.0582806 c 0,0.1511416 -0.1124,0.2635354 -0.26355,0.2635354 H 7.1447865 Z M 5.8208367,3.7039886 c -0.1461302,0 -0.2645899,0.1184434 -0.2645899,0.2645654 0,0.1461217 0.1184597,0.2645651 0.2645899,0.2645651 0.1461198,0 0.2645799,-0.1184434 0.2645799,-0.2645651 0,-0.146122 -0.1184601,-0.2645654 -0.2645799,-0.2645654 z m 2.11666,0.00101 c -0.14532,5.511e-4 -0.2629799,0.1182187 -0.2635501,0.2635305 5.556e-4,0.1453119 0.1182301,0.2629653 0.2635501,0.2635354 h 3.1760393 c 0.14532,-5.82e-4 0.26298,-0.1182235 0.26355,-0.2635354 -5.82e-4,-0.1453118 -0.11823,-0.2629752 -0.26355,-0.263535 z M 4.7061768,5.0268001 C 4.5785566,5.1681867 4.4979166,5.3531463 4.4979166,5.5564449 v 1.054141 C 4.1285967,6.5552889 3.7850066,6.4925725 3.4726568,6.4235362 2.8401167,6.2837141 2.3340567,6.1156234 2.0076267,5.9450331 c -0.16321,-0.085296 -0.28103,-0.1724803 -0.34571,-0.2423464 -0.0647,-0.069896 -0.0739,-0.110324 -0.0739,-0.1384822 0,-0.032998 0.0184,-0.095194 0.13281,-0.1932591 0.11441,-0.097994 0.31275,-0.2125982 0.57981,-0.3203821 0.50528,-0.2039186 1.2623099,-0.3889282 2.1998599,-0.5296477 0.006,0.1941518 0.0829,0.370432 0.2056802,0.5058845 z m 9.9265192,0.023769 c 0.26706,0.1077839 0.46591,0.2223577 0.58033,0.3203821 0.11441,0.097994 0.13281,0.160261 0.13281,0.1932591 0,0.028198 -0.01,0.068596 -0.0744,0.1384822 -0.0647,0.069896 -0.1825,0.1570511 -0.34571,0.2423463 -0.32643,0.1705904 -0.83198,0.3386811 -1.46451,0.4785031 -0.31236,0.068996 -0.65645,0.1317927 -1.02578,0.1870498 V 5.5564603 c 0,-0.2033088 -0.0801,-0.3882683 -0.20774,-0.5296602 0.12274,-0.1354424 0.19932,-0.3117327 0.20515,-0.5058819 0.93681,0.1406921 1.69492,0.3258717 2.19985,0.5296509 z M 5.2911467,5.290855 H 6.6150965 V 6.8229692 C 6.0550967,6.789571 5.5217366,6.7420738 5.0275966,6.681387 V 5.5564603 c 0,-0.1511415 0.1124,-0.2656053 0.2635501,-0.2656053 z m 1.8536398,0 h 4.4979095 c 0.15115,0 0.26355,0.1144537 0.26355,0.2655952 v 1.1249316 c -1.01561,0.124713 -2.1889095,0.1968792 -3.4395795,0.1968792 -0.4523798,0 -0.8932298,-0.010001 -1.32188,-0.027898 z m 0.7927102,0.5291303 c -0.1461201,5.821e-4 -0.26412,0.1194935 -0.2635501,0.2656051 5.556e-4,0.1453118 0.1182301,0.2629752 0.2635501,0.2635354 h 3.1760393 c 0.14532,-5.557e-4 0.26298,-0.1182236 0.26355,-0.2635354 5.82e-4,-0.1461116 -0.11743,-0.265035 -0.26355,-0.2656051 z m -2.11666,5.291e-4 c -0.1461302,0 -0.2645899,0.1184532 -0.2645899,0.2645651 0,0.1461217 0.1184597,0.2645752 0.2645899,0.2645752 0.1461198,0 0.2645799,-0.1184535 0.2645799,-0.2645752 0,-0.1461119 -0.1184601,-0.2645651 -0.2645799,-0.2645651 z M 3.3572465,6.9391377 c 1.3204599,0.2918735 3.12075,0.4686738 5.1092501,0.4686738 1.9884994,0 3.7872394,-0.1768003 5.1076994,-0.4686738 0.66023,-0.1459418 1.20075,-0.318282 1.59732,-0.5255206 0.002,-0.00101 0.004,-0.003 0.006,-0.004 l -1.5e-4,4.941e-4 c -0.23895,0.6483036 -0.72572,1.4479389 -1.40405,2.1599492 -0.97949,1.0281323 -2.32321,1.8838446 -3.74396,2.0132066 -0.1283595,0.0125 -0.2289995,0.115774 -0.2382195,0.244416 l -0.2558,3.568036 -2.1487099,1.288738 -0.2439099,-4.851108 C 7.1357167,10.701797 7.0336068,10.595183 6.9024166,10.583253 5.4807667,10.453881 4.1392567,9.5981485 3.1600167,8.5700461 c -0.67801,-0.7118203 -1.16447,-1.5111955 -1.40104,-2.157929 0.39906,0.2087386 0.93804,0.3810788 1.5982698,0.5270206 z M 4.7624999,11.64843 v 0.257845 H 4.5046301 C 4.35851,11.905693 4.23958,12.023699 4.2390199,12.169811 c -5.821e-4,0.146932 0.1186802,0.266175 0.2656102,0.265605 h 0.2578698 v 0.257845 c 5.556e-4,0.145312 0.1182301,0.262976 0.2635501,0.263536 0.1461198,5.82e-4 0.26504,-0.117414 0.2656099,-0.263536 V 12.435416 H 5.54953 C 5.6956599,12.434834 5.81365,12.315933 5.8130798,12.169811 5.8125242,12.024499 5.69485,11.906845 5.54953,11.906275 H 5.2916599 V 11.648416 C 5.292242,11.501495 5.17298,11.382241 5.02605,11.382818 4.8799198,11.383407 4.76193,11.502309 4.7624999,11.64843 Z m 6.8791631,0 v 0.257845 h -0.25786 c -0.14532,5.56e-4 -0.26299,0.118224 -0.26355,0.263536 -5.82e-4,0.146122 0.11742,0.265035 0.26355,0.265605 h 0.25786 v 0.257845 c 5.82e-4,0.146122 0.11949,0.264116 0.26562,0.263536 0.14532,-5.55e-4 0.26298,-0.118224 0.26355,-0.263536 v -0.257845 h 0.25786 c 0.14694,5.82e-4 0.2662,-0.118673 0.26562,-0.265605 -5.82e-4,-0.146112 -0.11949,-0.264106 -0.26562,-0.263536 h -0.25786 v -0.257859 c 5.82e-4,-0.146121 -0.11743,-0.265035 -0.26355,-0.265598 -0.14694,-5.75e-4 -0.26619,0.118681 -0.26562,0.265612 z m -9.2609263,2.374211 c -0.14532,5.56e-4 -0.26299,0.118223 -0.26355,0.263535 v 0.529141 h -0.52917 c -0.14714,-5.82e-4 -0.26648,0.118992 -0.26562,0.266114 5.688e-4,0.146122 0.11949,0.264106 0.26562,0.263536 h 0.52917 v 0.52914 c 5.609e-4,0.145312 0.11823,0.262966 0.26355,0.263536 0.14612,5.81e-4 0.26504,-0.117424 0.26561,-0.263536 v -0.52914 h 0.5296899 c 0.14532,-5.56e-4 0.26298,-0.118224 0.2635501,-0.263536 8.467e-4,-0.146312 -0.1172299,-0.265544 -0.2635501,-0.266114 H 2.6463467 v -0.529141 c -5.7e-4,-0.146112 -0.11949,-0.264105 -0.26561,-0.263535 z m 12.1718593,0 c -0.14612,-5.82e-4 -0.26504,0.117413 -0.26561,0.263535 v 0.529141 h -0.52917 c -0.14633,5.82e-4 -0.26441,0.119792 -0.26355,0.266114 5.55e-4,0.145312 0.11823,0.262966 0.26355,0.263536 h 0.52917 v 0.52914 c 5.82e-4,0.146112 0.11949,0.264105 0.26561,0.263536 0.14532,-5.82e-4 0.26299,-0.118224 0.26355,-0.263536 v -0.52914 h 0.52969 c 0.14612,5.82e-4 0.26504,-0.117414 0.26561,-0.263536 8.73e-4,-0.147122 -0.11848,-0.266694 -0.26561,-0.266114 h -0.52969 v -0.529141 c -5.56e-4,-0.145312 -0.11823,-0.262965 -0.26355,-0.263535 z"-->
<!--										id="rect4374"-->
<!--										style="color: rgb(0, 0, 0); font: medium sans-serif; font-feature-settings: normal; text-indent: 0px; text-align: start; text-decoration: none solid rgb(0, 0, 0); letter-spacing: normal; word-spacing: normal; text-transform: none; writing-mode: lr-tb; direction: ltr; text-orientation: mixed; dominant-baseline: auto; baseline-shift: baseline; text-anchor: start; white-space: normal; clip-rule: nonzero; display: inline; overflow: visible; visibility: visible; opacity: 1; isolation: auto; mix-blend-mode: normal; color-interpolation: srgb; color-interpolation-filters: linearrgb; vector-effect: none; fill: rgb(102, 160, 254); fill-opacity: 1; fill-rule: nonzero; stroke: none; stroke-width: 1; stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 4; stroke-opacity: 1; color-rendering: auto; image-rendering: auto; shape-rendering: auto; text-rendering: auto;"-->
<!--										class="filter-svg-elem-22"></path></g></svg>-->
<!--						</span>-->
<!--					</h2>-->
<!--				</div>-->
<!---->
<!--				<div class="title-block">-->
<!--					<div class="product-filter container">-->
<!--						<div class="product-filter__wrap">-->
<!--							<div class="product-filter__row">-->
<!--								<div class="product-filter__title">Бренды</div>-->
<!--								<div class="product-filter__disc">-->
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Hisense',
//											'id' => 'Hisense',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'FUNAI',
//											'id' => 'FUNAI',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'KENTATSU',
//											'id' => 'KENTATSU',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'LG',
//											'id' => 'LG',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'MITSUBISHI',
//											'id' => 'MITSUBISHI',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'ROYAL CLIMA',
//											'id' => 'ROYALCLIMA',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'MIDEA',
//											'id' => 'MIDEA',
//										]); ?>
<!--								</div>-->
<!--							</div>-->
<!--							<div class="product-filter__row">-->
<!--								<div class="product-filter__title">По типу компрессора</div>-->
<!--								<div class="product-filter__disc">-->
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Инверторные сплит-системы',
//											'id' => 'invert',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Неинверторные сплит-системы',
//											'id' => 'not-invert',
//										]); ?>
<!--								</div>-->
<!--							</div>-->
<!--							<div class="product-filter__row">-->
<!--								<div class="product-filter__title">Размещение внутреннего блока</div>-->
<!--								<div class="product-filter__disc">-->
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Настенный',
//											'id' => 'wall',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Напольно-потолочный',
//											'id' => 'Floor-ceiling',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Колонный',
//											'id' => 'columned',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Кассетный',
//											'id' => 'Cassette',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'Канальный',
//											'id' => 'ducted',
//										]); ?>
<!--								</div>-->
<!--							</div>-->
<!--							<div class="product-filter__row">-->
<!--								<div class="product-filter__title">Для помещений площадью:</div>-->
<!--								<div class="product-filter__disc">-->
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'до 20 кв.м',
//											'id' => 'square1',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => '21-30 кв.м',
//											'id' => 'square2',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => '31-54 кв.м',
//											'id' => 'square3',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => '55-79 кв.м',
//											'id' => 'square4',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => '80-120 кв.м',
//											'id' => 'square5',
//										]); ?>
<!--									--><?//= Component::render(
//										'checkbox',
//										[
//											'label' => 'более 120 кв.м',
//											'id' => 'square6',
//										]); ?>
<!---->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!---->
<!--						<div class="product-filter__btn-container">-->
<!--							<div class="product-filter__btn btn">-->
<!--								<button id="reset-filter">Сбросить</button>-->
<!--							</div>-->
<!--							<div class="product-filter__btn btn">-->
<!--								<button>Подобрать</button>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!---->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

	<div class="products-screen homepage-screen">
		<div class="products-screen__row ">

			<div class="inner">
				<div class="title-block scroll-top-catalog">
					<h2 class="container">
						<span class="scroll-title">Каталог товаров</span>
						<span>
							<svg id="Layer_1" style="enable-background:new 0 0 128 128;"
								 version="1.1" viewBox="0 0 128 128" xml:space="preserve"
								 xmlns="http://www.w3.org/2000/svg"
								 xmlns:xlink="http://www.w3.org/1999/xlink" width="128"
								 height="128"><style type="text/css">
	.st0 {
		opacity: 0.2;
		fill: #FFFFFF;
	}

	.st1 {
		fill: #FFFFFF;
	}

	.st2 {
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st3 {
		fill: #5E61A3;
	}

	.st4 {
		opacity: 0.5;
		fill: #242C88;
	}

	.st5 {
		fill: #39C89A;
	}

	.st6 {
		fill: #CAEAFB;
	}

	.st7 {
		fill: #589FFF;
	}

	.st8 {
		fill: #FF5751;
	}

	.st9 {
		fill: #BC8D66;
	}

	.st10 {
		opacity: 0.7;
		fill: #FFFFFF;
	}

	.st11 {
		fill: #F1C92A;
	}

	.st12 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st13 {
		fill: #F3877E;
	}

	.st14 {
		fill: #83D689;
	}

	.st15 {
		opacity: 0.4;
		fill: #242C88;
	}

	.st16 {
		opacity: 0.2;
		fill: #242C88;
	}

	.st17 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st18 {
		fill: #FFC408;
	}

	.st19 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st20 {
		fill: none;
		stroke: #CAEAFB;
		stroke-width: 12;
		stroke-linecap: round;
		stroke-miterlimit: 10;
	}

	.st21 {
		fill: none;
		stroke: #CAEAFB;
		stroke-width: 7;
		stroke-linecap: round;
		stroke-miterlimit: 10;
	}

	.st22 {
		opacity: 0.4;
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st23 {
		opacity: 0.5;
	}

	.st24 {
		fill: #242C88;
	}

	.st25 {
		fill: none;
		stroke: #242C88;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st26 {
		opacity: 0.5;
		fill: #FFFFFF;
	}

	.st27 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st28 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st29 {
		fill: #E5BD9E;
	}

	.st30 {
		fill: #A06D47;
	}

	.st31 {
		opacity: 0.3;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0.1, 6;
	}

	.st32 {
		opacity: 0.1;
		fill: #242C88;
	}

	.st33 {
		opacity: 0.5;
		fill: #FF5751;
	}

	.st34 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st35 {
		opacity: 0.3;
		clip-path: url(#SVGID_2_);
	}

	.st36 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0, 6;
	}

	.st37 {
		opacity: 0.3;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 3;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
		stroke-dasharray: 0, 6;
	}

	.st38 {
		clip-path: url(#SVGID_4_);
	}

	.st39 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 9;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st40 {
		opacity: 0.3;
	}

	.st41 {
		opacity: 0.4;
		fill: #FFFFFF;
	}

	.st42 {
		opacity: 0.5;
		fill: #CAEAFB;
	}

	.st43 {
		opacity: 0.6;
		fill: #242C88;
	}

	.st44 {
		opacity: 0.5;
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st45 {
		opacity: 0.3;
		fill: #242C88;
	}

	.st46 {
		opacity: 0.2;
	}

	.st47 {
		clip-path: url(#SVGID_6_);
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st48 {
		opacity: 0.2;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 8;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st49 {
		clip-path: url(#SVGID_8_);
		fill: #FFFFFF;
	}

	.st50 {
		clip-path: url(#SVGID_8_);
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st51 {
		opacity: 0.2;
		clip-path: url(#SVGID_8_);
		fill: #242C88;
	}

	.st52 {
		opacity: 0.2;
		clip-path: url(#SVGID_8_);
		fill: none;
		stroke: #242C88;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st53 {
		fill: none;
		stroke: #242C88;
		stroke-width: 1.848;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st54 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 7;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st55 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 7;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st56 {
		opacity: 7.000000e-02;
		fill: #242C88;
	}

	.st57 {
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 4;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st58 {
		opacity: 0.4;
		fill: none;
		stroke: #FFFFFF;
		stroke-width: 8;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st59 {
		opacity: 0.2;
		fill: none;
		stroke: #242C88;
		stroke-width: 8;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st60 {
		fill: none;
		stroke: #FF5751;
		stroke-width: 4;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}

	.st61 {
		fill: none;
		stroke: #242C88;
		stroke-width: 4;
		stroke-linecap: round;
		stroke-linejoin: round;
		stroke-miterlimit: 10;
	}
</style><rect class="st1 choose-svg-elem-1" height="83" width="68" x="11" y="17"></rect><rect
									class="st2 choose-svg-elem-2"
									height="83" width="68" x="11"
									y="17"></rect><path
									class="st14 choose-svg-elem-3"
									d="M33,46H23c-1.1,0-2-0.9-2-2V34c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,45.1,34.1,46,33,46z"></path><path
									class="st14 choose-svg-elem-4"
									d="M32.8,66H23c-1.1,0-2-0.9-2-2V54c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v9.8C35,65,34,66,32.8,66z"></path><path
									class="st14 choose-svg-elem-5"
									d="M33,87H23c-1.1,0-2-0.9-2-2V75c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,86.1,34.1,87,33,87z"></path><path
									class="st2 choose-svg-elem-6"
									d="M33,46H23c-1.1,0-2-0.9-2-2V34c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,45.1,34.1,46,33,46z"></path><path
									class="st2 choose-svg-elem-7"
									d="M32.8,66H23c-1.1,0-2-0.9-2-2V54c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v9.8C35,65,34,66,32.8,66z"></path><path
									class="st2 choose-svg-elem-8"
									d="M33,87H23c-1.1,0-2-0.9-2-2V75c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C35,86.1,34.1,87,33,87z"></path><path
									class="st16 choose-svg-elem-9" d="M79,101V24H28c-1.1,0-2,0.9-2,2v75H79z"></path><rect
									class="st1 choose-svg-elem-10" height="83" width="68" x="31" y="29"></rect><rect
									class="st2 choose-svg-elem-11" height="83" width="68" x="31" y="29"></rect><line
									class="st34 choose-svg-elem-12" x1="63" x2="75" y1="53" y2="53"></line><line
									class="st34 choose-svg-elem-13" x1="63" x2="87" y1="48" y2="48"></line><path
									class="st14 choose-svg-elem-14"
									d="M54,58H44c-1.1,0-2-0.9-2-2V46c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,57.1,55.1,58,54,58z"></path><polyline
									class="st2 choose-svg-elem-15" points="45.3,51.7 48.2,54.4 53.9,48.6 "></polyline><line
									class="st34 choose-svg-elem-16" x1="63" x2="75" y1="74" y2="74"></line><line
									class="st34 choose-svg-elem-17" x1="63" x2="87" y1="68" y2="68"></line><path
									class="st14 choose-svg-elem-18"
									d="M54,78H44c-1.1,0-2-0.9-2-2V66c0-1.1,0.9-2,2-2h9.8c1.2,0,2.2,1,2.2,2.2V76C56,77.1,55.1,78,54,78z"></path><polyline
									class="st2 choose-svg-elem-19" points="45.3,71.9 48.2,74.6 53.9,68.9 "></polyline><line
									class="st34 choose-svg-elem-20" x1="63" x2="75" y1="94" y2="94"></line><line
									class="st34 choose-svg-elem-21" x1="63" x2="87" y1="89" y2="89"></line><path
									class="st14 choose-svg-elem-22"
									d="M54,98H44c-1.1,0-2-0.9-2-2V86c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,97.1,55.1,98,54,98z"></path><path
									class="st2 choose-svg-elem-23"
									d="M54,58H44c-1.1,0-2-0.9-2-2V46c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,57.1,55.1,58,54,58z"></path><path
									class="st2 choose-svg-elem-24"
									d="M54,78H44c-1.1,0-2-0.9-2-2V66c0-1.1,0.9-2,2-2h9.8c1.2,0,2.2,1,2.2,2.2V76C56,77.1,55.1,78,54,78z"></path><path
									class="st2 choose-svg-elem-25"
									d="M54,98H44c-1.1,0-2-0.9-2-2V86c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v10C56,97.1,55.1,98,54,98z"></path><polygon
									class="st16 choose-svg-elem-26"
									points="99,57.6 65.2,77.5 53.6,94.9 74.4,93.1 99,78.6 "></polygon><g><polygon
										class="st1 choose-svg-elem-27"
										points="111.4,50.1 73.8,87.7 54.1,94.6 61,74.9 98.6,37.3  "></polygon><rect
										class="st18 choose-svg-elem-28" height="18.1"
										transform="matrix(0.7071 -0.7071 0.7071 0.7071 -18.9596 79.2808)" width="53.2"
										x="59.6" y="53.5"></rect><rect class="st16 choose-svg-elem-29" height="5.3"
																	   transform="matrix(0.7071 -0.7071 0.7071 0.7071 -20.8293 83.7946)"
																	   width="53.2" x="64.1" y="64.4"></rect><polygon
										class="st3 choose-svg-elem-30" points="57.1,86 54.1,94.4 62.5,91.4  "></polygon><polygon
										class="st2 choose-svg-elem-31"
										points="111.4,50.1 73.8,87.7 54.1,94.6 61,74.9 98.6,37.3  "></polygon><path
										class="st13 choose-svg-elem-32"
										d="M111.4,50.1l6-6c1.7-1.7,1.7-4.4,0-6l-6.8-6.8c-1.7-1.7-4.4-1.7-6,0l-6,6L111.4,50.1z"></path><path
										class="st2 choose-svg-elem-33"
										d="M111.4,50.1l6-6c1.7-1.7,1.7-4.4,0-6l-6.8-6.8c-1.7-1.7-4.4-1.7-6,0l-6,6L111.4,50.1z"></path><line
										class="st2 choose-svg-elem-34" x1="80.6" x2="106.9" y1="73.4" y2="47.1"></line><line
										class="st2 choose-svg-elem-35" x1="70" x2="76.1" y1="84" y2="77.9"></line><rect
										class="st1 choose-svg-elem-36" height="18.1"
										transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5282 86.9153)" width="7.4"
										x="100.9" y="35.1"></rect><rect class="st16 choose-svg-elem-37" height="18.1"
																		transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5282 86.9153)"
																		width="7.4" x="100.9" y="35.1"></rect><rect
										class="st2 choose-svg-elem-38" height="18.1"
										transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.5282 86.9153)" width="7.4"
										x="100.9" y="35.1"></rect></g></svg>
						</span>
					</h2>
				</div>

				<div class="title-block">
					<div class="product-slider">
						<div class="product">
							<div class="product-swiper__wrapper catalog-list">
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner1.png">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisence AS-09UW4RYDDB05 Smart DC Inverter
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item"><span>Тип компрессора:</span> <span>инверторный</span>
														</li>
														<li class="product-swiper__item"><span>Размещение внутреннего блока:</span> <span>настенный</span>
														</li>
														<li class="product-swiper__item"><span>Площадь помещения:</span> <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item"><span>Уровень шума:</span> <span>23.5 - 40.5 дБ</span>
														</li>
														<li class="product-swiper__item"><span>Мощность кондиционера:</span> <span>9 BTU</span>
														</li>
														<li class="product-swiper__item"><span>Режим работы:</span> <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item"><span>Поддержка Wi-Fi:</span> <span>да</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>30 190 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditioner3.png">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UW4RYDTG05B
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>настенный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>27&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>23.5 - 47.5 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>44 990 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Hisense AS-09UR4SYDDB1G
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>настенный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>25&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>24 - 39 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>36 490 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">FUNAI RACI-SM25HP.D03
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>настенный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>25&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>19 - 36 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>9 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>33 700 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">FUNAI RACI-EM35HP.D03
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>настенный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>35&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>18 - 33 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>12 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>да</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>58 491 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Kentatsu KSGA26HZRN1/KSRA26HZRN1
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>настенный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>30&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>23 - 38.5 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>-</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>29 000 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">LG-UT48WC.NM1R0/UU49WC1.U31R0
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>кассетный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>140&nbsp;кв.м</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>-</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>-</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>-</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>238 550 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Канальная сплит-система Royal Clima ES-D 24HWX/ES-E 24HX
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>канальный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>-</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>-</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>-</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>-</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>103 200 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Колонный кондиционер Hisense AUF-48ER6SM
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>неинверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>колонный </span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>120 м.кв.</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>48 дБ - 52 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>48 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>188 190 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Канальная сплит-система Royal Clima ES-D 24HWX/ES-E 24HX
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>инверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>канальный</span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>-</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>-</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>-</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>-</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>103 200 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Колонный кондиционер Hisense AUF-48ER6SM
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>неинверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>колонный </span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>120 м.кв.</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>48 - 52 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>48 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>188 190 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Колонный кондиционер Hisense AUF-48ER6SM
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>неинверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>колонный </span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>120 м.кв.</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>48 - 52 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>48 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>188 190 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="product-swiper__slide catalog-slide">
									<div class="product-swiper__item item container">
										<div class="product-swiper__img">
											<img alt="product-swiper-img"
												 src="<?php bloginfo('template_url'); ?>/dist/images/conditional2.webp">
										</div>
										<div class="product-swiper__content">
											<div class="product-swiper__title">Колонный кондиционер Hisense AUF-48ER6SM
											</div>
											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Основные характеристики
													</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Тип компрессора: <span>неинверторный</span>
														</li>
														<li class="product-swiper__item">Размещение внутреннего блока: <span>колонный </span>
														</li>
														<li class="product-swiper__item">Площадь помещения: <span>120 м.кв.</span>
														</li>
													</ul>
												</div>
											</div>

											<div class="product-swiper__disk-wrap">
												<div class="product-swiper__disk">
													<div class="product-swiper__disk_title">Дополнительные характиристики</div>
													<div class="product-swiper__disk_arrow">
														<img alt="product-swiper-img"
															 src="<?php bloginfo('template_url'); ?>/dist/images/close-disk.png">
													</div>
												</div>
												<div class="product-swiper__detail">
													<ul class="product-swiper__list">
														<li class="product-swiper__item">Уровень шума: <span>48 - 52 дБ</span>
														</li>
														<li class="product-swiper__item">Мощность кондиционера: <span>48 BTU</span>
														</li>
														<li class="product-swiper__item">Режим работы: <span>охлаждение, обогрев</span>
														</li>
														<li class="product-swiper__item">Поддержка Wi-Fi: <span>нет</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-swiper__btn btn">
												<button class="btn-choose">Купить за <span>188 190 ₽</span></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="pagination-wrap">
								<a data-goto=".scroll-top-catalog" class="pagination-btn-p"></a>
								<ul id="pagination" class="pagination"></ul>
								<a data-goto=".scroll-top-catalog" class="pagination-btn-n"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
