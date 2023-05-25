<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>レポート</title>
        <style>
        body{font-size:16pt; color:#999;}
        .outer{
            text-align: center;
            }
        .inner{
            display: inline-block;
            text-align: left;
            }
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
            width:100%;
            height:70px;
        }
        .totask{
            padding: 5px 15px;
            margin-top:20px;
        }
        .back{
            margin-top:15px;
        }
        .explanation{
            font-size:12pt;
            color:#333;
        }
        .flex_box{
            display:flex;
            align-items:center;
        }
        </style>
    </head>
    <body>
        <h1>レポート</h1>
        <div class="outer">
        <div class="inner">
        

        <form action="/tasks/{{ $reports->id }}" method="post">
            @csrf

            <div>
                <div class="flex_box"><h2>目標値</h2> <div>(直接入力)</div></div>
                <input type="text" name="goal_value" value="{{ $reports->goal_value }}" size = "10" maxlength = "10">g
            </div>
                <div class="contents">
                    <div class="item">
                        酒名1:<input type="text" name="alc_name1" value="{{ $reports->alc_name1 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv1" value="{{ $reports->abv1 }}"   size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity1" value="{{ $reports->capacity1 }}"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count1" value="{{ $reports->count1 }}"  size = "3" maxlength = "5">杯
                            
                    </div>

                    <div class="item">
                        酒名2:<input type="text" name="alc_name2"value="{{ $reports->alc_name2 }}"  size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv2" value="{{ $reports->abv2 }}" size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity2" value="{{ $reports->capacity2 }}"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count2" value="{{ $reports->count2 }}"  size = "3" maxlength = "5">杯

                    </div>
        
                    <div class="item">
                        酒名3:<input type="text" name="alc_name3" value="{{ $reports->alc_name3 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv3" value="{{ $reports->abv3 }}" size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity3" value="{{ $reports->capaciy3 }}"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count3" value="{{ $reports->count3 }}"  size = "3" maxlength = "5">杯
                           
                    </div>
            
                    <div class="item">
                        酒名4:<input type="text" name="alc_name4" value="{{ $reports->alc_name4 }}" size = "17" maxlength = "20"><br>
                        アルコール度数:<input type="text" name ="abv4" value="{{ $reports->value4 }}"  size = "3" maxlength = "5">% <br> 
                        容量:<input type="text" name="capacity4" value="{{ $reports->capacity4 }}"  size = "5" maxlength = "10">ml <br>
                        杯数:<input type="text" name ="count4" value="{{ $reports->count4 }}"  size = "3" maxlength = "5">杯
                    </div>
                </div>
            <div class="flex_box"><h2>実数値</h2> <div>(実際に摂取したアルコール量)</div></div>
            <input type="text" name="result_value" value="{{ $reports->result_value }}"  size = "10" maxlength = "10">g 
            <p class="explanation">アルコール量 = 容量 × アルコール度数 × 0.8</p>
                <h2>メモ</h2>
                <textarea name="memo" row="5" cols="60">{{ $reports->memo }}</textarea><br>
                <div align="center">       
                    <button class="totask" type="submit" value="send" name="">完了</button>
                </div> 
                <div class="back" align="center">       
                    
                    <a href="/tasks" >戻る</a>
                </div> 
            
        </form>
        
    
    </div>
    </div>
    </body>
</html>