//json(openweather, kingsley)
$(function() {
	var openWeather = "http://api.openweathermap.org/data/2.5/weather?zip=49649,us&units=imperial&appid=0efa11d10d243b4d4804fc1b991d942d";//gets the api key and url
	$.getJSON(openWeather).done(function(data) { //function once api is recieved
	console.log(data); //puts api data into console for viewing
$(function(index, weather) { //output for json into html page, id on html
                  var p = $("<p>").html("The current weather in" + data.name  + "<br/>" + "Temperature: " + "<br/>" + data.main.temp + " degrees F " + "<br/>" +  "Description: " + "<br/>" + data.weather[0].description.toUpperCase() + "<br/>" + "Humidity: " + data.main.humidity + " %" );
                  p.appendTo("#openWeather");

        });
})
});

//json(openweather, Traverse City)
$(function() {
	var openWeather = "http://api.openweathermap.org/data/2.5/weather?zip=49686,us&units=imperial&appid=0efa11d10d243b4d4804fc1b991d942d";//gets the api key and url
	$.getJSON(openWeather).done(function(data) { //function once api is recieved
	console.log(data); //puts api data into console for viewing
$(function(index, weather) { //output for json into html page, id on html
                  var p = $("<p>").html("The current weather in" + data.name  + "<br/>" + "Temperature: " + "<br/>" + data.main.temp + " degrees F " + "<br/>" +  "Description: " + "<br/>" + data.weather[0].description.toUpperCase() + "<br/>" + "Humidity: " + data.main.humidity + " %" );
                  p.appendTo("#openWeather2");

        });
})
});
//newsAPI
$(function(){var url = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=bc11dfdc86234662aadaa5c17b360705';
            $.getJSON(url).done(function(data){
                console.log(data);
                var table = $("<table>").html("<tr>" + "<th>" + "Author" + "</th>" + "<th>" + "Description" + "</th>" + "<th>" + "Published at" + "</th>" + "</tr>" +
                                               "<tr>" +"<td>" + data.articles["0"].author + "</td>"  +
                                                "<td>" + data.articles["0"].description + "</td>"  + 
                                             "<td>" + data.articles["0"].publishedAt + "</td>" + "</tr>" +
                                              "<tr>" +"<td>" + data.articles[1].author + "</td>"  +
                                                "<td>" + data.articles[1].description + "</td>"  + 
                                             "<td>" + data.articles[1].publishedAt + "</td>" + "</tr>" +
                                              "<tr>" +"<td>" + data.articles[2].author + "</td>"  +
                                                "<td>" + data.articles[2].description + "</td>"  + 
                                             "<td>" + data.articles[2].publishedAt + "</td>" + "</tr>" +
                                              "<tr>" +"<td>" + data.articles[3].author + "</td>"  +
                                                "<td>" + data.articles[3].description + "</td>"  + 
                                             "<td>" + data.articles[3].publishedAt + "</td>" + "</tr>");
                table.appendTo("#news");
                });

            
            
})
            


   // $(function(){//brings in pop-up ad/lightbox
        //$(".lightbox").delay(500).fadeIn(5000);//slowly fades in at 5 seconds
       // $(".lightbox").click(function(){//click anywhere on the screen to fade out
          //  $(this).stop().fadeOut();
       // });
//})

    $(window).scroll(function () { //back to top function
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
$(function() {//gallery 1
    var galleryImage = $(".gallery").find("img").first();
	var images = [
    "img/profile_pic.jpg",
    "img/bowling.jpg",
    "img/bowling_scores.jpg",
	"img/friends.jpg",
    "img/halo.jpg",];
	
	var i = 0;
	
	setInterval(function() {
	i = (i + 1) % images.length;
	galleryImage.fadeOut(function() {
		$(this).attr("src", images[i]).css("width", "300").css("height", "300");
		$(this).fadeIn();
	});
	}, 4000); 
});

$(function() {//gallery 2
    var galleryImage = $(".gallery2").find("img").first();
	var images = [
    "img/certs/DB.PNG.",
    "img/certs/jQueryCourse.png",
    "img/certs/PHPCourse.jpg",];
	
	var i = 0;
	
	setInterval(function() {
	i = (i + 1) % images.length;
	galleryImage.fadeOut(function() {
		$(this).attr("src", images[i]).css("width", "300").css("height", "300");
		$(this).fadeIn();
	});
	}, 4000); 
});

