// PDS JSON
function ViewPdsTemplate(url) {
    $.ajax({
        method: "POST",
        url: url,
        success: function(data) {
            PrintPDS(data); // HTML
            InitSideTab(); // PDS-Tab JS
        }
    });
}

// PDS HTML
function PrintPDS(data) {

    var SectionName = '';
    var FieldName = '';

    $(".section").append('<div class="tab-content active">'); // START Section Content (active section)     
    for (index in data) {

        // SECTION
        if (SectionName == '') {
            SectionName = data[index].SectionName;

            // SideTab (active tab)
            $(".list-group").append(
                '<a href="#" class="list-group-item text-center active">' +
                SectionName +
                '</a>'
            );

        } else if (SectionName != data[index].SectionName) {
            SectionName = data[index].SectionName;

            $(".section").append('</div>'); // END Section Content
            $(".section").append('<div class="tab-content">'); // START Section Content

            // SideTab
            $(".list-group").append(
                '<a href="#" class="list-group-item text-center">' +
                SectionName +
                '</a>'
            );

        }

        // FIELD
        if (FieldName != data[index].FieldName || FieldName == '') {
            FieldName = data[index].FieldName;

            switch (data[index].InputTypeName) {
                // TEXT [FieldName]
                case 'Text':
                case 'Double':
                case 'Int':
                    $(".tab-content").last().append('<div class="form-group">');
                    $(".tab-content").last().append('<h6>' + data[index].FieldName + '</h6>');
                    $(".tab-content").last().append('<div class="item"></div>'); // Text Item [Subfield]
                    $(".tab-content").last().append('</div>');
                    break;

                    // CHECKBOX [FieldName]
                case 'Checkbox':
                    $(".tab-content").last().append('<div class="form-group">');
                    $(".tab-content").last().append('<h6>' + data[index].FieldName + '</h6>');
                    $(".tab-content").last().append('<div class="item"></div>'); // Checkbox Item [Subfield]
                    $(".tab-content").last().append('</div>');
                    break;

                    // DATE [FieldName]
                case 'Date':
                    $(".tab-content").last().append('<div class="form-group">');
                    $(".tab-content").last().append('<h6>' + data[index].FieldName + '</h6>');
                    $(".tab-content").last().append('<div class="item"></div>'); // Date Item [Subfield]
                    $(".tab-content").last().append('</div>');
                    break;
            }
        }


        $(".item").last().append("<input name='" + data[index].FieldSubfieldId + "' value='" + data[index]
            .InputGroupId + "' type='hidden'>  "); // (InputGroupId)
        $(".item").last().append("<input name='" + data[index].FieldSubfieldId + "' value='" + data[index]
            .FieldSubfieldId + "' type='hidden'>  "); // (FieldSubfieldId)

        // SUBFIELD (data)
        switch (data[index].InputTypeName) {

            // TEXT [SubfieldName, InputTypeName]
            case 'Text':
                $(".item").last().append(data[index].SubfieldName);
                $(".item").last().append(
                    "<input id='" + data[index].FieldSubfieldId + "' " +
                    "type='" + data[index].InputTypeName + "' " +
                    "name='" + data[index].FieldSubfieldId + "' " +
                    "value='' " +
                    "class='form-control input-square'" + "'>"
                );
                break;

                // NUMBER [SubfieldName, InputTypeName]
            case 'Double':
            case 'Int':
                $(".item").last().append(data[index].SubfieldName);
                $(".item").last().append(
                    "<input id='" + data[index].FieldSubfieldId + "' " +
                    "type='" + 'Number' + "' " +
                    "min='1'" +
                    "name='" + data[index].FieldSubfieldId + "' " +
                    "value='' " +
                    "class='form-control input-square'" + "'>"
                );
                break;

                // CHECKBOX [SubfieldName, InputTypeName]
            case 'Checkbox':
                $(".item").last().append('<label class="form-check-label item">');
                $(".item").last().append(
                    '<input ' +
                    'type="checkbox" ' +
                    'name="' + data[index].FieldSubfieldId + '" ' +
                    'class="' + data[index].FieldId + '" ' +
                    "value='" + data[index].SubfieldName + "'" +
                    'onclick="clickEvent(this)"' +
                    '">'
                );

                $(".item").last().append('<span class="form-check-sign">' + data[index].SubfieldName + '</span>');
                $(".item").last().append('<br>');
                $(".item").last().append('</label>');
                break;

                // DATE [SubfieldName, InputTypeName]
            case 'Date':
                $(".item").last().append(data[index].SubfieldName);
                $(".item").last().append(
                    "<input id='" + data[index].FieldSubfieldId + "' " +
                    "type='" + data[index].InputTypeName + "' " +
                    "name='" + data[index].FieldSubfieldId + "' " +
                    "value='2000-01-01' " +
                    "class='form-control input-square'" + "'>"
                );
                break;

                // File [FieldName]
            case 'File':
                $(".item").last().append(data[index].SubfieldName);
                $(".item").last().append(
                    "<input id='" + data[index].FieldSubfieldId + "' " +
                    "type='" + data[index].InputTypeName + "' " +
                    "name='" + data[index].FieldSubfieldId + "' " +
                    "class='form-control-file'" + "'>"
                );
                break;
        }

    }
    $(".section").append('</div>'); // END Section Content
}

// PDS Checkbox UnCheck
function clickEvent(param) {
    var checked = param.checked; // Get check status
    $('.' + $(param).attr("class")).prop("checked", false); // UnCheck all
    if (checked) {
        $(param).prop('checked', true);
    }
}