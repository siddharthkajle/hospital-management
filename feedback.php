<!doctype html>
<html>
<head>
 <style>
     fieldset{
             width: 580px;
             height: 840px;
             border-radius: 30px;
             background:rgb(241, 196, 15,0.5);
           }
     td{
         text-decoration:none;
         font-size: 18px;
          text-decoration-style: solid;
         }
      input{ 
           width: 182px;
           hight: 25px;
           border-radius: 5px;
           outline:none;
           text-indent: 5px;
          }
     input[type="submit"]:hover{
       background-color:cornflowerblue;
       }
     textarea{
       width:182px;
       border-radius:18px;
       outline:none;
       text-indent: 5px;
    }
    table{
        line-height:30px;
       }
    body{
          background-image: url("i5.jpg");
         }
 
</style>

<meta charset="uft-8">
<title>feed</title>
</head>
<body>
     <center>
        <form method='post' action='submit.php'>
            <fieldset >
               <table>  
               <b><h1> YOUR FEEDBACK</h1></b>
               <h2>******************</h2>
                <tr>
                 <td> user name </td>
                  <td>:</td>
                 <td><input type="text" name="xyz" id="pqr" placeholder="enter your name"></td>
                 </tr>
                
                 <tr>
                 <td> email </td>
                 <td>:</td>
                 <td><input type="text" name="abc" id="pqr" placeholder="enter your email"></td>
                 </tr>
                 
                  <tr>
                 <td> suggestion & idea </td>
                 <td>:</td>
                 <td><textarea rows="5" cols="21" name="comment"">
                    enter your suggestion and ideas...</textarea></td>

                 </tr>
               </table>
              
               <h2> There is no failure only feedback </h2><br>
                 <h2>rate us </h2><br>
                <table>
                 <tr><td> <input type="radio" name="rating" value=" bad" checked="checked" ></td><td><p> &#x1F61E bad;</p></td></tr>
                 <tr><td>  <input type="radio" name="rating" value="  not bad"></td><td> <p> &#x2639 not bad;</p> </td></tr>
                 <tr><td>  <input type="radio" name="rating" value="    satisfying"></td><td> <p> &#x1f610 satisfying;</p></td></tr>
                 <tr><td>  <input type="radio" name="rating" value="good"></td><td> <p> &#x1f642 good;</p>  </td></tr>
                 <tr><td>  <input type="radio" name="rating" value=" exellent" ></td><td><p> &#x1f603 execllent;</p></td></tr>
                 </table> 
               <br>
                <input type="submit" style='background:rgb(142, 68, 173,0.3); width:200px;height:50px;color:white;font-size:20px;' value="submit">
                <br><br>
               </fieldset>
             </form> 
</center>
<br><br>
</body>
</html>