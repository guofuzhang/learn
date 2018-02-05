<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>ckplayer</title>
		{{--<script type="text/javascript" src="ckplayer/ckplayer.js"></script>--}}
		<script type="text/javascript" src="/ckplayer/ckplayer/ckplayer.js"></script>
		<style type="text/css">body{margin:0;padding:0px;font-family:"Microsoft YaHei",YaHei,"微软雅黑",SimHei,"黑体";font-size:14px}</style>

	</head>

	<body>
		<div id="video" style="width: 600px; height: 400px;"></div>
		<script type="text/javascript">
			var videoObject = {
				container: '#video', //容器的ID或className
				variable: 'player',//播放函数名称
				flashplayer:true,
				poster:'/aetherupload/display/file/201802/a4873998536ec8c4ebbda0b6306c319c.jpg',//封面图片
				video: [//视频地址列表形式
//					['/aetherupload/display/file/201802//35528ff1db8f8b2ae102eebf2af8f439.wmv', 'video/mp4', '中文标清', 0],
					['/aetherupload/display/file/201802/2ed9319bc70ec4ab59e73f5defbfb36a.mp4', 'video/mp4', 'honglonglong  wang', 0],
//                    D:\test02\gf\learn\storage\app\aetherupload\file\201802\b4dfd7ab05ba653d896d40a95e6ee545.wmv

					['http://img.ksbbs.com/asset/Mon_1703/d0897b4e9ddd9a5.mp4', 'video/mp4', '中文高清', 0],
//                    D:\test02\gf\learn\storage\app\aetherupload\file\201802\cb94e3301303423c24ae6212ee600181.jpg
					['http://img.ksbbs.com/asset/Mon_1703/eb048d7839442d0.mp4', 'video/mp4', '英文高清', 10],
					['http://img.ksbbs.com/asset/Mon_1703/d30e02a5626c066.mp4', 'video/mp4', '英文超清', 0],
				]
			};
			var player = new ckplayer(videoObject);
		</script>
	</body>

</html>