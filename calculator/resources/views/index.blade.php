<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy Tính</title>
</head>
<body>
    <style>
        button{
            color:blue;
            border-color:black ;
            background: black;
            width: 75px;
            height: 50px;
        }
    </style>

    <table style="border: 30px solid green;" width="300px">
        <tr>
            <td colspan="4">
                <input type="text" id="number" width="100%" style="width: 94%; margin-left: 6px;">
            </td>
        </tr>
        <tr>
            <td text align="center"><button type="button" id="so_7" onclick="number(7)">7</button></td>
            <td text align="center"><button type="button" id="so_8" onclick="number(8)">8</button></td>
            <td text align="center"><button type="button" id="so_9" onclick="number(9)">9</button></td>
            <td text align="center"><button type="button" id="dau_chia" onclick="number('/')">/</button></td>
            <td text align="center"><button type="reset" id="CE" onclick="clean()">CE</button></td>

        </tr>
        <tr>
            <td text align="center"><button type="button" id="so_4" onclick="number(4)">4</button></td>
            <td text align="center"><button type="button" id="so_5" onclick="number(5)">5</button></td>
            <td text align="center"><button type="button" id="so_6" onclick="number(6)">6</button></td>
            <td text align="center"><button type="button" id="dau_nhan" onclick="number('*')">x</button></td>
            <td text align="center"><button type="reset" id="C" onclick="clean()">C</button></td>

        </tr>
        <tr>
            <td text align="center"><button type="button" id="so_1" onclick="number(1)">1</button></td>
            <td text align="center"><button type="button" id="so_2" onclick="number(2)">2</button></td>
            <td text align="center"><button type="button" id="so_3" onclick="number(3)">3</button></td>
            <td text align="center"><button type="button" id="dau_tru" onclick="number('-')">-</button></td>
            <td text align="center"><button type="button" id="dau_bang" onclick="tinh()">=</button></td>
             
            <!-- <td text align="center"><button type="button" id="dau_nhan" onclick="number('*')">x</button></td> -->
        </tr>
        <tr>
            <td colspan="2" text align="center"><button type="button" id="so_0" onclick="number(0)">0</button></td>
            <td text align="center"><button type="button" id="dau_phay" onclick="number(',')">,</button></td>
            <!-- <td text align="center"><button type="reset" id="C" onclick="clean()">C</button></td> -->
            <td text align="center"><button type="button" id="dau_cong" onclick="number('+')">+</button></td>

            <!-- <td text align="center"><button type="button" id="dau_bang" onclick="tinh()">=</button></td>
            <td text align="center"><button type="button" id="dau_chia" onclick="number('/')">/</button></td> -->
        </tr>
    </table>
    <script>
        function number(number){
         let tinh =  document.getElementById("number").value += number
        }
        function tinh(){
            let temp =document.getElementById("number").value
            temp = eval(temp)
            document.getElementById('number').value = temp
        }
        if (tinh==0)
        document.getElementById(number).value = number
        else
        document.getElementById(number).value += 1
        function bang(kq){
            document.getElementById("kq")
        }
       function clean(){
           document.getElementById('number').value = ""
       }
    </script>

    </body>
</html>