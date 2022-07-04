<?php

class EventsController extends Controller {

	public function index() {
		$this->view('events/index', [
			'css' => CSS_PATH . 'events.css',
			'js' => JS_PATH . 'events.js'
		]);
	}

	public function create() {
		header('Content-Type: application/json');
		$errors = [];
		if (empty($_POST['title']))
			$errors['title'] = "title is missing";
		if (empty($_POST['subtitle']))
			$errors['subtitle'] = "subtitle is missing";
		if (empty($_POST['type']))
			$errors['type'] = "type is missing";
		else if ($_POST['type'] != "fire" && $_POST['type'] != "earthquake" && $_POST['type'] != 'unknown')
			$errors['type'] = "type has to be fire or earthquake or unknown";
		if (empty($_POST['latitude']))
			$errors['latitude'] = "latitude is missing";
		if (empty($_POST['longitude']))
			$errors['longitude'] = "longitude is missing";
		if (!empty($errors)) {
			echo '{ "errors": '; echo json_encode($errors); echo ' }';
			return;
		}
		echo '{ "event": ';
		echo Event::create([
			'title' => $_POST['title'],
			'subtitle' => $_POST['subtitle'],
			'type' => $_POST['type'],
			'latitude' => $_POST['latitude'],
			'longitude' => $_POST['longitude']
		]);
		echo '}';
	}

	public function eventById() {
		header('Content-Type: application/json');
		$errors = [];
		if (empty($_GET['id']))
			$errors['id'] = "id is missing";
		if (!empty($errors)) {
			echo '{ "errors": '; echo json_encode($errors); echo ' }';
			return;
		}
		$event = Event::find($_GET['id']);
		echo '{ "event": '; print_r($event->toJson()); echo ' }';
	}

	public function eventsList() {
		header('Content-Type: application/json');
		echo '{ "events": ' . Event::all()->toJson() . ' }';
	}

	public function update() {
		header('Content-Type: application/json');
		$errors = [];
		if (empty($_POST['id']))
			$errors['id'] = "id is missing";
		if (!empty($errors)) {
			echo '{ "errors": '; echo json_encode($errors); echo ' }';
			return;
		}
		$event = Event::find($_POST['id']);
		if (!empty($_POST['title']))
			$event->update(['title' => $_POST['title']]);
		if (!empty($_POST['subtitle']))
			$event->update(['subtitle' => $_POST['subtitle']]);
		if (!empty($_POST['type']))
			$event->update(['type' => $_POST['type']]);
		if (!empty($_POST['latitude']))
			$event->update(['latitude' => $_POST['latitude']]);
		if (!empty($_POST['longitude']))
			$event->update(['longitude' => $_POST['longitude']]);
		echo '{ "event": '; print_r($event->toJson()); echo ' }';
	}

	public function remove() {
		header('Content-Type: application/json');
		$errors = [];
		if (empty($_POST['id']))
			$errors['id'] = "id is missing";
		if (!empty($errors)) {
			echo '{ "errors": '; echo json_encode($errors); echo ' }';
			return;
		}
		try {
			$event = Event::findOrFail($_POST['id']);
			echo '{ "event": '; print_r($event); echo ' }';
			$event->delete();
		} catch (Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
			$errors['id'] = "id not exist";
			echo '{ "errors": '; echo json_encode($errors); echo ' }';
		}
	}
}

?>