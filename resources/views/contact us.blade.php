<!DOCTYPE html>
<html lang="en">
<head>
    <title>تواصل معنا </title>

    @include('header.head-contact')
</head>
<body>

    @extends('master')
    @section('content')
    <div class="bg-contact100" style="background-image: url('assets/images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form">
					<span class="contact100-form-title">
						تواصل معنا
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="إسم المستخدم">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true" id="icon"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="البريد الإلكتروني">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true" id="icon"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="أكتب رسالتك هنا"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
						إرسال
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
</body>
</html>
