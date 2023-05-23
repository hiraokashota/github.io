<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>レポート</title>
        <style>
        body{font-size:16pt; color:#999;}
        h1{font-size: 40pt; text-align: center;
            }
        .contents {
            display: flex;
            width:1100px;
        }
        .item{
            width:calc(100% / 4);
            padding:20px 10px;
            text-align:center;
        }
        textarea{
            resize:none;
            width:800px;
            height:130px;
        }
        .totask{
            padding: 5px 15px;
            margin-top:20px;
        }
        </style>
    </head>
    <body>
        @foreach($reports as $report)
        <h1>レポート</h1>
        <form action="/" method="post">
            @csrf
            <div>
                <h2>目標値(直接入力)</h2>
                <input type="text" name="goal_value" value="{{ $report->goal_value }}" size = "10" maxlength = "10">g
            </div>
                <div class="contents">
                    <div class="item">
                        酒名1:<input type="text" name="alc_name1" value= "{{ $report->alc_name1 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv1" value="{{ $report->abv1 }}" size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity1" value="{{ $report->capacity1 }}" size = "5" maxlength = "10">ml <br>
                        個数:<input type="text" name ="count1" value="{{ $report->count1 }}" size = "3" maxlength = "5">杯
                            <!-- <div id="disp_count" name="count1"></div>
                            <input type="button" value="+" id="btn_count_up" />
                            <input type="button" value="リセット" id="btn_reset" /> -->
                    </div>

                    <div class="item">
                        酒名2:<input type="text" name="alc_name2" value= "{{ $report->alc_name2 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv2" value="{{ $report->abv2 }}" size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity2" value="{{ $report->capacity2}}" size = "5" maxlength = "10">ml <br>
                        個数:<input type="text" name ="count2" value="{{ $report->count2 }}" size = "3" maxlength = "5">杯
                            <!-- <div id="disp_count">{{ $report-> count2}}</div>
                            <input type="button" value="+" id="btn_count_up" />
                            <input type="button" value="リセット" id="btn_reset" /> -->
                    </div>
        
                    <div class="item">
                        酒名3:<input type="text" name="alc_name3" value= "{{ $report->alc_name3 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv3" value="{{ $report->abv3 }}" size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity3" value="{{ $report->capacity3}}" size = "5" maxlength = "10">ml <br>
                        個数:<input type="text" name ="count3" value="{{ $report->count3 }}" size = "3" maxlength = "5">杯
                            <!-- <div id="disp_count">{{ $report-> count3}}</div>
                            <input type="button" value="+" id="btn_count_up" />
                            <input type="button" value="リセット" id="btn_reset" /> -->
                    </div>
            
                    <div class="item">
                        酒名4:<input type="text" name="alc_name4" value= "{{ $report->alc_name4 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv4" value="{{ $report->abv4 }}" size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity4" value="{{ $report->capacity4}}" size = "5" maxlength = "10">ml <br>
                        個数:<input type="text" name ="count4" value="{{ $report->count4 }}" size = "3" maxlength = "5">杯
                            <!-- 個数カウント -->
                            <!-- <div id="disp_count">{{ $report-> count4}}</div>
                            <input type="button" value="+" id="btn_count_up" />
                            <input type="button" value="リセット" id="btn_reset" /> -->
                    </div>
                </div>
            <h2>実数値(実際に摂取したアルコール量)</h2> 
            <input type="text" name="result_value" value="{{ $report->result_value }}" size = "10" maxlength = "10">g 
            <p>アルコール量 = 容量 × アルコール度数 × 0.8</p>
                <h2>メモ</h2>
                <textarea name="memo" row="5" cols="60">{{ $report->memo }}</textarea><br>
                <div align="center">
                    <button class="totask" type="submit" value="" name="">完了</button>
                </div> 
        </form>
        
        <script>
            // ページが読み込まれたら実行
            window.onload = function() {

            // オブジェクトと変数の準備
            var count_disp = document.getElementById("disp_count");  
            var count_up_btn = document.getElementById("btn_count_up");
            var reset_btn = document.getElementById("btn_reset");
            var count_value = {{ $report-> count1}};

            // カウントアップボタンクリック処理
            count_up_btn.onclick = function (){
                count_value += 1;
                count_disp.innerHTML = count_value;
            };
            // カウントアップボタンのマウスダウン処理
            count_up_btn.onmousedown = function() {
                count_up_btn.style.backgroundColor = "#00FF00";
            }
            // カウントアップボタンのマウスアップ処理
            count_up_btn.onmouseup = function() {
                count_up_btn.style.backgroundColor = "";
            }
            // リセットボタンのクリック処理
            reset_btn.onclick = function (){
                count_value = 0; count_disp.innerHTML = count_value;
            }
            // リセットボタンのマウスダウン処理
            reset_btn.onmousedown = function() {
                reset_btn.style.backgroundColor = "#00FF00";
            }
            // リセットボタンのマウスアップ処理
            reset_btn.onmouseup = function() {
                reset_btn.style.backgroundColor = "";
            }
            };
        </script>
        @endforeach
    </body>
</html>