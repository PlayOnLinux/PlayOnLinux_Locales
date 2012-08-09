
<h2>Available plugins</h2>
<p>
<?php
$files = opendir($racine."/script_files/plugins/");
while($file = readdir($files))
{
	if(preg_match("#.pol#",$file))
	{
		?>
		<a href="<?php echo $url; ?>/script_files/plugins/<?php echo $file; ?>"><?php echo $file; ?></a><br />
		<?php
	}
}
?>
</p>
<?php /*
<h2>Available wine packages</h2>
<p>
<?php
/$conn_id = @ftp_ssl_connect("localhost");
$login_result = @ftp_login($conn_id, "poladmin", "Kq89NODW");
$wine = @ftp_nlist($conn_id,"/wine/linux-i386");
@ftp_close($conn_id);
foreach($wine as $key)
{
	if(!preg_match("#.pol.#",$key))
	{	 
		echo $key;
		echo "<br />";
	}
} 
?>

</p>
<? */ ?>
