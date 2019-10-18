function CreatePDS(url) {

    var i = 1; // Index
    var jsonOBJ = []; // Object
    var item = {}; // Item

    // Loop All Input
    $(".section input").each(function() {

        // Reset Values
        if (i == 4) {
            i = 1;
            item = {};
        }

        // Store on Array [InputGroupId, FieldSubfieldId, Data]
        switch (i) {
            case 1:
                item["InputGroupId"] = $(this).val();
                break;
            case 2:
                item["FieldSubfieldId"] = $(this).val();
                break;
            case 3:
                // Checkbox
                if ($(this).attr('type') == 'checkbox') {
                    item["Data"] = $(this).is(':checked');
                }
                // Text, File, Etc..
                else {
                    item["Data"] = $(this).val();
                }
                break;
        }

        // Store on JSON 
        if (i == 3) {
            jsonOBJ.push(item);
        }

        i++; // Increment
    });

    // AJAX
    $.ajax({
        url: url,
        method: "POST",
        data: {
            fields: JSON.stringify(jsonOBJ)
        }, // Parse JSON
        success: function(response) {
            console.log(response);
        }
    });
}