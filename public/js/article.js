$(function () {

//
//     $("#form_article").submit(function() {
//         $.ajax({
//             url: BASE_URL + 'save_article',
//             type: "POST",
//             dataType: "json",
//             data: $(this).serialize(),
//             success: function(json) {
//                 if (json["status"] == 1) {
//                     $('#msgArticle').html('There was an error registering the article!');
//                 } else {
//                     $('#msgArticle').html('Article successfully registered!');
//
//                     $('#msgClienteOK').click(function () {
//                         window.location = BASE_URL + 'articles_panel';
//                     });
//
//                 }
//             },
//             error: function(response) {
//                 console.log(response);
//             }
//         })
//         return false;
//     });

    $('.close-modal').click(function () {
        $('#myModal').modal('hide');
    })

})

function delete_article(id) {
    $('#myModal').modal('show');

    $('#delete-article-yes').click(function () {
        window.location = BASE_URL + 'delete_article/'+ id;
    })
}


