function desactivarSensores() {
	//Una manera
	var estadoSensor1 = document.getElementById('sensor-1').disabled;
	var estadoSensor2 = document.getElementById('sensor-2').disabled;

	// if (!estadoSensor) {
	// 	document.getElementById('sensor-1').disabled = true;
	// 	document.getElementById('sensor-2').disabled = true;
	// } else if (estadoSensor) {
	// 	document.getElementById('sensor-1').disabled = false;
	// 	document.getElementById('sensor-2').disabled = false;
	// }

	//Otra manera
	document.getElementById('sensor-1').disabled = !document.getElementById('sensor-1').disabled;
	document.getElementById('sensor-2').disabled = !document.getElementById('sensor-2').disabled;
}
