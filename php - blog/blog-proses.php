<?php 
namespace proses;

class run
{
	function show_detail($id)
	{
		$sql = 'select * from post where id = ' . $id;

		$result = mysql_query($sql);

		while($data = mysql_fetch_array($result)) {
			?>
			<article>
				<header>
					<h2><?= $data['judul']; ?></h2>
					<span>
						Posted on <?= $data['tanggal']; ?>
					</span>
				</header>
				<img src="asset\img\<?= $data['img'] ?>">
				<?= $data['isi']; ?>
			</article>
			<?php	
		}
	}

	function show_artikel($category)
	{

		$sql = "
		select * 
		from post
		";

		if(@$category){
			$sql .= "where category = '{$category}'";
		} 

		$result = mysql_query($sql);

		while($data = mysql_fetch_array($result)) {
			?>
			<article>
				<header>
					<h2><?= $data['judul']; ?></h2>
					<span>
						Posted on <?= $data['tanggal']; ?>
					</span>
				</header>
				<img src="asset\img\<?= $data['img'] ?>">
				<?php
				$stringCut = substr($data['isi'], 0, 500); 
				$string = substr($stringCut, 0, strrpos($stringCut, '<p>'));
				echo $string;
				?>
				<a href="blog-detail.php?id=<?php echo $data['id']; ?>">
					Read More
				</a>
			</article>
			<?php	
		}
	}

	function folder($folder)
	{
		if (isset($folder['c'])) {
			?>
			<a>
				<?= "/ " . ucfirst($folder['c']); ?>			
			</a>
			<?php
		} else if (isset($folder['id'])) {
			?>
			<a>
				<?= "/ Detail"; ?>			
			</a>
			<?php
		}
	}
}

?>