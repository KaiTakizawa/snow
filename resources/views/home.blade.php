<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Snow</title>
	<link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}" />
    
</head>
<x-app-layout>
<body>
    
    	<!-- メインビジュアル -->
	<div class="main-visual">
		<div>
			<h1>snow site</h1>
			<p>ski & snowboard</p>
		</div>
	</div>
	
	
	<!-- Map -->
	<section id="map">
		<h2>Map</h2>
		<div>
			<img src="{{ asset('/img/japan.jpg') }}">
		</div>
	</section>

		
	<!-- Areas -->
	<section id="areas">
		<h2>Areas</h2>
		<div class="area-list">
          <div class="area-item">
              <h3><a href="/areas/1">①エイブル白馬五竜スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/2">②竜王スキーパーク</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/3">③栂池高原スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/4">④野沢温泉スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/5">⑤苗場スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/6">⑥舞子スノーリゾート</a></h3>
              <p>-------------------------------------------------</p>
          </div>

      </div>
	</section>	
    
    
    <section id="contact">
		<h2>Contact</h2>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSehKlfSCBQUU1QwXcxZm4Guu-H8VD2Ei7ozmehyBY1NXa1DqQ/viewform?embedded=true" width="100%" height="716" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
	</section>
        
    <!-- フッター -->
    <footer>
        <p>&copy; 2023 snow site</p>
    </footer>
</body>
</x-app-layout>
</html>
