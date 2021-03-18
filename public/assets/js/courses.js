var per_page = 5;
var offset = 0;

$(document).ready(function(){
    initializeCourses();

    $("#apply-filters-btn").click(applyFilters);
});

function initializeCourses(){
    offset = 0;

    $.ajax({
        url: "/courses/pagination",
        method: "GET",
        data: {
            offset: offset,
            per_page: per_page
        },
        success: function (data){
            displayCourses(data.courses);
        },
        error: function (xhr, statusText, error){

        }
    });
}

function displayCourses(courses){
    let content = ``;

    let container = $(".course-container");
    $(container).html("");

    courses.forEach(function(course){
        content += `<div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="storage/${ course.images[0].src}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="../product_single.blade.php" class="fh5co_magna py-2"> ${ course.name }</a>
                        <br>
                        <a href="#" class="fh5co_mini_time py-1 pb-3"> ${course.author.first_name + " " + course.author.last_name} -
                        ${course.release_date} </a>
                        <div class="fh5co_consectetur">${course.description.substr(0, 50)}...</div>
                    </div>
                </div>`;
    });

    $(container).append(content);
}

function applyFilters(){
    let filters = {};

    let languages = [];
    $(".language-filter").each(function(){
        if($(this).is(":checked"))
            languages.push($(this).val());
    })
    if(languages.length > 0)
        filters["languages"] = languages;

    if($("#category-filter").val() != "-1")
        filters["category"] = $("#category-filter").val();

    if($("#difficulty-filter").val() != "-1")
        filters["difficulty"] = $("#difficulty-filter").val();

    if($("#course-search").val() != "")
        filters["search"] = $("#course-search").val();

    console.log(filters);
    $.ajax({
       url: "/courses/pagination",
        method: "GET",
        data: filters,
        success: function (data){
           console.log("Courses fetched successfuly.");
           console.log(data);
           displayCourses(data.courses);
        },
        error: function (xhr, statusText, error){
           console.log(xhr.responseText);
           alert("Error loading courses");
        }
    });
}
