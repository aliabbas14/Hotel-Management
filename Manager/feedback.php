<?php
session_start();
include('config.php');
if(!isset($_SESSION['login1']))
{
  header('Location:index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>
	<?php 
		
		$select=mysqli_query($conn,"select * from feedback where status=0");
		$num=mysqli_num_rows($select);
		if($num>0)
		{

		?>
	<table  cellspacing="20">
			<tr><th align="center">
				Email

			</th>
			<th align="center">
				Feedback

			</th>
			<th align="center">
				Date And Time

			</th>
			<th>
				Action

			</th>
		</tr>
			<?php 
				while ($row=mysqli_fetch_array($select)) {
					# code...
			?>
			<tr><td>
				<?php 
					$data=mysqli_query($conn,"select email from feedback where feed_id=".$row['feed_id']);
					$email=mysqli_fetch_array($data);
					echo$email['email'];

				?>			

			</td>
				
				<td>
					<?php echo$row['feedback'];?>
				</td>
				<td>
				<?php echo$row['feed_date']; ?>
			</td>	
				<td>
					<form method="post"> 
						<input type="submit" name="approve" value="Approve">
						<input type="submit" name="delete" value="Delete">
					</form>
				</td>
			</tr>


<?php	
		if(isset($_POST['approve']))
		{
			$update=mysqli_query($conn,"update feedback set status=1 where feed_id=".$row['feed_id']);	

			if(!$update) 
			{}
			else
			{
				
				$secondsWait = 0;
				echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
				mysqli_close($conn);
			}

			
		}

			if(isset($_POST['delete']))
		{
			$delete=mysqli_query($conn,"delete from feedback where feed_id=".$row['feed_id']);
			if(!$delete)
			{}
			else
			{

				$secondsWait = 0;
				echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
				mysqli_close($conn);
			} 		
		}
}

			?>
	</table>
<?php		}
		else
			echo"<h2>No Feedback Yet!!</h2>";
		?>

</body>
</html>