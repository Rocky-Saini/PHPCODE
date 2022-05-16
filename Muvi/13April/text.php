<!-- <script type="text/javascript">
    function show(){
        alert("Hello");
    }

</script>

<input type="button" onclick="show()" value="Ok" > -->
<!-- <script type="text/javascript">
    function show(){
        t=document.getElementById('a').innerHTML;
        document.getElementById('a').innerHTML=document.getElementById('b').value;
        document.getElementById('b').value=t;
    }
</script>

<h1 id="a">Hello</h1>
<input type="text" value="hi" id="b" />
<br>
<input type="button" value="swap" onclick="show()"/> -->

<!-- <body onload()>
</body> -->
<script>
    function f(obj){
        if(obj.value==obj.default(value)){
           obj.value="";
        }
    }
    function b(obj){
        if(obj.value=="")
        {
           obj.value=obj.defaultValue;
        }
    }
</script>
<input type="text" value="search" onfocus="f(this)" onblur="b(this)" />