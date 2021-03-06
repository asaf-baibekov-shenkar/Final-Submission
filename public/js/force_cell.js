class ForceCell {
	constructor(force, crud_state) {
		this.force = force;
		this.crud_state = crud_state
	}

	getType() {
        switch (this.force.type) {
			case "firefighter": return ICONS_PATH + 'event-forces/firefighter.png';
			case "medic": return ICONS_PATH + 'event-forces/medic.png';
			case "police": return ICONS_PATH + 'event-forces/police.png';
			case "drone": return ICONS_PATH + 'event-forces/drone.png';
			case "block": return ICONS_PATH + 'event-forces/block.png';
		}
	}

	generateCell() {
		return `
			<div index="${this.force.force_id}" class="cell shadow-lg d-flex align-items-center justify-content-between bg-light p-3 border-bottom border-dark">
				<div class="d-flex align-items-center">
					<img src="${this.getType()}" alt="" width="60px" height="60px">
					<div class="h-100 d-flex flex-column justify-content-center ms-3">
						<span class="fs-4">
							${this.force.title}
						</span>
						<span>
							${this.force.subtitle}
						</span>
					</div>
				</div>
				<div class="d-flex align-items-center">
					<div class="h-100 d-flex flex-column me-3 align-items-center">
						<span>Coordinate</span>
						<span>
							${parseFloat(this.force.latitude).toFixed(5)}
						</span>
						<span>
							${parseFloat(this.force.longitude).toFixed(5)}
						</span>
					</div>
					<img src="${ICONS_PATH + 'location-icon.svg'}" alt="" width="18px" height="24px">
				</div>
			</div>
		`
	}
}