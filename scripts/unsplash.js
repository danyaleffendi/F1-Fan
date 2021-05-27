//To get the photos with search query of F1
$.getJSON("https://api.unsplash.com/search/photos/?query=f1&client_id=pvC3Ce33tNxVC6D4Ic2ZJW9n_nbpWkbzB9NvjS6GfHY", function (data) {
    console.log(data);

    $.each(data.results, function (index, value) {
        console.log(value);

        var name = value.user.name;
        var description = value.description;
        var imageURL = value.urls.regular;
        $(".gallery").append('<div class="gallery-photo"><p> Photo By: ' + name + '</p><img class="photos" src="' + imageURL + '"/><p>' + description + "</p></div><hr>");
    });
});
