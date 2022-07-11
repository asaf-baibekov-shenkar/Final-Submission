<?php $event = json_decode($data['event'], true)["event"]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Mass Rescue - Event</title>

	<!-- https://www.daterangepicker.com/ -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

	<!-- google maps api -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU6K6LHaENovtEo203MCMtuL8Q_XeuIJE&callback=initMap"></script>

	<link rel="stylesheet" type="text/css" href="<?= $data['css'] ?>" />
	<script type="text/javascript" src="<?= $data['js'] ?>"></script>
	<script>
		let event = <?php print_r(json_encode(json_decode($data['event'], true)["event"])) ?>;
		let forces = <?php print_r(json_encode(json_decode($data['forces'], true)["forces"])) ?>;
	</script>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark" style="padding: 0 env(safe-area-inset-right) 0 env(safe-area-inset-left);">
		<div class="container-fluid">
			<div class="navbar-brand d-flex align-items-center">
				<button
					class="navbar-toggler" type="button"
					data-bs-toggle="offcanvas" data-bs-target="#offcanvas-main"
					aria-controls="offcanvas-main" area-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<a class="d-flex align-items-center nav-link text-light mx-3 my-2 p-0" href="../events/index.html">
					<img class="bg-white rounded-circle" src="<?php echo IMAGES_PATH . 'profile_picture.jpg' ?>" width="74" height="74" alt="">
				</a>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item"><a class="text-light" href="<?php echo BASE_URL . 'events' ?>">Events</a></li>
					<li class="breadcrumb-item"><?php echo $event["title"]; ?></li>
				</ol>
			</div>
		</div>
		<div class="offcanvas offcanvas-start rounded-start bg-dark shadow-lg overflow-hidden" id="offcanvas-main" tabindex="-1" style="border-radius: 2.5rem; width: 350px;">
			<div class="offcanvas-header flex-column gap-1">
				<img class="bg-white rounded-circle" src="<?php echo IMAGES_PATH . 'profile_picture.jpg' ?>" width="120" height="120" alt="">
				<span class="offcanvas-title text-light fs-3 fw-bolder">Ariella Katzir</span>
				<span class="text-light fs-5">205374333</span>
			</div>
			<div class="offcanvas-body d-flex flex-column justify-content-between gap-5 p-0">
				<div class="d-flex flex-column gap-2">
					<a class="nav-link p-4 fs-3 bg-secondary d-flex align-items-center gap-2" href="../events/index.html">
						<svg width="40" height="40" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 4h-1V3c0-.55-.45-1-1-1s-1 .45-1 1v1H8V3c0-.55-.45-1-1-1s-1 .45-1 1v1H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1V9h14v10zM7 11h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2z"></path>
						</svg>
						<span class="text-light fs-4">Events</span>
					</a>
					<a class="nav-link p-4 fs-3 bg-secondary d-flex align-items-center gap-2" href="#">
						<svg width="40" height="40" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path>
						</svg>
						<span class="text-light fs-4">Dashboard</span>
					</a>
					<a class="nav-link p-4 fs-3 bg-secondary d-flex align-items-center gap-2" href="#">
						<svg width="40" height="32" fill="white" viewBox="0 0 60 48" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.101607142857143 45.649255940367595C15.20882142857143 45.649255940367595 15.960964285714287 45.271548128414196 17.298 44.096122278733084 17.298 44.096122278733084 24.317464285714287 37.79973628266193 24.317464285714287 37.79973628266193 25.80075 39.457818680875114 28.09875 40.33928042840613 31.002642857142856 40.33928042840613 31.002642857142856 40.33928042840613 38.18925 40.33928042840613 38.18925 40.33928042840613 38.18925 40.33928042840613 45.18771428571428 46.34191760178682 45.18771428571428 46.34191760178682 46.44128571428571 47.43327682247517 47.13053571428571 48 48.15439285714285 48 49.59589285714285 48 50.38992857142857 46.97161002125885 50.38992857142857 45.37638922526305 50.38992857142857 45.37638922526305 50.38992857142857 40.33928042840613 50.38992857142857 40.33928042840613 50.38992857142857 40.33928042840613 51.26710714285714 40.33928042840613 51.26710714285714 40.33928042840613 56.51089285714285 40.33928042840613 60 37.1700438631899 60 31.671160625386833 60 31.671160625386833 60 19.267081079626493 60 19.267081079626493 60 13.768197841823417 56.51089285714285 10.598961276607193 51.26710714285714 10.598961276607193 51.26710714285714 10.598961276607193 47.98714285714285 10.598961276607193 47.98714285714285 10.598961276607193 47.98714285714285 10.598961276607193 47.98714285714285 9.003955760071042 47.98714285714285 9.003955760071042 47.98714285714285 3.2950674093808026 44.623821428571425 0 38.9415 0 38.9415 0 9.066857142857144 0 9.066857142857144 0 3.59325 0 0 3.2950674093808026 0 9.003955760071042 0 9.003955760071042 0 28.334006081644738 0 28.334006081644738 0 34.04278679260515 3.59325 37.33796184171578 9.066857142857144 37.33796184171578 9.066857142857144 37.33796184171578 11.824499999999999 37.33796184171578 11.824499999999999 37.33796184171578 11.824499999999999 37.33796184171578 11.824499999999999 43.06773229999193 11.824499999999999 43.06773229999193 11.824499999999999 44.68383520357364 12.618321428571429 45.649255940367595 14.101607142857143 45.649255940367595 14.101607142857143 45.649255940367595 14.101607142857143 45.649255940367595 14.101607142857143 45.649255940367595M14.979 35.93175641129141C14.979 34.73544845402438 14.247857142857143 34.16872527649956 13.349464285714285 34.16872527649956 13.349464285714285 34.16872527649956 9.254785714285715 34.16872527649956 9.254785714285715 34.16872527649956 5.557071428571429 34.16872527649956 3.3635357142857143 32.15392481364872 3.3635357142857143 28.229164984795894 3.3635357142857143 28.229164984795894 3.3635357142857143 9.10879685691989 3.3635357142857143 9.10879685691989 3.3635357142857143 5.205026775382795 5.557071428571429 3.148246817900487 9.254785714285715 3.148246817900487 9.254785714285715 3.148246817900487 38.73267857142857 3.148246817900487 38.73267857142857 3.148246817900487 42.43017857142857 3.148246817900487 44.623821428571425 5.205026775382795 44.623821428571425 9.10879685691989 44.623821428571425 9.10879685691989 44.623821428571425 10.598961276607193 44.623821428571425 10.598961276607193 44.623821428571425 10.598961276607193 31.002642857142856 10.598961276607193 31.002642857142856 10.598961276607193 25.52914285714286 10.598961276607193 22.27017857142857 13.768197841823417 22.27017857142857 19.267081079626493 22.27017857142857 19.267081079626493 22.27017857142857 31.671160625386833 22.27017857142857 31.671160625386833 22.27017857142857 32.804499340706656 22.39542857142857 33.832996959177635 22.667035714285714 34.777427948655856 22.667035714285714 34.777427948655856 14.979 41.91340383735637 14.979 41.91340383735637 14.979 41.91340383735637 14.979 35.93175641129141 14.979 35.93175641129141M47.255892857142854 44.20117865504158C47.255892857142854 44.20117865504158 40.55014285714286 38.15656198702941 40.55014285714286 38.15656198702941 39.714214285714284 37.42192083097872 39.21310714285714 37.19103361050564 38.063892857142854 37.19103361050564 38.063892857142854 37.19103361050564 31.19067857142857 37.19103361050564 31.19067857142857 37.19103361050564 27.701892857142855 37.19103361050564 25.633607142857144 35.28118188423347 25.633607142857144 31.566211888808162 25.633607142857144 31.566211888808162 25.633607142857144 19.372137455934983 25.633607142857144 19.372137455934983 25.633607142857144 15.678157207825409 27.701892857142855 13.747315734237509 31.19067857142857 13.747315734237509 31.19067857142857 13.747315734237509 51.07928571428571 13.747315734237509 51.07928571428571 13.747315734237509 54.56796428571429 13.747315734237509 56.63625 15.678157207825409 56.63625 19.372137455934983 56.63625 19.372137455934983 56.63625 31.566211888808162 56.63625 31.566211888808162 56.63625 35.28118188423347 54.54696428571428 37.19103361050564 51.07928571428571 37.19103361050564 51.07928571428571 37.19103361050564 48.88564285714286 37.19103361050564 48.88564285714286 37.19103361050564 47.98714285714285 37.19103361050564 47.255892857142854 37.71577729339899 47.255892857142854 38.912085250666024 47.255892857142854 38.912085250666024 47.255892857142854 44.20117865504158 47.255892857142854 44.20117865504158"></path>
						</svg>
						<span class="text-light fs-4">Chats</span>
					</a>
				</div>
				<div class="d-flex flex-column gap-2">
					<a class="nav-link p-4 fs-3 bg-secondary d-flex align-items-center gap-2" href="../../index.html">
						<svg width="40" height="40" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41zM19 3H5c-1.11 0-2 .9-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
						</svg>
						<span class="text-light fs-4">Log out</span>
					</a>
				</div>
			</div>
		</div>
	</nav>
	<main style="height: calc(100vh - 100px);">
		<div class="row flex-column h-100 g-0">
			<div class="col col-lg-6 h-100 p-0 order-1 order-lg-0 d-flex flex-column">
				<div id="filter" class="shadow p-2">
					<div class="d-flex flex-column flex-lg-row gap-2 gap-lg-0">
						<div class="col-12 col-lg-6 d-flex align-items-center">
							<input class="form-control" type="text" placeholder="Search">
						</div>
						<div class="col-12 col-lg-6 d-flex align-items-center justify-content-evenly">
							<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_firefighter" style="height: 38px; width: 38px">
								<img src="<?php echo ICONS_PATH . 'event-forces/firefighter.png' ?>" alt="" width="24px" height="24px">
							</a>
							<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_medic" style="height: 38px; width: 38px">
								<img src="<?php echo ICONS_PATH . 'event-forces/medic.png' ?>" alt="" width="24px" height="24px">
							</a>
							<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_police" style="height: 38px; width: 38px">
								<img src="<?php echo ICONS_PATH . 'event-forces/police.png' ?>" alt="" width="24px" height="24px">
							</a>
							<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_drone" style="height: 38px; width: 38px">
								<img src="<?php echo ICONS_PATH . 'event-forces/drone.png' ?>" alt="" width="24px" height="24px">
							</a>
							<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_block" style="height: 38px; width: 38px">
								<img src="<?php echo ICONS_PATH . 'event-forces/block.png' ?>" alt="" width="24px" height="24px">
							</a>
						</div>
					</div>
				</div>
				<div id="list" class="overflow-auto flex-grow-1">
					<?php include 'force_cell.php'; ?>
				</div>
			</div>
			<div class="col col-lg-6 h-100 p-0">
				<div id="map" class="w-100 h-100"></div>
			</div>
		</div>
	</main>
	<div class="modal fade" id="event-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
		<form id="form-create-event" action="" method="get">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header justify-content-center">
						<h5 class="modal-title" id="event-modal-title">Add Force</h5>
					</div>
					<div class="modal-body">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">Force Name:</span>
							<input type="text" class="form-control" id="InputEventName" name="event_name" required>
						</div>
						<div class="input-group mb-3">
							<label for="InputDescription" class="col-3 input-group-text">Message:</label>
							<div class="col-9">
								<textarea class="form-control" id="InputDescription" name="event_description"></textarea>
							</div>
						</div>
						<iframe width="100%" height="300px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tel%20Aviv%20azrieli+(Mass%20Rescue)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
						</iframe>
					</div>
					<div class="modal-footer justify-content-evenly">
						<button type="button" class="col-3 btn btn-danger" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="col-3 btn btn-success" id="add_btn">Add</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>

</html>