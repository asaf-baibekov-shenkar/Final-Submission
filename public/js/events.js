window.initMap = () => {
	let AzrieliLocation = { lat: 32.07458646100024, lng: 34.79189151265392 }
	let map = new google.maps.Map(document.getElementById("map"), {
		center: AzrieliLocation,
		zoom: 16,
	});
	const marker = new google.maps.Marker({
		position: AzrieliLocation,
		map: map,
	});
};

$(function() {
	$('input[name="daterange"]').daterangepicker({ opens: 'center', locale: { format: 'DD/MM/YYYY' } });

	$('#btn_create').click(event => {
		$('#btn_edit, #btn_close').toggleClass('active', false).change();
		$('#event-modal-title').html("Create Event");
		$('#event-modal').on('show.bs.modal', () => {
			$('#event-modal-title').html("Create Event");
			$('#create_btn').html("Create");
			$('#InputEventName').val('');
			$('#InputDescription').val('');
			$(`input[name="event_type"][value="0"]`).prop('checked', true);
		})
		$('#event-modal').attr('index', -1);
		$('#event-modal').modal('show');
	});

	$('#btn_edit').click(event => {
		$('#btn_close').toggleClass('active', false);
		$('#btn_edit').toggleClass('active');
		$('#btn_edit, #btn_close').change();
	}).change(() => {
		if ($('#btn_edit').hasClass('active')) $('.btn_edit').addClass("d-flex").removeClass("d-none");
		else $('.btn_edit').addClass("d-none").removeClass("d-flex");
	});

	$('#btn_close').click(event => {
		$('#btn_edit').toggleClass('active', false);
		$('#btn_close').toggleClass('active');
		$('#btn_edit, #btn_close').change();
	}).change(() => {
		if ($('#btn_close').hasClass('active')) $('.btn_close').addClass("d-flex").removeClass("d-none");
		else $('.btn_close').addClass("d-none").removeClass("d-flex");
	});

	$('#form-create-event').submit(function(event) {
		event.preventDefault();
		let index = parseInt($(this).parent().attr('index'));
		if (index == -1) {
			setListState(() => {
				events = [{
					title: $('[name=event_name]').val(),
					subtitle: $('[name=event_description]').val(),
					type: parseInt($('[name=event_type]:checked').val()),
					coordinate: {
						latitude: 32.07458646100024,
						longitude: 34.79189151265392
					}
				}, ...events]
			})
		} else {
			setListState(() => {
				events[index] = {
					title: $('[name=event_name]').val(),
					subtitle: $('[name=event_description]').val(),
					type: parseInt($('[name=event_type]:checked').val()),
					coordinate: {
						latitude: 32.07458646100024,
						longitude: 34.79189151265392
					}
				}
			})
		}
		$('#event-modal').modal('hide');
	})
});

function renderList() {
	events.map((value, index) => {
		let element = $(`<div index="${index}" class="cell shadow-lg d-flex align-items-center justify-content-between bg-light p-3 border-bottom border-dark">`)
		element.append(cell(value));
		element.hover(function () {
			element.css({ 'background-color': '#D6D6D6', 'cursor': 'pointer' }).removeClass('bg-light')
		}, function () {
			element.css({ 'background-color': '', 'cursor': '' }).addClass('bg-light')
		});
		return element;
	}
	).forEach(element => element.appendTo('#list'));

	$('.cell').click(function() {
		window.location.href = '../event/index.html';
		return false;
	});

	$('.btn_close').click(function(event) { 
		event.stopPropagation();
		let index = $(this).parent().parent().attr('index');
		setListState(() => {
			events.splice(index, 1);
		})
		$('.btn_close').addClass("d-flex").removeClass("d-none");
	});

	$('.btn_edit').click(function(event) { 
		event.stopPropagation();
		let index = $(this).parent().parent().attr('index');
		$('#event-modal').on('show.bs.modal', () => {
			let event = events[index];
			$('#event-modal-title').html("Edit Event");
			$('#create_btn').html("Update");
			$('#InputEventName').val(event.title);
			$('#InputDescription').val(event.subtitle);
			$(`input[name="event_type"][value="${event.type}"]`).prop('checked', true);
		})
		$('#event-modal').attr('index', index);
		$('#event-modal').modal('show');
	});
}

let events = [

]