<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="size">
      <form class="" action="assignment2.php" method="get">
        <fieldset>
        <legend>Form Validation</legend>

        Name:     <input type="text" name="name" value=""><br>
        Username: <input type="text" name="username" value=""><br>
        Password: <input type="password" name="pwd" value=""><br>
        Re-type Password: <input type="password" name="rpwd" value=""><br>
        Gender:   <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other <br>
        Programming Skills: <input type="checkbox" name="skill" value="java">java
                            <input type="checkbox" name="skill" value="android">Android
                            <input type="checkbox" name="skill" value="ruby">Ruby
                            <input type="checkbox" name="skill" value="net">Net <br>
        Contact no: <input type="number" name="contact" value=""><br>
        Email: <input type="text" name="email" value=""> <br>
        College: <select name="opt" class="" id="sel1"><br>
                      <option>Trust College</option>
                      <option>Mrigi Shahid Dianat College</option>
                      <option>Rajbari Govt College</option>
                      <option>Uttara Model School and College</option>
                      <option>Rajuk College</option>
                      <option>Faridpur Rajendra College</option>

                  </select> <br>
                  <input type="submit" name="" value="Submit">
      </fieldset>
      </form>
    </div>

  </body>
</html>
