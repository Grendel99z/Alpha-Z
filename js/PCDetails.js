function updateTotalPrice() {
	const base_price = parseFloat(document.getElementById("base_price").value);

	const selectedRAM = document.querySelector(
		'input[name="RAMSelection"]:checked'
	);

	const RAMPrice = parseFloat(selectedRAM.value);

	const selectedOS = document.querySelector(
		'input[name="OSSelections"]:checked'
	);

	const OSPrice = parseFloat(selectedOS.value);

	const selectedStorage = document.querySelector(
		'input[name="StorageSelection"]:checked'
	);

	const StoragePrice = parseFloat(selectedStorage.value);

	const selectedGPU = document.querySelector(
		'input[name="GPUSelections"]:checked'
	);

	const GPUPrice = parseFloat(selectedGPU.value);

	const selectedCL = document.querySelector(
		'input[name="CLSelections"]:checked'
	);

	const CLPrice = parseFloat(selectedCL.value);

	const total_price =
		base_price + RAMPrice + OSPrice + StoragePrice + GPUPrice + CLPrice;

	document.getElementById("total_price").value = total_price;
	document.getElementById("productTotal").innerHTML = "$" + total_price + ".00";
}
