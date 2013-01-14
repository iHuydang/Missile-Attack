<h1>Excuse Me!</h1>
<?php
if (!empty($_POST['name'])) {
  $fire = shell_exec('sudo python /home/pi/attack.py ' . $_POST['name']);
  echo '<h2>Successfully Fired on ' . $_POST['name'] . '</h2>';
}
?>
<p>Is Jill zoned out? Does Kyle have his headphones on? Select the person who isn't paying attention to you and click "Fire!".</p>
<form action="" method="POST">
  <select name="name">
    <option value="jay">Jay</option>
    <option value="jill">Jill</option>
    <option value="kyle">Kyle</option>
    <option value="mike">Mike</option>
    <option value="adam">Adam</option>
    <option value="john">John</option>
  </select>
  <br />
  <input type="submit" value="Fire!" />
  <p><em>Allow up to 15 seconds for the system to accquire missle lock on the target.</em></p>
</form>

<p>Are you trying to get the attention of someone who isn't on the list? Unfortunately, our missle launcher has limited range and is easily deflected by materials like glass.</p>


