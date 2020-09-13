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

<div class="container pa-t pa-b">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8 card">

				<p>ヒビクパートナーズ  ( HIBIKU Partners) </p>
				<p style="text-align:center;">
					<li style="display: inline;">日本 ( Japan )</li>
					<ul style="list-style-type:disc;">	有料職業紹介 (Recruitment Company)：</ul>
					<li style="display: inline;"><a href="http://fonege.com/" target="_blank">株式会社フォネッジ</a></li>
					<li style="display: inline"><a href="http://lucentdoors.co.jp/" target="_blank">ルーセントドアーズ株式会社</a></li>
					<li style="display: inline"><a href="http://www.img1014831.com/" target="_blank">株式会社</a></li>
					<li style="display: inline"><a href="http://www.nihon-denki.com/agency/" target="_blank">日本電機株式会社</a></li>
					<li style="display: inline"><a href="http://www.thanks-partners.com/wp/" target="_blank">株式会社サンクスパートナーズ</a></li>
					<li style="display: inline"><a href="http://https://allonsy.co.jp/" target="_blank">株式会社アロンジ</a></li>
					<li style="display: inline">他11社</a></li>
					<br>
					<ul style="list-style-type:disc;">監理組合 (Supervising Organization)：</ul>
					<li style="display: inline"><a href="https://www.kansai-mcca.jp/about.html/" target="_blank">関西医療介護協同組合</a></li>

					<li style="display: inline">ケアサポート事業協同組合</li>
					<br>
					<li style="display: inline;">ネパール (Nepal)</li>

					<ul style="list-style-type:disc;">	総合パートナー  (Comprehensive Partner)：</ul>
					<li style="display: inline"><a href="http://www.igc.com.np/" target="_blank">Incentive Group of Companies (IGC)</a></li>
					<br>	研修機関 (Japanese Language Training Institutions)：</li>
					<li style="display: inline;"> ◆	世話日本語学院 (Sewa Japanese Language Institute)</li>
					<li style="display: inline;">◆	大日本学園 (Dai Nippon Academy)</li>
					<li style="display: inline;">◆	IGC日本語文化センター (IGC Japanese Language & Cultural Center)</li>
					<li style="display: inline;">◆	関西国際日本語センター (Kansai international Japanese language center)</li>
					<li style="display: inline;">◆	毎日日本語学院 (Mainichi Japanese Language Center)</li>>
					<li style="display: inline;">◆	山水日本語学院 (Sansui Japanese Language Institute)</li>>
					<li style="display: inline;">◆	庭日本語学院 (Niwa Japanese Language Institute)</li>
					<li style="display: inline;">◆	National Alliance Japanese Language school</li>
					<li style="display: inline;">◆	Adarsa Japanese Language school</li>
					<li style="display: inline;">◆	Sahara Japanese Language school</li>
					<li style="display: inline;">◆	Award Japanese Language school</li>
					<li style="display: inline;">◆	British Japanese Language school</li>
					<li style="display: inline;">◆	Ilam School Japanese Language school</li>
					<li style="display: inline;">◆	TITPA Japanese Language school</li>
					<li style="display: inline;">◆	Grace Japanese Language school</li>
					<li style="display: inline;">◆	Frequency Japanese Language school</li>
					<li style="display: inline;">◆	ACTIVE Japanese Language school<br>
						<li style="display: inline;">◆	Fuji Japanese Language school</li>
						<br>
						<li style="display: inline;">	日本式介護研修機関 (Japanese Nursing Care Training Institutions)</li>
						<li style="display: inline;">◆	Inami Nepal Care & Training Center</li>

						<br>
						<li style="display: inline;">提携看護学校（Nursing College）</li>
						<li style="display: inline;">◆ Stupa Health Care Center Cooperative Ltd </li>
						<li style="display: inline;">◆ Osis Medical college</li>
						<li style="display: inline;">◆ Manakamana Nursing college</li>
						<li style="display: inline;">◆ Shree Medical and Technical  College</li>
						<li style="display: inline;">◆ Balkumari College</li>
						<li style="display: inline;">◆ Shanti Nursing College</li>
						<li style="display: inline;">◆ NPI NSH Medical College</li>
						<li style="display: inline;">◆ Kalika Medical Medical and Technical Institute</li>
						<li style="display: inline;">◆ Maiya Devi Girl's college</li>
						<li style="display: inline;">◆ Indreni College</li>
						<li style="display: inline;">◆ Chitwan Academy for Technical Education</li>
						<li style="display: inline;">◆ Polytechnic Institute</li>
						<li style="display: inline;">◆ Narayani Medical and Technology</li>
						<li style="display: inline;">◆ Narayani samudayik Institute</li>
						<li style="display: inline;">◆ Bheri Nursing College Pvt. Ltd</li>
						<li style="display: inline;">◆ Madya pachim Nursing College</li>
						<li style="display: inline;">◆ Lord Buddha Institute</li>
						<li style="display: inline;">◆ Saileshwori Farwestern School of Health</li>
						<li style="display: inline;">◆ Creative Institute padma Hospital</li>
						<li style="display: inline;">◆ Navajvan College of Nursing</li>
						<li style="display: inline;">◆ Far Weastern Technical College</li>
						<li style="display: inline;">◆ Samudayik Swastha Institute</li>


					</p>

		

				





			</div>





		</div>
	</div>




	@endsection