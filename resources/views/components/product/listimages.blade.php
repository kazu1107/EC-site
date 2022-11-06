<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>6-2-4 サムネイルをクリックすると、メイン画像が切り替わる1</title>
<meta name="description"  content="書籍「動くWebデザインアイディア帳」のサンプルサイトです">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
{{-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css"> --}}
{{-- ↑のせいで検索ボックスのボーダーが消えるのでコメントアウト --}}
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
{{-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-4/css/6-2-4.css"> --}}
<style>
    /*==================================================
スライダーのためのcss
===================================*/


/*画像の横幅を100%にしてレスポンシブ化*/


.big{
    height: 400px;
    margin: 0 auto;
}

.small{
    margin: 0 auto;
}

/*メイン画像下に余白をつける*/

.gallery{
	margin:0 0 5px 0;
}

/*矢印の設定*/

/*戻る、次へ矢印の位置*/
.slick-prev,
.slick-next {
    position: absolute;/*絶対配置にする*/
	z-index: 3;
    top: 42%;
    cursor: pointer;/*マウスカーソルを指マークに*/
    outline: none;/*クリックをしたら出てくる枠線を消す*/
    border-top: 2px solid #ccc;/*矢印の色*/
    border-right: 2px solid #ccc;/*矢印の色*/
    height: 25px;
    width: 25px;
}

.slick-prev {/*戻る矢印の位置と形状*/
    left:2.5%;
    transform: rotate(-135deg);
}

.slick-next {/*次へ矢印の位置と形状*/
    right:2.5%;
    transform: rotate(45deg);
}

/*選択するサムネイル画像の設定*/

.choice-btn li{
	cursor: pointer;
	outline: none;

	width:50%!important;
}

.choice-btn li.slick-current img{
	opacity: 1;
}/*選択されているものは透過しない*/

/* .choice-btn li img{
	opacity: 0.4;
} *//*選択されていないものは透過40%*/

.choice-btn .slick-track {
	transform: unset !important;/*画面幅サイズ変更に伴うサムネイル固定*/
}


/*========= レイアウトのためのCSS ===============*/

/*エリア全体を中央寄せ*/
.wrapper{
	width:94%;
	max-width:900px;
	margin:0 auto;
}

ul{
	margin:0;
	padding: 0;
	list-style: none;
}

a{
	color: #333;
}

a:hover,
a:active{
	text-decoration: none;
}

h1{
	text-align: center;
	font-size:6vw;
	letter-spacing: 0.1em;
	text-transform: uppercase;
	margin:30px 0;
}

p{
	margin:30px 0;
	word-wrap : break-word;
}

</style>
</head>

<body>

<div class="wrapper">

    <ul class="gallery">
    @foreach($images as $image)
    <div class="rounded bg-neutral-100">
        <li class="big"><img alt="" class="rounded bg-neutral-100 h-full
                    object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}"></li>
    </div>
    @endforeach
    </ul>
    <ul class="choice-btn">
    @foreach($images as $image)
    <div class="rounded bg-neutral-100">
        <li class="small"><img alt="" class="rounded bg-neutral-100
                    object-contain mx-auto my-auto" src="{{ asset('storage/images/' . $image->name) }}"></li>
    </div>
    @endforeach
    </ul>

<!--/wrapper--></div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-4/js/6-2-4.js"></script></body>
</html>
