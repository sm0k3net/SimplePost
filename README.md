SimplePost
==========

Simple posting engine (very simple)
<hr />


<h3>Manual:</h3>
<hr />

 <ol>
  <li> Install</li>
  <li> Connect to DB</li>
  <li> Configure data output on our page</li>
 </ol>
  
  
==========
 
 <ol>
  <li> Upload data on your hosting and import SQL script</li>
  <li> Open "connect.php" file and change fileds: $user, $password, $dbname</li>
  <li> On page (index.php?!) where you want to show data from db add next:
       <br> * <?php include "post.php" ?> // our file to access db
       <br> * <?php $sel_query = 'SELECT * FROM BlogDB ORDER BY id DESC LIMIT 5'; // order by id desc limit 5 Will show last 5 posts
       <br> &nbsp;&nbsp;&nbsp; $res = mysql_query($sel_query);
       <br> &nbsp;&nbsp;&nbsp; while ($row = mysql_fetch_array($res)) {
       <br> &nbsp;&nbsp;&nbsp; echo "<span> " . $row['date'] . "</span>" . "&nbsp;<span> <b>" . $row['title'] . "</b></span>" . "&nbsp;&nbsp;" . $row['message'] . "&nbsp;&nbsp;" . $row['status'] . "<br />";
       <br> &nbsp;&nbsp;&nbsp; } ?>
  </li>
 </ol>
 
 * * *
 
 <b>WARNING! This form is exploitable with SQLi and XSS. If you want to make it secure, read about mysql_real_escape_string and htmlspecialchars (htmlentities).</b>
