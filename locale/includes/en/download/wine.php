
<h2>Available Wine packages</h2>
<p>
<?php
$conn_id = @ftp_ssl_connect("localhost");
$login_result = @ftp_login($conn_id, "poladmin", "Kq89NODW");
$wine = @ftp_nlist($conn_id,"/wine/linux-i386");
@ftp_close($conn_id);
$wine = array_reverse($wine);
foreach($wine as $key)
{
	if(!preg_match("#.pol.#",$key) && $key != "/wine/linux-i386/LIST")
	{	 
		$key = explode("/",$key);
		echo "<a href='http://wine.playonlinux.com/linux-i386/".$key[3]."'>".$key[3]."</a>";
		echo "<br />";
	}
} 
?>

</p>

