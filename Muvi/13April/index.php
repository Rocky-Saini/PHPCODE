<!-- <script type="text/javascript">
   a=20;
   b=10;
   document.write(a+b + "<br/>");
   document.write(a-b + "<br/>");
   document.write(a*b + "<br/>");
   document.write(a/b + "<br/>");
   a++;
   a--;
   ++a;
   --a;

</script> -->
<!-- <script type="text/javascript">
    function show(){
    num=parseInt(document.getElementById('k').value);
    if(num%2==0){
        document.write("Even number");
    }else{
        document.write("Odd number")
    }
    }
</script>
number : <input type="text" id="k">
<break>
<input type="button" value="chk odd/even" onclick="show()" />
 -->
<!-- <script type="text/javascript">
    function chck_day(){
        day=document.getElementById('k').value;
        switch(day)
        {
               case 'monday':
                   msg="1st day of the week";
                   break;
               case 'tuesday':
                   msg="2 day of the week";
                   break;
               case 'wednesday':
                   msg="3th day of the week";
                   break;
                default:
                       msg="Invalid day";
                       break;
                   
       }
        document.getElementById('m').innerHTML=msg;
        
    }
</script>

 day: <input type="text" id="k" />
 <br>
 <br>
 <input type="button" value="chk day" onclick="chck_day()" />
 <h1 id="m"></h1> -->

<!-- using json -->
 <!-- <script type="text/javascript">
      var arr={
          bbsr:"60",
          ctc:"40"
      };
      for(x in arr){
          document.write(arr[x]);
      }
 </script> -->
<!-- <script type="text/javascript">
     arr = new Array(10,20,30,40);
    for(i in arr){
        if(arr[i]>25){
            break;
        }
        document.write(arr[i]+ "<br>");
    }
</script> -->
<script>
     arr = new Array(10,20,30,40,15);
    for(i in arr){
        if(arr[i]>25){
            continue;
        }
        document.write(arr[i]+ "<br>");
    }
</script>

 