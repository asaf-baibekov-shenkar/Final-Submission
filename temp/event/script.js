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

	$('#filter .btn').click(function(event) {
		let type = $(this).attr("id").substring(4);
		type = type.charAt(0).toUpperCase() + type.slice(1);
		$('#event-modal').on('show.bs.modal', () => {
			$('#event-modal-title').html(`Add ${type}`);
			$('#create_btn').html("Submit");
			$('#InputEventName').val('');
			$('#InputDescription').val('');
			$(`input[name="event_type"][value="0"]`).prop('checked', true);
		})
		$('#event-modal').modal('show');
	});

    renderList();
});

function renderList() {
	$('#list').empty();
	forces.map((value, index) => {
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
}


// types:
// 0 - firefighter
// 1 - medic
// 2 - police
// 3 - drone
// 4 - block

function cell(value) {
	let img = function(value) {
		switch(value.type) {
			case 0: return '../../images/icons/event-forces/firefighter.png'
			case 1: return '../../images/icons/event-forces/medic.png'
			case 2: return '../../images/icons/event-forces/police.png'
			case 3: return '../../images/icons/event-forces/drone.png'
			case 4: return '../../images/icons/event-forces/block.png'
		}
	}(value)
	return `<div class="d-flex align-items-center">
				<img src="${img}" alt="" width="60px" height="60px">
				<div class="h-100 d-flex flex-column justify-content-center ms-3">
					<span class="fs-4">${value.title}</span>
					<span>${value.subtitle}</span>
				</div> 
			</div>
			<div class="d-flex align-items-center">
				<div class="h-100 d-flex flex-column me-3 align-items-center">
					<span>Coordinate</span>
					<span>${value.coordinate.latitude.toFixed(5)}</span>
					<span>${value.coordinate.longitude.toFixed(5)}</span>
				</div>  
				<img src="../../images/icons/location-icon.svg" alt="" width="18px" height="24px">
				<a class="btn_edit btn btn-light border border-1 border-dark p-0 ms-3 d-none justify-content-center align-items-center" style="height: 38px; width: 38px">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
						<path d="M2 18.0672V21.4445C2 21.7556 2.24441 22 2.55548 22H5.93279C6.07721 22 6.22164 21.9445 6.32162 21.8334L18.4533 9.71282L14.2872 5.54673L2.16664 17.6673C2.05555 17.7784 2 17.9117 2 18.0672ZM21.675 6.49104C22.1083 6.05777 22.1083 5.35787 21.675 4.92459L19.0754 2.32495C18.6421 1.89168 17.9422 1.89168 17.509 2.32495L15.4759 4.35801L19.642 8.52409L21.675 6.49104Z"/>
					</svg>
				</a>
				<a class="btn_close btn btn-light border border-1 border-dark p-0 ms-3 d-none justify-content-center align-items-center" style="height: 38px; width: 38px">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 2C6.47 2 2 6.47 2 12C2 17.53 6.47 22 12 22C17.53 22 22 17.53 22 12C22 6.47 17.53 2 12 2ZM16.3 16.3C15.91 16.69 15.28 16.69 14.89 16.3L12 13.41L9.11 16.3C8.72 16.69 8.09 16.69 7.7 16.3C7.31 15.91 7.31 15.28 7.7 14.89L10.59 12L7.7 9.11C7.31 8.72 7.31 8.09 7.7 7.7C8.09 7.31 8.72 7.31 9.11 7.7L12 10.59L14.89 7.7C15.28 7.31 15.91 7.31 16.3 7.7C16.69 8.09 16.69 8.72 16.3 9.11L13.41 12L16.3 14.89C16.68 15.27 16.68 15.91 16.3 16.3Z"/>
					</svg>
				</a>
			</div>`;
}


let forces = [
	{
		title: 'Block',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 4,
		coordinate: {
			latitude: 32.74283908498745,
			longitude: 35.04852028003207
		}
	},
	{
		title: 'Drone',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 3,
		coordinate: {
			latitude: 32.5466634733065,
			longitude: 35.41856672946443
		}
	},
	{
		title: 'Police',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 2,
		coordinate: {
			latitude: 31.903684919120394,
			longitude: 35.20342902510863
		}
	},
	{
		title: 'Firefighter',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 0,
		coordinate: {
			latitude: 31.527947943945474,
			longitude: 34.59629728550096
		}
	},
	{
		title: 'Medic',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 1,
		coordinate: {
			latitude: 19.149067931024298,
			longitude: -72.22586525014694
		}
	},
	{
		title: 'Medic',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 1,
		coordinate: {
			latitude: 35.05741791007231,
			longitude: 33.293497897422654
		}
	},
    {
		title: 'Block',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 4,
		coordinate: {
			latitude: 35.05741791007231,
			longitude: 33.293497897422654
		}
	},
    {
		title: 'Firefighter',
		subtitle: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		type: 0,
		coordinate: {
			latitude: 35.05741791007231,
			longitude: 33.293497897422654
		}
	}
]