<script>
window.onload = function () {

//Better to construct options first and then pass it as a parameter
var options = {
	animationEnabled: true,
	title: {
		text: "ELECTION RESULT",                
		fontColor: "Peru"
	},	
	axisY: {
		tickThickness: 0,
		lineThickness: 0,
		valueFormatString: " ",
		gridThickness: 0                    
	},
	axisX: {
		tickThickness: 0,
		lineThickness: 0,
		labelFontSize: 18,
		labelFontColor: "Peru"				
	},
	data: [{
		indexLabelFontSize: 26,
		toolTipContent: "<span style=\"color:#62C9C3\">{indexLabel}:</span> <span style=\"color:#CD853F\"><strong>{y}</strong></span>",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		indexLabelFontWeight: 600,
		indexLabelFontFamily: "Verdana",
		color: "#62C9C3",
		type: "bar",
		dataPoints: [
			{ y: 21, label: "21%", indexLabel: "MQM" },
			{ y: 49, label: "49%", indexLabel: "PSP" },
			{ y: 50, label: "50%", indexLabel: "PPPP" },
			{ y: 55, label: "55%", indexLabel: "PMLN" },
			{ y: 61, label: "61%", indexLabel: "PTI" }
		]
	}]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>