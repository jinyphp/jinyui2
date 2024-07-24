<x-theme-app theme="adminkit" class="bootstrap">
	<x-main-content class="d-flex w-100 h-100">

		<div class="container-fluid d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<x-card>
							<x-card-body>
								<div class="m-sm-4">
									<form>
										<x-form-row>
											<x-form-label>
												Email address
											</x-form-label>
											<x-form-item>
												<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
											</x-form-item>											
										</x-form-row>

										<x-form-row>
											<x-form-label>
												Password
											</x-form-label>	
											<x-form-item>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
											</x-form-item>											
											<small>
												<a href="pages-reset-password.html">Forgot password?</a>
											</small>
										</x-form-row>

										<x-form-row>
											<x-form-item>
												<label class="form-check">
													<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked="">
													<span class="form-check-label">
														Remember me next time
													</span>
												</label>
											</x-form-item>											
										</x-form-row>

										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Sign in</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</x-card-body>
						</x-card>


					</div>
				</div>
			</div>
		</div>
	</x-main-content>

</x-theme-app>   