<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">調子はどうですか？</div>

                <div class="panel-body">
                    <h3>今日の気分</h3>
                    <button class="btn btn-primary">happy</button>
                    <button class="btn btn-primary">sad</button>
                    <button class="btn btn-primary">angry</button>
                    <button class="btn btn-primary">excited</button>
                    <button class="btn btn-primary">calm</button>

                    <h3>原因</h3>
                    <select class="form-control">
                        <option>選択してください</option>
                        <!-- 他のオプションをここに追加 -->
                    </select>

                    <h3>今日のアクティビティ</h3>
                    <button class="btn btn-primary">exercise</button>
                    <button class="btn btn-primary">study</button>
                    <button class="btn btn-primary">hobby</button>
                    <button class="btn btn-primary">rest</button>

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

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ ($points % 1000) / 10 }}%;" aria-valuenow="{{ $points % 1000 }}" aria-valuemin="0" aria-valuemax="1000">
                            {{ $points % 1000 }} / 1000
                        </div>
                    </div>
                    
                    <p>次のステージまであと {{ 1000 - ($points % 1000) }} ポイント</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
