<?php
//untuk menjalankan init
// function get_CURL($url)
// {
// 	$curl = curl_init();
// 	//untuk set Opsi
// 	curl_setopt($curl, CURLOPT_URL, $url);
// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// 	$result = curl_exec($curl);
// 	// curl_close($curl);
// 	return json_decode($result, true);
// }
// //instagram API ID
// $clientID = 'e078e31752e3438d9cec762bf508ab02';
// $accessToken = '5849738439.e078e31.f3f6838a1b804a679bd73677a08f799f';
// $result = get_CURL('https://api.instagram.com/v1/users/self/media/recent?access_token=5849738439.e078e31.f3f6838a1b804a679bd73677a08f799f');

// //GET RESULT MEDIA = php array assosiatif
// $mediaPhoto = [];
// foreach ($result['data'] as $linkfeed) {
// 	$mediaPhoto[] = $linkfeed['link'];
// }
// $urlPhotos = $result['data'];
// $j = count($urlPhotos);
// for ($i = 0; $i < $j; $i++) {
// 	$urlPhotos = $result['data'][$i]['images']['standard_resolution']['url'];
// }
// var_dump($urlPhotos);

?>

<section>
	<div class="container my-5">
		<div class="row">

		</div>
	</div>
</section>
<section id="sectionPelatihanPreview">
	<div class="container my-5">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center my-5">Galeri Kegiatan</h2>
			</div>
			<div class="col-12">
				<div class="section-materi">
					<div class="row">
						<?php
						$i = 0;
						while ($i < 6) { ?>
							<div id="" class="c-geser col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
								<div class="cp-card">
									<div class="card-pic">
										<img class="w-100" src="" alt="galeri-card" title="galeri-card" />
									</div>
									<div class="card-body">
										<h5 class="card-title"><a href="#">TEST</a></h5>
										<p class="card-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									</div>
								</div>
							</div>
							<?php $i++;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>

function galeriInstagramAction() {
    var url = "https://api.instagram.com/v1/users/self/media/recent?access_token=5849738439.e078e31.f3f6838a1b804a679bd73677a08f799f";
    var type = "GET";
    var data = {};

    var successAction = function(response) {
        console.log("Fetch Instagram", response);
    }
    ajaxSendJSON(url, type, data, successAction);
}

function galeriInstagram() {
    galeriInstagramAction();
}


$(document).ready(function() {
galeriInstagram();
});
</script>