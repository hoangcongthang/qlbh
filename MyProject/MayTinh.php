<?php
$a = $b = $cal = $result = '';
if (isset($_GET['a'])) {
    $a = $_GET['a'];
}

if (isset($_GET['b'])) {
    $b = $_GET['b'];
}

if (isset($_GET['cal'])) {
    $cal = $_GET['cal'];
}

if ($a != '' && $b != '' && $cal != '') {
    switch ($cal) {
        case '+':
            $result = $a+$b;
            break;
        case '-':
            $result = $a-$b;
            break;
        case '/':
            $result = $a/$b;
            break;
        case '*':
            $result = $a*$b;
            break;
        case '%':
            $result = $a%$b;
            break;
    }
}
?>
<!DOCTYPE htmlDOCTYPE h >
<html>
    <head>
        <title>CALCULATOR</title>
        <style>
            div {
                border: 1px solid black;
                margin: -0px -2.5px -1.5px -2.5px;
            }
            div:hover {
                background: #cccccc;
            }
            div.small {
                width: 48px;
                height: 48px;
                display: inline-block;
                text-align: center;
            }
            div.small0 {
                width: 77px;
                height: 48px;
                display: inline-block;
                padding-left: 20px;
            }
            div.screen {
                height: 75px;
                width: 190px;
                padding-right: 5px;
                overflow: auto;
            }
            div.pheptinh {
                border: none;
                height: 25px;
                width: 100%;
                text-align: right;
            }
            div.result {
                height: 40px;
                width: 100%;
                background: #ccffff;
                border: none;
                text-align: right;
                font-size: xx-large;
                padding-top: 10px;
                margin-left: 2.5px;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <form method="get" name="myform" style="display: none;">
            <input type="text" name="a" id="a" value="" required>
            <input type="text" name="b" id="b" required>
            <input type="text" name="cal" id="cal" required>
        </form>
        <div class="screen">
            <div class="pheptinh"><?=($a.$cal.$b)?></div>
            <!-- <?php
            //echo $result; // 2 cach tuong dong
            ?> -->
            <div class ="result"><?=$result?></div>
        </div></br>
        <div class="small reset" value="AC">AC</div>
        <div class="small" value="+/-">+/-</div>
        <div class="small" value="%">%</div>
        <div class="small dau" value="/">/</div></br>
        <div class="small valuable" value="7">7</div>
        <div class="small valuable" value="8">8</div>
        <div class="small valuable" value="9">9</div>
        <div class="small dau" value="*">*</div></br>
        <div class="small valuable" value="4">4</div>
        <div class="small valuable" value="5">5</div>
        <div class="small valuable" value="6">6</div>
        <div class="small dau" value="-">-</div></br>
        <div class="small valuable" value="1">1</div>
        <div class="small valuable" value="2">2</div>
        <div class="small valuable" value="3">3</div>
        <div class="small dau" value="+">+</div></br>
        <div class="small small0 valuable" value="0">0</div>
        <div class="small valuable" value=".">.</div>
        <div class="small dau" value="=">=</div>
        
<script type="text/javascript">
    $(function() {
        //code -> load completed
        $('.small').click(function() {
            value = $(this).attr('value')
            console.log(value)
            if((value >= 0 && value <= 9) || (value == '.')) {
                //press number key
                if($('#cal').val() != '') {
                    $('#b').val($('#b').val() + value)
                } else {
                    $('#a').val($('#a').val() + value)
                }

            } else if(value == "+" || value == "-" || value == "*" || value == "/" || value == "%") {
                //press cal key
                $('#cal').val(value)
            } else if(value == "=") {
                //submit data
                $('[name=myform]').submit()
            } else {
                //reset data.
                $('#a').val('')
                $('#cal').val('')
                $('#b').val('')
            }
            $('.pheptinh').html($('#a').val() + $('#cal').val() + $('#b').val())
        })
    })
</script>
    </body>
</html>
