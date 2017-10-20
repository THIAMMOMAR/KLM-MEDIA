<?php $this->layout('layout', ['title' => 'Add Wine']) ?>


<?php $this->start('main_content') ?>
<form method="POST" enctype="multipart/form-data">

	<div class="form-group row">
		<label for="inputFile" class="col-sm-2 col-form-label">Picture</label>
		<div class="col-sm-3">
			<input type="file" class="form-control-file is-invalid" id="inputFile" name="photo" required>
			<div class="invalid-feedback">
				<?php
				foreach ($msg as $key => $value) {
					if(is_array($value) && array_key_exists('photo', $value))
						{?>
							<p><?= $value['photo'] ?></p>
							<?php } } ?> 
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputWine" class="col-sm-2 col-form-label">Wine Name</label>
					<div class="col-sm-8">
						<input type="text" class="form-control is-invalid" id="inputWine" placeholder="Red Wine" name="winename" required>
						<div class="invalid-feedback">
							<?php
							foreach ($msg as $key => $value) {
								if(is_array($value) && array_key_exists('winename', $value))
									{?>
										<p><?= $value['winename'] ?></p>
										<?php } } ?> 
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
								<div class="form-group col-md-2">
									<input type="text" class="form-control is-invalid" id="inputPrice" placeholder="45,00" name="price" required>
									<div class="invalid-feedback">
										<?php
										foreach ($msg as $key => $value) {
											if(is_array($value) && array_key_exists('price', $value))
												{?>
													<p><?= $value['price'] ?></p>
													<?php } } ?> 
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="textContent" class="col-sm-2 col-form-label">Contents</label>
											<div class="form-group col-md-8">
												<textarea class="form-control" id="textContent" rows="3" name="content" required></textarea>
												<div class="invalid-feedback">
													<?php
												foreach ($msg as $key => $value) {
												if(is_array($value) && array_key_exists('picture', $value))
													{?>
														<p><?= $value['picture'] ?></p>
														<?php } } ?> 
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="Origin" class="col-sm-2 col-form-label">Origin</label>
											<div class="col-sm-8">
												<input type="text" class="form-control is-invalid" id="Origin" placeholder="Montreal, Canada" name="origin" required>
												<div class="invalid-feedback">
													<?php
													foreach ($msg as $key => $value) {
													if(is_array($value) && array_key_exists('origin', $value))
													{?>
														<p><?= $value['origin'] ?></p>
														<?php } } ?> 
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="inputCreator" class="col-sm-2 col-form-label">Creator</label>
											<div class="col-sm-8">
												<input type="text" class="form-control is-invalid" id="inputCreator" name="creator" required>
												<div class="invalid-feedback">
													<?php
													foreach ($msg as $key => $value) {
													if(is_array($value) && array_key_exists('creator', $value))
													{?>
														<p><?= $value['creator'] ?></p>
														<?php } } ?> 
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="inputSugar" class="col-sm-2 col-form-label">Sugar content</label>
											<div class="form-group col-md-2">
												<input type="text" class="form-control is-invalid" id="inputSugar" placeholder="5 g/L" name="sugar" required>
												<div class="invalid-feedback">
													<?php
													foreach ($msg as $key => $value) {
													if(is_array($value) && array_key_exists('sugar', $value))
													{?>
														<p><?= $value['sugar'] ?></p>
														<?php } } ?> 
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="inputCut" class="col-sm-2 col-form-label">Cut</label>
											<div class="form-group col-md-2">
												<input type="text" class="form-control is-invalid" id="inputCut" placeholder="750 mL" name="cut" required>
												<div class="invalid-feedback">
													<?php
													foreach ($msg as $key => $value) {
													if(is_array($value) && array_key_exists('cut', $value))
													{?>
														<p><?= $value['cut'] ?></p>
														<?php } } ?> 
												</div>
											</div>
										</div>

										<div class="form-group row">
											<button class="btn btn-primary" name="valid" type="submit">Submit</button>
											<div class="invalid-feedback">
												<?php  if (array_key_exists('info', $msg)) { ?>
													<p>
													<?= $msg['info'] ?>
													</p>
							<?php } ?>
											</div>
										</div>
									</form>
									<?php $this->stop('main_content') ?>