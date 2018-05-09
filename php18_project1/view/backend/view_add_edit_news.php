<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<form class="form-controler" enctype="multipart/form-data" action="<?php echo $form_action; ?>" method="post" accept-charset="utf-8">
				<!-- from group -->
				<div class=" form-group">
					<div class="row">
						<div class="col-md-2">
							Tiêu đề
						</div>
						<div class="col-md-10">

						<input type="text" name="c_name" value="<?php echo isset($arr["c_name"])?$arr["c_name"]:""; ?>" class="form-control" required >
						</div>
					</div>
				</div>
				<!-- end form group -->

				<!-- from group -->
				<div class=" form-group">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10">

						<input type="checkbox" <?php echo isset($arr["c_hotnews"])&&$arr["c_hotnews"]==1?"checked":""; ?>  name="c_hotnews" >Tin nổi bật
						</div>
					</div>
				</div>
				<!-- end form group -->


				<!-- from group -->
				<div class=" form-group">
					<div class="row">
						<div class="col-md-2">Giới thiệu</div>
						<div class="col-md-10">

						<textarea name="c_description">
							<?php echo isset($arr["c_description"])?$arr["c_description"]:""; ?>
						</textarea>
						<script type="text/javascript">
							CKEDITOR.replace("c_description");
						</script>
						</div>
					</div>
				</div>
				<!-- end form group -->

				<!-- from group -->
				<div class=" form-group">
					<div class="row">
						<div class="col-md-2">Giới thiệu</div>
						<div class="col-md-10">

						<textarea name="c_content">
							<?php echo isset($arr["c_content"])?$arr["c_content"]:""; ?>
						</textarea>
						<script type="text/javascript">
							CKEDITOR.replace("c_content");
						</script>
						</div>
					</div>
				</div>
				<!-- end form group -->

				<!-- from group -->
				<div class=" form-group">
					<div class="row">
						<div class="col-md-2">Ảnh</div>
						<div class="col-md-10">
						<input type="file" name="c_img">
						</div>
					</div>
				</div>
				<!-- end form group -->


				<!-- from group -->
				<div class=" form-group">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-danger">
						</div>
					</div>
				</div>
				<!-- end form group -->
			</form>
		</div>
			
		</div>
	</div>
</div>