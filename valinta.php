<?php include "menu.php"; ?>
   <h1>Xerox huoltosivusto</h1>
   <hr>


     <h3>Valitse konemalli ja tehtävä työ</h3>
     	<p>
<br>
     		<form class="" action="show_post.php" method="post">
          <select class="" name="malli">
                  <option value="7245">Wc7245</option>
                  <option value="7325">Wc7325</option>
                  <option value="7555">Wc7555</option>
          				<option value="7865">Wc7865</option>
                </select>
                <br>
                <br>
          <select class="" name="työ">
                        <option value="Fuser">Fuser</option>
                				<option value="belt">Siirto-osisto</option>
                				<option value="Rullat">Rullat</option>
                				<option value="Ros">Ros</option>
                      </select>
           <br>
           <br>
           <input type="submit" name="" value="Hae">
   <br>
</biv>
</body>
</html>
	<?php include "footer.php"; ?>
