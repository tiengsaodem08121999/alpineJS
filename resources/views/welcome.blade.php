<!DOCTYPE html>
<html>
	<head>
		@vite(['resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	</head>
	<body>
        <div class="w-80 flex pr-3" x-data="{ selectedOption: '', options: [{ key: 1, value: 'Option 1' }, { key: 2, value: 'Option 2' }] }">
            <p class="w-1/2">Select option:</p>
            <div class="w-1/2 inline-block relative">
                <select name="my_option" x-model="selectedOption" class="">
                    <template x-for="option in options" :key="option.key">
                        <option :value="option.value" :data-id="option.key" x-text="option.value"></option>
                    </template>
                </select>
            </div>
        </div>
       
        <select name="" id="mySelect"></select>

    </body>

    <script>
        selectValues = { "1": "test 1", "2": "test 2" };
        $.each(selectValues, function(key, value) {
            $('#mySelect')
                .append($("<option></option>")
                    .attr("value", key)
                    .attr("data-id", key)
                    .text(value)
                );
        });
    </script>
</html>