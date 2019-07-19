 $(".remove").click(function () {
        var c_id = $(this).parents("tr").attr("c_id");
        if (confirm('Are you sure to remove this record ?'))
        {
                            window.location = "";  

        }
        });
