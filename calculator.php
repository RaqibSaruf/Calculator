<!DOCTYPE html>
<html>
<head>
    
    
    <script>
        function insert(num){
            document.form.textview.value = document.form.textview.value+num;
        }
        function equal(){
            var exp = document.form.textview.value;
            if(exp){
                document.form.textview.value=eval(exp);
            }
        }
        function clean(){
            document.form.textview.value="";
        }
        function back(){
            var exp = document.form.textview.value;
            document.form.textview.value=exp.substring(0,exp.length-1);
        }
    </script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .button{
            width: 50;
            height: 50;
            font-size: 25;
            margin: 2;
            cursor: pointer;
            background: grey;
            border: none;
            color: white;
        }
        .textview{
            width: 217;
            margin: 5;
            font-size: 25;
            padding: 5;
            border: none;
            background: black;
            color: white;
        }
         .main{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
       
        .bg{
            background: linear-gradient(to right,red,blue);
            height: 100%;
        }
    </style>

    
</head>
<body>
    <div class="bg"></div>
    <div class="main">
        <form name="form">
            <input class="textview" name="textview"><br>
        </form>
            <table>
                <tr>
                    <td><input class="button" type="button" value="C" onclick="clean()"></td>
                    <td><input class="button" type="button" value="<" onclick="back()"></td>
                    <td><input class="button" type="button" value="/" onclick="insert('/')"></td>
                    <td><input class="button" type="button" value="X" onclick="insert('*')"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="7" onclick="insert(7)"></td>
                    <td><input class="button" type="button" value="8" onclick="insert(8)"></td>
                    <td><input class="button" type="button" value="9" onclick="insert(9)"></td>
                    <td><input class="button" type="button" value="-" onclick="insert('-')"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="4" onclick="insert(4)"></td>
                    <td><input class="button" type="button" value="5" onclick="insert(5)"></td>
                    <td><input class="button" type="button" value="6" onclick="insert(6)"></td>
                    <td><input class="button" type="button" value="+" onclick="insert('+')"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="1" onclick="insert(1)"></td>
                    <td><input class="button" type="button" value="2" onclick="insert(2)"></td>
                    <td><input class="button" type="button" value="3" onclick="insert(3)"></td>
                    <td rowspan="2"><input class="button" type="button" style="width: 106" value="=" onclick="equal()"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="button" type="button" style="width: 106" value="0" onclick="insert(0)"></td>
                    <td><input class="button" type="button" value="." onclick="insert('.')"></td>
                    
                </tr>
            
            </table>
        
        
        
        
        
       
    
    
    
    
    </div>
    
</body>


</html>