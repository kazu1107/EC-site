<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>JavaScriptで音楽再生する方法をサンプルコード付き解説!</title>
    <link rel="stylesheet" href=""> {{-- <-href内にstyle.cssと記載してエラーのため未記載 --}}
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <div class="pr-4 flex justify-end pt-2 pb-2">
    <div>
        <!-- 再生ボタン -->
        <button id="play" class="rounded border-2 border-menu_logo_color border-solid text-menu_logo_color px-1 mr-2">♪</button><!-- #play -->
    </div>
    <div>
        <!-- 音量ボタン -->
        <button id="volume-up" class="rounded border-2 border-menu_logo_color border-solid text-menu_logo_color px-1">▲</button><!-- #volume-up -->
    </div>
    <div>
        <button id="volume-down" class="rounded border-2 border-menu_logo_color border-solid text-menu_logo_color px-1 ml-2">▼</button><!-- #volume-down -->
    </div>
    </div><!-- .container -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
{{-- <head>
    <meta charset="UTF-8">
    <title>JavaScriptで音楽再生する方法をサンプルコード付き解説！</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <div class="pr-4 flex justify-end pt-2 pb-2">
    <div>
        <!-- 再生ボタン -->
        <button id="play" class="btn btn-primary">♪</button><!-- #play -->
    </div>
    <div>
        <!-- 音量ボタン -->
        <button id="volume-up" class="btn btn-success"><i class="fas fa-caret-up"></i></button><!-- #volume-up -->
        <button id="volume-down" class="btn btn-success"><i class="fas fa-caret-down"></i></button><!-- #volume-down -->
        <!-- ミュートボタン -->
        <button id="mute" class="btn btn-warning"><i class="fas fa-volume-mute"></i></button><!-- .btn btn-warning -->
    </div>
    </div><!-- .container -->
    <script src="{{ asset('js/main.js') }}"></script>
</body> --}}
</html>
