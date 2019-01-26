<script>7
	var json_data = '{"itemId" : "12341822", "itemName" : "basic t-shirt", "price" : "7000", "AvailableColorAndSize" : "red" && "S" || 			"red" && "M" || "red" && "L" || "solid black" && "M" || "solid black" && "L", "freeShiping" : false}';
		obj = JSON.parse(json_data, (key,value) => {

			if (key == 'AvailableColorAndSize'){
				value = value.toLowerCase();
			}

			if (key == 'price'){
				value = value.toUpperCase();
			}

			return value;
		}
	);
		console.log(obj);
		console.log(obj.freeShiping);
</script>