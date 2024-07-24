<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="https://user-images.githubusercontent.com/35811799/133475303-b524bf8a-134e-4d8a-8720-ab1037ebbeb2.png" />
<title>Volkov - The House Of Wolves</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<script>
    window.addEventListener('DOMContentLoaded', function(){
        document.querySelectorAll('[name="d1"]').forEach(function(item){
            item.addEventListener("toggle", event => {
            let toggled = event.target;
            if (toggled.attributes.open) {
                document.querySelectorAll('details[name="d1"], details[name="d2"]').forEach(function(opened){
                    if(toggled != opened)
                    opened.removeAttribute('open');
                });
            }
            })
        });
        document.querySelectorAll('[name="d2"]').forEach(function(item){
            item.addEventListener("toggle", event => {
            let toggled2 = event.target;
            if (toggled2.attributes.open) {
                document.querySelectorAll('details[name="d2"]').forEach(function(opened2){
                    if(toggled2 != opened2) 
                    opened2.removeAttribute('open');
                });
            }
            })
        });
    });
	</script>

	<style>
		
		#section {
			text-align: left;
			float:center;
			max-width:100%;
		}
		footer {
			text-align: center;
			width: 100%;
			height:100%;
			max-width:100%;
			max-height:100px;
			clear:both;
		}
		#notice{
			width:450px;
			text-align: left;
			float:left;
			clear:both;
			max-width:100%;
		}
		#low {
			list-style-type: none;
			cursor: default;
		}
		#ls{
			line-height: 30%;
		}
		#pficons{
			width:80px;
		}

	header { color: white; 
			 text-align: center;
	}
    body { background-color: black; }
    body { color: white; }
	
	a{ color: white;}
	a:link { color: white; text-decoration: none; }
    a:visited { color: white; text-decoration: none; }
    a:hover   { color: grey; text-decoration: none; }
    a:active  { color: lightgrey; text-decoration: none; }
	a:focus { color: none; text-decoration: none;}
	
	img { max-width:95%; height:auto }
	
	h1 {font-size: 45px; max-width:100%;}
	.no-drag {-ms-user-select: none; -moz-user-select: -moz-none; -webkit-user-select: none; -khtml-user-select: none; user-select:none;}
	
	summary:focus {outline:none;}
	summary{cursor: default;}

	
	nav {
			text-align: left;
			width:200px;
			float:left;
			max-width:100%;
			min-height: 300px;
			line-height: 2;
		}

	.tooltip{
     		position:absolute;
     		left: 150px;
     		text-align: left;
			 transform: translateY(-35px);
    	}

	details summary::-webkit-details-marker { display: block;}
	
	</style>

</head>
<body class="no-drag">
	<header align="center">
 <!-- Oh please, Keep out of our messy codes!
There's not much you can do or seek in here, I swear. -->
	<svg id="volkovlogo" align="center" alt="" width="device-width" height="370" viewBox="0.00 0.00 1000.00 900.00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<g stroke-linecap="round" id="Volkov">
	<path d="M643.18,93.41 L639.32,121.36 L548.64,235.91 L631.14,179.40 L593.18,395.91 L796.59,317.50 L706.02,429.83 L762.26,402.01 L632.33,557.90 L718.27,499.43 L682.23,582.05 L251.30,883.71 L471.36,511.74 L337.01,637.31 L176.59,629.62 L279.91,452.25 L276.71,328.64 L643.18,93.41 Z 
	M364.71,516.02 L344.24,526.93 L342.68,576.55 L364.71,516.02 Z
	M393.41,473.74 L372.50,560.08 L401.87,524.26 L393.41,473.74 Z
	M414.78,453.94 L415.67,521.14 L437.70,496.22 L414.78,453.94 Z
	M366.71,323.54 L363.37,400.76 L319.76,443.70 L332.67,368.49 L366.71,323.54 Z
	M471.22,408.96 L464.37,455.51 L543.76,387.83 L510.06,404.39 L540.33,347.56 L471.22,408.96 Z

	M669.59,275.03 L614.98,320.54 L606.50,358.69 L669.59,275.03 Z
	M431.77,181.40 L311.18,295.74 L382.87,248.36 L431.77,181.40 Z
	M332.30,839.77 L557.21,751.74 L761.90,563.33 L332.30,839.77 Z
	M481.19,832.49 L702.79,691.73 L749.84,603.72 L481.19,832.49 Z
	M587.98,776.26 L752.15,718.45 L711.22,710.65 L587.98,776.26 Z" 
	fill="rgb(255,255,255)" fill-rule="evenodd" stroke="none" stroke-width="0.10" stroke-opacity="1.00" stroke-linejoin="miter"/>
	</g>
	</svg>
	<br/>
	<svg id="volkovtext" align="center" width="device-width" height="80" viewBox="0.00 800.00 3508.00 1000.00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g stroke-linecap="round" id="volkovtext">
<path d="M2505.16,822.10 C2505.56,822.26 2506.37,822.72 2507.59,823.50 C2516.10,845.81 2536.86,900.28 2549.12,932.43 C2564.19,971.96 2591.51,1043.64 2603.77,1075.79 C2608.49,1088.18 2617.00,1110.49 2620.78,1120.42 C2604.99,1100.02 2591.73,1083.74 2579.47,1072.75 C2573.57,1067.48 2561.99,1058.51 2554.62,1053.43 C2547.56,1048.66 2535.24,1041.53 2527.60,1037.83 C2520.59,1034.46 2505.79,1028.58 2498.39,1026.07 C2489.07,1023.06 2475.87,1020.00 2468.13,1018.61 C2460.33,1017.34 2443.56,1015.53 2436.78,1015.22 C2429.00,1014.94 2414.44,1015.52 2405.57,1016.40 C2396.61,1017.44 2383.13,1019.75 2374.54,1021.73 C2368.70,1023.13 2352.49,1028.30 2345.29,1031.03 C2337.86,1033.92 2323.25,1041.08 2316.50,1045.15 C2304.94,1052.14 2278.91,1072.52 2270.10,1079.49 C2279.42,1056.82 2302.59,1000.53 2316.42,966.91 C2332.02,929.02 2358.91,863.67 2370.21,836.21 C2372.33,831.05 2375.86,822.48 2377.26,819.07 C2382.27,818.39 2399.70,816.03 2403.22,815.71 C2412.49,814.89 2430.98,815.03 2440.65,815.45 C2453.79,816.29 2504.79,821.96 2505.16,822.10 Z
M2377.18,1661.07 C2367.88,1638.40 2344.76,1582.12 2330.96,1548.51 C2315.40,1510.62 2288.57,1445.28 2277.30,1417.83 C2275.18,1412.68 2271.66,1404.11 2270.26,1400.69 C2280.84,1409.04 2307.76,1429.93 2320.11,1436.96 C2327.43,1441.10 2340.30,1447.07 2348.88,1450.32 C2356.10,1452.94 2370.85,1457.42 2378.34,1459.15 C2385.97,1460.84 2400.55,1463.10 2409.50,1463.99 C2417.33,1464.64 2431.65,1465.11 2440.68,1464.57 C2447.48,1464.16 2464.26,1462.09 2472.00,1460.70 C2480.96,1459.01 2493.51,1455.65 2502.11,1452.63 C2509.51,1449.96 2525.08,1443.36 2531.17,1440.33 C2539.28,1436.27 2551.43,1428.71 2557.88,1424.21 C2564.30,1419.60 2577.43,1409.02 2582.44,1404.44 C2588.14,1399.14 2598.02,1388.43 2603.67,1381.52 C2608.60,1375.30 2617.71,1362.43 2621.85,1355.83 C2624.90,1350.88 2632.82,1335.30 2635.99,1328.13 C2639.19,1320.73 2644.48,1305.43 2646.33,1298.24 C2648.11,1291.26 2650.86,1275.79 2651.99,1266.44 C2652.82,1258.46 2654.05,1240.41 2654.04,1234.96 C2654.01,1225.06 2651.82,1202.36 2651.72,1201.35 C2660.26,1223.69 2681.12,1278.23 2693.42,1310.42 C2708.56,1350.00 2736.00,1421.78 2748.31,1453.97 C2753.05,1466.38 2761.59,1488.72 2765.40,1498.66 C2762.21,1502.66 2754.05,1512.87 2749.09,1519.09 C2744.20,1525.02 2730.17,1539.95 2724.35,1545.51 C2713.45,1555.64 2688.02,1576.80 2674.96,1586.44 C2666.50,1592.46 2654.95,1599.98 2648.10,1604.19 C2634.66,1612.08 2602.96,1627.95 2591.64,1632.65 C2580.34,1637.33 2546.70,1648.54 2531.65,1652.45 C2523.81,1654.32 2511.06,1657.03 2499.99,1658.89 C2483.86,1661.29 2447.76,1664.41 2436.04,1664.85 C2417.16,1665.33 2400.46,1663.72 2377.18,1661.07 Z
M1129.13,1020.92 C1104.16,1017.02 1083.66,1014.43 1067.21,1015.25 C1059.34,1015.66 1044.87,1017.54 1035.94,1019.22 C1026.67,1021.10 1013.72,1024.56 1005.77,1027.31 C998.35,1029.89 983.81,1036.06 976.83,1039.59 C969.36,1043.37 956.62,1051.18 950.20,1055.57 C942.65,1060.91 931.49,1069.85 925.65,1075.31 C919.77,1080.83 908.22,1093.70 902.80,1100.66 C897.86,1107.18 889.76,1117.89 886.58,1122.09 C895.10,1099.87 915.84,1045.72 928.07,1013.79 C943.20,974.29 970.79,902.25 983.25,869.72 C992.00,846.89 1001.16,822.95 1001.59,821.85 C1014.21,820.49 1049.79,816.73 1063.16,815.76 C1071.31,815.30 1091.68,814.75 1099.83,815.14 C1105.79,815.45 1128.13,818.13 1129.04,818.24 C1129.06,845.13 1129.08,912.70 1129.10,953.38 C1129.11,983.37 1129.13,1017.13 1129.13,1020.92 Z
M742.08,1498.50 C750.62,1476.26 771.45,1422.06 783.73,1390.11 C798.92,1350.58 826.63,1278.48 839.14,1245.92 C847.92,1223.07 857.13,1199.12 857.56,1198.01 C856.88,1203.44 854.77,1220.46 854.42,1225.91 C853.82,1235.52 854.39,1251.05 855.05,1258.81 C856.19,1269.56 858.19,1282.83 859.87,1290.57 C861.82,1299.21 866.18,1313.45 869.03,1320.79 C871.40,1326.87 878.61,1342.29 882.27,1349.12 C885.45,1354.97 894.11,1368.08 899.46,1375.27 C904.30,1381.58 915.31,1394.50 919.90,1399.10 C924.50,1403.69 937.43,1414.71 943.73,1419.55 C950.92,1424.89 964.11,1433.60 969.89,1436.73 C976.75,1440.38 992.09,1447.49 998.35,1449.93 C1005.71,1452.78 1020.64,1457.37 1028.30,1459.18 C1035.91,1460.85 1052.86,1463.61 1059.36,1464.21 C1067.01,1464.89 1082.88,1465.08 1092.42,1464.27 C1100.28,1463.57 1126.74,1459.34 1129.03,1458.98 C1129.02,1485.90 1128.99,1553.56 1128.97,1594.30 C1128.96,1624.33 1128.94,1658.14 1128.94,1661.93 C1106.02,1664.16 1088.43,1665.37 1068.46,1664.67 C1053.30,1663.81 1020.13,1660.74 1004.03,1658.23 C994.89,1656.62 980.23,1653.41 972.43,1651.48 C957.70,1647.49 924.30,1636.04 912.76,1631.12 C898.43,1624.79 870.07,1610.28 856.47,1602.10 C849.65,1597.82 836.32,1588.79 829.78,1584.05 C816.87,1574.34 791.71,1553.08 781.05,1543.01 C768.57,1531.06 748.97,1507.03 742.08,1498.50 Z
M104.00,815.00 L304.00,815.00 L529.00,1390.00 L754.00,815.00 L954.00,815.00 L629.00,1665.00 L429.00,1665.00 L104.00,815.00 Z
M1179.00,815.00 L1179.00,1665.00 L1704.00,1665.00 L1704.00,1465.00 L1379.00,1465.00 L1379.00,815.00 L1179.00,815.00 Z
M1754.00,815.00 L1754.00,1665.00 L1954.00,1665.00 L1954.00,815.00 L1754.00,815.00 Z
M2129.00,815.00 L1954.00,1240.00 L2129.00,1665.00 L2329.00,1665.00 L2154.00,1240.00 L2329.00,815.00 L2129.00,815.00 Z
M2554.00,815.00 L2879.00,1665.00 L3079.00,1665.00 L3404.00,815.00 L3204.00,815.00 L2979.00,1390.00 L2754.00,815.00 L2554.00,815.00 Z"
fill="rgb(255,255,255)" stroke="none" stroke-width="0.00" stroke-opacity="1.00" stroke-linejoin="miter"/>
</g>
	</svg>
	<h2 id="ls">The House Of Wolves</h2>
	</header>
	<br/>
	@if (Auth::check())
		<a>로그아웃</a> / <a>내정보</a>
	@else
		<a href="{{ url('/login') }}">로그인</a> / <a href="{{ url('/register') }}">회원가입</a>
	@endif
	<br/>
		<nav>
			<details open name="d0"><summary><b><font size=+1>Menu</font></b></summary>
			<ul id="low">
				<li><details name="d1"><summary><b>Bots</b></summary>
					<span class="tooltip"><ul type="square">
						<li><a href="http://helena.volkov.kro.kr">Helena_V.discord</a></li>
						<li><a href="http://alicia.volkov.kro.kr">Alicia_V.kakao</a></li>
					</span></ul>
				</details></li>
				
				<li><details name="d1"><summary><b>Communities</b></summary>
					<span class="tooltip"><ul type="square">
					<ul type="square"><li><a href="https://www.youtube.com/channel/UCB_cfWvqFb_i3zh-kP5t2dA">YouTube</a></li></ul>
					<ul type="square"><li><a href="https://discord.gg/kFnK2Xd4sj">Discord</a></li></ul>


<ul type="square"><li><a href="https://open.kakao.com/o/grXZR7Xe">KakaoTalk</a></li></ul>
					</span></ul>
				</details></li>
				
				<li><details name="d1"><summary><b>Servers</b></summary>
					<span class="tooltip"><ul type="square">
					<li><a>Minecraft - mc.volkov.kro.kr</a>
					</ul></span>
				</details></li>
				
				<li><details name="d1"><summary><b>Workshop</b></summary>
					<ul class="tooltip" type="square">
					<li><summary>Clothing</summary></li>
					<li><summary>Coming Soon</summary></li>
					</ul>
				</details></li>
				
				<li><details name="d1"><summary><b>More</b></summary>
					<ul class="tooltip" type="none">
					<li><details name="d2"><summary><a href="http://about.volkov.kro.kr">About</a></summary>
						<ul class="tooltip" type="square">
						<li><summary>SuRang_Volkov</summary></li>
						<li><summary>Zikel_Armydan</summary></li>
						</ul>
					</details></li>

					<li><details name="d2"><summary>Contact</summary>
						<ul class="tooltip" type="square"><li>surang_volkov@kakao.com</li></ul>
					</details></li>
					<li><details name="d2"><summary>Support Us</summary>
						<ul class="tooltip" type="square"><li><a href="https://www.patreon.com/the_house_of_wolves">Patreon</a></li></ul>
					</details></li>
					</ul>
					
				</details></li>
			</ul>
		</nav>	
	
	<main>
	</main>
	
</body>
<footer>
	<p><hr><br/>Collaborated with Zikel Armydan.<br/>Copyright ⓒ 2018-2023 SuRang Volkov All Rights Reserved.</p>
<!-- I told ya. -->
</footer>
</html>

