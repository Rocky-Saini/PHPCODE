<h1>Form</h1>
<form action="/action_page.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  Programming Languages: <br>    
              <input type="checkbox" id="C" name="C" value="C"/>    
                 <label>C</label> <br>    
              <input type="checkbox" id="Java" name="Java" value="Java" />    
                 <label>Java</label> <br>    
              <input type="checkbox" id="Python" name="Python" value="Python"/>    
                 <label>Python</label> <br>  
         <input type="checkbox" id="PHP" name="PHP" value="PHP"/>    
                 <label>PHP</label>  
  <br>  
  <p>Please select your age:</p>
  <input type="radio" id="age1" name="age" value="30">
  <label for="age1">0 - 30</label><br>
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">31 - 60</label><br>  
  <input type="radio" id="age3" name="age" value="100">
  <label for="age3">61 - 100</label><br><br>
  
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Muvi</option>
    <option value="saab">Saab</option>
    <option value="opel">Rocky</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
<textarea rows="4" cols="50" name="comment" form="usrform">
Enter text here...</textarea>
<br><br>
<input type="submit" value="Submit">
</form>