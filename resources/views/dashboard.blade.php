<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ダッシュボード</title>
    <!-- 必要なCSSとJavaScriptのリンクをここに追加 -->
</head>
<body>
    <h1>ダッシュボード</h1>
    
    <button class="btn btn-primary">exercise</button>
    <button class="btn btn-primary">study</button>
    <button class="btn btn-primary">hobby</button>
    <button class="btn btn-primary">rest</button>
    
    @if(isset($stage) && isset($points))
        <h4>現在のステージ: {{ $stage }}</h4>
        <h4>現在のポイント: {{ $points }}</h4>
        <!-- アニメーションの表示 -->
        <div class="animation-container">
            @if ($stage == '赤ちゃん')
                <img src="/images/baby.png" alt="赤ちゃん">
            @elseif ($stage == '子供')
                <img src="/images/child.png" alt="子供">
            @elseif ($stage == 'ティーンエイジャー')
                <img src="/images/teenager.png" alt="ティーンエイジャー">
            @elseif ($stage == '大人')
                <img src="/images/adult.png" alt="大人">
            @else
                <img src="/images/elder.png" alt="老人">
            @endif
        </div>
    @else
        <p>データが利用できません。</p>
    @endif
</body>
</html>