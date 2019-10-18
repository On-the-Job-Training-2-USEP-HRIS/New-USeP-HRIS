function SearchUser(url, LastName, FirstName, MiddleName) {
    $.ajax({
        method: "POST",
        url: url,

        data: {
            LastName: LastName,
            FirstName: FirstName,
            MiddleName: MiddleName
        },

        success: function(data) {
            console.log(data);
        }
    });
}

function InitKeyUp(url, LastName, FirstName, MiddleName) {
    // Keyup LastName
    $(LastName).keyup(function(e) {
        SearchUser(
            url,
            $(LastName).val(),
            $(FirstName).val(),
            $(MiddleName).val()
        );
    });

    // Keyup FirstName
    $(FirstName).keyup(function(e) {
        SearchUser(
            url,
            $(LastName).val(),
            $(FirstName).val(),
            $(MiddleName).val()
        );
    });

    // Keyup MiddleName
    $(MiddleName).keyup(function(e) {
        SearchUser(
            url,
            $(LastName).val(),
            $(FirstName).val(),
            $(MiddleName).val()
        );
    });
}