<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Mass Rescue - Events</title>

	<!-- https://www.daterangepicker.com/ -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

	<!-- google maps api -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU6K6LHaENovtEo203MCMtuL8Q_XeuIJE&callback=initMap"></script>

	<link rel="stylesheet" type="text/css" href="<?= $data['css'] ?>" />
	<script type="text/javascript" src="<?= $data['js'] ?>"></script>
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
				<a class="d-flex align-items-center nav-link text-light mx-3 my-2 p-0" href="./index.html">
					<img class="bg-white rounded-circle" src="<?php echo IMAGES_PATH . 'profile_picture.jpg' ?>" width="74" height="74" alt="">
				</a>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">Events</li>
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
					<a class="nav-link p-4 fs-3 bg-secondary d-flex align-items-center gap-2" href="#">
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
						<div class="col-12 col-lg-3 d-flex align-items-center">
							<input class="form-control" type="text" placeholder="Search">
						</div>
						<div class="col-12 col-lg-9 d-flex align-items-center justify-content-evenly">
							<div class="col-8 col-lg-7">
								<input class="form-control text-center" type="text" name="daterange" value="26/04/2022 - 18/05/2022" readonly="readonly" />
							</div>
							<div class="col-4 col-lg-4 h-100 d-flex align-items-center justify-content-evenly">
								<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_create" style="height: 38px; width: 38px">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.8947 3.31987H20.6849V1.08449C20.6849 0.486915 20.1759 0 19.5789 0C18.971 0 18.4741 0.486915 18.4741 1.08449V3.31987H16.2522C15.6553 3.31987 15.1689 3.82348 15.1579 4.42105C15.1579 5.0297 15.6443 5.52632 16.2522 5.52632H18.4741V7.75743C18.4741 8.35501 18.971 8.85299 19.5789 8.84192C20.1759 8.84192 20.6849 8.35501 20.6849 7.75743V5.52632L22.8947 5.53312C23.4917 5.53312 24.0011 5.01863 24.0011 4.42105C24.0011 3.82348 23.4917 3.31987 22.8947 3.31987Z"/>
										<path d="M19.5789 11.0526C18.9711 11.0526 18.4737 11.55 18.4737 12.1579V19C18.4737 19.6079 17.9763 20 17.3684 20H6.31579C5.70789 20 5.21053 19.6079 5.21053 19V6.63158C5.21053 6.02368 5.70789 5.52632 6.31579 5.52632H11.8421C12.45 5.52632 12.9474 5.02895 12.9474 4.42105C12.9474 3.81316 12.45 3.31579 11.8421 3.31579H5.21053C3.99474 3.31579 3 4.31053 3 5.52632V20C3 21.2158 3.99474 22 5.21053 22H18.4737C19.6895 22 20.6842 21.2158 20.6842 20V12.1579C20.6842 11.55 20.1868 11.0526 19.5789 11.0526Z"/>
										<path d="M15.1579 8.48H8.52632C7.91842 8.48 7.42105 8.97211 7.42105 9.58C7.42105 10.1879 7.91842 10.69 8.52632 10.69H15.1579C15.7658 10.69 16.2632 10.1879 16.2632 9.58C16.2632 8.97211 15.7658 8.48 15.1579 8.48Z"/>
										<path d="M15.1579 11.79H8.52632C7.91842 11.79 7.42105 12.2921 7.42105 12.9C7.42105 13.5079 7.91842 14 8.52632 14H15.1579C15.7658 14 16.2632 13.5079 16.2632 12.9C16.2632 12.2921 15.7658 11.79 15.1579 11.79Z"/>
										<path d="M15.1579 15.1H8.52632C7.91842 15.1 7.42105 15.5921 7.42105 16.2C7.42105 16.8079 7.91842 17.31 8.52632 17.31H15.1579C15.7658 17.31 16.2632 16.8079 16.2632 16.2C16.2632 15.5921 15.7658 15.1 15.1579 15.1Z"/>
									</svg>
								</a>
								<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_edit" style="height: 38px; width: 38px">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
										<path d="M2 18.0672V21.4445C2 21.7556 2.24441 22 2.55548 22H5.93279C6.07721 22 6.22164 21.9445 6.32162 21.8334L18.4533 9.71282L14.2872 5.54673L2.16664 17.6673C2.05555 17.7784 2 17.9117 2 18.0672ZM21.675 6.49104C22.1083 6.05777 22.1083 5.35787 21.675 4.92459L19.0754 2.32495C18.6421 1.89168 17.9422 1.89168 17.509 2.32495L15.4759 4.35801L19.642 8.52409L21.675 6.49104Z"/>
									</svg>
								</a>
								<a class="btn btn-light border border-1 border-dark p-0 d-flex justify-content-center align-items-center" id="btn_close" style="height: 38px; width: 38px">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 2C6.47 2 2 6.47 2 12C2 17.53 6.47 22 12 22C17.53 22 22 17.53 22 12C22 6.47 17.53 2 12 2ZM16.3 16.3C15.91 16.69 15.28 16.69 14.89 16.3L12 13.41L9.11 16.3C8.72 16.69 8.09 16.69 7.7 16.3C7.31 15.91 7.31 15.28 7.7 14.89L10.59 12L7.7 9.11C7.31 8.72 7.31 8.09 7.7 7.7C8.09 7.31 8.72 7.31 9.11 7.7L12 10.59L14.89 7.7C15.28 7.31 15.91 7.31 16.3 7.7C16.69 8.09 16.69 8.72 16.3 9.11L13.41 12L16.3 14.89C16.68 15.27 16.68 15.91 16.3 16.3Z"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div id="list" class="overflow-auto flex-grow-1">
					<?php include 'event_cell.php'; ?>
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
						<h5 class="modal-title" id="event-modal-title"></h5>
					</div>
					<div class="modal-body">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">Event Name:</span>
							<input type="text" class="form-control" id="InputEventName" name="event_name" required>
						</div>
						<div class="input-group mb-3">
							<label for="InputDescription" class="col-3 input-group-text">Description:</label>
							<div class="col-9">
								<textarea class="form-control" id="InputDescription" name="event_description"></textarea>
							</div>
						</div>

						<div class="input-group mb-3 justify-content-center">
							<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
								<input type="radio" class="btn-check" name="event_type" id="fire_checkbox" value="2" required>
								<label class="btn btn-outline-primary" for="fire_checkbox">Fire</label>
							  
								<input type="radio" class="btn-check" name="event_type" id="earthquake_checkbox" value="1" required>
								<label class="btn btn-outline-primary" for="earthquake_checkbox">Earthquake</label>
							  
								<input type="radio" class="btn-check" name="event_type" id="other_checkbox" value="0" required checked>
								<label class="btn btn-outline-primary" for="other_checkbox">Other</label>
							</div>
						</div>
						<iframe width="100%" height="300px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tel%20Aviv%20azrieli+(Mass%20Rescue)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
						</iframe>
					</div>
					<div class="modal-footer justify-content-evenly">
						<button type="button" class="col-3 btn btn-danger" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="col-3 btn btn-success" id="create_btn">Create</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>

</html>