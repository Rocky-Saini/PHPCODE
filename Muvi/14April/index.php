<!-- <script>
    function show(){
    r=prompt("Roll : ");
    if(r){
        window.location="result.php?roll="+r;
    }
}
</script>
<input type="button" value="Result" onclick="show()">

<script>
    function show(){
        open('ticket.php',"Bus Ticket","width:300;height=400");

    }
</script>
<input type="button" value="Ticket" onclick="show()"/>


<script>
    function show(){
        print();
    }
</script>
<input type="button" value="Print" onclick="show()">

<script>
    r=Math.max(10,20,3,55,7);
    document.write(r);
</script>
<script>
    r=Math.pow(10,2);
    document.write(r);
</script>

<script>
    r=Math.floor(7/2);
    document.write(r);
</script> -->

<!-- <script type="text/javascript">
    function show(){
        d=new Date();
        h=d.getHours();
        m=d.getMinutes();
        s=d.getSeconds();
        document.getElementById('d').innerHTML=h+":"+m+":"+s;
        setTimeout("show()",1000);
    }
</script>
<body onload="show()">
<h1 id="d"></h1>
</body> -->

<!-- 
<html>
    <head>
        <script>
            function checkPassword(){
                var x=document.getElementById("t1").value;
                if(x.length>=6)
                {
                    alert("This is a valid Password");
                    document.getElementById("msg").style.visibility="hidden";
                }
                else{
                    document.getElementById("msg").style.visibility="visible";
                    document.getElementById("msg").innerHTML="<font color=red>Password must be more than 6 charcter length</font>";

                }
            }
       </script>
</head>
<body>
<table bgcolor=cyan width=30% align=center>
<tr>
    <td>Enter Password</td>
<td>
    <input type="password" name="t1" id="t1">
     <br>
    <div id="msg" style="visibility:hidden;">
</div>
 </td>
</tr>
<tr>
    <td>
        <input type="button" value="Register" onclick="checkPassword()"> 
</td>
</tr> 
</table>
</body>
</html>
 -->
<!-- 



<html>
<head>
    <script type="text/javascript" language="javasript">
        var ar = new Array("Sachin.jpg", "sehwag.jpg", "dhoni.jpg");
    function change()
    {
        j = Number(document.getElementById("p").value); 
        //alert(j); 
        document.getElementById("t1").src=ar[j]; 

    }
    </script>
</head>
<body>
    <form>
        <select onChange="change()" id="p">
       <option value="">select player name</option>
            <option value="0">sachin</option>
            <option value="1">sehwag</option>
            <option value="2">dhoni</option>
        </select>
        <img src="icon.png" id="t1" width=200 height=200 />
    </form>
</body>
</html> -->

<!-- <html>

<head>
    <script language="javascript" type="text/javascript">
    function showImg(i) {
        document.getElementById("big").src = i.src;
    }
    </script>
</head>

<body>
    <img src="icon.png" width="500px" height="300px" id="big">
    <hr color=red size=5>
    <img src="icon.png" width="150px" height="100px" id="img" onmouseover=showImg(this)>
    <img id="img1" src="Sachin.jpg" width="150px" height="100px" onmouseover =showImg(this)>

    <img id="img2" src="sehwag.jpg" width="150px" height="100px" onmouseover=showImg(this)>
     <img src="dhoni.jpg" id="img3" width="150px" height="100px" onmouseover= showImg(this)> 

</body>

</html> -->



<!-- 
<html>
<head>
    <title>Document Title Scroller </title>
    <script>
    
    function titlemove() {
        var d = new Date()
    var repeat = 1 //enter 0 to not repeat scrolling after 1 run, othersise, enter 1
    var title = document.title
    var leng = title.length
    var start = 1
        titl = title.substring(start, leng) + title.substring(0, start)
        document.title = titl
        start++
        if (start ==leng + 1) {
            start = 0
            if (repeat == 0)
                return
        }
        setTimeout("titlemove()", "1000");
        }
    </script>
    <head>
    <body onLoad=" titlemove()">
    </body>
</html> -->

<!-- <head>
    <script language="javascript" type="text/javascript">
    function Validate() {
        var x = document.getElementById('TextBox1').value;
        if (isNaN(x)) {
            alert("Enter Only Numbers");
            return false;
        } else if (x.length > 11 || x.length < 10) {

            alert("Enter Correct Mobile Number");
            return false;
        } else if (x.charAt("TextBox1") != "9") {
            alert("it should start with 9" ) ; 
                return false;
            }
            // else{
            //     alert("Number is correct");
            // }
        }
    </script>
</head>

<body>
    <input type="text" id="TextBox1" />
    <input type="button" name="button1" value="Ok" onclick="Validate()" />

</body> -->

<!-- 
<html>
<head>
    <script type="text/javascript">
    function validateForm()
    {
        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
        {
            alert("Not a valid e-mail address");
            return false;
        }
        }
    </script>
</head>
<body>
    <form name="myForm" action="" onSubmit="return validateForm()" method="post"> 
        Email: <input type="text" name="email"> 
        <input type="submit" value="Submit">
</form> -->
<html>
<head>
    <script>
    function validate(form_id, email) {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var address = document.forms[form_id].elements[email].value;
        if (reg.test(address) == false) {
            alert('Invalid Email Address');
            return false;
        }
    }
    </script>
</head>
<body>

    <form id="form_id" method="post" action="action.php" onsubmit="javascript:return validate('form_id', 'email');">

        <input type="text" id="email" name="email" />
         <input type="submit" value="Submit" />

    </form>