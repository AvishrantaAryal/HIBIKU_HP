@extends('home-master')

<!-- page title -->
@if(App::isLocale('en'))
@section('page-title')	
{{$seo['title']}}
@endsection

@section('seo_description')
{{$seo['description']}}
@endsection

@section('seo_keyword')
{{$seo['keywords']}}
@endsection
@elseif(App::isLocale('jp'))
@section('page-title')	
{{$seo['title_japanese']}}
@endsection

@section('seo_description')
{{$seo['description_japanese']}}
@endsection

@section('seo_keyword')
{{$seo['keywords_japanese']}}
@endsection
@endif
<!-- page content -->
@section('content')

<div class="container pa-t pa-b" id="contact">
	<div class="row">

		<div class="col-md-12 col-sm-12" style=" margin-bottom: 80px !important;">
			<!-- SECTION TITLE -->
			<div class="contact-title">
				<h2>Get in touch</h2>
				<p>We`re here to help and answer any question you might have. We look forward to hearing from you.</p>
			</div>
		</div>

		<div class="col-md-7 col-sm-10">
			@if(Session::has('success'))
         <div class="alert alert-success alert-dismissible">
          <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Message Send Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif
			<!-- CONTACT FORM HERE -->
			<div class="wow fadeInUp" data-wow-delay="0.4s">
				<form id="contact-form" action="{{url('/store-contact')}}" method="post">
					{{csrf_field()}}
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name<br>お名前</label>
						<div class="col-md-6 col-sm-6">

							<input type="text" class="form-control" name="name" placeholder="Enter Your Name " required="">
						</div>
					</div>
					<div class="form-group row">
						<label for="company name" class="col-sm-2 col-form-label">Company Name<br>御社名 </label>
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" name="company_name" placeholder="Enter Your Company Name " required="">
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email<br>電子メイル</label>
						<div class="col-md-6 col-sm-6">
							<input type="email" class="form-control" name="email" placeholder="Enter Your Email " required="">
						</div>
					</div>

					<div class="form-group row">
						<label for="phone" class="col-sm-2 col-form-label">Phone No<br>電話番号</label>
						<div class="col-md-6 col-sm-6">
							<input type="text" class="form-control" name="phone" placeholder="Enter Your Phone no " required="">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="message" class="col-sm-2 col-form-label">Message<br>お問い合わせ内容</label>
						<div class="col-md-6 col-sm-6">
							<textarea class="form-control" rows="5" name="message" placeholder=" Your inquiry here " required=""></textarea>
						</div>
					</div>
					<div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
						<button id="submit" type="submit" class="form-control new-default-btn" name="submit" style="height: 54px !important;">Send Message<br>メッセージを送る</button>
					</div>
					
				</form>
				
			</div>
		</div>

		<div class="col-md-5 col-sm-8">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.430567922056!2d135.50764661486826!3d34.6690810924194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e740ea65f895%3A0x61f153c919ea0116!2zMi1jaMWNbWUtMyBTaGltYW5vdWNoaSwgQ2jFq8WNLWt1LCBPc2FrYSwgNTQyLTAwODIsIOCknOCkvuCkquCkvuCkqA!5e0!3m2!1sne!2snp!4v1598101073123!5m2!1sne!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<!-- CONTACT INFO -->
			<div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
				<div class="section-title">
					<h4>Contact Info</h4>
					<p>Hibiku Co., Ltd.</p>
				</div>

				<p><i class="fa fa-map-marker"></i>3rd floor, 18th Matsuya Building</p>
				<p><i class="fa fa-map-marker"></i>2-3-5 Andoji Town</p>
				<p><i class="fa fa-map-marker"></i>Chuo-ku, Osaka City</p>
				<p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">info@company.com</a></p>
				<p><i class="fa fa-phone"></i> 0000-000-000</p>
			</div>
		</div>

	</div>
</div>
@endsection