<div class="container-fluid pa-t pa-b home-request-form-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			 @if(App::isLocale('en'))
              <p>
					Our mission is to contribute to the growth of Japan and other Asian countries by creating human resources from such Asian countries and meeting Japanese.
					We will do our best to create as many good encounters with Asian people as possible to fulfill our mission.
 				</p>
              @elseif(App::isLocale('jp'))
              <p>私たちの使命は、日本をはじめとするアジア諸国の人材育成と日本人との出会いを通じて、アジア諸国の成長に貢献することです。</p>
              @endif
				
			</div>
			<div class="col-md-4">
				<ul class="nav-link">
				<li><a href="#" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-skype"></a></li>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid footer-copyright-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6 footer-copyright-left">
				<p>HIBIKU_HP &copy; {{date('Y')}}, All rights reserved</p>
			</div>
			<div class="col-md-6 footer-copyright-right">
				<p>Developed by : <a href="#" target="_blank">Intellisoft</a></p>
			</div>
		</div>
	</div>
</div>