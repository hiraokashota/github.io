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
                <input type="text" name="goal_value" size = "10" maxlength = "10">g
            </div>
                <div class="contents">
                    <div class="item">
                        酒名1:<input type="text" name="alc_name1"  size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv1"  size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity1"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count1"  size = "3" maxlength = "5">杯
                            
                    </div>

                    <div class="item">
                        酒名2:<input type="text" name="alc_name2"  size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv2"  size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity2"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count2"  size = "3" maxlength = "5">杯

                    </div>
        
                    <div class="item">
                        酒名3:<input type="text" name="alc_name3"  size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv3"  size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity3"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count3"  size = "3" maxlength = "5">杯
                           
                    </div>
            
                    <div class="item">
                        酒名4:<input type="text" name="alc_name4"  size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv4"  size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity4"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count4"  size = "3" maxlength = "5">杯
                    </div>
                </div>
            <h2>実数値(実際に摂取したアルコール量)</h2> 
            <input type="text" name="result_value"  size = "10" maxlength = "10">g 
            <p>アルコール量 = 容量 × アルコール度数 × 0.8</p>
                <h2>メモ</h2>
                <textarea name="memo" row="5" cols="60"></textarea><br>
                <div align="center">
                    <button class="totask" type="submit" value="send" name="">完了</button>
                </div> 
        </form>
        
        @endforeach
    </body>
</html>