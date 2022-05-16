<!-- <script>
    function chk(){
        valid=true;
        n=document.getElementById('n').value;
        if(n=="")
        {
            document.getElementById('nmsg').innerHTML="should not be Blank !";
            valid=false;
        }
        return valid;
    }
</script>


<form action="save.php" onsubmit="return chk()">

Name : <input type="text" name="n" id="n" />
        <span id="nmsg"></span>
        <br>
        <input type="submit" value="Save" />
</form> -->

<script type="text/javascript">
    function chk(){
        valid=true;
        n=document.getElementById('n').value;
        if(n=="")
        {
            document.getElementById('nmsg').innerHTML="should not be Blank !";
            valid=false;
        }else{
            document.getElementById('nmsg').innerHTML="";
        }
        mob=document.getElementById('m').value;
        exp="^[6-9]{1}[0-9]{9}$";
        if(!mob.match(exp))
        {
            document.getElementById('mmsg').innerHTML="Invalid Mobile !";
            valid=false;
        }else{
            document.getElementById('mmsg').innerHTML="";
        }
        return valid;
    }
</script>


<form action="save.php" onsubmit="return chk()">

Name : <input type="text" name="n" id="n" />
        <span id="nmsg"></span>
        <br>
        <br>
Mobile : <input type="text" name="m" id="m" />
        <span id="mmsg"></span>
        <br>
        <input type="submit" value="Save" />
</form>