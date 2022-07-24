<html>
    <head>
        <style>
            #contextmenu{
                display:none;
                position:fixed;
                left:0px;
                top:0px;
                width:200px;
                height:100px;
                border:1px solid #000;
                background-color:#fff;
            }
            #contextmenu li{
                cursor:pointer;
            }
        </style>
        <script>
            window.onload = function(){
                document.body.addEventListener('contextmenu',function (e){
                    document.getElementById('contextmenu').style.left=e.pageX+"px";
                    document.getElementById('contextmenu').style.top=e.pageY+"px";
                    document.getElementById('contextmenu').style.display="block";
                });
                document.body.addEventListener('click',function (e){
                    document.getElementById('contextmenu').style.display="none";
                });
            }
            function menu1(){
                alert("menu1がクリックされました。");
            }
            function menu2(){
                alert("menu2がクリックされました。");
            }
            function menu3(){
                alert("menu3がクリックされました。");
            }
        </script>
    </head>
    <body onContextmenu="return false;">
        <div id="contextmenu">
            <ul>
                <li onClick="menu1()">menu1</li>
                <li onClick="menu2()">menu2</li>
                <li onClick="menu3()">menu3</li>
            </ul>
        </div>
    </body>
</html>